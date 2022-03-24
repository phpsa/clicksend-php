<?php

/**
 * InboundSMSRule
 *
 * PHP version 5
 *
 * @category Class
 * @package  ClickSend
 * @author   ClickSend Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ClickSend v3 API
 *
 * This is an official SDK for [ClickSend](https://clicksend.com)  Below you will find a current list of the available methods for clicksend.  *NOTE: You will need to create a free account to use the API. You can register [here](https://dashboard.clicksend.com/#/signup/step1/)..*
 *
 * OpenAPI spec version: 3.1
 * Contact: support@clicksend.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * ClickSend Codegen version: 2.4.22-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ClickSend\Model;

use ArrayAccess;
use ClickSend\ObjectSerializer;

/**
 * InboundSMSRule Class Doc Comment
 *
 * @category Class
 * @description Model for Inbound SMS Rules
 * @package  ClickSend
 * @author   ClickSend Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InboundSMSRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = 'classType';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InboundSMSRule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dedicated_number'    => 'string',
        'rule_name'           => 'string',
        'message_search_type' => 'float',
        'message_search_term' => 'string',
        'action'              => 'string',
        'action_address'      => 'string',
        'enabled'             => 'float',
        'webhook_type'        => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dedicated_number'    => null,
        'rule_name'           => null,
        'message_search_type' => null,
        'message_search_term' => null,
        'action'              => null,
        'action_address'      => null,
        'enabled'             => null,
        'webhook_type'        => null
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
        'dedicated_number'    => 'dedicated_number',
        'rule_name'           => 'rule_name',
        'message_search_type' => 'message_search_type',
        'message_search_term' => 'message_search_term',
        'action'              => 'action',
        'action_address'      => 'action_address',
        'enabled'             => 'enabled',
        'webhook_type'        => 'webhook_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dedicated_number'    => 'setDedicatedNumber',
        'rule_name'           => 'setRuleName',
        'message_search_type' => 'setMessageSearchType',
        'message_search_term' => 'setMessageSearchTerm',
        'action'              => 'setAction',
        'action_address'      => 'setActionAddress',
        'enabled'             => 'setEnabled',
        'webhook_type'        => 'setWebhookType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dedicated_number'    => 'getDedicatedNumber',
        'rule_name'           => 'getRuleName',
        'message_search_type' => 'getMessageSearchType',
        'message_search_term' => 'getMessageSearchTerm',
        'action'              => 'getAction',
        'action_address'      => 'getActionAddress',
        'enabled'             => 'getEnabled',
        'webhook_type'        => 'getWebhookType'
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
        $this->container['dedicated_number'] = isset($data['dedicated_number']) ? $data['dedicated_number'] : null;
        $this->container['rule_name'] = isset($data['rule_name']) ? $data['rule_name'] : null;
        $this->container['message_search_type'] = isset($data['message_search_type']) ? $data['message_search_type'] : null;
        $this->container['message_search_term'] = isset($data['message_search_term']) ? $data['message_search_term'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['action_address'] = isset($data['action_address']) ? $data['action_address'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['webhook_type'] = isset($data['webhook_type']) ? $data['webhook_type'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('classType', self::$attributeMap, true);
        $this->container[$discriminator] = static::$swaggerModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['dedicated_number'] === null) {
            $invalidProperties[] = "'dedicated_number' can't be null";
        }
        if ($this->container['rule_name'] === null) {
            $invalidProperties[] = "'rule_name' can't be null";
        }
        if ($this->container['message_search_type'] === null) {
            $invalidProperties[] = "'message_search_type' can't be null";
        }
        if ($this->container['message_search_term'] === null) {
            $invalidProperties[] = "'message_search_term' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['action_address'] === null) {
            $invalidProperties[] = "'action_address' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
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
     * Gets dedicated_number
     *
     * @return string
     */
    public function getDedicatedNumber()
    {
        return $this->container['dedicated_number'];
    }

    /**
     * Sets dedicated_number
     *
     * @param string $dedicated_number Dedicated Number. Can be '*' to apply to all numbers.
     *
     * @return $this
     */
    public function setDedicatedNumber($dedicated_number)
    {
        $this->container['dedicated_number'] = $dedicated_number;

        return $this;
    }

    /**
     * Gets rule_name
     *
     * @return string
     */
    public function getRuleName()
    {
        return $this->container['rule_name'];
    }

    /**
     * Sets rule_name
     *
     * @param string $rule_name Rule Name.
     *
     * @return $this
     */
    public function setRuleName($rule_name)
    {
        $this->container['rule_name'] = $rule_name;

        return $this;
    }

    /**
     * Gets message_search_type
     *
     * @return float
     */
    public function getMessageSearchType()
    {
        return $this->container['message_search_type'];
    }

    /**
     * Sets message_search_type
     *
     * @param float $message_search_type Message Search Type: 0=Any message, 1=starts with, 2=contains, 3=does not contain.
     *
     * @return $this
     */
    public function setMessageSearchType($message_search_type)
    {
        $this->container['message_search_type'] = $message_search_type;

        return $this;
    }

    /**
     * Gets message_search_term
     *
     * @return string
     */
    public function getMessageSearchTerm()
    {
        return $this->container['message_search_term'];
    }

    /**
     * Sets message_search_term
     *
     * @param string $message_search_term Message search term.
     *
     * @return $this
     */
    public function setMessageSearchTerm($message_search_term)
    {
        $this->container['message_search_term'] = $message_search_term;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action Action to be taken (AUTO_REPLY, EMAIL_USER, EMAIL_FIXED, URL, SMS, POLL, GROUP_SMS, MOVE_CONTACT, CREATE_CONTACT, CREATE_CONTACT_PLUS_EMAIL, CREATE_CONTACT_PLUS_NAME_EMAIL CREATE_CONTACT_PLUS_NAME, SMPP, NONE).
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets action_address
     *
     * @return string
     */
    public function getActionAddress()
    {
        return $this->container['action_address'];
    }

    /**
     * Sets action_address
     *
     * @param string $action_address Action address.
     *
     * @return $this
     */
    public function setActionAddress($action_address)
    {
        $this->container['action_address'] = $action_address;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return float
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param float $enabled Enabled: Disabled=0 or Enabled=1.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets webhook_type
     *
     * @return string
     */
    public function getWebhookType()
    {
        return $this->container['webhook_type'];
    }

    /**
     * Sets webhook_type
     *
     * @param string $webhook_type post, get, or json. post by default
     *
     * @return $this
     */
    public function setWebhookType($webhook_type)
    {
        $this->container['webhook_type'] = $webhook_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
