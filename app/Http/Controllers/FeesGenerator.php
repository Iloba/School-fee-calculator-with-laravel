<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeesGenerator extends Controller
{
    //generate fees
    public function generate(Request $req){
        return $req->all();
    }
}
