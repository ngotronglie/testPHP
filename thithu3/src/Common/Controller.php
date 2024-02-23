<?php

namespace Ngotr\Thithu3\Common;

use eftec\bladeone\BladeOne;

class Controller
{
    public function renderView($view, $data = [])
    {
        $templatePath = __DIR__ . '/../Views';
        $compiledPath = __DIR__ . '/../Views/compiles';
        $blade = new BladeOne(
            $templatePath,
            $compiledPath
        ); // MODE_DEBUG allows to pinpoint troubles.
        echo $blade->run($view, $data); // it calls /views/hello.blade.php
    }
}