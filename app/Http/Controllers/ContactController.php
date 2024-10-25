<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{ 
    function index () {
    //la charge de page contact.blade.php//
    return view('contact');
}
    
}
