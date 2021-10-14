<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\Mutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class ServerProperties
 * @package pocketmine\datamodels\Mutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class ServerProperties implements JSONModelInterface
{
    

    
        /** @var string Message shown on the server entry in game */
        protected $motd = 'PocketMine-MP Server';
    
        /** @var string IP address to bind the server on */
        protected $serverIp = '0.0.0.0';
    
        /** @var int Port to open the server on */
        protected $serverPort = 19132;
    
        /** @var bool Whether to enable the server whitelist */
        protected $whiteList = false;
    
        /** @var int Maximum number of players allowed on the server at once */
        protected $maxPlayers = 20;
    
        /** @var int ID of the global game mode of the server */
        protected $gamemode = 0;
    
        /** @var bool Change players' game modes to the server game mode on join */
        protected $forceGamemode = false;
    
        /** @var bool Enable hardcore mode */
        protected $hardcore = false;
    
        /** @var bool Allow players to attack other players */
        protected $pvp = true;
    
        /** @var int ID of the global difficulty of the server */
        protected $difficulty = 1;
    
        /** @var string|null Settings to use for generating the default world, if it isn't already generated */
        protected $generatorSettings;
    
        /** @var string Name of the world to use as default */
        protected $levelName = 'world';
    
        /** @var float|string|null Seed to use for generating the default world */
        protected $levelSeed;
    
        /** @var string Name of the generator to use for generating the default world */
        protected $levelType = 'default';
    
        /** @var bool Whether to enable GS4 Query */
        protected $enableQuery = true;
    
        /** @var bool Whether to automatically save worlds and player data */
        protected $autoSave = true;
    
        /** @var int Maximum radius of chunks players can load */
        protected $viewDistance = 8;
    
        /** @var bool Whether to require players to be signed into Xbox Live */
        protected $xboxAuth = true;
    
        /** @var string|null 3-letter code of the language to use for server log messages */
        protected $language;
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * ServerProperties constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processMotd($modelData);
            
        
            
                $this->processServerIp($modelData);
            
        
            
                $this->processServerPort($modelData);
            
        
            
                $this->processWhiteList($modelData);
            
        
            
                $this->processMaxPlayers($modelData);
            
        
            
                $this->processGamemode($modelData);
            
        
            
                $this->processForceGamemode($modelData);
            
        
            
                $this->processHardcore($modelData);
            
        
            
                $this->processPvp($modelData);
            
        
            
                $this->processDifficulty($modelData);
            
        
            
                $this->processGeneratorSettings($modelData);
            
        
            
                $this->processLevelName($modelData);
            
        
            
                $this->processLevelSeed($modelData);
            
        
            
                $this->processLevelType($modelData);
            
        
            
                $this->processEnableQuery($modelData);
            
        
            
                $this->processAutoSave($modelData);
            
        
            
                $this->processViewDistance($modelData);
            
        
            
                $this->processXboxAuth($modelData);
            
        
            
                $this->processLanguage($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'motd',
   'server-ip',
   'server-port',
   'white-list',
   'max-players',
   'gamemode',
   'force-gamemode',
   'hardcore',
   'pvp',
   'difficulty',
   'generator-settings',
   'level-name',
   'level-seed',
   'level-type',
   'enable-query',
   'auto-save',
   'view-distance',
   'xbox-auth',
   'language',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'ServerProperties',
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
             * Get the value of motd.
             *
             * Message shown on the server entry in game
             *
             * @return string
             */
            public function getMotd()
                : string
            {
                

                return $this->motd;
            }

            

            /**
             * Extract the value, perform validations and set the property motd
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processMotd(array $modelData): void
            {
                
                    
                        if (!array_key_exists('motd', $modelData) && $this->motd === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('motd', $modelData) ? $modelData['motd'] : $this->motd;

                

                $this->motd = $this->validateMotd($value, $modelData);
            }

            /**
             * Execute all validators for the property motd
             */
            protected function validateMotd($value, array $modelData)
            {
                
                    
                    if (!is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'motd',
  1 => 'string',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of server-ip.
             *
             * IP address to bind the server on
             *
             * @return string
             */
            public function getServerIp()
                : string
            {
                

                return $this->serverIp;
            }

            

            /**
             * Extract the value, perform validations and set the property serverIp
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processServerIp(array $modelData): void
            {
                
                    
                        if (!array_key_exists('server-ip', $modelData) && $this->serverIp === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('server-ip', $modelData) ? $modelData['server-ip'] : $this->serverIp;

                

                $this->serverIp = $this->validateServerIp($value, $modelData);
            }

            /**
             * Execute all validators for the property serverIp
             */
            protected function validateServerIp($value, array $modelData)
            {
                
                    
                    if (!is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'server-ip',
  1 => 'string',
));
                    }
                
                    
                    if (is_string($value) && !preg_match(base64_decode('L15cZCtcLlxkK1wuXGQrXC5cZCskLw=='), $value)) {
                        throw new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'server-ip',
  1 => '^\\d+\\.\\d+\\.\\d+\\.\\d+$',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of server-port.
             *
             * Port to open the server on
             *
             * @return int
             */
            public function getServerPort()
                : int
            {
                

                return $this->serverPort;
            }

            

            /**
             * Extract the value, perform validations and set the property serverPort
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processServerPort(array $modelData): void
            {
                
                    
                        if (!array_key_exists('server-port', $modelData) && $this->serverPort === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('server-port', $modelData) ? $modelData['server-port'] : $this->serverPort;

                

                $this->serverPort = $this->validateServerPort($value, $modelData);
            }

            /**
             * Execute all validators for the property serverPort
             */
            protected function validateServerPort($value, array $modelData)
            {
                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'server-port',
  1 => 'int',
));
                    }
                
                    
                    if (is_int($value) && $value < 1) {
                        throw new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'server-port',
  1 => 1,
));
                    }
                
                    
                    if (is_int($value) && $value > 65535) {
                        throw new \PHPModelGenerator\Exception\Number\MaximumException($value ?? null, ...array (
  0 => 'server-port',
  1 => 65535,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of white-list.
             *
             * Whether to enable the server whitelist
             *
             * @return bool
             */
            public function getWhiteList()
                : bool
            {
                

                return $this->whiteList;
            }

            

            /**
             * Extract the value, perform validations and set the property whiteList
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processWhiteList(array $modelData): void
            {
                
                    
                        if (!array_key_exists('white-list', $modelData) && $this->whiteList === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('white-list', $modelData) ? $modelData['white-list'] : $this->whiteList;

                

                $this->whiteList = $this->validateWhiteList($value, $modelData);
            }

            /**
             * Execute all validators for the property whiteList
             */
            protected function validateWhiteList($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'white-list',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of max-players.
             *
             * Maximum number of players allowed on the server at once
             *
             * @return int
             */
            public function getMaxPlayers()
                : int
            {
                

                return $this->maxPlayers;
            }

            

            /**
             * Extract the value, perform validations and set the property maxPlayers
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processMaxPlayers(array $modelData): void
            {
                
                    
                        if (!array_key_exists('max-players', $modelData) && $this->maxPlayers === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('max-players', $modelData) ? $modelData['max-players'] : $this->maxPlayers;

                

                $this->maxPlayers = $this->validateMaxPlayers($value, $modelData);
            }

            /**
             * Execute all validators for the property maxPlayers
             */
            protected function validateMaxPlayers($value, array $modelData)
            {
                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'max-players',
  1 => 'int',
));
                    }
                
                    
                    if (is_int($value) && $value < 1) {
                        throw new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'max-players',
  1 => 1,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of gamemode.
             *
             * ID of the global game mode of the server
             *
             * @return int
             */
            public function getGamemode()
                : int
            {
                

                return $this->gamemode;
            }

            

            /**
             * Extract the value, perform validations and set the property gamemode
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processGamemode(array $modelData): void
            {
                
                    
                        if (!array_key_exists('gamemode', $modelData) && $this->gamemode === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('gamemode', $modelData) ? $modelData['gamemode'] : $this->gamemode;

                

                $this->gamemode = $this->validateGamemode($value, $modelData);
            }

            /**
             * Execute all validators for the property gamemode
             */
            protected function validateGamemode($value, array $modelData)
            {
                
                    
                    if (!in_array($value, array (
   0,
   1,
   2,
   3,
), true)) {
                        throw new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'gamemode',
  1 => 
  array (
    0 => 0,
    1 => 1,
    2 => 2,
    3 => 3,
  ),
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of force-gamemode.
             *
             * Change players' game modes to the server game mode on join
             *
             * @return bool
             */
            public function getForceGamemode()
                : bool
            {
                

                return $this->forceGamemode;
            }

            

            /**
             * Extract the value, perform validations and set the property forceGamemode
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processForceGamemode(array $modelData): void
            {
                
                    
                        if (!array_key_exists('force-gamemode', $modelData) && $this->forceGamemode === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('force-gamemode', $modelData) ? $modelData['force-gamemode'] : $this->forceGamemode;

                

                $this->forceGamemode = $this->validateForceGamemode($value, $modelData);
            }

            /**
             * Execute all validators for the property forceGamemode
             */
            protected function validateForceGamemode($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'force-gamemode',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of hardcore.
             *
             * Enable hardcore mode
             *
             * @return bool
             */
            public function getHardcore()
                : bool
            {
                

                return $this->hardcore;
            }

            

            /**
             * Extract the value, perform validations and set the property hardcore
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processHardcore(array $modelData): void
            {
                
                    
                        if (!array_key_exists('hardcore', $modelData) && $this->hardcore === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('hardcore', $modelData) ? $modelData['hardcore'] : $this->hardcore;

                

                $this->hardcore = $this->validateHardcore($value, $modelData);
            }

            /**
             * Execute all validators for the property hardcore
             */
            protected function validateHardcore($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'hardcore',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of pvp.
             *
             * Allow players to attack other players
             *
             * @return bool
             */
            public function getPvp()
                : bool
            {
                

                return $this->pvp;
            }

            

            /**
             * Extract the value, perform validations and set the property pvp
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processPvp(array $modelData): void
            {
                
                    
                        if (!array_key_exists('pvp', $modelData) && $this->pvp === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('pvp', $modelData) ? $modelData['pvp'] : $this->pvp;

                

                $this->pvp = $this->validatePvp($value, $modelData);
            }

            /**
             * Execute all validators for the property pvp
             */
            protected function validatePvp($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'pvp',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of difficulty.
             *
             * ID of the global difficulty of the server
             *
             * @return int
             */
            public function getDifficulty()
                : int
            {
                

                return $this->difficulty;
            }

            

            /**
             * Extract the value, perform validations and set the property difficulty
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processDifficulty(array $modelData): void
            {
                
                    
                        if (!array_key_exists('difficulty', $modelData) && $this->difficulty === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('difficulty', $modelData) ? $modelData['difficulty'] : $this->difficulty;

                

                $this->difficulty = $this->validateDifficulty($value, $modelData);
            }

            /**
             * Execute all validators for the property difficulty
             */
            protected function validateDifficulty($value, array $modelData)
            {
                
                    
                    if (!in_array($value, array (
   0,
   1,
   2,
   3,
), true)) {
                        throw new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'difficulty',
  1 => 
  array (
    0 => 0,
    1 => 1,
    2 => 2,
    3 => 3,
  ),
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of generator-settings.
             *
             * Settings to use for generating the default world, if it isn't already generated
             *
             * @return string|null
             */
            public function getGeneratorSettings()
                : ?string
            {
                

                return $this->generatorSettings;
            }

            

            /**
             * Extract the value, perform validations and set the property generatorSettings
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processGeneratorSettings(array $modelData): void
            {
                
                    
                        if (!array_key_exists('generator-settings', $modelData) && $this->generatorSettings === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('generator-settings', $modelData) ? $modelData['generator-settings'] : $this->generatorSettings;

                

                $this->generatorSettings = $this->validateGeneratorSettings($value, $modelData);
            }

            /**
             * Execute all validators for the property generatorSettings
             */
            protected function validateGeneratorSettings($value, array $modelData)
            {
                
                    
                    if (!is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'generator-settings',
  1 => 'string',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of level-name.
             *
             * Name of the world to use as default
             *
             * @return string
             */
            public function getLevelName()
                : string
            {
                

                return $this->levelName;
            }

            

            /**
             * Extract the value, perform validations and set the property levelName
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processLevelName(array $modelData): void
            {
                
                    
                        if (!array_key_exists('level-name', $modelData) && $this->levelName === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('level-name', $modelData) ? $modelData['level-name'] : $this->levelName;

                

                $this->levelName = $this->validateLevelName($value, $modelData);
            }

            /**
             * Execute all validators for the property levelName
             */
            protected function validateLevelName($value, array $modelData)
            {
                
                    
                    if (!is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'level-name',
  1 => 'string',
));
                    }
                
                    
                    if (is_string($value) && mb_strlen($value) < 1) {
                        throw new \PHPModelGenerator\Exception\String\MinLengthException($value ?? null, ...array (
  0 => 'level-name',
  1 => 1,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of level-seed.
             *
             * Seed to use for generating the default world
             *
             * @return float|string|null
             */
            public function getLevelSeed()
                
            {
                

                return $this->levelSeed;
            }

            

            /**
             * Extract the value, perform validations and set the property levelSeed
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processLevelSeed(array $modelData): void
            {
                
                    
                        if (!array_key_exists('level-seed', $modelData) && $this->levelSeed === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('level-seed', $modelData) ? $modelData['level-seed'] : $this->levelSeed;

                

                $this->levelSeed = $this->validateLevelSeed($value, $modelData);
            }

            /**
             * Execute all validators for the property levelSeed
             */
            protected function validateLevelSeed($value, array $modelData)
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
                

                

                $value = is_int($value) ? (float) $value : $value;

                
                    
                    if (!is_float($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'level-seed',
  1 => 'float',
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
                

                

                

                
                    
                    if (!is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'level-seed',
  1 => 'string',
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
    

    

    $result = !($succeededCompositionElements > 0);

    if ($result) {
        $this->_propertyValidationState = $originalPropertyValidationState;
    }

    return $result;
})($value)
) {
                        throw new \PHPModelGenerator\Exception\ComposedValue\AnyOfException($value ?? null, ...array (
  0 => 'level-seed',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of level-type.
             *
             * Name of the generator to use for generating the default world
             *
             * @return string
             */
            public function getLevelType()
                : string
            {
                

                return $this->levelType;
            }

            

            /**
             * Extract the value, perform validations and set the property levelType
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processLevelType(array $modelData): void
            {
                
                    
                        if (!array_key_exists('level-type', $modelData) && $this->levelType === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('level-type', $modelData) ? $modelData['level-type'] : $this->levelType;

                

                $this->levelType = $this->validateLevelType($value, $modelData);
            }

            /**
             * Execute all validators for the property levelType
             */
            protected function validateLevelType($value, array $modelData)
            {
                
                    
                    if (!is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'level-type',
  1 => 'string',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of enable-query.
             *
             * Whether to enable GS4 Query
             *
             * @return bool
             */
            public function getEnableQuery()
                : bool
            {
                

                return $this->enableQuery;
            }

            

            /**
             * Extract the value, perform validations and set the property enableQuery
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processEnableQuery(array $modelData): void
            {
                
                    
                        if (!array_key_exists('enable-query', $modelData) && $this->enableQuery === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('enable-query', $modelData) ? $modelData['enable-query'] : $this->enableQuery;

                

                $this->enableQuery = $this->validateEnableQuery($value, $modelData);
            }

            /**
             * Execute all validators for the property enableQuery
             */
            protected function validateEnableQuery($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'enable-query',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of auto-save.
             *
             * Whether to automatically save worlds and player data
             *
             * @return bool
             */
            public function getAutoSave()
                : bool
            {
                

                return $this->autoSave;
            }

            

            /**
             * Extract the value, perform validations and set the property autoSave
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processAutoSave(array $modelData): void
            {
                
                    
                        if (!array_key_exists('auto-save', $modelData) && $this->autoSave === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('auto-save', $modelData) ? $modelData['auto-save'] : $this->autoSave;

                

                $this->autoSave = $this->validateAutoSave($value, $modelData);
            }

            /**
             * Execute all validators for the property autoSave
             */
            protected function validateAutoSave($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'auto-save',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of view-distance.
             *
             * Maximum radius of chunks players can load
             *
             * @return int
             */
            public function getViewDistance()
                : int
            {
                

                return $this->viewDistance;
            }

            

            /**
             * Extract the value, perform validations and set the property viewDistance
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processViewDistance(array $modelData): void
            {
                
                    
                        if (!array_key_exists('view-distance', $modelData) && $this->viewDistance === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('view-distance', $modelData) ? $modelData['view-distance'] : $this->viewDistance;

                

                $this->viewDistance = $this->validateViewDistance($value, $modelData);
            }

            /**
             * Execute all validators for the property viewDistance
             */
            protected function validateViewDistance($value, array $modelData)
            {
                
                    
                    if (!is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'view-distance',
  1 => 'int',
));
                    }
                
                    
                    if (is_int($value) && $value < 2) {
                        throw new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'view-distance',
  1 => 2,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of xbox-auth.
             *
             * Whether to require players to be signed into Xbox Live
             *
             * @return bool
             */
            public function getXboxAuth()
                : bool
            {
                

                return $this->xboxAuth;
            }

            

            /**
             * Extract the value, perform validations and set the property xboxAuth
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processXboxAuth(array $modelData): void
            {
                
                    
                        if (!array_key_exists('xbox-auth', $modelData) && $this->xboxAuth === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('xbox-auth', $modelData) ? $modelData['xbox-auth'] : $this->xboxAuth;

                

                $this->xboxAuth = $this->validateXboxAuth($value, $modelData);
            }

            /**
             * Execute all validators for the property xboxAuth
             */
            protected function validateXboxAuth($value, array $modelData)
            {
                
                    
                    if (!is_bool($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'xbox-auth',
  1 => 'bool',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of language.
             *
             * 3-letter code of the language to use for server log messages
             *
             * @return string|null
             */
            public function getLanguage()
                : ?string
            {
                

                return $this->language;
            }

            

            /**
             * Extract the value, perform validations and set the property language
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processLanguage(array $modelData): void
            {
                
                    
                        if (!array_key_exists('language', $modelData) && $this->language === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('language', $modelData) ? $modelData['language'] : $this->language;

                

                $this->language = $this->validateLanguage($value, $modelData);
            }

            /**
             * Execute all validators for the property language
             */
            protected function validateLanguage($value, array $modelData)
            {
                
                    
                    if (!is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'language',
  1 => 'string',
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
