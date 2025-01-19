<?php

namespace App\Traits;

trait Validator
{
    public function validate(array $date): array
    {
//        $update = file_get_contents('php://input');
//        dd($update);
        $requiredKey = [];
        foreach ($date as $key => $value)
        {
            if(array_key_exists($key, $_REQUEST) and !empty($_REQUEST[$key]))
            {
                continue;
            }
            $requiredKey[$key] = $key . " is required";
        }
        if(!empty($requiredKey))
        {
            apiResponse(['errors' => $requiredKey], 400);
        }
        return $_REQUEST;
    }
}