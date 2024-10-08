<?php
/**
 * GetApiV1LivechatInquiriesGetOne200ResponseInquiry
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\OmnichannelApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Omnichannel
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

namespace WebMI\RocketChatApiClient\OmnichannelApi\Model;

use \ArrayAccess;
use \WebMI\RocketChatApiClient\OmnichannelApi\ObjectSerializer;

/**
 * GetApiV1LivechatInquiriesGetOne200ResponseInquiry Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\OmnichannelApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1LivechatInquiriesGetOne200ResponseInquiry implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_livechat_inquiries_getOne_200_response_inquiry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'rid' => 'string',
        'name' => 'string',
        'ts' => 'string',
        'message' => 'string',
        'status' => 'string',
        'v' => '\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatInquiriesGetOne200ResponseInquiryV',
        't' => 'string',
        'priority_weight' => 'int',
        'estimated_waiting_time_queue' => 'int',
        'source' => '\WebMI\RocketChatApiClient\OmnichannelApi\Model\PutApiV1LivechatRoomVisitor200ResponseRoomSource',
        '_updated_at' => 'string',
        'last_message' => '\WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatInquiriesGetOne200ResponseInquiryLastMessage',
        'taken_at' => 'string'
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
        'rid' => null,
        'name' => null,
        'ts' => null,
        'message' => null,
        'status' => null,
        'v' => null,
        't' => null,
        'priority_weight' => null,
        'estimated_waiting_time_queue' => null,
        'source' => null,
        '_updated_at' => null,
        'last_message' => null,
        'taken_at' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
        'rid' => false,
        'name' => false,
        'ts' => false,
        'message' => false,
        'status' => false,
        'v' => false,
        't' => false,
        'priority_weight' => false,
        'estimated_waiting_time_queue' => false,
        'source' => false,
        '_updated_at' => false,
        'last_message' => false,
        'taken_at' => false
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
        'rid' => 'rid',
        'name' => 'name',
        'ts' => 'ts',
        'message' => 'message',
        'status' => 'status',
        'v' => 'v',
        't' => 't',
        'priority_weight' => 'priorityWeight',
        'estimated_waiting_time_queue' => 'estimatedWaitingTimeQueue',
        'source' => 'source',
        '_updated_at' => '_updatedAt',
        'last_message' => 'lastMessage',
        'taken_at' => 'takenAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'set__id',
        'rid' => 'set_rid',
        'name' => 'set_name',
        'ts' => 'set_ts',
        'message' => 'set_message',
        'status' => 'set_status',
        'v' => 'set_v',
        't' => 'set_t',
        'priority_weight' => 'set_priority_weight',
        'estimated_waiting_time_queue' => 'set_estimated_waiting_time_queue',
        'source' => 'set_source',
        '_updated_at' => 'set__updated_at',
        'last_message' => 'set_last_message',
        'taken_at' => 'set_taken_at'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'get__id',
        'rid' => 'get_rid',
        'name' => 'get_name',
        'ts' => 'get_ts',
        'message' => 'get_message',
        'status' => 'get_status',
        'v' => 'get_v',
        't' => 'get_t',
        'priority_weight' => 'get_priority_weight',
        'estimated_waiting_time_queue' => 'get_estimated_waiting_time_queue',
        'source' => 'get_source',
        '_updated_at' => 'get__updated_at',
        'last_message' => 'get_last_message',
        'taken_at' => 'get_taken_at'
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
        $this->setIfExists('rid', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('ts', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('v', $data ?? [], null);
        $this->setIfExists('t', $data ?? [], null);
        $this->setIfExists('priority_weight', $data ?? [], null);
        $this->setIfExists('estimated_waiting_time_queue', $data ?? [], null);
        $this->setIfExists('source', $data ?? [], null);
        $this->setIfExists('_updated_at', $data ?? [], null);
        $this->setIfExists('last_message', $data ?? [], null);
        $this->setIfExists('taken_at', $data ?? [], null);
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
     * Gets rid
     *
     * @return string|null
     */
    public function get_rid()
    {
        return $this->container['rid'];
    }

    /**
     * Sets rid
     *
     * @param string|null $rid rid
     *
     * @return self
     */
    public function set_rid($rid)
    {
        if (is_null($rid)) {
            throw new \InvalidArgumentException('non-nullable rid cannot be null');
        }
        $this->container['rid'] = $rid;

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
     * Gets message
     *
     * @return string|null
     */
    public function get_message()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message message
     *
     * @return self
     */
    public function set_message($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function get_status()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function set_status($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets v
     *
     * @return \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatInquiriesGetOne200ResponseInquiryV|null
     */
    public function get_v()
    {
        return $this->container['v'];
    }

    /**
     * Sets v
     *
     * @param \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatInquiriesGetOne200ResponseInquiryV|null $v v
     *
     * @return self
     */
    public function set_v($v)
    {
        if (is_null($v)) {
            throw new \InvalidArgumentException('non-nullable v cannot be null');
        }
        $this->container['v'] = $v;

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
     * Gets priority_weight
     *
     * @return int|null
     */
    public function get_priority_weight()
    {
        return $this->container['priority_weight'];
    }

    /**
     * Sets priority_weight
     *
     * @param int|null $priority_weight priority_weight
     *
     * @return self
     */
    public function set_priority_weight($priority_weight)
    {
        if (is_null($priority_weight)) {
            throw new \InvalidArgumentException('non-nullable priority_weight cannot be null');
        }
        $this->container['priority_weight'] = $priority_weight;

        return $this;
    }

    /**
     * Gets estimated_waiting_time_queue
     *
     * @return int|null
     */
    public function get_estimated_waiting_time_queue()
    {
        return $this->container['estimated_waiting_time_queue'];
    }

    /**
     * Sets estimated_waiting_time_queue
     *
     * @param int|null $estimated_waiting_time_queue estimated_waiting_time_queue
     *
     * @return self
     */
    public function set_estimated_waiting_time_queue($estimated_waiting_time_queue)
    {
        if (is_null($estimated_waiting_time_queue)) {
            throw new \InvalidArgumentException('non-nullable estimated_waiting_time_queue cannot be null');
        }
        $this->container['estimated_waiting_time_queue'] = $estimated_waiting_time_queue;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \WebMI\RocketChatApiClient\OmnichannelApi\Model\PutApiV1LivechatRoomVisitor200ResponseRoomSource|null
     */
    public function get_source()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \WebMI\RocketChatApiClient\OmnichannelApi\Model\PutApiV1LivechatRoomVisitor200ResponseRoomSource|null $source source
     *
     * @return self
     */
    public function set_source($source)
    {
        if (is_null($source)) {
            throw new \InvalidArgumentException('non-nullable source cannot be null');
        }
        $this->container['source'] = $source;

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
     * Gets last_message
     *
     * @return \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatInquiriesGetOne200ResponseInquiryLastMessage|null
     */
    public function get_last_message()
    {
        return $this->container['last_message'];
    }

    /**
     * Sets last_message
     *
     * @param \WebMI\RocketChatApiClient\OmnichannelApi\Model\GetApiV1LivechatInquiriesGetOne200ResponseInquiryLastMessage|null $last_message last_message
     *
     * @return self
     */
    public function set_last_message($last_message)
    {
        if (is_null($last_message)) {
            throw new \InvalidArgumentException('non-nullable last_message cannot be null');
        }
        $this->container['last_message'] = $last_message;

        return $this;
    }

    /**
     * Gets taken_at
     *
     * @return string|null
     */
    public function get_taken_at()
    {
        return $this->container['taken_at'];
    }

    /**
     * Sets taken_at
     *
     * @param string|null $taken_at taken_at
     *
     * @return self
     */
    public function set_taken_at($taken_at)
    {
        if (is_null($taken_at)) {
            throw new \InvalidArgumentException('non-nullable taken_at cannot be null');
        }
        $this->container['taken_at'] = $taken_at;

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


