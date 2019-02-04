<?php require 'includes/common.php';
if (!isset($_SESSION['email']))
{
  header('location: index.php'); }?>
<!DOCTYPE>
<html>
  <head>
    <title>LifeStyle Store - Transaction Successful</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css"/>
  </head>

  <body>
    <?php include 'includes/header.php';

    ?>
    <div class="container" style="margin-top:100px;">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
          <div class="jumbotron">
            <?php
            $user_id=$_SESSION['user'];
              foreach(explode(",", $_GET['id']) as $row)
              {
                $query = "UPDATE user_items SET status='Confirmed' where item_id='$row' AND user_id='$user_id'";
                $data = mysqli_query($con, $query);
              }
              ?>
            <p>Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to continue shopping.</p>
          </div>
        </div>
      </div>
    </div>
    <?php include 'includes/footer.php' ?>
  </body>
</html>
