<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\immutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Chunksendingb8404e9817294c8ce93ee4f784995316
 * @package pocketmine\datamodels\immutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Chunksendingb8404e9817294c8ce93ee4f784995316 implements JSONModelInterface
{
    

    
        /** @var int Maximum number of chunks to send to each player per tick. Higher values cause faster terrain loading, but potentially more lag. */
        protected $perTick = 4;
    
        /** @var int Radius of chunks to send during player join before spawning. */
        protected $spawnRadius = 4;
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Chunksendingb8404e9817294c8ce93ee4f784995316 constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processPerTick($modelData);
            
        
            
                $this->processSpawnRadius($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'per-tick',
   'spawn-radius',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml_Chunksendingb8404e9817294c8ce93ee4f784995316',
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
             * Get the value of per-tick.
             *
             * Maximum number of chunks to send to each player per tick. Higher values cause faster terrain loading, but potentially more lag.
             *
             * @return int
             */
            public function getPerTick()
                : int
            {
                

                return $this->perTick;
            }

            

            /**
             * Extract the value, perform validations and set the property perTick
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processPerTick(array $modelData): void
            {
                
                    
                        if (!array_key_exists('per-tick', $modelData) && $this->perTick === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('per-tick', $modelData) ? $modelData['per-tick'] : $this->perTick;

                

                $this->perTick = $this->validatePerTick($value, $modelData);
            }

            /**
             * Execute all validators for the property perTick
             */
            protected function validatePerTick($value, array $modelData)
            {
                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'per-tick',
  1 => 'int',
));
                    }
                
                    
                    if (is_int($value) && $value < 1) {
                        throw new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'per-tick',
  1 => 1,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of spawn-radius.
             *
             * Radius of chunks to send during player join before spawning.
             *
             * @return int
             */
            public function getSpawnRadius()
                : int
            {
                

                return $this->spawnRadius;
            }

            

            /**
             * Extract the value, perform validations and set the property spawnRadius
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processSpawnRadius(array $modelData): void
            {
                
                    
                        if (!array_key_exists('spawn-radius', $modelData) && $this->spawnRadius === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('spawn-radius', $modelData) ? $modelData['spawn-radius'] : $this->spawnRadius;

                

                $this->spawnRadius = $this->validateSpawnRadius($value, $modelData);
            }

            /**
             * Execute all validators for the property spawnRadius
             */
            protected function validateSpawnRadius($value, array $modelData)
            {
                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'spawn-radius',
  1 => 'int',
));
                    }
                
                    
                    if (is_int($value) && $value < 1) {
                        throw new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'spawn-radius',
  1 => 1,
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
