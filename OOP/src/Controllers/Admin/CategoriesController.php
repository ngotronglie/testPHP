<?php

namespace Ngotr\Oop\Controllers\Admin;

use Ngotr\Oop\Commons\Controller;
use Ngotr\Oop\Models\Categories;
use Ngotr\Oop\Models\Category;

class CategoriesController extends Controller
{
    private Category $categories;
    private string $folder = 'categories.';
    public function __construct()
    {
        $this->categories = new Category();
    }
    public function index()
    {
        $data['categories'] = $this->categories->getAllCategories();
        return $this->renderViewAdmin($this->folder . __FUNCTION__, $data);
    }
    public function create()
    {
        if (!empty($_POST)) {
            $name = $_POST['name'];
            $this->categories->insertCategories($name);
            header('Location: /admin/categories');
            exit();
        }
        return $this->renderViewAdmin($this->folder . __FUNCTION__);
    }
    public function update($id)
    {
        $Categories = $this->categories->getByIdCategories($id);
        if (empty($Categories)) {
            e404();
        }
        if (!empty($_POST)) {

            $name = $_POST['name'];
            $this->categories->updateCategories($id, $name);
            header('Location: /admin/categories');
            exit();
        }

        return $this->renderViewAdmin($this->folder . __FUNCTION__, ['Categories' => $Categories]);
    }
    public function delete($id)
    {
        $Categories = $this->categories->getByIdCategories($id);
        if (empty($Categories)) {
            e404();
        }
        $this->categories->deleteByIDCategories($Categories['id']);

        header('Location: /admin/categories');
        exit();
    }
}