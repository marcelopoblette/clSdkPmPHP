# # RequestBodyTrx

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**x_account_id** | **string** | Corresponde al &lt;u&gt;Token Service&lt;/u&gt; relacionado al servicio con el que deseas generar el cobro. Es ditinto para el ambiente de desarrollo y producción. | 
**x_amount** | **float** | Monto de la transacción. Admite decimales si la divisa utilizada los utiliza. El mínimo depende de la divis. En CLP es 500. | 
**x_currency** | **string** | Codigo de 3 caracteres para paises. &lt;br&gt;&lt;br&gt; Info:&lt;a href&#x3D;&#39;https://en.wikipedia.org/wiki/ISO_4217#Active_codes&#39; target&#x3D;_blank&gt;ISO_4217&lt;/a&gt; | 
**x_reference** | **string** | \\\&quot;Tú\\\&quot; identificador de orden. Este identificador debería ser único por servicio para no tener problema de duplicidad de pagos. Rechazaremos ids duplicados para el mismo servicio. | 
**x_customer_email** | **string** | Email | 
**x_url_complete** | **string** | Una dirección web válida | 
**x_url_callback** | **string** | Una dirección web válida | 
**x_url_cancel** | **string** | Una dirección web válida | 
**x_shop_country** | **string** | Codigo de 2 caracteres para paises. &lt;br&gt;&lt;br&gt; Info:&lt;a href&#x3D;&#39;https://en.wikipedia.org/wiki/ISO_3166-1#Current_codes&#39;&gt;ISO 3166-1 Alpha2-code&lt;/a&gt; | 
**x_session_id** | **string** | Identificador único de la sesión del usuario que realiza el pago. Se agrega como capa de seguridad para validar la transacción. Max. 61 caracteres. | 
**x_products** | **object[]** | Productos asociados a la transacción | [optional] 
**x_billing_details** | [**\PSTPagoFacil\ApiClient\Model\BillingDetails**](BillingDetails.md) |  | [optional] 
**x_shippment** | [**\PSTPagoFacil\ApiClient\Model\Shippment**](Shippment.md) |  | [optional] 
**x_document** | [**\PSTPagoFacil\ApiClient\Model\Document**](Document.md) |  | [optional] 
**x_signature** | **string** | Mensaje Firmado. Para más información sobre la creación de la firma revisa https://developers.pagofacil.cl/docs/cómo-funciona-el-proceso-de-firmado | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


