<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
//require_once '/path/to/vendor/autoload.php'; 
 
//use Twilio\Rest\Client; 

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }
    public function loginPost(Request $req)
    {
        // $username= $req->input('userid');
        // $minutes = 1;
        // $response = new Response('Cookie set Successfully.');
        // $response->withCookie(cookie('name', $username, $minutes));
        // return $response;
        //return $response;


        $req->session()->put('username', $req->input('userid'));
        $req->session()->put('password', $req->input('Pass'));
        // dump($req->session()->get('username'));
        // dump($req->session()->get('password'));

        // session_set_cookie_params(0);
        // session_start();

        //return $req->session()->get('username');

        return redirect()->route('goo');
        
    }

    public function getCookie(Request $req){
        return view('session');
        // dump($req->session()->get('username'));
        // dump($req->session()->get('password'));
     }
}
