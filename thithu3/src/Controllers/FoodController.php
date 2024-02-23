<?php

namespace Ngotr\Thithu3\Controllers;

use Ngotr\Thithu3\Common\Controller;
use Ngotr\Thithu3\Models\Food;

class FoodController extends Controller
{
    private string $folder = 'food.';
    public function index()
    {
        $data['food'] = (new Food)->getAllFood();
        return $this->renderView($this->folder . __FUNCTION__, $data);
    }
    public function add()
    {
        if (!empty($_POST)) {
            $name = $_POST['name'];
            $code = $_POST['code'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            (new Food)->insert($name, $code, $price, $description);
            header('location: /food');
        }
        return $this->renderView($this->folder . __FUNCTION__);
    }
    public function update($id)
    {
        $data['food'] = (new Food)->getId($id);
        if (!empty($_POST)) {
            $name = $_POST['name'];
            $code = $_POST['code'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            (new Food)->update($id, $name, $code, $price, $description);
            header('location: /food');
        }
        return $this->renderView($this->folder . __FUNCTION__, ['food' => $data]);
    }
    public function delete($id)
    {
        (new Food)->delete($id);
        header('location: /food');
    }
}