<?php

namespace App\Models;

use App\Models\DB;

class Result extends DB
{
    public function create(int $user_id, int $quiz_id, string $start_time, string $end_time, int $time_spent, int $score): int
    {
        $query = "INSERT INTO results (user_id, quiz_id, start_time, end_time, time_spent, score, created_at, updated_at) 
            VALUES (:user_id, :quiz_id, :start_time, :end_time, :time_spent, :score, NOW(), NOW())";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ":user_id" => $user_id,
            ":quiz_id" => $quiz_id,
            ":start_time" => $start_time,
            ":end_time" => $end_time,
            ":time_spent" => $time_spent,
            ":score" => $score,
        ]);
        return $this->conn->lastInsertId();
    }
}
