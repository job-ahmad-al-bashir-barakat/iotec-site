<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class MainControler extends Controller
{
    function home() {
        return view('page.home');
    }

    function termsAndAgreements() {
        return view('page.terms_and_conditions');
    }

    function faq() {
        return view('page.faq');
    }

    function devFeed() {

        $client = new Client([
            'base_uri' => 'https://app.dailynow.co',
        ]);
        $websites = $client->get('v1/publications');

        $page     = request()->get('page',0);
        $feedDate = \Carbon\Carbon::now()->format('Y-m-d\TH:i:s\Z');
        $feedPosts = $client->get("v1/posts/latest?latest=$feedDate&page=$page&pageSize=30");
        return view('page.dev_feed',[
            'websites'  => json_decode($websites->getBody()->getContents()),
            'feedPosts' => json_decode($feedPosts->getBody()->getContents())
        ]);
    }

    function blog() {
        return view('page.blog');
    }

    function contact(Request $request) {

        $this->validate($request, [
            "first_name"  => "required",
            "last_name"   => "required",
            "email"       => "required|email",
            "phone"       => "required",
            "subject"     => "required",
            "message"     => "required",
            "check_robot" => "required",
        ]);

        Mail::send(new ContactMail($request));

        return \Redirect::to('/#contactus')->with('message', 'Message send successfuly!');
    }
}
