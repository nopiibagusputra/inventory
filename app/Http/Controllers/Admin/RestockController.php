<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restocks;
use App\Models\Products;
use App\Models\Variants;
use App\Models\Variant_details;
use DB;

class RestockController extends Controller
{
    public function listRestock(){
        $data = Restocks::select('products.id as idProduct', 'products.satuan as satuan', 'products.nama as namaProduct', 'variants.id as idVariant', 'variants.id as idVariant', 'variants.nama as namaVariant', 'user.id_user as idUser', 'user.nama_karyawan as userName', 'restocks.*')
                        ->join('products', 'products.id', '=', 'restocks.productId')
                        ->join('variants', 'variants.id', '=', 'restocks.variantId')
                        ->join('user', 'user.id_user', '=', 'restocks.userId')
                        ->get();
        
        return view('admin.listRestock', [
            'data' => $data
        ]);
    }

    public function requestRestock(Request $request){
        $this->validate($request, [
            'productId' =>'required',
            'variantId' =>'required',
            'userId'    =>'required',
            'restock'   =>'required',
            'lead_time' =>'required',
            'variantPrice' =>'required'
        ]);

        $tanggal = date('Ymd');
        $waktu = date('His');
        $total_harga = $request->variantPrice * $request->restock;
        $kodePemesanan = "PO-" . str_pad($tanggal, 8, '0', STR_PAD_RIGHT) . str_pad($waktu, 6, '0', STR_PAD_RIGHT);

        Restocks::create([
            'kode_pemesanan' => $kodePemesanan,
            'productId' => $request->productId,
            'variantId' => $request->variantId,
            'userId'    => $request->userId,
            'stock'     => $request->restock, 
            'lead_time' => $request->lead_time,
            'status'    => 0,
            'total_harga' => $total_harga
        ]);

        $request->session()->flash('info', 'Request berhasil dikirim!');
        return redirect('/admin/data/bahan/variant/restock');
    }

    public function approveRestock(Request $request){
        $stock_lama = Variants::where('id', $request->variantId)->first();
        $stock_baru = $stock_lama->stock + $request->jumlahBarang;
        $po = Restocks::where('kode_pemesanan', $request->kode)->first();

        if($request->kondisiBarang == 2 && $po->stock != $request->jumlahBarang){
            $po = Restocks::where('kode_pemesanan', $request->kode)->first();
            $po->status = $request->kondisiBarang;
            $po->stock_in = $request->jumlahBarang;
            $po->notes  = $request->catatan;
            $po->save();

            $request->session()->flash('info', 'Request berhasil divalidasi! dengan catatan');
            return redirect('/admin/data/bahan/variant/restock');
        }else {

            // Create variant_detail entries based on the stock value
            for ($i = 0; $i < $request->jumlahBarang; $i++) {
                DB::table('variant_detail')->insert([
                    'variantsId' => $request->variantId,
                    'item_in' => date('Ymd'),
                    'status' => 'in',
                ]);
            }

            $data = Variants::where('id', $request->variantId)->first();
            $data->stock = $stock_baru;
            $data->save();
    
            $po->status = $request->kondisiBarang;
            $po->stock_in = $request->jumlahBarang;
            $po->notes  = null;
            $po->save();
            
            $request->session()->flash('info', 'Request berhasil disetujui!');
            return redirect('/admin/data/bahan/variant');
        }


       
    }
}
