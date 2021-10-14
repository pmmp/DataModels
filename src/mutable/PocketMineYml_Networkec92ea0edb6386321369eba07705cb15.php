<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\mutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Networkec92ea0edb6386321369eba07705cb15
 * @package pocketmine\datamodels\mutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Networkec92ea0edb6386321369eba07705cb15 implements JSONModelInterface
{
    

    
        /** @var int Packets over this size in bytes will be compressed. 0 compresses everything, -1 disables compression. */
        protected $batchThreshold = 256;
    
        /** @var int Zlib compression level for packets. Higher = more CPU, less bandwidth usage. */
        protected $compressionLevel = 6;
    
        /** @var bool Whether to always use async workers for compression. Improves overall performance, but slightly increases latency. */
        protected $asyncCompression = false;
    
        /** @var bool Whether to attempt automatic portforwarding using UPnP. */
        protected $upnpForwarding = false;
    
        /** @var int Maximum size of packets sent over the network. Packets larger than this will be split into smaller parts before sending. */
        protected $maxMtuSize = 1492;
    
        /** @var bool Whether to encrypt Minecraft network traffic. */
        protected $enableEncryption = true;
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Networkec92ea0edb6386321369eba07705cb15 constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processBatchThreshold($modelData);
            
        
            
                $this->processCompressionLevel($modelData);
            
        
            
                $this->processAsyncCompression($modelData);
            
        
            
                $this->processUpnpForwarding($modelData);
            
        
            
                $this->processMaxMtuSize($modelData);
            
        
            
                $this->processEnableEncryption($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'batch-threshold',
   'compression-level',
   'async-compression',
   'upnp-forwarding',
   'max-mtu-size',
   'enable-encryption',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml_Networkec92ea0edb6386321369eba07705cb15',
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
             * Get the value of batch-threshold.
             *
             * Packets over this size in bytes will be compressed. 0 compresses everything, -1 disables compression.
             *
             * @return int
             */
            public function getBatchThreshold()
                : int
            {
                

                return $this->batchThreshold;
            }

            
                /**
                 * Set the value of batch-threshold.
                 *
                 * @param int $batchThreshold Packets over this size in bytes will be compressed. 0 compresses everything, -1 disables compression.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setBatchThreshold(
                    int $batchThreshold
                ): self {
                    if ($this->batchThreshold === $batchThreshold) {
                        return $this;
                    }

                    $value = $modelData['batch-threshold'] = $batchThreshold;

                    

                    

                    $value = $this->validateBatchThreshold($value, $modelData);

                    

                    $this->batchThreshold = $value;
                    $this->_rawModelDataInput['batch-threshold'] = $batchThreshold;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property batchThreshold
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processBatchThreshold(array $modelData): void
            {
                
                    
                        if (!array_key_exists('batch-threshold', $modelData) && $this->batchThreshold === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('batch-threshold', $modelData) ? $modelData['batch-threshold'] : $this->batchThreshold;

                

                $this->batchThreshold = $this->validateBatchThreshold($value, $modelData);
            }

            /**
             * Execute all validators for the property batchThreshold
             */
            protected function validateBatchThreshold($value, array $modelData)
            {
                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'batch-threshold',
  1 => 'int',
));
                    }
                
                    
                    if (is_int($value) && $value < -1) {
                        throw new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'batch-threshold',
  1 => -1,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of compression-level.
             *
             * Zlib compression level for packets. Higher = more CPU, less bandwidth usage.
             *
             * @return int
             */
            public function getCompressionLevel()
                : int
            {
                

                return $this->compressionLevel;
            }

            
                /**
                 * Set the value of compression-level.
                 *
                 * @param int $compressionLevel Zlib compression level for packets. Higher = more CPU, less bandwidth usage.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setCompressionLevel(
                    int $compressionLevel
                ): self {
                    if ($this->compressionLevel === $compressionLevel) {
                        return $this;
                    }

                    $value = $modelData['compression-level'] = $compressionLevel;

                    

                    

                    $value = $this->validateCompressionLevel($value, $modelData);

                    

                    $this->compressionLevel = $value;
                    $this->_rawModelDataInput['compression-level'] = $compressionLevel;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property compressionLevel
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processCompressionLevel(array $modelData): void
            {
                
                    
                        if (!array_key_exists('compression-level', $modelData) && $this->compressionLevel === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('compression-level', $modelData) ? $modelData['compression-level'] : $this->compressionLevel;

                

                $this->compressionLevel = $this->validateCompressionLevel($value, $modelData);
            }

            /**
             * Execute all validators for the property compressionLevel
             */
            protected function validateCompressionLevel($value, array $modelData)
            {
                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'compression-level',
  1 => 'int',
));
                    }
                
                    
                    if (is_int($value) && $value < 1) {
                        throw new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'compression-level',
  1 => 1,
));
                    }
                
                    
                    if (is_int($value) && $value > 9) {
                        throw new \PHPModelGenerator\Exception\Number\MaximumException($value ?? null, ...array (
  0 => 'compression-level',
  1 => 9,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of async-compression.
             *
             * Whether to always use async workers for compression. Improves overall performance, but slightly increases latency.
             *
             * @return bool
             */
            public function getAsyncCompression()
                : bool
            {
                

                return $this->asyncCompression;
            }

            
                /**
                 * Set the value of async-compression.
                 *
                 * @param bool $asyncCompression Whether to always use async workers for compression. Improves overall performance, but slightly increases latency.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setAsyncCompression(
                    bool $asyncCompression
                ): self {
                    if ($this->asyncCompression === $asyncCompression) {
                        return $this;
                    }

                    $value = $modelData['async-compression'] = $asyncCompression;

                    

                    

                    $value = $this->validateAsyncCompression($value, $modelData);

                    

                    $this->asyncCompression = $value;
                    $this->_rawModelDataInput['async-compression'] = $asyncCompression;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property asyncCompression
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processAsyncCompression(array $modelData): void
            {
                
                    
                        if (!array_key_exists('async-compression', $modelData) && $this->asyncCompression === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('async-compression', $modelData) ? $modelData['async-compression'] : $this->asyncCompression;

                

                $this->asyncCompression = $this->validateAsyncCompression($value, $modelData);
            }

            /**
             * Execute all validators for the property asyncCompression
             */
            protected function validateAsyncCompression($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'async-compression',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of upnp-forwarding.
             *
             * Whether to attempt automatic portforwarding using UPnP.
             *
             * @return bool
             */
            public function getUpnpForwarding()
                : bool
            {
                

                return $this->upnpForwarding;
            }

            
                /**
                 * Set the value of upnp-forwarding.
                 *
                 * @param bool $upnpForwarding Whether to attempt automatic portforwarding using UPnP.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setUpnpForwarding(
                    bool $upnpForwarding
                ): self {
                    if ($this->upnpForwarding === $upnpForwarding) {
                        return $this;
                    }

                    $value = $modelData['upnp-forwarding'] = $upnpForwarding;

                    

                    

                    $value = $this->validateUpnpForwarding($value, $modelData);

                    

                    $this->upnpForwarding = $value;
                    $this->_rawModelDataInput['upnp-forwarding'] = $upnpForwarding;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property upnpForwarding
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processUpnpForwarding(array $modelData): void
            {
                
                    
                        if (!array_key_exists('upnp-forwarding', $modelData) && $this->upnpForwarding === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('upnp-forwarding', $modelData) ? $modelData['upnp-forwarding'] : $this->upnpForwarding;

                

                $this->upnpForwarding = $this->validateUpnpForwarding($value, $modelData);
            }

            /**
             * Execute all validators for the property upnpForwarding
             */
            protected function validateUpnpForwarding($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'upnp-forwarding',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of max-mtu-size.
             *
             * Maximum size of packets sent over the network. Packets larger than this will be split into smaller parts before sending.
             *
             * @return int
             */
            public function getMaxMtuSize()
                : int
            {
                

                return $this->maxMtuSize;
            }

            
                /**
                 * Set the value of max-mtu-size.
                 *
                 * @param int $maxMtuSize Maximum size of packets sent over the network. Packets larger than this will be split into smaller parts before sending.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setMaxMtuSize(
                    int $maxMtuSize
                ): self {
                    if ($this->maxMtuSize === $maxMtuSize) {
                        return $this;
                    }

                    $value = $modelData['max-mtu-size'] = $maxMtuSize;

                    

                    

                    $value = $this->validateMaxMtuSize($value, $modelData);

                    

                    $this->maxMtuSize = $value;
                    $this->_rawModelDataInput['max-mtu-size'] = $maxMtuSize;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property maxMtuSize
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processMaxMtuSize(array $modelData): void
            {
                
                    
                        if (!array_key_exists('max-mtu-size', $modelData) && $this->maxMtuSize === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('max-mtu-size', $modelData) ? $modelData['max-mtu-size'] : $this->maxMtuSize;

                

                $this->maxMtuSize = $this->validateMaxMtuSize($value, $modelData);
            }

            /**
             * Execute all validators for the property maxMtuSize
             */
            protected function validateMaxMtuSize($value, array $modelData)
            {
                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'max-mtu-size',
  1 => 'int',
));
                    }
                
                    
                    if (is_int($value) && $value < 400) {
                        throw new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'max-mtu-size',
  1 => 400,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of enable-encryption.
             *
             * Whether to encrypt Minecraft network traffic.
             *
             * @return bool
             */
            public function getEnableEncryption()
                : bool
            {
                

                return $this->enableEncryption;
            }

            
                /**
                 * Set the value of enable-encryption.
                 *
                 * @param bool $enableEncryption Whether to encrypt Minecraft network traffic.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setEnableEncryption(
                    bool $enableEncryption
                ): self {
                    if ($this->enableEncryption === $enableEncryption) {
                        return $this;
                    }

                    $value = $modelData['enable-encryption'] = $enableEncryption;

                    

                    

                    $value = $this->validateEnableEncryption($value, $modelData);

                    

                    $this->enableEncryption = $value;
                    $this->_rawModelDataInput['enable-encryption'] = $enableEncryption;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property enableEncryption
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processEnableEncryption(array $modelData): void
            {
                
                    
                        if (!array_key_exists('enable-encryption', $modelData) && $this->enableEncryption === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('enable-encryption', $modelData) ? $modelData['enable-encryption'] : $this->enableEncryption;

                

                $this->enableEncryption = $this->validateEnableEncryption($value, $modelData);
            }

            /**
             * Execute all validators for the property enableEncryption
             */
            protected function validateEnableEncryption($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'enable-encryption',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
