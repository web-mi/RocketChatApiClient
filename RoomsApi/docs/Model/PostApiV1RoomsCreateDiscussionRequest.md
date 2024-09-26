# # PostApiV1RoomsCreateDiscussionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**prid** | **string** | Parent room ID of the discussion. |
**t_name** | **string** | Discussion name. |
**users** | **string[]** | Array of users to join in the discussion, if not provided, it will be an empty array. (Note: if provided, it must be an array). | [optional]
**pmid** | **string** | Parent message ID (if the discussion comes from a message). | [optional]
**reply** | **string** | The reply of the discussion. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
