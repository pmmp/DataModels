<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
*/

declare(strict_types=1);

namespace pocketmine\generate_schemas;

use PHPModelGenerator\Model\GeneratorConfiguration;
use PHPModelGenerator\Model\SchemaDefinition\JsonSchema;
use PHPModelGenerator\ModelGenerator;
use PHPModelGenerator\SchemaProcessor\PostProcessor\AdditionalPropertiesAccessorPostProcessor;
use PHPModelGenerator\SchemaProvider\RecursiveDirectoryProvider;
use PHPModelGenerator\Utils\ClassNameGeneratorInterface;
use function json_encode;
use function md5;
use function preg_replace;
use function sprintf;
use function str_replace;
use function trim;
use function ucfirst;
use const JSON_THROW_ON_ERROR;

require __DIR__ . '/vendor/autoload.php';

(new ModelGenerator(
	(new GeneratorConfiguration())
		->setNamespacePrefix('pocketmine\\datamodels')
		->setCollectErrors(false)
		->setImmutable(true)
		->setOutputEnabled(true)
		->setClassNameGenerator(new class implements ClassNameGeneratorInterface{
			public function getClassName(string $propertyName, JsonSchema $schema, bool $isMergeClass, string $currentClassName = '') : string{
				$className = sprintf(
					$isMergeClass ? '%s_Merged_%s' : '%s_%s',
					$currentClassName,
					ucfirst(
						isset($schema->getJson()['$id'])
							? str_replace('#', '', $schema->getJson()['$id'])
							: ($propertyName . ($currentClassName !== '' ? md5(json_encode($schema->getJson(), JSON_THROW_ON_ERROR)) : ''))
					)
				);

				$replaced = preg_replace('/\W/', '', trim($className, '_'));
				if($replaced === null){
					throw new \AssertionError("Pattern is valid");
				}
				return ucfirst($replaced);
			}
		})
))
	->addPostProcessor(new AdditionalPropertiesAccessorPostProcessor(false))
	->generateModels(
		new RecursiveDirectoryProvider(__DIR__ . '/schema'), __DIR__ . '/src'
	);
