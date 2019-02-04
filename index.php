<?php require 'includes/common.php';
if (isset($_SESSION['email'])) {
  header('location: products.php'); } ?>
<!DOCTYPE>
<html>
  <head>
    <title>LifeStyle Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css"/>
  </head>

  <body>
    <?php include 'includes/header.php' ?>
    <div id="banner_image">
      <div class="container">
        <center>
          <div id="banner_content">
            <h3>We sell lifestyle.</h3>
            <p>Flat 40% off on premium brands</p>
            <a href="products.php" class="btn btn-danger active">Shop Now</a>
          </div>
        </center>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <a href="products.html#camera">
            <div class="thumbnail">
              <img src="img/camera.jpg" alt="camera" >
              <div class="caption">
                <center>
                  <h3>Cameras</h3>
                  <p>Choose among the best available in the world.</p>
                </center>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4">
          <a href="products.php#watch">
            <div class="thumbnail">
              <img src="img/watch.jpg" alt="watch">
              <div class="caption">
                <center>
                  <h2>Watches</h2>
                  <p>Original watches from the best brands.</p>
                </center>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4">
          <a href="products.php#shirt">
            <div class="thumbnail">
              <img src="img/shirt.jpg" alt="shirt">
              <div class="caption">
                <center>
                  <h2>Shirts</h2>
                  <p>Our exquisite collection of shirts.</p>
                </center>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <?php include 'includes/footer.php' ?>
  </body>
</html>
