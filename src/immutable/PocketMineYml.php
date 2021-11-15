<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\immutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PocketMineYml
 * @package pocketmine\datamodels\immutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PocketMineYml implements JSONModelInterface
{
    

    
        /** @var PocketMineYml_Settings490b0088ccf6de490a66bcb6f73452ac */
        protected $settings;
    
        /** @var PocketMineYml_Memory3e1f1c5a8dd11cfcec0fa9635c204b3e */
        protected $memory;
    
        /** @var PocketMineYml_Networkec92ea0edb6386321369eba07705cb15 */
        protected $network;
    
        /** @var PocketMineYml_Debugd0fba82ed6a2ef749a8d86820fb8d69a */
        protected $debug;
    
        /** @var PocketMineYml_Player97b5e4ef01343ffe22437e1e01a6a2f9 */
        protected $player;
    
        /** @var PocketMineYml_Levelsettings9666a5a5225100a4496eeb4b42197fbc */
        protected $levelSettings;
    
        /** @var PocketMineYml_Chunksendingb8404e9817294c8ce93ee4f784995316 */
        protected $chunkSending;
    
        /** @var PocketMineYml_Chunktickingab75eb237ca2a7d748b28cadb3bc7cda */
        protected $chunkTicking;
    
        /** @var PocketMineYml_Chunkgeneration57ad4660423fa995b13094489aaaec90 */
        protected $chunkGeneration;
    
        /** @var PocketMineYml_Ticksper557e5a1e1c875599aa39d48b2aa0fca4 */
        protected $ticksPer;
    
        /** @var PocketMineYml_Autoreport80fffffbab8be2dc68ab75c7c99f013a */
        protected $autoReport;
    
        /** @var PocketMineYml_Anonymousstatistics54175173dbb3b7cf74680eb4fa14445b */
        protected $anonymousStatistics;
    
        /** @var PocketMineYml_Autoupdaterc13a76f191cf69bb0b3fdb552a6e4012 */
        protected $autoUpdater;
    
        /** @var PocketMineYml_Timings815b488fba11abaffb85fb93aef44c1e */
        protected $timings;
    
        /** @var PocketMineYml_Console42211ae647abedcbf9abc374a9114a11 */
        protected $console;
    
        /** @var PocketMineYml_Aliasesaf607c42f876773b6737d8a61e41c1a2|null Definitions for custom command aliases. */
        protected $aliases;
    
        /** @var PocketMineYml_Worlds045ae6cc713c091719bd81120f55baf5|null Settings for loading and/or generating multiple worlds. */
        protected $worlds;
    
        /** @var PocketMineYml_Plugins318fe50d7e3eb0c22bb015bb75b526dc|null */
        protected $plugins;
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PocketMineYml constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processSettings($modelData);
            
        
            
                $this->processMemory($modelData);
            
        
            
                $this->processNetwork($modelData);
            
        
            
                $this->processDebug($modelData);
            
        
            
                $this->processPlayer($modelData);
            
        
            
                $this->processLevelSettings($modelData);
            
        
            
                $this->processChunkSending($modelData);
            
        
            
                $this->processChunkTicking($modelData);
            
        
            
                $this->processChunkGeneration($modelData);
            
        
            
                $this->processTicksPer($modelData);
            
        
            
                $this->processAutoReport($modelData);
            
        
            
                $this->processAnonymousStatistics($modelData);
            
        
            
                $this->processAutoUpdater($modelData);
            
        
            
                $this->processTimings($modelData);
            
        
            
                $this->processConsole($modelData);
            
        
            
                $this->processAliases($modelData);
            
        
            
                $this->processWorlds($modelData);
            
        
            
                $this->processPlugins($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'settings',
   'memory',
   'network',
   'debug',
   'player',
   'level-settings',
   'chunk-sending',
   'chunk-ticking',
   'chunk-generation',
   'ticks-per',
   'auto-report',
   'anonymous-statistics',
   'auto-updater',
   'timings',
   'console',
   'aliases',
   'worlds',
   'plugins',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PocketMineYml',
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
             * Get the value of settings.
             *
             * 
             *
             * @return PocketMineYml_Settings490b0088ccf6de490a66bcb6f73452ac
             */
            public function getSettings()
                : PocketMineYml_Settings490b0088ccf6de490a66bcb6f73452ac
            {
                

                return $this->settings;
            }

            

            /**
             * Extract the value, perform validations and set the property settings
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processSettings(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('settings', $modelData) ? $modelData['settings'] : $this->settings;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Settings490b0088ccf6de490a66bcb6f73452ac($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'settings',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->settings = $this->validateSettings($value, $modelData);
            }

            /**
             * Execute all validators for the property settings
             */
            protected function validateSettings($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('settings', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'settings',
));
                    }
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'settings',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Settings490b0088ccf6de490a66bcb6f73452ac)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'settings',
  1 => 'PocketMineYml_Settings490b0088ccf6de490a66bcb6f73452ac',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of memory.
             *
             * 
             *
             * @return PocketMineYml_Memory3e1f1c5a8dd11cfcec0fa9635c204b3e
             */
            public function getMemory()
                : PocketMineYml_Memory3e1f1c5a8dd11cfcec0fa9635c204b3e
            {
                

                return $this->memory;
            }

            

            /**
             * Extract the value, perform validations and set the property memory
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processMemory(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('memory', $modelData) ? $modelData['memory'] : $this->memory;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Memory3e1f1c5a8dd11cfcec0fa9635c204b3e($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'memory',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->memory = $this->validateMemory($value, $modelData);
            }

            /**
             * Execute all validators for the property memory
             */
            protected function validateMemory($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('memory', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'memory',
));
                    }
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'memory',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Memory3e1f1c5a8dd11cfcec0fa9635c204b3e)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'memory',
  1 => 'PocketMineYml_Memory3e1f1c5a8dd11cfcec0fa9635c204b3e',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of network.
             *
             * 
             *
             * @return PocketMineYml_Networkec92ea0edb6386321369eba07705cb15
             */
            public function getNetwork()
                : PocketMineYml_Networkec92ea0edb6386321369eba07705cb15
            {
                

                return $this->network;
            }

            

            /**
             * Extract the value, perform validations and set the property network
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processNetwork(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('network', $modelData) ? $modelData['network'] : $this->network;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Networkec92ea0edb6386321369eba07705cb15($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'network',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->network = $this->validateNetwork($value, $modelData);
            }

            /**
             * Execute all validators for the property network
             */
            protected function validateNetwork($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('network', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'network',
));
                    }
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'network',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Networkec92ea0edb6386321369eba07705cb15)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'network',
  1 => 'PocketMineYml_Networkec92ea0edb6386321369eba07705cb15',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of debug.
             *
             * 
             *
             * @return PocketMineYml_Debugd0fba82ed6a2ef749a8d86820fb8d69a
             */
            public function getDebug()
                : PocketMineYml_Debugd0fba82ed6a2ef749a8d86820fb8d69a
            {
                

                return $this->debug;
            }

            

            /**
             * Extract the value, perform validations and set the property debug
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processDebug(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('debug', $modelData) ? $modelData['debug'] : $this->debug;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Debugd0fba82ed6a2ef749a8d86820fb8d69a($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'debug',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->debug = $this->validateDebug($value, $modelData);
            }

            /**
             * Execute all validators for the property debug
             */
            protected function validateDebug($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('debug', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'debug',
));
                    }
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'debug',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Debugd0fba82ed6a2ef749a8d86820fb8d69a)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'debug',
  1 => 'PocketMineYml_Debugd0fba82ed6a2ef749a8d86820fb8d69a',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of player.
             *
             * 
             *
             * @return PocketMineYml_Player97b5e4ef01343ffe22437e1e01a6a2f9
             */
            public function getPlayer()
                : PocketMineYml_Player97b5e4ef01343ffe22437e1e01a6a2f9
            {
                

                return $this->player;
            }

            

            /**
             * Extract the value, perform validations and set the property player
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processPlayer(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('player', $modelData) ? $modelData['player'] : $this->player;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Player97b5e4ef01343ffe22437e1e01a6a2f9($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'player',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->player = $this->validatePlayer($value, $modelData);
            }

            /**
             * Execute all validators for the property player
             */
            protected function validatePlayer($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('player', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'player',
));
                    }
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'player',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Player97b5e4ef01343ffe22437e1e01a6a2f9)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'player',
  1 => 'PocketMineYml_Player97b5e4ef01343ffe22437e1e01a6a2f9',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of level-settings.
             *
             * 
             *
             * @return PocketMineYml_Levelsettings9666a5a5225100a4496eeb4b42197fbc
             */
            public function getLevelSettings()
                : PocketMineYml_Levelsettings9666a5a5225100a4496eeb4b42197fbc
            {
                

                return $this->levelSettings;
            }

            

            /**
             * Extract the value, perform validations and set the property levelSettings
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processLevelSettings(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('level-settings', $modelData) ? $modelData['level-settings'] : $this->levelSettings;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Levelsettings9666a5a5225100a4496eeb4b42197fbc($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'level-settings',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->levelSettings = $this->validateLevelSettings($value, $modelData);
            }

            /**
             * Execute all validators for the property levelSettings
             */
            protected function validateLevelSettings($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('level-settings', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'level-settings',
));
                    }
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'level-settings',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Levelsettings9666a5a5225100a4496eeb4b42197fbc)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'level-settings',
  1 => 'PocketMineYml_Levelsettings9666a5a5225100a4496eeb4b42197fbc',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of chunk-sending.
             *
             * 
             *
             * @return PocketMineYml_Chunksendingb8404e9817294c8ce93ee4f784995316
             */
            public function getChunkSending()
                : PocketMineYml_Chunksendingb8404e9817294c8ce93ee4f784995316
            {
                

                return $this->chunkSending;
            }

            

            /**
             * Extract the value, perform validations and set the property chunkSending
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processChunkSending(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('chunk-sending', $modelData) ? $modelData['chunk-sending'] : $this->chunkSending;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Chunksendingb8404e9817294c8ce93ee4f784995316($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'chunk-sending',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->chunkSending = $this->validateChunkSending($value, $modelData);
            }

            /**
             * Execute all validators for the property chunkSending
             */
            protected function validateChunkSending($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('chunk-sending', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'chunk-sending',
));
                    }
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'chunk-sending',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Chunksendingb8404e9817294c8ce93ee4f784995316)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'chunk-sending',
  1 => 'PocketMineYml_Chunksendingb8404e9817294c8ce93ee4f784995316',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of chunk-ticking.
             *
             * 
             *
             * @return PocketMineYml_Chunktickingab75eb237ca2a7d748b28cadb3bc7cda
             */
            public function getChunkTicking()
                : PocketMineYml_Chunktickingab75eb237ca2a7d748b28cadb3bc7cda
            {
                

                return $this->chunkTicking;
            }

            

            /**
             * Extract the value, perform validations and set the property chunkTicking
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processChunkTicking(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('chunk-ticking', $modelData) ? $modelData['chunk-ticking'] : $this->chunkTicking;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Chunktickingab75eb237ca2a7d748b28cadb3bc7cda($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'chunk-ticking',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->chunkTicking = $this->validateChunkTicking($value, $modelData);
            }

            /**
             * Execute all validators for the property chunkTicking
             */
            protected function validateChunkTicking($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('chunk-ticking', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'chunk-ticking',
));
                    }
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'chunk-ticking',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Chunktickingab75eb237ca2a7d748b28cadb3bc7cda)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'chunk-ticking',
  1 => 'PocketMineYml_Chunktickingab75eb237ca2a7d748b28cadb3bc7cda',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of chunk-generation.
             *
             * 
             *
             * @return PocketMineYml_Chunkgeneration57ad4660423fa995b13094489aaaec90
             */
            public function getChunkGeneration()
                : PocketMineYml_Chunkgeneration57ad4660423fa995b13094489aaaec90
            {
                

                return $this->chunkGeneration;
            }

            

            /**
             * Extract the value, perform validations and set the property chunkGeneration
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processChunkGeneration(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('chunk-generation', $modelData) ? $modelData['chunk-generation'] : $this->chunkGeneration;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Chunkgeneration57ad4660423fa995b13094489aaaec90($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'chunk-generation',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->chunkGeneration = $this->validateChunkGeneration($value, $modelData);
            }

            /**
             * Execute all validators for the property chunkGeneration
             */
            protected function validateChunkGeneration($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('chunk-generation', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'chunk-generation',
));
                    }
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'chunk-generation',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Chunkgeneration57ad4660423fa995b13094489aaaec90)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'chunk-generation',
  1 => 'PocketMineYml_Chunkgeneration57ad4660423fa995b13094489aaaec90',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of ticks-per.
             *
             * 
             *
             * @return PocketMineYml_Ticksper557e5a1e1c875599aa39d48b2aa0fca4
             */
            public function getTicksPer()
                : PocketMineYml_Ticksper557e5a1e1c875599aa39d48b2aa0fca4
            {
                

                return $this->ticksPer;
            }

            

            /**
             * Extract the value, perform validations and set the property ticksPer
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processTicksPer(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('ticks-per', $modelData) ? $modelData['ticks-per'] : $this->ticksPer;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Ticksper557e5a1e1c875599aa39d48b2aa0fca4($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'ticks-per',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->ticksPer = $this->validateTicksPer($value, $modelData);
            }

            /**
             * Execute all validators for the property ticksPer
             */
            protected function validateTicksPer($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('ticks-per', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'ticks-per',
));
                    }
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'ticks-per',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Ticksper557e5a1e1c875599aa39d48b2aa0fca4)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'ticks-per',
  1 => 'PocketMineYml_Ticksper557e5a1e1c875599aa39d48b2aa0fca4',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of auto-report.
             *
             * 
             *
             * @return PocketMineYml_Autoreport80fffffbab8be2dc68ab75c7c99f013a
             */
            public function getAutoReport()
                : PocketMineYml_Autoreport80fffffbab8be2dc68ab75c7c99f013a
            {
                

                return $this->autoReport;
            }

            

            /**
             * Extract the value, perform validations and set the property autoReport
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processAutoReport(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('auto-report', $modelData) ? $modelData['auto-report'] : $this->autoReport;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Autoreport80fffffbab8be2dc68ab75c7c99f013a($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'auto-report',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->autoReport = $this->validateAutoReport($value, $modelData);
            }

            /**
             * Execute all validators for the property autoReport
             */
            protected function validateAutoReport($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('auto-report', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'auto-report',
));
                    }
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'auto-report',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Autoreport80fffffbab8be2dc68ab75c7c99f013a)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'auto-report',
  1 => 'PocketMineYml_Autoreport80fffffbab8be2dc68ab75c7c99f013a',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of anonymous-statistics.
             *
             * 
             *
             * @return PocketMineYml_Anonymousstatistics54175173dbb3b7cf74680eb4fa14445b
             */
            public function getAnonymousStatistics()
                : PocketMineYml_Anonymousstatistics54175173dbb3b7cf74680eb4fa14445b
            {
                

                return $this->anonymousStatistics;
            }

            

            /**
             * Extract the value, perform validations and set the property anonymousStatistics
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processAnonymousStatistics(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('anonymous-statistics', $modelData) ? $modelData['anonymous-statistics'] : $this->anonymousStatistics;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Anonymousstatistics54175173dbb3b7cf74680eb4fa14445b($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'anonymous-statistics',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->anonymousStatistics = $this->validateAnonymousStatistics($value, $modelData);
            }

            /**
             * Execute all validators for the property anonymousStatistics
             */
            protected function validateAnonymousStatistics($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('anonymous-statistics', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'anonymous-statistics',
));
                    }
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'anonymous-statistics',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Anonymousstatistics54175173dbb3b7cf74680eb4fa14445b)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'anonymous-statistics',
  1 => 'PocketMineYml_Anonymousstatistics54175173dbb3b7cf74680eb4fa14445b',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of auto-updater.
             *
             * 
             *
             * @return PocketMineYml_Autoupdaterc13a76f191cf69bb0b3fdb552a6e4012
             */
            public function getAutoUpdater()
                : PocketMineYml_Autoupdaterc13a76f191cf69bb0b3fdb552a6e4012
            {
                

                return $this->autoUpdater;
            }

            

            /**
             * Extract the value, perform validations and set the property autoUpdater
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processAutoUpdater(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('auto-updater', $modelData) ? $modelData['auto-updater'] : $this->autoUpdater;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Autoupdaterc13a76f191cf69bb0b3fdb552a6e4012($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'auto-updater',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->autoUpdater = $this->validateAutoUpdater($value, $modelData);
            }

            /**
             * Execute all validators for the property autoUpdater
             */
            protected function validateAutoUpdater($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('auto-updater', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'auto-updater',
));
                    }
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'auto-updater',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Autoupdaterc13a76f191cf69bb0b3fdb552a6e4012)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'auto-updater',
  1 => 'PocketMineYml_Autoupdaterc13a76f191cf69bb0b3fdb552a6e4012',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of timings.
             *
             * 
             *
             * @return PocketMineYml_Timings815b488fba11abaffb85fb93aef44c1e
             */
            public function getTimings()
                : PocketMineYml_Timings815b488fba11abaffb85fb93aef44c1e
            {
                

                return $this->timings;
            }

            

            /**
             * Extract the value, perform validations and set the property timings
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processTimings(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('timings', $modelData) ? $modelData['timings'] : $this->timings;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Timings815b488fba11abaffb85fb93aef44c1e($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'timings',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->timings = $this->validateTimings($value, $modelData);
            }

            /**
             * Execute all validators for the property timings
             */
            protected function validateTimings($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('timings', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'timings',
));
                    }
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'timings',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Timings815b488fba11abaffb85fb93aef44c1e)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'timings',
  1 => 'PocketMineYml_Timings815b488fba11abaffb85fb93aef44c1e',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of console.
             *
             * 
             *
             * @return PocketMineYml_Console42211ae647abedcbf9abc374a9114a11
             */
            public function getConsole()
                : PocketMineYml_Console42211ae647abedcbf9abc374a9114a11
            {
                

                return $this->console;
            }

            

            /**
             * Extract the value, perform validations and set the property console
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processConsole(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('console', $modelData) ? $modelData['console'] : $this->console;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Console42211ae647abedcbf9abc374a9114a11($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'console',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->console = $this->validateConsole($value, $modelData);
            }

            /**
             * Execute all validators for the property console
             */
            protected function validateConsole($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('console', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'console',
));
                    }
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'console',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Console42211ae647abedcbf9abc374a9114a11)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'console',
  1 => 'PocketMineYml_Console42211ae647abedcbf9abc374a9114a11',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of aliases.
             *
             * Definitions for custom command aliases.
             *
             * @return PocketMineYml_Aliasesaf607c42f876773b6737d8a61e41c1a2|null
             */
            public function getAliases()
                : ?PocketMineYml_Aliasesaf607c42f876773b6737d8a61e41c1a2
            {
                

                return $this->aliases;
            }

            

            /**
             * Extract the value, perform validations and set the property aliases
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processAliases(array $modelData): void
            {
                
                    
                        if (!array_key_exists('aliases', $modelData) && $this->aliases === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('aliases', $modelData) ? $modelData['aliases'] : $this->aliases;

                

                $this->aliases = $this->validateAliases($value, $modelData);
            }

            /**
             * Execute all validators for the property aliases
             */
            protected function validateAliases($value, array $modelData)
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
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Aliasesaf607c42f876773b6737d8a61e41c1a2($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                throw $instantiationException;
            
        

        
    }
})($value)
;

                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'aliases',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Aliasesaf607c42f876773b6737d8a61e41c1a2)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'aliases',
  1 => 'PocketMineYml_Aliasesaf607c42f876773b6737d8a61e41c1a2',
));
                    }
                

                

                
                    $proposedValue = $proposedValue ?? $value;
                

                
                    if (isset($validatorIndex)) {
                        $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = true;
                    }
                
            }
        } catch (\Exception $e) {
            
                if (isset($validatorIndex)) {
                    $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = false;
                }
            

            

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
                

                

                

                
                    
                    if (!is_null($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'aliases',
  1 => 'null',
));
                    }
                

                

                
                    $proposedValue = $proposedValue ?? $value;
                

                
                    if (isset($validatorIndex)) {
                        $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = true;
                    }
                
            }
        } catch (\Exception $e) {
            
                if (isset($validatorIndex)) {
                    $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = false;
                }
            

            

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
  0 => 'aliases',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of worlds.
             *
             * Settings for loading and/or generating multiple worlds.
             *
             * @return PocketMineYml_Worlds045ae6cc713c091719bd81120f55baf5|null
             */
            public function getWorlds()
                : ?PocketMineYml_Worlds045ae6cc713c091719bd81120f55baf5
            {
                

                return $this->worlds;
            }

            

            /**
             * Extract the value, perform validations and set the property worlds
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processWorlds(array $modelData): void
            {
                
                    
                        if (!array_key_exists('worlds', $modelData) && $this->worlds === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('worlds', $modelData) ? $modelData['worlds'] : $this->worlds;

                

                $this->worlds = $this->validateWorlds($value, $modelData);
            }

            /**
             * Execute all validators for the property worlds
             */
            protected function validateWorlds($value, array $modelData)
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
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Worlds045ae6cc713c091719bd81120f55baf5($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                throw $instantiationException;
            
        

        
    }
})($value)
;

                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'worlds',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Worlds045ae6cc713c091719bd81120f55baf5)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'worlds',
  1 => 'PocketMineYml_Worlds045ae6cc713c091719bd81120f55baf5',
));
                    }
                

                

                
                    $proposedValue = $proposedValue ?? $value;
                

                
                    if (isset($validatorIndex)) {
                        $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = true;
                    }
                
            }
        } catch (\Exception $e) {
            
                if (isset($validatorIndex)) {
                    $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = false;
                }
            

            

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
                

                

                

                
                    
                    if (!is_null($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'worlds',
  1 => 'null',
));
                    }
                

                

                
                    $proposedValue = $proposedValue ?? $value;
                

                
                    if (isset($validatorIndex)) {
                        $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = true;
                    }
                
            }
        } catch (\Exception $e) {
            
                if (isset($validatorIndex)) {
                    $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = false;
                }
            

            

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
  0 => 'worlds',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of plugins.
             *
             * 
             *
             * @return PocketMineYml_Plugins318fe50d7e3eb0c22bb015bb75b526dc|null
             */
            public function getPlugins()
                : ?PocketMineYml_Plugins318fe50d7e3eb0c22bb015bb75b526dc
            {
                

                return $this->plugins;
            }

            

            /**
             * Extract the value, perform validations and set the property plugins
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processPlugins(array $modelData): void
            {
                
                    
                        if (!array_key_exists('plugins', $modelData) && $this->plugins === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('plugins', $modelData) ? $modelData['plugins'] : $this->plugins;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PocketMineYml_Plugins318fe50d7e3eb0c22bb015bb75b526dc($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'plugins',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->plugins = $this->validatePlugins($value, $modelData);
            }

            /**
             * Execute all validators for the property plugins
             */
            protected function validatePlugins($value, array $modelData)
            {
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'plugins',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PocketMineYml_Plugins318fe50d7e3eb0c22bb015bb75b526dc)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'plugins',
  1 => 'PocketMineYml_Plugins318fe50d7e3eb0c22bb015bb75b526dc',
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
