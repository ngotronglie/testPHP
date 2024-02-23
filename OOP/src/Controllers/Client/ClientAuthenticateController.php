<?php
namespace Ngotr\Oop\Controllers\Client;

use Ngotr\Oop\Commons\Controller;

class ClientAuthenticateController extends Controller
{
    public function logout()
    {
        session_destroy();
        header('Location: /');
        exit();
    }
}