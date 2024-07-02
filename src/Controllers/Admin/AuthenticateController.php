<?php
namespace Power\Computer\Controllers\Admin;

use Power\Computer\Commons\Controller;
use Power\Computer\Models\Account;

class AuthenticateController extends Controller
{
    public function login()
    {
        if (!empty($_POST)) {
            $_SESSION['errors'] = [];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['errors'] = 'Email không được để trống và đúng định dạng';
            }
            if (empty($password)) {
                $_SESSION['errors'] = 'Mật khẩu không được để trống';
            }

            $user = (new Account)->getByEmailAndPassword($_POST['email'], $_POST['password']);

            if (empty($user)) {
                $_SESSION['errors'] = 'Không tìm thấy người dùng!';
            } else {
                $_SESSION['user'] = $user;
                header('Location: /admin/');
                exit();
            }
        }
        return $this->renderViewAdmin(__FUNCTION__);
    }

    public function logout()
    {
        session_destroy();
        header('Location: /admin/');
        exit();
    }
}