<?php
/**
 * GetApiV1Statistics200ResponseMatrixFederation
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMIRocketChatApiClientStatisticsApi
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

namespace WebMIRocketChatApiClientStatisticsApi\Model;

use \ArrayAccess;
use \WebMIRocketChatApiClientStatisticsApi\ObjectSerializer;

/**
 * GetApiV1Statistics200ResponseMatrixFederation Class Doc Comment
 *
 * @category Class
 * @package  WebMIRocketChatApiClientStatisticsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1Statistics200ResponseMatrixFederation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_statistics_200_response_matrixFederation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enabled' => 'bool',
        'maximum_size_of_public_rooms_users' => 'int',
        'biggest_room' => 'string',
        'smallest_room' => 'string',
        'amount_of_external_users' => 'int',
        'amount_of_federated_rooms' => 'int',
        'external_connected_servers' => '\WebMIRocketChatApiClientStatisticsApi\Model\GetApiV1Statistics200ResponseMatrixFederationExternalConnectedServers'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'enabled' => null,
        'maximum_size_of_public_rooms_users' => null,
        'biggest_room' => null,
        'smallest_room' => null,
        'amount_of_external_users' => null,
        'amount_of_federated_rooms' => null,
        'external_connected_servers' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'enabled' => false,
        'maximum_size_of_public_rooms_users' => false,
        'biggest_room' => false,
        'smallest_room' => false,
        'amount_of_external_users' => false,
        'amount_of_federated_rooms' => false,
        'external_connected_servers' => false
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
        'enabled' => 'enabled',
        'maximum_size_of_public_rooms_users' => 'maximumSizeOfPublicRoomsUsers',
        'biggest_room' => 'biggestRoom',
        'smallest_room' => 'smallestRoom',
        'amount_of_external_users' => 'amountOfExternalUsers',
        'amount_of_federated_rooms' => 'amountOfFederatedRooms',
        'external_connected_servers' => 'externalConnectedServers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enabled' => 'setEnabled',
        'maximum_size_of_public_rooms_users' => 'setMaximumSizeOfPublicRoomsUsers',
        'biggest_room' => 'setBiggestRoom',
        'smallest_room' => 'setSmallestRoom',
        'amount_of_external_users' => 'setAmountOfExternalUsers',
        'amount_of_federated_rooms' => 'setAmountOfFederatedRooms',
        'external_connected_servers' => 'setExternalConnectedServers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enabled' => 'getEnabled',
        'maximum_size_of_public_rooms_users' => 'getMaximumSizeOfPublicRoomsUsers',
        'biggest_room' => 'getBiggestRoom',
        'smallest_room' => 'getSmallestRoom',
        'amount_of_external_users' => 'getAmountOfExternalUsers',
        'amount_of_federated_rooms' => 'getAmountOfFederatedRooms',
        'external_connected_servers' => 'getExternalConnectedServers'
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
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('maximum_size_of_public_rooms_users', $data ?? [], null);
        $this->setIfExists('biggest_room', $data ?? [], null);
        $this->setIfExists('smallest_room', $data ?? [], null);
        $this->setIfExists('amount_of_external_users', $data ?? [], null);
        $this->setIfExists('amount_of_federated_rooms', $data ?? [], null);
        $this->setIfExists('external_connected_servers', $data ?? [], null);
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
     * Gets maximum_size_of_public_rooms_users
     *
     * @return int|null
     */
    public function getMaximumSizeOfPublicRoomsUsers()
    {
        return $this->container['maximum_size_of_public_rooms_users'];
    }

    /**
     * Sets maximum_size_of_public_rooms_users
     *
     * @param int|null $maximum_size_of_public_rooms_users maximum_size_of_public_rooms_users
     *
     * @return self
     */
    public function setMaximumSizeOfPublicRoomsUsers($maximum_size_of_public_rooms_users)
    {
        if (is_null($maximum_size_of_public_rooms_users)) {
            throw new \InvalidArgumentException('non-nullable maximum_size_of_public_rooms_users cannot be null');
        }
        $this->container['maximum_size_of_public_rooms_users'] = $maximum_size_of_public_rooms_users;

        return $this;
    }

    /**
     * Gets biggest_room
     *
     * @return string|null
     */
    public function getBiggestRoom()
    {
        return $this->container['biggest_room'];
    }

    /**
     * Sets biggest_room
     *
     * @param string|null $biggest_room biggest_room
     *
     * @return self
     */
    public function setBiggestRoom($biggest_room)
    {
        if (is_null($biggest_room)) {
            throw new \InvalidArgumentException('non-nullable biggest_room cannot be null');
        }
        $this->container['biggest_room'] = $biggest_room;

        return $this;
    }

    /**
     * Gets smallest_room
     *
     * @return string|null
     */
    public function getSmallestRoom()
    {
        return $this->container['smallest_room'];
    }

    /**
     * Sets smallest_room
     *
     * @param string|null $smallest_room smallest_room
     *
     * @return self
     */
    public function setSmallestRoom($smallest_room)
    {
        if (is_null($smallest_room)) {
            throw new \InvalidArgumentException('non-nullable smallest_room cannot be null');
        }
        $this->container['smallest_room'] = $smallest_room;

        return $this;
    }

    /**
     * Gets amount_of_external_users
     *
     * @return int|null
     */
    public function getAmountOfExternalUsers()
    {
        return $this->container['amount_of_external_users'];
    }

    /**
     * Sets amount_of_external_users
     *
     * @param int|null $amount_of_external_users amount_of_external_users
     *
     * @return self
     */
    public function setAmountOfExternalUsers($amount_of_external_users)
    {
        if (is_null($amount_of_external_users)) {
            throw new \InvalidArgumentException('non-nullable amount_of_external_users cannot be null');
        }
        $this->container['amount_of_external_users'] = $amount_of_external_users;

        return $this;
    }

    /**
     * Gets amount_of_federated_rooms
     *
     * @return int|null
     */
    public function getAmountOfFederatedRooms()
    {
        return $this->container['amount_of_federated_rooms'];
    }

    /**
     * Sets amount_of_federated_rooms
     *
     * @param int|null $amount_of_federated_rooms amount_of_federated_rooms
     *
     * @return self
     */
    public function setAmountOfFederatedRooms($amount_of_federated_rooms)
    {
        if (is_null($amount_of_federated_rooms)) {
            throw new \InvalidArgumentException('non-nullable amount_of_federated_rooms cannot be null');
        }
        $this->container['amount_of_federated_rooms'] = $amount_of_federated_rooms;

        return $this;
    }

    /**
     * Gets external_connected_servers
     *
     * @return \WebMIRocketChatApiClientStatisticsApi\Model\GetApiV1Statistics200ResponseMatrixFederationExternalConnectedServers|null
     */
    public function getExternalConnectedServers()
    {
        return $this->container['external_connected_servers'];
    }

    /**
     * Sets external_connected_servers
     *
     * @param \WebMIRocketChatApiClientStatisticsApi\Model\GetApiV1Statistics200ResponseMatrixFederationExternalConnectedServers|null $external_connected_servers external_connected_servers
     *
     * @return self
     */
    public function setExternalConnectedServers($external_connected_servers)
    {
        if (is_null($external_connected_servers)) {
            throw new \InvalidArgumentException('non-nullable external_connected_servers cannot be null');
        }
        $this->container['external_connected_servers'] = $external_connected_servers;

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


