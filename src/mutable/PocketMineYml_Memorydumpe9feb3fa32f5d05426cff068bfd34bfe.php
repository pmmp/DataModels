<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\mutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Memorydumpe9feb3fa32f5d05426cff068bfd34bfe
 * @package pocketmine\datamodels\mutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Memorydumpe9feb3fa32f5d05426cff068bfd34bfe implements JSONModelInterface
{
    

    
        /** @var bool Whether to dump memory from async workers when using /dumpmemory. */
        protected $dumpAsyncWorker = true;
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Memorydumpe9feb3fa32f5d05426cff068bfd34bfe constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processDumpAsyncWorker($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'dump-async-worker',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml_Memorydumpe9feb3fa32f5d05426cff068bfd34bfe',
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
             * Get the value of dump-async-worker.
             *
             * Whether to dump memory from async workers when using /dumpmemory.
             *
             * @return bool
             */
            public function getDumpAsyncWorker()
                : bool
            {
                

                return $this->dumpAsyncWorker;
            }

            
                /**
                 * Set the value of dump-async-worker.
                 *
                 * @param bool $dumpAsyncWorker Whether to dump memory from async workers when using /dumpmemory.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setDumpAsyncWorker(
                    bool $dumpAsyncWorker
                ): self {
                    if ($this->dumpAsyncWorker === $dumpAsyncWorker) {
                        return $this;
                    }

                    $value = $modelData['dump-async-worker'] = $dumpAsyncWorker;

                    

                    

                    $value = $this->validateDumpAsyncWorker($value, $modelData);

                    

                    $this->dumpAsyncWorker = $value;
                    $this->_rawModelDataInput['dump-async-worker'] = $dumpAsyncWorker;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property dumpAsyncWorker
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processDumpAsyncWorker(array $modelData): void
            {
                
                    
                        if (!array_key_exists('dump-async-worker', $modelData) && $this->dumpAsyncWorker === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('dump-async-worker', $modelData) ? $modelData['dump-async-worker'] : $this->dumpAsyncWorker;

                

                $this->dumpAsyncWorker = $this->validateDumpAsyncWorker($value, $modelData);
            }

            /**
             * Execute all validators for the property dumpAsyncWorker
             */
            protected function validateDumpAsyncWorker($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'dump-async-worker',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
