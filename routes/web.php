<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| git https://github.com/vdhungbg/lar1.git
*/

Route::get('/', function () {
    return view('welcome');
    // return 'welcome';
});

Route::get('/table', function () {
 
   for($i =1; $i <= 10 ; $i++){
 
       echo "$i * 2 = ". $i*2 ."<br>";
 
   }   
 
});

Route::get('/table/{number}', function($number) {
  
  for($i=0; $i < $number; $i++) {
    echo "$i * $number = ". ($i*$number) . "<br>";
  }
});


