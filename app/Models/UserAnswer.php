<?php

namespace App\Models;

use App\Models\DB;

class UserAnswer extends DB
{
    public function create(int $result_id, int $option_id): int
    {
        $query = "INSERT INTO user_answers (result_id, option_id, created_at, updated_at) 
            VALUES (:result_id, :option_id, NOW(), NOW())";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            "result_id" => $result_id,
            "option_id" => $option_id,
        ]);
        return $this->conn->lastInsertId();
    }
}
