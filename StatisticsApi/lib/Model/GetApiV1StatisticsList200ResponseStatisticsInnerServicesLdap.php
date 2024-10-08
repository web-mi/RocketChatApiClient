<?php
/**
 * GetApiV1StatisticsList200ResponseStatisticsInnerServicesLdap
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\StatisticsApi
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

namespace WebMI\RocketChatApiClient\StatisticsApi\Model;

use \ArrayAccess;
use \WebMI\RocketChatApiClient\StatisticsApi\ObjectSerializer;

/**
 * GetApiV1StatisticsList200ResponseStatisticsInnerServicesLdap Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\StatisticsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1StatisticsList200ResponseStatisticsInnerServicesLdap implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_statistics_list_200_response_statistics_inner_services_ldap';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'users' => 'int',
        'enabled' => 'bool',
        'login_fallback' => 'bool',
        'encryption' => 'string',
        'background_sync' => 'object',
        'ee' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'users' => null,
        'enabled' => null,
        'login_fallback' => null,
        'encryption' => null,
        'background_sync' => null,
        'ee' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'users' => false,
        'enabled' => false,
        'login_fallback' => false,
        'encryption' => false,
        'background_sync' => false,
        'ee' => false
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
        'users' => 'users',
        'enabled' => 'enabled',
        'login_fallback' => 'loginFallback',
        'encryption' => 'encryption',
        'background_sync' => 'backgroundSync',
        'ee' => 'ee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'users' => 'set_users',
        'enabled' => 'set_enabled',
        'login_fallback' => 'set_login_fallback',
        'encryption' => 'set_encryption',
        'background_sync' => 'set_background_sync',
        'ee' => 'set_ee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'users' => 'get_users',
        'enabled' => 'get_enabled',
        'login_fallback' => 'get_login_fallback',
        'encryption' => 'get_encryption',
        'background_sync' => 'get_background_sync',
        'ee' => 'get_ee'
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
        $this->setIfExists('users', $data ?? [], null);
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('login_fallback', $data ?? [], null);
        $this->setIfExists('encryption', $data ?? [], null);
        $this->setIfExists('background_sync', $data ?? [], null);
        $this->setIfExists('ee', $data ?? [], null);
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
     * Gets users
     *
     * @return int|null
     */
    public function get_users()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param int|null $users users
     *
     * @return self
     */
    public function set_users($users)
    {
        if (is_null($users)) {
            throw new \InvalidArgumentException('non-nullable users cannot be null');
        }
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function get_enabled()
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
    public function set_enabled($enabled)
    {
        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets login_fallback
     *
     * @return bool|null
     */
    public function get_login_fallback()
    {
        return $this->container['login_fallback'];
    }

    /**
     * Sets login_fallback
     *
     * @param bool|null $login_fallback login_fallback
     *
     * @return self
     */
    public function set_login_fallback($login_fallback)
    {
        if (is_null($login_fallback)) {
            throw new \InvalidArgumentException('non-nullable login_fallback cannot be null');
        }
        $this->container['login_fallback'] = $login_fallback;

        return $this;
    }

    /**
     * Gets encryption
     *
     * @return string|null
     */
    public function get_encryption()
    {
        return $this->container['encryption'];
    }

    /**
     * Sets encryption
     *
     * @param string|null $encryption encryption
     *
     * @return self
     */
    public function set_encryption($encryption)
    {
        if (is_null($encryption)) {
            throw new \InvalidArgumentException('non-nullable encryption cannot be null');
        }
        $this->container['encryption'] = $encryption;

        return $this;
    }

    /**
     * Gets background_sync
     *
     * @return object|null
     */
    public function get_background_sync()
    {
        return $this->container['background_sync'];
    }

    /**
     * Sets background_sync
     *
     * @param object|null $background_sync background_sync
     *
     * @return self
     */
    public function set_background_sync($background_sync)
    {
        if (is_null($background_sync)) {
            throw new \InvalidArgumentException('non-nullable background_sync cannot be null');
        }
        $this->container['background_sync'] = $background_sync;

        return $this;
    }

    /**
     * Gets ee
     *
     * @return object|null
     */
    public function get_ee()
    {
        return $this->container['ee'];
    }

    /**
     * Sets ee
     *
     * @param object|null $ee ee
     *
     * @return self
     */
    public function set_ee($ee)
    {
        if (is_null($ee)) {
            throw new \InvalidArgumentException('non-nullable ee cannot be null');
        }
        $this->container['ee'] = $ee;

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


