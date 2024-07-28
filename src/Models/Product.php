<?php

namespace Power\Computer\Models;

use Power\Computer\Commons\Model;

class Product extends Model
{
     public function getAll()
     {
          try {
               $sql = "
                SELECT
                    c.name                 c_name,
                    p.id                   p_id,
                    p.name                 p_name,
                    p.slug                 p_slug,
                    p.sku                  p_sku,
                    p.img_thumbnail        p_img_thumbnail,
                    p.price_regular        p_price_regular,
                    p.price_sale           p_price_sale,
                    p.description          p_description,
                    p.content              p_content,
                    p.view                 p_view,
                    p.is_active            p_is_active
                FROM products p
                INNER JOIN catelogues c
                    ON p.catelogue_id = c.id
            ";

               $stmt = $this->conn->prepare($sql);

               $stmt->execute();

               return $stmt->fetchAll();
          } catch (\Exception $e) {
               echo 'ERROR: ' . $e->getMessage();
               die;
          }
     }

     public function getByID($id)
     {
          try {
               $sql = "
                SELECT
                    c.name                 c_name,
                    p.id                   p_id,
                    p.name                 p_name,
                    p.slug                 p_slug,
                    p.sku                  p_sku,
                    p.img_thumbnail        p_img_thumbnail,
                    p.price_regular        p_price_regular,
                    p.price_sale           p_price_sale,
                    p.description          p_description,
                    p.content              p_content,
                    p.view                 p_view,
                    p.is_active            p_is_active
                FROM products p
                INNER JOIN catelogues c
                ON p.catelogue_id = c.id
                WHERE p.id = :id
            ";
               $stmt = $this->conn->prepare($sql);
               $stmt->bindParam(':id', $id);
               $stmt->execute();
               return $stmt->fetch();
          } catch (\Throwable $th) {
               //throw $th;
          }
     }

     // slug
     private function createid($str)
     {
          $str = mb_strtolower($str, 'UTF-8');
          $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
          $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
          $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
          $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
          $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
          $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
          $str = preg_replace('/(đ)/', 'd', $str);
          $str = preg_replace('/[^a-z0-9\-]+/', '-', $str);
          $str = trim($str, '-');
          $str = preg_replace('/-+/', '-', $str);
          return $str;
     }

     public function insert(
          $name,
          $catelogue_id,
          $sku,
          $description,
          $content,
          $price_regular,
          $price_sale,
          $is_active,
          $image = null
     ) {
          try {
               $slug = $this->createid($name); // lấy slug bằng name
               $sql = "INSERT INTO products (
                    name,
                    catelogue_id,
                    slug,
                    sku,
                    description,
                    content,
                    price_regular,
                    price_sale,
                    is_active,
                    img_thumbnail)
               VALUES (:name,
                       :catelogue_id,
                       :slug,
                       :sku,
                       :description,
                       :content,
                       :price_regular,
                       :price_sale,
                       :is_active,
                       :img_thumbnail
                       )";

               $stmt = $this->conn->prepare($sql);

               $stmt->bindParam(':name', $name);
               $stmt->bindParam(':catelogue_id', $catelogue_id);
               $stmt->bindParam(':slug', $slug);
               $stmt->bindParam(':sku', $sku);
               $stmt->bindParam(':description', $description);
               $stmt->bindParam(':content', $content);
               $stmt->bindParam(':price_regular', $price_regular);
               $stmt->bindParam(':price_sale', $price_sale);
               $stmt->bindParam(':is_active', $is_active);
               $stmt->bindParam(':img_thumbnail', $image);

               $stmt->execute();
          } catch (\Throwable $th) {
               throw $th;
          }
     }


     public function show($id)
     {
          try {
               $sql = "SELECT * FROM products WHERE id = :id";
               $stmt = $this->conn->prepare($sql);
               $stmt->bindParam(':id', $id);
               $stmt->execute();
               return $stmt->fetch();
          } catch (\Throwable $th) {
               //throw $th;
          }
     }

     public function update($id, $name, $price)
     {
          try {
               $sql = "
               UPDATE products
               SET name = :name,
                   price = :price
               WHERE id = :id";
               $stmt = $this->conn->prepare($sql);
               $stmt->bindParam(':id', $id);
               $stmt->bindParam(':name', $name);
               $stmt->bindParam(':price', $price);
               $stmt->execute();
          } catch (\Throwable $th) {
               //throw $th;
          }
     }

     public function deleteByID($id)
     {
          try {
               $sql = "DELETE FROM products WHERE id = :id";
               $stmt = $this->conn->prepare($sql);
               $stmt->bindParam(':id', $id);
               $stmt->execute();
          } catch (\Throwable $th) {
               //throw $th;
          }
     }

     public function getVariantsByProductID($id)
     {
          try {
               $sql = "SELECT * FROM product_variants WHERE product_id = :id";
               $stmt = $this->conn->prepare($sql);
               $stmt->bindParam(':id', $id);
               $stmt->execute();
               return $stmt->fetchAll();

          } catch (\Throwable $th) {
               //throw $th;
          }
     }

     public function deleteVariantByID($variantId)
     {
          try {
               $sql = "DELETE FROM product_variants WHERE id = :id";
               $stmt = $this->conn->prepare($sql);
               $stmt->bindParam(':id', $variantId);
               $stmt->execute();
          } catch (\Throwable $th) {
               //throw $th;
          }
     }


}
