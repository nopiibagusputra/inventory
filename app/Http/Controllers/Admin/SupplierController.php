<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Suppliers;

class SupplierController extends Controller
{
    
    public function listSuppliers(){
        $data = Suppliers::all();

        return view('admin.listSuppliers', [
            'data' => $data
        ]);
    }

    public function storeSuppliers(Request $request){
        $this->validate($request, [
            'supplierName' =>'required',
            'supplierKode' =>'required',
            'supplierAlamat' =>'required'
        ]);

        Suppliers::create([
            'kode' => $request->supplierKode,
            'nama'   => $request->supplierName,
            'alamat' => $request->supplierAlamat
        ]);

        $request->session()->flash('info', 'Supplier Berhasil Ditambahkan!');
        return redirect('/admin/data/bahan/suppliers');
    }

    public function updateSuppliers(Request $request){
        $data = Suppliers::findOrFail($request->supplier_id);
        $data->kode = $request->supplierKode;
        $data->nama = $request->supplierName;
        $data->alamat = $request->supplierAlamat;
        $data->save();

        return response()->json(['success' => true]);
    }

    public function deleteSuppliers(Request $request){
        $data = Suppliers::findOrFail($request->id);
        $data->delete();

        return response()->json([
            'success' => true
        ]);
    }
}
