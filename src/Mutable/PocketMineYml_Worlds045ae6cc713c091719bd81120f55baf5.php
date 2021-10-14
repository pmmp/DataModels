<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\Mutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Worlds045ae6cc713c091719bd81120f55baf5
 * @package pocketmine\datamodels\Mutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Worlds045ae6cc713c091719bd81120f55baf5 implements JSONModelInterface
{
    

    
        /** @var PocketMineYml_Additionalproperty6e6d03580d07907594710323c267b1aa[] Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Worlds045ae6cc713c091719bd81120f55baf5 constructor.
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
        return is_array($value) ? new PocketMineYml_Additionalproperty6e6d03580d07907594710323c267b1aa($value) : $value;
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
            
                
                if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Additionalproperty6e6d03580d07907594710323c267b1aa)) {
                    throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'additional property',
  1 => 'PocketMineYml_Additionalproperty6e6d03580d07907594710323c267b1aa',
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
  0 => 'PocketMineYml_Worlds045ae6cc713c091719bd81120f55baf5',
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
 * @return PocketMineYml_Additionalproperty6e6d03580d07907594710323c267b1aa[]
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
 * @return PocketMineYml_Additionalproperty6e6d03580d07907594710323c267b1aa|null
 */
public function getAdditionalProperty(string $property): ?PocketMineYml_Additionalproperty6e6d03580d07907594710323c267b1aa
{
    return $this->_additionalProperties[$property] ?? null;
}

    
}

// @codeCoverageIgnoreEnd
