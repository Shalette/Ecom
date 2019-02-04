<?php require 'common.php';
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, md5(md5($_POST['password'])));
$query1= "select id, password from users where email='$email'";
$data = mysqli_query($con, $query1);
if(mysqli_num_rows($data)!=0) {
  $info = mysqli_fetch_array($data);
  if($info['password'] == $password){
    $_SESSION['email']=$email;
    $_SESSION['user']=$info['id'];
    $_SESSION['id']=mysqli_insert_id($con);
    header('location: ../products.php');
  }
  else{
    echo "Incorrect password.";
  }
}
else {
  echo "User doesn't exist.";
}
?>
