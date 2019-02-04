<?php require 'includes/common.php'; ?>
<!DOCTYPE>
<html>
  <head>
    <title>LifeStyle Store - Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css"/>
  </head>

  <body>
    <?php include 'includes/header.php';
        include 'includes/check_if_added.php'; ?>
    <div class="container" style="min-height:30%; margin-top:80px;">
      <div class="jumbotron">
        <center>
          <h1 style="padding-bottom: 10px;">Welcome to our Life Style Store!</h1>
          <p style="font-size:17px;">We have the best cameras, watches and shirts for you. No need to hunt around, it's all in one place.</p>
        </center>
      </div>
    </div>
    <div class="container">
      <div class="row" id="camera">
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img class="i" src="img/c1.jpg" alt="camera" >
              <div class="caption">
                <center>
                  <h3>Cannon EOS</h3>
                  <p>Price: &#8377; 36000.00</p>
                </center>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
               <?php
             }
               else {
                 if (check_if_added_to_cart($con, 1)) {
                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                  }
                  else { ?>
                           <a href="includes/cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                           <?php } }
                           ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img class="i" src="img/c2.jpg" alt="camera" >
              <div class="caption">
                <center>
                  <h3>Sony DSLR</h3>
                  <p>Price: &#8377; 40000.00</p>
                </center>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
               <?php
             }
               else {
                 if (check_if_added_to_cart($con, 2)) {
                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                  }
                  else { ?>
                           <a href="includes/cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                           <?php } }
                           ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img class="i" src="img/c3.jpg" alt="camera" >
              <div class="caption">
                <center>
                  <h3>Sony DSLR</h3>
                  <p>Price: &#8377; 50000.00</p>
                </center>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
               <?php
             }
               else {
                 if (check_if_added_to_cart($con, 3)) {
                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                  }
                  else { ?>
                           <a href="includes/cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                           <?php } }
                           ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">

            <div class="thumbnail">
              <img class="i" src="img/c4.jpg" alt="camera" >
              <div class="caption">
                <center>
                  <h3>Olympus DSLR</h3>
                  <p>Price: &#8377; 80000.00</p>
                </center>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                 <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
               <?php
             }
               else {
                 if (check_if_added_to_cart($con, 4)) {
                   echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                  }
                  else { ?>
                           <a href="includes/cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                           <?php } }
                           ?>
            </div>
        </div>
      </div>

      <div class="row" id="watch">
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img class="i" src="img/w1.jpg" alt="watch" >
              <div class="caption">
                <center>
                  <h3>Titan Model #301</h3>
                  <p>Price: &#8377; 13000.00</p>
                </center>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php
              }
              else {
                if (check_if_added_to_cart($con, 5)) {
                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                }
                else { ?>
                  <a href="includes/cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
               <?php } }
               ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img class="i" src="img/w2.jpg" alt="watch" >
              <div class="caption">
                <center>
                  <h3>Titan Model #201</h3>
                  <p>Price: &#8377; 3000.00</p>
                </center>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php
              }
              else {
                if (check_if_added_to_cart($con, 6)) {
                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                }
                else { ?>
                  <a href="includes/cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                <?php } }
                ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img class="i" src="img/w3.jpg" alt="watch" >
              <div class="caption">
                <center>
                  <h3>HMT Milan</h3>
                  <p>Price: &#8377; 8000.00</p>
                </center>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php
              }
              else {
                if (check_if_added_to_cart($con, 7)) {
                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                }
                else { ?>
                  <a href="includes/cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                <?php } }
                ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img class="i" src="img/w4.jpg" alt="watch" >
              <div class="caption">
                <center>
                  <h3>Faber Luna #111</h3>
                  <p>Price: &#8377; 18000.00</p>
                </center>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php
              }
              else {
                if (check_if_added_to_cart($con, 8)) {
                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                }
                else { ?>
                  <a href="includes/cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                <?php } }
                ?>
            </div>
        </div>
      </div>

      <div class="row" id="shirt">
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img class="i" src="img/s1.jpg" alt="shirt" >
              <div class="caption">
                <center>
                  <h3>H&amp;W</h3>
                  <p>Price: &#8377; 800.00</p>
                </center>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php
              }
              else {
                if (check_if_added_to_cart($con, 9)) {
                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                }
                else { ?>
                  <a href="includes/cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                <?php } }
                ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img class="i" src="img/s2.jpg" alt="shirt" >
              <div class="caption">
                <center>
                  <h3>Luis Phil</h3>
                  <p>Price: &#8377; 1000.00</p>
                </center>
              </div>
                <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php
              }
              else {
                if (check_if_added_to_cart($con, 10)) {
                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                }
                else { ?>
                  <a href="includes/cart_add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                <?php } }
                ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img class="i" src="img/s3.jpg" alt="shirt" >
              <div class="caption">
                <center>
                  <h3>John Zok</h3>
                  <p>Price: &#8377; 1500.00</p>
                </center>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php
              }
              else {
                if (check_if_added_to_cart($con, 11)) {
                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                }
                else { ?>
                  <a href="includes/cart_add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                <?php } }
                ?>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
              <img class="i" src="img/s4.jpg" alt="shirt" >
              <div class="caption">
                <center>
                  <h3>Jhalsani</h3>
                  <p>Price: &#8377; 1300.00</p>
                </center>
              </div>
              <?php if (!isset($_SESSION['email'])) { ?>
                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php
              }
              else {
                if (check_if_added_to_cart($con, 12)) {
                  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                }
                else { ?>
                  <a href="includes/cart_add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                <?php } }
                ?>
            </div>
        </div>
      </div>
    </div>
    <?php include 'includes/footer.php' ?>
  </body>
</html>
