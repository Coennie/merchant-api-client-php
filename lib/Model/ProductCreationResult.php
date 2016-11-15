<?php
/**
 * ProductCreationResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChannelEngine API V2
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * ProductCreationResult Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductCreationResult implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProductCreationResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'rejected_count' => 'int',
        'accepted_count' => 'int',
        'product_messages' => '\Swagger\Client\Model\ProductMessage[]'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'rejected_count' => 'RejectedCount',
        'accepted_count' => 'AcceptedCount',
        'product_messages' => 'ProductMessages'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'rejected_count' => 'setRejectedCount',
        'accepted_count' => 'setAcceptedCount',
        'product_messages' => 'setProductMessages'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'rejected_count' => 'getRejectedCount',
        'accepted_count' => 'getAcceptedCount',
        'product_messages' => 'getProductMessages'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['rejected_count'] = isset($data['rejected_count']) ? $data['rejected_count'] : null;
        $this->container['accepted_count'] = isset($data['accepted_count']) ? $data['accepted_count'] : null;
        $this->container['product_messages'] = isset($data['product_messages']) ? $data['product_messages'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets rejected_count
     * @return int
     */
    public function getRejectedCount()
    {
        return $this->container['rejected_count'];
    }

    /**
     * Sets rejected_count
     * @param int $rejected_count
     * @return $this
     */
    public function setRejectedCount($rejected_count)
    {
        $this->container['rejected_count'] = $rejected_count;

        return $this;
    }

    /**
     * Gets accepted_count
     * @return int
     */
    public function getAcceptedCount()
    {
        return $this->container['accepted_count'];
    }

    /**
     * Sets accepted_count
     * @param int $accepted_count
     * @return $this
     */
    public function setAcceptedCount($accepted_count)
    {
        $this->container['accepted_count'] = $accepted_count;

        return $this;
    }

    /**
     * Gets product_messages
     * @return \Swagger\Client\Model\ProductMessage[]
     */
    public function getProductMessages()
    {
        return $this->container['product_messages'];
    }

    /**
     * Sets product_messages
     * @param \Swagger\Client\Model\ProductMessage[] $product_messages Messages about the rejected products.
     * @return $this
     */
    public function setProductMessages($product_messages)
    {
        $this->container['product_messages'] = $product_messages;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


