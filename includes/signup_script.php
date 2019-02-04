<?php require 'common.php';
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, md5(md5($_POST['password'])));
$contact = mysqli_real_escape_string($con, $_POST['contact']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$query = "insert into users(name, email, password, contact, city, address)values('$name', '$email', '$password', '$contact', '$city', '$address')";
$query1= "select id from users where email='$email'";
if(mysqli_num_rows(mysqli_query($con, $query1))==0) {
$submit = mysqli_query($con, $query) or die($con);
  echo "Submission successful";
}
else {
  echo "User already exists.";
}
?>
