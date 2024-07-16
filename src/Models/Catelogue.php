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
     public function insert($name, $is_active, $image = null)
     {
          try {
               $id = $this->createid($name);
               $sql = "INSERT INTO 
               catelogues (name,
                           id,
                           is_active,
                           image) 
               VALUES (:name,
                       :id,
                       :is_active,
                       :image)";

               $stmt = $this->conn->prepare($sql);

               $stmt->bindParam(':name', $name);
               $stmt->bindParam(':id', $id);
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