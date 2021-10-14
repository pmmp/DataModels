<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\mutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Debugd0fba82ed6a2ef749a8d86820fb8d69a
 * @package pocketmine\datamodels\mutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Debugd0fba82ed6a2ef749a8d86820fb8d69a implements JSONModelInterface
{
    

    
        /** @var int Level of debug messages to show in the console. Options are 1 (no debug) and 2 (debug). */
        protected $level = 1;
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Debugd0fba82ed6a2ef749a8d86820fb8d69a constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processLevel($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'level',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml_Debugd0fba82ed6a2ef749a8d86820fb8d69a',
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
             * Get the value of level.
             *
             * Level of debug messages to show in the console. Options are 1 (no debug) and 2 (debug).
             *
             * @return int
             */
            public function getLevel()
                : int
            {
                

                return $this->level;
            }

            
                /**
                 * Set the value of level.
                 *
                 * @param int $level Level of debug messages to show in the console. Options are 1 (no debug) and 2 (debug).
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setLevel(
                    int $level
                ): self {
                    if ($this->level === $level) {
                        return $this;
                    }

                    $value = $modelData['level'] = $level;

                    

                    

                    $value = $this->validateLevel($value, $modelData);

                    

                    $this->level = $value;
                    $this->_rawModelDataInput['level'] = $level;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property level
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processLevel(array $modelData): void
            {
                
                    
                        if (!array_key_exists('level', $modelData) && $this->level === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('level', $modelData) ? $modelData['level'] : $this->level;

                

                $this->level = $this->validateLevel($value, $modelData);
            }

            /**
             * Execute all validators for the property level
             */
            protected function validateLevel($value, array $modelData)
            {
                
                    
                    if (!in_array($value, array (
   1,
   2,
), true)) {
                        throw new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'level',
  1 => 
  array (
    0 => 1,
    1 => 2,
  ),
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
