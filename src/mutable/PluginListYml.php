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
    
        /** @var string[]|null List of plugins to allow or disallow */
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
             * @return string[]|null
             */
            public function getPlugins()
                
            {
                

                return $this->plugins;
            }

            
                /**
                 * Set the value of plugins.
                 *
                 * @param string[]|null $plugins List of plugins to allow or disallow
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setPlugins(
                     $plugins
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
                
                    
                    if (!is_array($value) && !is_null($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'plugins',
  1 => 
  array (
    0 => 'array',
    1 => 'null',
  ),
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
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
