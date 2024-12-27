<?php

namespace App\Traits;

trait HasApiTokens
{
    public string $apiToken;
    protected string $duration;

    public function createApiToken(int $userId): string
    {
        $query   = "INSERT INTO user_api_token (user_id, token,expires_at,created_at) 
        VALUES (:user_id, :token, :expires_at, NOW())";
        $this->apiToken = bin2hex(random_bytes(40));
        $this->duration = date("Y-m-d H:i:s", strtotime('+' .$_ENV['API_TOKEN_EXPIRATION_DAY']. 'day'));
        $stmt = $this->conn->prepare($query  );
        $stmt->execute([
            ':user_id' => $userId,
            ':token'    => $this->apiToken,
            ':expires_at' => $this->duration
        ]);
        return $this->apiToken;
    }
}