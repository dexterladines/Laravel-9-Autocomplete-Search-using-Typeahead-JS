<?php

use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;

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

Route::get('email-test', function () {
    
    $details['email'] = 'dexladines@gmail.com';

    dispatch(new SendEmailJob($details));

    dd('done');
});


Route::controller(SearchController::class)->group(function (){
    Route::get('demo-search', 'index');
    Route::get('autocomplete', 'autocomplete')->name('autocomplete');
});