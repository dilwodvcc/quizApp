<?php

namespace App\Http\Controllers\WEB;

use App\Models\Quiz;
use JetBrains\PhpStorm\NoReturn;

class QuizController
{
    public function take_quiz(string $uniqueValue): void
    {
            view_dash('take-quiz',
            ['uniqueValue' => $uniqueValue]);
    }
}