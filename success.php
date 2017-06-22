<?php
  require 'includes/dbconnect.php';
  if (!isset($_SESSION['email'])) {
    header("Location: http://localhost/ecommercev3/index.php");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>E- Store | Success</title>
    <?php
      include 'includes/header.php'; ?>
  </head>

  <body>
    <!----   navbar   ---->
    <?php
      require 'includes/navigation.php'; ?>
    <!--       main body      -->
    <main>
      <?php
        $id = $_GET['id'];
        $user_id = $_SESSION['id'];
        foreach ($id as $value) {
          $query = "UPDATE user_items SET status='Confirmed' WHERE item_id='$value' AND user_id='$user_id'";
          $status = mysqli_query($connection,$query) or die('unable to confirm!!!');
        }
      ?>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <p class="lead text-center">Thankyou! for ordering from E-Store. The order shall be delivered to you shortly.</p>
            <br><br>
            <p class="text-center">Order some more electronic items <a class="text-info" href="home.php">here.</a></p>
          </div><!--- col  -->
        </div><!----- row -->
      </div><!---   container ---->
    </main>
    <!--     footer     ---->
    <?php
      require 'includes/footer.php';  ?>
  </body>
</html>
