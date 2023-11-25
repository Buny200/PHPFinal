<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMain extends Controller
{
    public function index(){
        $num= rand(1,10);
        return view('main',["numero"=>$num,
            "nombre"=>"manuel"]);
    }

}
