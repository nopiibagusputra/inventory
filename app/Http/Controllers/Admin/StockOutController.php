<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StockOuts;
use App\Models\Products;
use App\Models\Variants;
use App\Models\Variant_details;
use Carbon\Carbon;

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

    public function storeOut(Request $request)
    {
        $this->validate($request, [
            'jumlah' => 'required|integer|min:1',
            'variantId' => 'required|exists:variants,id',
            'userId' => 'required|exists:user,id_user'
        ]);

        $variant = Variants::find($request->variantId);
        $jumlah = $request->jumlah;
        $validasi = $variant->stock - $jumlah;

        if ($validasi < 0) {
            $request->session()->flash('info', 'Gagal, Stock kurang!');
            return redirect('/admin/data/bahan/variant/out');
        }

        // Mencari data variant_details yang sesuai
        $details = Variant_details::where('variantsId', $request->variantId)
            ->where('status', '!=', 'out')
            ->orderBy('item_in', 'asc')
            ->take($jumlah)
            ->get();

        // Mengurangi stock pada tabel variants
        $variant->stock = $validasi;
        $variant->save();

        $updatedCount = 0;

        // Update status dan date_item_out
        foreach ($details as $detail) {
            $detail->status = 'out';
            $detail->item_out = Carbon::now();
            $detail->save();
            $updatedCount++;
            if ($updatedCount >= $jumlah) {
                break;
            }
        }

        // Logika tambahan untuk mengupdate stock_outs jika diperlukan
        StockOuts::create([
            'userId' => $request->userId,
            'kode_pemesanan' => $this->generateKodePemesanan($request->userId, $request->variantId),
            'variantId' => $request->variantId,
            'stock' => $jumlah,
        ]);

        $request->session()->flash('info', 'Request berhasil dikirim!');
        return redirect('/admin/data/bahan/variant/out');
    }

    private function generateKodePemesanan($userId, $variantId)
    {
        $tanggal = date('Ymd');
        $waktu = date('His');
        return "SO-".$userId.$variantId."-".str_pad($tanggal, 8, '0', STR_PAD_RIGHT).str_pad($waktu, 6, '0', STR_PAD_RIGHT);
    }
}
