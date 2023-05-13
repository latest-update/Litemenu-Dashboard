<?php

use App\Http\Controllers\TableController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Dashboard\Pages\Analytics;
use App\Http\Livewire\Dashboard\Pages\Company\Branches;
use App\Http\Livewire\Dashboard\Pages\Dashboard;
use App\Http\Livewire\Dashboard\Pages\Orders;
use App\Http\Livewire\Dashboard\Pages\Profile\Preferences;
use App\Http\Livewire\Dashboard\Pages\Sandbox;
use App\Http\Livewire\Dashboard\Pages\Settings;
use App\Http\Livewire\Dashboard\Pages\Start;
use App\Http\Livewire\Dashboard\Pages\Company\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard\Pages\Branch\Home as BranchHome;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register', Register::class)->name('register')->middleware('guest');
Route::get('/login', Login::class)->name('login')->middleware('guest');
Route::get('/profile/preferences', Preferences::class)->name('preferences')->middleware('auth');
Route::get('/', Start::class)->middleware('auth');
Route::get('/analytics', Analytics::class)->middleware('auth');
Route::get('/dashboard', Dashboard::class)->middleware('auth');
Route::get('/settings', Settings::class)->middleware('auth');
Route::get('/orders', Orders::class)->middleware('auth');

Route::get('/company/{company:uuid}', Home::class)->middleware('auth');
Route::get('/company/{company:uuid}/branches', Branches::class)->middleware('auth');

Route::get('/branch/{branch:uuid}', BranchHome::class)->middleware('auth');

Route::get('/sandbox', Sandbox::class)->middleware('auth');
Route::get('/sandbox/tables', Sandbox\Tables::class)->middleware('auth');
Route::get('/sandbox/employees', Sandbox\Employees::class)->middleware('auth');
Route::get('/sandbox/promotions', Sandbox\Promotions::class)->middleware('auth');
Route::get('/sandbox/menu', Sandbox\Menu::class)->middleware('auth');
Route::get('/sandbox/{branch:uuid}/tables', Sandbox\Tables::class)->middleware('auth');

