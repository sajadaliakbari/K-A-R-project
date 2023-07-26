<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\saveProduct;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClothController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\PatternController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\SettingController;
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


        // welcome
Route::get('/', function () {
    return view('welcome');
});
        // dashboard           
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/front/index', function(){
    return view('front.index');
});

// ====================================================================
        // showcategories
Route::get('/showCategories', [CategoryController::class, 'create'])->name('showcategories');
        // add product
Route::get('/addProduct', [ProductController::class, 'showAddProduct'])->name('add_product');
        // product-list
Route::get('/productList', [ProductController::class, 'index'])->name('productList');
        // savecategory
Route::post('/saveCategory', [CategoryController::class, 'store']);

        // editcategory
Route::get('/edit/{id}/category', [CategoryController::class, 'edit']);

        // updatecategory
Route::post('/update/{id}/category', [CategoryController::class, 'update']);

        // editcategory
Route::get('/delete/{id}/category', [CategoryController::class, 'destroy']);

        // saveinventory
Route::post('/saveInventory', [InventoryController::class, 'store']);

        // saveproduct
Route::post('/save', [saveProduct::class, 'store']);

        // showsingleproduct
Route::get('/show/{id}/product', [saveProduct::class, 'show']);

        // editproduct
Route::get('/edit/{id}/product', [saveProduct::class, 'edit']);

        // updateproduct
Route::post('/update/{id}/product', [saveProduct::class, 'update']);

        // deleteproduct
Route::get('/delete/{id}/product', [saveProduct::class, 'destroy']);

// sign-up
Route::get('/sign-up', function () {
return view('pages.sign-up');
});

        // hamedullahroutes

//  Cloth
Route::get('/showCloths', [ClothController::class, 'create']);


route::post('/addCloth', [ClothController::class, 'store']);
route::get('/edit_cloths/{id}/edit', [ClothController::class, 'edit']);
route::post('/updateCloth/{id}', [ClothController::class, 'update']);
route::get('/edit_cloths/{id}/delete', [ClothController::class, 'destroy']);
   
    // Size
Route::get('/showSizes', [SizeController::class, 'create']);

route::get('/addSize', function(){
return view('sizeclothcolor.addCloth');
});
route::post('/addSize', [SizeController::class, 'store']);
route::get('/edit_size/{id}/edit', [SizeController::class, 'edit']);
route::post('/updateSize/{id}', [SizeController::class, 'update']);
route::get('/edit_size/{id}/delete', [SizeController::class, 'destroy']);
    
// color
Route::get('/showColors', [ColorController::class, 'create']);
route::post('/addColor', [ColorController::class, 'store']);
route::get('/edit_colors/{id}/edit', [ColorController::class, 'edit']);
route::post('/updateColors/{id}', [ColorController::class, 'update']);
route::get('/edit_colors/{id}/delete', [ColorController::class, 'destroy']);

// ataullah rezaie routes
// ====================================================================


        // Payment show

Route::get('payment', [PaymentController::class, 'show'])->name('showPayment');
        // Edit Payment
Route::get('payment/{id}/edit',[PaymentController::class, 'edit_pay']);
        // Update Payment
Route::post('/payment/{id}/update',[PaymentController::class, 'update']);
        // Delete Payment
Route::get('payment/{id}/delete',[PaymentController::class, 'destroy']);
// ====================================================================


        // show addPayment

Route::get('/addpayment', [PaymentController::class, 'show_add']);
        // store addPayment
Route::post('/addpayment', [PaymentController::class, 'store']);
// ================================================================

// shokurullah's routes

//////////////////////////////
//                          //
//                          //
//     Order Routes         //
//                          //
//////////////////////////////

Route::get('orderlist', [OrderController::class, 'index'])->name('allorder');
Route::post('storeorder', [OrderController::class, 'store']);
Route::get('orderlist/{id}', [OrderController::class, 'show']);
Route::get('/orderlist/{id}/delete', [OrderController::class, 'destroy']);
Route::get('/orderlist/{id}/edit', [OrderController::class, 'edit']);
Route::Post('/orderlist/{id}/update', [OrderController::class, 'update']);



//////////////////////////////
//                          //
//                          //
//     Booking Routes       //
//                          //
//////////////////////////////

Route::get('bookinglist', [BookingController::class, 'index'])->name('allbooking');
Route::post('storebooking', [BookingController::class, 'store']);
Route::get('bookinglist/{id}', [BookingController::class, 'show']);
Route::get('/bookinglist/{id}/delete', [BookingController::class, 'destroy']);
Route::get('bookinglist/{id}/edit', [BookingController::class, 'edit']);
Route::post('/bookinglist/{id}/update', [BookingController::class, 'update']);






//////////////////////////////
//                          //
//                          //
//     Front Routes         //
//                          //
//////////////////////////////

Route::get('homepage',[FrontController::class, 'showhomepage']);


Route::get('productpage',[FrontController::class, 'showproductpage']);


Route::get('contactpage', [FrontController::class, 'showcontactpage']);





//////////////////////////////
//                          //
//                          //
//     MSG routes           //
//                          //
//////////////////////////////

Route::get('/message',[MessageController::class, 'index']);

Route::post('savemsg', [MessageController::class, 'store']);




//////////////////////////////
//                          //
//                          //
//     Setting Routes       //
//                          //
//////////////////////////////

Route::get('/setting',[SettingController::class, 'index'])->name('setting');
Route::POST('/save/bg',[SettingController::class, 'store']);






        // store pattern

Route::post('/pattern', [PatternController::class, 'store']);
        // show pattern
Route::get('/pattern', [PatternController::class, 'show'])->name('showPattern');
        // Edit Pattern
Route::get('/pattern/{id}/edit',[PatternController::class, 'edit']);
        // Update Pattern
Route::post('/pattern/{id}/update',[PatternController::class, 'update']);
        // Delete Pattern
Route::get('/pattern/{id}/delete',[PatternController::class, 'destroy']);
// =================================================================





// auth
Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
