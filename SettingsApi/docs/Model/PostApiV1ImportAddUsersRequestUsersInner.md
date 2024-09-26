# # PostApiV1ImportAddUsersRequestUsersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**username** | **string** | The user name. | [optional]
**emails** | **string[]** | The user email addresses. |
**import_ids** | **string[]** | A list of IDs that can identify the user. |
**name** | **string** | The user&#39;s display name. | [optional]
**password** | **string** | A password to assign to this user. | [optional]
**utc_offset** | **float** | The user&#39;s timezone, in number of hours relative to UTC. | [optional]
**roles** | **string[]** | A list of roles to assign to the user | [optional]
**type** | **string** | The user type, must be either \&quot;user\&quot; or \&quot;bot\&quot;. | [optional]
**bio** | **string** | The user&#39;s profile bio. | [optional]
**deleted** | **bool** | Was the user deleted from the previous system? | [optional]
**avatar_url** | **string** | A URL pointing to the user&#39;s avatar picture. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
