<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'PagesController@dashboard')->name('dashboard');
Route::get('/about', 'PagesController@about');
// For Expense Controll
Route::get('/expense', 'PagesController@expense');
Route::post('/expense', 'ExpenseController@expenseStore')->name('expense');
// End for Expense Controll
Route::get('/dashboard', 'PagesController@dashboard');
Route::get('/order', 'PagesController@order');
Route::get('/user', 'PagesController@user');
// For Product Controll
Route::get('/addproduct', 'PagesController@addproduct');
Route::post('/addproduct','ProductController@store')->name('addimage');
Route::get('/product', 'ProductController@productDisplay');
Route::get('/editproduct/{id}','ProductController@productEdit');
Route::put('/updateproduct/{id}','ProductController@productUpdate');
Route::get('/deleteproduct/{id}','ProductController@productDelete');
// End for Product Controll
Route::get('/customer', 'PagesController@customer');
Route::get('/setupuser', 'PagesController@setupuser');
Route::get('/staff', 'PagesController@staff');
Route::get('/userprofile', 'PagesController@userprofile');
Route::get('/stock', 'PagesController@stock');
Route::get('/supplier', 'PagesController@supplier');
Route::resource('posts', 'PostsController');

