<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Products;
use App\Models\Variants;
use App\Models\Suppliers;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

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

    public function listVariant(){
        $data = Variants::select('products.nama as nama_produk', 'products.id as id_produk', 'variants.nama as nama_variant', 'variants.id as id_variant', 'variants.stock as stock_variant', 'variants.harga as harga_variant')
                            ->join('products', 'products.id', '=', 'variants.productId')
                            ->get();

        return view('admin.listVariant', [
            'data' => $data
        ]);
    }

    public function storeVariant(Request $request){
        $this->validate($request, [
            'nama'  =>'required',
            'harga' =>'required'
        ]);

        Variants::create([
            'productId' => $request->item_id,
            'nama'  => $request->nama,
            'stock' => 0,
            'harga' => $request->harga
        ]);

        $request->session()->flash('info', 'Variant Berhasil Ditambahkan!');
        return redirect('/admin/data/bahan');
    }

    public function updateVariant(Request $request){
        $data = Variants::findOrFail($request->id_variant);
        $data->harga = $request->harga;
        $data->nama = $request->nama;
        $data->save();

        return response()->json(['success' => true]);
    }

    public function deleteVariant(Request $request){
        $data = Variants::findOrFail($request->id);
        $data->delete();

        return response()->json([
            'success' => true
        ]);
    }
}
