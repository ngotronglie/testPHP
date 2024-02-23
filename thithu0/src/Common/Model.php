<?php

namespace Ngotr\Thithu0\Common;

use PDO;
use PDOException;

class Model
{
    protected PDO|null $conn; // khai báo biến $conn
    public function __construct()
    {
        $host = DB_HOST;
        $port = DB_PORT;
        $dbname = DB_USERNAME;
        $username = DB_NAME;
        $password = DB_PASSWORD;

        try {
            $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $PDOException) {
            echo "Kết nối thất bại: " . $PDOException->getMessage();
            die;
        }
    }
    public function __destruct()
    {
        $conn = null;
    }
}