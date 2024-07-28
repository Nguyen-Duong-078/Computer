<?php
namespace Power\Computer\Models;

use Power\Computer\Commons\Model;

class ProductVariant extends Model
{
    public function getAll()
    {
        try {
            $sql = "SELECT * FROM product_colors";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    private function getLatestProductId()
    {
        try {
            $sql = "SELECT id FROM products ORDER BY id DESC LIMIT 1";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $result['id'] ?? null;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function insert(
        $product_color_id,
        $quantity,
        $image = null
    ) {
        try {
            $product_id = $this->getLatestProductId();
            if (!$product_id) {
                throw new \Exception('No latest product found');
            }

            $sql = "INSERT INTO product_variants (
                        product_id,
                        product_color_id,
                        quantity,
                        image
                    ) VALUES (
                        :product_id,
                        :product_color_id,
                        :quantity,
                        :image
                    )";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':product_id', $product_id);
            $stmt->bindParam(':product_color_id', $product_color_id);
            $stmt->bindParam(':quantity', $quantity);
            $stmt->bindParam(':image', $image);
            $stmt->execute();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
