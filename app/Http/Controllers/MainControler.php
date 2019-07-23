<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MainControler extends Controller
{
    function home() {
        return view('page.home');
    }

    function teams() {
        return view('page.team');
    }

    function projects() {
        return view('page.projects');
    }

    function aboutUs() {
        return view('page.about_us');
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
}