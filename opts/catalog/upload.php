<?php
include('dbconnect.php');
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
?>