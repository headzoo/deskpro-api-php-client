<?php
/*
 * DeskPRO (r) has been developed by DeskPRO Ltd. https://www.deskpro.com/
 * a British company located in London, England.
 *
 * All source code and content Copyright (c) 2017, DeskPRO Ltd.
 *
 * The license agreement under which this software is released
 * can be found at https://www.deskpro.com/eula/
 *
 * By using this software, you acknowledge having read the license
 * and agree to be bound thereby.
 *
 * Please note that DeskPRO is not free software. We release the full
 * source code for our software because we trust our users to pay us for
 * the huge investment in time and energy that has gone into both creating
 * this software and supporting our customers. By providing the source code
 * we preserve our customers' ability to modify, audit and learn from our
 * work. We have been developing DeskPRO since 2001, please help us make it
 * another decade.
 *
 * Like the work you see? Think you could make it better? We are always
 * looking for great developers to join us: http://www.deskpro.com/jobs/
 *
 * ~ Thanks, Everyone at Team DeskPRO
 */

/**
 * ChatConversationType
 *
 * PHP version 5
 *
 * @category Class
 * @package  DeskPRO\API
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DeskPRO API
 *
 * DeskPRO API
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DeskPRO\API\Model;

use \ArrayAccess;
use \DeskPRO\API\ObjectSerializer;

/**
 * ChatConversationType Class Doc Comment
 *
 * @category Class
 * @package  DeskPRO\API
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChatConversationType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ChatConversationType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'subject' => 'string',
        'person' => 'object',
        'person_email' => 'string',
        'agent' => 'object',
        'email_validated' => 'bool',
        'fields' => 'object',
        'chat_department' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'subject' => null,
        'person' => null,
        'person_email' => null,
        'agent' => null,
        'email_validated' => null,
        'fields' => null,
        'chat_department' => null
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
        'subject' => 'subject',
        'person' => 'person',
        'person_email' => 'person_email',
        'agent' => 'agent',
        'email_validated' => 'email_validated',
        'fields' => 'fields',
        'chat_department' => 'chat_department'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subject' => 'setSubject',
        'person' => 'setPerson',
        'person_email' => 'setPersonEmail',
        'agent' => 'setAgent',
        'email_validated' => 'setEmailValidated',
        'fields' => 'setFields',
        'chat_department' => 'setChatDepartment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subject' => 'getSubject',
        'person' => 'getPerson',
        'person_email' => 'getPersonEmail',
        'agent' => 'getAgent',
        'email_validated' => 'getEmailValidated',
        'fields' => 'getFields',
        'chat_department' => 'getChatDepartment'
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
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['person'] = isset($data['person']) ? $data['person'] : null;
        $this->container['person_email'] = isset($data['person_email']) ? $data['person_email'] : null;
        $this->container['agent'] = isset($data['agent']) ? $data['agent'] : null;
        $this->container['email_validated'] = isset($data['email_validated']) ? $data['email_validated'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['chat_department'] = isset($data['chat_department']) ? $data['chat_department'] : null;
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
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
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
     * @param string $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets person
     *
     * @return object
     */
    public function getPerson()
    {
        return $this->container['person'];
    }

    /**
     * Sets person
     *
     * @param object $person person
     *
     * @return $this
     */
    public function setPerson($person)
    {
        $this->container['person'] = $person;

        return $this;
    }

    /**
     * Gets person_email
     *
     * @return string
     */
    public function getPersonEmail()
    {
        return $this->container['person_email'];
    }

    /**
     * Sets person_email
     *
     * @param string $person_email person_email
     *
     * @return $this
     */
    public function setPersonEmail($person_email)
    {
        $this->container['person_email'] = $person_email;

        return $this;
    }

    /**
     * Gets agent
     *
     * @return object
     */
    public function getAgent()
    {
        return $this->container['agent'];
    }

    /**
     * Sets agent
     *
     * @param object $agent agent
     *
     * @return $this
     */
    public function setAgent($agent)
    {
        $this->container['agent'] = $agent;

        return $this;
    }

    /**
     * Gets email_validated
     *
     * @return bool
     */
    public function getEmailValidated()
    {
        return $this->container['email_validated'];
    }

    /**
     * Sets email_validated
     *
     * @param bool $email_validated email_validated
     *
     * @return $this
     */
    public function setEmailValidated($email_validated)
    {
        $this->container['email_validated'] = $email_validated;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return object
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param object $fields fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets chat_department
     *
     * @return string
     */
    public function getChatDepartment()
    {
        return $this->container['chat_department'];
    }

    /**
     * Sets chat_department
     *
     * @param string $chat_department chat_department
     *
     * @return $this
     */
    public function setChatDepartment($chat_department)
    {
        $this->container['chat_department'] = $chat_department;

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
     * @return mixed
     */
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


