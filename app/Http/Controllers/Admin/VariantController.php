<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Variants;

class VariantController extends Controller
{
    public function listVariant(){
        $data = Variants::select('variants.code','products.nama as nama_produk', 'products.id as id_produk', 'products.satuan as satuan', 'variants.nama as nama_variant', 'variants.id as id_variant', 'variants.safetystock as safety_stock', 'variants.stock as stock_variant', 'variants.harga as harga_variant')
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
