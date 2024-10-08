<?php
/**
 * GetApiV1LicensesGet200ResponseLicensesInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\MiscellaneousApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Miscellaneous
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

namespace WebMI\RocketChatApiClient\MiscellaneousApi\Model;

use \ArrayAccess;
use \WebMI\RocketChatApiClient\MiscellaneousApi\ObjectSerializer;

/**
 * GetApiV1LicensesGet200ResponseLicensesInner Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\MiscellaneousApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1LicensesGet200ResponseLicensesInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_licenses_get_200_response_licenses_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'version' => 'int',
        'url' => 'string',
        'expiry' => 'string',
        'max_active_users' => 'int',
        'max_guest_users' => 'int',
        'max_rooms_per_guest' => 'int',
        'modules' => 'string[]',
        'tag' => '\WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1LicensesGet200ResponseLicensesInnerTag',
        'meta' => '\WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1LicensesGet200ResponseLicensesInnerMeta'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'version' => null,
        'url' => null,
        'expiry' => null,
        'max_active_users' => null,
        'max_guest_users' => null,
        'max_rooms_per_guest' => null,
        'modules' => null,
        'tag' => null,
        'meta' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'version' => false,
        'url' => false,
        'expiry' => false,
        'max_active_users' => false,
        'max_guest_users' => false,
        'max_rooms_per_guest' => false,
        'modules' => false,
        'tag' => false,
        'meta' => false
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
        'version' => 'version',
        'url' => 'url',
        'expiry' => 'expiry',
        'max_active_users' => 'maxActiveUsers',
        'max_guest_users' => 'maxGuestUsers',
        'max_rooms_per_guest' => 'maxRoomsPerGuest',
        'modules' => 'modules',
        'tag' => 'tag',
        'meta' => 'meta'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'version' => 'set_version',
        'url' => 'set_url',
        'expiry' => 'set_expiry',
        'max_active_users' => 'set_max_active_users',
        'max_guest_users' => 'set_max_guest_users',
        'max_rooms_per_guest' => 'set_max_rooms_per_guest',
        'modules' => 'set_modules',
        'tag' => 'set_tag',
        'meta' => 'set_meta'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'version' => 'get_version',
        'url' => 'get_url',
        'expiry' => 'get_expiry',
        'max_active_users' => 'get_max_active_users',
        'max_guest_users' => 'get_max_guest_users',
        'max_rooms_per_guest' => 'get_max_rooms_per_guest',
        'modules' => 'get_modules',
        'tag' => 'get_tag',
        'meta' => 'get_meta'
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
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('expiry', $data ?? [], null);
        $this->setIfExists('max_active_users', $data ?? [], null);
        $this->setIfExists('max_guest_users', $data ?? [], null);
        $this->setIfExists('max_rooms_per_guest', $data ?? [], null);
        $this->setIfExists('modules', $data ?? [], null);
        $this->setIfExists('tag', $data ?? [], null);
        $this->setIfExists('meta', $data ?? [], null);
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
     * Gets version
     *
     * @return int|null
     */
    public function get_version()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int|null $version version
     *
     * @return self
     */
    public function set_version($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function get_url()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return self
     */
    public function set_url($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets expiry
     *
     * @return string|null
     */
    public function get_expiry()
    {
        return $this->container['expiry'];
    }

    /**
     * Sets expiry
     *
     * @param string|null $expiry expiry
     *
     * @return self
     */
    public function set_expiry($expiry)
    {
        if (is_null($expiry)) {
            throw new \InvalidArgumentException('non-nullable expiry cannot be null');
        }
        $this->container['expiry'] = $expiry;

        return $this;
    }

    /**
     * Gets max_active_users
     *
     * @return int|null
     */
    public function get_max_active_users()
    {
        return $this->container['max_active_users'];
    }

    /**
     * Sets max_active_users
     *
     * @param int|null $max_active_users max_active_users
     *
     * @return self
     */
    public function set_max_active_users($max_active_users)
    {
        if (is_null($max_active_users)) {
            throw new \InvalidArgumentException('non-nullable max_active_users cannot be null');
        }
        $this->container['max_active_users'] = $max_active_users;

        return $this;
    }

    /**
     * Gets max_guest_users
     *
     * @return int|null
     */
    public function get_max_guest_users()
    {
        return $this->container['max_guest_users'];
    }

    /**
     * Sets max_guest_users
     *
     * @param int|null $max_guest_users max_guest_users
     *
     * @return self
     */
    public function set_max_guest_users($max_guest_users)
    {
        if (is_null($max_guest_users)) {
            throw new \InvalidArgumentException('non-nullable max_guest_users cannot be null');
        }
        $this->container['max_guest_users'] = $max_guest_users;

        return $this;
    }

    /**
     * Gets max_rooms_per_guest
     *
     * @return int|null
     */
    public function get_max_rooms_per_guest()
    {
        return $this->container['max_rooms_per_guest'];
    }

    /**
     * Sets max_rooms_per_guest
     *
     * @param int|null $max_rooms_per_guest max_rooms_per_guest
     *
     * @return self
     */
    public function set_max_rooms_per_guest($max_rooms_per_guest)
    {
        if (is_null($max_rooms_per_guest)) {
            throw new \InvalidArgumentException('non-nullable max_rooms_per_guest cannot be null');
        }
        $this->container['max_rooms_per_guest'] = $max_rooms_per_guest;

        return $this;
    }

    /**
     * Gets modules
     *
     * @return string[]|null
     */
    public function get_modules()
    {
        return $this->container['modules'];
    }

    /**
     * Sets modules
     *
     * @param string[]|null $modules modules
     *
     * @return self
     */
    public function set_modules($modules)
    {
        if (is_null($modules)) {
            throw new \InvalidArgumentException('non-nullable modules cannot be null');
        }
        $this->container['modules'] = $modules;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return \WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1LicensesGet200ResponseLicensesInnerTag|null
     */
    public function get_tag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param \WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1LicensesGet200ResponseLicensesInnerTag|null $tag tag
     *
     * @return self
     */
    public function set_tag($tag)
    {
        if (is_null($tag)) {
            throw new \InvalidArgumentException('non-nullable tag cannot be null');
        }
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets meta
     *
     * @return \WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1LicensesGet200ResponseLicensesInnerMeta|null
     */
    public function get_meta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     *
     * @param \WebMI\RocketChatApiClient\MiscellaneousApi\Model\GetApiV1LicensesGet200ResponseLicensesInnerMeta|null $meta meta
     *
     * @return self
     */
    public function set_meta($meta)
    {
        if (is_null($meta)) {
            throw new \InvalidArgumentException('non-nullable meta cannot be null');
        }
        $this->container['meta'] = $meta;

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


