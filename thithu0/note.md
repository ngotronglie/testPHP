b1 : cd tới folder dự án

---

b2 : viết lệnh teminal : **Composer init** khởi tạo dự án

---

b3 : viết lệnh teminal : **composer require bramus/router ~1.6** để thêm thư viện này

---

b4 : viết lệnh teminal : **composer require eftec/bladeone** để thêm thư viện này

---

b5 : Tạo File **index.php**

---

b6 : Tạo File **env.php**

---

b7 : tạo File **helper.php** , **.htaccess**

---

b8: Trong file **helper.php** lấy 2 function là debug và e404

---

b9: Trong file **env.php** để fig define

---

b10: vào file **index.php** require_one tất cả các file vào

```php
    <?php
    session_start();

    require_once './vendor/autoload.php';
    require_once './env.php';
    require_once './helper.php';
```

---

b11: vào folder src tạo folder :

```
Commons:
Models:
Controllers:
Views:

```

---

b12: vào folder Commons tạo file

- Controller.php : file viết render ra view `public function renderView(){}`
  lên bladeone coppy cái này vào

```php
$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG);
echo $blade->run("hello",array("variable1"=>"value1"));
```

sau đó thay đổi thành

```php
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

```

- Model.php : file viết _kết nối cơ sở dữ liệu_ và khai báo bieens $conn

```php
<?php

namespace Ngotr\Thithu0\Common;

use PDO;
use PDOException;

class Model
{
    protected PDO|null $conn; // khai báo biến $conn

    public function __construct()
    {
        $host = 'localhost';
        $port = '3306';
        $dbname = 'thithu0';
        $username = 'root';
        $password = '';

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

```

---

b13: viết namespace và class giống tên File

---

b14: import database

---

b15: vào folder views tạo file **master.blade.php**

---

b16: tạo folder teacher trong folder views trong đó có file **index.blade.php** , **add.blade.php** , **update.blade.php**

b17: vào file **master.blade.php** viết html

- nên w3school lấy bootstrap [tại đây](https://www.w3schools.com/bootstrap5/)
- ta được

```html
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>

  <body>
    <div class="container">
      <div class="row">
        <h1>@yield('title')</h1>
        <!-- tiêu đề -->
        <!-- chút nữa cho các phần tử add , update, index trong folder views/teacher kia kế thừa -->
        @yield('content')
        <!-- table -->
      </div>
    </div>
  </body>
</html>
```

---

b18: vào các file add , update, index kế thừa lại master.blade.php

```php
@extends('master') // kế thừa file master
@section('title') // kế thừa  title
@endsection
@section('content')// kế thừa content
@endsection
{{-- cái này là kế thừa file --}}
```

---

b19: vào folder Models viết file **Teacher.php** kế thừa từ Model

- mục đích: viết lệnh sql

---

b20: vào folder Controllers vết file **TeacherController.php**

- file **TeacherController.php** ...

---

b21: vào thư viện route lấy code về ném vào file index

- search `mount` để lấy code về

```php
$router->mount('/movies', function() use ($router) {

    // will result in '/movies/'
    $router->get('/', function() {
        echo 'movies overview';
    });

    // will result in '/movies/id'
    $router->get('/(\d+)', function($id) {
        echo 'movie id ' . htmlentities($id);
    });

});

```

sau khi sửa đổi

```php
<?php

use Ngotr\Thithu0\Controllers\TeacherController;

session_start();

require_once './vendor/autoload.php';
require_once './env.php';
require_once './helper.php';


$router->mount('/teacher', function () use ($router) {

    // will result in '/movies/'
    $router->get('/', TeacherController::class . '@index');
    $router->get('/{id}/delete', TeacherController::class . '@delete');
    $router->get('/', TeacherController::class . '@index');
    $router->match('GET|POST', '/add', TeacherController::class . '@add');
    $router->match('GET|POST', '/${id}/update', TeacherController::class . '@update');

});

```

---

b22: vào _Models/Teacher.php_ viết hàm _getAll_ để lấy danh sánh teacher

```php
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

```

b23: qua **Controllers/TeacherController.php** vieets thêm biến

```php
public function index(){
    $data['teacher'] = (new Teacher)->getAll();
    return $this->renderView('teacher.index', $data);
}

```
