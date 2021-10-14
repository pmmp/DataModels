<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\Mutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Player97b5e4ef01343ffe22437e1e01a6a2f9
 * @package pocketmine\datamodels\Mutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Player97b5e4ef01343ffe22437e1e01a6a2f9 implements JSONModelInterface
{
    

    
        /** @var bool Whether to save player data. */
        protected $savePlayerData = true;
    
        /** @var bool Whether to check that joining players' XUIDs match the last recorded XUID (prevents impersonation attacks). */
        protected $verifyXuid = true;
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Player97b5e4ef01343ffe22437e1e01a6a2f9 constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processSavePlayerData($modelData);
            
        
            
                $this->processVerifyXuid($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'save-player-data',
   'verify-xuid',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml_Player97b5e4ef01343ffe22437e1e01a6a2f9',
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
             * Get the value of save-player-data.
             *
             * Whether to save player data.
             *
             * @return bool
             */
            public function getSavePlayerData()
                : bool
            {
                

                return $this->savePlayerData;
            }

            

            /**
             * Extract the value, perform validations and set the property savePlayerData
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processSavePlayerData(array $modelData): void
            {
                
                    
                        if (!array_key_exists('save-player-data', $modelData) && $this->savePlayerData === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('save-player-data', $modelData) ? $modelData['save-player-data'] : $this->savePlayerData;

                

                $this->savePlayerData = $this->validateSavePlayerData($value, $modelData);
            }

            /**
             * Execute all validators for the property savePlayerData
             */
            protected function validateSavePlayerData($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'save-player-data',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of verify-xuid.
             *
             * Whether to check that joining players' XUIDs match the last recorded XUID (prevents impersonation attacks).
             *
             * @return bool
             */
            public function getVerifyXuid()
                : bool
            {
                

                return $this->verifyXuid;
            }

            

            /**
             * Extract the value, perform validations and set the property verifyXuid
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processVerifyXuid(array $modelData): void
            {
                
                    
                        if (!array_key_exists('verify-xuid', $modelData) && $this->verifyXuid === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('verify-xuid', $modelData) ? $modelData['verify-xuid'] : $this->verifyXuid;

                

                $this->verifyXuid = $this->validateVerifyXuid($value, $modelData);
            }

            /**
             * Execute all validators for the property verifyXuid
             */
            protected function validateVerifyXuid($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'verify-xuid',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
