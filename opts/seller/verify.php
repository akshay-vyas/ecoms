<?php 
function check($data)
{
	$data1 = trim($data);
	$data1 = stripslashes($data);
	$data1 = htmlspecialchars($data);
	return $data1;
}

?>