<?php
/**
 * GetApiV1GroupsInfo200ResponseGroup
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\RoomsApi
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

namespace WebMI\RocketChatApiClient\RoomsApi\Model;

use \ArrayAccess;
use \WebMI\RocketChatApiClient\RoomsApi\ObjectSerializer;

/**
 * GetApiV1GroupsInfo200ResponseGroup Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\RoomsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1GroupsInfo200ResponseGroup implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_groups_info_200_response_group';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'name' => 'string',
        'fname' => 'string',
        't' => 'string',
        'msgs' => 'int',
        'users_count' => 'int',
        'u' => '\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddAll200ResponseChannelU',
        'custom_fields' => 'object',
        'broadcast' => 'bool',
        'encrypted' => 'bool',
        'ts' => 'string',
        'ro' => 'bool',
        'default' => 'bool',
        'sys_mes' => 'bool',
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
        'name' => null,
        'fname' => null,
        't' => null,
        'msgs' => null,
        'users_count' => null,
        'u' => null,
        'custom_fields' => null,
        'broadcast' => null,
        'encrypted' => null,
        'ts' => null,
        'ro' => null,
        'default' => null,
        'sys_mes' => null,
        '_updated_at' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
        'name' => false,
        'fname' => false,
        't' => false,
        'msgs' => false,
        'users_count' => false,
        'u' => false,
        'custom_fields' => false,
        'broadcast' => false,
        'encrypted' => false,
        'ts' => false,
        'ro' => false,
        'default' => false,
        'sys_mes' => false,
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
        'name' => 'name',
        'fname' => 'fname',
        't' => 't',
        'msgs' => 'msgs',
        'users_count' => 'usersCount',
        'u' => 'u',
        'custom_fields' => 'customFields',
        'broadcast' => 'broadcast',
        'encrypted' => 'encrypted',
        'ts' => 'ts',
        'ro' => 'ro',
        'default' => 'default',
        'sys_mes' => 'sysMes',
        '_updated_at' => '_updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'set__id',
        'name' => 'set_name',
        'fname' => 'set_fname',
        't' => 'set_t',
        'msgs' => 'set_msgs',
        'users_count' => 'set_users_count',
        'u' => 'set_u',
        'custom_fields' => 'set_custom_fields',
        'broadcast' => 'set_broadcast',
        'encrypted' => 'set_encrypted',
        'ts' => 'set_ts',
        'ro' => 'set_ro',
        'default' => 'set_default',
        'sys_mes' => 'set_sys_mes',
        '_updated_at' => 'set__updated_at'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'get__id',
        'name' => 'get_name',
        'fname' => 'get_fname',
        't' => 'get_t',
        'msgs' => 'get_msgs',
        'users_count' => 'get_users_count',
        'u' => 'get_u',
        'custom_fields' => 'get_custom_fields',
        'broadcast' => 'get_broadcast',
        'encrypted' => 'get_encrypted',
        'ts' => 'get_ts',
        'ro' => 'get_ro',
        'default' => 'get_default',
        'sys_mes' => 'get_sys_mes',
        '_updated_at' => 'get__updated_at'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('fname', $data ?? [], null);
        $this->setIfExists('t', $data ?? [], null);
        $this->setIfExists('msgs', $data ?? [], null);
        $this->setIfExists('users_count', $data ?? [], null);
        $this->setIfExists('u', $data ?? [], null);
        $this->setIfExists('custom_fields', $data ?? [], null);
        $this->setIfExists('broadcast', $data ?? [], null);
        $this->setIfExists('encrypted', $data ?? [], null);
        $this->setIfExists('ts', $data ?? [], null);
        $this->setIfExists('ro', $data ?? [], null);
        $this->setIfExists('default', $data ?? [], null);
        $this->setIfExists('sys_mes', $data ?? [], null);
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
    public function get__id()
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
    public function set__id($_id)
    {
        if (is_null($_id)) {
            throw new \InvalidArgumentException('non-nullable _id cannot be null');
        }
        $this->container['_id'] = $_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function get_name()
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
    public function set_name($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets fname
     *
     * @return string|null
     */
    public function get_fname()
    {
        return $this->container['fname'];
    }

    /**
     * Sets fname
     *
     * @param string|null $fname fname
     *
     * @return self
     */
    public function set_fname($fname)
    {
        if (is_null($fname)) {
            throw new \InvalidArgumentException('non-nullable fname cannot be null');
        }
        $this->container['fname'] = $fname;

        return $this;
    }

    /**
     * Gets t
     *
     * @return string|null
     */
    public function get_t()
    {
        return $this->container['t'];
    }

    /**
     * Sets t
     *
     * @param string|null $t t
     *
     * @return self
     */
    public function set_t($t)
    {
        if (is_null($t)) {
            throw new \InvalidArgumentException('non-nullable t cannot be null');
        }
        $this->container['t'] = $t;

        return $this;
    }

    /**
     * Gets msgs
     *
     * @return int|null
     */
    public function get_msgs()
    {
        return $this->container['msgs'];
    }

    /**
     * Sets msgs
     *
     * @param int|null $msgs msgs
     *
     * @return self
     */
    public function set_msgs($msgs)
    {
        if (is_null($msgs)) {
            throw new \InvalidArgumentException('non-nullable msgs cannot be null');
        }
        $this->container['msgs'] = $msgs;

        return $this;
    }

    /**
     * Gets users_count
     *
     * @return int|null
     */
    public function get_users_count()
    {
        return $this->container['users_count'];
    }

    /**
     * Sets users_count
     *
     * @param int|null $users_count users_count
     *
     * @return self
     */
    public function set_users_count($users_count)
    {
        if (is_null($users_count)) {
            throw new \InvalidArgumentException('non-nullable users_count cannot be null');
        }
        $this->container['users_count'] = $users_count;

        return $this;
    }

    /**
     * Gets u
     *
     * @return \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddAll200ResponseChannelU|null
     */
    public function get_u()
    {
        return $this->container['u'];
    }

    /**
     * Sets u
     *
     * @param \WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddAll200ResponseChannelU|null $u u
     *
     * @return self
     */
    public function set_u($u)
    {
        if (is_null($u)) {
            throw new \InvalidArgumentException('non-nullable u cannot be null');
        }
        $this->container['u'] = $u;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return object|null
     */
    public function get_custom_fields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param object|null $custom_fields custom_fields
     *
     * @return self
     */
    public function set_custom_fields($custom_fields)
    {
        if (is_null($custom_fields)) {
            throw new \InvalidArgumentException('non-nullable custom_fields cannot be null');
        }
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets broadcast
     *
     * @return bool|null
     */
    public function get_broadcast()
    {
        return $this->container['broadcast'];
    }

    /**
     * Sets broadcast
     *
     * @param bool|null $broadcast broadcast
     *
     * @return self
     */
    public function set_broadcast($broadcast)
    {
        if (is_null($broadcast)) {
            throw new \InvalidArgumentException('non-nullable broadcast cannot be null');
        }
        $this->container['broadcast'] = $broadcast;

        return $this;
    }

    /**
     * Gets encrypted
     *
     * @return bool|null
     */
    public function get_encrypted()
    {
        return $this->container['encrypted'];
    }

    /**
     * Sets encrypted
     *
     * @param bool|null $encrypted encrypted
     *
     * @return self
     */
    public function set_encrypted($encrypted)
    {
        if (is_null($encrypted)) {
            throw new \InvalidArgumentException('non-nullable encrypted cannot be null');
        }
        $this->container['encrypted'] = $encrypted;

        return $this;
    }

    /**
     * Gets ts
     *
     * @return string|null
     */
    public function get_ts()
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
    public function set_ts($ts)
    {
        if (is_null($ts)) {
            throw new \InvalidArgumentException('non-nullable ts cannot be null');
        }
        $this->container['ts'] = $ts;

        return $this;
    }

    /**
     * Gets ro
     *
     * @return bool|null
     */
    public function get_ro()
    {
        return $this->container['ro'];
    }

    /**
     * Sets ro
     *
     * @param bool|null $ro ro
     *
     * @return self
     */
    public function set_ro($ro)
    {
        if (is_null($ro)) {
            throw new \InvalidArgumentException('non-nullable ro cannot be null');
        }
        $this->container['ro'] = $ro;

        return $this;
    }

    /**
     * Gets default
     *
     * @return bool|null
     */
    public function get_default()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param bool|null $default default
     *
     * @return self
     */
    public function set_default($default)
    {
        if (is_null($default)) {
            throw new \InvalidArgumentException('non-nullable default cannot be null');
        }
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets sys_mes
     *
     * @return bool|null
     */
    public function get_sys_mes()
    {
        return $this->container['sys_mes'];
    }

    /**
     * Sets sys_mes
     *
     * @param bool|null $sys_mes sys_mes
     *
     * @return self
     */
    public function set_sys_mes($sys_mes)
    {
        if (is_null($sys_mes)) {
            throw new \InvalidArgumentException('non-nullable sys_mes cannot be null');
        }
        $this->container['sys_mes'] = $sys_mes;

        return $this;
    }

    /**
     * Gets _updated_at
     *
     * @return string|null
     */
    public function get__updated_at()
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
    public function set__updated_at($_updated_at)
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


