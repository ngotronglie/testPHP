<?php

namespace Ngotr\Thithu0\Models;

use Ngotr\Thithu0\Common\Model;

class Teacher extends Model
{
    public function getAll()
    {
        try {
            $sql = "SELECT * FROM teacher";

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

}