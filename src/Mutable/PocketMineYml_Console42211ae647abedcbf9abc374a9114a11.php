<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\Mutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Console42211ae647abedcbf9abc374a9114a11
 * @package pocketmine\datamodels\Mutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Console42211ae647abedcbf9abc374a9114a11 implements JSONModelInterface
{
    

    
        /** @var bool Whether to enable status reporting on the window title bar. */
        protected $titleTick = true;
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Console42211ae647abedcbf9abc374a9114a11 constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processTitleTick($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'title-tick',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml_Console42211ae647abedcbf9abc374a9114a11',
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
             * Get the value of title-tick.
             *
             * Whether to enable status reporting on the window title bar.
             *
             * @return bool
             */
            public function getTitleTick()
                : bool
            {
                

                return $this->titleTick;
            }

            

            /**
             * Extract the value, perform validations and set the property titleTick
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processTitleTick(array $modelData): void
            {
                
                    
                        if (!array_key_exists('title-tick', $modelData) && $this->titleTick === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('title-tick', $modelData) ? $modelData['title-tick'] : $this->titleTick;

                

                $this->titleTick = $this->validateTitleTick($value, $modelData);
            }

            /**
             * Execute all validators for the property titleTick
             */
            protected function validateTitleTick($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'title-tick',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
