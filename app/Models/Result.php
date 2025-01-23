<?php

namespace App\Models;

use App\Models\DB;

class Result extends DB
{
    public function create(int $user_id, int $quiz_id,int $limit): int
    {
        $query = "INSERT INTO results (user_id, quiz_id, started_at, finished_at) 
            VALUES (:user_id, :quiz_id, NOW(), :finished_at)";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ":user_id" => $user_id,
            ":quiz_id" => $quiz_id,
            ":finished_at" => date("Y-m-d H:i:s", strtotime("+".$limit." minutes"))
        ]);
        return $this->conn->lastInsertId();
    }
}
