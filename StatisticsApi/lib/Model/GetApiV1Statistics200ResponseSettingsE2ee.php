<?php
/**
 * GetApiV1Statistics200ResponseSettingsE2ee
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  RocketChatStatisticsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Statistics
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

namespace RocketChatStatisticsApi\Model;

use \ArrayAccess;
use \RocketChatStatisticsApi\ObjectSerializer;

/**
 * GetApiV1Statistics200ResponseSettingsE2ee Class Doc Comment
 *
 * @category Class
 * @package  RocketChatStatisticsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1Statistics200ResponseSettingsE2ee implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_statistics_200_response_settings_e2ee';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'e2e' => 'bool',
        'e2e_default_direct_room' => 'bool',
        'e2e_default_private_room' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'e2e' => null,
        'e2e_default_direct_room' => null,
        'e2e_default_private_room' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'e2e' => false,
        'e2e_default_direct_room' => false,
        'e2e_default_private_room' => false
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
        'e2e' => 'e2e',
        'e2e_default_direct_room' => 'e2eDefaultDirectRoom',
        'e2e_default_private_room' => 'e2eDefaultPrivateRoom'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'e2e' => 'setE2e',
        'e2e_default_direct_room' => 'setE2eDefaultDirectRoom',
        'e2e_default_private_room' => 'setE2eDefaultPrivateRoom'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'e2e' => 'getE2e',
        'e2e_default_direct_room' => 'getE2eDefaultDirectRoom',
        'e2e_default_private_room' => 'getE2eDefaultPrivateRoom'
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
        $this->setIfExists('e2e', $data ?? [], null);
        $this->setIfExists('e2e_default_direct_room', $data ?? [], null);
        $this->setIfExists('e2e_default_private_room', $data ?? [], null);
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
     * Gets e2e
     *
     * @return bool|null
     */
    public function getE2e()
    {
        return $this->container['e2e'];
    }

    /**
     * Sets e2e
     *
     * @param bool|null $e2e e2e
     *
     * @return self
     */
    public function setE2e($e2e)
    {
        if (is_null($e2e)) {
            throw new \InvalidArgumentException('non-nullable e2e cannot be null');
        }
        $this->container['e2e'] = $e2e;

        return $this;
    }

    /**
     * Gets e2e_default_direct_room
     *
     * @return bool|null
     */
    public function getE2eDefaultDirectRoom()
    {
        return $this->container['e2e_default_direct_room'];
    }

    /**
     * Sets e2e_default_direct_room
     *
     * @param bool|null $e2e_default_direct_room e2e_default_direct_room
     *
     * @return self
     */
    public function setE2eDefaultDirectRoom($e2e_default_direct_room)
    {
        if (is_null($e2e_default_direct_room)) {
            throw new \InvalidArgumentException('non-nullable e2e_default_direct_room cannot be null');
        }
        $this->container['e2e_default_direct_room'] = $e2e_default_direct_room;

        return $this;
    }

    /**
     * Gets e2e_default_private_room
     *
     * @return bool|null
     */
    public function getE2eDefaultPrivateRoom()
    {
        return $this->container['e2e_default_private_room'];
    }

    /**
     * Sets e2e_default_private_room
     *
     * @param bool|null $e2e_default_private_room e2e_default_private_room
     *
     * @return self
     */
    public function setE2eDefaultPrivateRoom($e2e_default_private_room)
    {
        if (is_null($e2e_default_private_room)) {
            throw new \InvalidArgumentException('non-nullable e2e_default_private_room cannot be null');
        }
        $this->container['e2e_default_private_room'] = $e2e_default_private_room;

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


