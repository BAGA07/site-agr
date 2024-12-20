<?php

use App\Livewire\Produits;
use Illuminate\Console\View\Components\Component;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\UserList;
use App\Http\Livewire\Admin\ProductList;
use App\Http\Livewire\Admin\CategoryList;
use App\Http\Livewire\Admin\OrderList;
use App\Livewire\Test;

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/home', function () {
    return view('home');
});


Route::get('/', function () {
    return view('/livewire/accueil');
});
Route::get('/admin/dashboard', Dashboard::class)->name('admin.dashboard');
Route::get('/admin/user', UserList::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/* Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/users', UserList::class)->name('users.index');
     Route::get('/products', ProductList::class)->name('products.index');
    Route::get('/categories', CategoryList::class)->name('categories.index');
    Route::get('/orders', OrderList::class)->name('orders.index');  
});*/


  /* Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    // Tableau de bord
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    // Gestion des utilisateurs
    Route::get('/users', UserList::class)->name('users.index');
    

    // Gestion des produits
    Route::get('/products', ProductList::class)->name('products.index');

    // Gestion des catégories
    Route::get('/categories', CategoryList::class)->name('categories.index');

    // Gestion des commandes
    Route::get('/orders', OrderList::class)->name('orders.index');  
});*/

