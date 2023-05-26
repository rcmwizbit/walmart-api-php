<?php

/**
 * InboundPreview200ResponsePayloadInner
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
 * InboundPreview200ResponsePayloadInner Class Doc Comment
 *
 * @category Class

 * @description Response payload.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class InboundPreview200ResponsePayloadInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'inboundPreview_200_response_payload_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'inboundOrderId' => 'string',
        'previews' => '\Walmart\Models\MP\US\Fulfillment\InboundPreview200ResponsePayloadInnerPreviewsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'inboundOrderId' => null,
        'previews' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'inboundOrderId' => false,
        'previews' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'inboundOrderId' => 'inboundOrderId',
        'previews' => 'previews'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'inboundOrderId' => 'setInboundOrderId',
        'previews' => 'setPreviews'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'inboundOrderId' => 'getInboundOrderId',
        'previews' => 'getPreviews'
    ];/**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('inboundOrderId', $data ?? [], null);
        $this->setIfExists('previews', $data ?? [], null);
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
     * Gets inboundOrderId
     *
     * @return string|null
    
     */
    public function getInboundOrderId()
    {
        return $this->container['inboundOrderId'];
    }

    /**
     * Sets inboundOrderId
     *
     * @param string|null $inboundOrderId Unique shipment identifier
     *
     * @return self
    
     */
    public function setInboundOrderId($inboundOrderId)
    {
        if (is_null($inboundOrderId)) {
            throw new \InvalidArgumentException('non-nullable inboundOrderId cannot be null');
        }

        $this->container['inboundOrderId'] = $inboundOrderId;
        return $this;
    }

    /**
     * Gets previews
     *
     * @return \Walmart\Models\MP\US\Fulfillment\InboundPreview200ResponsePayloadInnerPreviewsInner[]|null
    
     */
    public function getPreviews()
    {
        return $this->container['previews'];
    }

    /**
     * Sets previews
     *
     * @param \Walmart\Models\MP\US\Fulfillment\InboundPreview200ResponsePayloadInnerPreviewsInner[]|null $previews List of preview responses
     *
     * @return self
    
     */
    public function setPreviews($previews)
    {
        if (is_null($previews)) {
            throw new \InvalidArgumentException('non-nullable previews cannot be null');
        }

        $this->container['previews'] = $previews;
        return $this;
    }
}

