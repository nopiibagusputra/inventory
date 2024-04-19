<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Variants;
use App\Models\Products;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Variants::select('products.nama as namaProduct', 'products.satuan as satuanProduct', 'variants.nama as namaVariant', 'variants.stock as stock', 'variants.safetystock as safetystock')
                            ->join('products', 'products.id', '=', 'variants.productId')
                            ->whereRaw('variants.stock < variants.safetystock')
                            ->get();
        return view('admin.dashboard', [
            'data' => $data
        ]);
    }

}
