<?php require 'includes/common.php';
if (isset($_SESSION['email'])) {
  header('location: products.php'); }
?>
<!DOCTYPE>
<html>
  <head>
    <title>LifeStyle Store - Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css"/>
  </head>

  <body>
    <?php include 'includes/header.php' ?>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
          <div class="panel panel-default" style="margin-top:80px;">
            <div class="panel-heading">
              <h3><b>SIGN UP</b></h3>
            </div>
            <div class="panel-body">
              <form action="includes/signup_script.php" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name" name="name" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required = "true">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required = "true">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password" name="password" pattern=".{6,}" required = "true">
                </div>
                <div class="form-group">
                  <input type="tel" class="form-control" placeholder="Contact" name="contact" pattern="[0-9]{10}" required = "true">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="City" name="city" required = "true">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Address" name="address" required = "true">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'includes/footer.php' ?>
  </body>
</html>
