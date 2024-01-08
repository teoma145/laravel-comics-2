<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
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

    return to_route('comics.index');
})->name('home');


//Route::get('/comics/{id}', function ($id) {
 //   $comics = config('db.comics');
    //cercare prodotto con quell'id
   // if ($id >= 0 && $id < count($comics)) {
     //   $comic = $comics[$id];

       // return view('comics.show', compact('comic'));
    //} else {
      //  abort(404);
    //}
//})->name('comics.show');

Route::resource('comics',ComicController::class);

Route::get('about', function () {
    return view('about.index');
})->name('about');
