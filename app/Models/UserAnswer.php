<?php

namespace App\Models;
use App\Models\DB;
class UserAnswer extends DB {

    public function find(int $id) {
        $query = "SELECT * FROM answers WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
    public function create(int $result_id, int $option_id): int {
        $query = "INSERT INTO user_answers (result_id, option_id, created_at, updated_at) 
            VALUES (:result_id, :option_id, NOW(), NOW())";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            "result_id" => $result_id,
            "option_id" => $option_id,
        ]);
        return $this->conn->lastInsertId();
    }

    public function getCorrectAnswer(int $userId, int $quizId) {
        $query = "SELECT COUNT(answers.id) AS correctAnswerCount FROM answers
                        JOIN results ON answers.result_id = results.id
                        JOIN options ON answers.option_id = options.id
                WHERE results.user_id = :userId
                        AND results.quiz_id = :quizId
                        AND options.is_correct = TRUE;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ':userId' => $userId,
            ':quizId' => $quizId
        ]);
        return $stmt->fetch();
    }
}