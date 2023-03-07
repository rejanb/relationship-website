<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\KlarnaController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Redirect;

// or
// Route::get('/users', 'App\Http\Controllers\UserController@index');
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

//Defaut
    Route::get('/', function () { return redirect('/en/home');});


// English



    Route::get('en/home', function () {return view('en.home');})->name('en.home');
    Route::get('en/dialogues', function () {return view('en.dialogues');})->name('en.dialogues');
    Route::get('en/influences', function () {return view('en.influences');})->name('en.influences');
    Route::get('en/resources', function () {return view('en.resources');})->name('en.resources');
    Route::get('en/gapfinder', function () {return view('en.gapfinder');})->name('en.gapfinder');
    Route::get('en/contact', function () {return view('en.contact');})->name('en.contact');
        //for email
        Route::post('en/contact' , [EmailController::class, 'email'])->name('en.contact.email');
    Route::get('en/about', function () {return view('en.about');})->name('en.about');



// Norwagian
    Route::get('no/home', function () {return view('no.home');})->name('no.home');
    Route::get('no/dialogues', function () {return view('no.dialogues');})->name('no.dialogues');
    Route::get('no/influences', function () {return view('no.influences');})->name('no.influences');
    Route::get('no/resources', function () {return view('no.resources');})->name('no.resources');
    Route::get('no/gapfinder', function () {return view('no.gapfinder');})->name('no.gapfinder');
    Route::get('no/contact', function () {return view('no.contact');})->name('no.contact');
        //for email
        Route::post('no/contact' , [EmailController::class, 'email'])->name('no.contact.email');
    Route::get('no/about', function () {return view('no.about');})->name('no.about');



    // Norwagian




//Language
//for local
// Route::get('lang/{lang}', function ($lang) {
//     $url =url()->previous();

//     if($lang === 'en'){;
//         $result = substr($url, strpos($url, '8000/') + strlen('8000/'));
//         $result = substr_replace($result, $lang, 0, 2); //replace the first 2 letters
//         $result =  str_replace('/', '.', $result);
//         return  Redirect::route($result);
//     }

//     if($lang === 'no'){
//         $result = substr($url, strpos($url, '8000/') + strlen('8000/'));
//         $result = substr_replace($result, $lang, 0, 2); //replace the first 2 letters
//         $result =  str_replace('/', '.', $result);
//         $result =  str_replace('/', '.', $result);
//         return  Redirect::route($result);
//     }
// });

//for production
Route::get('lang/{lang}', function ($lang) {
    $url =url()->previous();

    if($lang === 'en'){;
        $result = substr($url, strpos($url, 'org/') + strlen('org/'));
        $result = substr_replace($result, $lang, 0, 2); //replace the first 2 letters
        $result =  str_replace('/', '.', $result);
        return  Redirect::route($result);
    }

    if($lang === 'no'){
        $result = substr($url, strpos($url, 'org/') + strlen('org/'));
        $result = substr_replace($result, $lang, 0, 2); //replace the first 2 letters
        $result =  str_replace('/', '.', $result);
        $result =  str_replace('/', '.', $result);
        return  Redirect::route($result);
    }
});


//Email







