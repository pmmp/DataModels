<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\mutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Chunktickingab75eb237ca2a7d748b28cadb3bc7cda
 * @package pocketmine\datamodels\mutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Chunktickingab75eb237ca2a7d748b28cadb3bc7cda implements JSONModelInterface
{
    

    
        /** @var int Maximum number of chunks ticked per world per tick. */
        protected $perTick = 40;
    
        /** @var int Radius of chunks around each player to tick. */
        protected $tickRadius = 3;
    
        /** @var int Number of blocks ticked per subchunk in chunks chosen for ticking. Higher values cause trees and plants to grow faster, but with more lag. */
        protected $blocksPerSubchunkPerTick = 3;
    
        /** @var array|int[]|null IDs of blocks to disallow ticking. */
        protected $disableBlockTicking;
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Chunktickingab75eb237ca2a7d748b28cadb3bc7cda constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processPerTick($modelData);
            
        
            
                $this->processTickRadius($modelData);
            
        
            
                $this->processBlocksPerSubchunkPerTick($modelData);
            
        
            
                $this->processDisableBlockTicking($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'per-tick',
   'tick-radius',
   'blocks-per-subchunk-per-tick',
   'disable-block-ticking',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml_Chunktickingab75eb237ca2a7d748b28cadb3bc7cda',
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
             * Maximum number of chunks ticked per world per tick.
             *
             * @return int
             */
            public function getPerTick()
                : int
            {
                

                return $this->perTick;
            }

            
                /**
                 * Set the value of per-tick.
                 *
                 * @param int $perTick Maximum number of chunks ticked per world per tick.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setPerTick(
                    int $perTick
                ): self {
                    if ($this->perTick === $perTick) {
                        return $this;
                    }

                    $value = $modelData['per-tick'] = $perTick;

                    

                    

                    $value = $this->validatePerTick($value, $modelData);

                    

                    $this->perTick = $value;
                    $this->_rawModelDataInput['per-tick'] = $perTick;

                    

                    return $this;
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
                
                    
                    if (is_int($value) && $value < 0) {
                        throw new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'per-tick',
  1 => 0,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of tick-radius.
             *
             * Radius of chunks around each player to tick.
             *
             * @return int
             */
            public function getTickRadius()
                : int
            {
                

                return $this->tickRadius;
            }

            
                /**
                 * Set the value of tick-radius.
                 *
                 * @param int $tickRadius Radius of chunks around each player to tick.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setTickRadius(
                    int $tickRadius
                ): self {
                    if ($this->tickRadius === $tickRadius) {
                        return $this;
                    }

                    $value = $modelData['tick-radius'] = $tickRadius;

                    

                    

                    $value = $this->validateTickRadius($value, $modelData);

                    

                    $this->tickRadius = $value;
                    $this->_rawModelDataInput['tick-radius'] = $tickRadius;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property tickRadius
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processTickRadius(array $modelData): void
            {
                
                    
                        if (!array_key_exists('tick-radius', $modelData) && $this->tickRadius === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('tick-radius', $modelData) ? $modelData['tick-radius'] : $this->tickRadius;

                

                $this->tickRadius = $this->validateTickRadius($value, $modelData);
            }

            /**
             * Execute all validators for the property tickRadius
             */
            protected function validateTickRadius($value, array $modelData)
            {
                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'tick-radius',
  1 => 'int',
));
                    }
                
                    
                    if (is_int($value) && $value < 0) {
                        throw new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'tick-radius',
  1 => 0,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of blocks-per-subchunk-per-tick.
             *
             * Number of blocks ticked per subchunk in chunks chosen for ticking. Higher values cause trees and plants to grow faster, but with more lag.
             *
             * @return int
             */
            public function getBlocksPerSubchunkPerTick()
                : int
            {
                

                return $this->blocksPerSubchunkPerTick;
            }

            
                /**
                 * Set the value of blocks-per-subchunk-per-tick.
                 *
                 * @param int $blocksPerSubchunkPerTick Number of blocks ticked per subchunk in chunks chosen for ticking. Higher values cause trees and plants to grow faster, but with more lag.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setBlocksPerSubchunkPerTick(
                    int $blocksPerSubchunkPerTick
                ): self {
                    if ($this->blocksPerSubchunkPerTick === $blocksPerSubchunkPerTick) {
                        return $this;
                    }

                    $value = $modelData['blocks-per-subchunk-per-tick'] = $blocksPerSubchunkPerTick;

                    

                    

                    $value = $this->validateBlocksPerSubchunkPerTick($value, $modelData);

                    

                    $this->blocksPerSubchunkPerTick = $value;
                    $this->_rawModelDataInput['blocks-per-subchunk-per-tick'] = $blocksPerSubchunkPerTick;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property blocksPerSubchunkPerTick
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processBlocksPerSubchunkPerTick(array $modelData): void
            {
                
                    
                        if (!array_key_exists('blocks-per-subchunk-per-tick', $modelData) && $this->blocksPerSubchunkPerTick === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('blocks-per-subchunk-per-tick', $modelData) ? $modelData['blocks-per-subchunk-per-tick'] : $this->blocksPerSubchunkPerTick;

                

                $this->blocksPerSubchunkPerTick = $this->validateBlocksPerSubchunkPerTick($value, $modelData);
            }

            /**
             * Execute all validators for the property blocksPerSubchunkPerTick
             */
            protected function validateBlocksPerSubchunkPerTick($value, array $modelData)
            {
                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'blocks-per-subchunk-per-tick',
  1 => 'int',
));
                    }
                
                    
                    if (is_int($value) && $value < 0) {
                        throw new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'blocks-per-subchunk-per-tick',
  1 => 0,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of disable-block-ticking.
             *
             * IDs of blocks to disallow ticking.
             *
             * @return array|int[]|null
             */
            public function getDisableBlockTicking()
                : ?array
            {
                

                return $this->disableBlockTicking;
            }

            
                /**
                 * Set the value of disable-block-ticking.
                 *
                 * @param array|int[]|null $disableBlockTicking IDs of blocks to disallow ticking.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setDisableBlockTicking(
                    array $disableBlockTicking
                ): self {
                    if ($this->disableBlockTicking === $disableBlockTicking) {
                        return $this;
                    }

                    $value = $modelData['disable-block-ticking'] = $disableBlockTicking;

                    

                    

                    $value = $this->validateDisableBlockTicking($value, $modelData);

                    

                    $this->disableBlockTicking = $value;
                    $this->_rawModelDataInput['disable-block-ticking'] = $disableBlockTicking;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property disableBlockTicking
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processDisableBlockTicking(array $modelData): void
            {
                
                    
                        if (!array_key_exists('disable-block-ticking', $modelData) && $this->disableBlockTicking === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('disable-block-ticking', $modelData) ? $modelData['disable-block-ticking'] : $this->disableBlockTicking;

                

                $this->disableBlockTicking = $this->validateDisableBlockTicking($value, $modelData);
            }

            /**
             * Execute all validators for the property disableBlockTicking
             */
            protected function validateDisableBlockTicking($value, array $modelData)
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
                

                

                

                
                    
                    if (!is_array($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'disable-block-ticking',
  1 => 'array',
));
                    }
                
                    $invalidItems_d2ba949dec4c3d32f8a2daa5fe6c1c28 = [];
                    if (is_array($value) && (function (&$items) use (&$invalidItems_d2ba949dec4c3d32f8a2daa5fe6c1c28) {
    

    foreach ($items as $index => &$value) {
        

        try {
            

            
                
                if (!is_int($value)) {
                    throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array disable-block-ticking',
  1 => 'int',
));
                }
            

            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_d2ba949dec4c3d32f8a2daa5fe6c1c28[$index])
                ? $invalidItems_d2ba949dec4c3d32f8a2daa5fe6c1c28[$index][] = $e
                : $invalidItems_d2ba949dec4c3d32f8a2daa5fe6c1c28[$index] = [$e];
        }
    }

    

    return !empty($invalidItems_d2ba949dec4c3d32f8a2daa5fe6c1c28);
})($value)) {
                        throw new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'disable-block-ticking',
  1 => $invalidItems_d2ba949dec4c3d32f8a2daa5fe6c1c28,
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
                

                

                

                
                    
                    if (!is_null($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'disable-block-ticking',
  1 => 'null',
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
    

    

    $result = !($succeededCompositionElements === 1);

    if ($result) {
        $this->_propertyValidationState = $originalPropertyValidationState;
    }

    return $result;
})($value)
) {
                        throw new \PHPModelGenerator\Exception\ComposedValue\OneOfException($value ?? null, ...array (
  0 => 'disable-block-ticking',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
