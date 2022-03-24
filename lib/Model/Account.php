<?php

/**
 * Account
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
 * Account Class Doc Comment
 *
 * @category Class
 * @description Complete account details needed for the user.
 * @package  ClickSend
 * @author   ClickSend Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Account implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = 'classType';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'username'        => 'string',
        'password'        => 'string',
        'user_phone'      => 'string',
        'user_email'      => 'string',
        'user_first_name' => 'string',
        'user_last_name'  => 'string',
        'account_name'    => 'string',
        'country'         => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'username'        => null,
        'password'        => null,
        'user_phone'      => null,
        'user_email'      => null,
        'user_first_name' => null,
        'user_last_name'  => null,
        'account_name'    => null,
        'country'         => null
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
        'username'        => 'username',
        'password'        => 'password',
        'user_phone'      => 'user_phone',
        'user_email'      => 'user_email',
        'user_first_name' => 'user_first_name',
        'user_last_name'  => 'user_last_name',
        'account_name'    => 'account_name',
        'country'         => 'country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'username'        => 'setUsername',
        'password'        => 'setPassword',
        'user_phone'      => 'setUserPhone',
        'user_email'      => 'setUserEmail',
        'user_first_name' => 'setUserFirstName',
        'user_last_name'  => 'setUserLastName',
        'account_name'    => 'setAccountName',
        'country'         => 'setCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'username'        => 'getUsername',
        'password'        => 'getPassword',
        'user_phone'      => 'getUserPhone',
        'user_email'      => 'getUserEmail',
        'user_first_name' => 'getUserFirstName',
        'user_last_name'  => 'getUserLastName',
        'account_name'    => 'getAccountName',
        'country'         => 'getCountry'
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
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['user_phone'] = isset($data['user_phone']) ? $data['user_phone'] : null;
        $this->container['user_email'] = isset($data['user_email']) ? $data['user_email'] : null;
        $this->container['user_first_name'] = isset($data['user_first_name']) ? $data['user_first_name'] : null;
        $this->container['user_last_name'] = isset($data['user_last_name']) ? $data['user_last_name'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;

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

        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['user_phone'] === null) {
            $invalidProperties[] = "'user_phone' can't be null";
        }
        if ($this->container['user_email'] === null) {
            $invalidProperties[] = "'user_email' can't be null";
        }
        if ($this->container['user_first_name'] === null) {
            $invalidProperties[] = "'user_first_name' can't be null";
        }
        if ($this->container['user_last_name'] === null) {
            $invalidProperties[] = "'user_last_name' can't be null";
        }
        if ($this->container['account_name'] === null) {
            $invalidProperties[] = "'account_name' can't be null";
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
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username Your username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password Your password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets user_phone
     *
     * @return string
     */
    public function getUserPhone()
    {
        return $this->container['user_phone'];
    }

    /**
     * Sets user_phone
     *
     * @param string $user_phone Your phone number in E.164 format.
     *
     * @return $this
     */
    public function setUserPhone($user_phone)
    {
        $this->container['user_phone'] = $user_phone;

        return $this;
    }

    /**
     * Gets user_email
     *
     * @return string
     */
    public function getUserEmail()
    {
        return $this->container['user_email'];
    }

    /**
     * Sets user_email
     *
     * @param string $user_email Your email
     *
     * @return $this
     */
    public function setUserEmail($user_email)
    {
        $this->container['user_email'] = $user_email;

        return $this;
    }

    /**
     * Gets user_first_name
     *
     * @return string
     */
    public function getUserFirstName()
    {
        return $this->container['user_first_name'];
    }

    /**
     * Sets user_first_name
     *
     * @param string $user_first_name Your first name
     *
     * @return $this
     */
    public function setUserFirstName($user_first_name)
    {
        $this->container['user_first_name'] = $user_first_name;

        return $this;
    }

    /**
     * Gets user_last_name
     *
     * @return string
     */
    public function getUserLastName()
    {
        return $this->container['user_last_name'];
    }

    /**
     * Sets user_last_name
     *
     * @param string $user_last_name Your last name
     *
     * @return $this
     */
    public function setUserLastName($user_last_name)
    {
        $this->container['user_last_name'] = $user_last_name;

        return $this;
    }

    /**
     * Gets account_name
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string $account_name Your delivery to value.
     *
     * @return $this
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

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
     * @param string $country Your country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

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
