<?php

namespace Power\Computer\Models;

use Power\Computer\Commons\Model;

class Catelogue extends Model
{
     public function GetAll()
     {
          try {
               $sql = "SELECT * FROM catelogues";
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
               $sql = "SELECT * FROM catelogues WHERE id = :id";
               $stmt = $this->conn->prepare($sql);
               $stmt->bindParam(':id', $id);
               $stmt->execute();
               return $stmt->fetch();

          } catch (\Throwable $th) {
               //throw $th;
          }
     }

     public function insert($name, $is_active, $image = null)
     {
          try {
               $sql = "INSERT INTO 
               catelogues (name,
                           is_active,
                           image) 
               VALUES (:name,
                       :is_active,
                       :image)";

               $stmt = $this->conn->prepare($sql);

               $stmt->bindParam(':name', $name);
               $stmt->bindParam(':is_active', $is_active);
               $stmt->bindParam(':image', $image);

               // Execute statement
               $stmt->execute();
          } catch (\Throwable $th) {
               throw $th;
          }
     }

     public function show($id)
     {
          try {
               $sql = "SELECT * FROM catelogues WHERE id = :id";
               $stmt = $this->conn->prepare($sql);
               $stmt->bindParam(':id', $id);
               $stmt->execute();
               return $stmt->fetch();

          } catch (\Throwable $th) {
               //throw $th;
          }
     }

     public function update($id, $name, $is_active, $image)
     {
          try {
               $sql = "
               UPDATE catelogues 
               SET name = :name,
                   is_active = :is_active,
                   image = :image
               WHERE id = :id";
               $stmt = $this->conn->prepare($sql);
               $stmt->bindParam(':id', $id);
               $stmt->bindParam(':name', $name);
               $stmt->bindParam(':is_active', $is_active);
               $stmt->bindParam(':image', $image);
               $stmt->execute();

          } catch (\Throwable $th) {
               //throw $th;
          }
     }

     public function deleteByID($id)
     {
          try {
               $sql = "DELETE FROM catelogues WHERE id = :id";
               $stmt = $this->conn->prepare($sql);
               $stmt->bindParam(':id', $id);
               $stmt->execute();

          } catch (\Throwable $th) {
               //throw $th;
          }
     }
}