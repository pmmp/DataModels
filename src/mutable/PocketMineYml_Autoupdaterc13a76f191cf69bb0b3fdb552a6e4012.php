<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\mutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Autoupdaterc13a76f191cf69bb0b3fdb552a6e4012
 * @package pocketmine\datamodels\mutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Autoupdaterc13a76f191cf69bb0b3fdb552a6e4012 implements JSONModelInterface
{
    

    
        /** @var bool Whether to enable notifications about new versions. */
        protected $enabled = true;
    
        /** @var PocketMineYml_Onupdatea430590428b1f26841dc53ac9ff83566 */
        protected $onUpdate;
    
        /** @var string Channel to check for updates in. */
        protected $preferredChannel = 'stable';
    
        /** @var bool Whether to suggest changing preferred-channel if running a build not from that channel. */
        protected $suggestChannels = true;
    
        /** @var string IP or URL of the update API host. */
        protected $host = 'update.pmmp.io';
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Autoupdaterc13a76f191cf69bb0b3fdb552a6e4012 constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processEnabled($modelData);
            
        
            
                $this->processOnUpdate($modelData);
            
        
            
                $this->processPreferredChannel($modelData);
            
        
            
                $this->processSuggestChannels($modelData);
            
        
            
                $this->processHost($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'enabled',
   'on-update',
   'preferred-channel',
   'suggest-channels',
   'host',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml_Autoupdaterc13a76f191cf69bb0b3fdb552a6e4012',
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
             * Get the value of enabled.
             *
             * Whether to enable notifications about new versions.
             *
             * @return bool
             */
            public function getEnabled()
                : bool
            {
                

                return $this->enabled;
            }

            
                /**
                 * Set the value of enabled.
                 *
                 * @param bool $enabled Whether to enable notifications about new versions.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setEnabled(
                    bool $enabled
                ): self {
                    if ($this->enabled === $enabled) {
                        return $this;
                    }

                    $value = $modelData['enabled'] = $enabled;

                    

                    

                    $value = $this->validateEnabled($value, $modelData);

                    

                    $this->enabled = $value;
                    $this->_rawModelDataInput['enabled'] = $enabled;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property enabled
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processEnabled(array $modelData): void
            {
                
                    
                        if (!array_key_exists('enabled', $modelData) && $this->enabled === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('enabled', $modelData) ? $modelData['enabled'] : $this->enabled;

                

                $this->enabled = $this->validateEnabled($value, $modelData);
            }

            /**
             * Execute all validators for the property enabled
             */
            protected function validateEnabled($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'enabled',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of on-update.
             *
             * 
             *
             * @return PocketMineYml_Onupdatea430590428b1f26841dc53ac9ff83566
             */
            public function getOnUpdate()
                : PocketMineYml_Onupdatea430590428b1f26841dc53ac9ff83566
            {
                

                return $this->onUpdate;
            }

            
                /**
                 * Set the value of on-update.
                 *
                 * @param PocketMineYml_Onupdatea430590428b1f26841dc53ac9ff83566 $onUpdate
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setOnUpdate(
                    PocketMineYml_Onupdatea430590428b1f26841dc53ac9ff83566 $onUpdate
                ): self {
                    if ($this->onUpdate === $onUpdate) {
                        return $this;
                    }

                    $value = $modelData['on-update'] = $onUpdate;

                    

                    

                    $value = $this->validateOnUpdate($value, $modelData);

                    

                    $this->onUpdate = $value;
                    $this->_rawModelDataInput['on-update'] = $onUpdate;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property onUpdate
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processOnUpdate(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('on-update', $modelData) ? $modelData['on-update'] : $this->onUpdate;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Onupdatea430590428b1f26841dc53ac9ff83566($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'on-update',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->onUpdate = $this->validateOnUpdate($value, $modelData);
            }

            /**
             * Execute all validators for the property onUpdate
             */
            protected function validateOnUpdate($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('on-update', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'on-update',
));
                    }
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'on-update',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Onupdatea430590428b1f26841dc53ac9ff83566)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'on-update',
  1 => 'PocketMineYml_Onupdatea430590428b1f26841dc53ac9ff83566',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of preferred-channel.
             *
             * Channel to check for updates in.
             *
             * @return string
             */
            public function getPreferredChannel()
                : string
            {
                

                return $this->preferredChannel;
            }

            
                /**
                 * Set the value of preferred-channel.
                 *
                 * @param string $preferredChannel Channel to check for updates in.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setPreferredChannel(
                    string $preferredChannel
                ): self {
                    if ($this->preferredChannel === $preferredChannel) {
                        return $this;
                    }

                    $value = $modelData['preferred-channel'] = $preferredChannel;

                    

                    

                    $value = $this->validatePreferredChannel($value, $modelData);

                    

                    $this->preferredChannel = $value;
                    $this->_rawModelDataInput['preferred-channel'] = $preferredChannel;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property preferredChannel
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processPreferredChannel(array $modelData): void
            {
                
                    
                        if (!array_key_exists('preferred-channel', $modelData) && $this->preferredChannel === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('preferred-channel', $modelData) ? $modelData['preferred-channel'] : $this->preferredChannel;

                

                $this->preferredChannel = $this->validatePreferredChannel($value, $modelData);
            }

            /**
             * Execute all validators for the property preferredChannel
             */
            protected function validatePreferredChannel($value, array $modelData)
            {
                
                    
                    if (!is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'preferred-channel',
  1 => 'string',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of suggest-channels.
             *
             * Whether to suggest changing preferred-channel if running a build not from that channel.
             *
             * @return bool
             */
            public function getSuggestChannels()
                : bool
            {
                

                return $this->suggestChannels;
            }

            
                /**
                 * Set the value of suggest-channels.
                 *
                 * @param bool $suggestChannels Whether to suggest changing preferred-channel if running a build not from that channel.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setSuggestChannels(
                    bool $suggestChannels
                ): self {
                    if ($this->suggestChannels === $suggestChannels) {
                        return $this;
                    }

                    $value = $modelData['suggest-channels'] = $suggestChannels;

                    

                    

                    $value = $this->validateSuggestChannels($value, $modelData);

                    

                    $this->suggestChannels = $value;
                    $this->_rawModelDataInput['suggest-channels'] = $suggestChannels;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property suggestChannels
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processSuggestChannels(array $modelData): void
            {
                
                    
                        if (!array_key_exists('suggest-channels', $modelData) && $this->suggestChannels === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('suggest-channels', $modelData) ? $modelData['suggest-channels'] : $this->suggestChannels;

                

                $this->suggestChannels = $this->validateSuggestChannels($value, $modelData);
            }

            /**
             * Execute all validators for the property suggestChannels
             */
            protected function validateSuggestChannels($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'suggest-channels',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of host.
             *
             * IP or URL of the update API host.
             *
             * @return string
             */
            public function getHost()
                : string
            {
                

                return $this->host;
            }

            
                /**
                 * Set the value of host.
                 *
                 * @param string $host IP or URL of the update API host.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setHost(
                    string $host
                ): self {
                    if ($this->host === $host) {
                        return $this;
                    }

                    $value = $modelData['host'] = $host;

                    

                    

                    $value = $this->validateHost($value, $modelData);

                    

                    $this->host = $value;
                    $this->_rawModelDataInput['host'] = $host;

                    

                    return $this;
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
