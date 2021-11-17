<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\immutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class ResourcePacksYml
 * @package pocketmine\datamodels\immutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class ResourcePacksYml implements JSONModelInterface
{
    

    
        /** @var bool Whether players must use the listed resource packs to join the server */
        protected $forceResources = false;
    
        /** @var string[]|null */
        protected $resourceStack;
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * ResourcePacksYml constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        

        
            
                $this->processForceResources($modelData);
            
        
            
                $this->processResourceStack($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
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
             * Get the value of force_resources.
             *
             * Whether players must use the listed resource packs to join the server
             *
             * @return bool
             */
            public function getForceResources()
                : bool
            {
                

                return $this->forceResources;
            }

            

            /**
             * Extract the value, perform validations and set the property forceResources
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processForceResources(array $modelData): void
            {
                
                    
                        if (!array_key_exists('force_resources', $modelData) && $this->forceResources === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('force_resources', $modelData) ? $modelData['force_resources'] : $this->forceResources;

                

                $this->forceResources = $this->validateForceResources($value, $modelData);
            }

            /**
             * Execute all validators for the property forceResources
             */
            protected function validateForceResources($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'force_resources',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of resource_stack.
             *
             * 
             *
             * @return string[]|null
             */
            public function getResourceStack()
                
            {
                

                return $this->resourceStack;
            }

            

            /**
             * Extract the value, perform validations and set the property resourceStack
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processResourceStack(array $modelData): void
            {
                
                    
                        if (!array_key_exists('resource_stack', $modelData) && $this->resourceStack === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('resource_stack', $modelData) ? $modelData['resource_stack'] : $this->resourceStack;

                

                $this->resourceStack = $this->validateResourceStack($value, $modelData);
            }

            /**
             * Execute all validators for the property resourceStack
             */
            protected function validateResourceStack($value, array $modelData)
            {
                
                    
                    if (!is_array($value) && !is_null($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'resource_stack',
  1 => 
  array (
    0 => 'array',
    1 => 'null',
  ),
));
                    }
                
                    $invalidItems_afbbe501853d57fd368725cbfd7f4922 = [];
                    if (is_array($value) && (function (&$items) use (&$invalidItems_afbbe501853d57fd368725cbfd7f4922) {
    

    foreach ($items as $index => &$value) {
        

        try {
            

            
                
                if (!is_string($value)) {
                    throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array resource_stack',
  1 => 'string',
));
                }
            

            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_afbbe501853d57fd368725cbfd7f4922[$index])
                ? $invalidItems_afbbe501853d57fd368725cbfd7f4922[$index][] = $e
                : $invalidItems_afbbe501853d57fd368725cbfd7f4922[$index] = [$e];
        }
    }

    

    return !empty($invalidItems_afbbe501853d57fd368725cbfd7f4922);
})($value)) {
                        throw new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'resource_stack',
  1 => $invalidItems_afbbe501853d57fd368725cbfd7f4922,
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
