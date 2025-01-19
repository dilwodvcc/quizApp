<?php

namespace App\Traits;

trait Validator
{
    public function validate(array $rules): array
    {
        $inputData = $_REQUEST;
        $errors = [];

        foreach ($rules as $key => $rule) {
            if (!isset($inputData[$key]) || empty($inputData[$key])) {
                $errors[$key] = "$key is required";
                continue;
            }

            if (!$this->validateType($inputData[$key], $rule)) {
                $errors[$key] = "$key must be of type $rule";
            }
        }

        if (!empty($errors)) {
            apiResponse(['errors' => $errors], 400);
            exit;
        }

        return $inputData;
    }

    private function validateType($value, string $type): bool
    {
        switch ($type) {
            case 'string':
                return is_string($value);
            case 'int':
                return filter_var($value, FILTER_VALIDATE_INT) !== false;
            case 'float':
                return filter_var($value, FILTER_VALIDATE_FLOAT) !== false;
            case 'array':
                return is_array($value);
            default:
                return false;
        }
    }
}
