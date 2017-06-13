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
          <div class="col-md-6 col-sm-6">
            <img class="img-responsive" src="images/3.jpg" alt="img"/>
          </div>
          <div class="col-md-4 col-md-offset-2 col-sm-6">
            <h2>SIGN UP</h2>
            <form class="text-right" action="#" method="post">
              <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </main>
    <!--     footer     ---->
    <?php
      require 'includes/footer.php';  ?>
  </body>
</html>
