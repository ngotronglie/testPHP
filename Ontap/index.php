<?php
session_start();

require_once 'vendor/autoload.php';
require_once './env.php';
require_once './helpers.php';
require_once './router.php';


echo '<br>';
if ($_SESSION) {
  echo '
    <div class="container">
      <div class="mt-5 alert alert-success">
        Đã có session!
      </div>
    </div>
  ';
} else {
  echo '
    <div class="container">
      <div class="mt-5 alert alert-warning">
        Chưa có session!
      </div>
    </div>
  ';
}

