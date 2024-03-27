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
    Route::get('admin/dashboard', [Admin\AdminController::class, 'index'])->name('admin.dashboard');
    
    Route::get('admin/data/bahan', [Admin\AdminController::class, 'listBahanBaku'])->name('list.bahan');
    Route::get('admin/data/bahan/variant', [Admin\AdminController::class, 'listVariant'])->name('list.variant');
    Route::get('admin/data/bahan/suppliers', [Admin\AdminController::class, 'listSuppliers'])->name('list.suppliers');
    
    Route::post('admin/data/bahan', [Admin\AdminController::class, 'storeBahanBaku'])->name('store.bahan');
    Route::post('admin/data/bahan/variant', [Admin\AdminController::class, 'storeVariant'])->name('store.variant');
    Route::post('admin/data/bahan/suppliers', [Admin\AdminController::class, 'storeSuppliers'])->name('store.suppliers');

    Route::put('admin/data/bahan', [Admin\AdminController::class, 'updateBahanBaku'])->name('update.bahan');
    Route::put('admin/data/bahan/variant', [Admin\AdminController::class, 'updateVariant'])->name('update.variant');
    Route::put('admin/data/bahan/suppliers', [Admin\AdminController::class, 'updateSuppliers'])->name('update.suppliers');

    Route::delete('admin/data/bahan', [Admin\AdminController::class, 'deleteBahanBaku'])->name('delete.bahan');
    Route::delete('admin/data/bahan/variant', [Admin\AdminController::class, 'deleteVariant'])->name('delete.variant');
    Route::delete('admin/data/bahan/suppliers', [Admin\AdminController::class, 'deleteSuppliers'])->name('delete.suppliers');

});
