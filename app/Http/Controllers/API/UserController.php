<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Traits\Validator;
use JetBrains\PhpStorm\NoReturn;

class UserController{
    use Validator;
    #[NoReturn] public function store(): void
    {
        $userData = $this->validate([
            'full_name' => 'string',
            'email' => 'string',
            'password' => 'string',
            'confirm_password' => 'string'
        ]);
        $user = new User();
        if ($userData['confirm_password'] == $userData['password']) {
            if ($user->createUser($userData['full_name'], $userData['email'], $userData['password'])) {
                apiResponse([
                    'message' => 'User created successfully !',
                    'token' => $user->apiToken
                ], 201);
            }
        }
    }

    public function login(): void
    {
        $userData = $this->validate([
            'email' => 'string',
            'password' => 'string'
        ]);
        $user = new User();
        if ($user->getUser($userData['email'], $userData['password'])) {
            apiResponse([
                'message' => 'User created successfully !',
                'token' => $user->apiToken
            ], 201);
        }
    }
    public function logout(): void
    {

    }
    #[NoReturn] public function show(): void
    {
        apiResponse([
            'user'=>
            [
                'name' => 'John Doe',
                'email' => 'john@doe.com',
            ]
        ]);
    }
}