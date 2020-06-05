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
        return view('front.index');
    });
});

Route::resource('/subscription','Front\SubscriptionController');
Route::any('/check-email','Front\SubscriptionController@checkEmail');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/mailer','Admin\MailController')->middleware('auth');

Route::resource('/admin/map','Admin\MapController')->middleware('auth');

Route::resource('/admin/subscription','Admin\SubscriptionFormController')->middleware('auth');

Route::group(['middleware'=>['auth']],function(){
    Route::get('/admin/dashboard','Admin\HomeController@dashboard');
});


