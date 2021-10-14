<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\mutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Maxchunks0cd690fb928ecfbba82c29cffceba558
 * @package pocketmine\datamodels\mutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Maxchunks0cd690fb928ecfbba82c29cffceba558 implements JSONModelInterface
{
    

    
        /** @var int Cap player render distances when soft memory limits are exceeded. */
        protected $chunkRadius = 4;
    
        /** @var bool Whether to force immediate unloading of unused chunks when soft memory limits are exceeded. */
        protected $triggerChunkCollect = true;
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Maxchunks0cd690fb928ecfbba82c29cffceba558 constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processChunkRadius($modelData);
            
        
            
                $this->processTriggerChunkCollect($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'chunk-radius',
   'trigger-chunk-collect',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml_Maxchunks0cd690fb928ecfbba82c29cffceba558',
  1 => $additionalProperties,
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
             * Get the value of chunk-radius.
             *
             * Cap player render distances when soft memory limits are exceeded.
             *
             * @return int
             */
            public function getChunkRadius()
                : int
            {
                

                return $this->chunkRadius;
            }

            
                /**
                 * Set the value of chunk-radius.
                 *
                 * @param int $chunkRadius Cap player render distances when soft memory limits are exceeded.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setChunkRadius(
                    int $chunkRadius
                ): self {
                    if ($this->chunkRadius === $chunkRadius) {
                        return $this;
                    }

                    $value = $modelData['chunk-radius'] = $chunkRadius;

                    

                    

                    $value = $this->validateChunkRadius($value, $modelData);

                    

                    $this->chunkRadius = $value;
                    $this->_rawModelDataInput['chunk-radius'] = $chunkRadius;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property chunkRadius
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processChunkRadius(array $modelData): void
            {
                
                    
                        if (!array_key_exists('chunk-radius', $modelData) && $this->chunkRadius === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('chunk-radius', $modelData) ? $modelData['chunk-radius'] : $this->chunkRadius;

                

                $this->chunkRadius = $this->validateChunkRadius($value, $modelData);
            }

            /**
             * Execute all validators for the property chunkRadius
             */
            protected function validateChunkRadius($value, array $modelData)
            {
                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'chunk-radius',
  1 => 'int',
));
                    }
                
                    
                    if (is_int($value) && $value < 1) {
                        throw new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'chunk-radius',
  1 => 1,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of trigger-chunk-collect.
             *
             * Whether to force immediate unloading of unused chunks when soft memory limits are exceeded.
             *
             * @return bool
             */
            public function getTriggerChunkCollect()
                : bool
            {
                

                return $this->triggerChunkCollect;
            }

            
                /**
                 * Set the value of trigger-chunk-collect.
                 *
                 * @param bool $triggerChunkCollect Whether to force immediate unloading of unused chunks when soft memory limits are exceeded.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setTriggerChunkCollect(
                    bool $triggerChunkCollect
                ): self {
                    if ($this->triggerChunkCollect === $triggerChunkCollect) {
                        return $this;
                    }

                    $value = $modelData['trigger-chunk-collect'] = $triggerChunkCollect;

                    

                    

                    $value = $this->validateTriggerChunkCollect($value, $modelData);

                    

                    $this->triggerChunkCollect = $value;
                    $this->_rawModelDataInput['trigger-chunk-collect'] = $triggerChunkCollect;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property triggerChunkCollect
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processTriggerChunkCollect(array $modelData): void
            {
                
                    
                        if (!array_key_exists('trigger-chunk-collect', $modelData) && $this->triggerChunkCollect === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('trigger-chunk-collect', $modelData) ? $modelData['trigger-chunk-collect'] : $this->triggerChunkCollect;

                

                $this->triggerChunkCollect = $this->validateTriggerChunkCollect($value, $modelData);
            }

            /**
             * Execute all validators for the property triggerChunkCollect
             */
            protected function validateTriggerChunkCollect($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'trigger-chunk-collect',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
