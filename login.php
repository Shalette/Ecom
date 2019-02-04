<?php require 'includes/common.php';
if (isset($_SESSION['email']))
{
  header('location: products.php'); } ?>
<!DOCTYPE>
<html>
  <head>
    <title>LifeStyle Store - Login</title>
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
              <h3><b>LOG IN</b></h3>
            </div>
            <div class="panel-body">
              <p class="text-warning">Login to make a purchase.</p>
              <form method="post" action="includes/login_submit.php">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" required = "true">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Login</button>
              </form>
            </div>
            <div class="panel-footer">
              <center><h5>Don't have an account? <a href="signup.php">Register</a></h5></center>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'includes/footer.php' ?>
  </body>
</html>
