<?php 
include('dbconnect.php');
$categoryId = $_GET['categoryId'];

if(!empty($_GET["category_id"])) {
	$query ="SELECT * FROM sub_category WHERE category_id = '" . $_GET["category_id"] . "'";
	$res= mysqli_query($conn,$query);
?>
	<option value="">Select subcategory</option>
<?php
	foreach($res as $subcategory) {
?>
	<option value="<?php echo $subcategory["sub_category_id"]; ?>"><?php echo $subcategory["sub_category_name"]; ?></option>
<?php
	}
}
?>