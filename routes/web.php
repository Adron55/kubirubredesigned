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

use App\User;
use Carbon\Carbon;
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
Route::get('/404page', function () {
    return view('404page');
})->name('404page');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/support', function () {
    return view('support');
})->name('support');
Route::get('/howto', function () {
    return view('howto');
})->name('howto');
Route::get('/team', function () {
    return view('team');
})->name('team');
Route::get('/success', function () {
    return view('success');
})->name('success');
Route::get('/privacy-policy', function () {
    return view('privacy');
})->name('privacy');
//Company
Route::get('/dashboard/home','HomeController@dashhome')->name('dashboard.home');
Route::get('/dashboard/discounts','HomeController@dashdiscounts')->name('dashboard.discounts');
Route::get('/', 'MainController@index')->name('/');
Route::get('/contact', function (){
    return view('contact');
});
Route::post('/send','MainController@sendcontact')->name('sendcontact');

Route::get('/company', function () {
    return view('company');
})->name('company');
Route::get('/company/login', function () {
    return view('companySignin');
})->name('companysigin');

Route::get('/company/registration', 'MainController@companyRegister')->name('company.register');
Route::post('/company/registration/save', 'MainController@companySave')->name('companySave');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');

Route::get('/edit', 'HomeController@edit')->name('edit');
Route::post('/home/save', 'HomeController@companyUpdate')->name('companyUpdate');

//Route::post('/loginuser', 'ApiUserController@loginweb')->name('homeforuser');


Route::group(['prefix' => 'api/'], function () {
    Route::post('login/', 'ApiUserController@authenticate')->name('testforuser');
    Route::post('register/', 'ApiUserController@register');
    Route::post('getInfo/', 'ApiUserController@get_info');
    Route::post('change/password', 'ApiUserController@change_password');
    Route::post('change/change_userdata', 'ApiUserController@change_userdata');
    Route::post('check_status', 'ApiUserController@check_status');
    Route::post('cubirub', 'ApiUserController@cubirub');
    Route::post('give_check', 'ApiUserController@give_check');
    Route::post('getCoupons', 'ApiUserController@getCoupons');
    Route::post('getOldCoupons', 'ApiUserController@getOldCoupons');
    Route::post('deleteCoupon', 'ApiUserController@deleteCoupon');
    Route::post('initGame', 'ApiGameUserController@initGame');
    Route::post('sendMessage', 'ApiUserController@sendMessage');
    Route::post('acceptCoupon', 'ApiUserController@acceptCoupon');
    Route::post('requestCoupon', 'ApiUserController@requestCoupon');
    Route::get('test', 'ApiUserController@test');
    Route::get('doYouForgetMe', 'ApiUserController@doYouForgetMeView')->name('doYouForgetMeView');
    Route::get('resetPassword', 'ApiUserController@resetPassword')->name('resetPassword');
    Route::get('resetToken', 'ApiUserController@resetToken')->name('resetToken');
    Route::post('resetPasswordApp', 'ApiUserController@resetPasswordApp')->name('resetPasswordApp');
    Route::post('resetTokenApp', 'ApiUserController@resetTokenApp')->name('resetTokenApp');
    Route::post('doYouForgetMePost', 'ApiUserController@doYouForgetMe')->name('doYouForgetMePost');
});

Route::group(['prefix' => 'company/api/'], function () {
    Route::post('authenticate/', 'CompanyApiController@authenticate');
    Route::post('saveCoupon/', 'CompanyApiController@saveCoupon');
    Route::post('getCoupons/', 'CompanyApiController@getCoupons');
    Route::post('checkCoupon/', 'CompanyApiController@checkCoupon');
    Route::post('acceptCoupon/', 'CompanyApiController@acceptCoupon');
    Route::post('declineCoupon/', 'CompanyApiController@declineCoupon');
    Route::get('test/', 'CompanyApiController@test');
});


Route::get('/initUser', function () {

    $user = User::create([
        'firstname' => "Anar",
        'lastname' => "Memmedli",
        'age' => "19",
        'email' => "anarmemmedli55@gmail.com",
        'password' => bcrypt("123456"),
    ]);


    return User::withUuid($user->uuid_text)->first();


});