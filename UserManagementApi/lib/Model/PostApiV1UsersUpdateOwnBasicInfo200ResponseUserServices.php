<?php
/**
 * PostApiV1UsersUpdateOwnBasicInfo200ResponseUserServices
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\UserManagementApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * User Management
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

namespace WebMI\RocketChatApiClient\UserManagementApi\Model;

use \ArrayAccess;
use \WebMI\RocketChatApiClient\UserManagementApi\ObjectSerializer;

/**
 * PostApiV1UsersUpdateOwnBasicInfo200ResponseUserServices Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\UserManagementApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PostApiV1UsersUpdateOwnBasicInfo200ResponseUserServices implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'post_api_v1_users_updateOwnBasicInfo_200_response_user_services';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'password' => '\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdate200ResponseUserServicesPassword',
        'email2fa' => '\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdateOwnBasicInfo200ResponseUserServicesEmail2fa',
        'resume' => '\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdateOwnBasicInfo200ResponseUserServicesResume',
        'email' => '\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdateOwnBasicInfo200ResponseUserServicesEmail',
        'totp' => '\WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdateOwnBasicInfo200ResponseUserServicesTotp',
        'password_history' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'password' => null,
        'email2fa' => null,
        'resume' => null,
        'email' => null,
        'totp' => null,
        'password_history' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'password' => false,
        'email2fa' => false,
        'resume' => false,
        'email' => false,
        'totp' => false,
        'password_history' => false
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
        'password' => 'password',
        'email2fa' => 'email2fa',
        'resume' => 'resume',
        'email' => 'email',
        'totp' => 'totp',
        'password_history' => 'passwordHistory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'password' => 'set_password',
        'email2fa' => 'set_email2fa',
        'resume' => 'set_resume',
        'email' => 'set_email',
        'totp' => 'set_totp',
        'password_history' => 'set_password_history'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'password' => 'get_password',
        'email2fa' => 'get_email2fa',
        'resume' => 'get_resume',
        'email' => 'get_email',
        'totp' => 'get_totp',
        'password_history' => 'get_password_history'
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
        $this->setIfExists('password', $data ?? [], null);
        $this->setIfExists('email2fa', $data ?? [], null);
        $this->setIfExists('resume', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('totp', $data ?? [], null);
        $this->setIfExists('password_history', $data ?? [], null);
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
     * Gets password
     *
     * @return \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdate200ResponseUserServicesPassword|null
     */
    public function get_password()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdate200ResponseUserServicesPassword|null $password password
     *
     * @return self
     */
    public function set_password($password)
    {
        if (is_null($password)) {
            throw new \InvalidArgumentException('non-nullable password cannot be null');
        }
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets email2fa
     *
     * @return \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdateOwnBasicInfo200ResponseUserServicesEmail2fa|null
     */
    public function get_email2fa()
    {
        return $this->container['email2fa'];
    }

    /**
     * Sets email2fa
     *
     * @param \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdateOwnBasicInfo200ResponseUserServicesEmail2fa|null $email2fa email2fa
     *
     * @return self
     */
    public function set_email2fa($email2fa)
    {
        if (is_null($email2fa)) {
            throw new \InvalidArgumentException('non-nullable email2fa cannot be null');
        }
        $this->container['email2fa'] = $email2fa;

        return $this;
    }

    /**
     * Gets resume
     *
     * @return \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdateOwnBasicInfo200ResponseUserServicesResume|null
     */
    public function get_resume()
    {
        return $this->container['resume'];
    }

    /**
     * Sets resume
     *
     * @param \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdateOwnBasicInfo200ResponseUserServicesResume|null $resume resume
     *
     * @return self
     */
    public function set_resume($resume)
    {
        if (is_null($resume)) {
            throw new \InvalidArgumentException('non-nullable resume cannot be null');
        }
        $this->container['resume'] = $resume;

        return $this;
    }

    /**
     * Gets email
     *
     * @return \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdateOwnBasicInfo200ResponseUserServicesEmail|null
     */
    public function get_email()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdateOwnBasicInfo200ResponseUserServicesEmail|null $email email
     *
     * @return self
     */
    public function set_email($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets totp
     *
     * @return \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdateOwnBasicInfo200ResponseUserServicesTotp|null
     */
    public function get_totp()
    {
        return $this->container['totp'];
    }

    /**
     * Sets totp
     *
     * @param \WebMI\RocketChatApiClient\UserManagementApi\Model\PostApiV1UsersUpdateOwnBasicInfo200ResponseUserServicesTotp|null $totp totp
     *
     * @return self
     */
    public function set_totp($totp)
    {
        if (is_null($totp)) {
            throw new \InvalidArgumentException('non-nullable totp cannot be null');
        }
        $this->container['totp'] = $totp;

        return $this;
    }

    /**
     * Gets password_history
     *
     * @return string[]|null
     */
    public function get_password_history()
    {
        return $this->container['password_history'];
    }

    /**
     * Sets password_history
     *
     * @param string[]|null $password_history password_history
     *
     * @return self
     */
    public function set_password_history($password_history)
    {
        if (is_null($password_history)) {
            throw new \InvalidArgumentException('non-nullable password_history cannot be null');
        }
        $this->container['password_history'] = $password_history;

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


