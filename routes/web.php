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
    if(\Session::has('locale'))
    {
        $language = session()->get('locale');
        return redirect($language);
    } else {
        return redirect(app()->getLocale()); 
    }
});

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'], 
    'middleware' => 'localization',
], function() {
    Route::get('/', function ($locale){
        session(['locale' => $locale]); // ovo se koristi za zadržavanje izabrane vrednosti u padajućem meniju
        return view('front.pages.home.home');
    });
});

Auth::routes();

// Admin
Route::group(['middleware'=>['auth']],function(){
    Route::get('/admin/dashboard','Admin\DashboardController@dashboard')->name('dashboard');
    Route::get('/admin/mail','Admin\MailController@index')->name('mail.index');
    Route::post('/admin/mail','Admin\MailController@store')->name('mail.store');
    Route::get('/admin/map','Admin\MapController@index')->name('map.index');
    Route::post('/admin/map','Admin\MapController@store')->name('map.store');
    Route::get('/admin/subscription','Admin\SubscriptionController@index')->name('subscription.index');;
    Route::post('/admin/subscription','Admin\SubscriptionController@store')->name('subscription.store');
});

// Application
Route::get('/subscription','Front\SubscriptionController@index');
Route::post('/subscription','Front\SubscriptionController@store');

// Error Pages