<?php
/**
 * GetApiV1LivechatCustomFields200ResponseCustomFieldsInner
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
 * GetApiV1LivechatCustomFields200ResponseCustomFieldsInner Class Doc Comment
 *
 * @category Class
 * @package  WebMI\RocketChatApiClient\OmnichannelApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1LivechatCustomFields200ResponseCustomFieldsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_livechat_custom_fields_200_response_customFields_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_id' => 'string',
        'label' => 'string',
        'scope' => 'string',
        'visibility' => 'string',
        'regexp' => 'string',
        'searchable' => 'bool',
        'type' => 'string',
        'required' => 'bool',
        'default_value' => 'string',
        'options' => 'string',
        'public' => 'bool',
        '_updated_at' => 'string',
        'id' => 'string'
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
        'label' => null,
        'scope' => null,
        'visibility' => null,
        'regexp' => null,
        'searchable' => null,
        'type' => null,
        'required' => null,
        'default_value' => null,
        'options' => null,
        'public' => null,
        '_updated_at' => null,
        'id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        '_id' => false,
        'label' => false,
        'scope' => false,
        'visibility' => false,
        'regexp' => false,
        'searchable' => false,
        'type' => false,
        'required' => false,
        'default_value' => false,
        'options' => false,
        'public' => false,
        '_updated_at' => false,
        'id' => false
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
        'label' => 'label',
        'scope' => 'scope',
        'visibility' => 'visibility',
        'regexp' => 'regexp',
        'searchable' => 'searchable',
        'type' => 'type',
        'required' => 'required',
        'default_value' => 'defaultValue',
        'options' => 'options',
        'public' => 'public',
        '_updated_at' => '_updatedAt',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_id' => 'set__id',
        'label' => 'set_label',
        'scope' => 'set_scope',
        'visibility' => 'set_visibility',
        'regexp' => 'set_regexp',
        'searchable' => 'set_searchable',
        'type' => 'set_type',
        'required' => 'set_required',
        'default_value' => 'set_default_value',
        'options' => 'set_options',
        'public' => 'set_public',
        '_updated_at' => 'set__updated_at',
        'id' => 'set_id'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_id' => 'get__id',
        'label' => 'get_label',
        'scope' => 'get_scope',
        'visibility' => 'get_visibility',
        'regexp' => 'get_regexp',
        'searchable' => 'get_searchable',
        'type' => 'get_type',
        'required' => 'get_required',
        'default_value' => 'get_default_value',
        'options' => 'get_options',
        'public' => 'get_public',
        '_updated_at' => 'get__updated_at',
        'id' => 'get_id'
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
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('scope', $data ?? [], null);
        $this->setIfExists('visibility', $data ?? [], null);
        $this->setIfExists('regexp', $data ?? [], null);
        $this->setIfExists('searchable', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('required', $data ?? [], null);
        $this->setIfExists('default_value', $data ?? [], null);
        $this->setIfExists('options', $data ?? [], null);
        $this->setIfExists('public', $data ?? [], null);
        $this->setIfExists('_updated_at', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
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
     * Gets label
     *
     * @return string|null
     */
    public function get_label()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label label
     *
     * @return self
     */
    public function set_label($label)
    {
        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string|null
     */
    public function get_scope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string|null $scope scope
     *
     * @return self
     */
    public function set_scope($scope)
    {
        if (is_null($scope)) {
            throw new \InvalidArgumentException('non-nullable scope cannot be null');
        }
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets visibility
     *
     * @return string|null
     */
    public function get_visibility()
    {
        return $this->container['visibility'];
    }

    /**
     * Sets visibility
     *
     * @param string|null $visibility visibility
     *
     * @return self
     */
    public function set_visibility($visibility)
    {
        if (is_null($visibility)) {
            throw new \InvalidArgumentException('non-nullable visibility cannot be null');
        }
        $this->container['visibility'] = $visibility;

        return $this;
    }

    /**
     * Gets regexp
     *
     * @return string|null
     */
    public function get_regexp()
    {
        return $this->container['regexp'];
    }

    /**
     * Sets regexp
     *
     * @param string|null $regexp regexp
     *
     * @return self
     */
    public function set_regexp($regexp)
    {
        if (is_null($regexp)) {
            throw new \InvalidArgumentException('non-nullable regexp cannot be null');
        }
        $this->container['regexp'] = $regexp;

        return $this;
    }

    /**
     * Gets searchable
     *
     * @return bool|null
     */
    public function get_searchable()
    {
        return $this->container['searchable'];
    }

    /**
     * Sets searchable
     *
     * @param bool|null $searchable searchable
     *
     * @return self
     */
    public function set_searchable($searchable)
    {
        if (is_null($searchable)) {
            throw new \InvalidArgumentException('non-nullable searchable cannot be null');
        }
        $this->container['searchable'] = $searchable;

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
     * Gets required
     *
     * @return bool|null
     */
    public function get_required()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool|null $required required
     *
     * @return self
     */
    public function set_required($required)
    {
        if (is_null($required)) {
            throw new \InvalidArgumentException('non-nullable required cannot be null');
        }
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets default_value
     *
     * @return string|null
     */
    public function get_default_value()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param string|null $default_value default_value
     *
     * @return self
     */
    public function set_default_value($default_value)
    {
        if (is_null($default_value)) {
            throw new \InvalidArgumentException('non-nullable default_value cannot be null');
        }
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets options
     *
     * @return string|null
     */
    public function get_options()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param string|null $options options
     *
     * @return self
     */
    public function set_options($options)
    {
        if (is_null($options)) {
            throw new \InvalidArgumentException('non-nullable options cannot be null');
        }
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets public
     *
     * @return bool|null
     */
    public function get_public()
    {
        return $this->container['public'];
    }

    /**
     * Sets public
     *
     * @param bool|null $public public
     *
     * @return self
     */
    public function set_public($public)
    {
        if (is_null($public)) {
            throw new \InvalidArgumentException('non-nullable public cannot be null');
        }
        $this->container['public'] = $public;

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
     * Gets id
     *
     * @return string|null
     */
    public function get_id()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function set_id($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

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


