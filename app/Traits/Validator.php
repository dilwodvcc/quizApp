<?php

namespace App\Traits;

trait Validator
{
    public function validate(array $data): array
    {
        $update = file_get_contents('php://input');
        if ($update = json_decode($update, true))
        {
            $_REQUEST = array_merge($_REQUEST, $update);
        }
        $requiredKey = [];
        foreach ($data as $key => $value) {
            if (array_key_exists($key, $_REQUEST) and !empty($_REQUEST[$key])) {
                continue;
            }
            $requiredKey[$key] = $key . " is required";
        }
        if (!empty($requiredKey)) {
            apiResponse(['errors' => $requiredKey], 400);
        }
        return $_REQUEST;
    }
}