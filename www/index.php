<?php

$response = array();

if (isset($_GET["data"])) { 
    $data = $_GET['data'];
}

if($data == null){
	$response["status"] = 0;
	$response["data"] = "no data sent";
}
else
{
	$response["status"] = 1;
	$response["data"] = $data;
}

echo json_encode($response);
?>
