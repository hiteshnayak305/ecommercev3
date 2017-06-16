<!DOCTYPE html>
<html>
  <head>
    <title>E- Store | Signup</title>
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
            <img class="img-responsive" src="images/yess.jpg" alt="signup-img"/>
          </div>
          <div class="col-md-4 col-md-offset-2 col-sm-6">
            <h2>SIGN UP</h2>
            <form class="text-right" action="#" method="post">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Contact">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="City">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Address">
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
