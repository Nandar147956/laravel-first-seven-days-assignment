<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('blog',[Controller::class,'index']);

Route::get('publishers',[Controller::class, 'getPublishers']);

Route::get('store-publishers',[Controller::class,'storePublishers']);

Route::get('update-publishers/{id}',[Controller::class,'updatePublisher']);

Route::get('delete-publishers/{id}',[Controller::class,'deletePublisher']);

Route::get('books',[Controller::class,'getBooks']);

Route::get('books/{id}',[Controller::class,'bookDetail']);

Route::get('publishers/{id}',[Controller::class,'getPublishersDetail']);

Route::get('additional-bookinfo/{id}', [Controller::class,'getAdditionalBookinfo']);
