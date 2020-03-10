# sk1.github.io
<?php
$api_key = $_GET['key'];
$contacts = $_GET['contacts'];
$from = $_GET['senderid'];
$sms_text = $_GET['msg'];
$encoded_text = utf8_encode($sms_text);
$message = urlencode($encoded_text);

$api_url = "http://www.logonutility.in/app/smsapi/index.php?key=".$api_key."&campaign=1&routeid=20&type=unicode&contacts=".$contacts."&senderid=".$from."&msg=".$message;

//Submit to server
$response = file_get_contents( $api_url);
echo $response;

?>
