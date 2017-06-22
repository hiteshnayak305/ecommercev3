<?php
  require 'includes/dbconnect.php';
  if(!isset($_SESSION['email'])){
    header("Location: http://localhost/ecommercev3/index.php");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>E- Store | Home</title>
    <?php
      include 'includes/header.php'; ?>
  </head>

  <body>
    <!----   navbar   ---->
    <?php
      require 'includes/navigation.php';
      require 'includes/check_if_added.php'; ?>
    <!--       main body      -->
    <main>
      <div class="container-fluid">
        <div class="row">
          <?php
            $query_text = "SELECT * FROM items";
            $result = mysqli_query($connection,$query_text) or die(mysqli_error($result));
            $item_num = 1;
            while ($row = mysqli_fetch_array($result)) {  ?>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title text-center">Item <?php echo $item_num; ?></h3>
                  </div>
                  <div class="panel-body">
                    <img class="img-responsive" src="images/<?php echo $row['image']?>" alt="<?php echo $row['image']?>">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elitolore magna aliatur. im id est laborum.</p>
                    <?php
                      if (check_if_added_to_cart($row['id'])) {  ?>
                        <a class="btn btn-default btn-block disabled" href="#">Added to cart</a>
                      <?php } else {
                        $add = "includes/cart-add.php?id=".$row['id']; ?>
                        <a class="btn btn-primary btn-block" href="<?php echo $add;?>">Add to cart</a>
                    <?php
                          }
                        $item_num++;
                      }  ?>
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
