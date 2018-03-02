<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json;charset=utf-8');

require_once dirname(__FILE__) . '/unirest-php/src/Unirest.php';
require_once dirname(__FILE__) . '/Config.php';

//==================== Connect To Dialog Flow ==================
$txttodialogflow = $_GET['txttodialogflow'];
$headers = array("contentType"=>"application/json; charset=utf-8","Authorization"=>"Bearer ".$ClientToken);
$url = "https://api.api.ai/v1/query?v=" . $qversion.'&query='.$txttodialogflow.'&sessionId=Form PHP-DialogFuel'.'&lang='.$lang.'';
$response = Unirest\Request::get($url, $headers);


//============== Formatting Data to Chatfuel Json =============
$response_body = json_decode($response->raw_body,true);
$getword = $response_body['result']['fulfillment']['speech'];

if($getword !=null && $getword !='')
{
	$messages = array(
		'messages' => array(
			0 => array(
				'text' => $getword,
			),
		),
	);
}
else
{

	$messages = array(
		'messages' => array(
			0 => array(
				'text' => 'Sorry,Chatbot is Error.',		// Remove 'Sorry,Chatbot is Error.' if you Don't want to Show Error Message.
			),
		),
	);
}

//================== Send to Chatfuel Block ==================
$return_messages = json_encode($messages);
print_r($return_messages);

?>

 

 
