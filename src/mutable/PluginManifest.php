<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace pocketmine\datamodels\mutable;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Exception\Object\RegularPropertyAsAdditionalPropertyException;

    use PHPModelGenerator\Exception\ValidationException;


/**
 * Class PluginManifest
 * @package pocketmine\datamodels\mutable 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will loose your changes if the classes
 * are re-generated.
 */
class PluginManifest implements JSONModelInterface
{
    

    
        /** @var string[]|string The PocketMine-MP API version(s) supported by the plugin. */
        protected $api;
    
        /** @var string[]|string|null The author name */
        protected $author;
    
        /** @var string[]|null The author names, will be appended to `author` if both are present. */
        protected $authors;
    
        /** @var PluginManifest_Commands203cc24a51260f5159621c162d65197f|null The commands to be registered automatically. The keys are command name. */
        protected $commands;
    
        /** @var string[]|string|null List of plugins required by this plugin */
        protected $depend;
    
        /** @var string|null Description of the plugin */
        protected $description;
    
        /** @var string[]|PluginManifest_Extensions22237ba9fe0d3fdb792ec3b1dbfd3f7c|string|null List of extensions (and their version constraints) required by this plugin */
        protected $extensions;
    
        /** @var string|null The point of loading the plugin, defaults to POSTWORLD */
        protected $load;
    
        /** @var string[]|string|null Plugins that this plugin must load before, if present */
        protected $loadbefore;
    
        /** @var string The fully-qualified name of the main class that extends PluginBase */
        protected $main;
    
        /** @var int[]|int|null MCPE protocol versions supported by the plugin */
        protected $mcpeProtocol;
    
        /** @var string Name of the plugin */
        protected $name;
    
        /** @var string[]|string|null */
        protected $os;
    
        /** @var PluginManifest_Permissionsef9664664ee0e1dbf0ec96e57e8e5e3b|null Permissions to be registered by this plugin automatically */
        protected $permissions;
    
        /** @var string|null Prefix used by the plugin's logger, defaults to plugin name */
        protected $prefix;
    
        /** @var string[]|null Plugins that must load before this plugin, if available */
        protected $softdepend;
    
        /** @var string|null Classes found in src/ are assumed to be relative to this namespace prefix */
        protected $srcNamespacePrefix;
    
        /** @var string|float Plugin version */
        protected $version;
    
        /** @var string|null The plugin's website */
        protected $website;
    
    /** @var array */
    private $_rawModelDataInput = [];

    

    /**
     * PluginManifest constructor.
     *
     * @param array $modelData
     *
     * @throws ValidationException
     */
    public function __construct(array $modelData = [])
    {
        

        

        
            $this->executeBaseValidators($modelData);
        

        
            
                $this->processApi($modelData);
            
        
            
                $this->processAuthor($modelData);
            
        
            
                $this->processAuthors($modelData);
            
        
            
                $this->processCommands($modelData);
            
        
            
                $this->processDepend($modelData);
            
        
            
                $this->processDescription($modelData);
            
        
            
                $this->processExtensions($modelData);
            
        
            
                $this->processLoad($modelData);
            
        
            
                $this->processLoadbefore($modelData);
            
        
            
                $this->processMain($modelData);
            
        
            
                $this->processMcpeProtocol($modelData);
            
        
            
                $this->processName($modelData);
            
        
            
                $this->processOs($modelData);
            
        
            
                $this->processPermissions($modelData);
            
        
            
                $this->processPrefix($modelData);
            
        
            
                $this->processSoftdepend($modelData);
            
        
            
                $this->processSrcNamespacePrefix($modelData);
            
        
            
                $this->processVersion($modelData);
            
        
            
                $this->processWebsite($modelData);
            
        

        

        $this->_rawModelDataInput = $modelData;

        
    }

    
        private function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                
                if ($additionalProperties =  (function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'api',
   'author',
   'authors',
   'commands',
   'depend',
   'description',
   'extensions',
   'load',
   'loadbefore',
   'main',
   'mcpe-protocol',
   'name',
   'os',
   'permissions',
   'prefix',
   'softdepend',
   'src-namespace-prefix',
   'version',
   'website',
));

    

