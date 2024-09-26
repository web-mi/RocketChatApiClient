# # PostApiV1ChatSendMessageRequestMessageAttachmentsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**audio_url** | **string** | Audio file to attach. See &lt;a href&#x3D;&#39;https://developer.mozilla.org/en-US/docs/Web/HTML/Element/audio&#39; target&#x3D;&#39;_blank&#39;&gt;HTML audio element&lt;/a&gt; for information. | [optional]
**author_icon** | **string** | Displays a tiny icon to the left of the author&#39;s name. | [optional]
**author_link** | **string** | Providing this makes the author name clickable and points to this link. | [optional]
**author_name** | **string** | Name of the author. | [optional]
**collapsed** | **bool** | Causes the image, audio, and video sections to be displayed as collapsed when set to true. | [optional]
**color** | **string** | See &lt;a href&#x3D;&#39;https://developer.mozilla.org/en-US/docs/Web/CSS/background-color&#39; target&#x3D;&#39;_blank&#39;&gt;background-css&lt;/a&gt; for the supported format. | [optional]
**fields** | [**\WebMIRocketChatApiClientMessagingApi\Model\PostApiV1ChatPostMessageRequestAttachmentsInnerFieldsInner[]**](PostApiV1ChatPostMessageRequestAttachmentsInnerFieldsInner.md) |  | [optional]
**image_url** | **string** | The image to display, will be big and easy to see. | [optional]
**message_link** | **string** | Only applicable if the &#x60;ts&#x60; parameter is provided, as it makes the time clickable to this link. | [optional]
**text** | **string** | The text to display for this attachment, it is different than the message&#39;s text. | [optional]
**thumb_url** | **string** | An image that displays to the left of the text, looks better when this is relatively small. | [optional]
**title** | **string** | Title to display for this attachment, displays under the author. | [optional]
**title_link** | **string** | Providing this makes the title clickable, pointing to this link. | [optional]
**title_link_download** | **bool** | When this is true, a download icon appears and clicking this saves the link to file. | [optional]
**ts** | **string** | Displays the time next to the text portion. | [optional]
**video_url** | **string** | Video file to attach. See the &lt;a href&#x3D;&#39;https://developer.mozilla.org/en-US/docs/Web/HTML/Element/video&#39; target&#x3D;&#39;blank&#39;&gt;HTML video element&lt;/a&gt; for information. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
