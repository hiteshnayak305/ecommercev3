<?php
  //establise db connection
  require 'dbconnect.php';

  //get input
  $email = mysqli_real_escape_string($connection,$_POST['email']);
  $password = mysqli_real_escape_string($connection,$_POST['password']);
  $md5_password = md5($password);
  //user existence query
  $query = "SELECT id,email,name,password FROM users WHERE email='$email'";
  $result = mysqli_query($connection,$query) or die('email query unsuccessful!!!');
  $num_rows = mysqli_num_rows($result);

  //check existence
  if ($num_rows < 1) {
    header("Location: http://localhost/ecommercev3/index.php?err=no_user");
  } else {
    //check for password
    $res_arr = mysqli_fetch_array($result);
    if ($md5_password == $res_arr['password']) {
      //set Session
      $_SESSION['id'] = $res_arr['id'];
      $_SESSION['email'] = $res_arr['email'];
      $_SESSION['name'] = $res_arr['name'];
      header("Location: http://localhost/ecommercev3/home.php");
    } else {
      header("Location: http://localhost/ecommercev3/index.php?err=no_pass");
    }
  }
 ?>
