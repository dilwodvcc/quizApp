<?php

namespace App\Http\Controllers\WEB;

class HomeController
{
    public function home(): void
    {
        view('home');
    }
    public function login(): void
    {
        view('login');
    }
    public function register(): void
    {
        view('register');
    }
    public function about(): void
    {
        view('about');
    }
    public function add_quiz(): void
    {
        require "public/js/add-quiz.js";
    }
    public function create_quiz(): void
    {
        view('create-quiz');
    }
    public function dashboard(): void
    {
        view('dashboard');
    }
    public function my_quizzes(): void
    {
        view('my-quizzes');
    }
    public function statistics(): void
    {
        view('statistics');
    }
    public function how_it_works(): void
    {
        view('how-it-works');
    }
    public function features(): void
    {
        view('home');
    }
}