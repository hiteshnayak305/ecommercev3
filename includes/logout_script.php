<?php
  session_start();
  if (!isset($_SESSION['email'])) {
    header("Location: http://localhost/ecommercev2/index.php");
  } else {
    session_destroy();
    header("Location: http://localhost/ecommercev2/index.php");
  }
 ?>
