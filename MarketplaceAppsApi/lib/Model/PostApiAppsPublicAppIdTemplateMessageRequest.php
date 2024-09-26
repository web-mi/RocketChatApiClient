<?php
/**
 * PostApiAppsPublicAppIdTemplateMessageRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  RocketChatMarketplaceAppsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Marketplace Apps
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

namespace RocketChatMarketplaceAppsApi\Model;

use \ArrayAccess;
use \RocketChatMarketplaceAppsApi\ObjectSerializer;

/**
 * PostApiAppsPublicAppIdTemplateMessageRequest Class Doc Comment
 *
 * @category Class
 * @package  RocketChatMarketplaceAppsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PostApiAppsPublicAppIdTemplateMessageRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'post_api_apps_public_app_id_templateMessage_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'phone_numbers' => 'string[]',
        'connected_whats_app_no' => 'string',
        'target_agent' => 'string',
        'target_department' => 'string',
        'template' => '\RocketChatMarketplaceAppsApi\Model\PostApiAppsPublicAppIdTemplateMessageRequestTemplate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'phone_numbers' => null,
        'connected_whats_app_no' => null,
        'target_agent' => null,
        'target_department' => null,
        'template' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'phone_numbers' => false,
        'connected_whats_app_no' => false,
        'target_agent' => false,
        'target_department' => false,
        'template' => false
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
        'phone_numbers' => 'phoneNumbers',
        'connected_whats_app_no' => 'connectedWhatsAppNo',
        'target_agent' => 'targetAgent',
        'target_department' => 'targetDepartment',
        'template' => 'template'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'phone_numbers' => 'setPhoneNumbers',
        'connected_whats_app_no' => 'setConnectedWhatsAppNo',
        'target_agent' => 'setTargetAgent',
        'target_department' => 'setTargetDepartment',
        'template' => 'setTemplate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'phone_numbers' => 'getPhoneNumbers',
        'connected_whats_app_no' => 'getConnectedWhatsAppNo',
        'target_agent' => 'getTargetAgent',
        'target_department' => 'getTargetDepartment',
        'template' => 'getTemplate'
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
        $this->setIfExists('phone_numbers', $data ?? [], null);
        $this->setIfExists('connected_whats_app_no', $data ?? [], null);
        $this->setIfExists('target_agent', $data ?? [], null);
        $this->setIfExists('target_department', $data ?? [], null);
        $this->setIfExists('template', $data ?? [], null);
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

        if ($this->container['phone_numbers'] === null) {
            $invalidProperties[] = "'phone_numbers' can't be null";
        }
        if ($this->container['connected_whats_app_no'] === null) {
            $invalidProperties[] = "'connected_whats_app_no' can't be null";
        }
        if ($this->container['template'] === null) {
            $invalidProperties[] = "'template' can't be null";
        }
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
     * Gets phone_numbers
     *
     * @return string[]
     */
    public function getPhoneNumbers()
    {
        return $this->container['phone_numbers'];
    }

    /**
     * Sets phone_numbers
     *
     * @param string[] $phone_numbers Recipient WhatsApp IDs where you want to send the template message. You can validate a WhatsApp id from <a href=\"https://developers.facebook.com/docs/whatsapp/on-premises/reference/contacts\" target=\"_blank\">here</a>.
     *
     * @return self
     */
    public function setPhoneNumbers($phone_numbers)
    {
        if (is_null($phone_numbers)) {
            throw new \InvalidArgumentException('non-nullable phone_numbers cannot be null');
        }
        $this->container['phone_numbers'] = $phone_numbers;

        return $this;
    }

    /**
     * Gets connected_whats_app_no
     *
     * @return string
     */
    public function getConnectedWhatsAppNo()
    {
        return $this->container['connected_whats_app_no'];
    }

    /**
     * Sets connected_whats_app_no
     *
     * @param string $connected_whats_app_no The WhatsApp Number from which you want to send this template message. The WhatsApp number connected to your workspace via the app.
     *
     * @return self
     */
    public function setConnectedWhatsAppNo($connected_whats_app_no)
    {
        if (is_null($connected_whats_app_no)) {
            throw new \InvalidArgumentException('non-nullable connected_whats_app_no cannot be null');
        }
        $this->container['connected_whats_app_no'] = $connected_whats_app_no;

        return $this;
    }

    /**
     * Gets target_agent
     *
     * @return string|null
     */
    public function getTargetAgent()
    {
        return $this->container['target_agent'];
    }

    /**
     * Sets target_agent
     *
     * @param string|null $target_agent Username of the agent you want to transfer the chat to when the WhatsApp user replies.
     *
     * @return self
     */
    public function setTargetAgent($target_agent)
    {
        if (is_null($target_agent)) {
            throw new \InvalidArgumentException('non-nullable target_agent cannot be null');
        }
        $this->container['target_agent'] = $target_agent;

        return $this;
    }

    /**
     * Gets target_department
     *
     * @return string|null
     */
    public function getTargetDepartment()
    {
        return $this->container['target_department'];
    }

    /**
     * Sets target_department
     *
     * @param string|null $target_department Department name or ID where you want to transfer the chat to when the WhatsApp user replies.
     *
     * @return self
     */
    public function setTargetDepartment($target_department)
    {
        if (is_null($target_department)) {
            throw new \InvalidArgumentException('non-nullable target_department cannot be null');
        }
        $this->container['target_department'] = $target_department;

        return $this;
    }

    /**
     * Gets template
     *
     * @return \RocketChatMarketplaceAppsApi\Model\PostApiAppsPublicAppIdTemplateMessageRequestTemplate
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param \RocketChatMarketplaceAppsApi\Model\PostApiAppsPublicAppIdTemplateMessageRequestTemplate $template template
     *
     * @return self
     */
    public function setTemplate($template)
    {
        if (is_null($template)) {
            throw new \InvalidArgumentException('non-nullable template cannot be null');
        }
        $this->container['template'] = $template;

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


