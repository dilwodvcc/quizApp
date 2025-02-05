<?php

namespace App\Http\Controllers\WEB;

class QuizController
{
    public function take_quiz(string $uniqueValue): void
    {
        view_dash('take-quiz',
            ['uniqueValue' => $uniqueValue]);
    }
}