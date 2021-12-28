<?php
/**
 * InlineObject43
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
 * InlineObject43 Class Doc Comment
 *
 * @category Class
 * @package  Efsa\AkeneoApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InlineObject43 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object_43';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'associations' => '\Efsa\AkeneoApi\Model\ApiRestV1ProductsAssociations',
        'categories' => 'string[]',
        'completenesses' => 'object',
        'created' => 'string',
        'enabled' => 'bool',
        'family' => 'string',
        'groups' => 'string[]',
        'identifier' => 'string',
        'metadata' => '\Efsa\AkeneoApi\Model\ApiRestV1ProductsMetadata',
        'parent' => 'string',
        'qualityScores' => 'object',
        'quantifiedAssociations' => '\Efsa\AkeneoApi\Model\ApiRestV1ProductsQuantifiedAssociations',
        'updated' => 'string',
        'values' => '\Efsa\AkeneoApi\Model\ApiRestV1ProductsValues'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'associations' => null,
        'categories' => null,
        'completenesses' => null,
        'created' => 'dateTime',
        'enabled' => null,
        'family' => null,
        'groups' => null,
        'identifier' => null,
        'metadata' => null,
        'parent' => null,
        'qualityScores' => null,
        'quantifiedAssociations' => null,
        'updated' => 'dateTime',
        'values' => null
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
        'associations' => 'associations',
        'categories' => 'categories',
        'completenesses' => 'completenesses',
        'created' => 'created',
        'enabled' => 'enabled',
        'family' => 'family',
        'groups' => 'groups',
        'identifier' => 'identifier',
        'metadata' => 'metadata',
        'parent' => 'parent',
        'qualityScores' => 'quality_scores',
        'quantifiedAssociations' => 'quantified_associations',
        'updated' => 'updated',
        'values' => 'values'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'associations' => 'setAssociations',
        'categories' => 'setCategories',
        'completenesses' => 'setCompletenesses',
        'created' => 'setCreated',
        'enabled' => 'setEnabled',
        'family' => 'setFamily',
        'groups' => 'setGroups',
        'identifier' => 'setIdentifier',
        'metadata' => 'setMetadata',
        'parent' => 'setParent',
        'qualityScores' => 'setQualityScores',
        'quantifiedAssociations' => 'setQuantifiedAssociations',
        'updated' => 'setUpdated',
        'values' => 'setValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'associations' => 'getAssociations',
        'categories' => 'getCategories',
        'completenesses' => 'getCompletenesses',
        'created' => 'getCreated',
        'enabled' => 'getEnabled',
        'family' => 'getFamily',
        'groups' => 'getGroups',
        'identifier' => 'getIdentifier',
        'metadata' => 'getMetadata',
        'parent' => 'getParent',
        'qualityScores' => 'getQualityScores',
        'quantifiedAssociations' => 'getQuantifiedAssociations',
        'updated' => 'getUpdated',
        'values' => 'getValues'
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
        $this->container['associations'] = $data['associations'] ?? null;
        $this->container['categories'] = $data['categories'] ?? null;
        $this->container['completenesses'] = $data['completenesses'] ?? null;
        $this->container['created'] = $data['created'] ?? null;
        $this->container['enabled'] = $data['enabled'] ?? true;
        $this->container['family'] = $data['family'] ?? 'null only in the case of a non variant product';
        $this->container['groups'] = $data['groups'] ?? null;
        $this->container['identifier'] = $data['identifier'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['parent'] = $data['parent'] ?? 'null';
        $this->container['qualityScores'] = $data['qualityScores'] ?? null;
        $this->container['quantifiedAssociations'] = $data['quantifiedAssociations'] ?? null;
        $this->container['updated'] = $data['updated'] ?? null;
        $this->container['values'] = $data['values'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
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
     * Gets associations
     *
     * @return \Efsa\AkeneoApi\Model\ApiRestV1ProductsAssociations|null
     */
    public function getAssociations()
    {
        return $this->container['associations'];
    }

    /**
     * Sets associations
     *
     * @param \Efsa\AkeneoApi\Model\ApiRestV1ProductsAssociations|null $associations associations
     *
     * @return self
     */
    public function setAssociations($associations)
    {
        $this->container['associations'] = $associations;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return string[]|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param string[]|null $categories Codes of the categories in which the product is classified
     *
     * @return self
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets completenesses
     *
     * @return object|null
     */
    public function getCompletenesses()
    {
        return $this->container['completenesses'];
    }

    /**
     * Sets completenesses
     *
     * @param object|null $completenesses Product completenesses for each channel/locale combination (only available on SaaS platforms, and when the \"with_completenesses\" query parameter is set to \"true\")
     *
     * @return self
     */
    public function setCompletenesses($completenesses)
    {
        $this->container['completenesses'] = $completenesses;

        return $this;
    }

    /**
     * Gets created
     *
     * @return string|null
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param string|null $created Date of creation
     *
     * @return self
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled Whether the product is enabled
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets family
     *
     * @return string|null
     */
    public function getFamily()
    {
        return $this->container['family'];
    }

    /**
     * Sets family
     *
     * @param string|null $family Family code from which the product inherits its attributes and attributes requirements
     *
     * @return self
     */
    public function setFamily($family)
    {
        $this->container['family'] = $family;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return string[]|null
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param string[]|null $groups Codes of the groups to which the product belong
     *
     * @return self
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier Product identifier, i.e. the value of the only `pim_catalog_identifier` attribute
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \Efsa\AkeneoApi\Model\ApiRestV1ProductsMetadata|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \Efsa\AkeneoApi\Model\ApiRestV1ProductsMetadata|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return string|null
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param string|null $parent Code of the parent product model when the product is a variant (only available since the 2.0). This parent can be modified since the 2.3.
     *
     * @return self
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets qualityScores
     *
     * @return object|null
     */
    public function getQualityScores()
    {
        return $this->container['qualityScores'];
    }

    /**
     * Sets qualityScores
     *
     * @param object|null $qualityScores Product quality scores for each channel/locale combination (only available since the 5.0 and when the \"with_quality_scores\" query parameter is set to \"true\")
     *
     * @return self
     */
    public function setQualityScores($qualityScores)
    {
        $this->container['qualityScores'] = $qualityScores;

        return $this;
    }

    /**
     * Gets quantifiedAssociations
     *
     * @return \Efsa\AkeneoApi\Model\ApiRestV1ProductsQuantifiedAssociations|null
     */
    public function getQuantifiedAssociations()
    {
        return $this->container['quantifiedAssociations'];
    }

    /**
     * Sets quantifiedAssociations
     *
     * @param \Efsa\AkeneoApi\Model\ApiRestV1ProductsQuantifiedAssociations|null $quantifiedAssociations quantifiedAssociations
     *
     * @return self
     */
    public function setQuantifiedAssociations($quantifiedAssociations)
    {
        $this->container['quantifiedAssociations'] = $quantifiedAssociations;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return string|null
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param string|null $updated Date of the last update
     *
     * @return self
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets values
     *
     * @return \Efsa\AkeneoApi\Model\ApiRestV1ProductsValues|null
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param \Efsa\AkeneoApi\Model\ApiRestV1ProductsValues|null $values values
     *
     * @return self
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

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


