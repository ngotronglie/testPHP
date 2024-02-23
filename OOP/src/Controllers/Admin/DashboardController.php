<?php

namespace Ngotr\Oop\Controllers\Admin;

use Ngotr\Oop\Commons\Controller;

class DashBoardController extends Controller
{
    public function index()
    {
        return $this->renderViewAdmin('master');
    }
}
