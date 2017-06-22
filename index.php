<?php
  require 'includes/dbconnect.php';
  if (isset($_SESSION['email'])) {
    header("Location: http://localhost/ecommercev2/home.php");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>E- Store | Welcome</title>
    <?php
      include 'includes/header.php'; ?>
  </head>

  <body>
    <!----   navbar   ---->
    <?php
      require 'includes/navigation.php'; ?>
    <!--       main body     -->
    <main>
      <div class="container-fluid">
        <div class="row">
          <?php
            $query_text = "SELECT * FROM items";
            $result = mysqli_query($connection,$query_text) or die(mysqli_error($result));
            while ($row = mysqli_fetch_array($result)) {  ?>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Mobile 1</h3>
                  </div>
                  <div class="panel-body">
                    <img class="img-responsive" src="images/<?php echo $row['image']?>" alt="<?php echo $row['image']?>">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitolore magna aliatur. im id est laborum.</p>
                    <a href="#" class="btn btn-primary btn-block">Order Now!</a>
                  </div>
                </div>
              </div><!--col-->
          <?php
            } ?>
        </div><!--  row  -->
      </div>
    </main>
    <!--     footer     ---->
    <?php
      require 'includes/footer.php';  ?>
  </body>
</html>
