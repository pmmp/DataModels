<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\immutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Levelsettings9666a5a5225100a4496eeb4b42197fbc
 * @package pocketmine\datamodels\immutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Levelsettings9666a5a5225100a4496eeb4b42197fbc implements JSONModelInterface
{
    

    
        /** @var string Name of the format to use for generating new worlds by default. */
        protected $defaultFormat = 'leveldb';
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Levelsettings9666a5a5225100a4496eeb4b42197fbc constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processDefaultFormat($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'default-format',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml_Levelsettings9666a5a5225100a4496eeb4b42197fbc',
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
             * Get the value of default-format.
             *
             * Name of the format to use for generating new worlds by default.
             *
             * @return string
             */
            public function getDefaultFormat()
                : string
            {
                

                return $this->defaultFormat;
            }

            

            /**
             * Extract the value, perform validations and set the property defaultFormat
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processDefaultFormat(array $modelData): void
            {
                
                    
                        if (!array_key_exists('default-format', $modelData) && $this->defaultFormat === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('default-format', $modelData) ? $modelData['default-format'] : $this->defaultFormat;

                

                $this->defaultFormat = $this->validateDefaultFormat($value, $modelData);
            }

            /**
             * Execute all validators for the property defaultFormat
             */
            protected function validateDefaultFormat($value, array $modelData)
            {
                
                    
                    if (!is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'default-format',
  1 => 'string',
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
