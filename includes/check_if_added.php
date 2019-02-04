<?php
function check_if_added_to_cart($con, $item_id){
$user_id = $_SESSION['user'];
$query = "SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' AND status='Added to cart'";
$data = mysqli_query($con, $query);
if(mysqli_num_rows($data)>0){
  return 1;
}
else{
  return 0;
}
}
?>
