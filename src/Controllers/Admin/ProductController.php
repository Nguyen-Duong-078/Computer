<?php

namespace Power\Computer\Controllers\Admin;

use Power\Computer\Commons\Controller;
use Power\Computer\Models\Catelogue;
use Power\Computer\Models\Product;

class ProductController extends Controller
{
     private Product $product;

     private string $folder = 'products.';
     const PATH_UPLOAD = '/uploads/products/';
     public function __construct()
     {
          $this->product = new Product;
     }

     public function index()
     {
          $data['products'] = $this->product->getAll();
          return $this->renderViewAdmin(
               $this->folder . __FUNCTION__,
               $data
          );
     }


     public function create()
     {
          if (!empty($_POST)) {
               $name = $_POST['name'];
               $is_active = $_POST['is_active'];
               $image = $_FILES['image'] ?? null;
               $imagePath = null;
               if ($image) {
                    $imagePath = self::PATH_UPLOAD . time() . $image['name'];
                    if (!move_uploaded_file($image['tmp_name'], PATH_ROOT . $imagePath)) {
                         $imagePath = null;
                    }
               }
               $this->product->insert($name, $is_active, $imagePath);
               header('Location: /admin/catelogues/');
               exit();
          }
          return $this->renderViewAdmin($this->folder . __FUNCTION__);
     }

     public function show($id)
     {
          $data['products'] = $this->product->getByID($id);
          if (empty($data['products'])) {
               Error_404();
          }
          return $this->renderViewAdmin(
               $this->folder . __FUNCTION__,
               $data
          );
     }


     public function update($id)
     {
          $data['catelogues'] = $this->product->getByID($id);

          if (empty($data['catelogues'])) {
               Error_404();
          }

          if (!empty($_POST)) {
               $name = $_POST['name'];
               $is_active = $_POST['is_active'];
               $image = $_FILES['image'] ?? null;
               $imagePath = $data['catelogues']['image'];
               $move = false;
               if ($image) {
                    $imagePath = self::PATH_UPLOAD . time() . $image['name'];

                    if (!move_uploaded_file($image['tmp_name'], PATH_ROOT . $imagePath)) {
                         $imagePath = $data['catelogues']['image'];
                    } else {
                         $move = true;
                    }
               }

               $this->product->update(
                    $id,
                    $name,
                    $is_active,
                    $imagePath
               );

               if (
                    $move
                    && $data['catelogues']['image']
                    && file_exists(PATH_ROOT . $data['catelogues']['image'])
               ) {
                    unlink(PATH_ROOT . $data['catelogues']['image']);
               }

               $_SESSION['success'] = 'Thao tác thành công!';

               header("Location: /admin/catelogues/$id/update");
               exit();
          }

          return $this->renderViewAdmin(
               $this->folder . __FUNCTION__,
               $data
          );
     }

     public function delete($id)
     {
          $catelogues = $this->product->getByID($id);

          if (empty($data['catelogues'])) {
               Error_404();
          }
          $this->product->deleteByID($id);
          // Xóa ảnh
          if ($catelogues['image'] && file_exists(PATH_ROOT . $catelogues['image'])) {
               unlink(PATH_ROOT . $catelogues['image']);
          }
          header('Location: /admin/catelogues');
          exit();
     }
}
