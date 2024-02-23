<?php


namespace Ngotr\Thithu0\Controllers;

use Ngotr\Thithu0\Common\Controller;
use Ngotr\Thithu0\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        $data['teachers'] = (new Teacher)->getAll();
        debug($data['teachers']);
        return $this->renderView('teacher.index', $data);  // trỏ đến common và renderview ra 
    }
    public function update($id)
    {
    }
    public function delete($id)
    {
    }
    public function add()
    {
    }
}