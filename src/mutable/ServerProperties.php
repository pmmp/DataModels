<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\mutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class ServerProperties
 * @package pocketmine\datamodels\mutable 
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
    
        /** @var string|float|null Seed to use for generating the default world */
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
                 * Set the value of motd.
                 *
                 * @param string $motd Message shown on the server entry in game
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setMotd(
                    string $motd
                ): self {
                    if ($this->motd === $motd) {
                        return $this;
                    }

                    $value = $modelData['motd'] = $motd;

                    

                    

                    $value = $this->validateMotd($value, $modelData);

                    

                    $this->motd = $value;
                    $this->_rawModelDataInput['motd'] = $motd;

                    

                    return $this;
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
                 * Set the value of server-ip.
                 *
                 * @param string $serverIp IP address to bind the server on
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setServerIp(
                    string $serverIp
                ): self {
                    if ($this->serverIp === $serverIp) {
                        return $this;
                    }

                    $value = $modelData['server-ip'] = $serverIp;

                    

                    

                    $value = $this->validateServerIp($value, $modelData);

                    

                    $this->serverIp = $value;
                    $this->_rawModelDataInput['server-ip'] = $serverIp;

                    

                    return $this;
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
                 * Set the value of server-port.
                 *
                 * @param int $serverPort Port to open the server on
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setServerPort(
                    int $serverPort
                ): self {
                    if ($this->serverPort === $serverPort) {
                        return $this;
                    }

                    $value = $modelData['server-port'] = $serverPort;

                    

                    

                    $value = $this->validateServerPort($value, $modelData);

                    

                    $this->serverPort = $value;
                    $this->_rawModelDataInput['server-port'] = $serverPort;

                    

                    return $this;
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
                 * Set the value of white-list.
                 *
                 * @param bool $whiteList Whether to enable the server whitelist
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setWhiteList(
                    bool $whiteList
                ): self {
                    if ($this->whiteList === $whiteList) {
                        return $this;
                    }

                    $value = $modelData['white-list'] = $whiteList;

                    

                    

                    $value = $this->validateWhiteList($value, $modelData);

                    

                    $this->whiteList = $value;
                    $this->_rawModelDataInput['white-list'] = $whiteList;

                    

                    return $this;
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
                 * Set the value of max-players.
                 *
                 * @param int $maxPlayers Maximum number of players allowed on the server at once
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setMaxPlayers(
                    int $maxPlayers
                ): self {
                    if ($this->maxPlayers === $maxPlayers) {
                        return $this;
                    }

                    $value = $modelData['max-players'] = $maxPlayers;

                    

                    

                    $value = $this->validateMaxPlayers($value, $modelData);

                    

                    $this->maxPlayers = $value;
                    $this->_rawModelDataInput['max-players'] = $maxPlayers;

                    

                    return $this;
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
                 * Set the value of gamemode.
                 *
                 * @param int $gamemode ID of the global game mode of the server
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setGamemode(
                    int $gamemode
                ): self {
                    if ($this->gamemode === $gamemode) {
                        return $this;
                    }

                    $value = $modelData['gamemode'] = $gamemode;

                    

                    

                    $value = $this->validateGamemode($value, $modelData);

                    

                    $this->gamemode = $value;
                    $this->_rawModelDataInput['gamemode'] = $gamemode;

                    

                    return $this;
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
                 * Set the value of force-gamemode.
                 *
                 * @param bool $forceGamemode Change players' game modes to the server game mode on join
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setForceGamemode(
                    bool $forceGamemode
                ): self {
                    if ($this->forceGamemode === $forceGamemode) {
                        return $this;
                    }

                    $value = $modelData['force-gamemode'] = $forceGamemode;

                    

                    

                    $value = $this->validateForceGamemode($value, $modelData);

                    

                    $this->forceGamemode = $value;
                    $this->_rawModelDataInput['force-gamemode'] = $forceGamemode;

                    

                    return $this;
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
                 * Set the value of hardcore.
                 *
                 * @param bool $hardcore Enable hardcore mode
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setHardcore(
                    bool $hardcore
                ): self {
                    if ($this->hardcore === $hardcore) {
                        return $this;
                    }

                    $value = $modelData['hardcore'] = $hardcore;

                    

                    

                    $value = $this->validateHardcore($value, $modelData);

                    

                    $this->hardcore = $value;
                    $this->_rawModelDataInput['hardcore'] = $hardcore;

                    

                    return $this;
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
                 * Set the value of pvp.
                 *
                 * @param bool $pvp Allow players to attack other players
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setPvp(
                    bool $pvp
                ): self {
                    if ($this->pvp === $pvp) {
                        return $this;
                    }

                    $value = $modelData['pvp'] = $pvp;

                    

                    

                    $value = $this->validatePvp($value, $modelData);

                    

                    $this->pvp = $value;
                    $this->_rawModelDataInput['pvp'] = $pvp;

                    

                    return $this;
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
                 * Set the value of difficulty.
                 *
                 * @param int $difficulty ID of the global difficulty of the server
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setDifficulty(
                    int $difficulty
                ): self {
                    if ($this->difficulty === $difficulty) {
                        return $this;
                    }

                    $value = $modelData['difficulty'] = $difficulty;

                    

                    

                    $value = $this->validateDifficulty($value, $modelData);

                    

                    $this->difficulty = $value;
                    $this->_rawModelDataInput['difficulty'] = $difficulty;

                    

                    return $this;
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
                 * Set the value of generator-settings.
                 *
                 * @param string $generatorSettings Settings to use for generating the default world, if it isn't already generated
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setGeneratorSettings(
                    string $generatorSettings
                ): self {
                    if ($this->generatorSettings === $generatorSettings) {
                        return $this;
                    }

                    $value = $modelData['generator-settings'] = $generatorSettings;

                    

                    

                    $value = $this->validateGeneratorSettings($value, $modelData);

                    

                    $this->generatorSettings = $value;
                    $this->_rawModelDataInput['generator-settings'] = $generatorSettings;

                    

                    return $this;
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
                 * Set the value of level-name.
                 *
                 * @param string $levelName Name of the world to use as default
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setLevelName(
                    string $levelName
                ): self {
                    if ($this->levelName === $levelName) {
                        return $this;
                    }

                    $value = $modelData['level-name'] = $levelName;

                    

                    

                    $value = $this->validateLevelName($value, $modelData);

                    

                    $this->levelName = $value;
                    $this->_rawModelDataInput['level-name'] = $levelName;

                    

                    return $this;
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
             * @return string|float|null
             */
            public function getLevelSeed()
                
            {
                

                return $this->levelSeed;
            }

            
                /**
                 * Set the value of level-seed.
                 *
                 * @param string|float $levelSeed Seed to use for generating the default world
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setLevelSeed(
                     $levelSeed
                ): self {
                    if ($this->levelSeed === $levelSeed) {
                        return $this;
                    }

                    $value = $modelData['level-seed'] = $levelSeed;

                    

                    

                    $value = $this->validateLevelSeed($value, $modelData);

                    

                    $this->levelSeed = $value;
                    $this->_rawModelDataInput['level-seed'] = $levelSeed;

                    

                    return $this;
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

                $value = is_int($value) ? (float) $value : $value;

                $this->levelSeed = $this->validateLevelSeed($value, $modelData);
            }

            /**
             * Execute all validators for the property levelSeed
             */
            protected function validateLevelSeed($value, array $modelData)
            {
                
                    
                    if (!is_string($value) && !is_float($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'level-seed',
  1 => 
  array (
    0 => 'string',
    1 => 'float',
  ),
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
                 * Set the value of level-type.
                 *
                 * @param string $levelType Name of the generator to use for generating the default world
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setLevelType(
                    string $levelType
                ): self {
                    if ($this->levelType === $levelType) {
                        return $this;
                    }

                    $value = $modelData['level-type'] = $levelType;

                    

                    

                    $value = $this->validateLevelType($value, $modelData);

                    

                    $this->levelType = $value;
                    $this->_rawModelDataInput['level-type'] = $levelType;

                    

                    return $this;
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
                 * Set the value of enable-query.
                 *
                 * @param bool $enableQuery Whether to enable GS4 Query
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setEnableQuery(
                    bool $enableQuery
                ): self {
                    if ($this->enableQuery === $enableQuery) {
                        return $this;
                    }

                    $value = $modelData['enable-query'] = $enableQuery;

                    

                    

                    $value = $this->validateEnableQuery($value, $modelData);

                    

                    $this->enableQuery = $value;
                    $this->_rawModelDataInput['enable-query'] = $enableQuery;

                    

                    return $this;
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
                 * Set the value of auto-save.
                 *
                 * @param bool $autoSave Whether to automatically save worlds and player data
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setAutoSave(
                    bool $autoSave
                ): self {
                    if ($this->autoSave === $autoSave) {
                        return $this;
                    }

                    $value = $modelData['auto-save'] = $autoSave;

                    

                    

                    $value = $this->validateAutoSave($value, $modelData);

                    

                    $this->autoSave = $value;
                    $this->_rawModelDataInput['auto-save'] = $autoSave;

                    

                    return $this;
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
                 * Set the value of view-distance.
                 *
                 * @param int $viewDistance Maximum radius of chunks players can load
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setViewDistance(
                    int $viewDistance
                ): self {
                    if ($this->viewDistance === $viewDistance) {
                        return $this;
                    }

                    $value = $modelData['view-distance'] = $viewDistance;

                    

                    

                    $value = $this->validateViewDistance($value, $modelData);

                    

                    $this->viewDistance = $value;
                    $this->_rawModelDataInput['view-distance'] = $viewDistance;

                    

                    return $this;
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
                 * Set the value of xbox-auth.
                 *
                 * @param bool $xboxAuth Whether to require players to be signed into Xbox Live
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setXboxAuth(
                    bool $xboxAuth
                ): self {
                    if ($this->xboxAuth === $xboxAuth) {
                        return $this;
                    }

                    $value = $modelData['xbox-auth'] = $xboxAuth;

                    

                    

                    $value = $this->validateXboxAuth($value, $modelData);

                    

                    $this->xboxAuth = $value;
                    $this->_rawModelDataInput['xbox-auth'] = $xboxAuth;

                    

                    return $this;
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
                 * Set the value of language.
                 *
                 * @param string $language 3-letter code of the language to use for server log messages
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setLanguage(
                    string $language
                ): self {
                    if ($this->language === $language) {
                        return $this;
                    }

                    $value = $modelData['language'] = $language;

                    

                    

                    $value = $this->validateLanguage($value, $modelData);

                    

                    $this->language = $value;
                    $this->_rawModelDataInput['language'] = $language;

                    

                    return $this;
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
