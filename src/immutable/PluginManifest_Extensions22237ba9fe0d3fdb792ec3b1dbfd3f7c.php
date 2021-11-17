<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\immutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PluginManifest_Extensions22237ba9fe0d3fdb792ec3b1dbfd3f7c
 * @package pocketmine\datamodels\immutable 
 *
 * List of extensions (and their version constraints) required by this plugin
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PluginManifest_Extensions22237ba9fe0d3fdb792ec3b1dbfd3f7c implements JSONModelInterface
{
    

    
        /** @var string[][]|string[] Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PluginManifest_Extensions22237ba9fe0d3fdb792ec3b1dbfd3f7c constructor.
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

            

            

            
                
                if (!is_array($value) && !is_string($value)) {
                    throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'additional property',
  1 => 
  array (
    0 => 'array',
    1 => 'string',
  ),
));
                }
            
                $invalidItems_430c91e3f38137953c40e0a11914ca3d = [];
                if (is_array($value) && (function (&$items) use (&$invalidItems_430c91e3f38137953c40e0a11914ca3d) {
    

    foreach ($items as $index => &$value) {
        

        try {
            

            
                
                if (!is_string($value)) {
                    throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array additional property',
  1 => 'string',
));
                }
            

            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_430c91e3f38137953c40e0a11914ca3d[$index])
                ? $invalidItems_430c91e3f38137953c40e0a11914ca3d[$index][] = $e
                : $invalidItems_430c91e3f38137953c40e0a11914ca3d[$index] = [$e];
        }
    }

    

    return !empty($invalidItems_430c91e3f38137953c40e0a11914ca3d);
})($value)) {
                    throw new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'additional property',
  1 => $invalidItems_430c91e3f38137953c40e0a11914ca3d,
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
  0 => 'PluginManifest_Extensions22237ba9fe0d3fdb792ec3b1dbfd3f7c',
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
 * @return string[][]|string[]
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
 * @return string[]|string|null
 */
public function getAdditionalProperty(string $property)
{
    return $this->_additionalProperties[$property] ?? null;
}

    
}

// @codeCoverageIgnoreEnd
