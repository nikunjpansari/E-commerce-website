<?php
include '/includes/common.php';
$crd="INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$unr= mysqli_query($con, $crd) or die(mysqli_error($con));
header('location: products.php');// header('Location: http://localhost/member_area.php');
?>
