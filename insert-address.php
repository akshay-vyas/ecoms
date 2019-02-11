<?php 
include('dbconnect.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mobile=$_POST['mobile'];
$company = $_POST['company'];
$street = $_POST['street'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$buyer_id = $_POST['buyer_id'];


echo "insert into shipping_address values(null,'$buyer_id','$fname','$lname','$mobile','$company','$street','$country','$state','$city','$pincode')";
$insert_address = mysqli_query($conn,"insert into shipping_address values(null,'$buyer_id','$fname','$lname','$mobile','$company','$street','$country','$state','$city','$pincode')");



?>