<?php
include('dbconnect.php');

date_default_timezone_set('Asia/Kolkata');      
$date=date("Y/m/d h:i:sa");

if (isset($_POST['upload'])) {
    // Get image name

    $product_id= $_POST['product_id'];

    $image = $_FILES['file']['name'];
    // Get text

    

    // image file directory
    $target = "uploads/".basename($image);
    //echo "file uploaded";

    $sql = "INSERT INTO images VALUES (null, '$image','$product_id')";
    // execute query
    mysqli_query($conn, $sql);
     //echo "executed query";

    if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
      echo  "Image uploaded successfully";
      header('Location: image-upload.php');
    }
    else{
      echo  "Failed to upload image";
    }
  }
  //$result = mysqli_query($db, "SELECT * FROM images");

  if (isset($_POST['analytics'])) {
    // Get image name

    $product_id= $_POST['product_id'];

    $image = $_FILES['file']['name'];
    // Get text

    

    // image file directory
    $target = "analytics-report/".basename($image);
    //echo "file uploaded";

    $sql = "INSERT INTO analytics_report VALUES (null, '$image','$product_id','$date')";
    // execute query
    mysqli_query($conn, $sql);
     //echo "executed query";

    if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
      echo  "Image uploaded successfully";
      header('Location: analytics-report-upload.php');
    }
    else{
      echo  "Failed to upload image";
    }
  }
?>