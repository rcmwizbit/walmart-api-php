<?php

/**
 * CustomerOrderLinesDetails
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */

/**
 * Fulfillment Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Fulfillment;
use Walmart\Models\BaseModel;

/**
 * CustomerOrderLinesDetails Class Doc Comment
 *
 * @category Class

 * @description order lines details

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CustomerOrderLinesDetails extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CustomerOrderLinesDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'fulfillmentType' => 'string',
        'lastModified' => '\DateTime',
        'shippingMethod' => 'string',
        'shippingTier' => 'string',
        'orderLineQuantityInfo' => '\Walmart\Models\MP\US\Fulfillment\GetFulfillmentOrdersStatus200ResponsePayloadInnerOrderLinesInnerOrderLineQuantityInfoInner[]',
        'orderProduct' => '\Walmart\Models\MP\US\Fulfillment\GetFulfillmentOrdersStatus200ResponsePayloadInnerOrderLinesInnerOrderProduct',
        'orderedQty' => '\Walmart\Models\MP\US\Fulfillment\GetFulfillmentOrdersStatus200ResponsePayloadInnerShipmentsInnerShipmentLinesInnerQuantity',
        'customerShipToAddress' => '\Walmart\Models\MP\US\Fulfillment\GetFulfillmentOrdersStatus200ResponsePayloadInnerOrderLinesInnerCustomerShipToAddress'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'fulfillmentType' => null,
        'lastModified' => 'date-time',
        'shippingMethod' => null,
        'shippingTier' => null,
        'orderLineQuantityInfo' => null,
        'orderProduct' => null,
        'orderedQty' => null,
        'customerShipToAddress' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fulfillmentType' => false,
        'lastModified' => false,
        'shippingMethod' => false,
        'shippingTier' => false,
        'orderLineQuantityInfo' => false,
        'orderProduct' => false,
        'orderedQty' => false,
        'customerShipToAddress' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'fulfillmentType' => 'fulfillmentType',
        'lastModified' => 'lastModified',
        'shippingMethod' => 'shippingMethod',
        'shippingTier' => 'shippingTier',
        'orderLineQuantityInfo' => 'orderLineQuantityInfo',
        'orderProduct' => 'orderProduct',
        'orderedQty' => 'orderedQty',
        'customerShipToAddress' => 'customerShipToAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'fulfillmentType' => 'setFulfillmentType',
        'lastModified' => 'setLastModified',
        'shippingMethod' => 'setShippingMethod',
        'shippingTier' => 'setShippingTier',
        'orderLineQuantityInfo' => 'setOrderLineQuantityInfo',
        'orderProduct' => 'setOrderProduct',
        'orderedQty' => 'setOrderedQty',
        'customerShipToAddress' => 'setCustomerShipToAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'fulfillmentType' => 'getFulfillmentType',
        'lastModified' => 'getLastModified',
        'shippingMethod' => 'getShippingMethod',
        'shippingTier' => 'getShippingTier',
        'orderLineQuantityInfo' => 'getOrderLineQuantityInfo',
        'orderProduct' => 'getOrderProduct',
        'orderedQty' => 'getOrderedQty',
        'customerShipToAddress' => 'getCustomerShipToAddress'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('fulfillmentType', $data ?? [], null);
        $this->setIfExists('lastModified', $data ?? [], null);
        $this->setIfExists('shippingMethod', $data ?? [], null);
        $this->setIfExists('shippingTier', $data ?? [], null);
        $this->setIfExists('orderLineQuantityInfo', $data ?? [], null);
        $this->setIfExists('orderProduct', $data ?? [], null);
        $this->setIfExists('orderedQty', $data ?? [], null);
        $this->setIfExists('customerShipToAddress', $data ?? [], null);
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
     * Gets fulfillmentType
     *
     * @return string|null
    
     */
    public function getFulfillmentType()
    {
        return $this->container['fulfillmentType'];
    }

    /**
     * Sets fulfillmentType
     *
     * @param string|null $fulfillmentType fulfillmentType of the order
     *
     * @return self
    
     */
    public function setFulfillmentType($fulfillmentType)
    {
        if (is_null($fulfillmentType)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentType cannot be null');
        }

        $this->container['fulfillmentType'] = $fulfillmentType;
        return $this;
    }

    /**
     * Gets lastModified
     *
     * @return \DateTime|null
    
     */
    public function getLastModified()
    {
        return $this->container['lastModified'];
    }

    /**
     * Sets lastModified
     *
     * @param \DateTime|null $lastModified Last modified date of the order lines
     *
     * @return self
    
     */
    public function setLastModified($lastModified)
    {
        if (is_null($lastModified)) {
            throw new \InvalidArgumentException('non-nullable lastModified cannot be null');
        }

        $this->container['lastModified'] = $lastModified;
        return $this;
    }

    /**
     * Gets shippingMethod
     *
     * @return string|null
    
     */
    public function getShippingMethod()
    {
        return $this->container['shippingMethod'];
    }

    /**
     * Sets shippingMethod
     *
     * @param string|null $shippingMethod Shipping method of the order lines
     *
     * @return self
    
     */
    public function setShippingMethod($shippingMethod)
    {
        if (is_null($shippingMethod)) {
            throw new \InvalidArgumentException('non-nullable shippingMethod cannot be null');
        }

        $this->container['shippingMethod'] = $shippingMethod;
        return $this;
    }

    /**
     * Gets shippingTier
     *
     * @return string|null
    
     */
    public function getShippingTier()
    {
        return $this->container['shippingTier'];
    }

    /**
     * Sets shippingTier
     *
     * @param string|null $shippingTier Shipping tier of the order lines
     *
     * @return self
    
     */
    public function setShippingTier($shippingTier)
    {
        if (is_null($shippingTier)) {
            throw new \InvalidArgumentException('non-nullable shippingTier cannot be null');
        }

        $this->container['shippingTier'] = $shippingTier;
        return $this;
    }

    /**
     * Gets orderLineQuantityInfo
     *
     * @return \Walmart\Models\MP\US\Fulfillment\GetFulfillmentOrdersStatus200ResponsePayloadInnerOrderLinesInnerOrderLineQuantityInfoInner[]|null
    
     */
    public function getOrderLineQuantityInfo()
    {
        return $this->container['orderLineQuantityInfo'];
    }

    /**
     * Sets orderLineQuantityInfo
     *
     * @param \Walmart\Models\MP\US\Fulfillment\GetFulfillmentOrdersStatus200ResponsePayloadInnerOrderLinesInnerOrderLineQuantityInfoInner[]|null $orderLineQuantityInfo Order line quantity information
     *
     * @return self
    
     */
    public function setOrderLineQuantityInfo($orderLineQuantityInfo)
    {
        if (is_null($orderLineQuantityInfo)) {
            throw new \InvalidArgumentException('non-nullable orderLineQuantityInfo cannot be null');
        }

        $this->container['orderLineQuantityInfo'] = $orderLineQuantityInfo;
        return $this;
    }

    /**
     * Gets orderProduct
     *
     * @return \Walmart\Models\MP\US\Fulfillment\GetFulfillmentOrdersStatus200ResponsePayloadInnerOrderLinesInnerOrderProduct|null
    
     */
    public function getOrderProduct()
    {
        return $this->container['orderProduct'];
    }

    /**
     * Sets orderProduct
     *
     * @param \Walmart\Models\MP\US\Fulfillment\GetFulfillmentOrdersStatus200ResponsePayloadInnerOrderLinesInnerOrderProduct|null $orderProduct orderProduct
     *
     * @return self
    
     */
    public function setOrderProduct($orderProduct)
    {
        if (is_null($orderProduct)) {
            throw new \InvalidArgumentException('non-nullable orderProduct cannot be null');
        }

        $this->container['orderProduct'] = $orderProduct;
        return $this;
    }

    /**
     * Gets orderedQty
     *
     * @return \Walmart\Models\MP\US\Fulfillment\GetFulfillmentOrdersStatus200ResponsePayloadInnerShipmentsInnerShipmentLinesInnerQuantity|null
    
     */
    public function getOrderedQty()
    {
        return $this->container['orderedQty'];
    }

    /**
     * Sets orderedQty
     *
     * @param \Walmart\Models\MP\US\Fulfillment\GetFulfillmentOrdersStatus200ResponsePayloadInnerShipmentsInnerShipmentLinesInnerQuantity|null $orderedQty orderedQty
     *
     * @return self
    
     */
    public function setOrderedQty($orderedQty)
    {
        if (is_null($orderedQty)) {
            throw new \InvalidArgumentException('non-nullable orderedQty cannot be null');
        }

        $this->container['orderedQty'] = $orderedQty;
        return $this;
    }

    /**
     * Gets customerShipToAddress
     *
     * @return \Walmart\Models\MP\US\Fulfillment\GetFulfillmentOrdersStatus200ResponsePayloadInnerOrderLinesInnerCustomerShipToAddress|null
    
     */
    public function getCustomerShipToAddress()
    {
        return $this->container['customerShipToAddress'];
    }

    /**
     * Sets customerShipToAddress
     *
     * @param \Walmart\Models\MP\US\Fulfillment\GetFulfillmentOrdersStatus200ResponsePayloadInnerOrderLinesInnerCustomerShipToAddress|null $customerShipToAddress customerShipToAddress
     *
     * @return self
    
     */
    public function setCustomerShipToAddress($customerShipToAddress)
    {
        if (is_null($customerShipToAddress)) {
            throw new \InvalidArgumentException('non-nullable customerShipToAddress cannot be null');
        }

        $this->container['customerShipToAddress'] = $customerShipToAddress;
        return $this;
    }
}

