<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\LocateController;
use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get("search",[productController::class,'search'])->name('search');
Route::get('/categoriesView/{category}',[HomeController::class, 'show'])->name('categories.show');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth','admin','verified')->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin');



    Route::get('/admin/addproductCat', [DashboardController::class, 'addproductCat'])->name('addproductCat');
    Route::get('/admin/addSubCat/{category}', [DashboardController::class, 'addSubCat'])->name('addSubCat');
    Route::get('/admin/addproduct/{level}', [DashboardController::class, 'addproduct'])->name('addproduct');
    Route::get('/admin/addLevel/{SubCategory}', [DashboardController::class, 'addLevel'])->name('addLevel');
    Route::post('/admin/save-product', [productController::class, 'saveproduct'])->name('save.product');
    Route::post('/admin/save-cat', [productController::class, 'saveCat'])->name('save.category');
    Route::post('/admin/saveSubCat', [productController::class, 'saveSubCat'])->name('saveSubCat');
    Route::post('/admin/saveLevel', [productController::class, 'saveLevel'])->name('saveLevel');
    Route::get('/admin/ChooseCat', [DashboardController::class, 'ChooseCat'])->name('ChooseCat');
    Route::get('/admin/SubCatL', [DashboardController::class, 'SubCatL'])->name('SubCatL');
    Route::get('/admin/CatL', [DashboardController::class, 'CatL'])->name('CatL');
    Route::get('/admin/productL', [DashboardController::class, 'productL'])->name('productL');
    Route::get('/admin/Levels', [DashboardController::class, 'Levels'])->name('Levels');
    Route::get('/admin/productList', [DashboardController::class, 'productList'])->name('productList');
    Route::get('/products/UpdateCat/{cat}', [DashboardController::class, 'UpdateCat'])->name('UpdateCat');
    Route::put('/products/UpdateCat/{cat}', [productController::class, 'UpdateCat'])->name('UpdateCat');
    Route::put('/products/UpdateSubCat/{subcat}', [productController::class, 'UpdateSubCat'])->name('UpdateSubCat');
    Route::get('/products/UpdateSubCat/{subcat}', [DashboardController::class, 'UpdateSubCat'])->name('UpdateSubCat');

    Route::put('/products/update/{product}', [productController::class, 'updateproduct'])->name('products.update');
    Route::put('/levels/update/{level}', [productController::class, 'updateLevel'])->name('level.update');
    Route::get('/levels/UpdateLevel/{level}', [DashboardController::class, 'UpdateLevel'])->name('UpdateLevel');

    Route::get('/products/Updateproduct/{product}', [DashboardController::class, 'Updateproduct'])->name('Updateproduct');
    
    Route::put('/admin/UpdateContent/{cont}', [ContentController::class, 'UpdateContent'])->name('UpdateContent');
    Route::get('/admin/UpdateContent/{cont}', [DashboardController::class, 'UpdateContent'])->name('UpdateContent');

    Route::post('/admin/saveContent', [ContentController::class, 'saveContent'])->name('saveContent');

    Route::get('/admin/addContent', [DashboardController::class, 'addContent'])->name('addContent');
    Route::get('/admin/viewContent', [DashboardController::class, 'viewContent'])->name('viewContent');
    Route::get('/admin/AllContent', [DashboardController::class, 'AllContent'])->name('AllContent');
    
    Route::delete('/content/{cont}', [ContentController::class, 'destroy'])->name('content.destroy');

    Route::get('/admin/addUser', [DashboardController::class, 'addUser'])->name('addUser');
    Route::get('/admin/UserL', [DashboardController::class, 'UserL'])->name('UserL');

    Route::get('/admin/ChooseCatproduct', [DashboardController::class, 'ChooseCatproduct'])->name('ChooseCatproduct');
    Route::get('/admin/ChooseLevel', [DashboardController::class, 'ChooseLevel'])->name('ChooseLevel');

    Route::get('/admin/ChooseSubCatL', [DashboardController::class, 'ChooseSubCatL'])->name('ChooseSubCatL');

Route::delete('/products/{product}', [productController::class, 'productD'])->name('products.destroy');



});





Route::middleware('auth','user','verified')->group(function () {
    Route::get('/user/dashboard', [DashboardController::class, 'userd'])->name('user');
    Route::get('/viewproduct/{product}',[HomeController::class, 'viewproduct'])->name('viewproduct');
    Route::get('/categories/{category}',[DashboardController::class, 'showu'])->name('showu');
});


Route::get('locale/{locale}', [LocateController::class, 'setLocale'])->name('locale');






