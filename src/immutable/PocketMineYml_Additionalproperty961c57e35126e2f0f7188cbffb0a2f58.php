<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\immutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Additionalproperty961c57e35126e2f0f7188cbffb0a2f58
 * @package pocketmine\datamodels\immutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Additionalproperty961c57e35126e2f0f7188cbffb0a2f58 implements JSONModelInterface
{
    

    
        /** @var string|float|null Seed to use for generating this world. */
        protected $seed;
    
        /** @var string|null Name of the generator to use to generate this world. */
        protected $generator;
    
        /** @var string|null Generator-specific preset info to customize the generation of the world. */
        protected $preset;
    
        /** @var string|int|null Name or ID of the difficulty level to use in this world. */
        protected $difficulty;
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Additionalproperty961c57e35126e2f0f7188cbffb0a2f58 constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processSeed($modelData);
            
        
            
                $this->processGenerator($modelData);
            
        
            
                $this->processPreset($modelData);
            
        
            
                $this->processDifficulty($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'seed',
   'generator',
   'preset',
   'difficulty',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml_Additionalproperty961c57e35126e2f0f7188cbffb0a2f58',
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
             * Get the value of seed.
             *
             * Seed to use for generating this world.
             *
             * @return string|float|null
             */
            public function getSeed()
                
            {
                

                return $this->seed;
            }

            

            /**
             * Extract the value, perform validations and set the property seed
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processSeed(array $modelData): void
            {
                
                    
                        if (!array_key_exists('seed', $modelData) && $this->seed === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('seed', $modelData) ? $modelData['seed'] : $this->seed;

                $value = is_int($value) ? (float) $value : $value;

                $this->seed = $this->validateSeed($value, $modelData);
            }

            /**
             * Execute all validators for the property seed
             */
            protected function validateSeed($value, array $modelData)
            {
                
                    
                    if (!is_string($value) && !is_float($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'seed',
  1 => 
  array (
    0 => 'string',
    1 => 'float',
  ),
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of generator.
             *
             * Name of the generator to use to generate this world.
             *
             * @return string|null
             */
            public function getGenerator()
                : ?string
            {
                

                return $this->generator;
            }

            

            /**
             * Extract the value, perform validations and set the property generator
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processGenerator(array $modelData): void
            {
                
                    
                        if (!array_key_exists('generator', $modelData) && $this->generator === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('generator', $modelData) ? $modelData['generator'] : $this->generator;

                

                $this->generator = $this->validateGenerator($value, $modelData);
            }

            /**
             * Execute all validators for the property generator
             */
            protected function validateGenerator($value, array $modelData)
            {
                
                    
                    if (!is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'generator',
  1 => 'string',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of preset.
             *
             * Generator-specific preset info to customize the generation of the world.
             *
             * @return string|null
             */
            public function getPreset()
                : ?string
            {
                

                return $this->preset;
            }

            

            /**
             * Extract the value, perform validations and set the property preset
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processPreset(array $modelData): void
            {
                
                    
                        if (!array_key_exists('preset', $modelData) && $this->preset === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('preset', $modelData) ? $modelData['preset'] : $this->preset;

                

                $this->preset = $this->validatePreset($value, $modelData);
            }

            /**
             * Execute all validators for the property preset
             */
            protected function validatePreset($value, array $modelData)
            {
                
                    
                    if (!is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'preset',
  1 => 'string',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of difficulty.
             *
             * Name or ID of the difficulty level to use in this world.
             *
             * @return string|int|null
             */
            public function getDifficulty()
                
            {
                

                return $this->difficulty;
            }

            

            /**
             * Extract the value, perform validations and set the property difficulty
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processDifficulty(array $modelData): void
            {
                
                    
                        if (!array_key_exists('difficulty', $modelData) && $this->difficulty === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('difficulty', $modelData) ? $modelData['difficulty'] : $this->difficulty;

                

                $this->difficulty = $this->validateDifficulty($value, $modelData);
            }

            /**
             * Execute all validators for the property difficulty
             */
            protected function validateDifficulty($value, array $modelData)
            {
                
                    
                    if (!is_string($value) && !is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'difficulty',
  1 => 
  array (
    0 => 'string',
    1 => 'int',
  ),
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
