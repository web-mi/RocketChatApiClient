<?php
/**
 * PostApiV1GroupsSetEncrypted200ResponseGroup
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
 * PostApiV1GroupsSetEncrypted200ResponseGroup Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\RoomsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PostApiV1GroupsSetEncrypted200ResponseGroup implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'post_api_v1_groups_setEncrypted_200_response_group';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'fname' => 'string',
        'description' => 'string',
        'broadcast' => 'bool',
        'encrypted' => 'bool',
        'team_main' => 'bool',
        'name' => 'string',
        't' => 'string',
        'msgs' => 'int',
        'users_count' => 'int',
        'u' => '\WebMI\RocketChatApiClient\RoomsApi\Model\PostApiV1ChannelsAddAll200ResponseChannelU',
        'ts' => 'string',
        'ro' => 'bool',
        'team_id' => 'string',
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
        'fname' => null,
        'description' => null,
        'broadcast' => null,
        'encrypted' => null,
        'team_main' => null,
        'name' => null,
        't' => null,
        'msgs' => null,
        'users_count' => null,
        'u' => null,
        'ts' => null,
        'ro' => null,
        'team_id' => null,
        '_updated_at' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
        'fname' => false,
        'description' => false,
        'broadcast' => false,
        'encrypted' => false,
        'team_main' => false,
        'name' => false,
        't' => false,
        'msgs' => false,
        'users_count' => false,
        'u' => false,
        'ts' => false,
        'ro' => false,
        'team_id' => false,
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
        'fname' => 'fname',
        'description' => 'description',
        'broadcast' => 'broadcast',
        'encrypted' => 'encrypted',
        'team_main' => 'teamMain',
        'name' => 'name',
        't' => 't',
        'msgs' => 'msgs',
        'users_count' => 'usersCount',
        'u' => 'u',
        'ts' => 'ts',
        'ro' => 'ro',
        'team_id' => 'teamId',
        '_updated_at' => '_updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'set__id',
        'fname' => 'set_fname',
        'description' => 'set_description',
        'broadcast' => 'set_broadcast',
        'encrypted' => 'set_encrypted',
        'team_main' => 'set_team_main',
        'name' => 'set_name',
        't' => 'set_t',
        'msgs' => 'set_msgs',
        'users_count' => 'set_users_count',
        'u' => 'set_u',
        'ts' => 'set_ts',
        'ro' => 'set_ro',
        'team_id' => 'set_team_id',
        '_updated_at' => 'set__updated_at'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'get__id',
        'fname' => 'get_fname',
        'description' => 'get_description',
        'broadcast' => 'get_broadcast',
        'encrypted' => 'get_encrypted',
        'team_main' => 'get_team_main',
        'name' => 'get_name',
        't' => 'get_t',
        'msgs' => 'get_msgs',
        'users_count' => 'get_users_count',
        'u' => 'get_u',
        'ts' => 'get_ts',
        'ro' => 'get_ro',
        'team_id' => 'get_team_id',
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
        $this->setIfExists('fname', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('broadcast', $data ?? [], null);
        $this->setIfExists('encrypted', $data ?? [], null);
        $this->setIfExists('team_main', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('t', $data ?? [], null);
        $this->setIfExists('msgs', $data ?? [], null);
        $this->setIfExists('users_count', $data ?? [], null);
        $this->setIfExists('u', $data ?? [], null);
        $this->setIfExists('ts', $data ?? [], null);
        $this->setIfExists('ro', $data ?? [], null);
        $this->setIfExists('team_id', $data ?? [], null);
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
     * Gets description
     *
     * @return string|null
     */
    public function get_description()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function set_description($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

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
     * Gets team_main
     *
     * @return bool|null
     */
    public function get_team_main()
    {
        return $this->container['team_main'];
    }

    /**
     * Sets team_main
     *
     * @param bool|null $team_main team_main
     *
     * @return self
     */
    public function set_team_main($team_main)
    {
        if (is_null($team_main)) {
            throw new \InvalidArgumentException('non-nullable team_main cannot be null');
        }
        $this->container['team_main'] = $team_main;

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
     * Gets team_id
     *
     * @return string|null
     */
    public function get_team_id()
    {
        return $this->container['team_id'];
    }

    /**
     * Sets team_id
     *
     * @param string|null $team_id team_id
     *
     * @return self
     */
    public function set_team_id($team_id)
    {
        if (is_null($team_id)) {
            throw new \InvalidArgumentException('non-nullable team_id cannot be null');
        }
        $this->container['team_id'] = $team_id;

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


