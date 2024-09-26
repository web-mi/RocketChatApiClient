<?php
/**
 * GetApiV1Statistics200ResponseOs
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
 * GetApiV1Statistics200ResponseOs Class Doc Comment
 *
 * @category Class
 * @package  RocketChatStatisticsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1Statistics200ResponseOs implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_statistics_200_response_os';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'platform' => 'string',
        'arch' => 'string',
        'release' => 'string',
        'uptime' => 'float',
        'loadavg' => 'int[]',
        'totalmem' => 'int',
        'freemem' => 'int',
        'cpus' => '\RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerOsCpusInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'platform' => null,
        'arch' => null,
        'release' => null,
        'uptime' => null,
        'loadavg' => null,
        'totalmem' => null,
        'freemem' => null,
        'cpus' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
        'platform' => false,
        'arch' => false,
        'release' => false,
        'uptime' => false,
        'loadavg' => false,
        'totalmem' => false,
        'freemem' => false,
        'cpus' => false
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
        'type' => 'type',
        'platform' => 'platform',
        'arch' => 'arch',
        'release' => 'release',
        'uptime' => 'uptime',
        'loadavg' => 'loadavg',
        'totalmem' => 'totalmem',
        'freemem' => 'freemem',
        'cpus' => 'cpus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'platform' => 'setPlatform',
        'arch' => 'setArch',
        'release' => 'setRelease',
        'uptime' => 'setUptime',
        'loadavg' => 'setLoadavg',
        'totalmem' => 'setTotalmem',
        'freemem' => 'setFreemem',
        'cpus' => 'setCpus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'platform' => 'getPlatform',
        'arch' => 'getArch',
        'release' => 'getRelease',
        'uptime' => 'getUptime',
        'loadavg' => 'getLoadavg',
        'totalmem' => 'getTotalmem',
        'freemem' => 'getFreemem',
        'cpus' => 'getCpus'
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('platform', $data ?? [], null);
        $this->setIfExists('arch', $data ?? [], null);
        $this->setIfExists('release', $data ?? [], null);
        $this->setIfExists('uptime', $data ?? [], null);
        $this->setIfExists('loadavg', $data ?? [], null);
        $this->setIfExists('totalmem', $data ?? [], null);
        $this->setIfExists('freemem', $data ?? [], null);
        $this->setIfExists('cpus', $data ?? [], null);
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
     * Gets platform
     *
     * @return string|null
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     *
     * @param string|null $platform platform
     *
     * @return self
     */
    public function setPlatform($platform)
    {
        if (is_null($platform)) {
            throw new \InvalidArgumentException('non-nullable platform cannot be null');
        }
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets arch
     *
     * @return string|null
     */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
     * Sets arch
     *
     * @param string|null $arch arch
     *
     * @return self
     */
    public function setArch($arch)
    {
        if (is_null($arch)) {
            throw new \InvalidArgumentException('non-nullable arch cannot be null');
        }
        $this->container['arch'] = $arch;

        return $this;
    }

    /**
     * Gets release
     *
     * @return string|null
     */
    public function getRelease()
    {
        return $this->container['release'];
    }

    /**
     * Sets release
     *
     * @param string|null $release release
     *
     * @return self
     */
    public function setRelease($release)
    {
        if (is_null($release)) {
            throw new \InvalidArgumentException('non-nullable release cannot be null');
        }
        $this->container['release'] = $release;

        return $this;
    }

    /**
     * Gets uptime
     *
     * @return float|null
     */
    public function getUptime()
    {
        return $this->container['uptime'];
    }

    /**
     * Sets uptime
     *
     * @param float|null $uptime uptime
     *
     * @return self
     */
    public function setUptime($uptime)
    {
        if (is_null($uptime)) {
            throw new \InvalidArgumentException('non-nullable uptime cannot be null');
        }
        $this->container['uptime'] = $uptime;

        return $this;
    }

    /**
     * Gets loadavg
     *
     * @return int[]|null
     */
    public function getLoadavg()
    {
        return $this->container['loadavg'];
    }

    /**
     * Sets loadavg
     *
     * @param int[]|null $loadavg loadavg
     *
     * @return self
     */
    public function setLoadavg($loadavg)
    {
        if (is_null($loadavg)) {
            throw new \InvalidArgumentException('non-nullable loadavg cannot be null');
        }
        $this->container['loadavg'] = $loadavg;

        return $this;
    }

    /**
     * Gets totalmem
     *
     * @return int|null
     */
    public function getTotalmem()
    {
        return $this->container['totalmem'];
    }

    /**
     * Sets totalmem
     *
     * @param int|null $totalmem totalmem
     *
     * @return self
     */
    public function setTotalmem($totalmem)
    {
        if (is_null($totalmem)) {
            throw new \InvalidArgumentException('non-nullable totalmem cannot be null');
        }
        $this->container['totalmem'] = $totalmem;

        return $this;
    }

    /**
     * Gets freemem
     *
     * @return int|null
     */
    public function getFreemem()
    {
        return $this->container['freemem'];
    }

    /**
     * Sets freemem
     *
     * @param int|null $freemem freemem
     *
     * @return self
     */
    public function setFreemem($freemem)
    {
        if (is_null($freemem)) {
            throw new \InvalidArgumentException('non-nullable freemem cannot be null');
        }
        $this->container['freemem'] = $freemem;

        return $this;
    }

    /**
     * Gets cpus
     *
     * @return \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerOsCpusInner[]|null
     */
    public function getCpus()
    {
        return $this->container['cpus'];
    }

    /**
     * Sets cpus
     *
     * @param \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerOsCpusInner[]|null $cpus cpus
     *
     * @return self
     */
    public function setCpus($cpus)
    {
        if (is_null($cpus)) {
            throw new \InvalidArgumentException('non-nullable cpus cannot be null');
        }
        $this->container['cpus'] = $cpus;

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


