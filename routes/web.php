<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\SearchComponent;

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use App\Http\Livewire\Admin\AdminSliderComponent;
use App\Http\Livewire\Admin\AdminAddSliderComponent;
use App\Http\Livewire\Admin\AdminEditSliderComponent;
use App\Http\Livewire\Admin\AdminHomeCategoryComponent;




use App\Http\Livewire\User\UserDashboardComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class);
Route::get('shop/', ShopComponent::class);
Route::get('cart/', CartComponent::class)->name('product.cart');
Route::get('checkout/', CheckoutComponent::class)->name('product.checkout');
Route::get('/product/{slug}', DetailsComponent::class)->name('product.details');
Route::get('/category/{category_slug}', CategoryComponent::class)->name('product.category');
Route::get('/search', SearchComponent::class)->name('product.search');



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

//User
Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

//Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function() {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    // category
    Route::get('/admin/category', AdminCategoryComponent::class)->name('admin.category');
    Route::get('/admin/category/add', AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/category/edit/{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategory');
    //product
    Route::get('/admin/product', AdminProductComponent::class)->name('admin.product');
    Route::get('/admin/product/add', AdminAddProductComponent::class)->name('admin.addproduct');
    Route::get('/admin/product/edit/{product_slug}', AdminEditProductComponent::class)->name('admin.editproduct');
    //slider
    Route::get('/admin/slider', AdminSliderComponent::class)->name('admin.homeslider');
    Route::get('/admin/slider/add', AdminAddSliderComponent::class)->name('admin.addhomeslider');
    Route::get('/admin/slider/edit/{slider_id}', AdminEditSliderComponent::class)->name('admin.edithomeslider');
    //home-category
    Route::get('/admin/home-categories', AdminHomeCategoryComponent::class)->name('admin.homecategories');

});
