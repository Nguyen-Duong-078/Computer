<?php

namespace Power\Computer\Controllers\Admin;

use Power\Computer\Commons\Controller;
use Power\Computer\Models\Catelogue;
use Power\Computer\Models\Product;
use Power\Computer\Models\ProductColor;
use Power\Computer\Models\ProductVariant;

class ProductController extends Controller
{
     private Product $product;

     private string $folder = 'products.';
     const PATH_UPLOAD = '/uploads/products/';
     const PATH_UPLOAD_VARIANT = '/uploads/variants/';
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
               $catelogue_id = $_POST['catelogue_id'];
               $sku = $_POST['sku'];
               $description = $_POST['description'];
               $content = $_POST['content'];
               $price_regular = $_POST['price_regular'];
               $price_sale = $_POST['price_sale'];
               $is_active = $_POST['is_active'];
               $image = $_FILES['img_thumbnail'] ?? null;
               $imagePath = null;

               if ($image) {
                    $imagePath = self::PATH_UPLOAD . time() . $image['name'];
                    if (!move_uploaded_file($image['tmp_name'], PATH_ROOT . $imagePath)) {
                         $imagePath = null;
                    }
               }

               $product = $this->product->insert(
                    $name,
                    $catelogue_id,
                    $sku,
                    $description,
                    $content,
                    $price_regular,
                    $price_sale,
                    $is_active,
                    $imagePath
               );

               if (!empty($_POST['variant'])) {
                    $variants = $_POST['variant'];

                    foreach ($variants as $index => $variant) {
                         $colorId = $variant['colors'];
                         $quantity = $variant['quantities'];
                         $variantImage = $_FILES['variant']['name'][$index]['variant_images'] ?? null;
                         $variantImagePath = null;

                         if ($variantImage) {
                              $variantImagePath = self::PATH_UPLOAD_VARIANT . time() . '_' . $variantImage;
                              if (!move_uploaded_file($_FILES['variant']['tmp_name'][$index]['variant_images'], PATH_ROOT . $variantImagePath)) {
                                   $variantImagePath = null;
                              }
                         }

                         if (!$colorId || !$quantity) {
                              die('Error: ID màu hoặc số lượng là null');
                         }

                         (new ProductVariant())->insert(
                              $colorId,
                              $quantity,
                              $variantImagePath
                         );
                    }
               }


               header('Location: /admin/products/');
               exit();
          }

          $catelogues = (new Catelogue())->GetAll();
          $colors = (new ProductColor())->GetAll();
          return $this->renderViewAdmin($this->folder . __FUNCTION__, compact('catelogues', 'colors'));
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
          $product = $this->product->getByID($id);

          if (empty($product)) {
               Error_404();
          }

          $variants = $this->product->getVariantsByProductID($id);
          // debug($variants);
          foreach ($variants as $variant) {
               if ($variant['image'] && file_exists(PATH_ROOT . $variant['image'])) {
                    unlink(PATH_ROOT . $variant['image']);
               }
               $this->product->deleteVariantByID($variant['id']);
          }

          if ($product['image'] && file_exists(PATH_ROOT . $product['image'])) {
               unlink(PATH_ROOT . $product['image']);
          }
          $this->product->deleteByID($id);

          header('Location: /admin/products');
          exit();
     }

}
