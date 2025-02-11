<?php

/**
 * VoiceMessage
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
 * VoiceMessage Class Doc Comment
 *
 * @category Class
 * @description VoiceMessage fields: source, to, list_id, body, lang, voice, schedule, custom_string, country
 * @package  ClickSend
 * @author   ClickSend Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VoiceMessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = 'classType';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VoiceMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'to'                => 'string',
        'body'              => 'string',
        'voice'             => 'string',
        'custom_string'     => 'string',
        'country'           => 'string',
        'source'            => 'string',
        'list_id'           => 'int',
        'lang'              => 'string',
        'schedule'          => 'int',
        'require_input'     => 'int',
        'machine_detection' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'to'                => null,
        'body'              => null,
        'voice'             => null,
        'custom_string'     => null,
        'country'           => null,
        'source'            => null,
        'list_id'           => 'int32',
        'lang'              => null,
        'schedule'          => 'int32',
        'require_input'     => 'int32',
        'machine_detection' => 'int32'
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
        'to'                => 'to',
        'body'              => 'body',
        'voice'             => 'voice',
        'custom_string'     => 'custom_string',
        'country'           => 'country',
        'source'            => 'source',
        'list_id'           => 'list_id',
        'lang'              => 'lang',
        'schedule'          => 'schedule',
        'require_input'     => 'require_input',
        'machine_detection' => 'machine_detection'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'to'                => 'setTo',
        'body'              => 'setBody',
        'voice'             => 'setVoice',
        'custom_string'     => 'setCustomString',
        'country'           => 'setCountry',
        'source'            => 'setSource',
        'list_id'           => 'setListId',
        'lang'              => 'setLang',
        'schedule'          => 'setSchedule',
        'require_input'     => 'setRequireInput',
        'machine_detection' => 'setMachineDetection'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'to'                => 'getTo',
        'body'              => 'getBody',
        'voice'             => 'getVoice',
        'custom_string'     => 'getCustomString',
        'country'           => 'getCountry',
        'source'            => 'getSource',
        'list_id'           => 'getListId',
        'lang'              => 'getLang',
        'schedule'          => 'getSchedule',
        'require_input'     => 'getRequireInput',
        'machine_detection' => 'getMachineDetection'
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
        $this->container['voice'] = isset($data['voice']) ? $data['voice'] : null;
        $this->container['custom_string'] = isset($data['custom_string']) ? $data['custom_string'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : 'sdk';
        $this->container['list_id'] = isset($data['list_id']) ? $data['list_id'] : null;
        $this->container['lang'] = isset($data['lang']) ? $data['lang'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['require_input'] = isset($data['require_input']) ? $data['require_input'] : 0;
        $this->container['machine_detection'] = isset($data['machine_detection']) ? $data['machine_detection'] : 0;

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
        if ($this->container['voice'] === null) {
            $invalidProperties[] = "'voice' can't be null";
        }
        if ($this->container['custom_string'] === null) {
            $invalidProperties[] = "'custom_string' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
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
     * @param string $to Your phone number in E.164 format.
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
     * @param string $body Biscuit uv3nlCOjRk croissant chocolate lollipop chocolate muffin.
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets voice
     *
     * @return string
     */
    public function getVoice()
    {
        return $this->container['voice'];
    }

    /**
     * Sets voice
     *
     * @param string $voice Either 'female' or 'male'.
     *
     * @return $this
     */
    public function setVoice($voice)
    {
        $this->container['voice'] = $voice;

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
     * @param string $custom_string Your reference. Will be passed back with all replies and delivery reports.
     *
     * @return $this
     */
    public function setCustomString($custom_string)
    {
        $this->container['custom_string'] = $custom_string;

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
     * @param string $country The country of the recipient.
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
     * @param string $source Your method of sending e.g. 'wordpress', 'php', 'c#'.
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
     * @param int $list_id Your list ID if sending to a whole list. Can be used instead of 'to'.
     *
     * @return $this
     */
    public function setListId($list_id)
    {
        $this->container['list_id'] = $list_id;

        return $this;
    }

    /**
     * Gets lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->container['lang'];
    }

    /**
     * Sets lang
     *
     * @param string $lang au (string, required) - See section on available languages.
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->container['lang'] = $lang;

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
     * @param int $schedule Leave blank for immediate delivery. Your schedule time in unix format http://help.clicksend.com/what-is-a-unix-timestamp
     *
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets require_input
     *
     * @return int
     */
    public function getRequireInput()
    {
        return $this->container['require_input'];
    }

    /**
     * Sets require_input
     *
     * @param int $require_input Whether you want to receive a keypress from the call recipient
     *
     * @return $this
     */
    public function setRequireInput($require_input)
    {
        $this->container['require_input'] = $require_input;

        return $this;
    }

    /**
     * Gets machine_detection
     *
     * @return int
     */
    public function getMachineDetection()
    {
        return $this->container['machine_detection'];
    }

    /**
     * Sets machine_detection
     *
     * @param int $machine_detection Whether to attempt to detect an answering machine or voicemail service and leave a message
     *
     * @return $this
     */
    public function setMachineDetection($machine_detection)
    {
        $this->container['machine_detection'] = $machine_detection;

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
