<?php

namespace Power\Computer\Models;

use Power\Computer\Commons\Model;

class Product extends Model
{
     public function GetAll()
     {
          try {
               $sql = "SELECT * FROM tb_product";
               $stmt = $this->conn->prepare($sql);
               $stmt->execute();
               return $stmt->fetchAll();

          } catch (\Throwable $th) {
               //throw $th;
          }
     }

     public function getByID($id)
     {
          try {
               $sql = "SELECT * FROM tb_product WHERE id = :id";
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
               INSERT INTO tb_product(name, price)
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
               $sql = "SELECT * FROM tb_product WHERE id = :id";
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
               UPDATE tb_product 
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

     public function daleteByID($id)
     {
          try {
               $sql = "DELETE FROM tb_product WHERE id = :id";
               $stmt = $this->conn->prepare($sql);
               $stmt->bindParam(':id', $id);
               $stmt->execute();

          } catch (\Throwable $th) {
               //throw $th;
          }
     }
}