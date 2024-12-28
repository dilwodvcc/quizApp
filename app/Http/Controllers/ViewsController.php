<?php

namespace App\Http\Controllers;

class ViewsController
{
    public function home()
    {
        view('home');
    }
    public function login()
    {
        view('login');
    }
    public function register()
    {
        view('register');
    }
}