<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\mutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Memory3e1f1c5a8dd11cfcec0fa9635c204b3e
 * @package pocketmine\datamodels\mutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Memory3e1f1c5a8dd11cfcec0fa9635c204b3e implements JSONModelInterface
{
    

    
        /** @var int Global soft memory limit (MB). When reached, low-memory triggers will fire to try and free memory. */
        protected $globalLimit = 1;
    
        /** @var int Main thread soft memory limit (MB). When reached, low-memory triggers will fire to try and free memory. */
        protected $mainLimit = 1;
    
        /** @var int Main thread hard memory limit (MB). The server will crash if more than this amount of memory is used by the main thread. */
        protected $mainHardLimit = 1024;
    
        /** @var int Async worker thread hard memory limit (MB). Workers will crash if they try to use more than this amount of memory. */
        protected $asyncWorkerHardLimit = 256;
    
        /** @var int Period in server ticks to check memory usage. */
        protected $checkRate = 20;
    
        /** @var bool Whether to repeatedly fire low memory triggers and events until soft limits are no longer being exceeded. */
        protected $continuousTrigger = true;
    
        /** @var int After this many memory checks, low memory limits will be triggered again (only if continuous-trigger is true). */
        protected $continuousTriggerRate = 30;
    
        /** @var PocketMineYml_Garbagecollectionda4b18a6f5d52cb0f7dbe56b12f49a95 */
        protected $garbageCollection;
    
        /** @var PocketMineYml_Memorydumpe9feb3fa32f5d05426cff068bfd34bfe */
        protected $memoryDump;
    
        /** @var PocketMineYml_Maxchunks0cd690fb928ecfbba82c29cffceba558 */
        protected $maxChunks;
    
        /** @var PocketMineYml_Worldcachese767cf6106f93724c2ef354961c9444f */
        protected $worldCaches;
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Memory3e1f1c5a8dd11cfcec0fa9635c204b3e constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processGlobalLimit($modelData);
            
        
            
                $this->processMainLimit($modelData);
            
        
            
                $this->processMainHardLimit($modelData);
            
        
            
                $this->processAsyncWorkerHardLimit($modelData);
            
        
            
                $this->processCheckRate($modelData);
            
        
            
                $this->processContinuousTrigger($modelData);
            
        
            
                $this->processContinuousTriggerRate($modelData);
            
        
            
                $this->processGarbageCollection($modelData);
            
        
            
                $this->processMemoryDump($modelData);
            
        
            
                $this->processMaxChunks($modelData);
            
        
            
                $this->processWorldCaches($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'global-limit',
   'main-limit',
   'main-hard-limit',
   'async-worker-hard-limit',
   'check-rate',
   'continuous-trigger',
   'continuous-trigger-rate',
   'garbage-collection',
   'memory-dump',
   'max-chunks',
   'world-caches',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml_Memory3e1f1c5a8dd11cfcec0fa9635c204b3e',
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
             * Get the value of global-limit.
             *
             * Global soft memory limit (MB). When reached, low-memory triggers will fire to try and free memory.
             *
             * @return int
             */
            public function getGlobalLimit()
                : int
            {
                

                return $this->globalLimit;
            }

            
                /**
                 * Set the value of global-limit.
                 *
                 * @param int $globalLimit Global soft memory limit (MB). When reached, low-memory triggers will fire to try and free memory.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setGlobalLimit(
                    int $globalLimit
                ): self {
                    if ($this->globalLimit === $globalLimit) {
                        return $this;
                    }

                    $value = $modelData['global-limit'] = $globalLimit;

                    

                    

                    $value = $this->validateGlobalLimit($value, $modelData);

                    

                    $this->globalLimit = $value;
                    $this->_rawModelDataInput['global-limit'] = $globalLimit;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property globalLimit
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processGlobalLimit(array $modelData): void
            {
                
                    
                        if (!array_key_exists('global-limit', $modelData) && $this->globalLimit === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('global-limit', $modelData) ? $modelData['global-limit'] : $this->globalLimit;

                

                $this->globalLimit = $this->validateGlobalLimit($value, $modelData);
            }

            /**
             * Execute all validators for the property globalLimit
             */
            protected function validateGlobalLimit($value, array $modelData)
            {
                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'global-limit',
  1 => 'int',
));
                    }
                
                    
                    if (is_int($value) && $value < 0) {
                        throw new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'global-limit',
  1 => 0,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of main-limit.
             *
             * Main thread soft memory limit (MB). When reached, low-memory triggers will fire to try and free memory.
             *
             * @return int
             */
            public function getMainLimit()
                : int
            {
                

                return $this->mainLimit;
            }

            
                /**
                 * Set the value of main-limit.
                 *
                 * @param int $mainLimit Main thread soft memory limit (MB). When reached, low-memory triggers will fire to try and free memory.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setMainLimit(
                    int $mainLimit
                ): self {
                    if ($this->mainLimit === $mainLimit) {
                        return $this;
                    }

                    $value = $modelData['main-limit'] = $mainLimit;

                    

                    

                    $value = $this->validateMainLimit($value, $modelData);

                    

                    $this->mainLimit = $value;
                    $this->_rawModelDataInput['main-limit'] = $mainLimit;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property mainLimit
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processMainLimit(array $modelData): void
            {
                
                    
                        if (!array_key_exists('main-limit', $modelData) && $this->mainLimit === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('main-limit', $modelData) ? $modelData['main-limit'] : $this->mainLimit;

                

                $this->mainLimit = $this->validateMainLimit($value, $modelData);
            }

            /**
             * Execute all validators for the property mainLimit
             */
            protected function validateMainLimit($value, array $modelData)
            {
                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'main-limit',
  1 => 'int',
));
                    }
                
                    
                    if (is_int($value) && $value < 0) {
                        throw new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'main-limit',
  1 => 0,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of main-hard-limit.
             *
             * Main thread hard memory limit (MB). The server will crash if more than this amount of memory is used by the main thread.
             *
             * @return int
             */
            public function getMainHardLimit()
                : int
            {
                

                return $this->mainHardLimit;
            }

            
                /**
                 * Set the value of main-hard-limit.
                 *
                 * @param int $mainHardLimit Main thread hard memory limit (MB). The server will crash if more than this amount of memory is used by the main thread.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setMainHardLimit(
                    int $mainHardLimit
                ): self {
                    if ($this->mainHardLimit === $mainHardLimit) {
                        return $this;
                    }

                    $value = $modelData['main-hard-limit'] = $mainHardLimit;

                    

                    

                    $value = $this->validateMainHardLimit($value, $modelData);

                    

                    $this->mainHardLimit = $value;
                    $this->_rawModelDataInput['main-hard-limit'] = $mainHardLimit;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property mainHardLimit
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processMainHardLimit(array $modelData): void
            {
                
                    
                        if (!array_key_exists('main-hard-limit', $modelData) && $this->mainHardLimit === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('main-hard-limit', $modelData) ? $modelData['main-hard-limit'] : $this->mainHardLimit;

                

                $this->mainHardLimit = $this->validateMainHardLimit($value, $modelData);
            }

            /**
             * Execute all validators for the property mainHardLimit
             */
            protected function validateMainHardLimit($value, array $modelData)
            {
                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'main-hard-limit',
  1 => 'int',
));
                    }
                
                    
                    if (is_int($value) && $value < 0) {
                        throw new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'main-hard-limit',
  1 => 0,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of async-worker-hard-limit.
             *
             * Async worker thread hard memory limit (MB). Workers will crash if they try to use more than this amount of memory.
             *
             * @return int
             */
            public function getAsyncWorkerHardLimit()
                : int
            {
                

                return $this->asyncWorkerHardLimit;
            }

            
                /**
                 * Set the value of async-worker-hard-limit.
                 *
                 * @param int $asyncWorkerHardLimit Async worker thread hard memory limit (MB). Workers will crash if they try to use more than this amount of memory.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setAsyncWorkerHardLimit(
                    int $asyncWorkerHardLimit
                ): self {
                    if ($this->asyncWorkerHardLimit === $asyncWorkerHardLimit) {
                        return $this;
                    }

                    $value = $modelData['async-worker-hard-limit'] = $asyncWorkerHardLimit;

                    

                    

                    $value = $this->validateAsyncWorkerHardLimit($value, $modelData);

                    

                    $this->asyncWorkerHardLimit = $value;
                    $this->_rawModelDataInput['async-worker-hard-limit'] = $asyncWorkerHardLimit;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property asyncWorkerHardLimit
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processAsyncWorkerHardLimit(array $modelData): void
            {
                
                    
                        if (!array_key_exists('async-worker-hard-limit', $modelData) && $this->asyncWorkerHardLimit === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('async-worker-hard-limit', $modelData) ? $modelData['async-worker-hard-limit'] : $this->asyncWorkerHardLimit;

                

                $this->asyncWorkerHardLimit = $this->validateAsyncWorkerHardLimit($value, $modelData);
            }

            /**
             * Execute all validators for the property asyncWorkerHardLimit
             */
            protected function validateAsyncWorkerHardLimit($value, array $modelData)
            {
                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'async-worker-hard-limit',
  1 => 'int',
));
                    }
                
                    
                    if (is_int($value) && $value < 0) {
                        throw new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'async-worker-hard-limit',
  1 => 0,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of check-rate.
             *
             * Period in server ticks to check memory usage.
             *
             * @return int
             */
            public function getCheckRate()
                : int
            {
                

                return $this->checkRate;
            }

            
                /**
                 * Set the value of check-rate.
                 *
                 * @param int $checkRate Period in server ticks to check memory usage.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setCheckRate(
                    int $checkRate
                ): self {
                    if ($this->checkRate === $checkRate) {
                        return $this;
                    }

                    $value = $modelData['check-rate'] = $checkRate;

                    

                    

                    $value = $this->validateCheckRate($value, $modelData);

                    

                    $this->checkRate = $value;
                    $this->_rawModelDataInput['check-rate'] = $checkRate;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property checkRate
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processCheckRate(array $modelData): void
            {
                
                    
                        if (!array_key_exists('check-rate', $modelData) && $this->checkRate === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('check-rate', $modelData) ? $modelData['check-rate'] : $this->checkRate;

                

                $this->checkRate = $this->validateCheckRate($value, $modelData);
            }

            /**
             * Execute all validators for the property checkRate
             */
            protected function validateCheckRate($value, array $modelData)
            {
                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'check-rate',
  1 => 'int',
));
                    }
                
                    
                    if (is_int($value) && $value < 1) {
                        throw new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'check-rate',
  1 => 1,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of continuous-trigger.
             *
             * Whether to repeatedly fire low memory triggers and events until soft limits are no longer being exceeded.
             *
             * @return bool
             */
            public function getContinuousTrigger()
                : bool
            {
                

                return $this->continuousTrigger;
            }

            
                /**
                 * Set the value of continuous-trigger.
                 *
                 * @param bool $continuousTrigger Whether to repeatedly fire low memory triggers and events until soft limits are no longer being exceeded.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setContinuousTrigger(
                    bool $continuousTrigger
                ): self {
                    if ($this->continuousTrigger === $continuousTrigger) {
                        return $this;
                    }

                    $value = $modelData['continuous-trigger'] = $continuousTrigger;

                    

                    

                    $value = $this->validateContinuousTrigger($value, $modelData);

                    

                    $this->continuousTrigger = $value;
                    $this->_rawModelDataInput['continuous-trigger'] = $continuousTrigger;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property continuousTrigger
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processContinuousTrigger(array $modelData): void
            {
                
                    
                        if (!array_key_exists('continuous-trigger', $modelData) && $this->continuousTrigger === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('continuous-trigger', $modelData) ? $modelData['continuous-trigger'] : $this->continuousTrigger;

                

                $this->continuousTrigger = $this->validateContinuousTrigger($value, $modelData);
            }

            /**
             * Execute all validators for the property continuousTrigger
             */
            protected function validateContinuousTrigger($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'continuous-trigger',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of continuous-trigger-rate.
             *
             * After this many memory checks, low memory limits will be triggered again (only if continuous-trigger is true).
             *
             * @return int
             */
            public function getContinuousTriggerRate()
                : int
            {
                

                return $this->continuousTriggerRate;
            }

            
                /**
                 * Set the value of continuous-trigger-rate.
                 *
                 * @param int $continuousTriggerRate After this many memory checks, low memory limits will be triggered again (only if continuous-trigger is true).
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setContinuousTriggerRate(
                    int $continuousTriggerRate
                ): self {
                    if ($this->continuousTriggerRate === $continuousTriggerRate) {
                        return $this;
                    }

                    $value = $modelData['continuous-trigger-rate'] = $continuousTriggerRate;

                    

                    

                    $value = $this->validateContinuousTriggerRate($value, $modelData);

                    

                    $this->continuousTriggerRate = $value;
                    $this->_rawModelDataInput['continuous-trigger-rate'] = $continuousTriggerRate;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property continuousTriggerRate
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processContinuousTriggerRate(array $modelData): void
            {
                
                    
                        if (!array_key_exists('continuous-trigger-rate', $modelData) && $this->continuousTriggerRate === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('continuous-trigger-rate', $modelData) ? $modelData['continuous-trigger-rate'] : $this->continuousTriggerRate;

                

                $this->continuousTriggerRate = $this->validateContinuousTriggerRate($value, $modelData);
            }

            /**
             * Execute all validators for the property continuousTriggerRate
             */
            protected function validateContinuousTriggerRate($value, array $modelData)
            {
                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'continuous-trigger-rate',
  1 => 'int',
));
                    }
                
                    
                    if (is_int($value) && $value < 1) {
                        throw new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'continuous-trigger-rate',
  1 => 1,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of garbage-collection.
             *
             * 
             *
             * @return PocketMineYml_Garbagecollectionda4b18a6f5d52cb0f7dbe56b12f49a95
             */
            public function getGarbageCollection()
                : PocketMineYml_Garbagecollectionda4b18a6f5d52cb0f7dbe56b12f49a95
            {
                

                return $this->garbageCollection;
            }

            
                /**
                 * Set the value of garbage-collection.
                 *
                 * @param PocketMineYml_Garbagecollectionda4b18a6f5d52cb0f7dbe56b12f49a95 $garbageCollection
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setGarbageCollection(
                    PocketMineYml_Garbagecollectionda4b18a6f5d52cb0f7dbe56b12f49a95 $garbageCollection
                ): self {
                    if ($this->garbageCollection === $garbageCollection) {
                        return $this;
                    }

                    $value = $modelData['garbage-collection'] = $garbageCollection;

                    

                    

                    $value = $this->validateGarbageCollection($value, $modelData);

                    

                    $this->garbageCollection = $value;
                    $this->_rawModelDataInput['garbage-collection'] = $garbageCollection;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property garbageCollection
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processGarbageCollection(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('garbage-collection', $modelData) ? $modelData['garbage-collection'] : $this->garbageCollection;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Garbagecollectionda4b18a6f5d52cb0f7dbe56b12f49a95($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'garbage-collection',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->garbageCollection = $this->validateGarbageCollection($value, $modelData);
            }

            /**
             * Execute all validators for the property garbageCollection
             */
            protected function validateGarbageCollection($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('garbage-collection', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'garbage-collection',
));
                    }
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'garbage-collection',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Garbagecollectionda4b18a6f5d52cb0f7dbe56b12f49a95)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'garbage-collection',
  1 => 'PocketMineYml_Garbagecollectionda4b18a6f5d52cb0f7dbe56b12f49a95',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of memory-dump.
             *
             * 
             *
             * @return PocketMineYml_Memorydumpe9feb3fa32f5d05426cff068bfd34bfe
             */
            public function getMemoryDump()
                : PocketMineYml_Memorydumpe9feb3fa32f5d05426cff068bfd34bfe
            {
                

                return $this->memoryDump;
            }

            
                /**
                 * Set the value of memory-dump.
                 *
                 * @param PocketMineYml_Memorydumpe9feb3fa32f5d05426cff068bfd34bfe $memoryDump
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setMemoryDump(
                    PocketMineYml_Memorydumpe9feb3fa32f5d05426cff068bfd34bfe $memoryDump
                ): self {
                    if ($this->memoryDump === $memoryDump) {
                        return $this;
                    }

                    $value = $modelData['memory-dump'] = $memoryDump;

                    

                    

                    $value = $this->validateMemoryDump($value, $modelData);

                    

                    $this->memoryDump = $value;
                    $this->_rawModelDataInput['memory-dump'] = $memoryDump;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property memoryDump
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processMemoryDump(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('memory-dump', $modelData) ? $modelData['memory-dump'] : $this->memoryDump;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Memorydumpe9feb3fa32f5d05426cff068bfd34bfe($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'memory-dump',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->memoryDump = $this->validateMemoryDump($value, $modelData);
            }

            /**
             * Execute all validators for the property memoryDump
             */
            protected function validateMemoryDump($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('memory-dump', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'memory-dump',
));
                    }
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'memory-dump',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Memorydumpe9feb3fa32f5d05426cff068bfd34bfe)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'memory-dump',
  1 => 'PocketMineYml_Memorydumpe9feb3fa32f5d05426cff068bfd34bfe',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of max-chunks.
             *
             * 
             *
             * @return PocketMineYml_Maxchunks0cd690fb928ecfbba82c29cffceba558
             */
            public function getMaxChunks()
                : PocketMineYml_Maxchunks0cd690fb928ecfbba82c29cffceba558
            {
                

                return $this->maxChunks;
            }

            
                /**
                 * Set the value of max-chunks.
                 *
                 * @param PocketMineYml_Maxchunks0cd690fb928ecfbba82c29cffceba558 $maxChunks
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setMaxChunks(
                    PocketMineYml_Maxchunks0cd690fb928ecfbba82c29cffceba558 $maxChunks
                ): self {
                    if ($this->maxChunks === $maxChunks) {
                        return $this;
                    }

                    $value = $modelData['max-chunks'] = $maxChunks;

                    

                    

                    $value = $this->validateMaxChunks($value, $modelData);

                    

                    $this->maxChunks = $value;
                    $this->_rawModelDataInput['max-chunks'] = $maxChunks;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property maxChunks
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processMaxChunks(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('max-chunks', $modelData) ? $modelData['max-chunks'] : $this->maxChunks;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Maxchunks0cd690fb928ecfbba82c29cffceba558($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'max-chunks',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->maxChunks = $this->validateMaxChunks($value, $modelData);
            }

            /**
             * Execute all validators for the property maxChunks
             */
            protected function validateMaxChunks($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('max-chunks', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'max-chunks',
));
                    }
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'max-chunks',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Maxchunks0cd690fb928ecfbba82c29cffceba558)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'max-chunks',
  1 => 'PocketMineYml_Maxchunks0cd690fb928ecfbba82c29cffceba558',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of world-caches.
             *
             * 
             *
             * @return PocketMineYml_Worldcachese767cf6106f93724c2ef354961c9444f
             */
            public function getWorldCaches()
                : PocketMineYml_Worldcachese767cf6106f93724c2ef354961c9444f
            {
                

                return $this->worldCaches;
            }

            
                /**
                 * Set the value of world-caches.
                 *
                 * @param PocketMineYml_Worldcachese767cf6106f93724c2ef354961c9444f $worldCaches
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setWorldCaches(
                    PocketMineYml_Worldcachese767cf6106f93724c2ef354961c9444f $worldCaches
                ): self {
                    if ($this->worldCaches === $worldCaches) {
                        return $this;
                    }

                    $value = $modelData['world-caches'] = $worldCaches;

                    

                    

                    $value = $this->validateWorldCaches($value, $modelData);

                    

                    $this->worldCaches = $value;
                    $this->_rawModelDataInput['world-caches'] = $worldCaches;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property worldCaches
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processWorldCaches(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('world-caches', $modelData) ? $modelData['world-caches'] : $this->worldCaches;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Worldcachese767cf6106f93724c2ef354961c9444f($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'world-caches',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->worldCaches = $this->validateWorldCaches($value, $modelData);
            }

            /**
             * Execute all validators for the property worldCaches
             */
            protected function validateWorldCaches($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('world-caches', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'world-caches',
));
                    }
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'world-caches',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Worldcachese767cf6106f93724c2ef354961c9444f)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'world-caches',
  1 => 'PocketMineYml_Worldcachese767cf6106f93724c2ef354961c9444f',
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
