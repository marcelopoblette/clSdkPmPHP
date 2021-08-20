# PSTPagoFacil\ApiClient\WebhooksApi

All URIs are relative to *https://apis.pgf.cl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**webhooksIdUserGet**](WebhooksApi.md#webhooksIdUserGet) | **GET** /webhooks/{idUser} | 
[**webhooksIdUserWebhookDelete**](WebhooksApi.md#webhooksIdUserWebhookDelete) | **DELETE** /webhooks/{idUser}/{webhook} | 
[**webhooksIdUserWebhookPut**](WebhooksApi.md#webhooksIdUserWebhookPut) | **PUT** /webhooks/{idUser}/{webhook} | 
[**webhooksPost**](WebhooksApi.md#webhooksPost) | **POST** /webhooks | 



## webhooksIdUserGet

> \PSTPagoFacil\ApiClient\Model\InlineResponse2004 webhooksIdUserGet($id_user)



Obtiene la lista de webhooks de un usuario.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PSTPagoFacil\ApiClient\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_user = 123; // string | ID del usuario a consultar

try {
    $result = $apiInstance->webhooksIdUserGet($id_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksIdUserGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_user** | **string**| ID del usuario a consultar |

### Return type

[**\PSTPagoFacil\ApiClient\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## webhooksIdUserWebhookDelete

> \PSTPagoFacil\ApiClient\Model\InlineResponse201 webhooksIdUserWebhookDelete($id_user, $webhook)



Elimina un webhook del usuario y tipo especificados

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PSTPagoFacil\ApiClient\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_user = 123; // string | ID del usuario a consultar
$webhook = remittances; // string | Tipo de evento del webhook

try {
    $result = $apiInstance->webhooksIdUserWebhookDelete($id_user, $webhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksIdUserWebhookDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_user** | **string**| ID del usuario a consultar |
 **webhook** | **string**| Tipo de evento del webhook |

### Return type

[**\PSTPagoFacil\ApiClient\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## webhooksIdUserWebhookPut

> \PSTPagoFacil\ApiClient\Model\InlineResponse201 webhooksIdUserWebhookPut($id_user, $webhook, $inline_object)



Actualiza un webhook para tus servicios.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PSTPagoFacil\ApiClient\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_user = 123; // string | ID del usuario a consultar
$webhook = remittances; // string | Tipo de evento del webhook
$inline_object = new \PSTPagoFacil\ApiClient\Model\InlineObject(); // \PSTPagoFacil\ApiClient\Model\InlineObject | 

try {
    $result = $apiInstance->webhooksIdUserWebhookPut($id_user, $webhook, $inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksIdUserWebhookPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_user** | **string**| ID del usuario a consultar |
 **webhook** | **string**| Tipo de evento del webhook |
 **inline_object** | [**\PSTPagoFacil\ApiClient\Model\InlineObject**](../Model/InlineObject.md)|  | [optional]

### Return type

[**\PSTPagoFacil\ApiClient\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## webhooksPost

> \PSTPagoFacil\ApiClient\Model\InlineResponse201 webhooksPost($request_body_webhook)



Crea un webhook para tus servicios. <br> Se enviará un POST a esta URL cuando se realicen eventos como abonos a tu cuenta.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new PSTPagoFacil\ApiClient\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body_webhook = new \PSTPagoFacil\ApiClient\Model\RequestBodyWebhook(); // \PSTPagoFacil\ApiClient\Model\RequestBodyWebhook | 

try {
    $result = $apiInstance->webhooksPost($request_body_webhook);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->webhooksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body_webhook** | [**\PSTPagoFacil\ApiClient\Model\RequestBodyWebhook**](../Model/RequestBodyWebhook.md)|  | [optional]

### Return type

[**\PSTPagoFacil\ApiClient\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

