<?php
/**
 * GetApiV1LivechatConfig200ResponseConfigSettings
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMIRocketChatApiClientOmnichannelApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Omnichannel
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace WebMIRocketChatApiClientOmnichannelApi\Model;

use \ArrayAccess;
use \WebMIRocketChatApiClientOmnichannelApi\ObjectSerializer;

/**
 * GetApiV1LivechatConfig200ResponseConfigSettings Class Doc Comment
 *
 * @category Class
 * @package  WebMIRocketChatApiClientOmnichannelApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1LivechatConfig200ResponseConfigSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_livechat_config_200_response_config_settings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'registration_form' => 'bool',
        'allow_switching_departments' => 'bool',
        'name_field_registration_form' => 'bool',
        'email_field_registration_form' => 'bool',
        'display_offline_form' => 'bool',
        'video_call' => 'bool',
        'file_upload' => 'bool',
        'language' => 'string',
        'transcript' => 'bool',
        'history_monitor_type' => 'string',
        'force_accept_data_processing_consent' => 'bool',
        'show_connecting' => 'bool',
        'agent_hidden_info' => 'bool',
        'clear_local_storage_when_chat_ended' => 'bool',
        'limit_text_length' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'registration_form' => null,
        'allow_switching_departments' => null,
        'name_field_registration_form' => null,
        'email_field_registration_form' => null,
        'display_offline_form' => null,
        'video_call' => null,
        'file_upload' => null,
        'language' => null,
        'transcript' => null,
        'history_monitor_type' => null,
        'force_accept_data_processing_consent' => null,
        'show_connecting' => null,
        'agent_hidden_info' => null,
        'clear_local_storage_when_chat_ended' => null,
        'limit_text_length' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'registration_form' => false,
        'allow_switching_departments' => false,
        'name_field_registration_form' => false,
        'email_field_registration_form' => false,
        'display_offline_form' => false,
        'video_call' => false,
        'file_upload' => false,
        'language' => false,
        'transcript' => false,
        'history_monitor_type' => false,
        'force_accept_data_processing_consent' => false,
        'show_connecting' => false,
        'agent_hidden_info' => false,
        'clear_local_storage_when_chat_ended' => false,
        'limit_text_length' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'registration_form' => 'registrationForm',
        'allow_switching_departments' => 'allowSwitchingDepartments',
        'name_field_registration_form' => 'nameFieldRegistrationForm',
        'email_field_registration_form' => 'emailFieldRegistrationForm',
        'display_offline_form' => 'displayOfflineForm',
        'video_call' => 'videoCall',
        'file_upload' => 'fileUpload',
        'language' => 'language',
        'transcript' => 'transcript',
        'history_monitor_type' => 'historyMonitorType',
        'force_accept_data_processing_consent' => 'forceAcceptDataProcessingConsent',
        'show_connecting' => 'showConnecting',
        'agent_hidden_info' => 'agentHiddenInfo',
        'clear_local_storage_when_chat_ended' => 'clearLocalStorageWhenChatEnded',
        'limit_text_length' => 'limitTextLength'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'registration_form' => 'setRegistrationForm',
        'allow_switching_departments' => 'setAllowSwitchingDepartments',
        'name_field_registration_form' => 'setNameFieldRegistrationForm',
        'email_field_registration_form' => 'setEmailFieldRegistrationForm',
        'display_offline_form' => 'setDisplayOfflineForm',
        'video_call' => 'setVideoCall',
        'file_upload' => 'setFileUpload',
        'language' => 'setLanguage',
        'transcript' => 'setTranscript',
        'history_monitor_type' => 'setHistoryMonitorType',
        'force_accept_data_processing_consent' => 'setForceAcceptDataProcessingConsent',
        'show_connecting' => 'setShowConnecting',
        'agent_hidden_info' => 'setAgentHiddenInfo',
        'clear_local_storage_when_chat_ended' => 'setClearLocalStorageWhenChatEnded',
        'limit_text_length' => 'setLimitTextLength'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'registration_form' => 'getRegistrationForm',
        'allow_switching_departments' => 'getAllowSwitchingDepartments',
        'name_field_registration_form' => 'getNameFieldRegistrationForm',
        'email_field_registration_form' => 'getEmailFieldRegistrationForm',
        'display_offline_form' => 'getDisplayOfflineForm',
        'video_call' => 'getVideoCall',
        'file_upload' => 'getFileUpload',
        'language' => 'getLanguage',
        'transcript' => 'getTranscript',
        'history_monitor_type' => 'getHistoryMonitorType',
        'force_accept_data_processing_consent' => 'getForceAcceptDataProcessingConsent',
        'show_connecting' => 'getShowConnecting',
        'agent_hidden_info' => 'getAgentHiddenInfo',
        'clear_local_storage_when_chat_ended' => 'getClearLocalStorageWhenChatEnded',
        'limit_text_length' => 'getLimitTextLength'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('registration_form', $data ?? [], null);
        $this->setIfExists('allow_switching_departments', $data ?? [], null);
        $this->setIfExists('name_field_registration_form', $data ?? [], null);
        $this->setIfExists('email_field_registration_form', $data ?? [], null);
        $this->setIfExists('display_offline_form', $data ?? [], null);
        $this->setIfExists('video_call', $data ?? [], null);
        $this->setIfExists('file_upload', $data ?? [], null);
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('transcript', $data ?? [], null);
        $this->setIfExists('history_monitor_type', $data ?? [], null);
        $this->setIfExists('force_accept_data_processing_consent', $data ?? [], null);
        $this->setIfExists('show_connecting', $data ?? [], null);
        $this->setIfExists('agent_hidden_info', $data ?? [], null);
        $this->setIfExists('clear_local_storage_when_chat_ended', $data ?? [], null);
        $this->setIfExists('limit_text_length', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets registration_form
     *
     * @return bool|null
     */
    public function getRegistrationForm()
    {
        return $this->container['registration_form'];
    }

    /**
     * Sets registration_form
     *
     * @param bool|null $registration_form registration_form
     *
     * @return self
     */
    public function setRegistrationForm($registration_form)
    {
        if (is_null($registration_form)) {
            throw new \InvalidArgumentException('non-nullable registration_form cannot be null');
        }
        $this->container['registration_form'] = $registration_form;

        return $this;
    }

    /**
     * Gets allow_switching_departments
     *
     * @return bool|null
     */
    public function getAllowSwitchingDepartments()
    {
        return $this->container['allow_switching_departments'];
    }

    /**
     * Sets allow_switching_departments
     *
     * @param bool|null $allow_switching_departments allow_switching_departments
     *
     * @return self
     */
    public function setAllowSwitchingDepartments($allow_switching_departments)
    {
        if (is_null($allow_switching_departments)) {
            throw new \InvalidArgumentException('non-nullable allow_switching_departments cannot be null');
        }
        $this->container['allow_switching_departments'] = $allow_switching_departments;

        return $this;
    }

    /**
     * Gets name_field_registration_form
     *
     * @return bool|null
     */
    public function getNameFieldRegistrationForm()
    {
        return $this->container['name_field_registration_form'];
    }

    /**
     * Sets name_field_registration_form
     *
     * @param bool|null $name_field_registration_form name_field_registration_form
     *
     * @return self
     */
    public function setNameFieldRegistrationForm($name_field_registration_form)
    {
        if (is_null($name_field_registration_form)) {
            throw new \InvalidArgumentException('non-nullable name_field_registration_form cannot be null');
        }
        $this->container['name_field_registration_form'] = $name_field_registration_form;

        return $this;
    }

    /**
     * Gets email_field_registration_form
     *
     * @return bool|null
     */
    public function getEmailFieldRegistrationForm()
    {
        return $this->container['email_field_registration_form'];
    }

    /**
     * Sets email_field_registration_form
     *
     * @param bool|null $email_field_registration_form email_field_registration_form
     *
     * @return self
     */
    public function setEmailFieldRegistrationForm($email_field_registration_form)
    {
        if (is_null($email_field_registration_form)) {
            throw new \InvalidArgumentException('non-nullable email_field_registration_form cannot be null');
        }
        $this->container['email_field_registration_form'] = $email_field_registration_form;

        return $this;
    }

    /**
     * Gets display_offline_form
     *
     * @return bool|null
     */
    public function getDisplayOfflineForm()
    {
        return $this->container['display_offline_form'];
    }

    /**
     * Sets display_offline_form
     *
     * @param bool|null $display_offline_form display_offline_form
     *
     * @return self
     */
    public function setDisplayOfflineForm($display_offline_form)
    {
        if (is_null($display_offline_form)) {
            throw new \InvalidArgumentException('non-nullable display_offline_form cannot be null');
        }
        $this->container['display_offline_form'] = $display_offline_form;

        return $this;
    }

    /**
     * Gets video_call
     *
     * @return bool|null
     */
    public function getVideoCall()
    {
        return $this->container['video_call'];
    }

    /**
     * Sets video_call
     *
     * @param bool|null $video_call video_call
     *
     * @return self
     */
    public function setVideoCall($video_call)
    {
        if (is_null($video_call)) {
            throw new \InvalidArgumentException('non-nullable video_call cannot be null');
        }
        $this->container['video_call'] = $video_call;

        return $this;
    }

    /**
     * Gets file_upload
     *
     * @return bool|null
     */
    public function getFileUpload()
    {
        return $this->container['file_upload'];
    }

    /**
     * Sets file_upload
     *
     * @param bool|null $file_upload file_upload
     *
     * @return self
     */
    public function setFileUpload($file_upload)
    {
        if (is_null($file_upload)) {
            throw new \InvalidArgumentException('non-nullable file_upload cannot be null');
        }
        $this->container['file_upload'] = $file_upload;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets transcript
     *
     * @return bool|null
     */
    public function getTranscript()
    {
        return $this->container['transcript'];
    }

    /**
     * Sets transcript
     *
     * @param bool|null $transcript transcript
     *
     * @return self
     */
    public function setTranscript($transcript)
    {
        if (is_null($transcript)) {
            throw new \InvalidArgumentException('non-nullable transcript cannot be null');
        }
        $this->container['transcript'] = $transcript;

        return $this;
    }

    /**
     * Gets history_monitor_type
     *
     * @return string|null
     */
    public function getHistoryMonitorType()
    {
        return $this->container['history_monitor_type'];
    }

    /**
     * Sets history_monitor_type
     *
     * @param string|null $history_monitor_type history_monitor_type
     *
     * @return self
     */
    public function setHistoryMonitorType($history_monitor_type)
    {
        if (is_null($history_monitor_type)) {
            throw new \InvalidArgumentException('non-nullable history_monitor_type cannot be null');
        }
        $this->container['history_monitor_type'] = $history_monitor_type;

        return $this;
    }

    /**
     * Gets force_accept_data_processing_consent
     *
     * @return bool|null
     */
    public function getForceAcceptDataProcessingConsent()
    {
        return $this->container['force_accept_data_processing_consent'];
    }

    /**
     * Sets force_accept_data_processing_consent
     *
     * @param bool|null $force_accept_data_processing_consent force_accept_data_processing_consent
     *
     * @return self
     */
    public function setForceAcceptDataProcessingConsent($force_accept_data_processing_consent)
    {
        if (is_null($force_accept_data_processing_consent)) {
            throw new \InvalidArgumentException('non-nullable force_accept_data_processing_consent cannot be null');
        }
        $this->container['force_accept_data_processing_consent'] = $force_accept_data_processing_consent;

        return $this;
    }

    /**
     * Gets show_connecting
     *
     * @return bool|null
     */
    public function getShowConnecting()
    {
        return $this->container['show_connecting'];
    }

    /**
     * Sets show_connecting
     *
     * @param bool|null $show_connecting show_connecting
     *
     * @return self
     */
    public function setShowConnecting($show_connecting)
    {
        if (is_null($show_connecting)) {
            throw new \InvalidArgumentException('non-nullable show_connecting cannot be null');
        }
        $this->container['show_connecting'] = $show_connecting;

        return $this;
    }

    /**
     * Gets agent_hidden_info
     *
     * @return bool|null
     */
    public function getAgentHiddenInfo()
    {
        return $this->container['agent_hidden_info'];
    }

    /**
     * Sets agent_hidden_info
     *
     * @param bool|null $agent_hidden_info agent_hidden_info
     *
     * @return self
     */
    public function setAgentHiddenInfo($agent_hidden_info)
    {
        if (is_null($agent_hidden_info)) {
            throw new \InvalidArgumentException('non-nullable agent_hidden_info cannot be null');
        }
        $this->container['agent_hidden_info'] = $agent_hidden_info;

        return $this;
    }

    /**
     * Gets clear_local_storage_when_chat_ended
     *
     * @return bool|null
     */
    public function getClearLocalStorageWhenChatEnded()
    {
        return $this->container['clear_local_storage_when_chat_ended'];
    }

    /**
     * Sets clear_local_storage_when_chat_ended
     *
     * @param bool|null $clear_local_storage_when_chat_ended clear_local_storage_when_chat_ended
     *
     * @return self
     */
    public function setClearLocalStorageWhenChatEnded($clear_local_storage_when_chat_ended)
    {
        if (is_null($clear_local_storage_when_chat_ended)) {
            throw new \InvalidArgumentException('non-nullable clear_local_storage_when_chat_ended cannot be null');
        }
        $this->container['clear_local_storage_when_chat_ended'] = $clear_local_storage_when_chat_ended;

        return $this;
    }

    /**
     * Gets limit_text_length
     *
     * @return bool|null
     */
    public function getLimitTextLength()
    {
        return $this->container['limit_text_length'];
    }

    /**
     * Sets limit_text_length
     *
     * @param bool|null $limit_text_length limit_text_length
     *
     * @return self
     */
    public function setLimitTextLength($limit_text_length)
    {
        if (is_null($limit_text_length)) {
            throw new \InvalidArgumentException('non-nullable limit_text_length cannot be null');
        }
        $this->container['limit_text_length'] = $limit_text_length;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


