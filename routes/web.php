<?php

use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Products\ProductIndex;
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

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth:sanctum', 'verified']], function() {
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/products', ProductIndex::class)->name('products.index');
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');