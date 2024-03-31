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
Route::get('/', 'IndexController@getHome')->name('home.index');
Route::get('/buy-now', 'IndexController@buyNow')->name('home.buyNow');
Route::get('/send-transaction', 'IndexController@sendTran')->name('home.sendTran');

Route::group(['namespace' => 'Admin'], function () {

    Route::group(['prefix' => 'backend', 'middleware' => 'auth'], function () {
       	Route::get('/home', 'HomeController@index')->name('backend.home');

        Route::resource('users', 'UserController', ['except' => [
            'show'
        ]]);

        Route::resource('posts', 'PostController', ['except' => ['show']]);
        Route::post('posts/postMultiDel', ['as' => 'posts.postMultiDel', 'uses' => 'PostController@deleteMuti']);
        Route::get('posts/get-slug', 'PostController@getAjaxSlug')->name('posts.get-slug');

        Route::resource('products', 'ProductController', ['except' => ['show']]);
        Route::post('products/postMultiDel', ['as' => 'products.postMultiDel', 'uses' => 'ProductController@deleteMuti']);
        Route::get('products/get-slug', 'ProductController@getAjaxSlug')->name('products.get-slug');

        Route::resource('category', 'CategoryController', ['except' => ['show']]);
        Route::resource('product_parameter', 'ProductParameterController', ['except' => ['show']]);

        Route::group(['prefix' => 'pages'], function() {
            Route::get('/', ['as' => 'pages.list', 'uses' => 'PagesController@getListPages']);
            Route::get('build', ['as' => 'pages.build', 'uses' => 'PagesController@getBuildPages']);
            Route::post('build', ['as' => 'pages.build.post', 'uses' => 'PagesController@postBuildPages']);
            Route::post('/create', ['as' => 'pages.create', 'uses' => 'PagesController@postCreatePages']);
        });

        Route::group(['prefix' => 'contact'], function () {
            Route::get('/', ['as' => 'get.list.contact', 'uses' => 'ContactController@getListContact']);
            Route::post('/delete-muti', ['as' => 'contact.postMultiDel', 'uses' => 'ContactController@postDeleteMuti']);
            Route::get('{id}/edit', ['as' => 'contact.edit', 'uses' => 'ContactController@getEdit']);
            Route::post('{id}/edit', ['as' => 'contact.post', 'uses' => 'ContactController@postEdit']);
            Route::delete('{id}/delete', ['as' => 'contact.destroy', 'uses' => 'ContactController@getDelete']);
        });


        Route::group(['prefix' => 'options'], function() {
            Route::get('/general', 'SettingController@getGeneralConfig')->name('backend.options.general');
            Route::post('/general', 'SettingController@postGeneralConfig')->name('backend.options.general.post');

            Route::get('/dev', 'SettingController@getDeveloperConfig')->name('backend.options.developer-config');
            Route::post('/dev', 'SettingController@postDeveloperConfig')->name('backend.options.developer-config.post');
        });

        Route::group(['prefix' => 'menu'], function () {
            Route::get('/', ['as' => 'setting.menu', 'uses' => 'MenuController@getListMenu']);
            Route::get('edit/{id}', ['as' => 'backend.config.menu.edit', 'uses' => 'MenuController@getEditMenu']);
            Route::post('add-item/{id}', ['as' => 'setting.menu.addItem', 'uses' => 'MenuController@postAddItem']);
            Route::post('update', ['as' => 'setting.menu.update', 'uses' => 'MenuController@postUpdateMenu']);
            Route::get('delete/{id}', ['as' => 'setting.menu.delete', 'uses' => 'MenuController@getDelete']);
            Route::get('edit-item/{id}', ['as' => 'setting.menu.geteditItem', 'uses' => 'MenuController@getEditItem']);
            Route::post('edit', ['as' => 'setting.menu.editItem', 'uses' => 'MenuController@postEditItem']);
        });

       Route::get('/get-layout', 'HomeController@getLayOut')->name('get.layout');

       Route::post('/sync-product-kiot', 'ProductController@syncProductKiot')->name('backend.sync_product_kiot');


        Route::group(['prefix' => 'cards'], function() {
            Route::get('/', 'CardController@getList')->name('cards.index');
        });

        Route::group(['prefix' => 'sub'], function() {
            Route::get('/', 'SubController@index')->name('sub.index');
        });

        Route::group(['prefix' => 'sub-source'], function() {
            Route::get('/', 'SubCourseController@index')->name('sub-source.index');
        });
    });
});

Auth::routes(
    [
        'register' => false,
        'verify' => false,
        'reset' => false,
    ]
);


