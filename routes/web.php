<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AgeChecker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/students', [StudentController::class, 'getStudents']);
Route::post('/students', [StudentController::class, 'inputStudents']);

Route::get('/product', function () {
    return view('product');
});


Route::prefix('product')->group(function () {
    Route::get('{productId}', function ($productId) {
        return 'this is the product id: ' . $productId;
    })->where('productId', '[0-9]+')->name('product.productId');

    Route::get('{productId}/images/{imageId}', function ($productId, $imageId) {
        return 'this is the image id:' . $imageId . ' for the product id: ' . $productId;
    })->name('product.imageId');
});

Route::get('/sales/{year}/{month?}', function ($year, $month = null) {
    return 'this is the sales at ' . $year . ' and ' . $month;
});

Route::get('/sales/{salesId}', function (Request $request, $salesId) {
    $month = $request->get('month');
    $year = $request->get('year');

    return Sales::where('salesId', $salesId)
        ->where('month', $month)
        ->where('year', $year)
        ->get();
});

//Route:
//get('/customers/{customerId}/order/{orderId}', function (Request $request, $customerId, $orderId) {
//    return Customers::where('customerId', $customerId)
//        ->where('orderId', $orderId);
//})->where([
//    'customerId' => '[0-9]+',
//    'orderId' => '[0-9]+'
//]);
//
//Route::get('/customers', [CustomerController::class, 'getCustomers'])->name('customers.getCustomers');
//Route::post('/customer', [CustomerController::class, 'addCustomer'])->name('customers.addCustomer');

Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');

Route::resources(['/users' => UserController::class]);

Route::get('/dashboard', function () {}) ->middleware(AgeChecker::class)->name('dashboard.index');
Route::get('/dashboard', function () {}) ->middleware('age')->name('dashboard.index');
Route::get('/dashboard/admin', function(){
    return 'this is admin page';
}) ->middleware('admin') ->name('dashboard.admin');
Route::get('/dashboard/user', function(){
    return 'this is user page';
})->name('dashboard.user');



Route::get('/home', function(){
    return view('home');
});
Route::get('/interns', function(){
    return view('interns');
});
Route::get('/projects', function(){
    return view('projects');
});
Route::get('/schedules', function(){
    return view('schedules');
});



