<?php

namespace App\Http\Controllers\WEB;

use App\Models\Quiz;
use JetBrains\PhpStorm\NoReturn;

class QuizController
{
    public function take_quiz(string $uniqueValue): void
    {
        $quiz = (new Quiz())->findByUniqueValue($uniqueValue);
        if ($quiz)
        {
            view_dash('take-quiz');
        }
        view_home('404');
    }
}