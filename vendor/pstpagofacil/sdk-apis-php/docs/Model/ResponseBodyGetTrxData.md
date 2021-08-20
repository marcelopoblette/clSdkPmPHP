# # ResponseBodyGetTrxData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_trx** | **int** | ID de la transacción en Pago Fácil | [optional] 
**id_service** | **int** | ID del servicio | [optional] 
**order_id_tienda** | **string** | ID del comercio para identificar su tienda | [optional] 
**amount** | **float** | Monto de la transacción | [optional] 
**cost** | **float** | Costo de la transacción | [optional] 
**email** | **string** | Email | [optional] 
**auth_code** | **int** | Codigo de autorizacion de la compra | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Fecha de creación | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Fecha de actualización | [optional] 
**callback_url** | **string** | url a la que se llama una vez la transacción es completada | [optional] 
**complete_url** | **string** | url a la que se redireciona al cliente una vez la transacción es completada | [optional] 
**cancel_url** | **string** | currently out of order | [optional] 
**ip** | **string** | ip adress of the device from where transaction was completed | [optional] 
**browser_data** | **string** | data from the browser where the transaction was completed | [optional] 
**source** | **string** | Método de pago | [optional] 
**timestamp** | **string** | uso transbank | [optional] 
**payment_type_code** | **string** | Forma de pago que usa el cliente | [optional] 
**shares_number** | **int** | Cuotas de la transacción | [optional] 
**responce_code** | **int** | uso transbank | [optional] 
**vci** | **string** | uso transbank | [optional] 
**abonos** | **string[]** | Abonos relacionados a la transacción | [optional] 
**status** | [**\PSTPagoFacil\ApiClient\Model\Status**](Status.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


