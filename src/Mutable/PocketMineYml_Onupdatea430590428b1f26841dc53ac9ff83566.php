<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\Mutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Onupdatea430590428b1f26841dc53ac9ff83566
 * @package pocketmine\datamodels\Mutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Onupdatea430590428b1f26841dc53ac9ff83566 implements JSONModelInterface
{
    

    
        /** @var bool Whether to log a message on the console if a new version is available. */
        protected $warnConsole = true;
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Onupdatea430590428b1f26841dc53ac9ff83566 constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processWarnConsole($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'warn-console',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml_Onupdatea430590428b1f26841dc53ac9ff83566',
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
             * Get the value of warn-console.
             *
             * Whether to log a message on the console if a new version is available.
             *
             * @return bool
             */
            public function getWarnConsole()
                : bool
            {
                

                return $this->warnConsole;
            }

            

            /**
             * Extract the value, perform validations and set the property warnConsole
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processWarnConsole(array $modelData): void
            {
                
                    
                        if (!array_key_exists('warn-console', $modelData) && $this->warnConsole === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('warn-console', $modelData) ? $modelData['warn-console'] : $this->warnConsole;

                

                $this->warnConsole = $this->validateWarnConsole($value, $modelData);
            }

            /**
             * Execute all validators for the property warnConsole
             */
            protected function validateWarnConsole($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'warn-console',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
