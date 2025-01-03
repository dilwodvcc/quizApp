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
    public function addquiz(): void
    {
        require "../resources/views/add-quiz.js";
    }
    public function createquiz(): void
    {
        view('create-quiz');
    }
    public function dashboard(): void
    {
        view('dashboard');
    }
    public function myquizzes(): void
    {
        view('my-quizzes');
    }
    public function statistics(): void
    {
        view('statistics');
    }
}