<?php


namespace Ngotr\Oop\Controllers\Admin;

use Ngotr\Oop\Commons\Controller;
use Ngotr\Oop\Models\User;

class AuthenticateController extends Controller
{
    public function login()
    {
        if (!empty($_POST)) {

            $_SESSION['errors'] = [];
            $email = $_POST['email'];
            $password = $_POST['password'];
            // var_dump(filter_var(empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)));
            // die;
            if (empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['errors']['email'] = 'Email không được để trống và đúng định dạng';
            }
            if (empty($password)) {
                $_SESSION['errors']['password'] = 'Password không được để trống!';
            }

            $user = (new User)->getByEmailAndPassword($email, $password);

            if (empty($user)) {
                $_SESSION['errors']['not-found'] = 'không có người dùng này';
            } else {
                $_SESSION['user'] = $user;
                if ($user['role'] == 1) {
                    header('Location: /admin');
                } else if ($user['role'] == 0) {
                    header('Location: /');
                }

                exit();
            }

        }
        return $this->renderViewClient(__FUNCTION__);
    }
    public function logoutAdmin()
    {
        session_destroy();
        header('Location: /');
        exit();
    }
}