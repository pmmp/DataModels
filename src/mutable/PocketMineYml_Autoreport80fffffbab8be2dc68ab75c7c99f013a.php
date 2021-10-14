<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\mutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Autoreport80fffffbab8be2dc68ab75c7c99f013a
 * @package pocketmine\datamodels\mutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Autoreport80fffffbab8be2dc68ab75c7c99f013a implements JSONModelInterface
{
    

    
        /** @var bool Whether to upload crash reports automatically */
        protected $enabled = true;
    
        /** @var bool Whether to include a sample of code (usually 20 lines) around the crash location in crashdumps. */
        protected $sendCode = true;
    
        /** @var bool Whether to include server settings (pocketmine.yml, server.properties) in crashdumps. */
        protected $sendSettings = true;
    
        /** @var bool Whether to include information in crashdumps about the PHP binary used to run the server. */
        protected $sendPhpinfo = false;
    
        /** @var bool Whether to use HTTPS to communicate with the crash archive server. */
        protected $useHttps = true;
    
        /** @var string IP or URL of the crash archive server. */
        protected $host = 'crash.pmmp.io';
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Autoreport80fffffbab8be2dc68ab75c7c99f013a constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processEnabled($modelData);
            
        
            
                $this->processSendCode($modelData);
            
        
            
                $this->processSendSettings($modelData);
            
        
            
                $this->processSendPhpinfo($modelData);
            
        
            
                $this->processUseHttps($modelData);
            
        
            
                $this->processHost($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'enabled',
   'send-code',
   'send-settings',
   'send-phpinfo',
   'use-https',
   'host',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml_Autoreport80fffffbab8be2dc68ab75c7c99f013a',
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
             * Whether to upload crash reports automatically
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
                 * @param bool $enabled Whether to upload crash reports automatically
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
             * Get the value of send-code.
             *
             * Whether to include a sample of code (usually 20 lines) around the crash location in crashdumps.
             *
             * @return bool
             */
            public function getSendCode()
                : bool
            {
                

                return $this->sendCode;
            }

            
                /**
                 * Set the value of send-code.
                 *
                 * @param bool $sendCode Whether to include a sample of code (usually 20 lines) around the crash location in crashdumps.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setSendCode(
                    bool $sendCode
                ): self {
                    if ($this->sendCode === $sendCode) {
                        return $this;
                    }

                    $value = $modelData['send-code'] = $sendCode;

                    

                    

                    $value = $this->validateSendCode($value, $modelData);

                    

                    $this->sendCode = $value;
                    $this->_rawModelDataInput['send-code'] = $sendCode;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property sendCode
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processSendCode(array $modelData): void
            {
                
                    
                        if (!array_key_exists('send-code', $modelData) && $this->sendCode === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('send-code', $modelData) ? $modelData['send-code'] : $this->sendCode;

                

                $this->sendCode = $this->validateSendCode($value, $modelData);
            }

            /**
             * Execute all validators for the property sendCode
             */
            protected function validateSendCode($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'send-code',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of send-settings.
             *
             * Whether to include server settings (pocketmine.yml, server.properties) in crashdumps.
             *
             * @return bool
             */
            public function getSendSettings()
                : bool
            {
                

                return $this->sendSettings;
            }

            
                /**
                 * Set the value of send-settings.
                 *
                 * @param bool $sendSettings Whether to include server settings (pocketmine.yml, server.properties) in crashdumps.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setSendSettings(
                    bool $sendSettings
                ): self {
                    if ($this->sendSettings === $sendSettings) {
                        return $this;
                    }

                    $value = $modelData['send-settings'] = $sendSettings;

                    

                    

                    $value = $this->validateSendSettings($value, $modelData);

                    

                    $this->sendSettings = $value;
                    $this->_rawModelDataInput['send-settings'] = $sendSettings;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property sendSettings
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processSendSettings(array $modelData): void
            {
                
                    
                        if (!array_key_exists('send-settings', $modelData) && $this->sendSettings === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('send-settings', $modelData) ? $modelData['send-settings'] : $this->sendSettings;

                

                $this->sendSettings = $this->validateSendSettings($value, $modelData);
            }

            /**
             * Execute all validators for the property sendSettings
             */
            protected function validateSendSettings($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'send-settings',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of send-phpinfo.
             *
             * Whether to include information in crashdumps about the PHP binary used to run the server.
             *
             * @return bool
             */
            public function getSendPhpinfo()
                : bool
            {
                

                return $this->sendPhpinfo;
            }

            
                /**
                 * Set the value of send-phpinfo.
                 *
                 * @param bool $sendPhpinfo Whether to include information in crashdumps about the PHP binary used to run the server.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setSendPhpinfo(
                    bool $sendPhpinfo
                ): self {
                    if ($this->sendPhpinfo === $sendPhpinfo) {
                        return $this;
                    }

                    $value = $modelData['send-phpinfo'] = $sendPhpinfo;

                    

                    

                    $value = $this->validateSendPhpinfo($value, $modelData);

                    

                    $this->sendPhpinfo = $value;
                    $this->_rawModelDataInput['send-phpinfo'] = $sendPhpinfo;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property sendPhpinfo
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processSendPhpinfo(array $modelData): void
            {
                
                    
                        if (!array_key_exists('send-phpinfo', $modelData) && $this->sendPhpinfo === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('send-phpinfo', $modelData) ? $modelData['send-phpinfo'] : $this->sendPhpinfo;

                

                $this->sendPhpinfo = $this->validateSendPhpinfo($value, $modelData);
            }

            /**
             * Execute all validators for the property sendPhpinfo
             */
            protected function validateSendPhpinfo($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'send-phpinfo',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of use-https.
             *
             * Whether to use HTTPS to communicate with the crash archive server.
             *
             * @return bool
             */
            public function getUseHttps()
                : bool
            {
                

                return $this->useHttps;
            }

            
                /**
                 * Set the value of use-https.
                 *
                 * @param bool $useHttps Whether to use HTTPS to communicate with the crash archive server.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setUseHttps(
                    bool $useHttps
                ): self {
                    if ($this->useHttps === $useHttps) {
                        return $this;
                    }

                    $value = $modelData['use-https'] = $useHttps;

                    

                    

                    $value = $this->validateUseHttps($value, $modelData);

                    

                    $this->useHttps = $value;
                    $this->_rawModelDataInput['use-https'] = $useHttps;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property useHttps
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processUseHttps(array $modelData): void
            {
                
                    
                        if (!array_key_exists('use-https', $modelData) && $this->useHttps === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('use-https', $modelData) ? $modelData['use-https'] : $this->useHttps;

                

                $this->useHttps = $this->validateUseHttps($value, $modelData);
            }

            /**
             * Execute all validators for the property useHttps
             */
            protected function validateUseHttps($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'use-https',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of host.
             *
             * IP or URL of the crash archive server.
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
                 * @param string $host IP or URL of the crash archive server.
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
