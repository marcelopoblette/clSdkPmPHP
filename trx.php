
<?php
require_once(__DIR__ . '/vendor/autoload.php');
use PSTPagoFacil\SignatureHelper; //using Pago Fácil SignatureHelper Library
include 'auth.php';


$tokenService = $tokenServiceDashboard; // put your Token Service here
$tokenSecret = $tokenSecretDashboard;  // put your Token Secret here
$x_reference = (int) microtime(true); //Just a random number as an example 
$x_session_id = (int) microtime(true); //Just a random number as an example 
$sHelper = new SignatureHelper($tokenSecret);

// Building the trx

$trxBody = [
    "x_account_id"=> $tokenService,
    "x_amount"=> 1000000,
    "x_currency"=> "CLP",
    "x_reference"=> $x_reference,
    "x_customer_email"=> "correo@correo.cl",
     "x_url_complete"=> "https://postman-echo.com/post",
    "x_url_cancel"=> "https://postman-echo.com/post",
    "x_url_callback"=> "https://postman-echo.com/post",
     "x_shop_country"=> "CL",
    "x_session_id"=> "$x_session_id"
];

// Signing trx with 

$firma = $sHelper->signPayload($trxBody);
$x_signature = $sHelper->signPayload($trxBody);
$trxBody["x_signature"] = $x_signature;

// Posting Signed trx with Pago Fácil SignatureHelper Library
$payload = json_encode($trxBody);
// print_r($payload); //payload ready to be sent

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => $devEnv,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => $payload,
  CURLOPT_HTTPHEADER => [
    "Accept: application/json",
    "Content-Type: application/json"
  ],
]);

// Requesting the Response
$response = curl_exec($curl);

$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
    $jsonResponse = json_decode($response);

    print_r ($jsonResponse); //here you can see the JSON Response Object

/*  0 gateway
    1 webpay
    2 khipu max 5mm
    3 multicaja error
    4 pago 46
    5 mach
*/

    // $url = $jsonResponse->data->payUrl[0]->url; // here you choose your payUrl
    // echo $url,"\n\n";
}