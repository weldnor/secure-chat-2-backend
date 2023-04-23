<?php

require_once('EasyAES.php');

$response = array();

$easyAES = new EasyAES("SUPER_SECRET_KEY");

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
	$decrypted_data = $easyAES->decrypt($data);

	$response["data"] = $decrypted_data;
}

echo json_encode($response);
?>
