<?php

namespace App\Http\Controllers;
use App\Models\actu;
use Illuminate\Http\Request;

class HomeController extends Controller
{  
    function index () {
        $actu=actu::find(1);
        $title='accueil';
        //charge la pge home.blade.php
    return view('home' ,[  'actu' => $actu,
    'title'=>$title,  ]);
    
}
   
}
