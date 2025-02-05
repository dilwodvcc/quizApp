<?php

namespace App\Http\Controllers\API;

use App\Models\UserAnswer;
use App\Traits\Validator;

class AnswerController
{
    use Validator;
    public function store()
    {
        $answerItems = $this->validate([
            'result_id' => 'integer',
            'option_id' => 'integer',
        ]);
        $answer = new UserAnswer();
        $answerData = $answer->create(
            $answerItems['result_id'],
            $answerItems['option_id'],
        );
        apiResponse([
            'message' => 'UserAnswer created successfully.',
            'answer' => $answerData
        ],201);
    }
}