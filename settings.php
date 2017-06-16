<!DOCTYPE html>
<html>
  <head>
    <title>E- Store | Change Passowrd</title>
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
            <h2>Change Password</h2>
            <form action="#" method="post">
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Old Password">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="New Password">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Re-type New Password">
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