    return $additionalProperties;
})()) {
                    throw new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'PluginManifest',
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
             * Get the value of api.
             *
             * The PocketMine-MP API version(s) supported by the plugin.
             *
             * @return string[]|string
             */
            public function getApi()
                
            {
                

                return $this->api;
            }

            
                /**
                 * Set the value of api.
                 *
                 * @param string[]|string $api The PocketMine-MP API version(s) supported by the plugin.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setApi(
                     $api
                ): self {
                    if ($this->api === $api) {
                        return $this;
                    }

                    $value = $modelData['api'] = $api;

                    

                    

                    $value = $this->validateApi($value, $modelData);

                    

                    $this->api = $value;
                    $this->_rawModelDataInput['api'] = $api;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property api
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processApi(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('api', $modelData) ? $modelData['api'] : $this->api;

                

                $this->api = $this->validateApi($value, $modelData);
            }

            /**
             * Execute all validators for the property api
             */
            protected function validateApi($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('api', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'api',
));
                    }
                
                    
                    if (!is_array($value) && !is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'api',
  1 => 
  array (
    0 => 'array',
    1 => 'string',
  ),
));
                    }
                
                    $invalidItems_e4399d8fd26fd17b17757ce0c65b7567 = [];
                    if (is_array($value) && (function (&$items) use (&$invalidItems_e4399d8fd26fd17b17757ce0c65b7567) {
    

    foreach ($items as $index => &$value) {
        

        try {
            

            
                
                if (!is_string($value)) {
                    throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array api',
  1 => 'string',
));
                }
            

            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_e4399d8fd26fd17b17757ce0c65b7567[$index])
                ? $invalidItems_e4399d8fd26fd17b17757ce0c65b7567[$index][] = $e
                : $invalidItems_e4399d8fd26fd17b17757ce0c65b7567[$index] = [$e];
        }
    }

    

    return !empty($invalidItems_e4399d8fd26fd17b17757ce0c65b7567);
})($value)) {
                        throw new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'api',
  1 => $invalidItems_e4399d8fd26fd17b17757ce0c65b7567,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of author.
             *
             * The author name
             *
             * @return string[]|string|null
             */
            public function getAuthor()
                
            {
                

                return $this->author;
            }

            
                /**
                 * Set the value of author.
                 *
                 * @param string[]|string $author The author name
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setAuthor(
                     $author
                ): self {
                    if ($this->author === $author) {
                        return $this;
                    }

                    $value = $modelData['author'] = $author;

                    

                    

                    $value = $this->validateAuthor($value, $modelData);

                    

                    $this->author = $value;
                    $this->_rawModelDataInput['author'] = $author;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property author
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processAuthor(array $modelData): void
            {
                
                    
                        if (!array_key_exists('author', $modelData) && $this->author === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('author', $modelData) ? $modelData['author'] : $this->author;

                

                $this->author = $this->validateAuthor($value, $modelData);
            }

            /**
             * Execute all validators for the property author
             */
            protected function validateAuthor($value, array $modelData)
            {
                
                    
                    if (!is_array($value) && !is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'author',
  1 => 
  array (
    0 => 'array',
    1 => 'string',
  ),
));
                    }
                
                    $invalidItems_eb5312c258ddf7c6287558e0c8636669 = [];
                    if (is_array($value) && (function (&$items) use (&$invalidItems_eb5312c258ddf7c6287558e0c8636669) {
    

    foreach ($items as $index => &$value) {
        

        try {
            

            
                
                if (!is_string($value)) {
                    throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array author',
  1 => 'string',
));
                }
            

            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_eb5312c258ddf7c6287558e0c8636669[$index])
                ? $invalidItems_eb5312c258ddf7c6287558e0c8636669[$index][] = $e
                : $invalidItems_eb5312c258ddf7c6287558e0c8636669[$index] = [$e];
        }
    }

    

    return !empty($invalidItems_eb5312c258ddf7c6287558e0c8636669);
})($value)) {
                        throw new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'author',
  1 => $invalidItems_eb5312c258ddf7c6287558e0c8636669,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of authors.
             *
             * The author names, will be appended to `author` if both are present.
             *
             * @return string[]|null
             */
            public function getAuthors()
                : ?array
            {
                

                return $this->authors;
            }

            
                /**
                 * Set the value of authors.
                 *
                 * @param string[] $authors The author names, will be appended to `author` if both are present.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setAuthors(
                    array $authors
                ): self {
                    if ($this->authors === $authors) {
                        return $this;
                    }

                    $value = $modelData['authors'] = $authors;

                    

                    

                    $value = $this->validateAuthors($value, $modelData);

                    

                    $this->authors = $value;
                    $this->_rawModelDataInput['authors'] = $authors;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property authors
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processAuthors(array $modelData): void
            {
                
                    
                        if (!array_key_exists('authors', $modelData) && $this->authors === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('authors', $modelData) ? $modelData['authors'] : $this->authors;

                

                $this->authors = $this->validateAuthors($value, $modelData);
            }

            /**
             * Execute all validators for the property authors
             */
            protected function validateAuthors($value, array $modelData)
            {
                
                    
                    if (!is_array($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'authors',
  1 => 'array',
));
                    }
                
                    $invalidItems_8d61d7990c86b2728b2d75cd474408dd = [];
                    if (is_array($value) && (function (&$items) use (&$invalidItems_8d61d7990c86b2728b2d75cd474408dd) {
    

    foreach ($items as $index => &$value) {
        

        try {
            

            
                
                if (!is_string($value)) {
                    throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array authors',
  1 => 'string',
));
                }
            

            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_8d61d7990c86b2728b2d75cd474408dd[$index])
                ? $invalidItems_8d61d7990c86b2728b2d75cd474408dd[$index][] = $e
                : $invalidItems_8d61d7990c86b2728b2d75cd474408dd[$index] = [$e];
        }
    }

    

    return !empty($invalidItems_8d61d7990c86b2728b2d75cd474408dd);
})($value)) {
                        throw new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'authors',
  1 => $invalidItems_8d61d7990c86b2728b2d75cd474408dd,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of commands.
             *
             * The commands to be registered automatically. The keys are command name.
             *
             * @return PluginManifest_Commands203cc24a51260f5159621c162d65197f|null
             */
            public function getCommands()
                : ?PluginManifest_Commands203cc24a51260f5159621c162d65197f
            {
                

                return $this->commands;
            }

            
                /**
                 * Set the value of commands.
                 *
                 * @param PluginManifest_Commands203cc24a51260f5159621c162d65197f $commands The commands to be registered automatically. The keys are command name.
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setCommands(
                    PluginManifest_Commands203cc24a51260f5159621c162d65197f $commands
                ): self {
                    if ($this->commands === $commands) {
                        return $this;
                    }

                    $value = $modelData['commands'] = $commands;

                    

                    

                    $value = $this->validateCommands($value, $modelData);

                    

                    $this->commands = $value;
                    $this->_rawModelDataInput['commands'] = $commands;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property commands
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processCommands(array $modelData): void
            {
                
                    
                        if (!array_key_exists('commands', $modelData) && $this->commands === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('commands', $modelData) ? $modelData['commands'] : $this->commands;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PluginManifest_Commands203cc24a51260f5159621c162d65197f($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'commands',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->commands = $this->validateCommands($value, $modelData);
            }

            /**
             * Execute all validators for the property commands
             */
            protected function validateCommands($value, array $modelData)
            {
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'commands',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PluginManifest_Commands203cc24a51260f5159621c162d65197f)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'commands',
  1 => 'PluginManifest_Commands203cc24a51260f5159621c162d65197f',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of depend.
             *
             * List of plugins required by this plugin
             *
             * @return string[]|string|null
             */
            public function getDepend()
                
            {
                

                return $this->depend;
            }

            
                /**
                 * Set the value of depend.
                 *
                 * @param string[]|string $depend List of plugins required by this plugin
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setDepend(
                     $depend
                ): self {
                    if ($this->depend === $depend) {
                        return $this;
                    }

                    $value = $modelData['depend'] = $depend;

                    

                    

                    $value = $this->validateDepend($value, $modelData);

                    

                    $this->depend = $value;
                    $this->_rawModelDataInput['depend'] = $depend;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property depend
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processDepend(array $modelData): void
            {
                
                    
                        if (!array_key_exists('depend', $modelData) && $this->depend === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('depend', $modelData) ? $modelData['depend'] : $this->depend;

                

                $this->depend = $this->validateDepend($value, $modelData);
            }

            /**
             * Execute all validators for the property depend
             */
            protected function validateDepend($value, array $modelData)
            {
                
                    
                    if (!is_array($value) && !is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'depend',
  1 => 
  array (
    0 => 'array',
    1 => 'string',
  ),
));
                    }
                
                    $invalidItems_110c178a85493214795bfce3210e3c68 = [];
                    if (is_array($value) && (function (&$items) use (&$invalidItems_110c178a85493214795bfce3210e3c68) {
    

    foreach ($items as $index => &$value) {
        

        try {
            

            
                
                if (!is_string($value)) {
                    throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array depend',
  1 => 'string',
));
                }
            
                
                if (is_string($value) && !preg_match(base64_decode('L15bQS1aYS16MC05IF8uLV0rJC8='), $value)) {
                    throw new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'item of array depend',
  1 => '^[A-Za-z0-9 _.-]+$',
));
                }
            

            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_110c178a85493214795bfce3210e3c68[$index])
                ? $invalidItems_110c178a85493214795bfce3210e3c68[$index][] = $e
                : $invalidItems_110c178a85493214795bfce3210e3c68[$index] = [$e];
        }
    }

    

    return !empty($invalidItems_110c178a85493214795bfce3210e3c68);
})($value)) {
                        throw new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'depend',
  1 => $invalidItems_110c178a85493214795bfce3210e3c68,
));
                    }
                
                    
                    if (is_string($value) && !preg_match(base64_decode('L15bQS1aYS16MC05IF8uLV0rJC8='), $value)) {
                        throw new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'depend',
  1 => '^[A-Za-z0-9 _.-]+$',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of description.
             *
             * Description of the plugin
             *
             * @return string|null
             */
            public function getDescription()
                : ?string
            {
                

                return $this->description;
            }

            
                /**
                 * Set the value of description.
                 *
                 * @param string $description Description of the plugin
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setDescription(
                    string $description
                ): self {
                    if ($this->description === $description) {
                        return $this;
                    }

                    $value = $modelData['description'] = $description;

                    

                    

                    $value = $this->validateDescription($value, $modelData);

                    

                    $this->description = $value;
                    $this->_rawModelDataInput['description'] = $description;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property description
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processDescription(array $modelData): void
            {
                
                    
                        if (!array_key_exists('description', $modelData) && $this->description === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('description', $modelData) ? $modelData['description'] : $this->description;

                

                $this->description = $this->validateDescription($value, $modelData);
            }

            /**
             * Execute all validators for the property description
             */
            protected function validateDescription($value, array $modelData)
            {
                
                    
                    if (!is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'description',
  1 => 'string',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of extensions.
             *
             * List of extensions (and their version constraints) required by this plugin
             *
             * @return string[]|PluginManifest_Extensions22237ba9fe0d3fdb792ec3b1dbfd3f7c|string|null
             */
            public function getExtensions()
                
            {
                

                return $this->extensions;
            }

            
                /**
                 * Set the value of extensions.
                 *
                 * @param string[]|PluginManifest_Extensions22237ba9fe0d3fdb792ec3b1dbfd3f7c|string $extensions List of extensions (and their version constraints) required by this plugin
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setExtensions(
                     $extensions
                ): self {
                    if ($this->extensions === $extensions) {
                        return $this;
                    }

                    $value = $modelData['extensions'] = $extensions;

                    

                    

                    $value = $this->validateExtensions($value, $modelData);

                    

                    $this->extensions = $value;
                    $this->_rawModelDataInput['extensions'] = $extensions;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property extensions
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processExtensions(array $modelData): void
            {
                
                    
                        if (!array_key_exists('extensions', $modelData) && $this->extensions === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('extensions', $modelData) ? $modelData['extensions'] : $this->extensions;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PluginManifest_Extensions22237ba9fe0d3fdb792ec3b1dbfd3f7c($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'extensions',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->extensions = $this->validateExtensions($value, $modelData);
            }

            /**
             * Execute all validators for the property extensions
             */
            protected function validateExtensions($value, array $modelData)
            {
                
                    
                    if (!is_array($value) && !is_object($value) && !is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'extensions',
  1 => 
  array (
    0 => 'array',
    1 => 'object',
    2 => 'string',
  ),
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PluginManifest_Extensions22237ba9fe0d3fdb792ec3b1dbfd3f7c)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'extensions',
  1 => 'PluginManifest_Extensions22237ba9fe0d3fdb792ec3b1dbfd3f7c',
));
                    }
                
                    $invalidItems_4a54ebc7a2db3da4bb734b218ed12c5b = [];
                    if (is_array($value) && (function (&$items) use (&$invalidItems_4a54ebc7a2db3da4bb734b218ed12c5b) {
    

    foreach ($items as $index => &$value) {
        

        try {
            

            
                
                if (!is_string($value)) {
                    throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array extensions',
  1 => 'string',
));
                }
            

            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_4a54ebc7a2db3da4bb734b218ed12c5b[$index])
                ? $invalidItems_4a54ebc7a2db3da4bb734b218ed12c5b[$index][] = $e
                : $invalidItems_4a54ebc7a2db3da4bb734b218ed12c5b[$index] = [$e];
        }
    }

    

    return !empty($invalidItems_4a54ebc7a2db3da4bb734b218ed12c5b);
})($value)) {
                        throw new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'extensions',
  1 => $invalidItems_4a54ebc7a2db3da4bb734b218ed12c5b,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of load.
             *
             * The point of loading the plugin, defaults to POSTWORLD
             *
             * @return string|null
             */
            public function getLoad()
                : ?string
            {
                

                return $this->load;
            }

            
                /**
                 * Set the value of load.
                 *
                 * @param string $load The point of loading the plugin, defaults to POSTWORLD
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setLoad(
                    string $load
                ): self {
                    if ($this->load === $load) {
                        return $this;
                    }

                    $value = $modelData['load'] = $load;

                    

                    

                    $value = $this->validateLoad($value, $modelData);

                    

                    $this->load = $value;
                    $this->_rawModelDataInput['load'] = $load;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property load
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processLoad(array $modelData): void
            {
                
                    
                        if (!array_key_exists('load', $modelData) && $this->load === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('load', $modelData) ? $modelData['load'] : $this->load;

                

                $this->load = $this->validateLoad($value, $modelData);
            }

            /**
             * Execute all validators for the property load
             */
            protected function validateLoad($value, array $modelData)
            {
                
                    
                    if (!is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'load',
  1 => 'string',
));
                    }
                
                    
                    if (!in_array($value, array (
   'POSTWORLD',
   'STARTUP',
), true)) {
                        throw new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'load',
  1 => 
  array (
    0 => 'POSTWORLD',
    1 => 'STARTUP',
  ),
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of loadbefore.
             *
             * Plugins that this plugin must load before, if present
             *
             * @return string[]|string|null
             */
            public function getLoadbefore()
                
            {
                

                return $this->loadbefore;
            }

            
                /**
                 * Set the value of loadbefore.
                 *
                 * @param string[]|string $loadbefore Plugins that this plugin must load before, if present
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setLoadbefore(
                     $loadbefore
                ): self {
                    if ($this->loadbefore === $loadbefore) {
                        return $this;
                    }

                    $value = $modelData['loadbefore'] = $loadbefore;

                    

                    

                    $value = $this->validateLoadbefore($value, $modelData);

                    

                    $this->loadbefore = $value;
                    $this->_rawModelDataInput['loadbefore'] = $loadbefore;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property loadbefore
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processLoadbefore(array $modelData): void
            {
                
                    
                        if (!array_key_exists('loadbefore', $modelData) && $this->loadbefore === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('loadbefore', $modelData) ? $modelData['loadbefore'] : $this->loadbefore;

                

                $this->loadbefore = $this->validateLoadbefore($value, $modelData);
            }

            /**
             * Execute all validators for the property loadbefore
             */
            protected function validateLoadbefore($value, array $modelData)
            {
                
                    
                    if (!is_array($value) && !is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'loadbefore',
  1 => 
  array (
    0 => 'array',
    1 => 'string',
  ),
));
                    }
                
                    $invalidItems_4a81b08545bad690425a321db71c5efc = [];
                    if (is_array($value) && (function (&$items) use (&$invalidItems_4a81b08545bad690425a321db71c5efc) {
    

    foreach ($items as $index => &$value) {
        

        try {
            

            
                
                if (!is_string($value)) {
                    throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array loadbefore',
  1 => 'string',
));
                }
            
                
                if (is_string($value) && !preg_match(base64_decode('L15bQS1aYS16MC05IF8uLV0rJC8='), $value)) {
                    throw new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'item of array loadbefore',
  1 => '^[A-Za-z0-9 _.-]+$',
));
                }
            

            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_4a81b08545bad690425a321db71c5efc[$index])
                ? $invalidItems_4a81b08545bad690425a321db71c5efc[$index][] = $e
                : $invalidItems_4a81b08545bad690425a321db71c5efc[$index] = [$e];
        }
    }

    

    return !empty($invalidItems_4a81b08545bad690425a321db71c5efc);
})($value)) {
                        throw new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'loadbefore',
  1 => $invalidItems_4a81b08545bad690425a321db71c5efc,
));
                    }
                
                    
                    if (is_string($value) && !preg_match(base64_decode('L15bQS1aYS16MC05IF8uLV0rJC8='), $value)) {
                        throw new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'loadbefore',
  1 => '^[A-Za-z0-9 _.-]+$',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of main.
             *
             * The fully-qualified name of the main class that extends PluginBase
             *
             * @return string
             */
            public function getMain()
                : string
            {
                

                return $this->main;
            }

            
                /**
                 * Set the value of main.
                 *
                 * @param string $main The fully-qualified name of the main class that extends PluginBase
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setMain(
                    string $main
                ): self {
                    if ($this->main === $main) {
                        return $this;
                    }

                    $value = $modelData['main'] = $main;

                    

                    

                    $value = $this->validateMain($value, $modelData);

                    

                    $this->main = $value;
                    $this->_rawModelDataInput['main'] = $main;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property main
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processMain(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('main', $modelData) ? $modelData['main'] : $this->main;

                

                $this->main = $this->validateMain($value, $modelData);
            }

            /**
             * Execute all validators for the property main
             */
            protected function validateMain($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('main', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'main',
));
                    }
                
                    
                    if (!is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'main',
  1 => 'string',
));
                    }
                
                    
                    if (is_string($value) && !preg_match(base64_decode('LyhbQS1aYS16X11cdytcXCkqKFtBLVphLXpfXVx3Kykv'), $value)) {
                        throw new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'main',
  1 => '([A-Za-z_]\\w+\\\\)*([A-Za-z_]\\w+)',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of mcpe-protocol.
             *
             * MCPE protocol versions supported by the plugin
             *
             * @return int[]|int|null
             */
            public function getMcpeProtocol()
                
            {
                

                return $this->mcpeProtocol;
            }

            
                /**
                 * Set the value of mcpe-protocol.
                 *
                 * @param int[]|int $mcpeProtocol MCPE protocol versions supported by the plugin
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setMcpeProtocol(
                     $mcpeProtocol
                ): self {
                    if ($this->mcpeProtocol === $mcpeProtocol) {
                        return $this;
                    }

                    $value = $modelData['mcpe-protocol'] = $mcpeProtocol;

                    

                    

                    $value = $this->validateMcpeProtocol($value, $modelData);

                    

                    $this->mcpeProtocol = $value;
                    $this->_rawModelDataInput['mcpe-protocol'] = $mcpeProtocol;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property mcpeProtocol
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processMcpeProtocol(array $modelData): void
            {
                
                    
                        if (!array_key_exists('mcpe-protocol', $modelData) && $this->mcpeProtocol === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('mcpe-protocol', $modelData) ? $modelData['mcpe-protocol'] : $this->mcpeProtocol;

                

                $this->mcpeProtocol = $this->validateMcpeProtocol($value, $modelData);
            }

            /**
             * Execute all validators for the property mcpeProtocol
             */
            protected function validateMcpeProtocol($value, array $modelData)
            {
                
                    
                    if (!is_array($value) && !is_int($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'mcpe-protocol',
  1 => 
  array (
    0 => 'array',
    1 => 'int',
  ),
));
                    }
                
                    $invalidItems_28242b3107020f4988719be5a94509d2 = [];
                    if (is_array($value) && (function (&$items) use (&$invalidItems_28242b3107020f4988719be5a94509d2) {
    

    foreach ($items as $index => &$value) {
        

        try {
            

            
                
                if (!is_int($value)) {
                    throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array mcpe-protocol',
  1 => 'int',
));
                }
            

            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_28242b3107020f4988719be5a94509d2[$index])
                ? $invalidItems_28242b3107020f4988719be5a94509d2[$index][] = $e
                : $invalidItems_28242b3107020f4988719be5a94509d2[$index] = [$e];
        }
    }

    

    return !empty($invalidItems_28242b3107020f4988719be5a94509d2);
})($value)) {
                        throw new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'mcpe-protocol',
  1 => $invalidItems_28242b3107020f4988719be5a94509d2,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of name.
             *
             * Name of the plugin
             *
             * @return string
             */
            public function getName()
                : string
            {
                

                return $this->name;
            }

            
                /**
                 * Set the value of name.
                 *
                 * @param string $name Name of the plugin
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setName(
                    string $name
                ): self {
                    if ($this->name === $name) {
                        return $this;
                    }

                    $value = $modelData['name'] = $name;

                    

                    

                    $value = $this->validateName($value, $modelData);

                    

                    $this->name = $value;
                    $this->_rawModelDataInput['name'] = $name;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property name
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processName(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('name', $modelData) ? $modelData['name'] : $this->name;

                

                $this->name = $this->validateName($value, $modelData);
            }

            /**
             * Execute all validators for the property name
             */
            protected function validateName($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('name', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'name',
));
                    }
                
                    
                    if (!is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'name',
  1 => 'string',
));
                    }
                
                    
                    if (is_string($value) && !preg_match(base64_decode('L15bQS1aYS16MC05IF8uLV0rJC8='), $value)) {
                        throw new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'name',
  1 => '^[A-Za-z0-9 _.-]+$',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of os.
             *
             * 
             *
             * @return string[]|string|null
             */
            public function getOs()
                
            {
                

                return $this->os;
            }

            
                /**
                 * Set the value of os.
                 *
                 * @param string[]|string $os
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setOs(
                     $os
                ): self {
                    if ($this->os === $os) {
                        return $this;
                    }

                    $value = $modelData['os'] = $os;

                    

                    

                    $value = $this->validateOs($value, $modelData);

                    

                    $this->os = $value;
                    $this->_rawModelDataInput['os'] = $os;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property os
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processOs(array $modelData): void
            {
                
                    
                        if (!array_key_exists('os', $modelData) && $this->os === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('os', $modelData) ? $modelData['os'] : $this->os;

                

                $this->os = $this->validateOs($value, $modelData);
            }

            /**
             * Execute all validators for the property os
             */
            protected function validateOs($value, array $modelData)
            {
                
                    
                    if (!is_array($value) && !is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'os',
  1 => 
  array (
    0 => 'array',
    1 => 'string',
  ),
));
                    }
                
                    $invalidItems_79a52c02998fb498e64c761324ea7c95 = [];
                    if (is_array($value) && (function (&$items) use (&$invalidItems_79a52c02998fb498e64c761324ea7c95) {
    

    foreach ($items as $index => &$value) {
        

        try {
            

            
                
                if (!is_string($value)) {
                    throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array os',
  1 => 'string',
));
                }
            

            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_79a52c02998fb498e64c761324ea7c95[$index])
                ? $invalidItems_79a52c02998fb498e64c761324ea7c95[$index][] = $e
                : $invalidItems_79a52c02998fb498e64c761324ea7c95[$index] = [$e];
        }
    }

    

    return !empty($invalidItems_79a52c02998fb498e64c761324ea7c95);
})($value)) {
                        throw new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'os',
  1 => $invalidItems_79a52c02998fb498e64c761324ea7c95,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of permissions.
             *
             * Permissions to be registered by this plugin automatically
             *
             * @return PluginManifest_Permissionsef9664664ee0e1dbf0ec96e57e8e5e3b|null
             */
            public function getPermissions()
                : ?PluginManifest_Permissionsef9664664ee0e1dbf0ec96e57e8e5e3b
            {
                

                return $this->permissions;
            }

            
                /**
                 * Set the value of permissions.
                 *
                 * @param PluginManifest_Permissionsef9664664ee0e1dbf0ec96e57e8e5e3b $permissions Permissions to be registered by this plugin automatically
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setPermissions(
                    PluginManifest_Permissionsef9664664ee0e1dbf0ec96e57e8e5e3b $permissions
                ): self {
                    if ($this->permissions === $permissions) {
                        return $this;
                    }

                    $value = $modelData['permissions'] = $permissions;

                    

                    

                    $value = $this->validatePermissions($value, $modelData);

                    

                    $this->permissions = $value;
                    $this->_rawModelDataInput['permissions'] = $permissions;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property permissions
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processPermissions(array $modelData): void
            {
                
                    
                        if (!array_key_exists('permissions', $modelData) && $this->permissions === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('permissions', $modelData) ? $modelData['permissions'] : $this->permissions;

                $value = (function ($value) {
    try {
        return is_array($value) ? new PluginManifest_Permissionsef9664664ee0e1dbf0ec96e57e8e5e3b($value) : $value;
    } catch (\Exception $instantiationException) {
        
            throw new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'permissions',
  1 => $instantiationException,
));
        

        
    }
})($value)
;

                $this->permissions = $this->validatePermissions($value, $modelData);
            }

            /**
             * Execute all validators for the property permissions
             */
            protected function validatePermissions($value, array $modelData)
            {
                
                    
                    if (!is_object($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'permissions',
  1 => 'object',
));
                    }
                
                    
                    if (is_object($value) && !($value instanceof \Exception) && !($value instanceof PluginManifest_Permissionsef9664664ee0e1dbf0ec96e57e8e5e3b)) {
                        throw new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'permissions',
  1 => 'PluginManifest_Permissionsef9664664ee0e1dbf0ec96e57e8e5e3b',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of prefix.
             *
             * Prefix used by the plugin's logger, defaults to plugin name
             *
             * @return string|null
             */
            public function getPrefix()
                : ?string
            {
                

                return $this->prefix;
            }

            
                /**
                 * Set the value of prefix.
                 *
                 * @param string $prefix Prefix used by the plugin's logger, defaults to plugin name
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setPrefix(
                    string $prefix
                ): self {
                    if ($this->prefix === $prefix) {
                        return $this;
                    }

                    $value = $modelData['prefix'] = $prefix;

                    

                    

                    $value = $this->validatePrefix($value, $modelData);

                    

                    $this->prefix = $value;
                    $this->_rawModelDataInput['prefix'] = $prefix;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property prefix
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processPrefix(array $modelData): void
            {
                
                    
                        if (!array_key_exists('prefix', $modelData) && $this->prefix === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('prefix', $modelData) ? $modelData['prefix'] : $this->prefix;

                

                $this->prefix = $this->validatePrefix($value, $modelData);
            }

            /**
             * Execute all validators for the property prefix
             */
            protected function validatePrefix($value, array $modelData)
            {
                
                    
                    if (!is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'prefix',
  1 => 'string',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of softdepend.
             *
             * Plugins that must load before this plugin, if available
             *
             * @return string[]|null
             */
            public function getSoftdepend()
                : ?array
            {
                

                return $this->softdepend;
            }

            
                /**
                 * Set the value of softdepend.
                 *
                 * @param string[] $softdepend Plugins that must load before this plugin, if available
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setSoftdepend(
                    array $softdepend
                ): self {
                    if ($this->softdepend === $softdepend) {
                        return $this;
                    }

                    $value = $modelData['softdepend'] = $softdepend;

                    

                    

                    $value = $this->validateSoftdepend($value, $modelData);

                    

                    $this->softdepend = $value;
                    $this->_rawModelDataInput['softdepend'] = $softdepend;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property softdepend
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processSoftdepend(array $modelData): void
            {
                
                    
                        if (!array_key_exists('softdepend', $modelData) && $this->softdepend === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('softdepend', $modelData) ? $modelData['softdepend'] : $this->softdepend;

                

                $this->softdepend = $this->validateSoftdepend($value, $modelData);
            }

            /**
             * Execute all validators for the property softdepend
             */
            protected function validateSoftdepend($value, array $modelData)
            {
                
                    
                    if (!is_array($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'softdepend',
  1 => 'array',
));
                    }
                
                    $invalidItems_a2ba57dcbb08410feb5d0d430d21ce67 = [];
                    if (is_array($value) && (function (&$items) use (&$invalidItems_a2ba57dcbb08410feb5d0d430d21ce67) {
    

    foreach ($items as $index => &$value) {
        

        try {
            

            
                
                if (!is_string($value)) {
                    throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array softdepend',
  1 => 'string',
));
                }
            
                
                if (is_string($value) && !preg_match(base64_decode('L15bQS1aYS16MC05IF8uLV0rJC8='), $value)) {
                    throw new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'item of array softdepend',
  1 => '^[A-Za-z0-9 _.-]+$',
));
                }
            

            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_a2ba57dcbb08410feb5d0d430d21ce67[$index])
                ? $invalidItems_a2ba57dcbb08410feb5d0d430d21ce67[$index][] = $e
                : $invalidItems_a2ba57dcbb08410feb5d0d430d21ce67[$index] = [$e];
        }
    }

    

    return !empty($invalidItems_a2ba57dcbb08410feb5d0d430d21ce67);
})($value)) {
                        throw new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'softdepend',
  1 => $invalidItems_a2ba57dcbb08410feb5d0d430d21ce67,
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of src-namespace-prefix.
             *
             * Classes found in src/ are assumed to be relative to this namespace prefix
             *
             * @return string|null
             */
            public function getSrcNamespacePrefix()
                : ?string
            {
                

                return $this->srcNamespacePrefix;
            }

            
                /**
                 * Set the value of src-namespace-prefix.
                 *
                 * @param string $srcNamespacePrefix Classes found in src/ are assumed to be relative to this namespace prefix
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setSrcNamespacePrefix(
                    string $srcNamespacePrefix
                ): self {
                    if ($this->srcNamespacePrefix === $srcNamespacePrefix) {
                        return $this;
                    }

                    $value = $modelData['src-namespace-prefix'] = $srcNamespacePrefix;

                    

                    

                    $value = $this->validateSrcNamespacePrefix($value, $modelData);

                    

                    $this->srcNamespacePrefix = $value;
                    $this->_rawModelDataInput['src-namespace-prefix'] = $srcNamespacePrefix;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property srcNamespacePrefix
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processSrcNamespacePrefix(array $modelData): void
            {
                
                    
                        if (!array_key_exists('src-namespace-prefix', $modelData) && $this->srcNamespacePrefix === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('src-namespace-prefix', $modelData) ? $modelData['src-namespace-prefix'] : $this->srcNamespacePrefix;

                

                $this->srcNamespacePrefix = $this->validateSrcNamespacePrefix($value, $modelData);
            }

            /**
             * Execute all validators for the property srcNamespacePrefix
             */
            protected function validateSrcNamespacePrefix($value, array $modelData)
            {
                
                    
                    if (!is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'src-namespace-prefix',
  1 => 'string',
));
                    }
                

                return $value;
            }
        
    
        
            /**
             * Get the value of version.
             *
             * Plugin version
             *
             * @return string|float
             */
            public function getVersion()
                
            {
                

                return $this->version;
            }

            
                /**
                 * Set the value of version.
                 *
                 * @param string|float $version Plugin version
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setVersion(
                     $version
                ): self {
                    if ($this->version === $version) {
                        return $this;
                    }

                    $value = $modelData['version'] = $version;

                    

                    

                    $value = $this->validateVersion($value, $modelData);

                    

                    $this->version = $value;
                    $this->_rawModelDataInput['version'] = $version;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property version
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processVersion(array $modelData): void
            {
                
                    
                

                $value = array_key_exists('version', $modelData) ? $modelData['version'] : $this->version;

                $value = is_int($value) ? (float) $value : $value;

                $this->version = $this->validateVersion($value, $modelData);
            }

            /**
             * Execute all validators for the property version
             */
            protected function validateVersion($value, array $modelData)
            {
                
                    
                    if (!array_key_exists('version', $modelData)) {
                        throw new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'version',
));
                    }
                
                    
                    if (!is_string($value) && !is_float($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'version',
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
             * Get the value of website.
             *
             * The plugin's website
             *
             * @return string|null
             */
            public function getWebsite()
                : ?string
            {
                

                return $this->website;
            }

            
                /**
                 * Set the value of website.
                 *
                 * @param string $website The plugin's website
                 *
                 * @throws ValidationException
                 *
                 * @return self
                 */
                public function setWebsite(
                    string $website
                ): self {
                    if ($this->website === $website) {
                        return $this;
                    }

                    $value = $modelData['website'] = $website;

                    

                    

                    $value = $this->validateWebsite($value, $modelData);

                    

                    $this->website = $value;
                    $this->_rawModelDataInput['website'] = $website;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property website
             *
             * @param array $modelData
             *
             * @throws ValidationException
             */
            protected function processWebsite(array $modelData): void
            {
                
                    
                        if (!array_key_exists('website', $modelData) && $this->website === null) {
                            return;
                        }
                    
                

                $value = array_key_exists('website', $modelData) ? $modelData['website'] : $this->website;

                

                $this->website = $this->validateWebsite($value, $modelData);
            }

            /**
             * Execute all validators for the property website
             */
            protected function validateWebsite($value, array $modelData)
            {
                
                    
                    if (!is_string($value)) {
                        throw new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'website',
  1 => 'string',
));
                    }
                

                return $value;
            }
        
    

    
}

// @codeCoverageIgnoreEnd
