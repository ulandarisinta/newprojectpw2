<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function cart(){
        return view('cart');
    }

    public function search(){
        return view('search');
    }

    public function checkout(){
        return view('search');
    }

    public function submit(){
        return view('submit');
    }
}
