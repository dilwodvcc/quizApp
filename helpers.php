<?php

use JetBrains\PhpStorm\NoReturn;

#[NoReturn] function apiResponse($data, $status = 200): void
{
    if (headers_sent()) {
        die("Headers already sent. Cannot modify header information.");
    }

    header('Content-Type: application/json');
    http_response_code($status);
    echo json_encode($data);
    exit;
}
function view_dash($page, $data = []): void
{
    extract($data);
    require 'resources/views/dashboard/' . $page . '.php';
}

function view_home($page, $data = []): void
{
    extract($data);
    require 'resources/views/' . $page . '.php';
}
function view_auth($page, $data = []): void
{
    extract($data);
    require 'resources/views/auth/' . $page . '.php';
}

#[NoReturn] function redirect($page): void
{
    header('Location:'. $page);
    exit;
}