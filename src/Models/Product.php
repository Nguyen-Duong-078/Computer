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

     public function insert($name, $price)
     {
          try {
               $sql = "
               INSERT INTO products(name, price)
               VALUES(:name,
                      :price)";
               $stmt = $this->conn->prepare($sql);
               $stmt->bindParam(':name', $name);
               $stmt->bindParam(':price', $price);
               $stmt->execute();
          } catch (\Throwable $th) {
               //throw $th;
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
}
