<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
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
        return view('terms_and_conditions');
    }

    function faq() {
        return view('faq');
    }

    function devFeed() {

        $client = new Client();
        $websites = $client->get('app.dailynow.co/v1/publications');

        $page     = request()->get('page',0);
        $feedDate = \Carbon\Carbon::now()->format('Y-m-d\TH:i:s\Z');
        $feedPosts = $client->get("app.dailynow.co/v1/posts/latest?latest=$feedDate&page=$page&pageSize=30");
        return view('dev_feed',[
            'websites'  => json_decode($websites->getBody()->getContents()),
            'feedPosts' => json_decode($feedPosts->getBody()->getContents())
        ]);
    }

    function blog() {
        return view('blog');
    }
}
