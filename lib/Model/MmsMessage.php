<?php

/**
 * MmsMessage
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
 * MmsMessage Class Doc Comment
 *
 * @category Class
 * @description Single MMS message model
 * @package  ClickSend
 * @author   ClickSend Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MmsMessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = 'classType';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MmsMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'to'            => 'string',
        'body'          => 'string',
        'subject'       => 'string',
        'from'          => 'string',
        'country'       => 'string',
        'source'        => 'string',
        'list_id'       => 'int',
        'schedule'      => 'int',
        'custom_string' => 'string',
        'from_email'    => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'to'            => null,
        'body'          => null,
        'subject'       => null,
        'from'          => null,
        'country'       => null,
        'source'        => null,
        'list_id'       => 'int32',
        'schedule'      => 'int32',
        'custom_string' => null,
        'from_email'    => null
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
        'to'            => 'to',
        'body'          => 'body',
        'subject'       => 'subject',
        'from'          => 'from',
        'country'       => 'country',
        'source'        => 'source',
        'list_id'       => 'list_id',
        'schedule'      => 'schedule',
        'custom_string' => 'custom_string',
        'from_email'    => 'from_email'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'to'            => 'setTo',
        'body'          => 'setBody',
        'subject'       => 'setSubject',
        'from'          => 'setFrom',
        'country'       => 'setCountry',
        'source'        => 'setSource',
        'list_id'       => 'setListId',
        'schedule'      => 'setSchedule',
        'custom_string' => 'setCustomString',
        'from_email'    => 'setFromEmail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'to'            => 'getTo',
        'body'          => 'getBody',
        'subject'       => 'getSubject',
        'from'          => 'getFrom',
        'country'       => 'getCountry',
        'source'        => 'getSource',
        'list_id'       => 'getListId',
        'schedule'      => 'getSchedule',
        'custom_string' => 'getCustomString',
        'from_email'    => 'getFromEmail'
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
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : 'sdk';
        $this->container['list_id'] = isset($data['list_id']) ? $data['list_id'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : 0;
        $this->container['custom_string'] = isset($data['custom_string']) ? $data['custom_string'] : null;
        $this->container['from_email'] = isset($data['from_email']) ? $data['from_email'] : null;

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

        if ($this->container['body'] === null) {
            $invalidProperties[] = "'body' can't be null";
        }
        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
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
     * Gets to
     *
     * @return string
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string $to Recipient phone number in E.164 format
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body Your message
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject Subject line (max 20 characters)
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string $from Your sender ID
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country Recipient country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source Your method of sending
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets list_id
     *
     * @return int
     */
    public function getListId()
    {
        return $this->container['list_id'];
    }

    /**
     * Sets list_id
     *
     * @param int $list_id Your list ID if sending to a whole list (can be used instead of 'to')
     *
     * @return $this
     */
    public function setListId($list_id)
    {
        $this->container['list_id'] = $list_id;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return int
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param int $schedule Schedule time in unix format (leave blank for immediate delivery)
     *
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets custom_string
     *
     * @return string
     */
    public function getCustomString()
    {
        return $this->container['custom_string'];
    }

    /**
     * Sets custom_string
     *
     * @param string $custom_string Custom string for your reference
     *
     * @return $this
     */
    public function setCustomString($custom_string)
    {
        $this->container['custom_string'] = $custom_string;

        return $this;
    }

    /**
     * Gets from_email
     *
     * @return string
     */
    public function getFromEmail()
    {
        return $this->container['from_email'];
    }

    /**
     * Sets from_email
     *
     * @param string $from_email Email to send replies to
     *
     * @return $this
     */
    public function setFromEmail($from_email)
    {
        $this->container['from_email'] = $from_email;

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
