# # PostApiV1ChatUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**room_id** | **string** | The room ID where the message is. |
**msg_id** | **string** | The message ID to update. |
**text** | **string** | Updated text for the message. |
**preview_urls** | **string[]** | An array to define which URL previews should be retrieved from each message. | [optional]
**custom_fields** | **object** | You can add custom fields for messages. For example, set priorities for messages.  You must enable this option and define the validation in the workspace settings. See the &lt;a href&#x3D;&#39;https://docs.rocket.chat/use-rocket.chat/workspace-administration/settings/message&#39; target&#x3D;&#39;_blank&#39;&gt;Message&lt;/a&gt; settings for further information. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
