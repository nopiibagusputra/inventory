<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RestockController extends Controller
{
    public function requestRestock(Request $request){
        $this->validate($request, [
            'productId' =>'required',
            'variantId' =>'required',
            'userId'    =>'required',
            'stock'     =>'required',
            'lead_time' =>'required',
            'total_harga' =>'required'
        ]);

        $request->session()->flash('info', 'Stock Berhasil Ditambahkan!');
        return redirect('/admin/data/bahan');
    }
}
