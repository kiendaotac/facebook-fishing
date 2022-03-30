<?php

use App\Http\Controllers\Frontend\Auth\LoginController;
use App\Http\Controllers\Frontend\RedirectController;
use App\Http\Livewire\Admin\Account\Index as AccountIndex;
use App\Http\Livewire\Admin\BlackList\Edit as BlackListEdit;
use App\Http\Livewire\Admin\BlackList\Create as BlackListCreate;
use App\Http\Livewire\Admin\BlackList\Index as BlackListIndex;
use App\Http\Livewire\Admin\Dashboard\Index as DashboardIndex;
use App\Http\Livewire\Admin\Redirect\Edit as RedirectEdit;
use App\Http\Livewire\Admin\Redirect\Create as RedirectCreate;
use App\Http\Livewire\Admin\Redirect\Index as RedirectIndex;
use App\Http\Livewire\Admin\Notification\Index as NotificationIndex;
use App\Http\Livewire\Admin\Notification\Create as NotificationCreate;
use App\Http\Livewire\Admin\Notification\Edit as NotificationEdit;
use App\Http\Livewire\Admin\Media\Index as MediaIndex;
use App\Http\Livewire\Admin\Media\Create as MediaCreate;
use App\Http\Livewire\Admin\Media\Edit as MediaEdit;
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

Route::get('/',[LoginController::class, 'home'])->name('home');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('dashboard', DashboardIndex::class)->name('dashboard');
    Route::get('black-list', BlackListIndex::class)->name('black-list.index');
    Route::get('black-list/create', BlackListCreate::class)->name('black-list.create');
    Route::get('black-list/{blacklist}', BlackListEdit::class)->name('black-list.edit');
    Route::get('redirect', RedirectIndex::class)->name('redirect.index');
    Route::get('redirect/create', RedirectCreate::class)->name('redirect.create');
    Route::get('redirect/{redirect}', RedirectEdit::class)->name('redirect.edit');
    Route::get('account', AccountIndex::class)->name('account.index');
    Route::get('notification', NotificationIndex::class)->name('notification.index');
    Route::get('notification/create', NotificationCreate::class)->name('notification.create');
    Route::get('notification/{notification}', NotificationEdit::class)->name('notification.edit');
    Route::get('media', MediaIndex::class)->name('media.index');
    Route::get('media/create', MediaCreate::class)->name('media.create');
    Route::get('media/{media}', MediaEdit::class)->name('media.edit');
});

Route::group([], function () {
    Route::resource('login', LoginController::class);
});

Route::get('redirect', RedirectController::class)->name('redirect');

Route::get('/greeting/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'vi'])) {
        abort(400);
    }
    app()->setLocale($locale);

    session()->put('locale', $locale);

    return redirect()->route('login.index');

})->name('language');

require __DIR__ . '/auth.php';
