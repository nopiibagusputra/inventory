<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restocks;
use App\Models\Variants;
use DB;

class SafetyStockController extends Controller
{
    public function safetyStock()
    {
        // Ambil data penjualan harian maksimum dan rata-rata dari tabel stock_outs
        $maxDailySales = DB::table('stock_outs')
            ->select('variantId', DB::raw('MAX(stock) as max_daily_sales'))
            ->groupBy('variantId')
            ->get();

        $avgDailySales = DB::table('stock_outs')
            ->select('variantId', DB::raw('FLOOR(AVG(stock)) as avg_daily_sales'))
            ->groupBy('variantId')
            ->get();

        // Ambil data waktu tunggu maksimum dan rata-rata dari tabel restock
        $maxLeadTime = DB::table('restocks')
            ->select('variantId', DB::raw('MAX(lead_time) as max_lead_time'))
            ->groupBy('variantId')
            ->get();

        $avgLeadTime = DB::table('restocks')
            ->select('variantId', DB::raw('FLOOR(AVG(lead_time)) as avg_lead_time'))
            ->groupBy('variantId')
            ->get();

        // Hitung safety stock untuk setiap variantId
        $safetyStocks = [];
        foreach ($maxDailySales as $maxSale) {
            $variantId = $maxSale->variantId;
            $maxSales = $maxSale->max_daily_sales;

            // Pastikan data rata-rata penjualan harian ditemukan
            $avgSalesData = $avgDailySales->where('variantId', $variantId)->first();
            $avgSales = $avgSalesData ? $avgSalesData->avg_daily_sales : 0;

            // Pastikan data waktu tunggu maksimum dan rata-rata ditemukan
            $maxLeadTimeVariant = $maxLeadTime->where('variantId', $variantId)->first();
            $maxTime = $maxLeadTimeVariant ? $maxLeadTimeVariant->max_lead_time : 0;

            $avgTimeVariant = $avgLeadTime->where('variantId', $variantId)->first();
            $avgTime = $avgTimeVariant ? $avgTimeVariant->avg_lead_time : 0;

            // Kalkulasi safety stock
            $safetyStock = ($maxSales * $maxTime) - ($avgSales * $avgTime);
            $safetyStocks[$variantId] = $safetyStock;
        }

        return $safetyStocks;
    }

    public function updateSafetyStock(Request $request)
    {
        // Panggil fungsi safetyStock untuk mendapatkan nilai safety stock untuk setiap variantId
        $safetyStocks = $this->safetyStock();

        // Perbarui nilai safety stock di tabel variants
        foreach ($safetyStocks as $variantId => $safetyStock) {
            // Perbarui kolom safetystock berdasarkan variantId
            DB::table('variants')
                ->where('id', $variantId)
                ->update(['safetystock' => $safetyStock]);
        }

        $request->session()->flash('info', 'Safety Stock berhasil dikalkulasi!');
        return redirect('/admin/dashboard');
    }
}
