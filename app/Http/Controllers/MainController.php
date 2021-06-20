<?php

namespace App\Http\Controllers;

use App\Http\Api\ApiRequest;

class MainController extends Controller
{
    public function home(){

       // si on utilise Facade :
       // $test = ApiRequest::get('URL API' , 'ENDPOINT');
       //  On fait passer la reponse a la view
       // return view('home' , ['response' => $test]);

        return view('home');
    }

    public function contact(){

        return view('contact');
    }

}
