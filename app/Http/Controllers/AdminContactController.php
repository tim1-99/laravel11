<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    function index () {
        $contacts = Contact::get();
        //la charge de page admine/contact.blade.php//
        return view('admin/contact', [ 'contacts'=> $contacts,]);
    }
}
