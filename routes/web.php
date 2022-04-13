<?php

use App\Models\InvoiceCustomer;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Node\CrapIndex;

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

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/nokia-finance', function () {
    return view('nokia/finance/finance_nokia');
});
Route::get('/nokia-invoice', function () {
    return view('nokia/finance/invoice');
});
Route::get('/rekap-invoice-customer', function () {
    return view('nokia/finance/rekap_invoice_customer');
});
Route::get('/rekap-invoice-vendor', function () {
    return view('nokia/finance/rekap_invoice_vendor');
});
Route::get('/input-invoice-customer', function () {
    return view('nokia/finance/invoice_customer');
});
Route::get('/input-invoice-vendor', function () {
    return view('nokia/finance/invoice_vendor');
});
Route::get('/pengguna', function () {
    return view('user/index');
});
// Route::resource('invoice-customer', InvoiceCustomerController::class);
// Route::get('invoice-customer', 'InvoiceCustomer@index');
// Route::post('invoice-customer', 'InvoiceCustomer@create');
// Route::put('/invoice-customer/{id}', 'InvoiceCustomer@update');
// Route::delete('/invoice-customer/{id}', 'InvoiceCustomer@delete');
