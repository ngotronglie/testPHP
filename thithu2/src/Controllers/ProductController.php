<?php


namespace Ngotr\Thithu2\Controllers;

use Ngotr\Thithu2\Common\Controller;
use Ngotr\Thithu2\Models\Product;

class ProductController extends Controller
{
    private string $folder = 'Product.';
    public function index()
    {
        $data['products'] = (new Product)->getAllProduct();
        return $this->renderView($this->folder . __FUNCTION__, $data);
    }
    public function add()
    {
        if (!empty($_POST)) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $content = $_POST['content'];
            (new Product)->insert($name, $price, $content);
            header('location: /Product');
        }

        return $this->renderView($this->folder . __FUNCTION__);
    }
    public function update($id)
    {
        $product = (new Product)->getProductByID($id);
        if (empty($product)) {
            echo 'không có product này';
        }

        if (!empty($_POST)) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $content = $_POST['content'];
            (new Product)->updatePro($id, $name, $price, $content);
            header('location: /Product');
        }

        return $this->renderView($this->folder . __FUNCTION__, ['product' => $product]);
    }
    public function delete($id)
    {
        (new Product)->deletePro($id);
        header('location: /Product');
    }

}