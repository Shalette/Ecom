<?php require 'common.php';
if (!isset($_SESSION['email'])){
  header('location: ../index.php');
}
else {
  $email=$_SESSION['email'];
  $password = mysqli_real_escape_string($con, md5(md5($_POST['password'])));
  $password1 = mysqli_real_escape_string($con, md5(md5($_POST['new-password-1'])));
  $password2= mysqli_real_escape_string($con, md5(md5($_POST['new-password-2'])));
  $query= "select password from users where email='$email'";
  $data = mysqli_query($con, $query) or die(mysqli_error($con));
  $info = mysqli_fetch_array($data);
  if($info['password'] == $password){
    if($password1==$password2){
    $query1="update users set password='$password1' where email='$email";
      $result= mysqli_query($con, $query1) or die($con);
    echo "Password Updated.";
    }
    else{
      echo "New password entries do not match.";
    }
  }
  else{
    echo "Wrong Password";
  }
}
  ?>
