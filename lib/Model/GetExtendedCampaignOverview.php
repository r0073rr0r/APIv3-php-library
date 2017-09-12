<?php
/**
 * GetExtendedCampaignOverview
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
 * GetExtendedCampaignOverview Class Doc Comment
 *
 * @category    Class
 * @package     Sendinblue\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GetExtendedCampaignOverview implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'getExtendedCampaignOverview';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'subject' => 'string',
        'type' => 'string',
        'status' => 'string',
        'scheduledAt' => 'string',
        'testSent' => 'bool',
        'header' => 'string',
        'footer' => 'string',
        'sender' => '\Sendinblue\Client\Model\GetExtendedCampaignOverviewSender',
        'replyTo' => 'string',
        'toField' => 'string',
        'htmlContent' => 'string',
        'shareLink' => 'string',
        'tag' => 'string',
        'createdAt' => 'string',
        'modifiedAt' => 'string',
        'inlineImageActivation' => 'bool',
        'mirrorActive' => 'bool',
        'recurring' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'name' => null,
        'subject' => null,
        'type' => null,
        'status' => null,
        'scheduledAt' => null,
        'testSent' => null,
        'header' => null,
        'footer' => null,
        'sender' => null,
        'replyTo' => 'email',
        'toField' => 'email',
        'htmlContent' => null,
        'shareLink' => 'url',
        'tag' => null,
        'createdAt' => null,
        'modifiedAt' => null,
        'inlineImageActivation' => null,
        'mirrorActive' => null,
        'recurring' => null
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
        'id' => 'id',
        'name' => 'name',
        'subject' => 'subject',
        'type' => 'type',
        'status' => 'status',
        'scheduledAt' => 'scheduledAt',
        'testSent' => 'testSent',
        'header' => 'header',
        'footer' => 'footer',
        'sender' => 'sender',
        'replyTo' => 'replyTo',
        'toField' => 'toField',
        'htmlContent' => 'htmlContent',
        'shareLink' => 'shareLink',
        'tag' => 'tag',
        'createdAt' => 'createdAt',
        'modifiedAt' => 'modifiedAt',
        'inlineImageActivation' => 'inlineImageActivation',
        'mirrorActive' => 'mirrorActive',
        'recurring' => 'recurring'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'subject' => 'setSubject',
        'type' => 'setType',
        'status' => 'setStatus',
        'scheduledAt' => 'setScheduledAt',
        'testSent' => 'setTestSent',
        'header' => 'setHeader',
        'footer' => 'setFooter',
        'sender' => 'setSender',
        'replyTo' => 'setReplyTo',
        'toField' => 'setToField',
        'htmlContent' => 'setHtmlContent',
        'shareLink' => 'setShareLink',
        'tag' => 'setTag',
        'createdAt' => 'setCreatedAt',
        'modifiedAt' => 'setModifiedAt',
        'inlineImageActivation' => 'setInlineImageActivation',
        'mirrorActive' => 'setMirrorActive',
        'recurring' => 'setRecurring'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'subject' => 'getSubject',
        'type' => 'getType',
        'status' => 'getStatus',
        'scheduledAt' => 'getScheduledAt',
        'testSent' => 'getTestSent',
        'header' => 'getHeader',
        'footer' => 'getFooter',
        'sender' => 'getSender',
        'replyTo' => 'getReplyTo',
        'toField' => 'getToField',
        'htmlContent' => 'getHtmlContent',
        'shareLink' => 'getShareLink',
        'tag' => 'getTag',
        'createdAt' => 'getCreatedAt',
        'modifiedAt' => 'getModifiedAt',
        'inlineImageActivation' => 'getInlineImageActivation',
        'mirrorActive' => 'getMirrorActive',
        'recurring' => 'getRecurring'
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

    const TYPE_CLASSIC = 'classic';
    const TYPE_TRIGGER = 'trigger';
    const STATUS_DRAFT = 'draft';
    const STATUS_SENT = 'sent';
    const STATUS_ARCHIVE = 'archive';
    const STATUS_QUEUED = 'queued';
    const STATUS_SUSPENDED = 'suspended';
    const STATUS_IN_PROCESS = 'in_process';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CLASSIC,
            self::TYPE_TRIGGER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
            self::STATUS_SENT,
            self::STATUS_ARCHIVE,
            self::STATUS_QUEUED,
            self::STATUS_SUSPENDED,
            self::STATUS_IN_PROCESS,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['scheduledAt'] = isset($data['scheduledAt']) ? $data['scheduledAt'] : null;
        $this->container['testSent'] = isset($data['testSent']) ? $data['testSent'] : null;
        $this->container['header'] = isset($data['header']) ? $data['header'] : null;
        $this->container['footer'] = isset($data['footer']) ? $data['footer'] : null;
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['replyTo'] = isset($data['replyTo']) ? $data['replyTo'] : null;
        $this->container['toField'] = isset($data['toField']) ? $data['toField'] : null;
        $this->container['htmlContent'] = isset($data['htmlContent']) ? $data['htmlContent'] : null;
        $this->container['shareLink'] = isset($data['shareLink']) ? $data['shareLink'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['modifiedAt'] = isset($data['modifiedAt']) ? $data['modifiedAt'] : null;
        $this->container['inlineImageActivation'] = isset($data['inlineImageActivation']) ? $data['inlineImageActivation'] : null;
        $this->container['mirrorActive'] = isset($data['mirrorActive']) ? $data['mirrorActive'] : null;
        $this->container['recurring'] = isset($data['recurring']) ? $data['recurring'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['subject'] === null) {
            $invalid_properties[] = "'subject' can't be null";
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

        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if (!is_null($this->container['scheduledAt']) && !preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/", $this->container['scheduledAt'])) {
            $invalid_properties[] = "invalid value for 'scheduledAt', must be conform to the pattern /^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/.";
        }

        if ($this->container['testSent'] === null) {
            $invalid_properties[] = "'testSent' can't be null";
        }
        if ($this->container['header'] === null) {
            $invalid_properties[] = "'header' can't be null";
        }
        if ($this->container['footer'] === null) {
            $invalid_properties[] = "'footer' can't be null";
        }
        if ($this->container['replyTo'] === null) {
            $invalid_properties[] = "'replyTo' can't be null";
        }
        if ($this->container['toField'] === null) {
            $invalid_properties[] = "'toField' can't be null";
        }
        if ($this->container['htmlContent'] === null) {
            $invalid_properties[] = "'htmlContent' can't be null";
        }
        if ($this->container['shareLink'] === null) {
            $invalid_properties[] = "'shareLink' can't be null";
        }
        if ($this->container['tag'] === null) {
            $invalid_properties[] = "'tag' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalid_properties[] = "'createdAt' can't be null";
        }
        if (!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/", $this->container['createdAt'])) {
            $invalid_properties[] = "invalid value for 'createdAt', must be conform to the pattern /^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/.";
        }

        if ($this->container['modifiedAt'] === null) {
            $invalid_properties[] = "'modifiedAt' can't be null";
        }
        if (!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/", $this->container['modifiedAt'])) {
            $invalid_properties[] = "invalid value for 'modifiedAt', must be conform to the pattern /^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/.";
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['subject'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        if (!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/", $this->container['scheduledAt'])) {
            return false;
        }
        if ($this->container['testSent'] === null) {
            return false;
        }
        if ($this->container['header'] === null) {
            return false;
        }
        if ($this->container['footer'] === null) {
            return false;
        }
        if ($this->container['replyTo'] === null) {
            return false;
        }
        if ($this->container['toField'] === null) {
            return false;
        }
        if ($this->container['htmlContent'] === null) {
            return false;
        }
        if ($this->container['shareLink'] === null) {
            return false;
        }
        if ($this->container['tag'] === null) {
            return false;
        }
        if ($this->container['createdAt'] === null) {
            return false;
        }
        if (!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/", $this->container['createdAt'])) {
            return false;
        }
        if ($this->container['modifiedAt'] === null) {
            return false;
        }
        if (!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/", $this->container['modifiedAt'])) {
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
     * @param int $id ID of the campaign
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of the campaign
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets subject
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     * @param string $subject Subject of the campaign
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

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
     * @param string $type Type of campaign
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
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status of the campaign
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($status, $allowed_values)) {
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
     * Gets scheduledAt
     * @return string
     */
    public function getScheduledAt()
    {
        return $this->container['scheduledAt'];
    }

    /**
     * Sets scheduledAt
     * @param string $scheduledAt Date on which campaign is scheduled (YYYY-MM-DD HH:mm:ss)
     * @return $this
     */
    public function setScheduledAt($scheduledAt)
    {

        if (!is_null($scheduledAt) && (!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/", $scheduledAt))) {
            throw new \InvalidArgumentException("invalid value for $scheduledAt when calling GetExtendedCampaignOverview., must conform to the pattern /^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/.");
        }

        $this->container['scheduledAt'] = $scheduledAt;

        return $this;
    }

    /**
     * Gets testSent
     * @return bool
     */
    public function getTestSent()
    {
        return $this->container['testSent'];
    }

    /**
     * Sets testSent
     * @param bool $testSent Retrieved the status of test email sending. (true=Test email has been sent  false=Test email has not been sent)
     * @return $this
     */
    public function setTestSent($testSent)
    {
        $this->container['testSent'] = $testSent;

        return $this;
    }

    /**
     * Gets header
     * @return string
     */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
     * Sets header
     * @param string $header Header of the campaign
     * @return $this
     */
    public function setHeader($header)
    {
        $this->container['header'] = $header;

        return $this;
    }

    /**
     * Gets footer
     * @return string
     */
    public function getFooter()
    {
        return $this->container['footer'];
    }

    /**
     * Sets footer
     * @param string $footer Footer of the campaign
     * @return $this
     */
    public function setFooter($footer)
    {
        $this->container['footer'] = $footer;

        return $this;
    }

    /**
     * Gets sender
     * @return \Sendinblue\Client\Model\GetExtendedCampaignOverviewSender
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     * @param \Sendinblue\Client\Model\GetExtendedCampaignOverviewSender $sender
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets replyTo
     * @return string
     */
    public function getReplyTo()
    {
        return $this->container['replyTo'];
    }

    /**
     * Sets replyTo
     * @param string $replyTo Email defined as the \"Reply to\" of the campaign
     * @return $this
     */
    public function setReplyTo($replyTo)
    {
        $this->container['replyTo'] = $replyTo;

        return $this;
    }

    /**
     * Gets toField
     * @return string
     */
    public function getToField()
    {
        return $this->container['toField'];
    }

    /**
     * Sets toField
     * @param string $toField Customisation of the \"to\" field of the campaign
     * @return $this
     */
    public function setToField($toField)
    {
        $this->container['toField'] = $toField;

        return $this;
    }

    /**
     * Gets htmlContent
     * @return string
     */
    public function getHtmlContent()
    {
        return $this->container['htmlContent'];
    }

    /**
     * Sets htmlContent
     * @param string $htmlContent HTML content of the campaign
     * @return $this
     */
    public function setHtmlContent($htmlContent)
    {
        $this->container['htmlContent'] = $htmlContent;

        return $this;
    }

    /**
     * Gets shareLink
     * @return string
     */
    public function getShareLink()
    {
        return $this->container['shareLink'];
    }

    /**
     * Sets shareLink
     * @param string $shareLink Link to share the campaign on social medias
     * @return $this
     */
    public function setShareLink($shareLink)
    {
        $this->container['shareLink'] = $shareLink;

        return $this;
    }

    /**
     * Gets tag
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     * @param string $tag Tag of the campaign
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

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
     * @param string $createdAt Creation date of the campaign (YYYY-MM-DD HH:mm:ss)
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {

        if ((!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/", $createdAt))) {
            throw new \InvalidArgumentException("invalid value for $createdAt when calling GetExtendedCampaignOverview., must conform to the pattern /^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/.");
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
     * @param string $modifiedAt Date of last modification of the campaign (YYYY-MM-DD HH:mm:ss)
     * @return $this
     */
    public function setModifiedAt($modifiedAt)
    {

        if ((!preg_match("/^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/", $modifiedAt))) {
            throw new \InvalidArgumentException("invalid value for $modifiedAt when calling GetExtendedCampaignOverview., must conform to the pattern /^([1-9]\\d{3}-\\d{2}-\\d{2} [0-2]\\d:[0-5]\\d:[0-5]\\d)?$/.");
        }

        $this->container['modifiedAt'] = $modifiedAt;

        return $this;
    }

    /**
     * Gets inlineImageActivation
     * @return bool
     */
    public function getInlineImageActivation()
    {
        return $this->container['inlineImageActivation'];
    }

    /**
     * Sets inlineImageActivation
     * @param bool $inlineImageActivation Status of inline image. inlineImageActivation = false means image can’t be embedded, & inlineImageActivation = true means image can be embedded, in the email.
     * @return $this
     */
    public function setInlineImageActivation($inlineImageActivation)
    {
        $this->container['inlineImageActivation'] = $inlineImageActivation;

        return $this;
    }

    /**
     * Gets mirrorActive
     * @return bool
     */
    public function getMirrorActive()
    {
        return $this->container['mirrorActive'];
    }

    /**
     * Sets mirrorActive
     * @param bool $mirrorActive Status of mirror links in campaign. mirrorActive = false means mirror links are deactivated, & mirrorActive = true means mirror links are activated, in the campaign
     * @return $this
     */
    public function setMirrorActive($mirrorActive)
    {
        $this->container['mirrorActive'] = $mirrorActive;

        return $this;
    }

    /**
     * Gets recurring
     * @return bool
     */
    public function getRecurring()
    {
        return $this->container['recurring'];
    }

    /**
     * Sets recurring
     * @param bool $recurring FOR TRIGGER ONLY ! Type of trigger campaign.recurring = false means contact can receive the same Trigger campaign only once, & recurring = true means contact can receive the same Trigger campaign several times
     * @return $this
     */
    public function setRecurring($recurring)
    {
        $this->container['recurring'] = $recurring;

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


