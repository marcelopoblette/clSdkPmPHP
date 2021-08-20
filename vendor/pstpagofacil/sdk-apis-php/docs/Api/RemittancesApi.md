# PSTPagoFacil\ApiClient\RemittancesApi

All URIs are relative to *https://apis.pgf.cl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**remittancesConciliationGet**](RemittancesApi.md#remittancesConciliationGet) | **GET** /remittances/conciliation | 



## remittancesConciliationGet

> \PSTPagoFacil\ApiClient\Model\InlineResponse200 remittancesConciliationGet($email, $date)



Permite obtener la conciliación de los abonos

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWTToken
$config = PSTPagoFacil\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PSTPagoFacil\ApiClient\Api\RemittancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = marcela@pagofacil.cl; // string | Email a consultar
$date = 2020-01-22; // \DateTime | Fecha de consulta año-mes-dia <br> Ej: 2019-12-31

try {
    $result = $apiInstance->remittancesConciliationGet($email, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemittancesApi->remittancesConciliationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | [**string**](../Model/.md)| Email a consultar |
 **date** | **\DateTime**| Fecha de consulta año-mes-dia &lt;br&gt; Ej: 2019-12-31 |

### Return type

[**\PSTPagoFacil\ApiClient\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[JWTToken](../../README.md#JWTToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

