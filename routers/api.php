<?php

use App\Controllers\UserController;
use Sourse\Router;

Router::post('/api/user',[UserController::class, 'store']);

echo "Rout not found";

$router = new Router();

