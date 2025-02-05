<?php

namespace App\Traits;

trait Validator {
    public function validate(array $date): array{
        $updates = file_get_contents('php://input');
        if($updates = json_decode($updates, true)){
            $_REQUEST = array_merge($_REQUEST, $updates);
        }
        $requiredKey = [];
        foreach ($date as $key => $value) {
            if(array_key_exists($key, $_REQUEST) and !empty($_REQUEST[$key]))  {
                continue;
            }
            $requiredKey[$key] = $key . " is required";
        }
        if(!empty($requiredKey)) {
            apiResponse(['errors' => $requiredKey], 400);
        }
        return $_REQUEST;
    }
}