<?php

namespace Src\middlewares;

use Src\Auth as apiAuth;

class AuthMiddleware implements Middleware
{
    public function handle(): void
    {
        apiAuth::check();
    }
}