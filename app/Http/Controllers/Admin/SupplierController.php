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

    public function generateKodePerusahaan($namaPerusahaan) {
        $words = explode(' ', $namaPerusahaan);
        $secondWord = isset($words[1]) ? $words[1] : '';
    
        $code = strtoupper(substr($secondWord, 0, 4));
    
        if (strlen($code) < 4 && isset($words[0])) {
            $firstWord = $words[0];
            $code .= strtoupper(substr($firstWord, 0, 4 - strlen($code)));
        }

        $suffix = '';
        $counter = 1;
        while (Suppliers::where('kode', $code . $suffix)->exists()) {
            $suffix = strval($counter);
            $counter++;
        }
    
        return $code . $suffix;
    }

    public function storeSuppliers(Request $request){
        $this->validate($request, [
            'supplierName' =>'required',
            'supplierAlamat' =>'required'
        ]);

        $kodePerusahaan = $this->generateKodePerusahaan($request->supplierName);

        Suppliers::create([
            'kode' => $kodePerusahaan,
            'nama'   => $request->supplierName,
            'alamat' => $request->supplierAlamat
        ]);

        $request->session()->flash('info', 'Supplier Berhasil Ditambahkan!');
        return redirect('/admin/data/bahan/suppliers');
    }

    public function updateSuppliers(Request $request){
        $data = Suppliers::findOrFail($request->supplier_id);
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
