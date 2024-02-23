<?php

namespace Ngotr\Thithu3\Models;

use Exception;
use Ngotr\Thithu3\Common\Model;
use PDO;

class Food extends Model
{
    public function getAllFood()
    {
        try {
            $sql = "SELECT * FROM food order by id desc";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }


    public function insert($name, $code, $price, $description)
    {
        try {
            $sql = "INSERT INTO `food` ( `name`, `code`, `price`, `description`) 
            VALUES ( :name, :code , :price, :description);";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':code', $code);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':description', $description);

            $stmt->execute();

        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    public function update($id, $name, $code, $price, $description)
    {
        try {
            $sql = "UPDATE `food` SET 
            `name` = :name, 
            `code` = :code, 
            `price` = :price, 
            `description` = :description 
            WHERE `food`.`id` = :id;";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':code', $code);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':description', $description);

            $stmt->execute();

        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM `food` WHERE `food`.`id` = :id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->execute();

        } catch (Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    public function getId($id)
    {
        try {
            $sql = "SELECT * FROM food WHERE id = :id";

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