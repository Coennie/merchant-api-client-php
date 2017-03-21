<?php
/**
 * BackOrderLine
 *
 * PHP version 5
 *
 * @category Class
 * @package  ChannelEngine\ApiClient
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChannelEngine API V2
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChannelEngine\ApiClient\Model;

use \ArrayAccess;

/**
 * BackOrderLine Class Doc Comment
 *
 * @category    Class
 * @package     ChannelEngine\ApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BackOrderLine implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BackOrderLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchantOrderLineNo' => 'string',
        'quantity' => 'int'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'merchantOrderLineNo' => 'MerchantOrderLineNo',
        'quantity' => 'Quantity'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'merchantOrderLineNo' => 'setMerchantOrderLineNo',
        'quantity' => 'setQuantity'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'merchantOrderLineNo' => 'getMerchantOrderLineNo',
        'quantity' => 'getQuantity'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['merchantOrderLineNo'] = isset($data['merchantOrderLineNo']) ? $data['merchantOrderLineNo'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['merchantOrderLineNo'] === null) {
            $invalid_properties[] = "'merchantOrderLineNo' can't be null";
        }
        if ((strlen($this->container['merchantOrderLineNo']) > 50)) {
            $invalid_properties[] = "invalid value for 'merchantOrderLineNo', the character length must be smaller than or equal to 50.";
        }

        if ((strlen($this->container['merchantOrderLineNo']) < 0)) {
            $invalid_properties[] = "invalid value for 'merchantOrderLineNo', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['quantity'] === null) {
            $invalid_properties[] = "'quantity' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['merchantOrderLineNo'] === null) {
            return false;
        }
        if (strlen($this->container['merchantOrderLineNo']) > 50) {
            return false;
        }
        if (strlen($this->container['merchantOrderLineNo']) < 0) {
            return false;
        }
        if ($this->container['quantity'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets merchantOrderLineNo
     * @return string
     */
    public function getMerchantOrderLineNo()
    {
        return $this->container['merchantOrderLineNo'];
    }

    /**
     * Sets merchantOrderLineNo
     * @param string $merchantOrderLineNo
     * @return $this
     */
    public function setMerchantOrderLineNo($merchantOrderLineNo)
    {
        if ((strlen($merchantOrderLineNo) > 50)) {
            throw new \InvalidArgumentException('invalid length for $merchantOrderLineNo when calling BackOrderLine., must be smaller than or equal to 50.');
        }
        if ((strlen($merchantOrderLineNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchantOrderLineNo when calling BackOrderLine., must be bigger than or equal to 0.');
        }

        $this->container['merchantOrderLineNo'] = $merchantOrderLineNo;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\ChannelEngine\ApiClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ChannelEngine\ApiClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


