<?php require 'common.php';
$user = $_SESSION['user'];
$id = mysqli_real_escape_string($con, $_GET['id']);
$query = "DELETE FROM user_items WHERE user_id='$user' AND item_id='$id' ";
$data = mysqli_query($con, $query) or die(mysqli_error($con));
header('location: ../cart.php');
?>
