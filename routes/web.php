<?php

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

 // HOME

Route::get('/', function () {
     return view('home');  
})->name('home');


// COMICS

Route::get('/comics', function() {
    $comics = config('comics-data');
 /*    dump($comics); */
    return view('comics', [
        'comics' => $comics,
    ]);
})->name('comics');





// (def di rotta con parametro)
Route::get('/comic/{id}', function($id){
    $comics = config('comics-data');
    /* dump($comics, $id); */

    // check id  
    if(is_numeric($id) && $id >= 0 && $id < count($comics) ) {


        //qui prendo il prodotto singolo
        $comic = $comics[$id];
        /* dump($comic); */

    } else {
        abort(404); // qui lo faccio riportare alla pagina 404
    }
     return view('comic-detail' , [
         'comic' => $comic,
     ]);
})->name('comic-detail');




// NEWS
Route::get('/news', function(){
    return view('news');
})->name('news');