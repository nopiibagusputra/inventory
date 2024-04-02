<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Suppliers;

class ProductController extends Controller
{
    
    public function listBahanBaku(){
        $data = Products::select('products.nama as nama_produk', 'products.satuan as satuan_produk', 'products.supplierId as id_supplier', 'products.id as id_produk' , 'suppliers.nama as nama_supplier', 'suppliers.id as id_supplier')
                        ->join('suppliers', 'suppliers.id', '=', 'products.supplierId')
                        ->get();
        $supplier = Suppliers::all();
        return view('admin.listBahanBaku', [
            'data' => $data,
            'supplier' => $supplier
        ]);
    }

    public function storeBahanBaku(Request $request){
        $this->validate($request, [
            'supplierId' => 'required',
            'materialName' =>'required',
            'materialtype' =>'required'
        ]);

        Products::create([
            'supplierId' => $request->supplierId,
            'nama'   => $request->materialName,
            'satuan' => $request->materialtype
        ]);

        $request->session()->flash('info', 'Bahan Baku Berhasil Ditambahkan!');
        return redirect('/admin/data/bahan');
    }

    public function updateBahanBaku(Request $request){
        $data = Products::findOrFail($request->material_Id);
        $data->supplierId = $request->supplierId;
        $data->nama = $request->materialName;
        $data->satuan = $request->materialtype;
        $data->save();

        return response()->json(['success' => true]);
    }

    public function deleteBahanBaku(Request $request){
        $data = Products::findOrFail($request->id);
        $data->delete();

        return response()->json([
            'success' => true
        ]);
    }
}
