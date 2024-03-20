<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Variant;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function listBahanBaku(){
        $data = Product::all();
        return view('admin.listBahanBaku', [
            'data' => $data
        ]);
    }

    public function storeBahanBaku(Request $request){

    }

    public function updateBahanBaku($id, Request $request){

    }

    public function deleteBahanBaku($id){

    }
}
