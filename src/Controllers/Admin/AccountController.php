<?php

namespace Power\Computer\Controllers\Admin;

use Power\Computer\Commons\Controller;
use Power\Computer\Models\Account;

class UserController extends Controller
{
     private Account $account;

     private string $folder = 'users.';
     const PATH_UPLOAD = '/uploads/users/';

     public function __construct()
     {
          $this->account = new Account;
     }

     // Danh sách
     public function index()
     {
          $data['users'] = $this->account->getAll();

          return $this->renderViewAdmin(
               $this->folder . __FUNCTION__,
               $data
          );
     }

     // Thêm mới
     public function create()
     {
          if (!empty($_POST)) {
               $name = $_POST['name'];
               $email = $_POST['email'];
               $password = $_POST['password'];

               $avatar = $_FILES['avatar'] ?? null;
               $avatarPath = null;
               if (!empty($avatar)) {
                    $avatarPath = self::PATH_UPLOAD . $avatar['name'];
                    if (!move_uploaded_file($avatar['tmp_name'], PATH_ROOT . $avatarPath)) {
                         $avatarPath = null;
                    }
               }
               $this->account->insert($name, $email, $password, $avatarPath);

               header('Location: /admin/users');
               exit();
          }

          return $this->renderViewAdmin($this->folder . __FUNCTION__);
     }

     // Xem chi tiết theo ID
     public function show($id)
     {
          $data['user'] = $this->account->getByID($id);

          if (empty($data['user'])) {
               die(404);
          }

          return $this->renderViewAdmin(
               $this->folder . __FUNCTION__,
               $data
          );
     }

     // Cập nhật theo ID
     public function update($id)
     {
          $user = $this->account->getByID($id);
          if (!empty($user)) {
               // die(404);
          }
          if (!empty($_POST)) {
               $name = $_POST['name'];
               $email = $_POST['email'];
               $password = $_POST['password'];

               $avatar = $_FILES['avatar'] ?? null;
               $avatarPath = $user['avatar'];
               if (!empty($avatar)) {
                    $avatarPath = self::PATH_UPLOAD . $avatar['name'];
                    if (!move_uploaded_file($avatar['tmp_name'], PATH_ROOT . $avatarPath)) {
                         $avatarPath = $user['avatar'];
                    }
               }
               $_SESSION['success'] = 'Thao tác thành công!';
               $this->account->update($id, $name, $email, $password, $avatarPath);
               header("Location: /admin/users/$id/update");
               exit();
          }

          return $this->renderViewAdmin($this->folder . __FUNCTION__, ['user' => $user]);
     }


     // Delete theo ID
     public function delete($id)
     {
          $this->account->deleteByID($id);
          header('Location: /admin/users');
          exit();
     }
}
