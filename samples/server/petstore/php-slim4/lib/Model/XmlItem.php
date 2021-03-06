<?php

/**
 * OpenAPI Petstore
 * PHP version 7.2
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 */
namespace OpenAPIServer\Model;

use OpenAPIServer\Interfaces\ModelInterface;

/**
 * XmlItem
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */
class XmlItem implements ModelInterface
{
    private const MODEL_SCHEMA = <<<'SCHEMA'
{
  "type" : "object",
  "properties" : {
    "attribute_string" : {
      "type" : "string",
      "example" : "string",
      "xml" : {
        "attribute" : true
      }
    },
    "attribute_number" : {
      "type" : "number",
      "example" : 1.234,
      "xml" : {
        "attribute" : true
      }
    },
    "attribute_integer" : {
      "type" : "integer",
      "example" : -2,
      "xml" : {
        "attribute" : true
      }
    },
    "attribute_boolean" : {
      "type" : "boolean",
      "example" : true,
      "xml" : {
        "attribute" : true
      }
    },
    "wrapped_array" : {
      "type" : "array",
      "xml" : {
        "wrapped" : true
      },
      "items" : {
        "type" : "integer"
      }
    },
    "name_string" : {
      "type" : "string",
      "example" : "string",
      "xml" : {
        "name" : "xml_name_string"
      }
    },
    "name_number" : {
      "type" : "number",
      "example" : 1.234,
      "xml" : {
        "name" : "xml_name_number"
      }
    },
    "name_integer" : {
      "type" : "integer",
      "example" : -2,
      "xml" : {
        "name" : "xml_name_integer"
      }
    },
    "name_boolean" : {
      "type" : "boolean",
      "example" : true,
      "xml" : {
        "name" : "xml_name_boolean"
      }
    },
    "name_array" : {
      "type" : "array",
      "items" : {
        "type" : "integer",
        "xml" : {
          "name" : "xml_name_array_item"
        }
      }
    },
    "name_wrapped_array" : {
      "type" : "array",
      "xml" : {
        "name" : "xml_name_wrapped_array",
        "wrapped" : true
      },
      "items" : {
        "type" : "integer",
        "xml" : {
          "name" : "xml_name_wrapped_array_item"
        }
      }
    },
    "prefix_string" : {
      "type" : "string",
      "example" : "string",
      "xml" : {
        "prefix" : "ab"
      }
    },
    "prefix_number" : {
      "type" : "number",
      "example" : 1.234,
      "xml" : {
        "prefix" : "cd"
      }
    },
    "prefix_integer" : {
      "type" : "integer",
      "example" : -2,
      "xml" : {
        "prefix" : "ef"
      }
    },
    "prefix_boolean" : {
      "type" : "boolean",
      "example" : true,
      "xml" : {
        "prefix" : "gh"
      }
    },
    "prefix_array" : {
      "type" : "array",
      "items" : {
        "type" : "integer",
        "xml" : {
          "prefix" : "ij"
        }
      }
    },
    "prefix_wrapped_array" : {
      "type" : "array",
      "xml" : {
        "prefix" : "kl",
        "wrapped" : true
      },
      "items" : {
        "type" : "integer",
        "xml" : {
          "prefix" : "mn"
        }
      }
    },
    "namespace_string" : {
      "type" : "string",
      "example" : "string",
      "xml" : {
        "namespace" : "http://a.com/schema"
      }
    },
    "namespace_number" : {
      "type" : "number",
      "example" : 1.234,
      "xml" : {
        "namespace" : "http://b.com/schema"
      }
    },
    "namespace_integer" : {
      "type" : "integer",
      "example" : -2,
      "xml" : {
        "namespace" : "http://c.com/schema"
      }
    },
    "namespace_boolean" : {
      "type" : "boolean",
      "example" : true,
      "xml" : {
        "namespace" : "http://d.com/schema"
      }
    },
    "namespace_array" : {
      "type" : "array",
      "items" : {
        "type" : "integer",
        "xml" : {
          "namespace" : "http://e.com/schema"
        }
      }
    },
    "namespace_wrapped_array" : {
      "type" : "array",
      "xml" : {
        "namespace" : "http://f.com/schema",
        "wrapped" : true
      },
      "items" : {
        "type" : "integer",
        "xml" : {
          "namespace" : "http://g.com/schema"
        }
      }
    },
    "prefix_ns_string" : {
      "type" : "string",
      "example" : "string",
      "xml" : {
        "namespace" : "http://a.com/schema",
        "prefix" : "a"
      }
    },
    "prefix_ns_number" : {
      "type" : "number",
      "example" : 1.234,
      "xml" : {
        "namespace" : "http://b.com/schema",
        "prefix" : "b"
      }
    },
    "prefix_ns_integer" : {
      "type" : "integer",
      "example" : -2,
      "xml" : {
        "namespace" : "http://c.com/schema",
        "prefix" : "c"
      }
    },
    "prefix_ns_boolean" : {
      "type" : "boolean",
      "example" : true,
      "xml" : {
        "namespace" : "http://d.com/schema",
        "prefix" : "d"
      }
    },
    "prefix_ns_array" : {
      "type" : "array",
      "items" : {
        "type" : "integer",
        "xml" : {
          "namespace" : "http://e.com/schema",
          "prefix" : "e"
        }
      }
    },
    "prefix_ns_wrapped_array" : {
      "type" : "array",
      "xml" : {
        "namespace" : "http://f.com/schema",
        "prefix" : "f",
        "wrapped" : true
      },
      "items" : {
        "type" : "integer",
        "xml" : {
          "namespace" : "http://g.com/schema",
          "prefix" : "g"
        }
      }
    }
  },
  "xml" : {
    "namespace" : "http://a.com/schema",
    "prefix" : "pre"
  }
}
SCHEMA;

