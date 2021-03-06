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
 * TicketType
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
 * TicketType Class Doc Comment
 *
 * @category Class
 * @package  DeskPRO\API
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TicketType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TicketType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'subject' => 'string',
        'department' => 'string',
        'parent' => 'string',
        'language' => 'string',
        'category' => 'string',
        'priority' => 'string',
        'workflow' => 'string',
        'product' => 'string',
        'person' => 'object',
        'agent' => 'object',
        'agent_team' => 'string',
        'organization' => 'string',
        'status' => 'string',
        'is_hold' => 'bool',
        'urgency' => 'float',
        'labels' => 'string[]',
        'cc' => '\DeskPRO\API\Model\TicketParticipantType[]',
        'fields' => 'object',
        'star' => 'object',
        'suppress_user_notify' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'subject' => null,
        'department' => null,
        'parent' => null,
        'language' => null,
        'category' => null,
        'priority' => null,
        'workflow' => null,
        'product' => null,
        'person' => null,
        'agent' => null,
        'agent_team' => null,
        'organization' => null,
        'status' => null,
        'is_hold' => null,
        'urgency' => null,
        'labels' => null,
        'cc' => null,
        'fields' => null,
        'star' => null,
        'suppress_user_notify' => null
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
        'department' => 'department',
        'parent' => 'parent',
        'language' => 'language',
        'category' => 'category',
        'priority' => 'priority',
        'workflow' => 'workflow',
        'product' => 'product',
        'person' => 'person',
        'agent' => 'agent',
        'agent_team' => 'agent_team',
        'organization' => 'organization',
        'status' => 'status',
        'is_hold' => 'is_hold',
        'urgency' => 'urgency',
        'labels' => 'labels',
        'cc' => 'cc',
        'fields' => 'fields',
        'star' => 'star',
        'suppress_user_notify' => 'suppress_user_notify'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subject' => 'setSubject',
        'department' => 'setDepartment',
        'parent' => 'setParent',
        'language' => 'setLanguage',
        'category' => 'setCategory',
        'priority' => 'setPriority',
        'workflow' => 'setWorkflow',
        'product' => 'setProduct',
        'person' => 'setPerson',
        'agent' => 'setAgent',
        'agent_team' => 'setAgentTeam',
        'organization' => 'setOrganization',
        'status' => 'setStatus',
        'is_hold' => 'setIsHold',
        'urgency' => 'setUrgency',
        'labels' => 'setLabels',
        'cc' => 'setCc',
        'fields' => 'setFields',
        'star' => 'setStar',
        'suppress_user_notify' => 'setSuppressUserNotify'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subject' => 'getSubject',
        'department' => 'getDepartment',
        'parent' => 'getParent',
        'language' => 'getLanguage',
        'category' => 'getCategory',
        'priority' => 'getPriority',
        'workflow' => 'getWorkflow',
        'product' => 'getProduct',
        'person' => 'getPerson',
        'agent' => 'getAgent',
        'agent_team' => 'getAgentTeam',
        'organization' => 'getOrganization',
        'status' => 'getStatus',
        'is_hold' => 'getIsHold',
        'urgency' => 'getUrgency',
        'labels' => 'getLabels',
        'cc' => 'getCc',
        'fields' => 'getFields',
        'star' => 'getStar',
        'suppress_user_notify' => 'getSuppressUserNotify'
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
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['workflow'] = isset($data['workflow']) ? $data['workflow'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['person'] = isset($data['person']) ? $data['person'] : null;
        $this->container['agent'] = isset($data['agent']) ? $data['agent'] : null;
        $this->container['agent_team'] = isset($data['agent_team']) ? $data['agent_team'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['is_hold'] = isset($data['is_hold']) ? $data['is_hold'] : null;
        $this->container['urgency'] = isset($data['urgency']) ? $data['urgency'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['cc'] = isset($data['cc']) ? $data['cc'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['star'] = isset($data['star']) ? $data['star'] : null;
        $this->container['suppress_user_notify'] = isset($data['suppress_user_notify']) ? $data['suppress_user_notify'] : null;
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
     * Gets department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param string $department department
     *
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return string
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param string $parent parent
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string $priority priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets workflow
     *
     * @return string
     */
    public function getWorkflow()
    {
        return $this->container['workflow'];
    }

    /**
     * Sets workflow
     *
     * @param string $workflow workflow
     *
     * @return $this
     */
    public function setWorkflow($workflow)
    {
        $this->container['workflow'] = $workflow;

        return $this;
    }

    /**
     * Gets product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

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
     * Gets agent_team
     *
     * @return string
     */
    public function getAgentTeam()
    {
        return $this->container['agent_team'];
    }

    /**
     * Sets agent_team
     *
     * @param string $agent_team agent_team
     *
     * @return $this
     */
    public function setAgentTeam($agent_team)
    {
        $this->container['agent_team'] = $agent_team;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param string $organization organization
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets is_hold
     *
     * @return bool
     */
    public function getIsHold()
    {
        return $this->container['is_hold'];
    }

    /**
     * Sets is_hold
     *
     * @param bool $is_hold is_hold
     *
     * @return $this
     */
    public function setIsHold($is_hold)
    {
        $this->container['is_hold'] = $is_hold;

        return $this;
    }

    /**
     * Gets urgency
     *
     * @return float
     */
    public function getUrgency()
    {
        return $this->container['urgency'];
    }

    /**
     * Sets urgency
     *
     * @param float $urgency urgency
     *
     * @return $this
     */
    public function setUrgency($urgency)
    {
        $this->container['urgency'] = $urgency;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return string[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param string[] $labels labels
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets cc
     *
     * @return \DeskPRO\API\Model\TicketParticipantType[]
     */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
     * Sets cc
     *
     * @param \DeskPRO\API\Model\TicketParticipantType[] $cc cc
     *
     * @return $this
     */
    public function setCc($cc)
    {
        $this->container['cc'] = $cc;

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
     * Gets star
     *
     * @return object
     */
    public function getStar()
    {
        return $this->container['star'];
    }

    /**
     * Sets star
     *
     * @param object $star star
     *
     * @return $this
     */
    public function setStar($star)
    {
        $this->container['star'] = $star;

        return $this;
    }

    /**
     * Gets suppress_user_notify
     *
     * @return bool
     */
    public function getSuppressUserNotify()
    {
        return $this->container['suppress_user_notify'];
    }

    /**
     * Sets suppress_user_notify
     *
     * @param bool $suppress_user_notify suppress_user_notify
     *
     * @return $this
     */
    public function setSuppressUserNotify($suppress_user_notify)
    {
        $this->container['suppress_user_notify'] = $suppress_user_notify;

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


