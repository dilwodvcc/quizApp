<?php

namespace Src;

use App\Models\DB;

class Auth
{

    public static function check(): bool
    {
        $headers = getallheaders();
        if(!isset($headers['Authorization']))
        {
            apiResponse([
                "error" => "Unauthorized"
            ]);
        }
        if(!str_starts_with($headers['Authorization'], 'Bearer '))
        {
           apiResponse([
               "error" => "Authorization format is invalid,allowed format is Bearer"
           ],400);
        }
        $token = str_replace('Bearer ', '', $headers['Authorization']);
        $db = new DB();
        $pdo = $db->getConnection();
        $query = "SELECT * FROM `user_api_token` WHERE `token`=:token";
        $stmt =$pdo->prepare($query);
        $stmt->execute([
            ':token'=> $token
        ]);
        $apiToken = $stmt->fetch();
        if(!$apiToken)
        {
            apiResponse([
                "error" => "Unauthorized"
            ]);
        }
        return true;
    }
}