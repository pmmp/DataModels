<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\mutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PluginListYml
 * @package pocketmine\datamodels\mutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PluginListYml implements JSONModelInterface
{
    

    
        /** @var string The listed plugins will either be allowed or disallowed based on this setting */
        protected $mode = 'disallow';
    
        /** @var array|string[]|null List of plugins to allow or disallow */
        protected $plugins = array (
);
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PluginListYml constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processMode($modelData);
            
        
            
                $this->processPlugins($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'mode',
   'plugins',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PluginListYml',
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
             * Get the value of mode.
             *
             * The listed plugins will either be allowed or disallowed based on this setting
             *
             * @return string
             */
            public function getMode()
                : string
            {
                

                return $this->mode;
            }

            
                /**
                 * Set the value of mode.
                 *
                 * @param string $mode The listed plugins will either be allowed or disallowed based on this setting
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setMode(
                    string $mode
                ): self {
                    if ($this->mode === $mode) {
                        return $this;
                    }

                    $value = $modelData['mode'] = $mode;

                    

                    

                    $value = $this->validateMode($value, $modelData);

                    

                    $this->mode = $value;
                    $this->_rawModelDataInput['mode'] = $mode;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property mode
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processMode(array $modelData): void
            {
                
                    
                        if (!array_key_exists('mode', $modelData) && $this->mode === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('mode', $modelData) ? $modelData['mode'] : $this->mode;

                

                $this->mode = $this->validateMode($value, $modelData);
            }

            /**
             * Execute all validators for the property mode
             */
            protected function validateMode($value, array $modelData)
            {
                
                    
                    if (!in_array($value, array (
   'blacklist',
   'whitelist',
   'allow',
   'disallow',
), true)) {
                        throw new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'mode',
  1 => 
  array (
    0 => 'blacklist',
    1 => 'whitelist',
    2 => 'allow',
    3 => 'disallow',
  ),
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of plugins.
             *
             * List of plugins to allow or disallow
             *
             * @return array|string[]|null
             */
            public function getPlugins()
                : array
            {
                

                return $this->plugins;
            }

            
                /**
                 * Set the value of plugins.
                 *
                 * @param array|string[]|null $plugins List of plugins to allow or disallow
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setPlugins(
                    array $plugins
                ): self {
                    if ($this->plugins === $plugins) {
                        return $this;
                    }

                    $value = $modelData['plugins'] = $plugins;

                    

                    

                    $value = $this->validatePlugins($value, $modelData);

                    

                    $this->plugins = $value;
                    $this->_rawModelDataInput['plugins'] = $plugins;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property plugins
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processPlugins(array $modelData): void
            {
                
                    
                        if (!array_key_exists('plugins', $modelData) && $this->plugins === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('plugins', $modelData) ? $modelData['plugins'] : $this->plugins;

                

                $this->plugins = $this->validatePlugins($value, $modelData);
            }

            /**
             * Execute all validators for the property plugins
             */
            protected function validatePlugins($value, array $modelData)
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
  0 => 'plugins',
  1 => 'array',
));
                    }
                
                    $invalidItems_632057b18481b76cbe71c78b86275801 = [];
                    if (is_array($value) && (function (&$items) use (&$invalidItems_632057b18481b76cbe71c78b86275801) {
    

    foreach ($items as $index => &$value) {
        

        try {
            

            
                
                if (!is_string($value)) {
                    throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array plugins',
  1 => 'string',
));
                }
            

            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_632057b18481b76cbe71c78b86275801[$index])
                ? $invalidItems_632057b18481b76cbe71c78b86275801[$index][] = $e
                : $invalidItems_632057b18481b76cbe71c78b86275801[$index] = [$e];
        }
    }

    

    return !empty($invalidItems_632057b18481b76cbe71c78b86275801);
})($value)) {
                        throw new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'plugins',
  1 => $invalidItems_632057b18481b76cbe71c78b86275801,
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
  0 => 'plugins',
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
    

    

    $result = !($succeededCompositionElements > 0);

    if ($result) {
        $this->_propertyValidationState = $originalPropertyValidationState;
    }

    return $result;
})($value)
) {
                        throw new \PHPModelGenerator\Exception\ComposedValue\AnyOfException($value ?? null, ...array (
  0 => 'plugins',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
