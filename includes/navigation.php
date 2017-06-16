<!--    navigation bar   -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><strong>E- Store</strong></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div id="navi" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <?php
          if (isset($_SESSION['email'])){
         ?>
         <li><a href="cart.php"><strong> <span class="glyphicon glyphicon-shopping-cart"></span>  Cart</strong></a></li>
         <li><a href="settings.php"><strong> <span class="glyphicon glyphicon-cog"></span>  Settings</strong></a></li>
         <li><a href="includes/logout_script.php"><strong> <span class="glyphicon glyphicon-log-out"></span>  Logout</strong></a></li>
        <?php
          }else {
         ?>
         <li><a href="signup.php"><strong> <span class="glyphicon glyphicon-user"></span>  Signup</strong></a></li>
         <li><a data-toggle="modal" data-target="#login_modal"><strong> <span class="glyphicon glyphicon-log-in"></span>  Login</strong></a></li>
         <li><a href="about.php"><strong> <span class="glyphicon glyphicon-tasks"></span>  About Us</strong></a></li>
         <li><a href="contact.php"><strong> <span class="glyphicon glyphicon-phone"></span>  Contact Us</strong></a></li>
        <?php
          }
         ?>
      </ul>
    </div>
  </div>
</nav>

<?php
  if (!isset($_SESSION['email'])) { ?>
    <!--  modal for login  -->
    <div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="Login">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="Login">LOGIN</h4>
          </div>
          <div class="modal-body">
            <form action="includes/login_script.php" method="post">
              <p>Don't have an account? <a class="text-info" href="signup.php">Register</a></p>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form><br>
            <a class="text-info" href="#">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
<?php
  } ?>
