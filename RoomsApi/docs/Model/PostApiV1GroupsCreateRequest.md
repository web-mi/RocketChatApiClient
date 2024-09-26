# # PostApiV1GroupsCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**read_only** | **bool** | Set if the group is read only or not. The default value is false. | [optional]
**members** | **string[]** | The users to add to the group when it is created. | [optional]
**exclude_self** | **bool** | If set to true the user calling the endpoint is not automatically added as a member of the group. The default value is false. | [optional]
**name** | **string** | The name of the new private group. |
**custom_fields** | **object** | If you have defined custom fields for your workspace, you can provide them in this object parameter. | [optional]
**extra_data** | **object** | Enter the following details for the object: - &#x60;broadcast&#x60;: Whether the group should be a broadcast group - &#x60;encrypted&#x60;: Whether the group should be encrypted.  - &#x60;teamId&#x60;: Enter the team ID for which you want to create a group.  For more information, see &lt;a href&#x3D;\&quot;https://docs.rocket.chat/use-rocket.chat/user-guides/rooms/channels#channel-privacy-and-encryption\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Channels&lt;/a&gt;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
