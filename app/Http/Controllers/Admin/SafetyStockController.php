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
        // Ambil data penjualan harian maksimum, rata-rata, dan standar deviasi dari tabel stock_outs
        $dailySalesStats = DB::table('stock_outs')
            ->select('variantId', DB::raw('MAX(stock) as max_daily_sales'), DB::raw('FLOOR(AVG(stock)) as avg_daily_sales'), DB::raw('STDDEV(stock) as stddev_daily_sales'))
            ->groupBy('variantId')
            ->get();

        // Ambil data waktu tunggu maksimum dan rata-rata dari tabel restock
        $leadTimeStats = DB::table('restocks')
            ->select('variantId', DB::raw('MAX(lead_time) as max_lead_time'), DB::raw('FLOOR(AVG(lead_time)) as avg_lead_time'))
            ->groupBy('variantId')
            ->get();

        // Tentukan Z-value berdasarkan service level (misalnya, 1.65 untuk 95% service level)
        $serviceLevelZ = 1.65;

        // Hitung safety stock untuk setiap variantId
        $safetyStocks = [];
        foreach ($dailySalesStats as $salesStats) {
            $variantId = $salesStats->variantId;
            $stddevSales = $salesStats->stddev_daily_sales;

            // Pastikan data waktu tunggu maksimum dan rata-rata ditemukan
            $leadTimeStat = $leadTimeStats->where('variantId', $variantId)->first();
            $avgTime = $leadTimeStat ? $leadTimeStat->avg_lead_time : 0;

            // Kalkulasi safety stock menggunakan standar deviasi dan service level
            $safetyStock = $serviceLevelZ * $stddevSales * sqrt($avgTime);
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
