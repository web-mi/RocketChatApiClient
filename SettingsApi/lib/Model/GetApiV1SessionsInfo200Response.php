<?php
/**
 * GetApiV1SessionsInfo200Response
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\SettingsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Settings
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

namespace WebMI\RocketChatApiClient\SettingsApi\Model;

use \ArrayAccess;
use \WebMI\RocketChatApiClient\SettingsApi\ObjectSerializer;

/**
 * GetApiV1SessionsInfo200Response Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\SettingsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1SessionsInfo200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_sessions_info_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'type' => 'string',
        'session_id' => 'string',
        'instance_id' => 'string',
        'login_token' => 'string',
        'ip' => 'string',
        'host' => 'string',
        'device' => '\WebMI\RocketChatApiClient\SettingsApi\Model\GetApiV1SessionsList200ResponseSessionsInnerDevice',
        'user_id' => 'string',
        'roles' => 'string[]',
        'most_important_role' => 'string',
        'login_at' => 'string',
        'day' => 'int',
        'month' => 'int',
        'year' => 'int',
        'search_term' => 'string',
        'created_at' => 'string',
        '_updated_at' => 'string',
        'closed_at' => 'string',
        'last_activity_at' => 'string',
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
        'type' => null,
        'session_id' => null,
        'instance_id' => null,
        'login_token' => null,
        'ip' => null,
        'host' => null,
        'device' => null,
        'user_id' => null,
        'roles' => null,
        'most_important_role' => null,
        'login_at' => null,
        'day' => null,
        'month' => null,
        'year' => null,
        'search_term' => null,
        'created_at' => null,
        '_updated_at' => null,
        'closed_at' => null,
        'last_activity_at' => null,
        'success' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
        'type' => false,
        'session_id' => false,
        'instance_id' => false,
        'login_token' => false,
        'ip' => false,
        'host' => false,
        'device' => false,
        'user_id' => false,
        'roles' => false,
        'most_important_role' => false,
        'login_at' => false,
        'day' => false,
        'month' => false,
        'year' => false,
        'search_term' => false,
        'created_at' => false,
        '_updated_at' => false,
        'closed_at' => false,
        'last_activity_at' => false,
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
        'type' => 'type',
        'session_id' => 'sessionId',
        'instance_id' => 'instanceId',
        'login_token' => 'loginToken',
        'ip' => 'ip',
        'host' => 'host',
        'device' => 'device',
        'user_id' => 'userId',
        'roles' => 'roles',
        'most_important_role' => 'mostImportantRole',
        'login_at' => 'loginAt',
        'day' => 'day',
        'month' => 'month',
        'year' => 'year',
        'search_term' => 'searchTerm',
        'created_at' => 'createdAt',
        '_updated_at' => '_updatedAt',
        'closed_at' => 'closedAt',
        'last_activity_at' => 'lastActivityAt',
        'success' => 'success'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'set__id',
        'type' => 'set_type',
        'session_id' => 'set_session_id',
        'instance_id' => 'set_instance_id',
        'login_token' => 'set_login_token',
        'ip' => 'set_ip',
        'host' => 'set_host',
        'device' => 'set_device',
        'user_id' => 'set_user_id',
        'roles' => 'set_roles',
        'most_important_role' => 'set_most_important_role',
        'login_at' => 'set_login_at',
        'day' => 'set_day',
        'month' => 'set_month',
        'year' => 'set_year',
        'search_term' => 'set_search_term',
        'created_at' => 'set_created_at',
        '_updated_at' => 'set__updated_at',
        'closed_at' => 'set_closed_at',
        'last_activity_at' => 'set_last_activity_at',
        'success' => 'set_success'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'get__id',
        'type' => 'get_type',
        'session_id' => 'get_session_id',
        'instance_id' => 'get_instance_id',
        'login_token' => 'get_login_token',
        'ip' => 'get_ip',
        'host' => 'get_host',
        'device' => 'get_device',
        'user_id' => 'get_user_id',
        'roles' => 'get_roles',
        'most_important_role' => 'get_most_important_role',
        'login_at' => 'get_login_at',
        'day' => 'get_day',
        'month' => 'get_month',
        'year' => 'get_year',
        'search_term' => 'get_search_term',
        'created_at' => 'get_created_at',
        '_updated_at' => 'get__updated_at',
        'closed_at' => 'get_closed_at',
        'last_activity_at' => 'get_last_activity_at',
        'success' => 'get_success'
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('session_id', $data ?? [], null);
        $this->setIfExists('instance_id', $data ?? [], null);
        $this->setIfExists('login_token', $data ?? [], null);
        $this->setIfExists('ip', $data ?? [], null);
        $this->setIfExists('host', $data ?? [], null);
        $this->setIfExists('device', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('roles', $data ?? [], null);
        $this->setIfExists('most_important_role', $data ?? [], null);
        $this->setIfExists('login_at', $data ?? [], null);
        $this->setIfExists('day', $data ?? [], null);
        $this->setIfExists('month', $data ?? [], null);
        $this->setIfExists('year', $data ?? [], null);
        $this->setIfExists('search_term', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('_updated_at', $data ?? [], null);
        $this->setIfExists('closed_at', $data ?? [], null);
        $this->setIfExists('last_activity_at', $data ?? [], null);
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
     * Gets type
     *
     * @return string|null
     */
    public function get_type()
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
    public function set_type($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets session_id
     *
     * @return string|null
     */
    public function get_session_id()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     *
     * @param string|null $session_id session_id
     *
     * @return self
     */
    public function set_session_id($session_id)
    {
        if (is_null($session_id)) {
            throw new \InvalidArgumentException('non-nullable session_id cannot be null');
        }
        $this->container['session_id'] = $session_id;

        return $this;
    }

    /**
     * Gets instance_id
     *
     * @return string|null
     */
    public function get_instance_id()
    {
        return $this->container['instance_id'];
    }

    /**
     * Sets instance_id
     *
     * @param string|null $instance_id instance_id
     *
     * @return self
     */
    public function set_instance_id($instance_id)
    {
        if (is_null($instance_id)) {
            throw new \InvalidArgumentException('non-nullable instance_id cannot be null');
        }
        $this->container['instance_id'] = $instance_id;

        return $this;
    }

    /**
     * Gets login_token
     *
     * @return string|null
     */
    public function get_login_token()
    {
        return $this->container['login_token'];
    }

    /**
     * Sets login_token
     *
     * @param string|null $login_token login_token
     *
     * @return self
     */
    public function set_login_token($login_token)
    {
        if (is_null($login_token)) {
            throw new \InvalidArgumentException('non-nullable login_token cannot be null');
        }
        $this->container['login_token'] = $login_token;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string|null
     */
    public function get_ip()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string|null $ip ip
     *
     * @return self
     */
    public function set_ip($ip)
    {
        if (is_null($ip)) {
            throw new \InvalidArgumentException('non-nullable ip cannot be null');
        }
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets host
     *
     * @return string|null
     */
    public function get_host()
    {
        return $this->container['host'];
    }

    /**
     * Sets host
     *
     * @param string|null $host host
     *
     * @return self
     */
    public function set_host($host)
    {
        if (is_null($host)) {
            throw new \InvalidArgumentException('non-nullable host cannot be null');
        }
        $this->container['host'] = $host;

        return $this;
    }

    /**
     * Gets device
     *
     * @return \WebMI\RocketChatApiClient\SettingsApi\Model\GetApiV1SessionsList200ResponseSessionsInnerDevice|null
     */
    public function get_device()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param \WebMI\RocketChatApiClient\SettingsApi\Model\GetApiV1SessionsList200ResponseSessionsInnerDevice|null $device device
     *
     * @return self
     */
    public function set_device($device)
    {
        if (is_null($device)) {
            throw new \InvalidArgumentException('non-nullable device cannot be null');
        }
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string|null
     */
    public function get_user_id()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string|null $user_id user_id
     *
     * @return self
     */
    public function set_user_id($user_id)
    {
        if (is_null($user_id)) {
            throw new \InvalidArgumentException('non-nullable user_id cannot be null');
        }
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return string[]|null
     */
    public function get_roles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param string[]|null $roles roles
     *
     * @return self
     */
    public function set_roles($roles)
    {
        if (is_null($roles)) {
            throw new \InvalidArgumentException('non-nullable roles cannot be null');
        }
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets most_important_role
     *
     * @return string|null
     */
    public function get_most_important_role()
    {
        return $this->container['most_important_role'];
    }

    /**
     * Sets most_important_role
     *
     * @param string|null $most_important_role most_important_role
     *
     * @return self
     */
    public function set_most_important_role($most_important_role)
    {
        if (is_null($most_important_role)) {
            throw new \InvalidArgumentException('non-nullable most_important_role cannot be null');
        }
        $this->container['most_important_role'] = $most_important_role;

        return $this;
    }

    /**
     * Gets login_at
     *
     * @return string|null
     */
    public function get_login_at()
    {
        return $this->container['login_at'];
    }

    /**
     * Sets login_at
     *
     * @param string|null $login_at login_at
     *
     * @return self
     */
    public function set_login_at($login_at)
    {
        if (is_null($login_at)) {
            throw new \InvalidArgumentException('non-nullable login_at cannot be null');
        }
        $this->container['login_at'] = $login_at;

        return $this;
    }

    /**
     * Gets day
     *
     * @return int|null
     */
    public function get_day()
    {
        return $this->container['day'];
    }

    /**
     * Sets day
     *
     * @param int|null $day day
     *
     * @return self
     */
    public function set_day($day)
    {
        if (is_null($day)) {
            throw new \InvalidArgumentException('non-nullable day cannot be null');
        }
        $this->container['day'] = $day;

        return $this;
    }

    /**
     * Gets month
     *
     * @return int|null
     */
    public function get_month()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param int|null $month month
     *
     * @return self
     */
    public function set_month($month)
    {
        if (is_null($month)) {
            throw new \InvalidArgumentException('non-nullable month cannot be null');
        }
        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets year
     *
     * @return int|null
     */
    public function get_year()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param int|null $year year
     *
     * @return self
     */
    public function set_year($year)
    {
        if (is_null($year)) {
            throw new \InvalidArgumentException('non-nullable year cannot be null');
        }
        $this->container['year'] = $year;

        return $this;
    }

    /**
     * Gets search_term
     *
     * @return string|null
     */
    public function get_search_term()
    {
        return $this->container['search_term'];
    }

    /**
     * Sets search_term
     *
     * @param string|null $search_term search_term
     *
     * @return self
     */
    public function set_search_term($search_term)
    {
        if (is_null($search_term)) {
            throw new \InvalidArgumentException('non-nullable search_term cannot be null');
        }
        $this->container['search_term'] = $search_term;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function get_created_at()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at created_at
     *
     * @return self
     */
    public function set_created_at($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

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
     * Gets closed_at
     *
     * @return string|null
     */
    public function get_closed_at()
    {
        return $this->container['closed_at'];
    }

    /**
     * Sets closed_at
     *
     * @param string|null $closed_at closed_at
     *
     * @return self
     */
    public function set_closed_at($closed_at)
    {
        if (is_null($closed_at)) {
            throw new \InvalidArgumentException('non-nullable closed_at cannot be null');
        }
        $this->container['closed_at'] = $closed_at;

        return $this;
    }

    /**
     * Gets last_activity_at
     *
     * @return string|null
     */
    public function get_last_activity_at()
    {
        return $this->container['last_activity_at'];
    }

    /**
     * Sets last_activity_at
     *
     * @param string|null $last_activity_at last_activity_at
     *
     * @return self
     */
    public function set_last_activity_at($last_activity_at)
    {
        if (is_null($last_activity_at)) {
            throw new \InvalidArgumentException('non-nullable last_activity_at cannot be null');
        }
        $this->container['last_activity_at'] = $last_activity_at;

        return $this;
    }

    /**
     * Gets success
     *
     * @return bool|null
     */
    public function get_success()
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
    public function set_success($success)
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


