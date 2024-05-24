<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //home
    public function homeView()
    {
        return view('home');
    }
    //login
    public function loginView()
    {
        return view('login');
    }
    //signin
    public function signinView()
    {
        return view('register');
    }
    //shop
    public function shopView()
    {
        return view('shop');
    }
    //cart
    public function cartView()
    {
        return view('cart');
    }
}
