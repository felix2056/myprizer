<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function currentCompetitions()
    {
        return view('current-competitions');
    }

    public function currentTechCompetitions()
    {
        return view('current-tech-competitions');
    }

    public function cashCompetitions()
    {
        return view('cash-competitions');
    }

    public function winners()
    {
        return view('winners');
    }

    public function drawResults()
    {
        return view('draw-results');
    }

    public function faq()
    {
        return view('faq');
    }

    public function cart()
    {
        return view('cart');
    }

    public function myAccount()
    {
        return view('my-account');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function checkout2()
    {
        return view('checkout2');
    }
}
