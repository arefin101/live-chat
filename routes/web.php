<?php

use Illuminate\Support\Facades\Route;
use App\Events\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Chat;
use Illuminate\Contracts\Session\Session;

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
    $chatt=chat::where('user_id', '=', 1)->get();

    return view('index', compact(['chatt']));
});

Route::post('send-message', function(Request $request){
   
    // $chat = new Chat;
    // $chat->user_id = 1;
    // $chat->message =$request->message;
    // $chat->save();
    
    event(
        new Message(
            $request->input('username'),
            $request->input('message')
        )
    );

});

Route::get('login','LoginController@login');
Route::post('login','LoginController@loginPost');
Route::get('logins','LoginController@getCookie')->name('goo');
