<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StockOuts;
use App\Models\Products;
use App\Models\Variants;

class StockOutController extends Controller
{
    public function listOut(){
        $data = StockOuts::select( 'variants.id as variantId', 'variants.nama as namaVariant', 'products.id as productId', 'products.nama as namaProduct', 'user.nama_karyawan as nama_karyawan', 'stock_outs.*')
                            ->join('user', 'user.id_user', '=', 'stock_outs.userId')
                            ->join('variants', 'variants.id', '=', 'stock_outs.variantId')
                            ->join('products', 'products.id', '=','variants.productId')
                            ->get();

        $bahan_baku = Variants::select('variants.id as idVariant', 'products.id as idProduct', 'variants.nama as namaVariant', 'variants.stock as stockVariant', 'products.nama as namaProduct')
                                ->join('products', 'products.id', '=', 'variants.productId')
                                ->get();

        $products = Products::all();
        return view('admin.listBahanKeluar', [
            'data' => $data,
            'bahan' => $bahan_baku,
            'products' => $products
        ]); 
    }

    public function getVariants($productId)
    {
        $variants = Variants::select('variants.id as idVariant', 'variants.nama as namaVariant', 'variants.stock as stockVariant')
                            ->where('productId', $productId)
                            ->get();

        return response()->json($variants);
    }

    public function storeOut(Request $request){
        $this->validate($request, [
            'jumlah' =>'required',
            'variantId'  =>'required',
            'userId' =>'required'
        ]);

        $tanggal = date('Ymd');
        $waktu = date('His');
        $total_harga = $request->variantPrice * $request->restock;
        $kodePemesanan = "SO-".$request->userId.$request->variantId."-" . str_pad($tanggal, 8, '0', STR_PAD_RIGHT) . str_pad($waktu, 6, '0', STR_PAD_RIGHT);

        $variant = Variants::where('id', $request->variantId)->first();
        $validasi = $variant->stock - $request->jumlah;

        if($validasi <= 0){
            $request->session()->flash('info', 'Gagal, Stock kurang!');
            return redirect('/admin/data/bahan/variant/out');
        }

        $variant->stock = $validasi;
        $variant->save();

        if($variant){
            StockOuts::create([
                'userId' => $request->userId,
                'kode_pemesanan' => $kodePemesanan,
                'variantId' => $request->variantId,
                'stock' => $request->jumlah,
            ]);

            $request->session()->flash('info', 'Request berhasil dikirim!');
            return redirect('/admin/data/bahan/variant/out');
        }

        $request->session()->flash('info', 'Request gagal dikirim!');
        return redirect('/admin/data/bahan/variant/out');

    }
}
