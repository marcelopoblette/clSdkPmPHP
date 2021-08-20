# PSTPagoFacil\ApiClient\TrxsApi

All URIs are relative to *https://apis.pgf.cl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**trxsIdGet**](TrxsApi.md#trxsIdGet) | **GET** /trxs/{id} | Obtiene la informacion de la transacción exitosa, asociada a un id
[**trxsIdTrxNullificationGet**](TrxsApi.md#trxsIdTrxNullificationGet) | **GET** /trxs/{idTrx}/nullification/ | 
[**trxsIdTrxNullificationPost**](TrxsApi.md#trxsIdTrxNullificationPost) | **POST** /trxs/{idTrx}/nullification | 
[**trxsIdTrxNullificationStatusGet**](TrxsApi.md#trxsIdTrxNullificationStatusGet) | **GET** /trxs/{idTrx}/nullification/status | 
[**trxsPost**](TrxsApi.md#trxsPost) | **POST** /trxs | 



## trxsIdGet

> \PSTPagoFacil\ApiClient\Model\ResponseBodyGetTrx trxsIdGet($id)

Obtiene la informacion de la transacción exitosa, asociada a un id

Retorna información de una transacción asociada a un id, para lo que debe ingresarse en el URL el ID de la transacción a consultar. <br> El token de autorización es el obtenido a través de /Login (\"Inherit from parent\") <br> Endpoints <br> - Producción https://apis.pgf.cl/trxs/{id} <br> - Desarrollo https://apis-dev.pgf.cl/trxs/{id}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWTToken
$config = PSTPagoFacil\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PSTPagoFacil\ApiClient\Api\TrxsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 3.4; // float | 

try {
    $result = $apiInstance->trxsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrxsApi->trxsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **float**|  |

### Return type

[**\PSTPagoFacil\ApiClient\Model\ResponseBodyGetTrx**](../Model/ResponseBodyGetTrx.md)

### Authorization

[JWTToken](../../README.md#JWTToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## trxsIdTrxNullificationGet

> \PSTPagoFacil\ApiClient\Model\InlineResponse2002 trxsIdTrxNullificationGet($id_trx)



Obtiene las anulaciones asociadas a una transacción

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWTToken
$config = PSTPagoFacil\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PSTPagoFacil\ApiClient\Api\TrxsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_trx = 3.4; // float | 

try {
    $result = $apiInstance->trxsIdTrxNullificationGet($id_trx);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrxsApi->trxsIdTrxNullificationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_trx** | **float**|  |

### Return type

[**\PSTPagoFacil\ApiClient\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[JWTToken](../../README.md#JWTToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## trxsIdTrxNullificationPost

> \PSTPagoFacil\ApiClient\Model\ResponseBodyNullification trxsIdTrxNullificationPost($id_trx, $request_body_nullification)



Envía una transacción a anular

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWTToken
$config = PSTPagoFacil\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PSTPagoFacil\ApiClient\Api\TrxsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_trx = 3.4; // float | 
$request_body_nullification = new \PSTPagoFacil\ApiClient\Model\RequestBodyNullification(); // \PSTPagoFacil\ApiClient\Model\RequestBodyNullification | 

try {
    $result = $apiInstance->trxsIdTrxNullificationPost($id_trx, $request_body_nullification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrxsApi->trxsIdTrxNullificationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_trx** | **float**|  |
 **request_body_nullification** | [**\PSTPagoFacil\ApiClient\Model\RequestBodyNullification**](../Model/RequestBodyNullification.md)|  | [optional]

### Return type

[**\PSTPagoFacil\ApiClient\Model\ResponseBodyNullification**](../Model/ResponseBodyNullification.md)

### Authorization

[JWTToken](../../README.md#JWTToken)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## trxsIdTrxNullificationStatusGet

> \PSTPagoFacil\ApiClient\Model\InlineResponse2003 trxsIdTrxNullificationStatusGet($id_trx, $verification_token)



Obtiene el estado de una anulación

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWTToken
$config = PSTPagoFacil\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PSTPagoFacil\ApiClient\Api\TrxsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_trx = 3.4; // float | 
$verification_token = 'verification_token_example'; // string | 

try {
    $result = $apiInstance->trxsIdTrxNullificationStatusGet($id_trx, $verification_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrxsApi->trxsIdTrxNullificationStatusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_trx** | **float**|  |
 **verification_token** | **string**|  |

### Return type

[**\PSTPagoFacil\ApiClient\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[JWTToken](../../README.md#JWTToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## trxsPost

> \PSTPagoFacil\ApiClient\Model\InlineResponse2001 trxsPost($request_body_trx)



Crea una transaccion en estado pendiente. <br> La respuesta tiene distintos métodos y URLs para pago

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PSTPagoFacil\ApiClient\Api\TrxsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body_trx = new \PSTPagoFacil\ApiClient\Model\RequestBodyTrx(); // \PSTPagoFacil\ApiClient\Model\RequestBodyTrx | 

try {
    $result = $apiInstance->trxsPost($request_body_trx);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrxsApi->trxsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body_trx** | [**\PSTPagoFacil\ApiClient\Model\RequestBodyTrx**](../Model/RequestBodyTrx.md)|  | [optional]

### Return type

[**\PSTPagoFacil\ApiClient\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

