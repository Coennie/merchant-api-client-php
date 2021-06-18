<?php
/**
 * MerchantSingleOrderReturnResponse
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
 * The version of the OpenAPI document: 2.9.7
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
 * MerchantSingleOrderReturnResponse Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MerchantSingleOrderReturnResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MerchantSingleOrderReturnResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchantOrderNo' => 'string',
        'lines' => '\ChannelEngine\Merchant\ApiClient\Model\MerchantSingleOrderReturnLineResponse[]',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'merchantReturnNo' => 'string',
        'channelReturnNo' => 'string',
        'channelId' => 'int',
        'globalChannelId' => 'int',
        'globalChannelName' => 'string',
        'status' => '\ChannelEngine\Merchant\ApiClient\Model\ReturnStatus',
        'id' => 'int',
        'reason' => '\ChannelEngine\Merchant\ApiClient\Model\ReturnReason',
        'customerComment' => 'string',
        'merchantComment' => 'string',
        'refundInclVat' => 'float',
        'refundExclVat' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'merchantOrderNo' => null,
        'lines' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'merchantReturnNo' => null,
        'channelReturnNo' => null,
        'channelId' => 'int32',
        'globalChannelId' => 'int32',
        'globalChannelName' => null,
        'status' => null,
        'id' => 'int32',
        'reason' => null,
        'customerComment' => null,
        'merchantComment' => null,
        'refundInclVat' => 'decimal',
        'refundExclVat' => 'decimal'
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
        'merchantOrderNo' => 'MerchantOrderNo',
        'lines' => 'Lines',
        'createdAt' => 'CreatedAt',
        'updatedAt' => 'UpdatedAt',
        'merchantReturnNo' => 'MerchantReturnNo',
        'channelReturnNo' => 'ChannelReturnNo',
        'channelId' => 'ChannelId',
        'globalChannelId' => 'GlobalChannelId',
        'globalChannelName' => 'GlobalChannelName',
        'status' => 'Status',
        'id' => 'Id',
        'reason' => 'Reason',
        'customerComment' => 'CustomerComment',
        'merchantComment' => 'MerchantComment',
        'refundInclVat' => 'RefundInclVat',
        'refundExclVat' => 'RefundExclVat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchantOrderNo' => 'setMerchantOrderNo',
        'lines' => 'setLines',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'merchantReturnNo' => 'setMerchantReturnNo',
        'channelReturnNo' => 'setChannelReturnNo',
        'channelId' => 'setChannelId',
        'globalChannelId' => 'setGlobalChannelId',
        'globalChannelName' => 'setGlobalChannelName',
        'status' => 'setStatus',
        'id' => 'setId',
        'reason' => 'setReason',
        'customerComment' => 'setCustomerComment',
        'merchantComment' => 'setMerchantComment',
        'refundInclVat' => 'setRefundInclVat',
        'refundExclVat' => 'setRefundExclVat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchantOrderNo' => 'getMerchantOrderNo',
        'lines' => 'getLines',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'merchantReturnNo' => 'getMerchantReturnNo',
        'channelReturnNo' => 'getChannelReturnNo',
        'channelId' => 'getChannelId',
        'globalChannelId' => 'getGlobalChannelId',
        'globalChannelName' => 'getGlobalChannelName',
        'status' => 'getStatus',
        'id' => 'getId',
        'reason' => 'getReason',
        'customerComment' => 'getCustomerComment',
        'merchantComment' => 'getMerchantComment',
        'refundInclVat' => 'getRefundInclVat',
        'refundExclVat' => 'getRefundExclVat'
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
        $this->container['merchantOrderNo'] = $data['merchantOrderNo'] ?? null;
        $this->container['lines'] = $data['lines'] ?? null;
        $this->container['createdAt'] = $data['createdAt'] ?? null;
        $this->container['updatedAt'] = $data['updatedAt'] ?? null;
        $this->container['merchantReturnNo'] = $data['merchantReturnNo'] ?? null;
        $this->container['channelReturnNo'] = $data['channelReturnNo'] ?? null;
        $this->container['channelId'] = $data['channelId'] ?? null;
        $this->container['globalChannelId'] = $data['globalChannelId'] ?? null;
        $this->container['globalChannelName'] = $data['globalChannelName'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['reason'] = $data['reason'] ?? null;
        $this->container['customerComment'] = $data['customerComment'] ?? null;
        $this->container['merchantComment'] = $data['merchantComment'] ?? null;
        $this->container['refundInclVat'] = $data['refundInclVat'] ?? null;
        $this->container['refundExclVat'] = $data['refundExclVat'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['customerComment']) && (mb_strlen($this->container['customerComment']) > 4001)) {
            $invalidProperties[] = "invalid value for 'customerComment', the character length must be smaller than or equal to 4001.";
        }

        if (!is_null($this->container['customerComment']) && (mb_strlen($this->container['customerComment']) < 0)) {
            $invalidProperties[] = "invalid value for 'customerComment', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['merchantComment']) && (mb_strlen($this->container['merchantComment']) > 4001)) {
            $invalidProperties[] = "invalid value for 'merchantComment', the character length must be smaller than or equal to 4001.";
        }

        if (!is_null($this->container['merchantComment']) && (mb_strlen($this->container['merchantComment']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchantComment', the character length must be bigger than or equal to 0.";
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
     * @return string|null
     */
    public function getMerchantOrderNo()
    {
        return $this->container['merchantOrderNo'];
    }

    /**
     * Sets merchantOrderNo
     *
     * @param string|null $merchantOrderNo The unique order reference used by the Merchant.
     *
     * @return self
     */
    public function setMerchantOrderNo($merchantOrderNo)
    {
        $this->container['merchantOrderNo'] = $merchantOrderNo;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\MerchantSingleOrderReturnLineResponse[]|null
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\MerchantSingleOrderReturnLineResponse[]|null $lines lines
     *
     * @return self
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt The date at which the return was created in ChannelEngine.
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt The date at which the return was last modified in ChannelEngine.
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets merchantReturnNo
     *
     * @return string|null
     */
    public function getMerchantReturnNo()
    {
        return $this->container['merchantReturnNo'];
    }

    /**
     * Sets merchantReturnNo
     *
     * @param string|null $merchantReturnNo The unique return reference used by the Merchant, will be empty in case of a channel or unacknowledged return.
     *
     * @return self
     */
    public function setMerchantReturnNo($merchantReturnNo)
    {
        $this->container['merchantReturnNo'] = $merchantReturnNo;

        return $this;
    }

    /**
     * Gets channelReturnNo
     *
     * @return string|null
     */
    public function getChannelReturnNo()
    {
        return $this->container['channelReturnNo'];
    }

    /**
     * Sets channelReturnNo
     *
     * @param string|null $channelReturnNo The unique return reference used by the Channel, will be empty in case of a merchant return.
     *
     * @return self
     */
    public function setChannelReturnNo($channelReturnNo)
    {
        $this->container['channelReturnNo'] = $channelReturnNo;

        return $this;
    }

    /**
     * Gets channelId
     *
     * @return int|null
     */
    public function getChannelId()
    {
        return $this->container['channelId'];
    }

    /**
     * Sets channelId
     *
     * @param int|null $channelId The id of the channel.
     *
     * @return self
     */
    public function setChannelId($channelId)
    {
        $this->container['channelId'] = $channelId;

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
     * @param int|null $globalChannelId The id of the Global Channel.
     *
     * @return self
     */
    public function setGlobalChannelId($globalChannelId)
    {
        $this->container['globalChannelId'] = $globalChannelId;

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
     * Gets status
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\ReturnStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\ReturnStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id The unique return reference used by ChannelEngine.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return \ChannelEngine\Merchant\ApiClient\Model\ReturnReason|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param \ChannelEngine\Merchant\ApiClient\Model\ReturnReason|null $reason reason
     *
     * @return self
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets customerComment
     *
     * @return string|null
     */
    public function getCustomerComment()
    {
        return $this->container['customerComment'];
    }

    /**
     * Sets customerComment
     *
     * @param string|null $customerComment Optional. Comment of customer on the (reason of) the return.
     *
     * @return self
     */
    public function setCustomerComment($customerComment)
    {
        if (!is_null($customerComment) && (mb_strlen($customerComment) > 4001)) {
            throw new \InvalidArgumentException('invalid length for $customerComment when calling MerchantSingleOrderReturnResponse., must be smaller than or equal to 4001.');
        }
        if (!is_null($customerComment) && (mb_strlen($customerComment) < 0)) {
            throw new \InvalidArgumentException('invalid length for $customerComment when calling MerchantSingleOrderReturnResponse., must be bigger than or equal to 0.');
        }

        $this->container['customerComment'] = $customerComment;

        return $this;
    }

    /**
     * Gets merchantComment
     *
     * @return string|null
     */
    public function getMerchantComment()
    {
        return $this->container['merchantComment'];
    }

    /**
     * Sets merchantComment
     *
     * @param string|null $merchantComment Optional. Comment of merchant on the return.
     *
     * @return self
     */
    public function setMerchantComment($merchantComment)
    {
        if (!is_null($merchantComment) && (mb_strlen($merchantComment) > 4001)) {
            throw new \InvalidArgumentException('invalid length for $merchantComment when calling MerchantSingleOrderReturnResponse., must be smaller than or equal to 4001.');
        }
        if (!is_null($merchantComment) && (mb_strlen($merchantComment) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchantComment when calling MerchantSingleOrderReturnResponse., must be bigger than or equal to 0.');
        }

        $this->container['merchantComment'] = $merchantComment;

        return $this;
    }

    /**
     * Gets refundInclVat
     *
     * @return float|null
     */
    public function getRefundInclVat()
    {
        return $this->container['refundInclVat'];
    }

    /**
     * Sets refundInclVat
     *
     * @param float|null $refundInclVat Refund amount incl. VAT.
     *
     * @return self
     */
    public function setRefundInclVat($refundInclVat)
    {
        $this->container['refundInclVat'] = $refundInclVat;

        return $this;
    }

    /**
     * Gets refundExclVat
     *
     * @return float|null
     */
    public function getRefundExclVat()
    {
        return $this->container['refundExclVat'];
    }

    /**
     * Sets refundExclVat
     *
     * @param float|null $refundExclVat Refund amount excl. VAT.
     *
     * @return self
     */
    public function setRefundExclVat($refundExclVat)
    {
        $this->container['refundExclVat'] = $refundExclVat;

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


