<?php
/**
 * GetApiV1RoomsAdminRoomsGetRoom200Response
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMIRocketChatApiClientRoomsApi
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

namespace WebMIRocketChatApiClientRoomsApi\Model;

use \ArrayAccess;
use \WebMIRocketChatApiClientRoomsApi\ObjectSerializer;

/**
 * GetApiV1RoomsAdminRoomsGetRoom200Response Class Doc Comment
 *
 * @category Class
 * @package  WebMIRocketChatApiClientRoomsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1RoomsAdminRoomsGetRoom200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_rooms_adminRooms_getRoom_200_response';

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
        'u' => '\WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddAll200ResponseChannelU',
        'ro' => 'bool',
        'default' => 'bool',
        'success' => 'bool'
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
        'ro' => null,
        'default' => null,
        'success' => null
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
        'ro' => false,
        'default' => false,
        'success' => false
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
        'ro' => 'ro',
        'default' => 'default',
        'success' => 'success'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
        'name' => 'setName',
        'fname' => 'setFname',
        't' => 'setT',
        'msgs' => 'setMsgs',
        'users_count' => 'setUsersCount',
        'u' => 'setU',
        'ro' => 'setRo',
        'default' => 'setDefault',
        'success' => 'setSuccess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
        'name' => 'getName',
        'fname' => 'getFname',
        't' => 'getT',
        'msgs' => 'getMsgs',
        'users_count' => 'getUsersCount',
        'u' => 'getU',
        'ro' => 'getRo',
        'default' => 'getDefault',
        'success' => 'getSuccess'
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
        $this->setIfExists('ro', $data ?? [], null);
        $this->setIfExists('default', $data ?? [], null);
        $this->setIfExists('success', $data ?? [], null);
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
     * Gets fname
     *
     * @return string|null
     */
    public function getFname()
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
    public function setFname($fname)
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
    public function getT()
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
    public function setT($t)
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
    public function getMsgs()
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
    public function setMsgs($msgs)
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
    public function getUsersCount()
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
    public function setUsersCount($users_count)
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
     * @return \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddAll200ResponseChannelU|null
     */
    public function getU()
    {
        return $this->container['u'];
    }

    /**
     * Sets u
     *
     * @param \WebMIRocketChatApiClientRoomsApi\Model\PostApiV1ChannelsAddAll200ResponseChannelU|null $u u
     *
     * @return self
     */
    public function setU($u)
    {
        if (is_null($u)) {
            throw new \InvalidArgumentException('non-nullable u cannot be null');
        }
        $this->container['u'] = $u;

        return $this;
    }

    /**
     * Gets ro
     *
     * @return bool|null
     */
    public function getRo()
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
    public function setRo($ro)
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
    public function getDefault()
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
    public function setDefault($default)
    {
        if (is_null($default)) {
            throw new \InvalidArgumentException('non-nullable default cannot be null');
        }
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets success
     *
     * @return bool|null
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param bool|null $success success
     *
     * @return self
     */
    public function setSuccess($success)
    {
        if (is_null($success)) {
            throw new \InvalidArgumentException('non-nullable success cannot be null');
        }
        $this->container['success'] = $success;

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


