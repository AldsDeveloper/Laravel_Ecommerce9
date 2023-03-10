<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\ContactUsComponent;
use App\Http\Livewire\AboutUsComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\AdminDashboardComponent;
use App\Http\Livewire\UserDashboardComponent;
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
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// For Admin
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Livewire\AdminDashboardComponent::class, 'render'])->name('admin.dashboard');
});
// For User or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard', [App\Http\Livewire\UserDashboardComponent::class, 'render'])->name('user.dashboard');
});
// For All website
Route::get('/', HomeComponent::class)->name('home');
Route::get('/about-us', AboutUsComponent::class)->name('aboutus');
Route::get('/contact-us', ContactUsComponent::class)->name('contactus');
Route::get('/cart', CartComponent::class)->name('cart');
Route::get('/checkout', CheckoutComponent::class)->name('checkout');
Route::get('/shop', ShopComponent::class)->name('shop');
