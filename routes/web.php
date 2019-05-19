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
    return view('front.pages.index');
})->name('');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/homeLogin','Homecontroller@indexLogin')->name('home');
// Route::get('/logout','HomeController@index')


Route::post('/','AppointmentController@store')->name('Appointment.store');
Route::get('/admin/add-doctor','DoctorController@index');
Route::group(
    [
        'namespace' => 'Admin',
        'prefix' => 'admin',
        'middleware' => 'auth',
    ],

    function()
    {
        Route::resource('add-doctor', 'DoctorController');
        Route::resource('add-department',"DepartmentController");
        Route::get('/','DashboardController@index');
        Route::get('/viewDoctor','DoctorController@viewAllDoctor');
    }

);
