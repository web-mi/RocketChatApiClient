# # PostApiV1TeamsCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The team name. |
**type** | **int** | Privacy of the team (0 - Public, 1 - Private). |
**members** | **string[]** | The user ids to add to the team when it is created. | [optional]
**room** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1TeamsCreateRequestRoom**](PostApiV1TeamsCreateRequestRoom.md) |  | [optional]
**sidepanel** | [**\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1RoomsSaveRoomSettingsRequestSidepanel**](PostApiV1RoomsSaveRoomSettingsRequestSidepanel.md) |  | [optional]
**owner** | **string** | Set the owner of the team. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
