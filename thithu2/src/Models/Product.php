<?php

namespace Ngotr\Thithu2\Models;

use Exception;
use Ngotr\Thithu2\Common\Model;
use PDO;

class Product extends Model
{
    public function getAllProduct()
    {
        try {
            $sql = "SELECT * FROM product order by id desc";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    public function insert($name, $price, $content)
    {
        try {

            $sql = "
            INSERT INTO `product` (`name`, `price`, `content`) 
            VALUES (:name, :price, :content)
            ";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':content', $content);

            $stmt->execute();
        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    public function updatePro($id, $name, $price, $content)
    {
        try {

            $sql = "
            UPDATE `product` 
            SET `name` = :name, 
            `price` = :price,
            `content` = :content 
            WHERE `product`.`id` = :id;
            ";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':content', $content);

            $stmt->execute();
        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    public function deletePro($id)
    {
        try {

            $sql = "
            DELETE FROM `product` 
            WHERE `product`.`id` = :id;
            ";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function getProductByID($id)
    {
        try {
            $sql = "SELECT * FROM product WHERE id = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
}