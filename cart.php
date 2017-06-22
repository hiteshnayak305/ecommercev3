<?php
  require 'includes/dbconnect.php';
  if (!isset($_SESSION['email'])) {
    header("Location: http://localhost/ecommercev3/index.php");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>E- Store | Cart</title>
    <?php
      include 'includes/header.php'; ?>
  </head>

  <body>
    <!----   navbar   ---->
    <?php
      require 'includes/navigation.php'; ?>
    <!--       main body      -->
    <main>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
            <table class="table">
              <thead>
                <tr>
                  <th>Item Number</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $user_id = $_SESSION['id'];
                  $query = "SELECT * FROM user_items INNER JOIN items ON user_items.item_id = items.id WHERE status='Added to cart' AND user_id='$user_id'";
                  $result = mysqli_query($connection, $query) or die("can't fetch!!!");
                  if (mysqli_num_rows($result) < 1) {  ?>
                    <tr>
                      <td>&nbsp;</td>
                      <td>Add items to the cart first!</td>
                      <td>&nbsp;</td>
                      <td><a class="btn btn-primary" href="home.php">Go to home page!</a></td>
                    </tr>
                  <?php } else {
                      $price = 0;
                      $item_num = 1;
                      $url = "success.php?";
                      while ($row = mysqli_fetch_array($result)) {
                        $price = $price + $row['price'];
                        $rem_link = "includes/cart-remove.php?id=".$row['item_id'];
                        $url = $url."id[]=".$row['item_id']."&"; ?>
                        <tr>
                          <td><?php echo $item_num;?></td>
                          <td><?php echo $row['name'];?></td>
                          <td>Rs <?php echo $row['price'];?>.00/-</td>
                          <td><a class="btn btn-primary" href="<?php echo $rem_link;?>">Remove</a></td>
                        </tr>
                      <?php $item_num++;
                        }  ?>
                        <tr>
                          <td>&nbsp;</td>
                          <td>Total</td>
                          <td>Rs <?php echo $price;?>.00/-</td>
                          <td><a class="btn btn-primary" href="<?php echo $url;?>">Confirm Order</a></td>
                        </tr>
                    <?php } ?>
              </tbody>
            </table>
          </div><!--- col  -->
        </div><!----- row -->
      </div><!---   container ---->
    </main>
    <!--     footer     ---->
    <?php
      require 'includes/footer.php';  ?>
  </body>
</html>
