<?php


namespace Ngotr\Thithu0\Common;

use eftec\bladeone\BladeOne;

class Controller
{
    public function renderView($view, $data = [])
    {
        $templatePath = __DIR__ . '/../views';  // nó kết nối với view
        $compiledPath = __DIR__ . '/../Views/compiles'; // nó tạo ra file trong compiles
        $blade = new BladeOne($templatePath, $compiledPath); // hover vào biens này để lấy 2 biến trên
        echo $blade->run($view, $data);
    }
}


// $views = __DIR__ . '/views';
// $cache = __DIR__ . '/cache';
// $blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG);
// echo $blade->run("hello",array("variable1"=>"value1")); 