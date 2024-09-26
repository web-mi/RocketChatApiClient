# # PostApiV1ChannelsCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the channel. |
**members** | **string[]** | An array of the users to be added to the channel when it is created. | [optional]
**read_only** | **bool** | Set if the channel is read only or not. It is &#x60;false&#x60; by default. | [optional]
**exclude_self** | **bool** | If set to true, the user calling the endpoint is not automatically added as a member of the channel. The default &#x60;value&#x60; is false. | [optional]
**custom_fields** | **object** | If you have defined custom fields for your workspace, you can provide them in this object parameter. | [optional]
**extra_data** | **object** | Enter the following details for the object: - &#x60;broadcast&#x60;: Whether the channel should be a broadcast group. - &#x60;encrypted&#x60;: Whether the channel should be encrypted. - &#x60;teamId&#x60;: Enter the team ID for which you want to create a group.  For more information, see &lt;a href&#x3D;&#39;https://docs.rocket.chat/use-rocket.chat/user-guides/rooms/channels#channel-privacy-and-encryption&#39; target&#x3D;&#39;_blank&#39;&gt;Channels&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
