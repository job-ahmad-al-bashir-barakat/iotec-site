<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MainControler extends Controller
{
    function home() {
        return view('home');
    }

    function teams() {
        return view('team');
    }

    function projects() {
        return view('projects');
    }

    function aboutUs() {
        return view('about_us');
    }

    function termsAndAgreements() {
        return view('terms_and_agreements');
    }

}
