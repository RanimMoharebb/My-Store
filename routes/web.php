<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
});
//BLOG POSTS ROUTES
Route::get('/create/posts', [PostController::class, 'createPosts'])->name('create.posts');
Route::post('/create/posts', [PostController::class, 'store'])->name('store.posts');
Route::get('/posts', [PostController::class, 'index'])->name('index.posts');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('destroy.posts');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('edit.posts');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('update.posts');
//dashboard routes


Route::middleware(['auth', AdminMiddleware::class])->group(function () {

    Route::get('/dashboard/main', [DashboardController::class, 'index'])->name('dashboard.index');
    // category routes
    Route::get('/create/category', [CategoryController::class, 'create'])->name('create.category');
    Route::post('/create/category', [CategoryController::class, 'store'])->name('store.category');
    //index all categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('index.category');
    //delete category
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('destroy.category');
    //edit category
    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('edit.category');
    //update category
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('update.category');
    //products routes
    Route::get('/create/product', [ProductController::class, 'create'])->name('create.product');
    Route::post('/create/product', [ProductController::class, 'store'])->name('store.product');
    //index all products
    Route::get('/products', [ProductController::class, 'index'])->name('index.product');
    //delete product
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('destroy.product');
    //edit product
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('edit.product');
    //update product
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('update.product');
});






//themefront
Route::get('/theme/front', [HomeController::class, 'index'])->name('theme.front');
//show cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
