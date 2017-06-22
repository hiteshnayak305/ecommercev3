<!DOCTYPE html>
<html>
  <head>
    <title>E- Store | Contact Us</title>
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
          <div class="col-md-9 col-sm-8">
            <h3>LIVE SUPPORT</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-md-3 col-sm-4">
            <img class="img-responsive" src="images/contact.png" alt="contact-icon"/>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 col-sm-6">
            <h3>CONTACT US</h3>
            <form action="includes/feedback.php" method="post">
              <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" id="name">
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email" id="email">
              </div>
              <div class="form-group">
                <label for="msg">Message:</label>
                <textarea class="form-control" name="message" id="msg" rows="6" cols="80"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="col-md-4 col-sm-6">
            <h3>COMPANY INFORMATION :</h3>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </main>
    <!--     footer     ---->
    <?php
      require 'includes/footer.php';  ?>
  </body>
</html>
