<?php
require_once(__DIR__ . '/vendor/autoload.php');
$apiInstance = new PSTPagoFacil\ApiClient\Api\AuthApi();
include 'auth.php';

$loginParams = [
    // here you put you Pago Fácil Account e-mail and password
    "username" =>$email_pago_facil,
    "password" => $password_pago_facil
];
$body = new \PSTPagoFacil\ApiClient\Model\LoginBody($loginParams);

try {
    $result = $apiInstance->usersLoginPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->usersLoginPost: ', $e->getMessage(), PHP_EOL;
}
?>