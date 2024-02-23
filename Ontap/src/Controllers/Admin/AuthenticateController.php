<?php


namespace Ngotr\Ontap\Controllers\Admin;

use Ngotr\Ontap\Commons\Controller;
use Ngotr\Ontap\Models\User;

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
                header('Location: /Ontap/admin');
                exit();
            }

        }
        return $this->renderViewAdmin(__FUNCTION__);
    }
    public function logout()
    {
        session_destroy();
        header('Location: /Ontap');
        exit();
    }
}