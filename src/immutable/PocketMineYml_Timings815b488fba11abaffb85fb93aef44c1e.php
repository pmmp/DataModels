<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\immutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Timings815b488fba11abaffb85fb93aef44c1e
 * @package pocketmine\datamodels\immutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Timings815b488fba11abaffb85fb93aef44c1e implements JSONModelInterface
{
    

    
        /** @var string IP or URL of the timings server. */
        protected $host = 'timings.pmmp.io';
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Timings815b488fba11abaffb85fb93aef44c1e constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processHost($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'host',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml_Timings815b488fba11abaffb85fb93aef44c1e',
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
             * Get the value of host.
             *
             * IP or URL of the timings server.
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
