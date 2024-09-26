<?php
/**
 * GetApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId200ResponseHistoryInnerLastMessage
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  RocketChatOmnichannelApi
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

namespace RocketChatOmnichannelApi\Model;

use \ArrayAccess;
use \RocketChatOmnichannelApi\ObjectSerializer;

/**
 * GetApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId200ResponseHistoryInnerLastMessage Class Doc Comment
 *
 * @category Class
 * @package  RocketChatOmnichannelApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1LivechatVisitorsChatHistoryRoomRoomIdVisitorVisitorId200ResponseHistoryInnerLastMessage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_livechat_visitors_chatHistory_room_roomId_visitor_visitorId_200_response_history_inner_lastMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'rid' => 'string',
        'msg' => 'string',
        'token' => 'string',
        'alias' => 'string',
        'ts' => 'string',
        'u' => '\RocketChatOmnichannelApi\Model\GetApiV1LivechatRooms200ResponseRoomsInnerLastMessageU',
        'unread' => 'bool',
        '_updated_at' => 'string',
        'urls' => 'object[]',
        'mentions' => 'object[]',
        'channels' => 'object[]',
        'md' => '\RocketChatOmnichannelApi\Model\GetApiV1LivechatRoom200ResponseRoomLastMessageMdInner[]',
        'new_room' => 'bool',
        'show_connecting' => 'bool'
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
        'msg' => null,
        'token' => null,
        'alias' => null,
        'ts' => null,
        'u' => null,
        'unread' => null,
        '_updated_at' => null,
        'urls' => null,
        'mentions' => null,
        'channels' => null,
        'md' => null,
        'new_room' => null,
        'show_connecting' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
        'rid' => false,
        'msg' => false,
        'token' => false,
        'alias' => false,
        'ts' => false,
        'u' => false,
        'unread' => false,
        '_updated_at' => false,
        'urls' => false,
        'mentions' => false,
        'channels' => false,
        'md' => false,
        'new_room' => false,
        'show_connecting' => false
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
        'msg' => 'msg',
        'token' => 'token',
        'alias' => 'alias',
        'ts' => 'ts',
        'u' => 'u',
        'unread' => 'unread',
        '_updated_at' => '_updatedAt',
        'urls' => 'urls',
        'mentions' => 'mentions',
        'channels' => 'channels',
        'md' => 'md',
        'new_room' => 'newRoom',
        'show_connecting' => 'showConnecting'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'setId',
        'rid' => 'setRid',
        'msg' => 'setMsg',
        'token' => 'setToken',
        'alias' => 'setAlias',
        'ts' => 'setTs',
        'u' => 'setU',
        'unread' => 'setUnread',
        '_updated_at' => 'setUpdatedAt',
        'urls' => 'setUrls',
        'mentions' => 'setMentions',
        'channels' => 'setChannels',
        'md' => 'setMd',
        'new_room' => 'setNewRoom',
        'show_connecting' => 'setShowConnecting'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'getId',
        'rid' => 'getRid',
        'msg' => 'getMsg',
        'token' => 'getToken',
        'alias' => 'getAlias',
        'ts' => 'getTs',
        'u' => 'getU',
        'unread' => 'getUnread',
        '_updated_at' => 'getUpdatedAt',
        'urls' => 'getUrls',
        'mentions' => 'getMentions',
        'channels' => 'getChannels',
        'md' => 'getMd',
        'new_room' => 'getNewRoom',
        'show_connecting' => 'getShowConnecting'
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
        $this->setIfExists('msg', $data ?? [], null);
        $this->setIfExists('token', $data ?? [], null);
        $this->setIfExists('alias', $data ?? [], null);
        $this->setIfExists('ts', $data ?? [], null);
        $this->setIfExists('u', $data ?? [], null);
        $this->setIfExists('unread', $data ?? [], null);
        $this->setIfExists('_updated_at', $data ?? [], null);
        $this->setIfExists('urls', $data ?? [], null);
        $this->setIfExists('mentions', $data ?? [], null);
        $this->setIfExists('channels', $data ?? [], null);
        $this->setIfExists('md', $data ?? [], null);
        $this->setIfExists('new_room', $data ?? [], null);
        $this->setIfExists('show_connecting', $data ?? [], null);
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
     * Gets rid
     *
     * @return string|null
     */
    public function getRid()
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
    public function setRid($rid)
    {
        if (is_null($rid)) {
            throw new \InvalidArgumentException('non-nullable rid cannot be null');
        }
        $this->container['rid'] = $rid;

        return $this;
    }

    /**
     * Gets msg
     *
     * @return string|null
     */
    public function getMsg()
    {
        return $this->container['msg'];
    }

    /**
     * Sets msg
     *
     * @param string|null $msg msg
     *
     * @return self
     */
    public function setMsg($msg)
    {
        if (is_null($msg)) {
            throw new \InvalidArgumentException('non-nullable msg cannot be null');
        }
        $this->container['msg'] = $msg;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string|null
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string|null $token token
     *
     * @return self
     */
    public function setToken($token)
    {
        if (is_null($token)) {
            throw new \InvalidArgumentException('non-nullable token cannot be null');
        }
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets alias
     *
     * @return string|null
     */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
     * Sets alias
     *
     * @param string|null $alias alias
     *
     * @return self
     */
    public function setAlias($alias)
    {
        if (is_null($alias)) {
            throw new \InvalidArgumentException('non-nullable alias cannot be null');
        }
        $this->container['alias'] = $alias;

        return $this;
    }

    /**
     * Gets ts
     *
     * @return string|null
     */
    public function getTs()
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
    public function setTs($ts)
    {
        if (is_null($ts)) {
            throw new \InvalidArgumentException('non-nullable ts cannot be null');
        }
        $this->container['ts'] = $ts;

        return $this;
    }

    /**
     * Gets u
     *
     * @return \RocketChatOmnichannelApi\Model\GetApiV1LivechatRooms200ResponseRoomsInnerLastMessageU|null
     */
    public function getU()
    {
        return $this->container['u'];
    }

    /**
     * Sets u
     *
     * @param \RocketChatOmnichannelApi\Model\GetApiV1LivechatRooms200ResponseRoomsInnerLastMessageU|null $u u
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
     * Gets unread
     *
     * @return bool|null
     */
    public function getUnread()
    {
        return $this->container['unread'];
    }

    /**
     * Sets unread
     *
     * @param bool|null $unread unread
     *
     * @return self
     */
    public function setUnread($unread)
    {
        if (is_null($unread)) {
            throw new \InvalidArgumentException('non-nullable unread cannot be null');
        }
        $this->container['unread'] = $unread;

        return $this;
    }

    /**
     * Gets _updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt()
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
    public function setUpdatedAt($_updated_at)
    {
        if (is_null($_updated_at)) {
            throw new \InvalidArgumentException('non-nullable _updated_at cannot be null');
        }
        $this->container['_updated_at'] = $_updated_at;

        return $this;
    }

    /**
     * Gets urls
     *
     * @return object[]|null
     */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
     * Sets urls
     *
     * @param object[]|null $urls urls
     *
     * @return self
     */
    public function setUrls($urls)
    {
        if (is_null($urls)) {
            throw new \InvalidArgumentException('non-nullable urls cannot be null');
        }
        $this->container['urls'] = $urls;

        return $this;
    }

    /**
     * Gets mentions
     *
     * @return object[]|null
     */
    public function getMentions()
    {
        return $this->container['mentions'];
    }

    /**
     * Sets mentions
     *
     * @param object[]|null $mentions mentions
     *
     * @return self
     */
    public function setMentions($mentions)
    {
        if (is_null($mentions)) {
            throw new \InvalidArgumentException('non-nullable mentions cannot be null');
        }
        $this->container['mentions'] = $mentions;

        return $this;
    }

    /**
     * Gets channels
     *
     * @return object[]|null
     */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
     * Sets channels
     *
     * @param object[]|null $channels channels
     *
     * @return self
     */
    public function setChannels($channels)
    {
        if (is_null($channels)) {
            throw new \InvalidArgumentException('non-nullable channels cannot be null');
        }
        $this->container['channels'] = $channels;

        return $this;
    }

    /**
     * Gets md
     *
     * @return \RocketChatOmnichannelApi\Model\GetApiV1LivechatRoom200ResponseRoomLastMessageMdInner[]|null
     */
    public function getMd()
    {
        return $this->container['md'];
    }

    /**
     * Sets md
     *
     * @param \RocketChatOmnichannelApi\Model\GetApiV1LivechatRoom200ResponseRoomLastMessageMdInner[]|null $md md
     *
     * @return self
     */
    public function setMd($md)
    {
        if (is_null($md)) {
            throw new \InvalidArgumentException('non-nullable md cannot be null');
        }
        $this->container['md'] = $md;

        return $this;
    }

    /**
     * Gets new_room
     *
     * @return bool|null
     */
    public function getNewRoom()
    {
        return $this->container['new_room'];
    }

    /**
     * Sets new_room
     *
     * @param bool|null $new_room new_room
     *
     * @return self
     */
    public function setNewRoom($new_room)
    {
        if (is_null($new_room)) {
            throw new \InvalidArgumentException('non-nullable new_room cannot be null');
        }
        $this->container['new_room'] = $new_room;

        return $this;
    }

    /**
     * Gets show_connecting
     *
     * @return bool|null
     */
    public function getShowConnecting()
    {
        return $this->container['show_connecting'];
    }

    /**
     * Sets show_connecting
     *
     * @param bool|null $show_connecting show_connecting
     *
     * @return self
     */
    public function setShowConnecting($show_connecting)
    {
        if (is_null($show_connecting)) {
            throw new \InvalidArgumentException('non-nullable show_connecting cannot be null');
        }
        $this->container['show_connecting'] = $show_connecting;

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


