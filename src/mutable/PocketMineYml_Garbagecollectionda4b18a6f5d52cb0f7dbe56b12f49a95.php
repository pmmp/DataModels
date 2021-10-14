<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\mutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Garbagecollectionda4b18a6f5d52cb0f7dbe56b12f49a95
 * @package pocketmine\datamodels\mutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Garbagecollectionda4b18a6f5d52cb0f7dbe56b12f49a95 implements JSONModelInterface
{
    

    
        /** @var int Period in server ticks to run memory garbage collection (default 30 minutes). */
        protected $period = 36000;
    
        /** @var bool Whether to collect garbage from async workers. */
        protected $collectAsyncWorker = true;
    
        /** @var bool Trigger garbage collection when soft memory limits are exceeded */
        protected $lowMemoryTrigger = true;
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Garbagecollectionda4b18a6f5d52cb0f7dbe56b12f49a95 constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processPeriod($modelData);
            
        
            
                $this->processCollectAsyncWorker($modelData);
            
        
            
                $this->processLowMemoryTrigger($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'period',
   'collect-async-worker',
   'low-memory-trigger',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml_Garbagecollectionda4b18a6f5d52cb0f7dbe56b12f49a95',
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
             * Get the value of period.
             *
             * Period in server ticks to run memory garbage collection (default 30 minutes).
             *
             * @return int
             */
            public function getPeriod()
                : int
            {
                

                return $this->period;
            }

            
                /**
                 * Set the value of period.
                 *
                 * @param int $period Period in server ticks to run memory garbage collection (default 30 minutes).
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setPeriod(
                    int $period
                ): self {
                    if ($this->period === $period) {
                        return $this;
                    }

                    $value = $modelData['period'] = $period;

                    

                    

                    $value = $this->validatePeriod($value, $modelData);

                    

                    $this->period = $value;
                    $this->_rawModelDataInput['period'] = $period;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property period
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processPeriod(array $modelData): void
            {
                
                    
                        if (!array_key_exists('period', $modelData) && $this->period === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('period', $modelData) ? $modelData['period'] : $this->period;

                

                $this->period = $this->validatePeriod($value, $modelData);
            }

            /**
             * Execute all validators for the property period
             */
            protected function validatePeriod($value, array $modelData)
            {
                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'period',
  1 => 'int',
));
                    }
                
                    
                    if (is_int($value) && $value < 1) {
                        throw new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'period',
  1 => 1,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of collect-async-worker.
             *
             * Whether to collect garbage from async workers.
             *
             * @return bool
             */
            public function getCollectAsyncWorker()
                : bool
            {
                

                return $this->collectAsyncWorker;
            }

            
                /**
                 * Set the value of collect-async-worker.
                 *
                 * @param bool $collectAsyncWorker Whether to collect garbage from async workers.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setCollectAsyncWorker(
                    bool $collectAsyncWorker
                ): self {
                    if ($this->collectAsyncWorker === $collectAsyncWorker) {
                        return $this;
                    }

                    $value = $modelData['collect-async-worker'] = $collectAsyncWorker;

                    

                    

                    $value = $this->validateCollectAsyncWorker($value, $modelData);

                    

                    $this->collectAsyncWorker = $value;
                    $this->_rawModelDataInput['collect-async-worker'] = $collectAsyncWorker;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property collectAsyncWorker
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processCollectAsyncWorker(array $modelData): void
            {
                
                    
                        if (!array_key_exists('collect-async-worker', $modelData) && $this->collectAsyncWorker === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('collect-async-worker', $modelData) ? $modelData['collect-async-worker'] : $this->collectAsyncWorker;

                

                $this->collectAsyncWorker = $this->validateCollectAsyncWorker($value, $modelData);
            }

            /**
             * Execute all validators for the property collectAsyncWorker
             */
            protected function validateCollectAsyncWorker($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'collect-async-worker',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of low-memory-trigger.
             *
             * Trigger garbage collection when soft memory limits are exceeded
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
                 * @param bool $lowMemoryTrigger Trigger garbage collection when soft memory limits are exceeded
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
