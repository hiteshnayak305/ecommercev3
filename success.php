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
      require 'includes/navigation.php'; ?>
    <!--       main body      -->
    <main>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <p class="lead text-center">Thankyou! for ordering from E-Store. The order shall be delivered to you shortly.</p>
            <br><br>
            <p class="text-center">Order some more electronic items <a class="text-info" href="#">here.</a></p>
          </div><!--- col  -->
        </div><!----- row -->
      </div><!---   container ---->
    </main>
    <!--     footer     ---->
    <?php
      require 'includes/footer.php';  ?>
  </body>
</html>
