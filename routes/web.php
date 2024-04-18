<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [Auth\AuthController::class, 'index'])->name('login');
Route::get('/logout', [Auth\AuthController::class, 'logout'])->name('logout');
Route::post('/auth', [Auth\AuthController::class, 'login'])->name('auth_login');

//level admin
Route::middleware('auth', 'validatelevels:admin')->group(function () {
    Route::get('admin/dashboard', [Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    
    Route::get('admin/data/bahan', [Admin\ProductController::class, 'listBahanBaku'])->name('list.bahan');
    Route::get('admin/data/bahan/variant', [Admin\VariantController::class, 'listVariant'])->name('list.variant');
    Route::get('admin/data/bahan/suppliers', [Admin\SupplierController::class, 'listSuppliers'])->name('list.suppliers');
    Route::get('admin/data/bahan/variant/restock', [Admin\RestockController::class, 'listRestock'])->name('list.restock');
    Route::get('admin/data/bahan/variant/out', [Admin\StockOutController::class, 'listOut'])->name('list.out');
    
    Route::post('admin/data/bahan', [Admin\ProductController::class, 'storeBahanBaku'])->name('store.bahan');
    Route::post('admin/data/bahan/variant', [Admin\VariantController::class, 'storeVariant'])->name('store.variant');
    Route::post('admin/data/bahan/suppliers', [Admin\SupplierController::class, 'storeSuppliers'])->name('store.suppliers');
    Route::post('admin/data/bahan/variant/restock', [Admin\RestockController::class, 'requestRestock'])->name('request.restock');
    Route::post('admin/data/bahan/variant/out', [Admin\StockOutController::class, 'storeOut'])->name('store.out');

    Route::put('admin/data/bahan', [Admin\ProductController::class, 'updateBahanBaku'])->name('update.bahan');
    Route::put('admin/data/bahan/variant', [Admin\VariantController::class, 'updateVariant'])->name('update.variant');
    Route::put('admin/data/bahan/suppliers', [Admin\SupplierController::class, 'updateSuppliers'])->name('update.suppliers');
    
    Route::patch('admin/data/bahan/variant/restock/update', [Admin\RestockController::class, 'approveRestock'])->name('update.restock');

    Route::delete('admin/data/bahan', [Admin\ProductController::class, 'deleteBahanBaku'])->name('delete.bahan');
    Route::delete('admin/data/bahan/variant', [Admin\VariantController::class, 'deleteVariant'])->name('delete.variant');
    Route::delete('admin/data/bahan/suppliers', [Admin\SupplierController::class, 'deleteSuppliers'])->name('delete.suppliers');

});
