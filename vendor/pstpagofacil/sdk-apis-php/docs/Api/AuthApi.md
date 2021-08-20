# PSTPagoFacil\ApiClient\AuthApi

All URIs are relative to *https://apis.pgf.cl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**usersLoginPost**](AuthApi.md#usersLoginPost) | **POST** /users/login | Autentificación con usuario y clave.



## usersLoginPost

> \PSTPagoFacil\ApiClient\Model\LoginResponse usersLoginPost($login_body)

Autentificación con usuario y clave.

Retorna un token con el que se deben realizar las llamadas al resto de los endpoints del API. Sin este token no se pueden acceder a los endpoints. <br> Se deben ingresar \"user\" y \"password\" válidos, creados a través del dashborad de Pago Fácil <br> No requiere configuración de autorización <br> Endpoints <br> - Producción https://apis.pgf.cl - Desarrollo https://apis-dev.pgf.cl

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PSTPagoFacil\ApiClient\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$login_body = new \PSTPagoFacil\ApiClient\Model\LoginBody(); // \PSTPagoFacil\ApiClient\Model\LoginBody | 

try {
    $result = $apiInstance->usersLoginPost($login_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->usersLoginPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login_body** | [**\PSTPagoFacil\ApiClient\Model\LoginBody**](../Model/LoginBody.md)|  | [optional]

### Return type

[**\PSTPagoFacil\ApiClient\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

