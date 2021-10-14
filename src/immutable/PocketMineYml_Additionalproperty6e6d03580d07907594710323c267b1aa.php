<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\immutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Additionalproperty6e6d03580d07907594710323c267b1aa
 * @package pocketmine\datamodels\immutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Additionalproperty6e6d03580d07907594710323c267b1aa implements JSONModelInterface
{
    

    
        /** @var float|string|null Seed to use for generating this world. */
        protected $seed;
    
        /** @var string|null Name of the generator to use to generate this world. */
        protected $generator;
    
        /** @var string|null Generator-specific preset info to customize the generation of the world. */
        protected $preset;
    
        /** @var int|string|null Name or ID of the difficulty level to use in this world. */
        protected $difficulty;
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Additionalproperty6e6d03580d07907594710323c267b1aa constructor.
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
  0 => 'PocketMineYml_Additionalproperty6e6d03580d07907594710323c267b1aa',
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
             * @return float|string|null
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

                

                $this->seed = $this->validateSeed($value, $modelData);
            }

            /**
             * Execute all validators for the property seed
             */
            protected function validateSeed($value, array $modelData)
            {
                
                    
            $succeededCompositionElements = 0;
            $compositionErrorCollection = [];
        
                    if (
    $value !== null &&

(function (&$value) use (
    &$modelData,
    &$modifiedModelData,
    &$compositionErrorCollection,
    &$succeededCompositionElements,
    &$validatorIndex
) {
    $succeededCompositionElements = 2;
    $validatorComponentIndex = 0;
    $originalModelData = $value;
    $originalPropertyValidationState = $this->_propertyValidationState ?? [];
    $proposedValue = null;

    

    
        try {
            // check if the state of the validator is already known.
            // If none of the properties affected by the validator are changed the validator must not be re-evaluated
            if (isset($validatorIndex) &&
                isset($this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]) &&
                !array_intersect(
                    array_keys($modifiedModelData),
                    [
                        
                    ]
                )
            ) {
                

                if (
                        $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] !== true
                    
                ) {
                    throw new \Exception();
                }
            } else {
                

                

                $value = is_int($value) ? (float) $value : $value;

                
                    
                    if (!is_float($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'seed',
  1 => 'float',
));
                    }
                

                

                
                    $proposedValue = $proposedValue ?? $value;
                

                
                    isset($validatorIndex) ? $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = true : null;
                
            }
        } catch (\Exception $e) {
            
                isset($validatorIndex) ? $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = false : null;
            

            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    
        try {
            // check if the state of the validator is already known.
            // If none of the properties affected by the validator are changed the validator must not be re-evaluated
            if (isset($validatorIndex) &&
                isset($this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]) &&
                !array_intersect(
                    array_keys($modifiedModelData),
                    [
                        
                    ]
                )
            ) {
                

                if (
                        $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] !== true
                    
                ) {
                    throw new \Exception();
                }
            } else {
                

                

                

                
                    
                    if (!is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'seed',
  1 => 'string',
));
                    }
                

                

                
                    $proposedValue = $proposedValue ?? $value;
                

                
                    isset($validatorIndex) ? $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = true : null;
                
            }
        } catch (\Exception $e) {
            
                isset($validatorIndex) ? $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = false : null;
            

            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    

    
        $value = $proposedValue;
    

    

    $result = !($succeededCompositionElements > 0);

    if ($result) {
        $this->_propertyValidationState = $originalPropertyValidationState;
    }

    return $result;
})($value)
) {
                        throw new \PHPModelGenerator\Exception\ComposedValue\AnyOfException($value ?? null, ...array (
  0 => 'seed',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
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
             * @return int|string|null
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
                
                    
            $succeededCompositionElements = 0;
            $compositionErrorCollection = [];
        
                    if (
    $value !== null &&

(function (&$value) use (
    &$modelData,
    &$modifiedModelData,
    &$compositionErrorCollection,
    &$succeededCompositionElements,
    &$validatorIndex
) {
    $succeededCompositionElements = 2;
    $validatorComponentIndex = 0;
    $originalModelData = $value;
    $originalPropertyValidationState = $this->_propertyValidationState ?? [];
    $proposedValue = null;

    

    
        try {
            // check if the state of the validator is already known.
            // If none of the properties affected by the validator are changed the validator must not be re-evaluated
            if (isset($validatorIndex) &&
                isset($this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]) &&
                !array_intersect(
                    array_keys($modifiedModelData),
                    [
                        
                    ]
                )
            ) {
                

                if (
                        $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] !== true
                    
                ) {
                    throw new \Exception();
                }
            } else {
                

                

                

                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'difficulty',
  1 => 'int',
));
                    }
                

                

                
                    $proposedValue = $proposedValue ?? $value;
                

                
                    isset($validatorIndex) ? $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = true : null;
                
            }
        } catch (\Exception $e) {
            
                isset($validatorIndex) ? $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = false : null;
            

            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    
        try {
            // check if the state of the validator is already known.
            // If none of the properties affected by the validator are changed the validator must not be re-evaluated
            if (isset($validatorIndex) &&
                isset($this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]) &&
                !array_intersect(
                    array_keys($modifiedModelData),
                    [
                        
                    ]
                )
            ) {
                

                if (
                        $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] !== true
                    
                ) {
                    throw new \Exception();
                }
            } else {
                

                

                

                
                    
                    if (!is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'difficulty',
  1 => 'string',
));
                    }
                

                

                
                    $proposedValue = $proposedValue ?? $value;
                

                
                    isset($validatorIndex) ? $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = true : null;
                
            }
        } catch (\Exception $e) {
            
                isset($validatorIndex) ? $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = false : null;
            

            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    

    
        $value = $proposedValue;
    

    

    $result = !($succeededCompositionElements > 0);

    if ($result) {
        $this->_propertyValidationState = $originalPropertyValidationState;
    }

    return $result;
})($value)
) {
                        throw new \PHPModelGenerator\Exception\ComposedValue\AnyOfException($value ?? null, ...array (
  0 => 'difficulty',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
