# # PostApiV1ChatSendMessageRequestMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rid** | **string** | The room ID where the message is to be sent. |
**msg** | **string** | The message text to send, it is optional because of attachments. | [optional]
**alias** | **string** | This will cause the message&#39;s name to appear as the given alias, but your username will still be displayed. Requires the &#x60;impersonate-other-user&#x60; permission | [optional]
**emoji** | **string** | If provided, the avatar will be displayed as the emoji. | [optional]
**avatar** | **string** | If provided, the avatar will be displayed as the provided image url. Requires the  &#x60;impersonate-other-user&#x60; permission. | [optional]
**attachments** | [**\WebMI\RocketChatApiClient\MessagingApi\Model\PostApiV1ChatSendMessageRequestMessageAttachmentsInner[]**](PostApiV1ChatSendMessageRequestMessageAttachmentsInner.md) | The attachment is an array of objects with any of the following properties. One attachment can have many sections, including: * General * Author Information * Title Information * Image * Audio * Video * Table/Fields | [optional]
**tmid** | **string** | The message ID to create a thread. | [optional]
**tshow** | **string** | Used when replying in a thread. Message will be sent in channel also if value is true | [optional]
**blocks** | **object** | A message block is an array of objects with any of the following properties. Blocks can have many sections: - type - text - fields | [optional]
**custom_fields** | **object** | You can add custom fields for messages. For example, set priorities for messages.  You must enable this option and define the validation in the workspace settings. See the &lt;a href&#x3D;&#39;https://docs.rocket.chat/use-rocket.chat/workspace-administration/settings/message&#39; target&#x3D;&#39;_blank&#39;&gt;Message&lt;/a&gt; settings for further information. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
