# # PostApiV1LoginRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | **string** | Your user name or email. | [optional]
**password** | **string** | Your pasword. | [optional]
**resume** | **string** | Your previously issued &#x60;authToken&#x60;. | [optional]
**code** | **string** | The 2FA code. It is required if your account has two-factor authentication enabled . | [optional]
**service_name** | **string** | The desired OIDC service name. In this case, &#x60;keycloak&#x60;. |
**access_token** | **string** | Access token provided by Keycloak OIDC. |
**secret** | **string** | The secret provided by Facebook. |
**expires_in** | **int** | Lifetime of token (in seconds). |
**access_token_secret** | **string** | The access token secret provided by Twitter OAuth. |
**app_secret** | **string** | The app secret provided by Twitter. |
**app_id** | **string** | The app ID provided by Twitter. |
**id_token** | **string** | The ID token provided by Google OAuth. |
**scope** | **string** | Google scopes for API. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
