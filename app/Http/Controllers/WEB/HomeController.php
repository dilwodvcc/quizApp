<?php

namespace App\Http\Controllers\WEB;

use JetBrains\PhpStorm\NoReturn;

class HomeController
{
    public function home(): void
    {
        view_home('home');
    }
    public function login(): void
    {
        view_auth('login');
    }
    public function register(): void
    {
        view_auth('register');
    }
    public function about(): void
    {
        view_home('about');
    }
    #[NoReturn] public function add_quiz(): void
    {
            require "public/js/add-quiz.js";
    }
    #[NoReturn] public function create_quiz(): void
    {
        view_dash('create-quiz');
    }
    #[NoReturn] public function dashboard(): void
    {
            view_dash('dashboard');
    }
    #[NoReturn] public function my_quizzes(): void
    {
            view_dash('my-quizzes');
    }
    #[NoReturn] public function statistics(): void
    {
            view_dash('statistics');
    }
    #[NoReturn] public function how_it_works(): void
    {
        view_home('how-it-works');
    }
    public function features(): void
    {
        view_home('home');
    }
}