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
//=================================================================
// Login-Register route
//=================================================================
Route::get('/login_page', 'AdminController@login');
Route::get('/home', 'AdminController@page');
Auth::routes();
Route::match(['get', 'post'], '/login_page', 'AdminController@login');
Route::match(['get', 'post'], '/register', 'UsersController@register');
//=================================================================
// Fontend route
//=================================================================
Route::get('/home', function () {
    return view('project.home');
});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('home');
});

Route::get('/team', function () {
    return view('Project.team');
});
Route::get('/service', function () {
    return view('Project.service');
});
Route::get('/about', function () {
    return view('Project.about');
});
Route::get('/contact', function () {
    return view('Project.contact');
});

Route::group(['middleware' => 'auth'], function () {

    Route::match(['get', 'post'], '/booking', 'BookingController@addBooking');
    Route::match(['get', 'post'], '/booking/details', 'BookingController@showBooking');
    Route::match(['get', 'post'], '/booking/payment/{id}', 'BookingController@payment');

});

//=================================================================
// Profile route
//=================================================================
Route::match(['get', 'post'], '/editprofile', 'UsersController@editprofile');
Route::match(['get', 'post'], '/showprofile', 'UsersController@showprofile');

//=================================================================
// Backend route
//=================================================================
Route::group(['middleware' => 'auth'], function () {

    Route::match(['get', 'post'], '/dashboard', 'AdminController@dashboard');

    //=================================================================
    // Users route
    //=================================================================
    Route::get('/delete_user/{id}', 'UsersController@deleteUser');
    Route::match(['get', 'post'], '/add_user', 'UsersController@addUser');
    Route::match(['get', 'post'], '/edit_user/{id}', 'UsersController@editUser');
    Route::get('/view_user', 'UsersController@viewUser');

    //=================================================================
    // Employee route
    //=================================================================
    Route::get('/delete_employee/{id}', 'EmployeeController@deleteEmployee');
    Route::match(['get', 'post'], '/add_employee', 'EmployeeController@addEmployee');
    Route::match(['get', 'post'], '/edit_employee/{id}', 'EmployeeController@editEmployee');
    Route::get('/view_employee', 'EmployeeController@viewEmployee');

    //=================================================================
    // Treatment route
    //=================================================================
    Route::get('/delete_treatment/{id}', 'TreatmentController@deleteTeatment');
    Route::match(['get', 'post'], '/add_treatment', 'TreatmentController@addTeatment');
    Route::match(['get', 'post'], '/edit_treatment/{id}', 'TreatmentController@editTreatment');
    Route::get('/view_treatment', 'TreatmentController@viewTeatment');

    //=================================================================
    // Package route
    //=================================================================
    Route::get('/delete_package/{id}', 'PackageController@deletePackage');
    Route::match(['get', 'post'], '/add_package', 'PackageController@addPackage');
    Route::match(['get', 'post'], '/edit_package/{id}', 'PackageController@editPackage');
    Route::get('/view_package', 'PackageController@viewPackage');

    //=================================================================
    // Package route
    //=================================================================
    Route::get('/delete_room/{id}', 'RoomController@deleteRoom');
    Route::match(['get', 'post'], '/add_room', 'RoomController@addRoom');
    Route::match(['get', 'post'], '/edit_room/{id}', 'RoomController@editRoom');
    Route::get('/view_room', 'RoomController@viewRoom');

    //=================================================================
    // Role Employee route
    //=================================================================
    Route::match(['get', 'post'], '/edit-profile', 'EmployeeController@editEmpProfile');
    Route::get('/role_employee', 'EmployeeController@showEmpProfile');
    Route::match(['get', 'post'], '/show-booking-emp', 'EmployeeController@showBooking');

    //=================================================================
    // Booking route
    //=================================================================
    Route::match(['get', 'post'], '/add-booking', 'PaymentController@addBooking');
    Route::match(['get', 'post'], '/show-booking', 'PaymentController@showBooking');
    Route::match(['get', 'post'], '/edit-booking/{id}', 'PaymentController@editBooking');
    Route::get('/delete_booking/{id}', 'PaymentController@deleteBooking');
    Route::match(['get', 'post'], '/payment', 'PaymentController@payment');
    Route::match(['get', 'post'], '/delete_payment/{id}', 'PaymentController@deletepayment');

});
