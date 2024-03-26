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
        $data = Products::select('products.nama as nama_produk', 'products.satuan as satuan_produk', 'products.supplierId', 'products.id as id_produk' , 'suppliers.nama as nama_supplier', 'suppliers.id as id_supplier')
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

    public function updateBahanBaku($id, Request $request){

    }

    public function deleteBahanBaku($id){

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
            'kode' => $request->supplierName,
            'nama'   => $request->supplierKode,
            'alamat' => $request->supplierAlamat
        ]);

        $request->session()->flash('info', 'Supplier Berhasil Ditambahkan!');
        return redirect('/admin/data/suppliers');
    }

    public function updateSuppliers($id, Request $request){

    }

    public function deleteSuppliers($id){

    }

    public function listVarian(){
        $data = Variants::select('products.nama as nama_produk', 'products.id as id_produk', 'variants.nama as nama_variant', 'variants.id as id_variant', 'variants.stock as stock_variant', 'variants.harga as harga_variant')
                            ->join('products', 'products.id', '=', 'variant.productId')
                            ->get();

        return view('admin.listVarian', [
            'data' => $data
        ]);
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

    public function updateVariant($id, Request $request){

    }

    public function deleteVariant($id){

    }
}
