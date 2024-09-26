<?php
/**
 * GetApiV1Statistics200ResponseServicesOauth
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
 * GetApiV1Statistics200ResponseServicesOauth Class Doc Comment
 *
 * @category Class
 * @package  RocketChatStatisticsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetApiV1Statistics200ResponseServicesOauth implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_api_v1_statistics_200_response_services_oauth';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'apple' => '\RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple',
        'dolphin' => '\RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple',
        'drupal' => '\RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple',
        'facebook' => '\RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple',
        'github' => '\RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple',
        'github_enterprise' => '\RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple',
        'gitlab' => '\RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple',
        'google' => '\RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple',
        'linkedin' => '\RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple',
        'meteor' => '\RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple',
        'nextcloud' => '\RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple',
        'tokenpass' => '\RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple',
        'twitter' => '\RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple',
        'wordpress' => '\RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple',
        'custom' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'apple' => null,
        'dolphin' => null,
        'drupal' => null,
        'facebook' => null,
        'github' => null,
        'github_enterprise' => null,
        'gitlab' => null,
        'google' => null,
        'linkedin' => null,
        'meteor' => null,
        'nextcloud' => null,
        'tokenpass' => null,
        'twitter' => null,
        'wordpress' => null,
        'custom' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'apple' => false,
        'dolphin' => false,
        'drupal' => false,
        'facebook' => false,
        'github' => false,
        'github_enterprise' => false,
        'gitlab' => false,
        'google' => false,
        'linkedin' => false,
        'meteor' => false,
        'nextcloud' => false,
        'tokenpass' => false,
        'twitter' => false,
        'wordpress' => false,
        'custom' => false
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
        'apple' => 'apple',
        'dolphin' => 'dolphin',
        'drupal' => 'drupal',
        'facebook' => 'facebook',
        'github' => 'github',
        'github_enterprise' => 'githubEnterprise',
        'gitlab' => 'gitlab',
        'google' => 'google',
        'linkedin' => 'linkedin',
        'meteor' => 'meteor',
        'nextcloud' => 'nextcloud',
        'tokenpass' => 'tokenpass',
        'twitter' => 'twitter',
        'wordpress' => 'wordpress',
        'custom' => 'custom'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'apple' => 'setApple',
        'dolphin' => 'setDolphin',
        'drupal' => 'setDrupal',
        'facebook' => 'setFacebook',
        'github' => 'setGithub',
        'github_enterprise' => 'setGithubEnterprise',
        'gitlab' => 'setGitlab',
        'google' => 'setGoogle',
        'linkedin' => 'setLinkedin',
        'meteor' => 'setMeteor',
        'nextcloud' => 'setNextcloud',
        'tokenpass' => 'setTokenpass',
        'twitter' => 'setTwitter',
        'wordpress' => 'setWordpress',
        'custom' => 'setCustom'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'apple' => 'getApple',
        'dolphin' => 'getDolphin',
        'drupal' => 'getDrupal',
        'facebook' => 'getFacebook',
        'github' => 'getGithub',
        'github_enterprise' => 'getGithubEnterprise',
        'gitlab' => 'getGitlab',
        'google' => 'getGoogle',
        'linkedin' => 'getLinkedin',
        'meteor' => 'getMeteor',
        'nextcloud' => 'getNextcloud',
        'tokenpass' => 'getTokenpass',
        'twitter' => 'getTwitter',
        'wordpress' => 'getWordpress',
        'custom' => 'getCustom'
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
        $this->setIfExists('apple', $data ?? [], null);
        $this->setIfExists('dolphin', $data ?? [], null);
        $this->setIfExists('drupal', $data ?? [], null);
        $this->setIfExists('facebook', $data ?? [], null);
        $this->setIfExists('github', $data ?? [], null);
        $this->setIfExists('github_enterprise', $data ?? [], null);
        $this->setIfExists('gitlab', $data ?? [], null);
        $this->setIfExists('google', $data ?? [], null);
        $this->setIfExists('linkedin', $data ?? [], null);
        $this->setIfExists('meteor', $data ?? [], null);
        $this->setIfExists('nextcloud', $data ?? [], null);
        $this->setIfExists('tokenpass', $data ?? [], null);
        $this->setIfExists('twitter', $data ?? [], null);
        $this->setIfExists('wordpress', $data ?? [], null);
        $this->setIfExists('custom', $data ?? [], null);
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
     * Gets apple
     *
     * @return \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null
     */
    public function getApple()
    {
        return $this->container['apple'];
    }

    /**
     * Sets apple
     *
     * @param \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null $apple apple
     *
     * @return self
     */
    public function setApple($apple)
    {
        if (is_null($apple)) {
            throw new \InvalidArgumentException('non-nullable apple cannot be null');
        }
        $this->container['apple'] = $apple;

        return $this;
    }

    /**
     * Gets dolphin
     *
     * @return \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null
     */
    public function getDolphin()
    {
        return $this->container['dolphin'];
    }

    /**
     * Sets dolphin
     *
     * @param \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null $dolphin dolphin
     *
     * @return self
     */
    public function setDolphin($dolphin)
    {
        if (is_null($dolphin)) {
            throw new \InvalidArgumentException('non-nullable dolphin cannot be null');
        }
        $this->container['dolphin'] = $dolphin;

        return $this;
    }

    /**
     * Gets drupal
     *
     * @return \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null
     */
    public function getDrupal()
    {
        return $this->container['drupal'];
    }

    /**
     * Sets drupal
     *
     * @param \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null $drupal drupal
     *
     * @return self
     */
    public function setDrupal($drupal)
    {
        if (is_null($drupal)) {
            throw new \InvalidArgumentException('non-nullable drupal cannot be null');
        }
        $this->container['drupal'] = $drupal;

        return $this;
    }

    /**
     * Gets facebook
     *
     * @return \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null
     */
    public function getFacebook()
    {
        return $this->container['facebook'];
    }

    /**
     * Sets facebook
     *
     * @param \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null $facebook facebook
     *
     * @return self
     */
    public function setFacebook($facebook)
    {
        if (is_null($facebook)) {
            throw new \InvalidArgumentException('non-nullable facebook cannot be null');
        }
        $this->container['facebook'] = $facebook;

        return $this;
    }

    /**
     * Gets github
     *
     * @return \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null
     */
    public function getGithub()
    {
        return $this->container['github'];
    }

    /**
     * Sets github
     *
     * @param \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null $github github
     *
     * @return self
     */
    public function setGithub($github)
    {
        if (is_null($github)) {
            throw new \InvalidArgumentException('non-nullable github cannot be null');
        }
        $this->container['github'] = $github;

        return $this;
    }

    /**
     * Gets github_enterprise
     *
     * @return \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null
     */
    public function getGithubEnterprise()
    {
        return $this->container['github_enterprise'];
    }

    /**
     * Sets github_enterprise
     *
     * @param \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null $github_enterprise github_enterprise
     *
     * @return self
     */
    public function setGithubEnterprise($github_enterprise)
    {
        if (is_null($github_enterprise)) {
            throw new \InvalidArgumentException('non-nullable github_enterprise cannot be null');
        }
        $this->container['github_enterprise'] = $github_enterprise;

        return $this;
    }

    /**
     * Gets gitlab
     *
     * @return \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null
     */
    public function getGitlab()
    {
        return $this->container['gitlab'];
    }

    /**
     * Sets gitlab
     *
     * @param \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null $gitlab gitlab
     *
     * @return self
     */
    public function setGitlab($gitlab)
    {
        if (is_null($gitlab)) {
            throw new \InvalidArgumentException('non-nullable gitlab cannot be null');
        }
        $this->container['gitlab'] = $gitlab;

        return $this;
    }

    /**
     * Gets google
     *
     * @return \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null
     */
    public function getGoogle()
    {
        return $this->container['google'];
    }

    /**
     * Sets google
     *
     * @param \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null $google google
     *
     * @return self
     */
    public function setGoogle($google)
    {
        if (is_null($google)) {
            throw new \InvalidArgumentException('non-nullable google cannot be null');
        }
        $this->container['google'] = $google;

        return $this;
    }

    /**
     * Gets linkedin
     *
     * @return \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null
     */
    public function getLinkedin()
    {
        return $this->container['linkedin'];
    }

    /**
     * Sets linkedin
     *
     * @param \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null $linkedin linkedin
     *
     * @return self
     */
    public function setLinkedin($linkedin)
    {
        if (is_null($linkedin)) {
            throw new \InvalidArgumentException('non-nullable linkedin cannot be null');
        }
        $this->container['linkedin'] = $linkedin;

        return $this;
    }

    /**
     * Gets meteor
     *
     * @return \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null
     */
    public function getMeteor()
    {
        return $this->container['meteor'];
    }

    /**
     * Sets meteor
     *
     * @param \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null $meteor meteor
     *
     * @return self
     */
    public function setMeteor($meteor)
    {
        if (is_null($meteor)) {
            throw new \InvalidArgumentException('non-nullable meteor cannot be null');
        }
        $this->container['meteor'] = $meteor;

        return $this;
    }

    /**
     * Gets nextcloud
     *
     * @return \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null
     */
    public function getNextcloud()
    {
        return $this->container['nextcloud'];
    }

    /**
     * Sets nextcloud
     *
     * @param \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null $nextcloud nextcloud
     *
     * @return self
     */
    public function setNextcloud($nextcloud)
    {
        if (is_null($nextcloud)) {
            throw new \InvalidArgumentException('non-nullable nextcloud cannot be null');
        }
        $this->container['nextcloud'] = $nextcloud;

        return $this;
    }

    /**
     * Gets tokenpass
     *
     * @return \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null
     */
    public function getTokenpass()
    {
        return $this->container['tokenpass'];
    }

    /**
     * Sets tokenpass
     *
     * @param \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null $tokenpass tokenpass
     *
     * @return self
     */
    public function setTokenpass($tokenpass)
    {
        if (is_null($tokenpass)) {
            throw new \InvalidArgumentException('non-nullable tokenpass cannot be null');
        }
        $this->container['tokenpass'] = $tokenpass;

        return $this;
    }

    /**
     * Gets twitter
     *
     * @return \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null
     */
    public function getTwitter()
    {
        return $this->container['twitter'];
    }

    /**
     * Sets twitter
     *
     * @param \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null $twitter twitter
     *
     * @return self
     */
    public function setTwitter($twitter)
    {
        if (is_null($twitter)) {
            throw new \InvalidArgumentException('non-nullable twitter cannot be null');
        }
        $this->container['twitter'] = $twitter;

        return $this;
    }

    /**
     * Gets wordpress
     *
     * @return \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null
     */
    public function getWordpress()
    {
        return $this->container['wordpress'];
    }

    /**
     * Sets wordpress
     *
     * @param \RocketChatStatisticsApi\Model\GetApiV1StatisticsList200ResponseStatisticsInnerServicesOauthApple|null $wordpress wordpress
     *
     * @return self
     */
    public function setWordpress($wordpress)
    {
        if (is_null($wordpress)) {
            throw new \InvalidArgumentException('non-nullable wordpress cannot be null');
        }
        $this->container['wordpress'] = $wordpress;

        return $this;
    }

    /**
     * Gets custom
     *
     * @return object|null
     */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
     * Sets custom
     *
     * @param object|null $custom custom
     *
     * @return self
     */
    public function setCustom($custom)
    {
        if (is_null($custom)) {
            throw new \InvalidArgumentException('non-nullable custom cannot be null');
        }
        $this->container['custom'] = $custom;

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


