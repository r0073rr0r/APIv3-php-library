<?php
/**
 * GetWebhook
 *
 * PHP version 5
 *
 * @category Class
 * @package  Sendinblue\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SendinBlue API
 *
 * SendinBlue provide a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://github.com/orgs/sendinblue  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: contact@sendinblue.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Sendinblue\Client\Model;

use \ArrayAccess;

/**
 * GetWebhook Class Doc Comment
 *
 * @category    Class
 * @package     Sendinblue\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetWebhook implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'getWebhook';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'url' => 'string',
        'id' => 'int',
        'description' => 'string',
        'events' => 'string[]',
        'type' => 'string',
        'createdAt' => 'string',
        'modifiedAt' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'url' => 'url',
        'id' => 'int32',
        'description' => null,
        'events' => null,
        'type' => null,
        'createdAt' => null,
        'modifiedAt' => null
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
        'url' => 'url',
        'id' => 'id',
        'description' => 'description',
        'events' => 'events',
        'type' => 'type',
        'createdAt' => 'createdAt',
        'modifiedAt' => 'modifiedAt'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'id' => 'setId',
        'description' => 'setDescription',
        'events' => 'setEvents',
        'type' => 'setType',
        'createdAt' => 'setCreatedAt',
        'modifiedAt' => 'setModifiedAt'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'id' => 'getId',
        'description' => 'getDescription',
        'events' => 'getEvents',
        'type' => 'getType',
        'createdAt' => 'getCreatedAt',
        'modifiedAt' => 'getModifiedAt'
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

    const TYPE_MARKETING = 'marketing';
    const TYPE_TRANSAC = 'transac';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_MARKETING,
            self::TYPE_TRANSAC,
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['modifiedAt'] = isset($data['modifiedAt']) ? $data['modifiedAt'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['url'] === null) {
            $invalid_properties[] = "'url' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalid_properties[] = "'description' can't be null";
        }
        if ($this->container['events'] === null) {
            $invalid_properties[] = "'events' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if ($this->container['createdAt'] === null) {
            $invalid_properties[] = "'createdAt' can't be null";
        }
        if (!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2})?$/", $this->container['createdAt'])) {
            $invalid_properties[] = "invalid value for 'createdAt', must be conform to the pattern /^([1-9]\\d{3}-\\d{2}-\\d{2})?$/.";
        }

        if ($this->container['modifiedAt'] === null) {
            $invalid_properties[] = "'modifiedAt' can't be null";
        }
        if (!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2})?$/", $this->container['modifiedAt'])) {
            $invalid_properties[] = "invalid value for 'modifiedAt', must be conform to the pattern /^([1-9]\\d{3}-\\d{2}-\\d{2})?$/.";
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

        if ($this->container['url'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['description'] === null) {
            return false;
        }
        if ($this->container['events'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        if ($this->container['createdAt'] === null) {
            return false;
        }
        if (!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2})?$/", $this->container['createdAt'])) {
            return false;
        }
        if ($this->container['modifiedAt'] === null) {
            return false;
        }
        if (!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2})?$/", $this->container['modifiedAt'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url URL of the webhook
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
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
     * @param int $id ID of the webhook
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Description of the webhook
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets events
     * @return string[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     * @param string[] $events
     * @return $this
     */
    public function setEvents($events)
    {
        $this->container['events'] = $events;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Type of webhook (marketing or transac)
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets createdAt
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     * @param string $createdAt Creation date of the webhook (YYYY-MM-DD)
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {

        if ((!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2})?$/", $createdAt))) {
            throw new \InvalidArgumentException("invalid value for $createdAt when calling GetWebhook., must conform to the pattern /^([1-9]\\d{3}-\\d{2}-\\d{2})?$/.");
        }

        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets modifiedAt
     * @return string
     */
    public function getModifiedAt()
    {
        return $this->container['modifiedAt'];
    }

    /**
     * Sets modifiedAt
     * @param string $modifiedAt Last modification date of the webhook (YYYY-MM-DD)
     * @return $this
     */
    public function setModifiedAt($modifiedAt)
    {

        if ((!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2})?$/", $modifiedAt))) {
            throw new \InvalidArgumentException("invalid value for $modifiedAt when calling GetWebhook., must conform to the pattern /^([1-9]\\d{3}-\\d{2}-\\d{2})?$/.");
        }

        $this->container['modifiedAt'] = $modifiedAt;

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
            return json_encode(\Sendinblue\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Sendinblue\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


