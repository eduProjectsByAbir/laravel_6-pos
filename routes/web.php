<?php

// auth routes
Auth::routes();

Route::group(['middleware' => 'auth'], function (){
    // index route
    Route::get('/', 'HomeController@index');
    // home route
    Route::get('/home', 'HomeController@index')->name('home');
    //user route
    Route::prefix('users')->group(function(){
        Route::get('view', 'Backend\UserController@view')->name('users.view');
        Route::get('add', 'Backend\UserController@add')->name('users.add');
        Route::post('store', 'Backend\UserController@store')->name('users.store');
        Route::get('edit/{id}', 'Backend\UserController@edit')->name('users.edit');
        Route::post('update/{id}', 'Backend\UserController@update')->name('users.update');
        Route::get('delete/{id}', 'Backend\UserController@delete')->name('users.delete');
    });
    // profile route
    Route::prefix('profiles')->group(function(){
        Route::get('view', 'Backend\ProfileController@view')->name('profiles.view');
        Route::get('edit', 'Backend\ProfileController@edit')->name('profiles.edit');
        Route::post('store', 'Backend\ProfileController@update')->name('profiles.update');
        Route::get('password/view', 'Backend\ProfileController@passwordView')->name('profiles.password.view');
        Route::post('password/update', 'Backend\ProfileController@passwordUpdate')->name('profiles.password.update');
    });
//    Suppliers routes
    Route::prefix('suppliers')->group(function(){
        Route::get('view', 'Backend\SupplierController@view')->name('suppliers.view');
        Route::get('add', 'Backend\SupplierController@add')->name('suppliers.add');
        Route::post('store', 'Backend\SupplierController@store')->name('suppliers.store');
        Route::get('edit/{id}', 'Backend\SupplierController@edit')->name('suppliers.edit');
        Route::post('update/{id}', 'Backend\SupplierController@update')->name('suppliers.update');
        Route::get('delete/{id}', 'Backend\SupplierController@delete')->name('suppliers.delete');
    });
    //    Customers routes
    Route::prefix('customers')->group(function(){
        Route::get('view', 'Backend\CustomerController@view')->name('customers.view');
        Route::get('add', 'Backend\CustomerController@add')->name('customers.add');
        Route::post('store', 'Backend\CustomerController@store')->name('customers.store');
        Route::get('edit/{id}', 'Backend\CustomerController@edit')->name('customers.edit');
        Route::post('update/{id}', 'Backend\CustomerController@update')->name('customers.update');
        Route::get('delete/{id}', 'Backend\CustomerController@delete')->name('customers.delete');
    });
    //    Unit routes
    Route::prefix('units')->group(function(){
        Route::get('view', 'Backend\UnitController@view')->name('units.view');
        Route::get('add', 'Backend\UnitController@add')->name('units.add');
        Route::post('store', 'Backend\UnitController@store')->name('units.store');
        Route::get('edit/{id}', 'Backend\UnitController@edit')->name('units.edit');
        Route::post('update/{id}', 'Backend\UnitController@update')->name('units.update');
        Route::get('delete/{id}', 'Backend\UnitController@delete')->name('units.delete');
    });
    //    Category routes
    Route::prefix('categories')->group(function(){
        Route::get('view', 'Backend\CategoryController@view')->name('categories.view');
        Route::get('add', 'Backend\CategoryController@add')->name('categories.add');
        Route::post('store', 'Backend\CategoryController@store')->name('categories.store');
        Route::get('edit/{id}', 'Backend\CategoryController@edit')->name('categories.edit');
        Route::post('update/{id}', 'Backend\CategoryController@update')->name('categories.update');
        Route::get('delete/{id}', 'Backend\CategoryController@delete')->name('categories.delete');
    });
        //    Products routes
    Route::prefix('products')->group(function(){
        Route::get('view', 'Backend\ProductController@view')->name('products.view');
        Route::get('add', 'Backend\ProductController@add')->name('products.add');
        Route::post('store', 'Backend\ProductController@store')->name('products.store');
        Route::get('edit/{id}', 'Backend\ProductController@edit')->name('products.edit');
        Route::post('update/{id}', 'Backend\ProductController@update')->name('products.update');
        Route::get('delete/{id}', 'Backend\ProductController@delete')->name('products.delete');
    });
});
