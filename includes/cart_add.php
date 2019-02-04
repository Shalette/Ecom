<?php require 'common.php';
$user_id = $_SESSION['user'];
$item_id = $_GET['id'];
$query = "INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$data = mysqli_query($con, $query) or die(mysqli_error($con));
header('location: ../products.php');
?>
