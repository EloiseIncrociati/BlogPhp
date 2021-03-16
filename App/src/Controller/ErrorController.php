<?php

namespace App\src\controller;

class ErrorController
{
    public function errorNotFound()
    {
        require '../views/error_404.php';
    }

    public function errorServer()
    {
        require '../views/error_500.php';
    }
}