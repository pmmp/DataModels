<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\mutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\Object\RegularPropertyAsAdditionalPropertyException;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PluginManifest_Permissionsef9664664ee0e1dbf0ec96e57e8e5e3b
 * @package pocketmine\datamodels\mutable 
 *
 * Permissions to be registered by this plugin automatically
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PluginManifest_Permissionsef9664664ee0e1dbf0ec96e57e8e5e3b implements JSONModelInterface
{
    

    
        /** @var PluginManifest_Additionalpropertyde9eadc6f47e91de369c6dd29c0d0096[] Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PluginManifest_Permissionsef9664664ee0e1dbf0ec96e57e8e5e3b constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
            $properties = $value;
            $invalidProperties = [];
        
                if ((function () use ($properties, &$invalidProperties) {
    
    
        $rollbackValues = $this->_additionalProperties;
    

    foreach (array_diff(array_keys($properties), array (
)) as $propertyKey) {
        

        try {
            $value = $properties[$propertyKey];

            

            $value = (function ($value) {
    try {
        return is_array($value) ? new PluginManifest_Additionalpropertyde9eadc6f47e91de369c6dd29c0d0096($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                throw $instantiationException;
            
        

        
    }
})($value)
;

            
                
                if (!is_object($value)) {
                    throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'additional property',
  1 => 'object',
));
                }
            
                
                if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PluginManifest_Additionalpropertyde9eadc6f47e91de369c6dd29c0d0096)) {
                    throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'additional property',
  1 => 'PluginManifest_Additionalpropertyde9eadc6f47e91de369c6dd29c0d0096',
));
                }
            

            

            
                $this->_additionalProperties[$propertyKey] = $value;
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid additional properties
            isset($invalidProperties[$propertyKey])
                ? $invalidProperties[$propertyKey][] = $e
                : $invalidProperties[$propertyKey] = [$e];
        }
    }

    

    
        if (!empty($invalidProperties)) {
            $this->_additionalProperties = $rollbackValues;
        }
    

    return !empty($invalidProperties);
})()) {
                    throw new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'PluginManifest_Permissionsef9664664ee0e1dbf0ec96e57e8e5e3b',
  1 => $invalidProperties,
));
                }
            

            
        }
    

    /**
     * Get the raw input used to set up the model
     *
     * @return array
     */
    public function getRawModelDataInput(): array
    {
        return $this->_rawModelDataInput;
    }

    
        
    

    
        /**
 * Get additional properties
 *
 * @return PluginManifest_Additionalpropertyde9eadc6f47e91de369c6dd29c0d0096[]
 */
public function getAdditionalProperties(): array
{
    return $this->_additionalProperties;
}

    
        /**
 * Get the value of an additional property. If the requested additional property doesn't exists null will be returned
 *
 * @param string $property The key of the additional property
 *
 * @return PluginManifest_Additionalpropertyde9eadc6f47e91de369c6dd29c0d0096|null
 */
public function getAdditionalProperty(string $property): ?PluginManifest_Additionalpropertyde9eadc6f47e91de369c6dd29c0d0096
{
    return $this->_additionalProperties[$property] ?? null;
}

    
        /**
 * Adds or overwrites an additional property on the object
 *
 * @param string $property The property key of the additional property
 * @param PluginManifest_Additionalpropertyde9eadc6f47e91de369c6dd29c0d0096 $value The new value of the additional property
 *
 * @return self
 *
 * @throws ValidationException
 * @throws RegularPropertyAsAdditionalPropertyException
 */
public function setAdditionalProperty(
    string $property,
    PluginManifest_Additionalpropertyde9eadc6f47e91de369c6dd29c0d0096 $value
): self {
    if (in_array($property, array (
))) {
        throw new RegularPropertyAsAdditionalPropertyException($value, $property, self::class);
    }

    if (isset($this->_additionalProperties[$property]) && $this->_additionalProperties[$property] === $value) {
        return $this;
    }

    

    
        

        $addedProperty = [$property => $value];
        $this->executeBaseValidators($addedProperty);

        
    

    $this->_rawModelDataInput[$property] = $value;

    

    return $this;
}

    
        /**
 * Removes an additional property from the object. Returns true if the property has been removed,
 * false if the requested additional property doesn't exist
 *
 * @param string $property The property key of the additional property
 *
 * @return bool
 *
 * 
 */
public function removeAdditionalProperty(string $property): bool
{
    if (isset($this->_patternProperties)) {
        foreach ($this->_patternProperties as $patternHash => $_) {
            if (isset($this->_patternProperties[$patternHash][$property])) {
                unset($this->_patternProperties[$patternHash][$property]);
                unset($this->_rawModelDataInput[$property]);
            }
        }
    }

    if (!array_key_exists($property, $this->_additionalProperties)) {
        return false;
    }

    

    unset($this->_rawModelDataInput[$property]);
    unset($this->_additionalProperties[$property]);

    return true;
}

    
}

// @codeCoverageIgnoreEnd
