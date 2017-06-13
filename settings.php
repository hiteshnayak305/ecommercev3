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
          <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
            <h2>SIGN UP</h2>
            <form action="index.html" method="post">
              <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="">
              </div>
              <button type="submit" class="btn btn-primary">Change</button>
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
