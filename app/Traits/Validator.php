<?php

namespace App\Traits;

trait Validator
{
    public function validate(array $date): array
    {
        $requiredKey = [];
        foreach ($date as $key => $value)
        {
            if(array_key_exists($key, $_REQUEST))
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