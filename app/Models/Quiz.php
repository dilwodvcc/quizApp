<?php

namespace App\Models;

class Quiz extends DB
{
    public function find ($quizId)
    {
        $query = "SELECT * FROM quizzes WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(['id' => $quizId]);
        return $stmt->fetch();
    }

    public function create(int $user_id, string $title, string $description, int $time_limit): int
    {
        $query = "INSERT INTO quizzes (unique_value,user_id, title, description, time_limit, updated_at, created_at) 
            VALUES (:uniqueValue,:user_id, :title, :description, :time_limit, NOW(), NOW())";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ":uniqueValue" => uniqid(),
            ":user_id" => $user_id,
            ":title" => $title,
            ":description" => $description,
            ":time_limit" => $time_limit,
        ]);
        return $this->conn->lastInsertId();
    }
    public function delete(int $quizId): bool
    {
        $query = "DELETE FROM quizzes WHERE id = :quizId";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([
            "quizId" => $quizId
        ]);

    }
    public function getByUserId (int $userId): array|bool
    {
        $query = "SELECT * FROM quizzes WHERE user_id = :userId";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(["userId" => $userId]);
        return $stmt->fetchAll();
    }

    public function update(int $quizId,string $title, string $description, int $time_limit): bool
    {
        $query = "UPDATE quizzes SET title = :title, description = :description, time_limit = :time_limit WHERE id = :quizId";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([
            "title" => $title,
            "description" => $description,
            "time_limit" => $time_limit,
            "quizId" => $quizId
        ]);
    }

    public function findByUniqueValue (string $uniqueValue)
    {
        $query = "SELECT * FROM quizzes WHERE unique_value = :uniqueValue";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([':uniqueValue' => $uniqueValue]);
        return $stmt->fetch();
    }
}