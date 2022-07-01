<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\Admin\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('dashbord', DashbordController::class)->name('dashbord');
Route::prefix('dashbord')->name('dashbord.')->group(function(){
 Route::prefix('products')->name('products.')->controller(ProductController::class)->group(function(){
    Route::get('/',  'index')->name('index');
    Route::get('//create',  'create')->name('create');
    Route::get('//edit/{id}',  'edit')->name('edit');
    Route::post('//store', 'store')->name('store');
    Route::Put('//update/{id}', [ProductController::class, 'update'])->name('update');
    Route::patch('//update/{id}/status/{status}', 'updateStatus')->name('updateStatus');
    Route::delete('//destroy/{id}',  'destroy')->name('destroy');
});
});


