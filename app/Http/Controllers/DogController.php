<?php

namespace App\Http\Controllers;

use App\Http\Api\ApiRequest;

class DogController extends Controller
{
    public function desc(){

        return view('desc');
    }


}
