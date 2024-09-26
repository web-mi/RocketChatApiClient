<?php
/**
 * PostApiV1ChatPostMessageRequestAttachmentsInner
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  RocketChatMessagingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Messaging
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

namespace RocketChatMessagingApi\Model;

use \ArrayAccess;
use \RocketChatMessagingApi\ObjectSerializer;

/**
 * PostApiV1ChatPostMessageRequestAttachmentsInner Class Doc Comment
 *
 * @category Class
 * @package  RocketChatMessagingApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PostApiV1ChatPostMessageRequestAttachmentsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'post_api_v1_chat_postMessage_request_attachments_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'audio_url' => 'string',
        'author_icon' => 'string',
        'author_link' => 'string',
        'author_name' => 'string',
        'collapsed' => 'bool',
        'color' => 'string',
        'fields' => '\RocketChatMessagingApi\Model\PostApiV1ChatPostMessageRequestAttachmentsInnerFieldsInner[]',
        'image_url' => 'string',
        'message_link' => 'string',
        'text' => 'string',
        'thumb_url' => 'string',
        'title' => 'string',
        'title_link' => 'string',
        'title_link_download' => 'bool',
        'ts' => 'string',
        'video_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'audio_url' => null,
        'author_icon' => null,
        'author_link' => null,
        'author_name' => null,
        'collapsed' => null,
        'color' => null,
        'fields' => null,
        'image_url' => null,
        'message_link' => null,
        'text' => null,
        'thumb_url' => null,
        'title' => null,
        'title_link' => null,
        'title_link_download' => null,
        'ts' => null,
        'video_url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'audio_url' => false,
        'author_icon' => false,
        'author_link' => false,
        'author_name' => false,
        'collapsed' => false,
        'color' => false,
        'fields' => false,
        'image_url' => false,
        'message_link' => false,
        'text' => false,
        'thumb_url' => false,
        'title' => false,
        'title_link' => false,
        'title_link_download' => false,
        'ts' => false,
        'video_url' => false
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
        'audio_url' => 'audio_url',
        'author_icon' => 'author_icon',
        'author_link' => 'author_link',
        'author_name' => 'author_name',
        'collapsed' => 'collapsed',
        'color' => 'color',
        'fields' => 'fields',
        'image_url' => 'image_url',
        'message_link' => 'message_link',
        'text' => 'text',
        'thumb_url' => 'thumb_url',
        'title' => 'title',
        'title_link' => 'title_link',
        'title_link_download' => 'title_link_download',
        'ts' => 'ts',
        'video_url' => 'video_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'audio_url' => 'setAudioUrl',
        'author_icon' => 'setAuthorIcon',
        'author_link' => 'setAuthorLink',
        'author_name' => 'setAuthorName',
        'collapsed' => 'setCollapsed',
        'color' => 'setColor',
        'fields' => 'setFields',
        'image_url' => 'setImageUrl',
        'message_link' => 'setMessageLink',
        'text' => 'setText',
        'thumb_url' => 'setThumbUrl',
        'title' => 'setTitle',
        'title_link' => 'setTitleLink',
        'title_link_download' => 'setTitleLinkDownload',
        'ts' => 'setTs',
        'video_url' => 'setVideoUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'audio_url' => 'getAudioUrl',
        'author_icon' => 'getAuthorIcon',
        'author_link' => 'getAuthorLink',
        'author_name' => 'getAuthorName',
        'collapsed' => 'getCollapsed',
        'color' => 'getColor',
        'fields' => 'getFields',
        'image_url' => 'getImageUrl',
        'message_link' => 'getMessageLink',
        'text' => 'getText',
        'thumb_url' => 'getThumbUrl',
        'title' => 'getTitle',
        'title_link' => 'getTitleLink',
        'title_link_download' => 'getTitleLinkDownload',
        'ts' => 'getTs',
        'video_url' => 'getVideoUrl'
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
        $this->setIfExists('audio_url', $data ?? [], null);
        $this->setIfExists('author_icon', $data ?? [], null);
        $this->setIfExists('author_link', $data ?? [], null);
        $this->setIfExists('author_name', $data ?? [], null);
        $this->setIfExists('collapsed', $data ?? [], null);
        $this->setIfExists('color', $data ?? [], null);
        $this->setIfExists('fields', $data ?? [], null);
        $this->setIfExists('image_url', $data ?? [], null);
        $this->setIfExists('message_link', $data ?? [], null);
        $this->setIfExists('text', $data ?? [], null);
        $this->setIfExists('thumb_url', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('title_link', $data ?? [], null);
        $this->setIfExists('title_link_download', $data ?? [], null);
        $this->setIfExists('ts', $data ?? [], null);
        $this->setIfExists('video_url', $data ?? [], null);
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
     * Gets audio_url
     *
     * @return string|null
     */
    public function getAudioUrl()
    {
        return $this->container['audio_url'];
    }

    /**
     * Sets audio_url
     *
     * @param string|null $audio_url Audio file to attach. See the <a href='https://developer.mozilla.org/en-US/docs/Web/HTML/Element/audio'>HTML audio element</a> for information.
     *
     * @return self
     */
    public function setAudioUrl($audio_url)
    {
        if (is_null($audio_url)) {
            throw new \InvalidArgumentException('non-nullable audio_url cannot be null');
        }
        $this->container['audio_url'] = $audio_url;

        return $this;
    }

    /**
     * Gets author_icon
     *
     * @return string|null
     */
    public function getAuthorIcon()
    {
        return $this->container['author_icon'];
    }

    /**
     * Sets author_icon
     *
     * @param string|null $author_icon Displays a tiny icon to the left of the author's name.
     *
     * @return self
     */
    public function setAuthorIcon($author_icon)
    {
        if (is_null($author_icon)) {
            throw new \InvalidArgumentException('non-nullable author_icon cannot be null');
        }
        $this->container['author_icon'] = $author_icon;

        return $this;
    }

    /**
     * Gets author_link
     *
     * @return string|null
     */
    public function getAuthorLink()
    {
        return $this->container['author_link'];
    }

    /**
     * Sets author_link
     *
     * @param string|null $author_link Providing this makes the author's name clickable and points to the provided link.
     *
     * @return self
     */
    public function setAuthorLink($author_link)
    {
        if (is_null($author_link)) {
            throw new \InvalidArgumentException('non-nullable author_link cannot be null');
        }
        $this->container['author_link'] = $author_link;

        return $this;
    }

    /**
     * Gets author_name
     *
     * @return string|null
     */
    public function getAuthorName()
    {
        return $this->container['author_name'];
    }

    /**
     * Sets author_name
     *
     * @param string|null $author_name Name of the author.
     *
     * @return self
     */
    public function setAuthorName($author_name)
    {
        if (is_null($author_name)) {
            throw new \InvalidArgumentException('non-nullable author_name cannot be null');
        }
        $this->container['author_name'] = $author_name;

        return $this;
    }

    /**
     * Gets collapsed
     *
     * @return bool|null
     */
    public function getCollapsed()
    {
        return $this->container['collapsed'];
    }

    /**
     * Sets collapsed
     *
     * @param bool|null $collapsed Causes the image, audio, and video sections to be displayed as collapsed when set to true.
     *
     * @return self
     */
    public function setCollapsed($collapsed)
    {
        if (is_null($collapsed)) {
            throw new \InvalidArgumentException('non-nullable collapsed cannot be null');
        }
        $this->container['collapsed'] = $collapsed;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string|null $color See <a href='https://developer.mozilla.org/en-US/docs/Web/CSS/background-color'>background-css</a> for the supported colors.'
     *
     * @return self
     */
    public function setColor($color)
    {
        if (is_null($color)) {
            throw new \InvalidArgumentException('non-nullable color cannot be null');
        }
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \RocketChatMessagingApi\Model\PostApiV1ChatPostMessageRequestAttachmentsInnerFieldsInner[]|null
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \RocketChatMessagingApi\Model\PostApiV1ChatPostMessageRequestAttachmentsInnerFieldsInner[]|null $fields fields
     *
     * @return self
     */
    public function setFields($fields)
    {
        if (is_null($fields)) {
            throw new \InvalidArgumentException('non-nullable fields cannot be null');
        }
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string|null $image_url The image to display, will be big and easy to see.
     *
     * @return self
     */
    public function setImageUrl($image_url)
    {
        if (is_null($image_url)) {
            throw new \InvalidArgumentException('non-nullable image_url cannot be null');
        }
        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets message_link
     *
     * @return string|null
     */
    public function getMessageLink()
    {
        return $this->container['message_link'];
    }

    /**
     * Sets message_link
     *
     * @param string|null $message_link Only applicable if the `ts` field is provided, as it makes the time clickable to this link.
     *
     * @return self
     */
    public function setMessageLink($message_link)
    {
        if (is_null($message_link)) {
            throw new \InvalidArgumentException('non-nullable message_link cannot be null');
        }
        $this->container['message_link'] = $message_link;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text The text to display for this attachment, it is different than the message's text.
     *
     * @return self
     */
    public function setText($text)
    {
        if (is_null($text)) {
            throw new \InvalidArgumentException('non-nullable text cannot be null');
        }
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets thumb_url
     *
     * @return string|null
     */
    public function getThumbUrl()
    {
        return $this->container['thumb_url'];
    }

    /**
     * Sets thumb_url
     *
     * @param string|null $thumb_url An image that displays to the left of the text, looks better when this is relatively small.
     *
     * @return self
     */
    public function setThumbUrl($thumb_url)
    {
        if (is_null($thumb_url)) {
            throw new \InvalidArgumentException('non-nullable thumb_url cannot be null');
        }
        $this->container['thumb_url'] = $thumb_url;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Title to display for this attachment, displays under the author.
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets title_link
     *
     * @return string|null
     */
    public function getTitleLink()
    {
        return $this->container['title_link'];
    }

    /**
     * Sets title_link
     *
     * @param string|null $title_link Providing this makes the title clickable, pointing to this link.
     *
     * @return self
     */
    public function setTitleLink($title_link)
    {
        if (is_null($title_link)) {
            throw new \InvalidArgumentException('non-nullable title_link cannot be null');
        }
        $this->container['title_link'] = $title_link;

        return $this;
    }

    /**
     * Gets title_link_download
     *
     * @return bool|null
     */
    public function getTitleLinkDownload()
    {
        return $this->container['title_link_download'];
    }

    /**
     * Sets title_link_download
     *
     * @param bool|null $title_link_download When this is true, a download icon appears and clicking this saves the link to file.
     *
     * @return self
     */
    public function setTitleLinkDownload($title_link_download)
    {
        if (is_null($title_link_download)) {
            throw new \InvalidArgumentException('non-nullable title_link_download cannot be null');
        }
        $this->container['title_link_download'] = $title_link_download;

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
     * @param string|null $ts Displays the time next to the text portion.
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
     * Gets video_url
     *
     * @return string|null
     */
    public function getVideoUrl()
    {
        return $this->container['video_url'];
    }

    /**
     * Sets video_url
     *
     * @param string|null $video_url Video file to attach. See the <a href='https://developer.mozilla.org/en-US/docs/Web/HTML/Element/video'>HTML video element</a> for information.
     *
     * @return self
     */
    public function setVideoUrl($video_url)
    {
        if (is_null($video_url)) {
            throw new \InvalidArgumentException('non-nullable video_url cannot be null');
        }
        $this->container['video_url'] = $video_url;

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