    /** @var string $attributeString */
    private $attributeString;

    /** @var float $attributeNumber */
    private $attributeNumber;

    /** @var int $attributeInteger */
    private $attributeInteger;

    /** @var bool $attributeBoolean */
    private $attributeBoolean;

    /** @var int[] $wrappedArray */
    private $wrappedArray;

    /** @var string $nameString */
    private $nameString;

    /** @var float $nameNumber */
    private $nameNumber;

    /** @var int $nameInteger */
    private $nameInteger;

    /** @var bool $nameBoolean */
    private $nameBoolean;

    /** @var int[] $nameArray */
    private $nameArray;

    /** @var int[] $nameWrappedArray */
    private $nameWrappedArray;

    /** @var string $prefixString */
    private $prefixString;

    /** @var float $prefixNumber */
    private $prefixNumber;

    /** @var int $prefixInteger */
    private $prefixInteger;

    /** @var bool $prefixBoolean */
    private $prefixBoolean;

    /** @var int[] $prefixArray */
    private $prefixArray;

    /** @var int[] $prefixWrappedArray */
    private $prefixWrappedArray;

    /** @var string $namespaceString */
    private $namespaceString;

    /** @var float $namespaceNumber */
    private $namespaceNumber;

    /** @var int $namespaceInteger */
    private $namespaceInteger;

    /** @var bool $namespaceBoolean */
    private $namespaceBoolean;

    /** @var int[] $namespaceArray */
    private $namespaceArray;

    /** @var int[] $namespaceWrappedArray */
    private $namespaceWrappedArray;

    /** @var string $prefixNsString */
    private $prefixNsString;

    /** @var float $prefixNsNumber */
    private $prefixNsNumber;

    /** @var int $prefixNsInteger */
    private $prefixNsInteger;

    /** @var bool $prefixNsBoolean */
    private $prefixNsBoolean;

    /** @var int[] $prefixNsArray */
    private $prefixNsArray;

    /** @var int[] $prefixNsWrappedArray */
    private $prefixNsWrappedArray;

    /**
     * Returns model schema.
     *
     * @param bool $assoc When TRUE, returned objects will be converted into associative arrays. Default FALSE.
     *
     * @return array
     */
    public static function getOpenApiSchema($assoc = false)
    {
        return json_decode(static::MODEL_SCHEMA, $assoc);
    }
}
