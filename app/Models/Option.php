<?php

namespace App\Models;

use App\Models\DB;

class Option extends DB
{
    public function create(int $question_id, string $option_text, string $is_correct): int
    {
        $query = "INSERT INTO options (question_id,option_text,is_correct, updated_at, created_at) 
            VALUES (:question_id, :option_text, :is_correct, NOW(), NOW())";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            "question_id" => $question_id,
            "option_text" => $option_text,
            "is_correct" => $is_correct,

        ]);
        return $this->conn->lastInsertId();
    }
}