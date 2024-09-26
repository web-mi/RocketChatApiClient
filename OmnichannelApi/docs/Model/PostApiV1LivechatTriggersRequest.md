# # PostApiV1LivechatTriggersRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_id** | **string** | If you want to update a trigger, enter the trigger ID. | [optional]
**name** | **string** | Enter a name for the trigger. |
**description** | **string** | Enter a description for the trigger. |
**enabled** | **bool** | Whether the trigger is enabled for use or not. | [default to true]
**run_once** | **bool** | Whether the trigger will be run only once for each visitor. | [default to false]
**conditions** | [**\WebMIRocketChatApiClientOmnichannelApi\Model\PostApiV1LivechatTriggersRequestConditionsInner[]**](PostApiV1LivechatTriggersRequestConditionsInner.md) | Enter the conditions for the trigger to execute. |
**actions** | [**\WebMIRocketChatApiClientOmnichannelApi\Model\PostApiV1LivechatTriggersRequestActionsInner[]**](PostApiV1LivechatTriggersRequestActionsInner.md) | The actions that take place once the trigger is executed. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
