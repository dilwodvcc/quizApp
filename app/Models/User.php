<?php

namespace App\Models;

use App\Traits\HasApiTokens;
use PDOException;


class User extends DB
{
    use HasApiTokens;
    public function createUser(string $fullName, string $email, string $password ): bool
    {
        $query = "INSERT INTO users (full_name, email, password, updated_at, created_at) 
            VALUES (:full_name, :email, :password, NOW(), NOW())";
        $this->conn
            ->prepare($query)
            ->execute([
            "full_name" => $fullName,
            "email" => $email,
            "password" => password_hash($password, PASSWORD_DEFAULT)
        ]);
        $userId = $this->conn->lastInsertId();
        $this->CreateApiToken($userId);
        return true;
    }
    public function deleteUser(int $userId): bool
    {
        try {
            $deleteTokensQuery = "DELETE FROM user_api_token WHERE user_id = :user_id";
            $stmt = $this->conn->prepare($deleteTokensQuery);
            $stmt->execute(['user_id' => $userId]);

            $deleteUserQuery = "DELETE FROM users WHERE id = :user_id";
            $stmt = $this->conn->prepare($deleteUserQuery);
            $stmt->execute(['user_id' => $userId]);

            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function getUser(String $email ,string $password): bool
    {
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->execute(["email" => $email]);
        $user = $stmt->fetch();
        if ($user&&password_verify($password, $user->password)) {
            return true;
        }
        return false;
    }
}