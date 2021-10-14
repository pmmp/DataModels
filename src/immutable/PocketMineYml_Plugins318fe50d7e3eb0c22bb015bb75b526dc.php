<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\immutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Plugins318fe50d7e3eb0c22bb015bb75b526dc
 * @package pocketmine\datamodels\immutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Plugins318fe50d7e3eb0c22bb015bb75b526dc implements JSONModelInterface
{
    

    
        /** @var bool|null Whether to store plugin data in plugins directory instead of plugin_data. */
        protected $legacyDataDir;
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Plugins318fe50d7e3eb0c22bb015bb75b526dc constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processLegacyDataDir($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'legacy-data-dir',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml_Plugins318fe50d7e3eb0c22bb015bb75b526dc',
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
             * Get the value of legacy-data-dir.
             *
             * Whether to store plugin data in plugins directory instead of plugin_data.
             *
             * @return bool|null
             */
            public function getLegacyDataDir()
                : ?bool
            {
                

                return $this->legacyDataDir;
            }

            

            /**
             * Extract the value, perform validations and set the property legacyDataDir
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processLegacyDataDir(array $modelData): void
            {
                
                    
                        if (!array_key_exists('legacy-data-dir', $modelData) && $this->legacyDataDir === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('legacy-data-dir', $modelData) ? $modelData['legacy-data-dir'] : $this->legacyDataDir;

                

                $this->legacyDataDir = $this->validateLegacyDataDir($value, $modelData);
            }

            /**
             * Execute all validators for the property legacyDataDir
             */
            protected function validateLegacyDataDir($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'legacy-data-dir',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
