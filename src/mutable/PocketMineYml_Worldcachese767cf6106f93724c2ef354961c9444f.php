<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\mutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Worldcachese767cf6106f93724c2ef354961c9444f
 * @package pocketmine\datamodels\mutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Worldcachese767cf6106f93724c2ef354961c9444f implements JSONModelInterface
{
    

    
        /** @var bool Whether to allow adding new caches to network chunk packet cache when soft memory limits are exceeded. */
        protected $disableChunkCache = true;
    
        /** @var bool Whether to clear network chunk packet cache when soft memory limit is exceeded. */
        protected $lowMemoryTrigger = true;
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Worldcachese767cf6106f93724c2ef354961c9444f constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processDisableChunkCache($modelData);
            
        
            
                $this->processLowMemoryTrigger($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'disable-chunk-cache',
   'low-memory-trigger',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml_Worldcachese767cf6106f93724c2ef354961c9444f',
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
             * Get the value of disable-chunk-cache.
             *
             * Whether to allow adding new caches to network chunk packet cache when soft memory limits are exceeded.
             *
             * @return bool
             */
            public function getDisableChunkCache()
                : bool
            {
                

                return $this->disableChunkCache;
            }

            
                /**
                 * Set the value of disable-chunk-cache.
                 *
                 * @param bool $disableChunkCache Whether to allow adding new caches to network chunk packet cache when soft memory limits are exceeded.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setDisableChunkCache(
                    bool $disableChunkCache
                ): self {
                    if ($this->disableChunkCache === $disableChunkCache) {
                        return $this;
                    }

                    $value = $modelData['disable-chunk-cache'] = $disableChunkCache;

                    

                    

                    $value = $this->validateDisableChunkCache($value, $modelData);

                    

                    $this->disableChunkCache = $value;
                    $this->_rawModelDataInput['disable-chunk-cache'] = $disableChunkCache;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property disableChunkCache
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processDisableChunkCache(array $modelData): void
            {
                
                    
                        if (!array_key_exists('disable-chunk-cache', $modelData) && $this->disableChunkCache === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('disable-chunk-cache', $modelData) ? $modelData['disable-chunk-cache'] : $this->disableChunkCache;

                

                $this->disableChunkCache = $this->validateDisableChunkCache($value, $modelData);
            }

            /**
             * Execute all validators for the property disableChunkCache
             */
            protected function validateDisableChunkCache($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'disable-chunk-cache',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of low-memory-trigger.
             *
             * Whether to clear network chunk packet cache when soft memory limit is exceeded.
             *
             * @return bool
             */
            public function getLowMemoryTrigger()
                : bool
            {
                

                return $this->lowMemoryTrigger;
            }

            
                /**
                 * Set the value of low-memory-trigger.
                 *
                 * @param bool $lowMemoryTrigger Whether to clear network chunk packet cache when soft memory limit is exceeded.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setLowMemoryTrigger(
                    bool $lowMemoryTrigger
                ): self {
                    if ($this->lowMemoryTrigger === $lowMemoryTrigger) {
                        return $this;
                    }

                    $value = $modelData['low-memory-trigger'] = $lowMemoryTrigger;

                    

                    

                    $value = $this->validateLowMemoryTrigger($value, $modelData);

                    

                    $this->lowMemoryTrigger = $value;
                    $this->_rawModelDataInput['low-memory-trigger'] = $lowMemoryTrigger;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property lowMemoryTrigger
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processLowMemoryTrigger(array $modelData): void
            {
                
                    
                        if (!array_key_exists('low-memory-trigger', $modelData) && $this->lowMemoryTrigger === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('low-memory-trigger', $modelData) ? $modelData['low-memory-trigger'] : $this->lowMemoryTrigger;

                

                $this->lowMemoryTrigger = $this->validateLowMemoryTrigger($value, $modelData);
            }

            /**
             * Execute all validators for the property lowMemoryTrigger
             */
            protected function validateLowMemoryTrigger($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'low-memory-trigger',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
