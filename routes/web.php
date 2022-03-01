<?php

use App\Http\Controllers\Frontend\Auth\LoginController;
use App\Http\Controllers\Frontend\RedirectController;
use App\Http\Livewire\Admin\BlackList\Edit as BlackListEdit;
use App\Http\Livewire\Admin\BlackList\Index as BlackListIndex;
use App\Http\Livewire\Admin\Dashboard\Index as DashboardIndex;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('dashboard', DashboardIndex::class)->name('dashboard');
    Route::get('black-list', BlackListIndex::class)->name('black-list.index');
    Route::get('black-list/{blacklist}', BlackListEdit::class)->name('black-list.edit');
});

Route::group([], function (){
    Route::resource('login', LoginController::class);
});

Route::get('redirect', RedirectController::class)->name('redirect');

require __DIR__.'/auth.php';
