# # PostApiV1OmnichannelContactsUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact_id** | **string** | The contact&#39;s ID. | [default to '67487f45e98719b7908d0f29']
**name** | **string** | The contact&#39;s name. | [optional]
**phones** | **string[]** | An array of the contact&#39;s phone number(s). | [optional]
**emails** | **string[]** | An array of the contact&#39;s email address(es). | [optional]
**contact_manager** | **string** | The contact manager&#39;s ID. | [optional]
**custom_fields** | **object** | Object defining the custom fields to be updated. | [optional]
**wipe_conflicts** | **bool** | Boolean to determine whether conflicts impacting contacts should be automatically resolved. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
