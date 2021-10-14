<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\immutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Chunkgeneration57ad4660423fa995b13094489aaaec90
 * @package pocketmine\datamodels\immutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Chunkgeneration57ad4660423fa995b13094489aaaec90 implements JSONModelInterface
{
    

    
        /** @var int Maximum number of chunks to generate/populate concurrently. */
        protected $populationQueueSize = 32;
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Chunkgeneration57ad4660423fa995b13094489aaaec90 constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processPopulationQueueSize($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'population-queue-size',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml_Chunkgeneration57ad4660423fa995b13094489aaaec90',
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
             * Get the value of population-queue-size.
             *
             * Maximum number of chunks to generate/populate concurrently.
             *
             * @return int
             */
            public function getPopulationQueueSize()
                : int
            {
                

                return $this->populationQueueSize;
            }

            

            /**
             * Extract the value, perform validations and set the property populationQueueSize
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processPopulationQueueSize(array $modelData): void
            {
                
                    
                        if (!array_key_exists('population-queue-size', $modelData) && $this->populationQueueSize === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('population-queue-size', $modelData) ? $modelData['population-queue-size'] : $this->populationQueueSize;

                

                $this->populationQueueSize = $this->validatePopulationQueueSize($value, $modelData);
            }

            /**
             * Execute all validators for the property populationQueueSize
             */
            protected function validatePopulationQueueSize($value, array $modelData)
            {
                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'population-queue-size',
  1 => 'int',
));
                    }
                
                    
                    if (is_int($value) && $value < 1) {
                        throw new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'population-queue-size',
  1 => 1,
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
