<?php


use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use App\Models\Products;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    $u = User::all();
    $c = Products::all();
    $p = Category::all();
    return view('dashboard', compact('u','c','p'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//menu user
route::get('admin/user/index',[UserController::class,'index'])->name('u.index');

//menu category
route::get('admin/category/index',[CategoryController::class,'index'])->name('c.index');
route::get('admin/category/createfrom',[CategoryController::class,'createfrom'])->name('c.from');
route::get('admin/category/edit/{id}',[CategoryController::class,'edit']);
route::post('admin/category/insert',[CategoryController::class,'insert'])->name('c.insert');
route::post('admin/category/update/{id}',[CategoryController::class,'update']);
route::get('admin/category/delete/{id}',[CategoryController::class,'delete']);


//menu Product
route::get('admin/product/index',[ProductController::class,'index'])->name('p.index');
route::get('admin/product/createfrom',[ProductController::class,'createfrom'])->name('p.from');
route::get('admin/product/edit/{id}',[ProductController::class,'edit'])->name('p.edit');
route::post('admin/product/insert',[ProductController::class,'insert']);
route::post('admin/product/update/{id}',[ProductController::class,'update']);
route::get('admin/product/delete/{id}',[ProductController::class,'delete']);
