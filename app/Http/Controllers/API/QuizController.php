<?php

namespace App\Http\Controllers\API;

use App\Models\Option;
use App\Models\Question;
use App\Traits\Validator;
use App\Models\Quiz;
use JetBrains\PhpStorm\NoReturn;
use Src\Auth;

class QuizController
{
    use Validator;

    #[NoReturn] public function index(): void
    {
        $quizzes = (new Quiz())->getByUserId(Auth::user()->id);
        apiResponse(['quizzes' => $quizzes]);
    }

    #[NoReturn] public function store(): void
    {
        $quizItems = $this->validate([
            'title' => 'string',
            'description' => 'string',
            'timeLimit' => 'int',
            'questions' => 'array',
        ]);

        $quiz = new Quiz();
        $question = new Question();
        $option = new Option();

        $quiz_id = $quiz->create(
            Auth::user()->id,
            $quizItems['title'],
            $quizItems['description'],
            $quizItems['timeLimit'],
        );

        $questions = $quizItems['questions'];

        foreach ($questions as $questionItem)
        {
            $question_id = $question->create($quiz_id, $questionItem['quiz']);
            $correct =  $questionItem['correct'];
            foreach ($questionItem['options'] as $key => $optionItem)
            {
                $option->create($quiz_id, $question_id, $correct == $key);
            }
        }

        apiResponse(["message" => "Quiz created successfully !",],201);
        }
        #[NoReturn] public function destroy(int $quizId): void
        {
            $quiz = new Quiz();
            if ($quiz->delete($quizId))
            {
            apiResponse(["message" => "Quiz deleted successfully !"],201);
            }else{
                apiResponse(["message" => "Quiz not found !"],404);
            }
        }
    public function update(int $quizId): void
    {
        $quizItems = $this->validate([
            'title' => 'string',
            'description' => 'string',
            'timeLimit' => 'int',
            'questions' => 'array',
        ]);

        $quiz = new Quiz();
        $question = new Question();
        $option = new Option();

        $quiz->update($quizId, $quizItems['title'], $quizItems['description'], $quizItems['timeLimit']);
        $question->deleteByQuizId($quizId);

        $questions = $quizItems['questions'];

        foreach ($questions as $questionItem) {
            $question_id = $question->create($quizId, $questionItem['quiz']);
            $correct = $questionItem['correct'];
            foreach ($questionItem['options'] as $key => $optionItem) {
                $option->create($question_id, $optionItem, $correct == $key);
            }
        }

        apiResponse(["message" => "Quiz updated successfully!"], 201);
    }
}