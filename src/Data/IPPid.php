<?php
namespace QuickBooksOnline\API\Data;

/**
 * @xmlNamespace http://schema.intuit.com/finance/v3
 * @xmlType string
 * @xmlName IPPid
 * @var IPPid
 * @xmlDefinition 
  Product: ALL
  Description: Unique identifier for an Intuit entity.

 */
class IPPid
{

    /**
     * Initializes this object, optionally with pre-defined property values    
     *                                                                         
     * Initializes this object and it's property members, using the dictionary
     * of key/value pairs passed as an optional argument.                      
     *                                                                         
     * @param array $keyValInitializers key/value pairs to be populated into object's properties 
     * @param boolean $verbose specifies whether object should echo warnings   
     */
    public function __construct($keyValInitializers = array(), $verbose = FALSE)
    {
        foreach ($keyValInitializers as $initPropName => $initPropVal) {
            if (property_exists('IPPid', $initPropName) || property_exists('QuickBooksOnline\API\Data\IPPid', $initPropName)) {
                $this->{$initPropName} = $initPropVal;
            } else {
                if ($verbose)
                    echo "Property does not exist ($initPropName) in class (" . get_class($this) . ")";
            }
        }
    }

    /**
     * @xmlType value
     * @var string
     */
    public $value;

    /**
     * The __toString method allows a class to decide how it will react when it is converted to a string.
     *
     * @return string
     * @link http://php.net/manual/en/language.oop5.magic.php#language.oop5.magic.tostring
     */
    public function __toString()
    {
        return $this->value;
    }
}

// end class IPPid
