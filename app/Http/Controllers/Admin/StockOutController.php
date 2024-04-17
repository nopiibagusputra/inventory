<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StockOuts;

class StockOutController extends Controller
{
    public function listOut(){
        $data = StockOuts::select('products.id as idProduct', 'products.nama as namaProduct', 'variants.id as idVariant', 'variants.id as idVariant', 'variants.nama as namaVariant', 'user.id_user as idUser', 'user.nama_karyawan as userName', 'stock_outs.*')
                            ->join('products', 'products.id', '=', 'stock_outs.productId')
                            ->join('variants', 'variants.id', '=', 'stock_outs.variantId')
                            ->join('user', 'user.id_user', '=', 'stock_outs.userId')
                            ->get();

        return view('admin.listBahanKeluar', [
            'data' => $data
        ]);
    }
}
