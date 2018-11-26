<?php

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
    return view('welcome');
});


//Route::resource('/api/category', 'AndroposWeb\CategoryController');

Route::prefix('api')->group(function () {

    Route::get('/category', 'AndroposWeb\CategoryController@index')->name('category.index');
    Route::post('/category/create', 'AndroposWeb\CategoryController@create')->name('category.store');
    Route::get('/category/show/{cat_id}', 'AndroposWeb\CategoryController@show')->name('category.show');
    Route::put('/category/update/{cat_id}', 'AndroposWeb\CategoryController@update')->name('category.update');
    Route::delete('/category/delete/{cat_id}', 'AndroposWeb\CategoryController@destroy')->name('category.destroy');

    Route::get('/sub-category', 'AndroposWeb\SubCategoryController@index')->name('subcategory.index');
    Route::post('/sub-category/create', 'AndroposWeb\SubCategoryController@create')->name('subcategory.store');
    Route::get('/sub-category/show/{cat_id}', 'AndroposWeb\SubCategoryController@show')->name('subcategory.show');
    Route::put('/sub-category/update/{cat_id}', 'AndroposWeb\SubCategoryController@update')->name('subcategory.update');
    Route::delete('/sub-category/delete/{cat_id}', 'AndroposWeb\SubCategoryController@destroy')->name('subcategory.destroy');

    Route::get('/customer', 'AndroposWeb\CustomerController@index')->name('customer.index');
    Route::post('/customer/create', 'AndroposWeb\CustomerController@create')->name('customer.store');
    Route::get('/customer/show/{id}', 'AndroposWeb\CustomerController@show')->name('customer.show');
    Route::put('/customer/update/{id}', 'AndroposWeb\CustomerController@update')->name('customer.update');
    Route::delete('/customer/delete/{id}', 'AndroposWeb\CustomerController@destroy')->name('customer.destroy');

    Route::get('/product', 'AndroposWeb\ProductController@index')->name('product.index');
    Route::post('/product/create', 'AndroposWeb\ProductController@create')->name('product.store');
    Route::get('/product/show/{id}', 'AndroposWeb\ProductController@show')->name('product.show');
    Route::put('/product/update/{id}', 'AndroposWeb\ProductController@update')->name('product.update');
    Route::delete('/product/delete/{id}', 'AndroposWeb\ProductController@destroy')->name('product.destroy');

});