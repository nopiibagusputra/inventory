<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Products;
use App\Models\Variants;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function listBahanBaku(){
        $data = Products::all();
        return view('admin.listBahanBaku', [
            'data' => $data
        ]);
    }

    public function storeBahanBaku(Request $request){
        $this->validate($request, [
            'materialName' =>'required',
            'materialtype' =>'required'
        ]);

        Products::create([
            'nama'   => $request->materialName,
            'satuan' => $request->materialtype
        ]);

        $request->session()->flash('info', 'Bahan Baku Berhasil Ditambahkan!');
        return redirect('/admin/data/bahan');
    }

    public function updateBahanBaku($id, Request $request){

    }

    public function deleteBahanBaku($id){

    }

    public function storeVariant(Request $request){
        $this->validate($request, [
            'nama'  =>'required',
            'stock' =>'required',
            'harga' =>'required'
        ]);

        Variants::create([
            'productId' => $request->item_id,
            'nama'  => $request->nama,
            'stock' => $request->stock,
            'harga' => $request->harga
        ]);

        $request->session()->flash('info', 'Variant Berhasil Ditambahkan!');
        return redirect('/admin/data/bahan');
    }
}
