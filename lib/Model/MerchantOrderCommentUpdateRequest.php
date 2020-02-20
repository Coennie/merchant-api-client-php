<?php
/**
 * MerchantOrderCommentUpdateRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChannelEngine Merchant API
 *
 * ChannelEngine API for merchants
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChannelEngine\Merchant\ApiClient\Model;

use \ArrayAccess;
use \ChannelEngine\Merchant\ApiClient\ObjectSerializer;

/**
 * MerchantOrderCommentUpdateRequest Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MerchantOrderCommentUpdateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MerchantOrderCommentUpdateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchantOrderNo' => 'string',
        'orderId' => 'int',
        'merchantComment' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchantOrderNo' => null,
        'orderId' => 'int32',
        'merchantComment' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'merchantOrderNo' => 'MerchantOrderNo',
        'orderId' => 'OrderId',
        'merchantComment' => 'MerchantComment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchantOrderNo' => 'setMerchantOrderNo',
        'orderId' => 'setOrderId',
        'merchantComment' => 'setMerchantComment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchantOrderNo' => 'getMerchantOrderNo',
        'orderId' => 'getOrderId',
        'merchantComment' => 'getMerchantComment'
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
        return self::$swaggerModelName;
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
        $this->container['merchantOrderNo'] = isset($data['merchantOrderNo']) ? $data['merchantOrderNo'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['merchantComment'] = isset($data['merchantComment']) ? $data['merchantComment'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['merchantOrderNo']) && (mb_strlen($this->container['merchantOrderNo']) > 50)) {
            $invalidProperties[] = "invalid value for 'merchantOrderNo', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['merchantOrderNo']) && (mb_strlen($this->container['merchantOrderNo']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchantOrderNo', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['merchantComment'] === null) {
            $invalidProperties[] = "'merchantComment' can't be null";
        }
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
     * Gets merchantOrderNo
     *
     * @return string
     */
    public function getMerchantOrderNo()
    {
        return $this->container['merchantOrderNo'];
    }

    /**
     * Sets merchantOrderNo
     *
     * @param string $merchantOrderNo Your own order reference for the order you would like to update the comment for
     *
     * @return $this
     */
    public function setMerchantOrderNo($merchantOrderNo)
    {
        if (!is_null($merchantOrderNo) && (mb_strlen($merchantOrderNo) > 50)) {
            throw new \InvalidArgumentException('invalid length for $merchantOrderNo when calling MerchantOrderCommentUpdateRequest., must be smaller than or equal to 50.');
        }
        if (!is_null($merchantOrderNo) && (mb_strlen($merchantOrderNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchantOrderNo when calling MerchantOrderCommentUpdateRequest., must be bigger than or equal to 0.');
        }

        $this->container['merchantOrderNo'] = $merchantOrderNo;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param int $orderId The ChannelEngine order ID of the order you would like to update the comment for
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets merchantComment
     *
     * @return string
     */
    public function getMerchantComment()
    {
        return $this->container['merchantComment'];
    }

    /**
     * Sets merchantComment
     *
     * @param string $merchantComment The merchant comment you would like add / update for the order
     *
     * @return $this
     */
    public function setMerchantComment($merchantComment)
    {
        $this->container['merchantComment'] = $merchantComment;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


