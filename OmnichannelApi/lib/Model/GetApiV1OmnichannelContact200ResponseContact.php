<?php
/**
 * GetApiV1OmnichannelContact200ResponseContact
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  RocketChatOmnichannelApi
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

namespace RocketChatOmnichannelApi\Model;

use \ArrayAccess;
use \RocketChatOmnichannelApi\ObjectSerializer;

/**
 * GetApiV1OmnichannelContact200ResponseContact Class Doc Comment
 *
 * @category Class
 * @package  RocketChatOmnichannelApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1OmnichannelContact200ResponseContact implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_omnichannel_contact_200_response_contact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'username' => 'string',
        'ts' => 'string',
        'token' => 'string',
        '_updated_at' => 'string',
        'contact_manager' => '\RocketChatOmnichannelApi\Model\GetApiV1OmnichannelContact200ResponseContactContactManager',
        'livechat_data' => 'object',
        'name' => 'string',
        'phone' => '\RocketChatOmnichannelApi\Model\GetApiV1OmnichannelContact200ResponseContactPhoneInner[]',
        'visitor_emails' => '\RocketChatOmnichannelApi\Model\GetApiV1OmnichannelContact200ResponseContactVisitorEmailsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        '_id' => null,
        'username' => null,
        'ts' => null,
        'token' => null,
        '_updated_at' => null,
        'contact_manager' => null,
        'livechat_data' => null,
        'name' => null,
        'phone' => null,
        'visitor_emails' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
        'username' => false,
        'ts' => false,
        'token' => false,
        '_updated_at' => false,
        'contact_manager' => false,
        'livechat_data' => false,
        'name' => false,
        'phone' => false,
        'visitor_emails' => false
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
        '_id' => '_id',
        'username' => 'username',
        'ts' => 'ts',
        'token' => 'token',
        '_updated_at' => '_updatedAt',
        'contact_manager' => 'contactManager',
        'livechat_data' => 'livechatData',
        'name' => 'name',
        'phone' => 'phone',
        'visitor_emails' => 'visitorEmails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
        'username' => 'setUsername',
        'ts' => 'setTs',
        'token' => 'setToken',
        '_updated_at' => 'setUpdatedAt',
        'contact_manager' => 'setContactManager',
        'livechat_data' => 'setLivechatData',
        'name' => 'setName',
        'phone' => 'setPhone',
        'visitor_emails' => 'setVisitorEmails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
        'username' => 'getUsername',
        'ts' => 'getTs',
        'token' => 'getToken',
        '_updated_at' => 'getUpdatedAt',
        'contact_manager' => 'getContactManager',
        'livechat_data' => 'getLivechatData',
        'name' => 'getName',
        'phone' => 'getPhone',
        'visitor_emails' => 'getVisitorEmails'
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
        $this->setIfExists('_id', $data ?? [], null);
        $this->setIfExists('username', $data ?? [], null);
        $this->setIfExists('ts', $data ?? [], null);
        $this->setIfExists('token', $data ?? [], null);
        $this->setIfExists('_updated_at', $data ?? [], null);
        $this->setIfExists('contact_manager', $data ?? [], null);
        $this->setIfExists('livechat_data', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('visitor_emails', $data ?? [], null);
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
     * Gets _id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['_id'];
    }

    /**
     * Sets _id
     *
     * @param string|null $_id _id
     *
     * @return self
     */
    public function setId($_id)
    {
        if (is_null($_id)) {
            throw new \InvalidArgumentException('non-nullable _id cannot be null');
        }
        $this->container['_id'] = $_id;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string|null
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string|null $username username
     *
     * @return self
     */
    public function setUsername($username)
    {
        if (is_null($username)) {
            throw new \InvalidArgumentException('non-nullable username cannot be null');
        }
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets ts
     *
     * @return string|null
     */
    public function getTs()
    {
        return $this->container['ts'];
    }

    /**
     * Sets ts
     *
     * @param string|null $ts ts
     *
     * @return self
     */
    public function setTs($ts)
    {
        if (is_null($ts)) {
            throw new \InvalidArgumentException('non-nullable ts cannot be null');
        }
        $this->container['ts'] = $ts;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string|null
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string|null $token token
     *
     * @return self
     */
    public function setToken($token)
    {
        if (is_null($token)) {
            throw new \InvalidArgumentException('non-nullable token cannot be null');
        }
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets _updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->container['_updated_at'];
    }

    /**
     * Sets _updated_at
     *
     * @param string|null $_updated_at _updated_at
     *
     * @return self
     */
    public function setUpdatedAt($_updated_at)
    {
        if (is_null($_updated_at)) {
            throw new \InvalidArgumentException('non-nullable _updated_at cannot be null');
        }
        $this->container['_updated_at'] = $_updated_at;

        return $this;
    }

    /**
     * Gets contact_manager
     *
     * @return \RocketChatOmnichannelApi\Model\GetApiV1OmnichannelContact200ResponseContactContactManager|null
     */
    public function getContactManager()
    {
        return $this->container['contact_manager'];
    }

    /**
     * Sets contact_manager
     *
     * @param \RocketChatOmnichannelApi\Model\GetApiV1OmnichannelContact200ResponseContactContactManager|null $contact_manager contact_manager
     *
     * @return self
     */
    public function setContactManager($contact_manager)
    {
        if (is_null($contact_manager)) {
            throw new \InvalidArgumentException('non-nullable contact_manager cannot be null');
        }
        $this->container['contact_manager'] = $contact_manager;

        return $this;
    }

    /**
     * Gets livechat_data
     *
     * @return object|null
     */
    public function getLivechatData()
    {
        return $this->container['livechat_data'];
    }

    /**
     * Sets livechat_data
     *
     * @param object|null $livechat_data livechat_data
     *
     * @return self
     */
    public function setLivechatData($livechat_data)
    {
        if (is_null($livechat_data)) {
            throw new \InvalidArgumentException('non-nullable livechat_data cannot be null');
        }
        $this->container['livechat_data'] = $livechat_data;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return \RocketChatOmnichannelApi\Model\GetApiV1OmnichannelContact200ResponseContactPhoneInner[]|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param \RocketChatOmnichannelApi\Model\GetApiV1OmnichannelContact200ResponseContactPhoneInner[]|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets visitor_emails
     *
     * @return \RocketChatOmnichannelApi\Model\GetApiV1OmnichannelContact200ResponseContactVisitorEmailsInner[]|null
     */
    public function getVisitorEmails()
    {
        return $this->container['visitor_emails'];
    }

    /**
     * Sets visitor_emails
     *
     * @param \RocketChatOmnichannelApi\Model\GetApiV1OmnichannelContact200ResponseContactVisitorEmailsInner[]|null $visitor_emails visitor_emails
     *
     * @return self
     */
    public function setVisitorEmails($visitor_emails)
    {
        if (is_null($visitor_emails)) {
            throw new \InvalidArgumentException('non-nullable visitor_emails cannot be null');
        }
        $this->container['visitor_emails'] = $visitor_emails;

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


