<?php
/**
 * GetApiV1LicensesInfo200ResponseLicenseLicenseLimits
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  RocketChatMiscellaneousApi
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

namespace RocketChatMiscellaneousApi\Model;

use \ArrayAccess;
use \RocketChatMiscellaneousApi\ObjectSerializer;

/**
 * GetApiV1LicensesInfo200ResponseLicenseLicenseLimits Class Doc Comment
 *
 * @category Class
 * @package  RocketChatMiscellaneousApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1LicensesInfo200ResponseLicenseLicenseLimits implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_licenses_info_200_response_license_license_limits';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'guest_users' => '\RocketChatMiscellaneousApi\Model\GetApiV1LicensesInfo200ResponseLicenseLicenseLimitsGuestUsersInner[]',
        'rooms_per_guest' => '\RocketChatMiscellaneousApi\Model\GetApiV1LicensesInfo200ResponseLicenseLicenseLimitsGuestUsersInner[]',
        'monthly_active_contacts' => '\RocketChatMiscellaneousApi\Model\GetApiV1LicensesInfo200ResponseLicenseLicenseLimitsGuestUsersInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'guest_users' => null,
        'rooms_per_guest' => null,
        'monthly_active_contacts' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'guest_users' => false,
        'rooms_per_guest' => false,
        'monthly_active_contacts' => false
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
        'guest_users' => 'guestUsers',
        'rooms_per_guest' => 'roomsPerGuest',
        'monthly_active_contacts' => 'monthlyActiveContacts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'guest_users' => 'setGuestUsers',
        'rooms_per_guest' => 'setRoomsPerGuest',
        'monthly_active_contacts' => 'setMonthlyActiveContacts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'guest_users' => 'getGuestUsers',
        'rooms_per_guest' => 'getRoomsPerGuest',
        'monthly_active_contacts' => 'getMonthlyActiveContacts'
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
        $this->setIfExists('guest_users', $data ?? [], null);
        $this->setIfExists('rooms_per_guest', $data ?? [], null);
        $this->setIfExists('monthly_active_contacts', $data ?? [], null);
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
     * Gets guest_users
     *
     * @return \RocketChatMiscellaneousApi\Model\GetApiV1LicensesInfo200ResponseLicenseLicenseLimitsGuestUsersInner[]|null
     */
    public function getGuestUsers()
    {
        return $this->container['guest_users'];
    }

    /**
     * Sets guest_users
     *
     * @param \RocketChatMiscellaneousApi\Model\GetApiV1LicensesInfo200ResponseLicenseLicenseLimitsGuestUsersInner[]|null $guest_users guest_users
     *
     * @return self
     */
    public function setGuestUsers($guest_users)
    {
        if (is_null($guest_users)) {
            throw new \InvalidArgumentException('non-nullable guest_users cannot be null');
        }
        $this->container['guest_users'] = $guest_users;

        return $this;
    }

    /**
     * Gets rooms_per_guest
     *
     * @return \RocketChatMiscellaneousApi\Model\GetApiV1LicensesInfo200ResponseLicenseLicenseLimitsGuestUsersInner[]|null
     */
    public function getRoomsPerGuest()
    {
        return $this->container['rooms_per_guest'];
    }

    /**
     * Sets rooms_per_guest
     *
     * @param \RocketChatMiscellaneousApi\Model\GetApiV1LicensesInfo200ResponseLicenseLicenseLimitsGuestUsersInner[]|null $rooms_per_guest rooms_per_guest
     *
     * @return self
     */
    public function setRoomsPerGuest($rooms_per_guest)
    {
        if (is_null($rooms_per_guest)) {
            throw new \InvalidArgumentException('non-nullable rooms_per_guest cannot be null');
        }
        $this->container['rooms_per_guest'] = $rooms_per_guest;

        return $this;
    }

    /**
     * Gets monthly_active_contacts
     *
     * @return \RocketChatMiscellaneousApi\Model\GetApiV1LicensesInfo200ResponseLicenseLicenseLimitsGuestUsersInner[]|null
     */
    public function getMonthlyActiveContacts()
    {
        return $this->container['monthly_active_contacts'];
    }

    /**
     * Sets monthly_active_contacts
     *
     * @param \RocketChatMiscellaneousApi\Model\GetApiV1LicensesInfo200ResponseLicenseLicenseLimitsGuestUsersInner[]|null $monthly_active_contacts monthly_active_contacts
     *
     * @return self
     */
    public function setMonthlyActiveContacts($monthly_active_contacts)
    {
        if (is_null($monthly_active_contacts)) {
            throw new \InvalidArgumentException('non-nullable monthly_active_contacts cannot be null');
        }
        $this->container['monthly_active_contacts'] = $monthly_active_contacts;

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


