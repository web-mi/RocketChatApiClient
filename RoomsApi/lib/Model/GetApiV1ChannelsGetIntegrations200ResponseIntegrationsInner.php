<?php
/**
 * GetApiV1ChannelsGetIntegrations200ResponseIntegrationsInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  RocketChatRoomsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Rooms
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

namespace RocketChatRoomsApi\Model;

use \ArrayAccess;
use \RocketChatRoomsApi\ObjectSerializer;

/**
 * GetApiV1ChannelsGetIntegrations200ResponseIntegrationsInner Class Doc Comment
 *
 * @category Class
 * @package  RocketChatRoomsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1ChannelsGetIntegrations200ResponseIntegrationsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_channels_getIntegrations_200_response_integrations_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'enabled' => 'bool',
        'username' => 'string',
        'alias' => 'string',
        'avatar' => 'string',
        'name' => 'string',
        'trigger_words' => 'string[]',
        'urls' => 'string[]',
        'token' => 'string',
        'script' => 'string',
        'script_enabled' => 'bool',
        'impersonate_user' => 'bool',
        'script_compiled' => 'string',
        'script_error' => 'string',
        'type' => 'string',
        'user_id' => 'string',
        'channel' => 'object[]',
        '_created_at' => 'string',
        '_created_by' => '\RocketChatRoomsApi\Model\GetApiV1ChannelsGetIntegrations200ResponseIntegrationsInnerCreatedBy',
        '_updated_at' => 'string'
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
        'enabled' => null,
        'username' => null,
        'alias' => null,
        'avatar' => null,
        'name' => null,
        'trigger_words' => null,
        'urls' => null,
        'token' => null,
        'script' => null,
        'script_enabled' => null,
        'impersonate_user' => null,
        'script_compiled' => null,
        'script_error' => null,
        'type' => null,
        'user_id' => null,
        'channel' => null,
        '_created_at' => null,
        '_created_by' => null,
        '_updated_at' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
        'enabled' => false,
        'username' => false,
        'alias' => false,
        'avatar' => false,
        'name' => false,
        'trigger_words' => false,
        'urls' => false,
        'token' => false,
        'script' => false,
        'script_enabled' => false,
        'impersonate_user' => false,
        'script_compiled' => false,
        'script_error' => false,
        'type' => false,
        'user_id' => false,
        'channel' => false,
        '_created_at' => false,
        '_created_by' => false,
        '_updated_at' => false
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
        'enabled' => 'enabled',
        'username' => 'username',
        'alias' => 'alias',
        'avatar' => 'avatar',
        'name' => 'name',
        'trigger_words' => 'triggerWords',
        'urls' => 'urls',
        'token' => 'token',
        'script' => 'script',
        'script_enabled' => 'scriptEnabled',
        'impersonate_user' => 'impersonateUser',
        'script_compiled' => 'scriptCompiled',
        'script_error' => 'scriptError',
        'type' => 'type',
        'user_id' => 'userId',
        'channel' => 'channel',
        '_created_at' => '_createdAt',
        '_created_by' => '_createdBy',
        '_updated_at' => '_updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
        'enabled' => 'setEnabled',
        'username' => 'setUsername',
        'alias' => 'setAlias',
        'avatar' => 'setAvatar',
        'name' => 'setName',
        'trigger_words' => 'setTriggerWords',
        'urls' => 'setUrls',
        'token' => 'setToken',
        'script' => 'setScript',
        'script_enabled' => 'setScriptEnabled',
        'impersonate_user' => 'setImpersonateUser',
        'script_compiled' => 'setScriptCompiled',
        'script_error' => 'setScriptError',
        'type' => 'setType',
        'user_id' => 'setUserId',
        'channel' => 'setChannel',
        '_created_at' => 'setCreatedAt',
        '_created_by' => 'setCreatedBy',
        '_updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
        'enabled' => 'getEnabled',
        'username' => 'getUsername',
        'alias' => 'getAlias',
        'avatar' => 'getAvatar',
        'name' => 'getName',
        'trigger_words' => 'getTriggerWords',
        'urls' => 'getUrls',
        'token' => 'getToken',
        'script' => 'getScript',
        'script_enabled' => 'getScriptEnabled',
        'impersonate_user' => 'getImpersonateUser',
        'script_compiled' => 'getScriptCompiled',
        'script_error' => 'getScriptError',
        'type' => 'getType',
        'user_id' => 'getUserId',
        'channel' => 'getChannel',
        '_created_at' => 'getCreatedAt',
        '_created_by' => 'getCreatedBy',
        '_updated_at' => 'getUpdatedAt'
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
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('username', $data ?? [], null);
        $this->setIfExists('alias', $data ?? [], null);
        $this->setIfExists('avatar', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('trigger_words', $data ?? [], null);
        $this->setIfExists('urls', $data ?? [], null);
        $this->setIfExists('token', $data ?? [], null);
        $this->setIfExists('script', $data ?? [], null);
        $this->setIfExists('script_enabled', $data ?? [], null);
        $this->setIfExists('impersonate_user', $data ?? [], null);
        $this->setIfExists('script_compiled', $data ?? [], null);
        $this->setIfExists('script_error', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('channel', $data ?? [], null);
        $this->setIfExists('_created_at', $data ?? [], null);
        $this->setIfExists('_created_by', $data ?? [], null);
        $this->setIfExists('_updated_at', $data ?? [], null);
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
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }
        $this->container['enabled'] = $enabled;

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
     * Gets alias
     *
     * @return string|null
     */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
     * Sets alias
     *
     * @param string|null $alias alias
     *
     * @return self
     */
    public function setAlias($alias)
    {
        if (is_null($alias)) {
            throw new \InvalidArgumentException('non-nullable alias cannot be null');
        }
        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return string|null
     */
    public function getAvatar()
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param string|null $avatar avatar
     *
     * @return self
     */
    public function setAvatar($avatar)
    {
        if (is_null($avatar)) {
            throw new \InvalidArgumentException('non-nullable avatar cannot be null');
        }
        $this->container['avatar'] = $avatar;

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
     * Gets trigger_words
     *
     * @return string[]|null
     */
    public function getTriggerWords()
    {
        return $this->container['trigger_words'];
    }

    /**
     * Sets trigger_words
     *
     * @param string[]|null $trigger_words trigger_words
     *
     * @return self
     */
    public function setTriggerWords($trigger_words)
    {
        if (is_null($trigger_words)) {
            throw new \InvalidArgumentException('non-nullable trigger_words cannot be null');
        }
        $this->container['trigger_words'] = $trigger_words;

        return $this;
    }

    /**
     * Gets urls
     *
     * @return string[]|null
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     *
     * @param string[]|null $urls urls
     *
     * @return self
     */
    public function setUrls($urls)
    {
        if (is_null($urls)) {
            throw new \InvalidArgumentException('non-nullable urls cannot be null');
        }
        $this->container['urls'] = $urls;

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
     * Gets script
     *
     * @return string|null
     */
    public function getScript()
    {
        return $this->container['script'];
    }

    /**
     * Sets script
     *
     * @param string|null $script script
     *
     * @return self
     */
    public function setScript($script)
    {
        if (is_null($script)) {
            throw new \InvalidArgumentException('non-nullable script cannot be null');
        }
        $this->container['script'] = $script;

        return $this;
    }

    /**
     * Gets script_enabled
     *
     * @return bool|null
     */
    public function getScriptEnabled()
    {
        return $this->container['script_enabled'];
    }

    /**
     * Sets script_enabled
     *
     * @param bool|null $script_enabled script_enabled
     *
     * @return self
     */
    public function setScriptEnabled($script_enabled)
    {
        if (is_null($script_enabled)) {
            throw new \InvalidArgumentException('non-nullable script_enabled cannot be null');
        }
        $this->container['script_enabled'] = $script_enabled;

        return $this;
    }

    /**
     * Gets impersonate_user
     *
     * @return bool|null
     */
    public function getImpersonateUser()
    {
        return $this->container['impersonate_user'];
    }

    /**
     * Sets impersonate_user
     *
     * @param bool|null $impersonate_user impersonate_user
     *
     * @return self
     */
    public function setImpersonateUser($impersonate_user)
    {
        if (is_null($impersonate_user)) {
            throw new \InvalidArgumentException('non-nullable impersonate_user cannot be null');
        }
        $this->container['impersonate_user'] = $impersonate_user;

        return $this;
    }

    /**
     * Gets script_compiled
     *
     * @return string|null
     */
    public function getScriptCompiled()
    {
        return $this->container['script_compiled'];
    }

    /**
     * Sets script_compiled
     *
     * @param string|null $script_compiled script_compiled
     *
     * @return self
     */
    public function setScriptCompiled($script_compiled)
    {
        if (is_null($script_compiled)) {
            throw new \InvalidArgumentException('non-nullable script_compiled cannot be null');
        }
        $this->container['script_compiled'] = $script_compiled;

        return $this;
    }

    /**
     * Gets script_error
     *
     * @return string|null
     */
    public function getScriptError()
    {
        return $this->container['script_error'];
    }

    /**
     * Sets script_error
     *
     * @param string|null $script_error script_error
     *
     * @return self
     */
    public function setScriptError($script_error)
    {
        if (is_null($script_error)) {
            throw new \InvalidArgumentException('non-nullable script_error cannot be null');
        }
        $this->container['script_error'] = $script_error;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {
        if (is_null($user_id)) {
            throw new \InvalidArgumentException('non-nullable user_id cannot be null');
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return object[]|null
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param object[]|null $channel channel
     *
     * @return self
     */
    public function setChannel($channel)
    {
        if (is_null($channel)) {
            throw new \InvalidArgumentException('non-nullable channel cannot be null');
        }
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets _created_at
     *
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->container['_created_at'];
    }

    /**
     * Sets _created_at
     *
     * @param string|null $_created_at _created_at
     *
     * @return self
     */
    public function setCreatedAt($_created_at)
    {
        if (is_null($_created_at)) {
            throw new \InvalidArgumentException('non-nullable _created_at cannot be null');
        }
        $this->container['_created_at'] = $_created_at;

        return $this;
    }

    /**
     * Gets _created_by
     *
     * @return \RocketChatRoomsApi\Model\GetApiV1ChannelsGetIntegrations200ResponseIntegrationsInnerCreatedBy|null
     */
    public function getCreatedBy()
    {
        return $this->container['_created_by'];
    }

    /**
     * Sets _created_by
     *
     * @param \RocketChatRoomsApi\Model\GetApiV1ChannelsGetIntegrations200ResponseIntegrationsInnerCreatedBy|null $_created_by _created_by
     *
     * @return self
     */
    public function setCreatedBy($_created_by)
    {
        if (is_null($_created_by)) {
            throw new \InvalidArgumentException('non-nullable _created_by cannot be null');
        }
        $this->container['_created_by'] = $_created_by;

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


