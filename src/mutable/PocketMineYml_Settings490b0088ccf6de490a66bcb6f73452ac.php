<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\mutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml_Settings490b0088ccf6de490a66bcb6f73452ac
 * @package pocketmine\datamodels\mutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml_Settings490b0088ccf6de490a66bcb6f73452ac implements JSONModelInterface
{
    

    
        /** @var bool Whether to send all strings translated to server locale or let the device handle them */
        protected $forceLanguage = false;
    
        /** @var string Message to show when kicking players on server shutdown */
        protected $shutdownMessage = 'Server closed';
    
        /** @var bool Allow listing plugins via Query */
        protected $queryPlugins = true;
    
        /** @var bool Enable timings automatically on startup */
        protected $enableProfiling = false;
    
        /** @var int Will only collect timings when the TPS is below this value */
        protected $profileReportTrigger = 20;
    
        /** @var string|int Number of threads used for processing background tasks such as generation, compression, web requests and plugin async tasks. */
        protected $asyncWorkers = 'auto';
    
        /** @var bool Whether to allow dev builds to run.  Dev builds might crash, break your plugins, corrupt your world and more. */
        protected $enableDevBuilds = false;
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml_Settings490b0088ccf6de490a66bcb6f73452ac constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processForceLanguage($modelData);
            
        
            
                $this->processShutdownMessage($modelData);
            
        
            
                $this->processQueryPlugins($modelData);
            
        
            
                $this->processEnableProfiling($modelData);
            
        
            
                $this->processProfileReportTrigger($modelData);
            
        
            
                $this->processAsyncWorkers($modelData);
            
        
            
                $this->processEnableDevBuilds($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'force-language',
   'shutdown-message',
   'query-plugins',
   'enable-profiling',
   'profile-report-trigger',
   'async-workers',
   'enable-dev-builds',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml_Settings490b0088ccf6de490a66bcb6f73452ac',
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
             * Get the value of force-language.
             *
             * Whether to send all strings translated to server locale or let the device handle them
             *
             * @return bool
             */
            public function getForceLanguage()
                : bool
            {
                

                return $this->forceLanguage;
            }

            
                /**
                 * Set the value of force-language.
                 *
                 * @param bool $forceLanguage Whether to send all strings translated to server locale or let the device handle them
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setForceLanguage(
                    bool $forceLanguage
                ): self {
                    if ($this->forceLanguage === $forceLanguage) {
                        return $this;
                    }

                    $value = $modelData['force-language'] = $forceLanguage;

                    

                    

                    $value = $this->validateForceLanguage($value, $modelData);

                    

                    $this->forceLanguage = $value;
                    $this->_rawModelDataInput['force-language'] = $forceLanguage;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property forceLanguage
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processForceLanguage(array $modelData): void
            {
                
                    
                        if (!array_key_exists('force-language', $modelData) && $this->forceLanguage === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('force-language', $modelData) ? $modelData['force-language'] : $this->forceLanguage;

                

                $this->forceLanguage = $this->validateForceLanguage($value, $modelData);
            }

            /**
             * Execute all validators for the property forceLanguage
             */
            protected function validateForceLanguage($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'force-language',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of shutdown-message.
             *
             * Message to show when kicking players on server shutdown
             *
             * @return string
             */
            public function getShutdownMessage()
                : string
            {
                

                return $this->shutdownMessage;
            }

            
                /**
                 * Set the value of shutdown-message.
                 *
                 * @param string $shutdownMessage Message to show when kicking players on server shutdown
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setShutdownMessage(
                    string $shutdownMessage
                ): self {
                    if ($this->shutdownMessage === $shutdownMessage) {
                        return $this;
                    }

                    $value = $modelData['shutdown-message'] = $shutdownMessage;

                    

                    

                    $value = $this->validateShutdownMessage($value, $modelData);

                    

                    $this->shutdownMessage = $value;
                    $this->_rawModelDataInput['shutdown-message'] = $shutdownMessage;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property shutdownMessage
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processShutdownMessage(array $modelData): void
            {
                
                    
                        if (!array_key_exists('shutdown-message', $modelData) && $this->shutdownMessage === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('shutdown-message', $modelData) ? $modelData['shutdown-message'] : $this->shutdownMessage;

                

                $this->shutdownMessage = $this->validateShutdownMessage($value, $modelData);
            }

            /**
             * Execute all validators for the property shutdownMessage
             */
            protected function validateShutdownMessage($value, array $modelData)
            {
                
                    
                    if (!is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'shutdown-message',
  1 => 'string',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of query-plugins.
             *
             * Allow listing plugins via Query
             *
             * @return bool
             */
            public function getQueryPlugins()
                : bool
            {
                

                return $this->queryPlugins;
            }

            
                /**
                 * Set the value of query-plugins.
                 *
                 * @param bool $queryPlugins Allow listing plugins via Query
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setQueryPlugins(
                    bool $queryPlugins
                ): self {
                    if ($this->queryPlugins === $queryPlugins) {
                        return $this;
                    }

                    $value = $modelData['query-plugins'] = $queryPlugins;

                    

                    

                    $value = $this->validateQueryPlugins($value, $modelData);

                    

                    $this->queryPlugins = $value;
                    $this->_rawModelDataInput['query-plugins'] = $queryPlugins;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property queryPlugins
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processQueryPlugins(array $modelData): void
            {
                
                    
                        if (!array_key_exists('query-plugins', $modelData) && $this->queryPlugins === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('query-plugins', $modelData) ? $modelData['query-plugins'] : $this->queryPlugins;

                

                $this->queryPlugins = $this->validateQueryPlugins($value, $modelData);
            }

            /**
             * Execute all validators for the property queryPlugins
             */
            protected function validateQueryPlugins($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'query-plugins',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of enable-profiling.
             *
             * Enable timings automatically on startup
             *
             * @return bool
             */
            public function getEnableProfiling()
                : bool
            {
                

                return $this->enableProfiling;
            }

            
                /**
                 * Set the value of enable-profiling.
                 *
                 * @param bool $enableProfiling Enable timings automatically on startup
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setEnableProfiling(
                    bool $enableProfiling
                ): self {
                    if ($this->enableProfiling === $enableProfiling) {
                        return $this;
                    }

                    $value = $modelData['enable-profiling'] = $enableProfiling;

                    

                    

                    $value = $this->validateEnableProfiling($value, $modelData);

                    

                    $this->enableProfiling = $value;
                    $this->_rawModelDataInput['enable-profiling'] = $enableProfiling;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property enableProfiling
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processEnableProfiling(array $modelData): void
            {
                
                    
                        if (!array_key_exists('enable-profiling', $modelData) && $this->enableProfiling === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('enable-profiling', $modelData) ? $modelData['enable-profiling'] : $this->enableProfiling;

                

                $this->enableProfiling = $this->validateEnableProfiling($value, $modelData);
            }

            /**
             * Execute all validators for the property enableProfiling
             */
            protected function validateEnableProfiling($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'enable-profiling',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of profile-report-trigger.
             *
             * Will only collect timings when the TPS is below this value
             *
             * @return int
             */
            public function getProfileReportTrigger()
                : int
            {
                

                return $this->profileReportTrigger;
            }

            
                /**
                 * Set the value of profile-report-trigger.
                 *
                 * @param int $profileReportTrigger Will only collect timings when the TPS is below this value
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setProfileReportTrigger(
                    int $profileReportTrigger
                ): self {
                    if ($this->profileReportTrigger === $profileReportTrigger) {
                        return $this;
                    }

                    $value = $modelData['profile-report-trigger'] = $profileReportTrigger;

                    

                    

                    $value = $this->validateProfileReportTrigger($value, $modelData);

                    

                    $this->profileReportTrigger = $value;
                    $this->_rawModelDataInput['profile-report-trigger'] = $profileReportTrigger;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property profileReportTrigger
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processProfileReportTrigger(array $modelData): void
            {
                
                    
                        if (!array_key_exists('profile-report-trigger', $modelData) && $this->profileReportTrigger === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('profile-report-trigger', $modelData) ? $modelData['profile-report-trigger'] : $this->profileReportTrigger;

                

                $this->profileReportTrigger = $this->validateProfileReportTrigger($value, $modelData);
            }

            /**
             * Execute all validators for the property profileReportTrigger
             */
            protected function validateProfileReportTrigger($value, array $modelData)
            {
                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'profile-report-trigger',
  1 => 'int',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of async-workers.
             *
             * Number of threads used for processing background tasks such as generation, compression, web requests and plugin async tasks.
             *
             * @return string|int
             */
            public function getAsyncWorkers()
                
            {
                

                return $this->asyncWorkers;
            }

            
                /**
                 * Set the value of async-workers.
                 *
                 * @param string|int $asyncWorkers Number of threads used for processing background tasks such as generation, compression, web requests and plugin async tasks.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setAsyncWorkers(
                     $asyncWorkers
                ): self {
                    if ($this->asyncWorkers === $asyncWorkers) {
                        return $this;
                    }

                    $value = $modelData['async-workers'] = $asyncWorkers;

                    

                    

                    $value = $this->validateAsyncWorkers($value, $modelData);

                    

                    $this->asyncWorkers = $value;
                    $this->_rawModelDataInput['async-workers'] = $asyncWorkers;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property asyncWorkers
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processAsyncWorkers(array $modelData): void
            {
                
                    
                        if (!array_key_exists('async-workers', $modelData) && $this->asyncWorkers === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('async-workers', $modelData) ? $modelData['async-workers'] : $this->asyncWorkers;

                

                $this->asyncWorkers = $this->validateAsyncWorkers($value, $modelData);
            }

            /**
             * Execute all validators for the property asyncWorkers
             */
            protected function validateAsyncWorkers($value, array $modelData)
            {
                
                    
            $succeededCompositionElements = 0;
            $compositionErrorCollection = [];
        
                    if (
    $value !== null &&

(function (&$value) use (
    &$modelData,
    &$modifiedModelData,
    &$compositionErrorCollection,
    &$succeededCompositionElements,
    &$validatorIndex
) {
    $succeededCompositionElements = 2;
    $validatorComponentIndex = 0;
    $originalModelData = $value;
    $originalPropertyValidationState = $this->_propertyValidationState ?? [];
    $proposedValue = null;

    

    
        try {
            // check if the state of the validator is already known.
            // If none of the properties affected by the validator are changed the validator must not be re-evaluated
            if (isset($validatorIndex) &&
                isset($this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]) &&
                !array_intersect(
                    array_keys($modifiedModelData),
                    [
                        
                    ]
                )
            ) {
                

                if (
                        $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] !== true
                    
                ) {
                    throw new \Exception();
                }
            } else {
                

                

                

                
                    
                    if (!in_array($value, array (
   'auto',
), true)) {
                        throw new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'async-workers',
  1 => 
  array (
    0 => 'auto',
  ),
));
                    }
                

                

                
                    $proposedValue = $proposedValue ?? $value;
                

                
                    isset($validatorIndex) ? $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = true : null;
                
            }
        } catch (\Exception $e) {
            
                isset($validatorIndex) ? $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = false : null;
            

            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    
        try {
            // check if the state of the validator is already known.
            // If none of the properties affected by the validator are changed the validator must not be re-evaluated
            if (isset($validatorIndex) &&
                isset($this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]) &&
                !array_intersect(
                    array_keys($modifiedModelData),
                    [
                        
                    ]
                )
            ) {
                

                if (
                        $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] !== true
                    
                ) {
                    throw new \Exception();
                }
            } else {
                

                

                

                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'async-workers',
  1 => 'int',
));
                    }
                
                    
                    if (is_int($value) && $value < 0) {
                        throw new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'async-workers',
  1 => 0,
));
                    }
                

                

                
                    $proposedValue = $proposedValue ?? $value;
                

                
                    isset($validatorIndex) ? $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = true : null;
                
            }
        } catch (\Exception $e) {
            
                isset($validatorIndex) ? $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = false : null;
            

            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    

    
        $value = $proposedValue;
    

    

    $result = !($succeededCompositionElements === 1);

    if ($result) {
        $this->_propertyValidationState = $originalPropertyValidationState;
    }

    return $result;
})($value)
) {
                        throw new \PHPModelGenerator\Exception\ComposedValue\OneOfException($value ?? null, ...array (
  0 => 'async-workers',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of enable-dev-builds.
             *
             * Whether to allow dev builds to run.  Dev builds might crash, break your plugins, corrupt your world and more.
             *
             * @return bool
             */
            public function getEnableDevBuilds()
                : bool
            {
                

                return $this->enableDevBuilds;
            }

            
                /**
                 * Set the value of enable-dev-builds.
                 *
                 * @param bool $enableDevBuilds Whether to allow dev builds to run.  Dev builds might crash, break your plugins, corrupt your world and more.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setEnableDevBuilds(
                    bool $enableDevBuilds
                ): self {
                    if ($this->enableDevBuilds === $enableDevBuilds) {
                        return $this;
                    }

                    $value = $modelData['enable-dev-builds'] = $enableDevBuilds;

                    

                    

                    $value = $this->validateEnableDevBuilds($value, $modelData);

                    

                    $this->enableDevBuilds = $value;
                    $this->_rawModelDataInput['enable-dev-builds'] = $enableDevBuilds;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property enableDevBuilds
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processEnableDevBuilds(array $modelData): void
            {
                
                    
                        if (!array_key_exists('enable-dev-builds', $modelData) && $this->enableDevBuilds === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('enable-dev-builds', $modelData) ? $modelData['enable-dev-builds'] : $this->enableDevBuilds;

                

                $this->enableDevBuilds = $this->validateEnableDevBuilds($value, $modelData);
            }

            /**
             * Execute all validators for the property enableDevBuilds
             */
            protected function validateEnableDevBuilds($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'enable-dev-builds',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
