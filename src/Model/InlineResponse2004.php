<?php
/**
 * InlineResponse2004
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Efsa\AkeneoApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Akeneo PIM REST API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Efsa\AkeneoApi\Model;

use \ArrayAccess;
use \Efsa\AkeneoApi\ObjectSerializer;

/**
 * InlineResponse2004 Class Doc Comment
 *
 * @category Class
 * @package  Efsa\AkeneoApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineResponse2004 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_4';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allowedExtensions' => 'string[]',
        'code' => 'string',
        'decimalsAllowed' => 'bool',
        'isReadOnly' => 'bool',
        'isRequiredForCompleteness' => 'bool',
        'isRichTextEditor' => 'bool',
        'isTextarea' => 'bool',
        'labels' => '\Efsa\AkeneoApi\Model\ApiRestV1AssetFamiliesAssetFamilyCodeAttributesLabels',
        'maxCharacters' => 'int',
        'maxFileSize' => 'string',
        'maxValue' => 'string',
        'mediaType' => 'string',
        'minValue' => 'string',
        'prefix' => 'string',
        'suffix' => 'string',
        'type' => 'string',
        'validationRegexp' => 'string',
        'validationRule' => 'string',
        'valuePerChannel' => 'bool',
        'valuePerLocale' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'allowedExtensions' => null,
        'code' => null,
        'decimalsAllowed' => null,
        'isReadOnly' => null,
        'isRequiredForCompleteness' => null,
        'isRichTextEditor' => null,
        'isTextarea' => null,
        'labels' => null,
        'maxCharacters' => null,
        'maxFileSize' => null,
        'maxValue' => null,
        'mediaType' => null,
        'minValue' => null,
        'prefix' => null,
        'suffix' => null,
        'type' => null,
        'validationRegexp' => null,
        'validationRule' => null,
        'valuePerChannel' => null,
        'valuePerLocale' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'allowedExtensions' => 'allowed_extensions',
        'code' => 'code',
        'decimalsAllowed' => 'decimals_allowed',
        'isReadOnly' => 'is_read_only',
        'isRequiredForCompleteness' => 'is_required_for_completeness',
        'isRichTextEditor' => 'is_rich_text_editor',
        'isTextarea' => 'is_textarea',
        'labels' => 'labels',
        'maxCharacters' => 'max_characters',
        'maxFileSize' => 'max_file_size',
        'maxValue' => 'max_value',
        'mediaType' => 'media_type',
        'minValue' => 'min_value',
        'prefix' => 'prefix',
        'suffix' => 'suffix',
        'type' => 'type',
        'validationRegexp' => 'validation_regexp',
        'validationRule' => 'validation_rule',
        'valuePerChannel' => 'value_per_channel',
        'valuePerLocale' => 'value_per_locale'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allowedExtensions' => 'setAllowedExtensions',
        'code' => 'setCode',
        'decimalsAllowed' => 'setDecimalsAllowed',
        'isReadOnly' => 'setIsReadOnly',
        'isRequiredForCompleteness' => 'setIsRequiredForCompleteness',
        'isRichTextEditor' => 'setIsRichTextEditor',
        'isTextarea' => 'setIsTextarea',
        'labels' => 'setLabels',
        'maxCharacters' => 'setMaxCharacters',
        'maxFileSize' => 'setMaxFileSize',
        'maxValue' => 'setMaxValue',
        'mediaType' => 'setMediaType',
        'minValue' => 'setMinValue',
        'prefix' => 'setPrefix',
        'suffix' => 'setSuffix',
        'type' => 'setType',
        'validationRegexp' => 'setValidationRegexp',
        'validationRule' => 'setValidationRule',
        'valuePerChannel' => 'setValuePerChannel',
        'valuePerLocale' => 'setValuePerLocale'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allowedExtensions' => 'getAllowedExtensions',
        'code' => 'getCode',
        'decimalsAllowed' => 'getDecimalsAllowed',
        'isReadOnly' => 'getIsReadOnly',
        'isRequiredForCompleteness' => 'getIsRequiredForCompleteness',
        'isRichTextEditor' => 'getIsRichTextEditor',
        'isTextarea' => 'getIsTextarea',
        'labels' => 'getLabels',
        'maxCharacters' => 'getMaxCharacters',
        'maxFileSize' => 'getMaxFileSize',
        'maxValue' => 'getMaxValue',
        'mediaType' => 'getMediaType',
        'minValue' => 'getMinValue',
        'prefix' => 'getPrefix',
        'suffix' => 'getSuffix',
        'type' => 'getType',
        'validationRegexp' => 'getValidationRegexp',
        'validationRule' => 'getValidationRule',
        'valuePerChannel' => 'getValuePerChannel',
        'valuePerLocale' => 'getValuePerLocale'
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
        return self::$openAPIModelName;
    }

    const MEDIA_TYPE_IMAGE = 'image';
    const MEDIA_TYPE_PDF = 'pdf';
    const MEDIA_TYPE_YOUTUBE = 'youtube';
    const MEDIA_TYPE_VIMEO = 'vimeo';
    const MEDIA_TYPE_OTHER = 'other';
    const TYPE_TEXT = 'text';
    const TYPE_MEDIA_LINK = 'media_link';
    const TYPE_NUMBER = 'number';
    const TYPE_MEDIA_FILE = 'media_file';
    const TYPE_SINGLE_OPTION = 'single_option';
    const TYPE_MULTIPLE_OPTIONS = 'multiple_options';
    const TYPE_REFERENCE_ENTITY_SINGLE_LINK = 'reference_entity_single_link';
    const TYPE_REFERENCE_ENTITY_MULTIPLE_LINKS = 'reference_entity_multiple_links';
    const VALIDATION_RULE_EMAIL = 'email';
    const VALIDATION_RULE_URL = 'url';
    const VALIDATION_RULE_REGEXP = 'regexp';
    const VALIDATION_RULE_NONE = 'none';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMediaTypeAllowableValues()
    {
        return [
            self::MEDIA_TYPE_IMAGE,
            self::MEDIA_TYPE_PDF,
            self::MEDIA_TYPE_YOUTUBE,
            self::MEDIA_TYPE_VIMEO,
            self::MEDIA_TYPE_OTHER,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TEXT,
            self::TYPE_MEDIA_LINK,
            self::TYPE_NUMBER,
            self::TYPE_MEDIA_FILE,
            self::TYPE_SINGLE_OPTION,
            self::TYPE_MULTIPLE_OPTIONS,
            self::TYPE_REFERENCE_ENTITY_SINGLE_LINK,
            self::TYPE_REFERENCE_ENTITY_MULTIPLE_LINKS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getValidationRuleAllowableValues()
    {
        return [
            self::VALIDATION_RULE_EMAIL,
            self::VALIDATION_RULE_URL,
            self::VALIDATION_RULE_REGEXP,
            self::VALIDATION_RULE_NONE,
        ];
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
        $this->container['allowedExtensions'] = $data['allowedExtensions'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['decimalsAllowed'] = $data['decimalsAllowed'] ?? false;
        $this->container['isReadOnly'] = $data['isReadOnly'] ?? false;
        $this->container['isRequiredForCompleteness'] = $data['isRequiredForCompleteness'] ?? false;
        $this->container['isRichTextEditor'] = $data['isRichTextEditor'] ?? null;
        $this->container['isTextarea'] = $data['isTextarea'] ?? false;
        $this->container['labels'] = $data['labels'] ?? null;
        $this->container['maxCharacters'] = $data['maxCharacters'] ?? null;
        $this->container['maxFileSize'] = $data['maxFileSize'] ?? null;
        $this->container['maxValue'] = $data['maxValue'] ?? null;
        $this->container['mediaType'] = $data['mediaType'] ?? null;
        $this->container['minValue'] = $data['minValue'] ?? null;
        $this->container['prefix'] = $data['prefix'] ?? null;
        $this->container['suffix'] = $data['suffix'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['validationRegexp'] = $data['validationRegexp'] ?? null;
        $this->container['validationRule'] = $data['validationRule'] ?? VALIDATION_RULE_NONE;
        $this->container['valuePerChannel'] = $data['valuePerChannel'] ?? false;
        $this->container['valuePerLocale'] = $data['valuePerLocale'] ?? false;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['mediaType'] === null) {
            $invalidProperties[] = "'mediaType' can't be null";
        }
        $allowedValues = $this->getMediaTypeAllowableValues();
        if (!is_null($this->container['mediaType']) && !in_array($this->container['mediaType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'mediaType', must be one of '%s'",
                $this->container['mediaType'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getValidationRuleAllowableValues();
        if (!is_null($this->container['validationRule']) && !in_array($this->container['validationRule'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'validationRule', must be one of '%s'",
                $this->container['validationRule'],
                implode("', '", $allowedValues)
            );
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
     * Gets allowedExtensions
     *
     * @return string[]|null
     */
    public function getAllowedExtensions()
    {
        return $this->container['allowedExtensions'];
    }

    /**
     * Sets allowedExtensions
     *
     * @param string[]|null $allowedExtensions Extensions allowed when the attribute type is `media_file`
     *
     * @return self
     */
    public function setAllowedExtensions($allowedExtensions)
    {
        $this->container['allowedExtensions'] = $allowedExtensions;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Attribute code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets decimalsAllowed
     *
     * @return bool|null
     */
    public function getDecimalsAllowed()
    {
        return $this->container['decimalsAllowed'];
    }

    /**
     * Sets decimalsAllowed
     *
     * @param bool|null $decimalsAllowed Whether decimals are allowed when the attribute type is `number`
     *
     * @return self
     */
    public function setDecimalsAllowed($decimalsAllowed)
    {
        $this->container['decimalsAllowed'] = $decimalsAllowed;

        return $this;
    }

    /**
     * Gets isReadOnly
     *
     * @return bool|null
     */
    public function getIsReadOnly()
    {
        return $this->container['isReadOnly'];
    }

    /**
     * Sets isReadOnly
     *
     * @param bool|null $isReadOnly Whether the attribute should be in read only mode only in the UI, but you can still update it with the API
     *
     * @return self
     */
    public function setIsReadOnly($isReadOnly)
    {
        $this->container['isReadOnly'] = $isReadOnly;

        return $this;
    }

    /**
     * Gets isRequiredForCompleteness
     *
     * @return bool|null
     */
    public function getIsRequiredForCompleteness()
    {
        return $this->container['isRequiredForCompleteness'];
    }

    /**
     * Sets isRequiredForCompleteness
     *
     * @param bool|null $isRequiredForCompleteness Whether the attribute should be part of the record's completeness calculation
     *
     * @return self
     */
    public function setIsRequiredForCompleteness($isRequiredForCompleteness)
    {
        $this->container['isRequiredForCompleteness'] = $isRequiredForCompleteness;

        return $this;
    }

    /**
     * Gets isRichTextEditor
     *
     * @return bool|null
     */
    public function getIsRichTextEditor()
    {
        return $this->container['isRichTextEditor'];
    }

    /**
     * Sets isRichTextEditor
     *
     * @param bool|null $isRichTextEditor Whether the UI should display a rich text editor instead of a simple text area when the attribute type is `text`
     *
     * @return self
     */
    public function setIsRichTextEditor($isRichTextEditor)
    {
        $this->container['isRichTextEditor'] = $isRichTextEditor;

        return $this;
    }

    /**
     * Gets isTextarea
     *
     * @return bool|null
     */
    public function getIsTextarea()
    {
        return $this->container['isTextarea'];
    }

    /**
     * Sets isTextarea
     *
     * @param bool|null $isTextarea Whether the UI should display a text area instead of a simple field when the attribute type is `text`
     *
     * @return self
     */
    public function setIsTextarea($isTextarea)
    {
        $this->container['isTextarea'] = $isTextarea;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return \Efsa\AkeneoApi\Model\ApiRestV1AssetFamiliesAssetFamilyCodeAttributesLabels|null
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \Efsa\AkeneoApi\Model\ApiRestV1AssetFamiliesAssetFamilyCodeAttributesLabels|null $labels labels
     *
     * @return self
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets maxCharacters
     *
     * @return int|null
     */
    public function getMaxCharacters()
    {
        return $this->container['maxCharacters'];
    }

    /**
     * Sets maxCharacters
     *
     * @param int|null $maxCharacters Maximum number of characters allowed for the value of the attribute when the attribute type is `text`
     *
     * @return self
     */
    public function setMaxCharacters($maxCharacters)
    {
        $this->container['maxCharacters'] = $maxCharacters;

        return $this;
    }

    /**
     * Gets maxFileSize
     *
     * @return string|null
     */
    public function getMaxFileSize()
    {
        return $this->container['maxFileSize'];
    }

    /**
     * Sets maxFileSize
     *
     * @param string|null $maxFileSize Max file size in MB when the attribute type is `media_file`
     *
     * @return self
     */
    public function setMaxFileSize($maxFileSize)
    {
        $this->container['maxFileSize'] = $maxFileSize;

        return $this;
    }

    /**
     * Gets maxValue
     *
     * @return string|null
     */
    public function getMaxValue()
    {
        return $this->container['maxValue'];
    }

    /**
     * Sets maxValue
     *
     * @param string|null $maxValue Maximum value allowed when the attribute type is `number`
     *
     * @return self
     */
    public function setMaxValue($maxValue)
    {
        $this->container['maxValue'] = $maxValue;

        return $this;
    }

    /**
     * Gets mediaType
     *
     * @return string
     */
    public function getMediaType()
    {
        return $this->container['mediaType'];
    }

    /**
     * Sets mediaType
     *
     * @param string $mediaType For the `media_link` attribute type, it is the type of the media behind the url, to allow its preview in the PIM. For the `media_file` attribute type, it is the type of the file.
     *
     * @return self
     */
    public function setMediaType($mediaType)
    {
        $allowedValues = $this->getMediaTypeAllowableValues();
        if (!in_array($mediaType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'mediaType', must be one of '%s'",
                    $mediaType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mediaType'] = $mediaType;

        return $this;
    }

    /**
     * Gets minValue
     *
     * @return string|null
     */
    public function getMinValue()
    {
        return $this->container['minValue'];
    }

    /**
     * Sets minValue
     *
     * @param string|null $minValue Minimum value allowed when the attribute type is `number`
     *
     * @return self
     */
    public function setMinValue($minValue)
    {
        $this->container['minValue'] = $minValue;

        return $this;
    }

    /**
     * Gets prefix
     *
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     *
     * @param string|null $prefix Prefix of the `media_link` attribute type. The common url root that prefixes the link to the media
     *
     * @return self
     */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;

        return $this;
    }

    /**
     * Gets suffix
     *
     * @return string|null
     */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
     * Sets suffix
     *
     * @param string|null $suffix Suffix of the `media_link` attribute type. The common url suffix for the media
     *
     * @return self
     */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Attribute type
     *
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets validationRegexp
     *
     * @return string|null
     */
    public function getValidationRegexp()
    {
        return $this->container['validationRegexp'];
    }

    /**
     * Sets validationRegexp
     *
     * @param string|null $validationRegexp Regexp expression used to validate the attribute value when the attribute type is `text`
     *
     * @return self
     */
    public function setValidationRegexp($validationRegexp)
    {
        $this->container['validationRegexp'] = $validationRegexp;

        return $this;
    }

    /**
     * Gets validationRule
     *
     * @return string|null
     */
    public function getValidationRule()
    {
        return $this->container['validationRule'];
    }

    /**
     * Sets validationRule
     *
     * @param string|null $validationRule Validation rule type used to validate the attribute value when the attribute type is `text`
     *
     * @return self
     */
    public function setValidationRule($validationRule)
    {
        $allowedValues = $this->getValidationRuleAllowableValues();
        if (!is_null($validationRule) && !in_array($validationRule, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'validationRule', must be one of '%s'",
                    $validationRule,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['validationRule'] = $validationRule;

        return $this;
    }

    /**
     * Gets valuePerChannel
     *
     * @return bool|null
     */
    public function getValuePerChannel()
    {
        return $this->container['valuePerChannel'];
    }

    /**
     * Sets valuePerChannel
     *
     * @param bool|null $valuePerChannel Whether the attribute is scopable, i.e. can have one value by channel
     *
     * @return self
     */
    public function setValuePerChannel($valuePerChannel)
    {
        $this->container['valuePerChannel'] = $valuePerChannel;

        return $this;
    }

    /**
     * Gets valuePerLocale
     *
     * @return bool|null
     */
    public function getValuePerLocale()
    {
        return $this->container['valuePerLocale'];
    }

    /**
     * Sets valuePerLocale
     *
     * @param bool|null $valuePerLocale Whether the attribute is localizable, i.e. can have one value by locale
     *
     * @return self
     */
    public function setValuePerLocale($valuePerLocale)
    {
        $this->container['valuePerLocale'] = $valuePerLocale;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


