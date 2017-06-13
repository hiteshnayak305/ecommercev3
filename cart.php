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
            <table class="table">
              <thead>
                <tr>
                  <th>Item Number</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#</td>
                </tr>
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
