<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Variants;
use App\Models\Products;
use App\Models\StockOuts;
use App\Models\Suppliers;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Variants::select('products.nama as namaProduct', 'products.satuan as satuanProduct', 'variants.nama as namaVariant', 'variants.stock as stock', 'variants.safetystock as safetystock')
                            ->join('products', 'products.id', '=', 'variants.productId')
                            ->whereRaw('variants.stock < variants.safetystock')
                            ->get();

        $stockOuts = StockOuts::selectRaw('
                            stock_outs.variantId, 
                            DATE(stock_outs.created_at) as sale_date, 
                            SUM(stock_outs.stock) as total_sold, 
                            variants.nama as nama_variant, 
                            products.nama as nama_product
                        ')
                        ->join('variants', 'stock_outs.variantId', '=', 'variants.id')
                        ->join('products', 'variants.productId', '=', 'products.id')
                        ->groupBy('stock_outs.variantId', 'sale_date', 'variants.code', 'products.code')
                        ->orderBy('total_sold', 'DESC')
                        ->get();

        $countStock = Variants::count('code');
        $countProduct = Products::count('code');
        $countSupplier = Suppliers::count('kode');
        $sumStockOut = StockOuts::sum('stock');

        return view('admin.dashboard', [
            'data' => $data,
            'stock_out' => $stockOuts,
            'allVariants' => $countStock,
            'allProducts' => $countProduct,
            'allSuppliers' => $countSupplier,
            'sumStockOuts' => $sumStockOut
        ]);
    }

    public function stock_out_view() {

    }

}
