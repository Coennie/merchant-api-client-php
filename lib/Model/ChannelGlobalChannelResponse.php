<?php
/**
 * ChannelGlobalChannelResponse
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ChannelEngine Merchant API
 *
 * ChannelEngine API for merchants
 *
 * The version of the OpenAPI document: 2.9.8
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ChannelEngine\Merchant\ApiClient\Model;

use \ArrayAccess;
use \ChannelEngine\Merchant\ApiClient\ObjectSerializer;

/**
 * ChannelGlobalChannelResponse Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ChannelGlobalChannelResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelGlobalChannelResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'countryCode' => 'string',
        'globalChannelId' => 'int',
        'channels' => '\ChannelEngine\Merchant\ApiClient\Model\ChannelChannelResponse[]',
        'languageCode' => 'string',
        'globalChannelName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'countryCode' => null,
        'globalChannelId' => 'int32',
        'channels' => null,
        'languageCode' => null,
        'globalChannelName' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'countryCode' => 'CountryCode',
        'globalChannelId' => 'GlobalChannelId',
        'channels' => 'Channels',
        'languageCode' => 'LanguageCode',
        'globalChannelName' => 'GlobalChannelName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'countryCode' => 'setCountryCode',
        'globalChannelId' => 'setGlobalChannelId',
        'channels' => 'setChannels',
        'languageCode' => 'setLanguageCode',
        'globalChannelName' => 'setGlobalChannelName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'countryCode' => 'getCountryCode',
        'globalChannelId' => 'getGlobalChannelId',
        'channels' => 'getChannels',
        'languageCode' => 'getLanguageCode',
        'globalChannelName' => 'getGlobalChannelName'
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
        $this->container['countryCode'] = $data['countryCode'] ?? null;
        $this->container['globalChannelId'] = $data['globalChannelId'] ?? null;
        $this->container['channels'] = $data['channels'] ?? null;
        $this->container['languageCode'] = $data['languageCode'] ?? null;
        $this->container['globalChannelName'] = $data['globalChannelName'] ?? null;
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
     * Gets countryCode
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['countryCode'];
    }

    /**
     * Sets countryCode
     *
     * @param string|null $countryCode The country code of the Global Channel.
     *
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->container['countryCode'] = $countryCode;

        return $this;
    }

    /**
     * Gets globalChannelId
     *
     * @return int|null
     */
    public function getGlobalChannelId()
    {
        return $this->container['globalChannelId'];
    }

    /**
     * Sets globalChannelId
     *
     * @param int|null $globalChannelId The ID of the Global Channel.
     *
     * @return self
     */
    public function setGlobalChannelId($globalChannelId)
    {
        $this->container['globalChannelId'] = $globalChannelId;

        return $this;
    }

    /**
     * Gets channels
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\ChannelChannelResponse[]|null
     */
    public function getChannels()
    {
        return $this->container['channels'];
    }

    /**
     * Sets channels
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\ChannelChannelResponse[]|null $channels The status of the instances.
     *
     * @return self
     */
    public function setChannels($channels)
    {
        $this->container['channels'] = $channels;

        return $this;
    }

    /**
     * Gets languageCode
     *
     * @return string|null
     */
    public function getLanguageCode()
    {
        return $this->container['languageCode'];
    }

    /**
     * Sets languageCode
     *
     * @param string|null $languageCode The language code of the Global Channel.
     *
     * @return self
     */
    public function setLanguageCode($languageCode)
    {
        $this->container['languageCode'] = $languageCode;

        return $this;
    }

    /**
     * Gets globalChannelName
     *
     * @return string|null
     */
    public function getGlobalChannelName()
    {
        return $this->container['globalChannelName'];
    }

    /**
     * Sets globalChannelName
     *
     * @param string|null $globalChannelName The name of the Global Channel.
     *
     * @return self
     */
    public function setGlobalChannelName($globalChannelName)
    {
        $this->container['globalChannelName'] = $globalChannelName;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


