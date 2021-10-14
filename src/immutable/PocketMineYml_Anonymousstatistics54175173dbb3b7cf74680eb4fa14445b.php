<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\immutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Anonymousstatistics54175173dbb3b7cf74680eb4fa14445b
 * @package pocketmine\datamodels\immutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Anonymousstatistics54175173dbb3b7cf74680eb4fa14445b implements JSONModelInterface
{
    

    
        /** @var bool Whether to periodically upload anonymous statistics to the stats server. */
        protected $enabled = false;
    
        /** @var string IP or URL of the stats server. */
        protected $host = 'stats.pocketmine.net';
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Anonymousstatistics54175173dbb3b7cf74680eb4fa14445b constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processEnabled($modelData);
            
        
            
                $this->processHost($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'enabled',
   'host',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml_Anonymousstatistics54175173dbb3b7cf74680eb4fa14445b',
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
             * Get the value of enabled.
             *
             * Whether to periodically upload anonymous statistics to the stats server.
             *
             * @return bool
             */
            public function getEnabled()
                : bool
            {
                

                return $this->enabled;
            }

            

            /**
             * Extract the value, perform validations and set the property enabled
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processEnabled(array $modelData): void
            {
                
                    
                        if (!array_key_exists('enabled', $modelData) && $this->enabled === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('enabled', $modelData) ? $modelData['enabled'] : $this->enabled;

                

                $this->enabled = $this->validateEnabled($value, $modelData);
            }

            /**
             * Execute all validators for the property enabled
             */
            protected function validateEnabled($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'enabled',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of host.
             *
             * IP or URL of the stats server.
             *
             * @return string
             */
            public function getHost()
                : string
            {
                

                return $this->host;
            }

            

            /**
             * Extract the value, perform validations and set the property host
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processHost(array $modelData): void
            {
                
                    
                        if (!array_key_exists('host', $modelData) && $this->host === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('host', $modelData) ? $modelData['host'] : $this->host;

                

                $this->host = $this->validateHost($value, $modelData);
            }

            /**
             * Execute all validators for the property host
             */
            protected function validateHost($value, array $modelData)
            {
                
                    
                    if (!is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'host',
  1 => 'string',
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
