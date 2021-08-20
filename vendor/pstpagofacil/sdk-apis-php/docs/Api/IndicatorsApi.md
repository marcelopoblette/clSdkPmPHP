# PSTPagoFacil\ApiClient\IndicatorsApi

All URIs are relative to *https://apis.pgf.cl*

Method | HTTP request | Description
------------- | ------------- | -------------
[**indicatorsRemittancesGet**](IndicatorsApi.md#indicatorsRemittancesGet) | **GET** /indicators/remittances | Obtiene los datos de los abonos (remittances) realizados en una fecha específica y los futuros, además del saldo disponible



## indicatorsRemittancesGet

> \PSTPagoFacil\ApiClient\Model\ResponseBodyRemittances indicatorsRemittancesGet($id_user, $id_trx, $available_balance, $remittance_by_date, $future_remittances)

Obtiene los datos de los abonos (remittances) realizados en una fecha específica y los futuros, además del saldo disponible

1.-Requiere el uso del Token rescatado en el LOGIN (autorización heredada) <br> 2.-Se debe configurar los parámetros como \"Query Params\" <br> 3.-Solo los usuarios Administradores pueden obtener información etregando el parámetros \"IdUser\". Para usuarios no Administradores este parámetro no se informa y siempre retronará información del usuario logado. 4.-Se debe informar alguno de los parámetros, de lo contrario la API responde con un error <br>     -Setear en true or false los parámetros \"availableBalance\" o \"futureRemittances\" <br>     -Entregar una fecha en el parámetro \"remittanceByDate\"<br>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: JWTToken
$config = PSTPagoFacil\ApiClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new PSTPagoFacil\ApiClient\Api\IndicatorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_user = 123; // int | ID del usuario a consultar
$id_trx = 5500; // int | ID de la transacción a consultar
$available_balance = True; // bool | Define si se desea obtener el saldo disponible del usuario
$remittance_by_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Fecha de la que se desea obtener información del abono
$future_remittances = True; // bool | Define si se desea obtener los abonos futuros

try {
    $result = $apiInstance->indicatorsRemittancesGet($id_user, $id_trx, $available_balance, $remittance_by_date, $future_remittances);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IndicatorsApi->indicatorsRemittancesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_user** | **int**| ID del usuario a consultar | [optional]
 **id_trx** | **int**| ID de la transacción a consultar | [optional]
 **available_balance** | **bool**| Define si se desea obtener el saldo disponible del usuario | [optional]
 **remittance_by_date** | **\DateTime**| Fecha de la que se desea obtener información del abono | [optional]
 **future_remittances** | **bool**| Define si se desea obtener los abonos futuros | [optional]

### Return type

[**\PSTPagoFacil\ApiClient\Model\ResponseBodyRemittances**](../Model/ResponseBodyRemittances.md)

### Authorization

[JWTToken](../../README.md#JWTToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

