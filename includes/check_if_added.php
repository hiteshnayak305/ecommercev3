<?php
  function check_if_added_to_cart($item_id){
    include 'dbconnect.php';
    $user_id = $_SESSION['id'];
    $query = "SELECT * FROM user_items WHERE item_id='$item_id' AND user_id='$user_id' AND status='Added to cart'";
    $result = mysqli_query($connection, $query);
    $rows = mysqli_num_rows($result);
    if ($rows >= 1) {
      return true;
    } else {
      return false;
    }
  }
 ?>
