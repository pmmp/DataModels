<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\Mutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Ticksper557e5a1e1c875599aa39d48b2aa0fca4
 * @package pocketmine\datamodels\Mutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Ticksper557e5a1e1c875599aa39d48b2aa0fca4 implements JSONModelInterface
{
    

    
        /** @var int Number of server ticks between automatic world saves. */
        protected $autosave = 6000;
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Ticksper557e5a1e1c875599aa39d48b2aa0fca4 constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processAutosave($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'autosave',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml_Ticksper557e5a1e1c875599aa39d48b2aa0fca4',
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
             * Get the value of autosave.
             *
             * Number of server ticks between automatic world saves.
             *
             * @return int
             */
            public function getAutosave()
                : int
            {
                

                return $this->autosave;
            }

            

            /**
             * Extract the value, perform validations and set the property autosave
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processAutosave(array $modelData): void
            {
                
                    
                        if (!array_key_exists('autosave', $modelData) && $this->autosave === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('autosave', $modelData) ? $modelData['autosave'] : $this->autosave;

                

                $this->autosave = $this->validateAutosave($value, $modelData);
            }

            /**
             * Execute all validators for the property autosave
             */
            protected function validateAutosave($value, array $modelData)
            {
                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'autosave',
  1 => 'int',
));
                    }
                
                    
                    if (is_int($value) && $value < 1) {
                        throw new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'autosave',
  1 => 1,
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
