<?php require 'includes/common.php';
if (!isset($_SESSION['email']))
{
  header('location: index.php'); } ?>
<!DOCTYPE>
<html>
  <head>
    <title>LifeStyle Store - Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css"/>
  </head>

  <body>
    <?php include 'includes/header.php';

    ?>
    <div class="container" style="margin-top:200px;">
    <?php
    $user = $_SESSION['user'];
    $query = "SELECT * FROM user_items  JOIN items on item_id=items.id WHERE user_id='$user' AND status='Added to cart' ";
    $data=mysqli_query($con, $query) or die(mysqli_error($con));
    $num=mysqli_num_rows($data);
    if($num==0) {
      echo '<div class="jumbotron" ><center><p>Cart is Empty!</p></center></div>';
    }
    else{
      ?>
      <div class="row">
        <div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
              <tbody>
                <tr><th>Item Number</th> <th>Item Name</th> <th colspan="2">Price</th></tr>
                <?php
                  $id =array();
                  $sum=0;
                  $j=1;
                  while($row=mysqli_fetch_array($data))
                  {
                    $sum = $sum + $row['price'];
                    $i = $row['id'];
                    array_push($id,$i);?>
                    <tr><td> <?php echo $j;?></td> <td><?php echo $row['name'];?></td> <td><?php echo $row['price'];?></td><td><a value="remove" name="remove" class="btn btn-danger btn-block" href="includes/cart_remove.php?id=<?php echo $row['id']?>" >Remove Item</a></td></tr>;
              <?php  $j++;
              }
             ?>
                <tr><td colspan="2">Total</td> <td colspan="2">&#8377; <?php echo $sum."/-"; ?></td></tr>
                <tr><td colspan="4"><a value="submit" name="submit" class="btn btn-primary btn-block" href="success.php?id=<?php echo implode(",", $id ); ?>">Confirm Order</a></td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
    <?php include 'includes/footer.php' ?>
  </body>
</html>
