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
    return view('user.pages.home');
});

Route::get('/home', function () {
    return view('user.pages.home');
});

Route::get('/cart', function () {
    return view('user.pages.cart');
});

Route::get('/tin-tuc', function () {
    return view('user.pages.tintuc');
});

Route::get('/dathangok', function () {
    return view('user.pages.dathangok');
});

Route::get('/khongcosp', function () {
    return view('user.pages.khongcosp');
});


Route::group(['prefix' => 'admin','middleware'=>'auth'], function() {

    Route::group(['prefix' => 'cate'], function() {

        Route::get('list',['as'=>'admin.cate.List','uses'=>'CateController@getList']);
        
        Route::get('insert',['as'=>'admin.cate.getInsert','uses'=>'CateController@getInsert']);
        Route::post('insert',['as'=>'admin.cate.postInsert','uses'=>'CateController@postInsert']);

        Route::get('delete/{id}',['as'=>'admin.cate.getDelete','uses'=>'CateController@getDelete']);

        Route::get('edit/{id}',['as'=>'admin.cate.getEdit','uses'=>'CateController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.cate.postEdit','uses'=>'CateController@postEdit']);
    });

    Route::group(['prefix' => 'product'], function() {

        Route::get('list',['as'=>'admin.product.List','uses'=>'ProductController@getList']);

        Route::get('insert',['as'=>'admin.product.getInsert','uses'=>'ProductController@getInsert']);
        Route::post('insert',['as'=>'admin.product.postInsert','uses'=>'ProductController@postInsert']);

        Route::get('delete/{id}',['as'=>'admin.product.getDelete','uses'=>'ProductController@getDelete']);

        Route::get('edit/{id}',['as'=>'admin.product.getEdit','uses'=>'ProductController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.product.postEdit','uses'=>'ProductController@postEdit']);


    });

     Route::group(['prefix' => 'donhang'], function() {

        Route::get('list',['as'=>'admin.donhang.List','uses'=>'DonHangController@getList']);

        Route::get('chitietdonhang/{id}',['as'=>'admin.donhang.chitietdonhang','uses'=>'DonHangController@chitietdonhang']);

    });

    Route::group(['prefix' => 'user'], function() {

        Route::get('list', ['as'=>'admin.user.getlist','uses'=>'UserController@getlist']);

        Route::get('insert',['as'=>'admin.user.getInsert','uses'=>'UserController@getInsert']);
        Route::post('insert',['as'=>'admin.user.postInsert','uses'=>'UserController@postInsert']);

        Route::get('delete/{id}',['as'=>'admin.user.getDelete','uses'=>'UserController@getDelete']);

        Route::get('edit/{id}',['as'=>'admin.user.getEdit','uses'=>'UserController@getEdit']);
        Route::post('edit/{id}',['as'=>'admin.user.postEdit','uses'=>'UserController@postEdit']);



    });


    
});

Route::get('login',['as'=>'admin.user.getLogin','uses'=>'Auth\LoginController@getLogin']);
Route::post('login',['as'=>'admin.user.postLogin','uses'=>'Auth\LoginController@postLogin']);

Route::get('logout',['as'=>'admin.user.logout','uses'=>'Auth\LoginController@logout']);

Route::get('loai-san-pham/{id}/{alias}', ['as'=>'loaisanpham','uses'=>'IndexController@loaisanpham']);

Route::get('chi-tiet-san-pham/{id}/{alias}', ['as'=>'chitiet','uses'=>'IndexController@chitiet']);

Route::get('lien-he',['as'=>'getLienhe','uses'=>'IndexController@getLienhe']);

Route::post('lien-he',['as'=>'postLienhe','uses'=>'IndexController@postLienhe']);

Route::get('them-vao-gio/{id}/{alias}',['as'=>'themvaogio','uses'=>'IndexController@themvaogio']);

Route::get('thanh-toan',['as'=>'thanhtoan','uses'=>'IndexController@thanhtoan']);

Route::get('xoa-san-pham/{id}',['as'=>'xoasanpham','uses'=>'IndexController@xoasanpham']);

Route::get('cap-nhat/{id}/{qty}',['as'=>'capnhat','uses'=>'IndexController@capnhat']);

Route::get('dang-ky',['as'=>'getRegister','uses'=>'IndexController@getRegister']);

Route::post('dang-ky',['as'=>'postRegister','uses'=>'IndexController@postRegister']);
// Auth::routes();

// Route::get('/home', 'HomeController@index');
