<?php
/**
 * MerchantOrderResponse
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
 * OpenAPI spec version: 2.4.0
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
 * MerchantOrderResponse Class Doc Comment
 *
 * @category    Class
 * @package     ChannelEngine\ApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MerchantOrderResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'MerchantOrderResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'channelName' => 'string',
        'channelOrderSupport' => 'string',
        'channelOrderNo' => 'string',
        'status' => 'string',
        'lines' => '\ChannelEngine\ApiClient\Model\MerchantOrderLineResponse[]',
        'phone' => 'string',
        'email' => 'string',
        'companyRegistrationNo' => 'string',
        'vatNo' => 'string',
        'paymentMethod' => 'string',
        'shippingCostsInclVat' => 'double',
        'currencyCode' => 'string',
        'orderDate' => '\DateTime',
        'channelCustomerNo' => 'string',
        'billingAddress' => '\ChannelEngine\ApiClient\Model\EntitiesAddressModels',
        'shippingAddress' => '\ChannelEngine\ApiClient\Model\EntitiesAddressModels',
        'extraData' => 'map[string,string]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'channelName' => null,
        'channelOrderSupport' => null,
        'channelOrderNo' => null,
        'status' => null,
        'lines' => null,
        'phone' => null,
        'email' => null,
        'companyRegistrationNo' => null,
        'vatNo' => null,
        'paymentMethod' => null,
        'shippingCostsInclVat' => 'double',
        'currencyCode' => null,
        'orderDate' => 'date-time',
        'channelCustomerNo' => null,
        'billingAddress' => null,
        'shippingAddress' => null,
        'extraData' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'Id',
        'channelName' => 'ChannelName',
        'channelOrderSupport' => 'ChannelOrderSupport',
        'channelOrderNo' => 'ChannelOrderNo',
        'status' => 'Status',
        'lines' => 'Lines',
        'phone' => 'Phone',
        'email' => 'Email',
        'companyRegistrationNo' => 'CompanyRegistrationNo',
        'vatNo' => 'VatNo',
        'paymentMethod' => 'PaymentMethod',
        'shippingCostsInclVat' => 'ShippingCostsInclVat',
        'currencyCode' => 'CurrencyCode',
        'orderDate' => 'OrderDate',
        'channelCustomerNo' => 'ChannelCustomerNo',
        'billingAddress' => 'BillingAddress',
        'shippingAddress' => 'ShippingAddress',
        'extraData' => 'ExtraData'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'channelName' => 'setChannelName',
        'channelOrderSupport' => 'setChannelOrderSupport',
        'channelOrderNo' => 'setChannelOrderNo',
        'status' => 'setStatus',
        'lines' => 'setLines',
        'phone' => 'setPhone',
        'email' => 'setEmail',
        'companyRegistrationNo' => 'setCompanyRegistrationNo',
        'vatNo' => 'setVatNo',
        'paymentMethod' => 'setPaymentMethod',
        'shippingCostsInclVat' => 'setShippingCostsInclVat',
        'currencyCode' => 'setCurrencyCode',
        'orderDate' => 'setOrderDate',
        'channelCustomerNo' => 'setChannelCustomerNo',
        'billingAddress' => 'setBillingAddress',
        'shippingAddress' => 'setShippingAddress',
        'extraData' => 'setExtraData'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'channelName' => 'getChannelName',
        'channelOrderSupport' => 'getChannelOrderSupport',
        'channelOrderNo' => 'getChannelOrderNo',
        'status' => 'getStatus',
        'lines' => 'getLines',
        'phone' => 'getPhone',
        'email' => 'getEmail',
        'companyRegistrationNo' => 'getCompanyRegistrationNo',
        'vatNo' => 'getVatNo',
        'paymentMethod' => 'getPaymentMethod',
        'shippingCostsInclVat' => 'getShippingCostsInclVat',
        'currencyCode' => 'getCurrencyCode',
        'orderDate' => 'getOrderDate',
        'channelCustomerNo' => 'getChannelCustomerNo',
        'billingAddress' => 'getBillingAddress',
        'shippingAddress' => 'getShippingAddress',
        'extraData' => 'getExtraData'
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

    const CHANNEL_ORDER_SUPPORT_NONE = 'NONE';
    const CHANNEL_ORDER_SUPPORT_ORDERS = 'ORDERS';
    const CHANNEL_ORDER_SUPPORT_SPLIT_ORDERS = 'SPLIT_ORDERS';
    const CHANNEL_ORDER_SUPPORT_SPLIT_ORDER_LINES = 'SPLIT_ORDER_LINES';
    const STATUS_IN_PROGRESS = 'IN_PROGRESS';
    const STATUS_SHIPPED = 'SHIPPED';
    const STATUS_IN_BACKORDER = 'IN_BACKORDER';
    const STATUS_CANCELED = 'CANCELED';
    const STATUS_MANCO = 'MANCO';
    const STATUS_IN_COMBI = 'IN_COMBI';
    const STATUS_CLOSED = 'CLOSED';
    const STATUS__NEW = 'NEW';
    const STATUS_RETURNED = 'RETURNED';
    const STATUS_REQUIRES_CORRECTION = 'REQUIRES_CORRECTION';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getChannelOrderSupportAllowableValues()
    {
        return [
            self::CHANNEL_ORDER_SUPPORT_NONE,
            self::CHANNEL_ORDER_SUPPORT_ORDERS,
            self::CHANNEL_ORDER_SUPPORT_SPLIT_ORDERS,
            self::CHANNEL_ORDER_SUPPORT_SPLIT_ORDER_LINES,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_IN_PROGRESS,
            self::STATUS_SHIPPED,
            self::STATUS_IN_BACKORDER,
            self::STATUS_CANCELED,
            self::STATUS_MANCO,
            self::STATUS_IN_COMBI,
            self::STATUS_CLOSED,
            self::STATUS__NEW,
            self::STATUS_RETURNED,
            self::STATUS_REQUIRES_CORRECTION,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['channelName'] = isset($data['channelName']) ? $data['channelName'] : null;
        $this->container['channelOrderSupport'] = isset($data['channelOrderSupport']) ? $data['channelOrderSupport'] : null;
        $this->container['channelOrderNo'] = isset($data['channelOrderNo']) ? $data['channelOrderNo'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['companyRegistrationNo'] = isset($data['companyRegistrationNo']) ? $data['companyRegistrationNo'] : null;
        $this->container['vatNo'] = isset($data['vatNo']) ? $data['vatNo'] : null;
        $this->container['paymentMethod'] = isset($data['paymentMethod']) ? $data['paymentMethod'] : null;
        $this->container['shippingCostsInclVat'] = isset($data['shippingCostsInclVat']) ? $data['shippingCostsInclVat'] : null;
        $this->container['currencyCode'] = isset($data['currencyCode']) ? $data['currencyCode'] : null;
        $this->container['orderDate'] = isset($data['orderDate']) ? $data['orderDate'] : null;
        $this->container['channelCustomerNo'] = isset($data['channelCustomerNo']) ? $data['channelCustomerNo'] : null;
        $this->container['billingAddress'] = isset($data['billingAddress']) ? $data['billingAddress'] : null;
        $this->container['shippingAddress'] = isset($data['shippingAddress']) ? $data['shippingAddress'] : null;
        $this->container['extraData'] = isset($data['extraData']) ? $data['extraData'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getChannelOrderSupportAllowableValues();
        if (!in_array($this->container['channelOrderSupport'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'channelOrderSupport', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if (!is_null($this->container['phone']) && (strlen($this->container['phone']) > 20)) {
            $invalid_properties[] = "invalid value for 'phone', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['phone']) && (strlen($this->container['phone']) < 0)) {
            $invalid_properties[] = "invalid value for 'phone', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['email'] === null) {
            $invalid_properties[] = "'email' can't be null";
        }
        if ((strlen($this->container['email']) > 250)) {
            $invalid_properties[] = "invalid value for 'email', the character length must be smaller than or equal to 250.";
        }

        if ((strlen($this->container['email']) < 0)) {
            $invalid_properties[] = "invalid value for 'email', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['companyRegistrationNo']) && (strlen($this->container['companyRegistrationNo']) > 50)) {
            $invalid_properties[] = "invalid value for 'companyRegistrationNo', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['companyRegistrationNo']) && (strlen($this->container['companyRegistrationNo']) < 0)) {
            $invalid_properties[] = "invalid value for 'companyRegistrationNo', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['vatNo']) && (strlen($this->container['vatNo']) > 50)) {
            $invalid_properties[] = "invalid value for 'vatNo', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['vatNo']) && (strlen($this->container['vatNo']) < 0)) {
            $invalid_properties[] = "invalid value for 'vatNo', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['paymentMethod'] === null) {
            $invalid_properties[] = "'paymentMethod' can't be null";
        }
        if ((strlen($this->container['paymentMethod']) > 50)) {
            $invalid_properties[] = "invalid value for 'paymentMethod', the character length must be smaller than or equal to 50.";
        }

        if ((strlen($this->container['paymentMethod']) < 0)) {
            $invalid_properties[] = "invalid value for 'paymentMethod', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['shippingCostsInclVat'] === null) {
            $invalid_properties[] = "'shippingCostsInclVat' can't be null";
        }
        if ($this->container['currencyCode'] === null) {
            $invalid_properties[] = "'currencyCode' can't be null";
        }
        if ($this->container['orderDate'] === null) {
            $invalid_properties[] = "'orderDate' can't be null";
        }
        if (!is_null($this->container['channelCustomerNo']) && (strlen($this->container['channelCustomerNo']) > 50)) {
            $invalid_properties[] = "invalid value for 'channelCustomerNo', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['channelCustomerNo']) && (strlen($this->container['channelCustomerNo']) < 0)) {
            $invalid_properties[] = "invalid value for 'channelCustomerNo', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['billingAddress'] === null) {
            $invalid_properties[] = "'billingAddress' can't be null";
        }
        if ($this->container['shippingAddress'] === null) {
            $invalid_properties[] = "'shippingAddress' can't be null";
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

        $allowed_values = $this->getChannelOrderSupportAllowableValues();
        if (!in_array($this->container['channelOrderSupport'], $allowed_values)) {
            return false;
        }
        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        if (strlen($this->container['phone']) > 20) {
            return false;
        }
        if (strlen($this->container['phone']) < 0) {
            return false;
        }
        if ($this->container['email'] === null) {
            return false;
        }
        if (strlen($this->container['email']) > 250) {
            return false;
        }
        if (strlen($this->container['email']) < 0) {
            return false;
        }
        if (strlen($this->container['companyRegistrationNo']) > 50) {
            return false;
        }
        if (strlen($this->container['companyRegistrationNo']) < 0) {
            return false;
        }
        if (strlen($this->container['vatNo']) > 50) {
            return false;
        }
        if (strlen($this->container['vatNo']) < 0) {
            return false;
        }
        if ($this->container['paymentMethod'] === null) {
            return false;
        }
        if (strlen($this->container['paymentMethod']) > 50) {
            return false;
        }
        if (strlen($this->container['paymentMethod']) < 0) {
            return false;
        }
        if ($this->container['shippingCostsInclVat'] === null) {
            return false;
        }
        if ($this->container['currencyCode'] === null) {
            return false;
        }
        if ($this->container['orderDate'] === null) {
            return false;
        }
        if (strlen($this->container['channelCustomerNo']) > 50) {
            return false;
        }
        if (strlen($this->container['channelCustomerNo']) < 0) {
            return false;
        }
        if ($this->container['billingAddress'] === null) {
            return false;
        }
        if ($this->container['shippingAddress'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id The unique identifier used by ChannelEngine. This identifier does  not have to be saved. It should only be used in a call to acknowledge the order.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets channelName
     * @return string
     */
    public function getChannelName()
    {
        return $this->container['channelName'];
    }

    /**
     * Sets channelName
     * @param string $channelName
     * @return $this
     */
    public function setChannelName($channelName)
    {
        $this->container['channelName'] = $channelName;

        return $this;
    }

    /**
     * Gets channelOrderSupport
     * @return string
     */
    public function getChannelOrderSupport()
    {
        return $this->container['channelOrderSupport'];
    }

    /**
     * Sets channelOrderSupport
     * @param string $channelOrderSupport
     * @return $this
     */
    public function setChannelOrderSupport($channelOrderSupport)
    {
        $allowed_values = $this->getChannelOrderSupportAllowableValues();
        if (!is_null($channelOrderSupport) && !in_array($channelOrderSupport, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'channelOrderSupport', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['channelOrderSupport'] = $channelOrderSupport;

        return $this;
    }

    /**
     * Gets channelOrderNo
     * @return string
     */
    public function getChannelOrderNo()
    {
        return $this->container['channelOrderNo'];
    }

    /**
     * Sets channelOrderNo
     * @param string $channelOrderNo
     * @return $this
     */
    public function setChannelOrderNo($channelOrderNo)
    {
        $this->container['channelOrderNo'] = $channelOrderNo;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets lines
     * @return \ChannelEngine\ApiClient\Model\MerchantOrderLineResponse[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     * @param \ChannelEngine\ApiClient\Model\MerchantOrderLineResponse[] $lines
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets phone
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     * @param string $phone
     * @return $this
     */
    public function setPhone($phone)
    {
        if (!is_null($phone) && (strlen($phone) > 20)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling MerchantOrderResponse., must be smaller than or equal to 20.');
        }
        if (!is_null($phone) && (strlen($phone) < 0)) {
            throw new \InvalidArgumentException('invalid length for $phone when calling MerchantOrderResponse., must be bigger than or equal to 0.');
        }

        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        if ((strlen($email) > 250)) {
            throw new \InvalidArgumentException('invalid length for $email when calling MerchantOrderResponse., must be smaller than or equal to 250.');
        }
        if ((strlen($email) < 0)) {
            throw new \InvalidArgumentException('invalid length for $email when calling MerchantOrderResponse., must be bigger than or equal to 0.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets companyRegistrationNo
     * @return string
     */
    public function getCompanyRegistrationNo()
    {
        return $this->container['companyRegistrationNo'];
    }

    /**
     * Sets companyRegistrationNo
     * @param string $companyRegistrationNo
     * @return $this
     */
    public function setCompanyRegistrationNo($companyRegistrationNo)
    {
        if (!is_null($companyRegistrationNo) && (strlen($companyRegistrationNo) > 50)) {
            throw new \InvalidArgumentException('invalid length for $companyRegistrationNo when calling MerchantOrderResponse., must be smaller than or equal to 50.');
        }
        if (!is_null($companyRegistrationNo) && (strlen($companyRegistrationNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $companyRegistrationNo when calling MerchantOrderResponse., must be bigger than or equal to 0.');
        }

        $this->container['companyRegistrationNo'] = $companyRegistrationNo;

        return $this;
    }

    /**
     * Gets vatNo
     * @return string
     */
    public function getVatNo()
    {
        return $this->container['vatNo'];
    }

    /**
     * Sets vatNo
     * @param string $vatNo
     * @return $this
     */
    public function setVatNo($vatNo)
    {
        if (!is_null($vatNo) && (strlen($vatNo) > 50)) {
            throw new \InvalidArgumentException('invalid length for $vatNo when calling MerchantOrderResponse., must be smaller than or equal to 50.');
        }
        if (!is_null($vatNo) && (strlen($vatNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $vatNo when calling MerchantOrderResponse., must be bigger than or equal to 0.');
        }

        $this->container['vatNo'] = $vatNo;

        return $this;
    }

    /**
     * Gets paymentMethod
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     * @param string $paymentMethod
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        if ((strlen($paymentMethod) > 50)) {
            throw new \InvalidArgumentException('invalid length for $paymentMethod when calling MerchantOrderResponse., must be smaller than or equal to 50.');
        }
        if ((strlen($paymentMethod) < 0)) {
            throw new \InvalidArgumentException('invalid length for $paymentMethod when calling MerchantOrderResponse., must be bigger than or equal to 0.');
        }

        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets shippingCostsInclVat
     * @return double
     */
    public function getShippingCostsInclVat()
    {
        return $this->container['shippingCostsInclVat'];
    }

    /**
     * Sets shippingCostsInclVat
     * @param double $shippingCostsInclVat The shipping fee including VAT  (in the tenant's base currency calculated using the exchange rate at the time of ordering).
     * @return $this
     */
    public function setShippingCostsInclVat($shippingCostsInclVat)
    {
        $this->container['shippingCostsInclVat'] = $shippingCostsInclVat;

        return $this;
    }

    /**
     * Gets currencyCode
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currencyCode'];
    }

    /**
     * Sets currencyCode
     * @param string $currencyCode
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->container['currencyCode'] = $currencyCode;

        return $this;
    }

    /**
     * Gets orderDate
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->container['orderDate'];
    }

    /**
     * Sets orderDate
     * @param \DateTime $orderDate
     * @return $this
     */
    public function setOrderDate($orderDate)
    {
        $this->container['orderDate'] = $orderDate;

        return $this;
    }

    /**
     * Gets channelCustomerNo
     * @return string
     */
    public function getChannelCustomerNo()
    {
        return $this->container['channelCustomerNo'];
    }

    /**
     * Sets channelCustomerNo
     * @param string $channelCustomerNo
     * @return $this
     */
    public function setChannelCustomerNo($channelCustomerNo)
    {
        if (!is_null($channelCustomerNo) && (strlen($channelCustomerNo) > 50)) {
            throw new \InvalidArgumentException('invalid length for $channelCustomerNo when calling MerchantOrderResponse., must be smaller than or equal to 50.');
        }
        if (!is_null($channelCustomerNo) && (strlen($channelCustomerNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $channelCustomerNo when calling MerchantOrderResponse., must be bigger than or equal to 0.');
        }

        $this->container['channelCustomerNo'] = $channelCustomerNo;

        return $this;
    }

    /**
     * Gets billingAddress
     * @return \ChannelEngine\ApiClient\Model\EntitiesAddressModels
     */
    public function getBillingAddress()
    {
        return $this->container['billingAddress'];
    }

    /**
     * Sets billingAddress
     * @param \ChannelEngine\ApiClient\Model\EntitiesAddressModels $billingAddress
     * @return $this
     */
    public function setBillingAddress($billingAddress)
    {
        $this->container['billingAddress'] = $billingAddress;

        return $this;
    }

    /**
     * Gets shippingAddress
     * @return \ChannelEngine\ApiClient\Model\EntitiesAddressModels
     */
    public function getShippingAddress()
    {
        return $this->container['shippingAddress'];
    }

    /**
     * Sets shippingAddress
     * @param \ChannelEngine\ApiClient\Model\EntitiesAddressModels $shippingAddress
     * @return $this
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->container['shippingAddress'] = $shippingAddress;

        return $this;
    }

    /**
     * Gets extraData
     * @return map[string,string]
     */
    public function getExtraData()
    {
        return $this->container['extraData'];
    }

    /**
     * Sets extraData
     * @param map[string,string] $extraData
     * @return $this
     */
    public function setExtraData($extraData)
    {
        $this->container['extraData'] = $extraData;

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


