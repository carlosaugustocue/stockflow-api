<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1777432399,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.53',
  'fnsr' => false,
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80330,
  'projectConfig' => '{conditionalTags: {Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule: {phpstan.rules.rule: %noEnvCallsOutsideOfConfig%}, Larastan\\Larastan\\Rules\\NoModelMakeRule: {phpstan.rules.rule: %noModelMake%}, Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule: {phpstan.rules.rule: %noUnnecessaryCollectionCall%}, Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule: {phpstan.rules.rule: %noUnnecessaryEnumerableToArrayCalls%}, Larastan\\Larastan\\Rules\\OctaneCompatibilityRule: {phpstan.rules.rule: %checkOctaneCompatibility%}, Larastan\\Larastan\\Rules\\UnusedViewsRule: {phpstan.rules.rule: %checkUnusedViews%}, Larastan\\Larastan\\Rules\\NoMissingTranslationsRule: {phpstan.rules.rule: %checkMissingTranslations%}, Larastan\\Larastan\\Rules\\ModelAppendsRule: {phpstan.rules.rule: %checkModelAppends%}, Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule: {phpstan.rules.rule: %checkModelMethodVisibility%}, Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule: {phpstan.rules.rule: %checkAuthCallsWhenInRequestScope%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %generalizeEnvReturnType%}, Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension: {phpstan.broker.dynamicFunctionReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension: {phpstan.broker.dynamicMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension: {phpstan.broker.dynamicStaticMethodReturnTypeExtension: %checkConfigTypes%}, Larastan\\Larastan\\Rules\\ConfigCollectionRule: {phpstan.rules.rule: %checkConfigTypes%}}, parameters: {universalObjectCratesClasses: [Illuminate\\Http\\Request, Illuminate\\Support\\Optional, stdClass], earlyTerminatingFunctionCalls: [abort, dd], mixinExcludeClasses: [Eloquent], bootstrapFiles: [bootstrap.php], checkOctaneCompatibility: false, noEnvCallsOutsideOfConfig: true, noModelMake: true, noUnnecessaryCollectionCall: true, noUnnecessaryCollectionCallOnly: [], noUnnecessaryCollectionCallExcept: [], noUnnecessaryEnumerableToArrayCalls: false, squashedMigrationsPath: [], databaseMigrationsPath: [], disableMigrationScan: false, disableSchemaScan: false, configDirectories: [], viewDirectories: [], translationDirectories: [], checkModelProperties: false, checkUnusedViews: false, checkMissingTranslations: false, checkModelAppends: true, checkModelMethodVisibility: false, generalizeEnvReturnType: false, checkConfigTypes: false, checkAuthCallsWhenInRequestScope: false, parseModelCastsMethod: false, enableMigrationCache: false, level: 6, paths: [/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app, /home/newton/Escritorio/proyecto-nuclear/stockflow-api/tests], excludePaths: {analyse: [app/Modules/*/Tests/*]}, tmpDir: /home/newton/Escritorio/proyecto-nuclear/stockflow-api/storage/phpstan, treatPhpDocTypesAsCertain: false}, rules: [Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessWithFunctionCallsRule, Larastan\\Larastan\\Rules\\UselessConstructs\\NoUselessValueFunctionCallsRule, Larastan\\Larastan\\Rules\\DeferrableServiceProviderMissingProvidesRule, Larastan\\Larastan\\Rules\\ConsoleCommand\\UndefinedArgumentOrOptionRule], services: {{class: Larastan\\Larastan\\Methods\\RelationForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\EloquentBuilderForwardsCallsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderTapProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\HigherOrderCollectionProxyExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\StorageMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ContractsMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\FacadesMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ManagersMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\AuthsMethodsExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ModelFactoryMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\RedirectResponseMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\MacroMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Methods\\ViewWithMethodsClassReflectionExtension, tags: [phpstan.broker.methodsClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelAccessorExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\ModelPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\Properties\\HigherOrderCollectionProxyPropertyExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\HigherOrderTapProxyExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Container\\Container}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerArrayAccessDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {className: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\Properties\\ModelRelationsExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelOnlyDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelFactoryDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ModelDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AuthManagerExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DateExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\GuardExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestFileExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestRouteExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RequestUserExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentBuilderExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\RelationCollectionExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TestCaseExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Support\\CollectionHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AuthExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\CollectExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\NowAndTodayExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ResponseExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValidatorExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\LiteralExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionFilterRejectDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\CollectionWhereNotNullDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\NewModelQueryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\FactoryDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: abort, negate: true}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: false}}, {class: Larastan\\Larastan\\Types\\AbortIfFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension], arguments: {methodName: throw, negate: true}}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\AppExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ValueExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\StrExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\TapExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\StorageDynamicStaticMethodReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\GenericEloquentCollectionTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Types\\ViewStringTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Rules\\OctaneCompatibilityRule}, {class: Larastan\\Larastan\\Rules\\NoEnvCallsOutsideOfConfigRule, arguments: {configDirectories: %configDirectories%}}, {class: Larastan\\Larastan\\Rules\\NoModelMakeRule}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryCollectionCallRule, arguments: {onlyMethods: %noUnnecessaryCollectionCallOnly%, excludeMethods: %noUnnecessaryCollectionCallExcept%}}, {class: Larastan\\Larastan\\Rules\\NoUnnecessaryEnumerableToArrayCallsRule}, {class: Larastan\\Larastan\\Rules\\ModelAppendsRule}, {class: Larastan\\Larastan\\Rules\\NoPublicModelScopeAndAccessorRule}, {class: Larastan\\Larastan\\Types\\GenericEloquentBuilderTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension], arguments: {class: Illuminate\\Contracts\\Foundation\\Application}}, {class: Larastan\\Larastan\\ReturnTypes\\AppFacadeEnvironmentReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Types\\ModelProperty\\ModelPropertyTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension], arguments: {active: %checkModelProperties%}}, {class: Larastan\\Larastan\\Types\\CollectionOf\\CollectionOfTypeNodeResolverExtension, tags: [phpstan.phpDoc.typeNodeResolverExtension]}, {class: Larastan\\Larastan\\Properties\\MigrationHelper, arguments: {databaseMigrationPath: %databaseMigrationsPath%, disableMigrationScan: %disableMigrationScan%, parser: @migrationsParser, reflectionProvider: @reflectionProvider}}, iamcalSqlParser: {class: Larastan\\Larastan\\SQL\\IamcalSqlParser, autowired: false}, sqlParserFactory: {class: Larastan\\Larastan\\SQL\\SqlParserFactory, arguments: {iamcalSqlParser: @iamcalSqlParser}}, sqlParser: {type: Larastan\\Larastan\\SQL\\SqlParser, factory: [@sqlParserFactory, create]}, {class: Larastan\\Larastan\\Properties\\SquashedMigrationHelper, arguments: {schemaPaths: %squashedMigrationsPath%, disableSchemaScan: %disableSchemaScan%}}, {class: Larastan\\Larastan\\Properties\\ModelCastHelper, arguments: {parser: @currentPhpVersionSimpleDirectParser, parseModelCastsMethod: %parseModelCastsMethod%}}, {class: Larastan\\Larastan\\Properties\\MigrationCache, arguments: {cacheDirectory: %tmpDir%, enabled: %enableMigrationCache%}}, {class: Larastan\\Larastan\\Properties\\ModelPropertyHelper}, {class: Larastan\\Larastan\\Rules\\ModelRuleHelper}, {class: Larastan\\Larastan\\Methods\\BuilderHelper, arguments: {checkProperties: %checkModelProperties%}}, {class: Larastan\\Larastan\\Rules\\RelationExistenceRule, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Bus\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Rules\\CheckDispatchArgumentTypesCompatibleWithClassConstructorRule, arguments: {dispatchableClass: Illuminate\\Foundation\\Events\\Dispatchable}, tags: [phpstan.rules.rule]}, {class: Larastan\\Larastan\\Properties\\Schema\\MySqlDataTypeToPhpTypeConverter}, {class: Larastan\\Larastan\\LarastanStubFilesExtension, tags: [phpstan.stubFilesExtension]}, {class: Larastan\\Larastan\\Rules\\UnusedViewsRule}, {class: Larastan\\Larastan\\Collectors\\UsedViewFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedEmailViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewFacadeMakeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedRouteFacadeViewCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedViewInAnotherViewCollector}, {class: Larastan\\Larastan\\Support\\ViewFileHelper, arguments: {viewDirectories: %viewDirectories%}}, {class: Larastan\\Larastan\\Support\\ViewParser, arguments: {parser: @currentPhpVersionSimpleDirectParser}}, {class: Larastan\\Larastan\\Rules\\NoMissingTranslationsRule, arguments: {translationDirectories: %translationDirectories%}}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFunctionCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationTranslatorCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationFacadeCollector, tags: [phpstan.collector]}, {class: Larastan\\Larastan\\Collectors\\UsedTranslationViewCollector}, {class: Larastan\\Larastan\\ReturnTypes\\ApplicationMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ContainerMakeDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\ArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasArgumentDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\OptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\ConsoleCommand\\HasOptionDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TranslatorGetReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\LangGetReturnTypeExtension, tags: [phpstan.broker.dynamicStaticMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\TransHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\DoubleUnderscoreHelperReturnTypeExtension, tags: [phpstan.broker.dynamicFunctionReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\AppMakeHelper}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationResolver}, {class: Larastan\\Larastan\\Internal\\ConsoleApplicationHelper}, {class: Larastan\\Larastan\\Support\\HigherOrderCollectionProxyHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\ConfigFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigRepositoryDynamicMethodReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\ConfigFacadeCollectionDynamicStaticMethodReturnTypeExtension}, {class: Larastan\\Larastan\\Support\\ConfigParser, arguments: {parser: @currentPhpVersionSimpleDirectParser, configPaths: %configDirectories%, treatPhpDocTypesAsCertain: %treatPhpDocTypesAsCertain%}}, {class: Larastan\\Larastan\\Internal\\ConfigHelper}, {class: Larastan\\Larastan\\ReturnTypes\\Helpers\\EnvFunctionDynamicFunctionReturnTypeExtension}, {class: Larastan\\Larastan\\ReturnTypes\\FormRequestSafeDynamicMethodReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\ReturnTypes\\EloquentCollectionMapDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: Larastan\\Larastan\\Rules\\NoAuthFacadeInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\NoAuthHelperInRequestScopeRule}, {class: Larastan\\Larastan\\Rules\\ConfigCollectionRule}, {class: Illuminate\\Filesystem\\Filesystem, autowired: self}, migrationsParser: {class: PHPStan\\Parser\\CachedParser, arguments: {originalParser: @currentPhpVersionSimpleDirectParser, cachedNodesByStringCountMax: %cache.nodesByStringCountMax%}, autowired: false}}}',
  'analysedPaths' => 
  array (
    0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app',
  ),
  'scannedFiles' => 
  array (
    '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Tests/Feature/AuthApiTest.php' => '0336ebaa6790dd52f90335093edc7f25fa83fface0a38e459bd0ac9501d1b23d',
    '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Tests/Unit/LoginActionTest.php' => '42b5f1eb27e3a37c343eb45123c5c46627c99e512f7cb5ec454bf53cf161cbc0',
    '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Tests/Feature/DispatchApiTest.php' => 'a9b028ed8aa5dc1581d8adac4f168256b8fc2aadb21423cb73d55031a53452b3',
    '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Tests/Feature/InventoryApiTest.php' => '0f7103db4b1dee7f3039a7535e3bdb317b545066286dbb6a0974ea893dab534c',
    '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Tests/Unit/InventoryDomainTest.php' => '39df719aa4b1f516cb328548daf32fede746213ac5c4ff34d12234bfd924f9d4',
    '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Tests/Feature/ReceivingApiTest.php' => '17b1daa042c4c2c599ad50e93abdf492c3bc583db8f0686f8bfb676c1e8360f9',
    '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Tests/Feature/ReportingApiTest.php' => '19c0f39dfe33a2aa5a0d4b969b8e2d81419c788c34cf482ef3676ec237ccb176',
    '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/tests/Acceptance/MvpFlowAcceptanceTest.php' => '9ae272bf0753e6a449cd8d59a346571b4077d1a83df54f4469d9b4a747994e7e',
    '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/tests/Feature/ExampleTest.php' => 'aaa4a192fb4aa96d4e81eda06a29968da3d9a73b71026b87a67297e66dd985b8',
    '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/tests/Pest.php' => '73623902bcad6717dcd9941a65d43b0c7e47a40f36d15c5a5aed1573ca0b7add',
    '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/tests/TestCase.php' => 'c7c209f5579c42647c1f7b2a79ac828e8b54ac62a98442045a6e94fa2c0d0ebc',
    '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/tests/Unit/ExampleTest.php' => 'ffacae5c1a2a44c809420af5b3b404910da1b12167d58764dac6d10b8ba8cfaf',
  ),
  'composerLocks' => 
  array (
    '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/composer.lock' => '58bc9d1a0dd136f29d29041a12850a9bd98ff4c8429484bcf088cea9b4f73ba3',
  ),
  'composerInstalled' => 
  array (
    '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'barryvdh/laravel-dompdf' => 
        array (
          'pretty_version' => 'v3.1.2',
          'version' => '3.1.2.0',
          'reference' => 'ee3b72b19ccdf57d0243116ecb2b90261344dedc',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../barryvdh/laravel-dompdf',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'brianium/paratest' => 
        array (
          'pretty_version' => 'v7.20.0',
          'version' => '7.20.0.0',
          'reference' => '81c80677c9ec0ed4ef16b246167f11dec81a6e3d',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../brianium/paratest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'brick/math' => 
        array (
          'pretty_version' => '0.14.8',
          'version' => '0.14.8.0',
          'reference' => '63422359a44b7f06cae63c3b429b59e8efcc0629',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/pcre' => 
        array (
          'pretty_version' => '3.3.2',
          'version' => '3.3.2.0',
          'reference' => 'b2bed4734f0cc156ee1fe9c0da2550420d99a21e',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/./pcre',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/semver' => 
        array (
          'pretty_version' => '3.4.4',
          'version' => '3.4.4.0',
          'reference' => '198166618906cb2de69b95d7d47e5fa8aa1b2b95',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/./semver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'darkaonline/l5-swagger' => 
        array (
          'pretty_version' => '11.0.1',
          'version' => '11.0.1.0',
          'reference' => '63d737e841533cac6e8c04a007561aa833f69f3a',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../darkaonline/l5-swagger',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/deprecations' => 
        array (
          'pretty_version' => '1.1.6',
          'version' => '1.1.6.0',
          'reference' => 'd4fe3e6fd9bb9e72557a19674f44d8ac7db4c6ca',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../doctrine/deprecations',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dompdf/dompdf' => 
        array (
          'pretty_version' => 'v3.1.5',
          'version' => '3.1.5.0',
          'reference' => 'f11ead23a8a76d0ff9bbc6c7c8fd7e05ca328496',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../dompdf/dompdf',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dompdf/php-font-lib' => 
        array (
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'reference' => 'a6e9a688a2a80016ac080b97be73d3e10c444c9a',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../dompdf/php-font-lib',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dompdf/php-svg-lib' => 
        array (
          'pretty_version' => '1.0.2',
          'version' => '1.0.2.0',
          'reference' => '8259ffb930817e72b1ff1caef5d226501f3dfeb1',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../dompdf/php-svg-lib',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'd61a8a9604ec1f8c3d150d09db6ce98b32675013',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ezyang/htmlpurifier' => 
        array (
          'pretty_version' => 'v4.19.0',
          'version' => '4.19.0.0',
          'reference' => 'b287d2a16aceffbf6e0295559b39662612b77fcf',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../ezyang/htmlpurifier',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fidry/cpu-core-counter' => 
        array (
          'pretty_version' => '1.3.0',
          'version' => '1.3.0.0',
          'reference' => 'db9508f7b1474469d9d3c53b86f817e344732678',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../fidry/cpu-core-counter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.4',
          'version' => '2.18.4.0',
          'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '38aaa6c3fd4c157ffe2a4d10aa8b9b16ba8de379',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.4',
          'version' => '1.1.4.0',
          'reference' => 'e01f4a821471308ba86aa202fed6698b6b695e3b',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.10.0',
          'version' => '7.10.0.0',
          'reference' => 'b51ac707cfa420b7bfd4e4d5e510ba8008e822b4',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '481557b130ef3790cf82b713667b43030dc9c957',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.9.0',
          'version' => '2.9.0.0',
          'reference' => '7d0ed42f28e42d61352a7a79de682e5e67fec884',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.5',
          'version' => '1.0.5.0',
          'reference' => '4f4bbd4e7172148801e76e3decc1e559bdee34e1',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'iamcal/sql-parser' => 
        array (
          'pretty_version' => 'v0.7',
          'version' => '0.7.0.0',
          'reference' => '610392f38de49a44dab08dc1659960a29874c4b8',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../iamcal/sql-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/json-schema' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/reflection' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v13.7.0',
          ),
        ),
        'jean85/pretty-package-versions' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '4d7aa5dab42e2a76d99559706022885de0e18e1a',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../jean85/pretty-package-versions',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'larastan/larastan' => 
        array (
          'pretty_version' => 'v3.9.6',
          'version' => '3.9.6.0',
          'reference' => '9ad17e83e96b63536cb6ac39c3d40d29ff9cf636',
          'type' => 'phpstan-extension',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../larastan/larastan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/agent-detector' => 
        array (
          'pretty_version' => 'v2.0.1',
          'version' => '2.0.1.0',
          'reference' => 'fb26cb3e857ee972971f18176405084e64dfef5e',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../laravel/agent-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v13.7.0',
          'version' => '13.7.0.0',
          'reference' => 'f13b85b2cce7ef5e8f3bcdf2b6c6364bbdedae0b',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pail' => 
        array (
          'pretty_version' => 'v1.2.6',
          'version' => '1.2.6.0',
          'reference' => 'aa71a01c309e7f66bc2ec4fb1a59291b82eb4abf',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../laravel/pail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pao' => 
        array (
          'pretty_version' => 'v1.0.6',
          'version' => '1.0.6.0',
          'reference' => '02f62a64c2b60af44a418ee490fee193590d8269',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../laravel/pao',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/pint' => 
        array (
          'pretty_version' => 'v1.29.1',
          'version' => '1.29.1.0',
          'reference' => '0770e9b7fafd50d4586881d456d6eb41c9247a80',
          'type' => 'project',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../laravel/pint',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.17',
          'version' => '0.3.17.0',
          'reference' => '6a82ac19a28b916ae0885828795dbd4c59d9a818',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/sanctum' => 
        array (
          'pretty_version' => 'v4.3.1',
          'version' => '4.3.1.0',
          'reference' => 'e3b85d6e36ad00e5db2d1dcc27c81ffdf15cbf76',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../laravel/sanctum',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.13',
          'version' => '2.0.13.0',
          'reference' => 'b566ee0dd251f3c4078bed003a7ce015f5ea6dce',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v3.0.2',
          'version' => '3.0.2.0',
          'reference' => '4faba77764bd33411735936acdf30446d058c78b',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.8.2',
          'version' => '2.8.2.0',
          'reference' => '59fb075d2101740c337c7216e3f32b36c204218b',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.33.0',
          'version' => '3.33.0.0',
          'reference' => '570b8871e0ce693764434b29154c54b434905350',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.31.0',
          'version' => '3.31.0.0',
          'reference' => '2f669db18a4c20c755c2bb7d3a7b0b2340488079',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.8.1',
          'version' => '7.8.1.0',
          'reference' => '08cf38e3924d4f56238125547b5720496fac8fd4',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.8.1',
          'version' => '7.8.1.0',
          'reference' => '85d5c77c5d6d3af6c54db4a78246364908f3c928',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'maatwebsite/excel' => 
        array (
          'pretty_version' => '3.1.68',
          'version' => '3.1.68.0',
          'reference' => '1854739267d81d38eae7d8c623caf523f30f256b',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../maatwebsite/excel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'maennchen/zipstream-php' => 
        array (
          'pretty_version' => '3.2.2',
          'version' => '3.2.2.0',
          'reference' => '77bebeb4c6c340bb3c11c843b2cffd8bbfde4d5e',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../maennchen/zipstream-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'markbaker/complex' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => '95c56caa1cf5c766ad6d65b6344b807c1e8405b9',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../markbaker/complex',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'markbaker/matrix' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '728434227fe21be27ff6d86621a1b13107a2562c',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../markbaker/matrix',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'masterminds/html5' => 
        array (
          'pretty_version' => '2.10.0',
          'version' => '2.10.0.0',
          'reference' => 'fcf91eb64359852f00d921887b219479b4f21251',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../masterminds/html5',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.10.0',
          'version' => '3.10.0.0',
          'reference' => 'b321dd6749f0bf7189444158a3ce785cc16d69b0',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.11.4',
          'version' => '3.11.4.0',
          'reference' => 'e890471a3494740f7d9326d72ce6a8c559ffee60',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.5',
          'version' => '1.3.5.0',
          'reference' => 'f0ab1a3cda782dbc5da270d28545236aa80c4002',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.1.3',
          'version' => '4.1.3.0',
          'reference' => 'bb3ea637e3d131d72acc033cfc2746ee893349fe',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.7.0',
          'version' => '5.7.0.0',
          'reference' => 'dca41cd15c2ac9d055ad70dbfd011130757d1f82',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.9.4',
          'version' => '8.9.4.0',
          'reference' => '716af8f95a470e9094cfca09ed897b023be191a5',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => '712a31b768f5daea284c2169a7d227031001b9a8',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'pestphp/pest' => 
        array (
          'pretty_version' => 'v4.6.3',
          'version' => '4.6.3.0',
          'reference' => 'bff44562a99d30aa37573995566051b0344f9f8e',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../pestphp/pest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin' => 
        array (
          'pretty_version' => 'v4.0.0',
          'version' => '4.0.0.0',
          'reference' => '9d4b93d7f73d3f9c3189bb22c220fef271cdf568',
          'type' => 'composer-plugin',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../pestphp/pest-plugin',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-arch' => 
        array (
          'pretty_version' => 'v4.0.2',
          'version' => '4.0.2.0',
          'reference' => '3fb0d02a91b9da504b139dc7ab2a31efb7c3215c',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../pestphp/pest-plugin-arch',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-laravel' => 
        array (
          'pretty_version' => 'v4.1.0',
          'version' => '4.1.0.0',
          'reference' => '3057a36669ff11416cc0dc2b521b3aec58c488d0',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../pestphp/pest-plugin-laravel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-mutate' => 
        array (
          'pretty_version' => 'v4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'd9b32b60b2385e1688a68cc227594738ec26d96c',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../pestphp/pest-plugin-mutate',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pestphp/pest-plugin-profanity' => 
        array (
          'pretty_version' => 'v4.2.1',
          'version' => '4.2.1.0',
          'reference' => '343cfa6f3564b7e35df0ebb77b7fa97039f72b27',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../pestphp/pest-plugin-profanity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-common' => 
        array (
          'pretty_version' => '2.2.0',
          'version' => '2.2.0.0',
          'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../phpdocumentor/reflection-common',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/reflection-docblock' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => '7bae67520aa9f5ecc506d646810bd40d9da54582',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../phpdocumentor/reflection-docblock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpdocumentor/type-resolver' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => '327a05bbee54120d4786a0dc67aad30226ad4cf9',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../phpdocumentor/type-resolver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoffice/phpspreadsheet' => 
        array (
          'pretty_version' => '1.30.4',
          'version' => '1.30.4.0',
          'reference' => '02970383cc12e7bf0bc0707ea6e2e8ed23a7aec9',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../phpoffice/phpspreadsheet',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.5',
          'version' => '1.9.5.0',
          'reference' => '75365b91986c2405cf5e1e012c5595cd487a98be',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpdoc-parser' => 
        array (
          'pretty_version' => '2.3.2',
          'version' => '2.3.2.0',
          'reference' => 'a004701b11273a26cd7955a61d67a7f1e525a45a',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../phpstan/phpdoc-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.53',
          'version' => '2.1.53.0',
          'reference' => 'ef67586798c003274797b288a68b221e4270dca7',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '12.5.6',
          'version' => '12.5.6.0',
          'reference' => '876099a072646c7745f673d7aeab5382c4439691',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '6.0.1',
          'version' => '6.0.1.0',
          'reference' => '3d1cd096ef6bea4bf2762ba586e35dbd317cbfd5',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => '12b54e689b07a25a9b41e57736dfab6ec9ae5406',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => 'e1367a453f0eda562eedb4f659e13aa900d66c53',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '8.0.0',
          'version' => '8.0.0.0',
          'reference' => 'f258ce36aa457f3aa3339f9ed4c81fc66dc8c2cc',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '12.5.23',
          'version' => '12.5.23.0',
          'reference' => 'c54fcf3d6bcb6e96ac2f7e40097dc37b5f139969',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1 || 2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0 || 2.0 || 3.0',
            1 => '1.0|2.0|3.0',
            2 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0 || 2.0 || 3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.22',
          'version' => '0.12.22.0',
          'reference' => '3be75d5b9244936dd4ac62ade2bfb004d13acf0f',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'radebatz/type-info-extras' => 
        array (
          'pretty_version' => '1.0.7',
          'version' => '1.0.7.0',
          'reference' => '95a524a74a61648b44e355cb33d38db4b17ef5ce',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../radebatz/type-info-extras',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.2',
          'version' => '4.9.2.0',
          'reference' => '8429c78ca35a09f27565311b98101e2826affde0',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.9.2',
          ),
        ),
        'sabberworm/php-css-parser' => 
        array (
          'pretty_version' => 'v9.3.0',
          'version' => '9.3.0.0',
          'reference' => '88dbd0f7f91abbfe4402d0a3071e9ff4d81ed949',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../sabberworm/php-css-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '4.2.0',
          'version' => '4.2.0.0',
          'reference' => '90f41072d220e5c40df6e8635f5dafba2d9d4d04',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '7.1.6',
          'version' => '7.1.6.0',
          'reference' => 'c769009dee98f494e0edc3fd4f4087501688f11e',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => 'bad4316aba5303d0221f43f8cee37eb58d384bbb',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '7.0.0',
          'version' => '7.0.0.0',
          'reference' => '7ab1ea946c012266ca32390913653d844ecd085f',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '8.1.0',
          'version' => '8.1.0.0',
          'reference' => 'b121608b28a13f721e76ffbbd386d08eff58f3f6',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '7.0.2',
          'version' => '7.0.2.0',
          'reference' => '016951ae10980765e4e7aee491eb288c64e505b7',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '8.0.2',
          'version' => '8.0.2.0',
          'reference' => 'ef1377171613d09edd25b7816f05be8313f9115d',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => '97ffee3bcfb5805568d6af7f0f893678fc076d2f',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '7.0.0',
          'version' => '7.0.0.0',
          'reference' => '1effe8e9b8e068e9ae228e542d5d11b5d16db894',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '4bfa827c969c98be1e527abd576533293c634f6a',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '7.0.1',
          'version' => '7.0.1.0',
          'reference' => '0b01998a7d5b1f122911a66bebcb8d46f0c82d8c',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '6.0.3',
          'version' => '6.0.3.0',
          'reference' => 'e549163b9760b8f71f191651d22acf32d56d6d4d',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => '3e6ccf7657d4f0a59200564b08cead899313b53c',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'staabm/side-effects-detector' => 
        array (
          'pretty_version' => '1.0.5',
          'version' => '1.0.5.0',
          'reference' => 'd8334211a140ce329c13726d4a715adbddd0a163',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../staabm/side-effects-detector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'swagger-api/swagger-ui' => 
        array (
          'pretty_version' => 'v5.32.5',
          'version' => '5.32.5.0',
          'reference' => 'dcb493cdbf58fa885047513bd176a644f92c4955',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../swagger-api/swagger-ui',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => '674fa3b98e21531dd040e613479f5f6fa8f32111',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => '1e92e39c51f95b88e3d66fa2d9f06d1fb45dd707',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => 'b055f228a4178a1d6774909903905e3475f3eac8',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '63afe740e99a13ba87ec199bb07bbdee937a5b62',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => '8dd79d8af777ee6cba2fd4d98da6ffb839f3c0fa',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => 'f57b899fa736fd71121168ef268f23c206083f0a',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '59eb412e93815df44f05f342958efa9f46b1e586',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => 'e0be088d22278583a82da281886e8c3592fbf149',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => '9381209597ec66c25be154cbf2289076e64d1eab',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => '017e76ad089bac281553389269e259e155935e1a',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => 'f6ea532250b476bfc1b56699b388a1bdbf168f62',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => '6df02f99998081032da3407a8d6c4e1dcb5d4379',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '141046a8f9477948ff284fa65be2095baafb94f2',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '4864388bfbd3001ce88e234fab652acd91fdc57e',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '9614ac4d8061dc257ecc64cba1b140873dce8ad3',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '6a21eb99c6973357967f6ce3708cd55a6bec6315',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => 'dfb55726c3a76ea3b6459fcfda1ec2d80a682411',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '3600c2cb22399e25bb226e4a135ce91eeb2a6149',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php84' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '88486db2c389b290bf87ff1de7ebc1e13e42bb06',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/polyfill-php84',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php85' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => 'fcfa4973a9917cef23f2e38774da74a2b7d115ee',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/polyfill-php85',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php86' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '33d8fc5a705481e21fe3a81212b26f9b1f61749c',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/polyfill-php86',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.37.0',
          'version' => '1.37.0.0',
          'reference' => '26dfec253c4cf3e51b541b52ddf7e42cb0908e94',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => '60f19cd3badc8de688421e21e4305eba50f8089a',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => '9608de9873ec86e754fb6c0a0fa7e5f1a960eb6b',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '45112560a3ba2d715666a509a0bc9521d10b6c43',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => '114ac57257d75df748eda23dd003878080b8e688',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => '33600f8489485425bfcddd0d983391038d3422e7',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '65a8bc82080447fae78373aa10f8d13b38338977',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/type-info' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => '6bf34da885ff5143a3dfd8f1b863bb8ab95f50bd',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/type-info',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => '6883ebdf7bf6a12b37519dbc0df62b0222401b56',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => '9510c3966f749a1d1ff0059e1eabef6cc621e7fd',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v7.4.8',
          'version' => '7.4.8.0',
          'reference' => 'c58fdf7b3d6c2995368264c49e4e8b05bcff2883',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ta-tikoma/phpunit-architecture-test' => 
        array (
          'pretty_version' => '0.8.7',
          'version' => '0.8.7.0',
          'reference' => '1248f3f506ca9641d4f68cebcd538fa489754db8',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../ta-tikoma/phpunit-architecture-test',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'thecodingmachine/safe' => 
        array (
          'pretty_version' => 'v3.4.0',
          'version' => '3.4.0.0',
          'reference' => '705683a25bacf0d4860c7dea4d7947bfd09eea19',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../thecodingmachine/safe',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => '7989e43bf381af0eac72e4f0ca5bcbfa81658be4',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => 'f0292ccf0ec75843d65027214426b6b163b48b41',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.3',
          'version' => '5.6.3.0',
          'reference' => '955e7815d677a3eaa7075231212f2110983adecc',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '8e1051fe39379367aecf014f41744ce7539a856f',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'webmozart/assert' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => 'eb0d790f735ba6cff25c683a85a1da0eadeff9e4',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../webmozart/assert',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'zircote/swagger-php' => 
        array (
          'pretty_version' => '6.1.2',
          'version' => '6.1.2.0',
          'reference' => 'f66289ab9c9c3a1cf70222e0bebbe7c6c7109f2f',
          'type' => 'library',
          'install_path' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../zircote/swagger-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/larastan/larastan/bootstrap.php' => '5a3eacbf63b3e41659adfee92facededf8e020a932800f93c9a8b0e67f235805',
    'phar:///home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php' => 'cb8b31e82c61ce197871c9e8a6f122256751f2ab606dd2be90846d4fa5f8933e',
    'phar:///home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => 'c0068e383717870a304781d462f7e2afe1c6f24e9133851852a2aca96b4fa26f',
    'phar:///home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => '65fe0a8bc6fe285d8ddc8798ab5b9299920af70db5ad74596bc08df823e7c5d9',
    'phar:///home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1e2fe940e4ba4e00d9ee6adb2af3ee1bf333e6f8afe61c61deb038886d293427',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'Phar',
    4 => 'Reflection',
    5 => 'SPL',
    6 => 'SimpleXML',
    7 => 'Zend OPcache',
    8 => 'calendar',
    9 => 'ctype',
    10 => 'curl',
    11 => 'date',
    12 => 'dom',
    13 => 'exif',
    14 => 'fileinfo',
    15 => 'filter',
    16 => 'ftp',
    17 => 'gd',
    18 => 'gettext',
    19 => 'hash',
    20 => 'iconv',
    21 => 'json',
    22 => 'libxml',
    23 => 'mbstring',
    24 => 'mysqli',
    25 => 'mysqlnd',
    26 => 'openssl',
    27 => 'pcntl',
    28 => 'pcre',
    29 => 'pdo_mysql',
    30 => 'pdo_sqlite',
    31 => 'posix',
    32 => 'random',
    33 => 'readline',
    34 => 'session',
    35 => 'shmop',
    36 => 'sockets',
    37 => 'sodium',
    38 => 'sqlite3',
    39 => 'standard',
    40 => 'sysvmsg',
    41 => 'sysvsem',
    42 => 'sysvshm',
    43 => 'tokenizer',
    44 => 'xml',
    45 => 'xmlreader',
    46 => 'xmlwriter',
    47 => 'xsl',
    48 => 'zip',
    49 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '6',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Models/User.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method App\\Models\\User::roles() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany does not specify its types: TRelatedModel, TDeclaringModel, TPivotModel, TAccessor (2-4 required)',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Models/User.php',
       'line' => 36,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Models/User.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 36,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Application/Actions/LogoutAction.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Using nullsafe method call on non-nullable type Laravel\\Sanctum\\PersonalAccessToken. Use -> instead.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Application/Actions/LogoutAction.php',
       'line' => 13,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Application/Actions/LogoutAction.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 13,
       'nodeType' => 'PhpParser\\Node\\Expr\\NullsafeMethodCall',
       'identifier' => 'nullsafe.neverNull',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Resources/AuthUserResource.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Auth\\Http\\Resources\\AuthUserResource::$id.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Resources/AuthUserResource.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Resources/AuthUserResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 18,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Auth\\Http\\Resources\\AuthUserResource::$name.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Resources/AuthUserResource.php',
       'line' => 19,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Resources/AuthUserResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 19,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Auth\\Http\\Resources\\AuthUserResource::$email.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Resources/AuthUserResource.php',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Resources/AuthUserResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 20,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Auth\\Http\\Resources\\AuthUserResource::$roles.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Resources/AuthUserResource.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Resources/AuthUserResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 21,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Infrastructure/Models/Permission.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Auth\\Infrastructure\\Models\\Permission::roles() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany does not specify its types: TRelatedModel, TDeclaringModel, TPivotModel, TAccessor (2-4 required)',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Infrastructure/Models/Permission.php',
       'line' => 19,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Infrastructure/Models/Permission.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 19,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Infrastructure/Models/Role.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Auth\\Infrastructure\\Models\\Role::permissions() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany does not specify its types: TRelatedModel, TDeclaringModel, TPivotModel, TAccessor (2-4 required)',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Infrastructure/Models/Role.php',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Infrastructure/Models/Role.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 20,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Auth\\Infrastructure\\Models\\Role::users() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany does not specify its types: TRelatedModel, TDeclaringModel, TPivotModel, TAccessor (2-4 required)',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Infrastructure/Models/Role.php',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Infrastructure/Models/Role.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 25,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Dispatch\\Infrastructure\\Models\\DispatchOrder::$status.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 20,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$inventory_lot_id.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 25,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Collection<int, Modules\\Inventory\\Infrastructure\\Models\\Lot>|Modules\\Inventory\\Infrastructure\\Models\\Lot::$quantity.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 26,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$picked_quantity.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 26,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Dispatch\\Infrastructure\\Models\\DispatchOrder::$product_id.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php',
       'line' => 35,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 35,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Dispatch\\Infrastructure\\Models\\DispatchOrder::$quantity.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php',
       'line' => 36,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 36,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Inventory\\Infrastructure\\Models\\StockLevel::$quantity.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php',
       'line' => 36,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 36,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Dispatch\\Infrastructure\\Models\\DispatchOrder::$product_id.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php',
       'line' => 49,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 49,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Dispatch\\Infrastructure\\Models\\DispatchOrder::$quantity.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php',
       'line' => 50,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 50,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/CreateDispatchOrderAction.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Inventory\\Infrastructure\\Models\\StockLevel::$quantity.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/CreateDispatchOrderAction.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/CreateDispatchOrderAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 18,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/PickStockUsingFEFOAction.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Dispatch\\Infrastructure\\Models\\DispatchOrder::$status.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/PickStockUsingFEFOAction.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/PickStockUsingFEFOAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 18,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Dispatch\\Infrastructure\\Models\\DispatchOrder::$quantity.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/PickStockUsingFEFOAction.php',
       'line' => 22,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/PickStockUsingFEFOAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 22,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Dispatch\\Infrastructure\\Models\\DispatchOrder::$product_id.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/PickStockUsingFEFOAction.php',
       'line' => 24,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/PickStockUsingFEFOAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 24,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Inventory\\Infrastructure\\Models\\Lot::$quantity.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/PickStockUsingFEFOAction.php',
       'line' => 35,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/PickStockUsingFEFOAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 35,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Requests/CreateDispatchOrderRequest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Dispatch\\Http\\Requests\\CreateDispatchOrderRequest::rules() return type has no value type specified in iterable type array.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Requests/CreateDispatchOrderRequest.php',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Requests/CreateDispatchOrderRequest.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 16,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Resources/DispatchOrderResource.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Dispatch\\Http\\Resources\\DispatchOrderResource::toArray() return type has no value type specified in iterable type array.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Resources/DispatchOrderResource.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Resources/DispatchOrderResource.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 12,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Dispatch\\Http\\Resources\\DispatchOrderResource::$id.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Resources/DispatchOrderResource.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Resources/DispatchOrderResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 15,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Dispatch\\Http\\Resources\\DispatchOrderResource::$order_reference.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Resources/DispatchOrderResource.php',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Resources/DispatchOrderResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 16,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Dispatch\\Http\\Resources\\DispatchOrderResource::$product_id.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Resources/DispatchOrderResource.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Resources/DispatchOrderResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 17,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Dispatch\\Http\\Resources\\DispatchOrderResource::$quantity.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Resources/DispatchOrderResource.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Resources/DispatchOrderResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 18,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Dispatch\\Http\\Resources\\DispatchOrderResource::$status.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Resources/DispatchOrderResource.php',
       'line' => 19,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Resources/DispatchOrderResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 19,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Dispatch\\Http\\Resources\\DispatchOrderResource::$picks.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Resources/DispatchOrderResource.php',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Resources/DispatchOrderResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 20,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Infrastructure/Models/DispatchOrder.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Dispatch\\Infrastructure\\Models\\DispatchOrder::picks() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\HasMany does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Infrastructure/Models/DispatchOrder.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Infrastructure/Models/DispatchOrder.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 21,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Infrastructure/Models/DispatchPick.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Dispatch\\Infrastructure\\Models\\DispatchPick::order() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Infrastructure/Models/DispatchPick.php',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Infrastructure/Models/DispatchPick.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 20,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$quantity.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 25,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$quantity.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php',
       'line' => 34,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 34,
       'nodeType' => 'PHPStan\\Node\\PropertyAssignNode',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$quantity.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php',
       'line' => 40,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 40,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$quantity.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php',
       'line' => 44,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 44,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Inventory\\Infrastructure\\Models\\Product::$reorder_point.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php',
       'line' => 44,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 44,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$quantity.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php',
       'line' => 47,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 47,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Inventory\\Infrastructure\\Models\\Product::$reorder_point.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php',
       'line' => 48,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 48,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/ListProductsBelowReorderPointAction.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Inventory\\Application\\Actions\\ListProductsBelowReorderPointAction::__invoke() return type with generic class Illuminate\\Support\\Collection does not specify its types: TKey, TValue',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/ListProductsBelowReorderPointAction.php',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/ListProductsBelowReorderPointAction.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 16,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/RegisterProductAction.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Inventory\\Infrastructure\\Models\\Product::$sku.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/RegisterProductAction.php',
       'line' => 38,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/RegisterProductAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 38,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Resources/ProductResource.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Inventory\\Http\\Resources\\ProductResource::$id.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Resources/ProductResource.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Resources/ProductResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 18,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Inventory\\Http\\Resources\\ProductResource::$name.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Resources/ProductResource.php',
       'line' => 19,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Resources/ProductResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 19,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Inventory\\Http\\Resources\\ProductResource::$sku.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Resources/ProductResource.php',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Resources/ProductResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 20,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Inventory\\Http\\Resources\\ProductResource::$reorder_point.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Resources/ProductResource.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Resources/ProductResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 21,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Inventory\\Http\\Resources\\ProductResource::$created_at.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Resources/ProductResource.php',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Resources/ProductResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 25,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Inventory\\Http\\Resources\\ProductResource::$updated_at.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Resources/ProductResource.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Resources/ProductResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 26,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Listeners/SyncInventoryOnMerchandiseReceived.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Inventory\\Infrastructure\\Models\\StockLevel::$quantity.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Listeners/SyncInventoryOnMerchandiseReceived.php',
       'line' => 35,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Listeners/SyncInventoryOnMerchandiseReceived.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 35,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Location.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Inventory\\Infrastructure\\Models\\Location::lots() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\HasMany does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Location.php',
       'line' => 19,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Location.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 19,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Lot.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Inventory\\Infrastructure\\Models\\Lot::product() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Lot.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Lot.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 26,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Inventory\\Infrastructure\\Models\\Lot::location() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Lot.php',
       'line' => 31,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Lot.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 31,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Product.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class Modules\\Inventory\\Infrastructure\\Models\\Product uses generic trait Illuminate\\Database\\Eloquent\\Factories\\HasFactory but does not specify its types: TFactory',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Product.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Product.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 15,
       'nodeType' => 'PhpParser\\Node\\Stmt\\TraitUse',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Inventory\\Infrastructure\\Models\\Product::lots() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\HasMany does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Product.php',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Product.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 25,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Inventory\\Infrastructure\\Models\\Product::stockLevel() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\HasOne does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Product.php',
       'line' => 30,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Product.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 30,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/StockLevel.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Inventory\\Infrastructure\\Models\\StockLevel::product() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/StockLevel.php',
       'line' => 19,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/StockLevel.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 19,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Repositories/EloquentProductRepository.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Inventory\\Infrastructure\\Repositories\\EloquentProductRepository::cursorPaginate() return type with generic interface Illuminate\\Contracts\\Pagination\\CursorPaginator does not specify its types: TKey, TValue',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Repositories/EloquentProductRepository.php',
       'line' => 42,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Repositories/EloquentProductRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 42,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Inventory\\Infrastructure\\Repositories\\EloquentProductRepository::belowReorderPoint() return type with generic class Illuminate\\Support\\Collection does not specify its types: TKey, TValue',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Repositories/EloquentProductRepository.php',
       'line' => 50,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Repositories/EloquentProductRepository.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 50,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/LinkLotToReceiptAction.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Receiving\\Infrastructure\\Models\\ReceiptLotLink::$receipt_id.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/LinkLotToReceiptAction.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/LinkLotToReceiptAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 26,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Receiving\\Infrastructure\\Models\\ReceiptLotLink::$product_id.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/LinkLotToReceiptAction.php',
       'line' => 27,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/LinkLotToReceiptAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 27,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Receiving\\Infrastructure\\Models\\ReceiptLotLink::$lot_number.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/LinkLotToReceiptAction.php',
       'line' => 28,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/LinkLotToReceiptAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 28,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Receiving\\Infrastructure\\Models\\ReceiptLotLink::$expires_at.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/LinkLotToReceiptAction.php',
       'line' => 29,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/LinkLotToReceiptAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 29,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Receiving\\Infrastructure\\Models\\ReceiptLotLink::$quantity.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/LinkLotToReceiptAction.php',
       'line' => 30,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/LinkLotToReceiptAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 30,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Receiving\\Infrastructure\\Models\\ReceiptLotLink::$location_id.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/LinkLotToReceiptAction.php',
       'line' => 31,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/LinkLotToReceiptAction.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 31,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Requests/LinkLotToReceiptRequest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Receiving\\Http\\Requests\\LinkLotToReceiptRequest::rules() return type has no value type specified in iterable type array.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Requests/LinkLotToReceiptRequest.php',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Requests/LinkLotToReceiptRequest.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 16,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Requests/RegisterReceiptRequest.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Receiving\\Http\\Requests\\RegisterReceiptRequest::rules() return type has no value type specified in iterable type array.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Requests/RegisterReceiptRequest.php',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Requests/RegisterReceiptRequest.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 16,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptLotLinkResource.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Receiving\\Http\\Resources\\ReceiptLotLinkResource::toArray() return type has no value type specified in iterable type array.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptLotLinkResource.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptLotLinkResource.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 12,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Receiving\\Http\\Resources\\ReceiptLotLinkResource::$id.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptLotLinkResource.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptLotLinkResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 15,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Receiving\\Http\\Resources\\ReceiptLotLinkResource::$receipt_id.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptLotLinkResource.php',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptLotLinkResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 16,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Receiving\\Http\\Resources\\ReceiptLotLinkResource::$product_id.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptLotLinkResource.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptLotLinkResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 17,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Receiving\\Http\\Resources\\ReceiptLotLinkResource::$lot_number.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptLotLinkResource.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptLotLinkResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 18,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Receiving\\Http\\Resources\\ReceiptLotLinkResource::$expires_at.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptLotLinkResource.php',
       'line' => 19,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptLotLinkResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 19,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Receiving\\Http\\Resources\\ReceiptLotLinkResource::$quantity.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptLotLinkResource.php',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptLotLinkResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 20,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Receiving\\Http\\Resources\\ReceiptLotLinkResource::$location_id.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptLotLinkResource.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptLotLinkResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 21,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptResource.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Receiving\\Http\\Resources\\ReceiptResource::toArray() return type has no value type specified in iterable type array.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptResource.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptResource.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 12,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Receiving\\Http\\Resources\\ReceiptResource::$id.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptResource.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 15,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Receiving\\Http\\Resources\\ReceiptResource::$supplier_reference.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptResource.php',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 16,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Receiving\\Http\\Resources\\ReceiptResource::$received_at.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptResource.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 17,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Receiving\\Http\\Resources\\ReceiptResource::$notes.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptResource.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 18,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Infrastructure/Models/Receipt.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Receiving\\Infrastructure\\Models\\Receipt::lots() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\HasMany does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Infrastructure/Models/Receipt.php',
       'line' => 24,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Infrastructure/Models/Receipt.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 24,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Infrastructure/Models/ReceiptLotLink.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Receiving\\Infrastructure\\Models\\ReceiptLotLink::receipt() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Infrastructure/Models/ReceiptLotLink.php',
       'line' => 27,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Infrastructure/Models/ReceiptLotLink.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 27,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Actions/GetInventoryMetricsAction.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Reporting\\Application\\Actions\\GetInventoryMetricsAction::__invoke() return type with generic class Illuminate\\Support\\Collection does not specify its types: TKey, TValue',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Actions/GetInventoryMetricsAction.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Actions/GetInventoryMetricsAction.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 12,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Reporting\\Application\\Exports\\InventoryMetricsExport::collection() return type with generic class Illuminate\\Support\\Collection does not specify its types: TKey, TValue',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
       'line' => 14,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 14,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $callback of method Illuminate\\Database\\Eloquent\\Collection<int,Modules\\Reporting\\Infrastructure\\Models\\InventoryMetric>::map() contains unresolvable type.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
       'line' => 19,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 16,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'argument.unresolvableType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Return type of call to method Illuminate\\Database\\Eloquent\\Collection<int,Modules\\Reporting\\Infrastructure\\Models\\InventoryMetric>::map() contains unresolvable type.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
       'line' => 19,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 16,
       'nodeType' => 'PhpParser\\Node\\Expr\\MethodCall',
       'identifier' => 'method.unresolvableReturnType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Reporting\\Infrastructure\\Models\\InventoryMetric::$product_id.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 20,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Reporting\\Infrastructure\\Models\\InventoryMetric::$sku.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 21,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Reporting\\Infrastructure\\Models\\InventoryMetric::$product_name.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
       'line' => 22,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 22,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Reporting\\Infrastructure\\Models\\InventoryMetric::$current_stock.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 23,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Reporting\\Infrastructure\\Models\\InventoryMetric::$reorder_point.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
       'line' => 24,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 24,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Reporting\\Infrastructure\\Models\\InventoryMetric::$stock_gap.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 25,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Reporting\\Infrastructure\\Models\\InventoryMetric::$updated_from_event_at.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 26,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Reporting\\Application\\Exports\\InventoryMetricsExport::headings() return type has no value type specified in iterable type array.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
       'line' => 30,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 30,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Controllers/ReportingController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Reporting\\Http\\Controllers\\ReportingController::exportMetricsPdf() has no return type specified.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Controllers/ReportingController.php',
       'line' => 48,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Controllers/ReportingController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 48,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Reporting\\Http\\Controllers\\ReportingController::exportMetricsExcel() has no return type specified.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Controllers/ReportingController.php',
       'line' => 67,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Controllers/ReportingController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 67,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Resources/InventoryMetricResource.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method Modules\\Reporting\\Http\\Resources\\InventoryMetricResource::toArray() return type has no value type specified in iterable type array.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Resources/InventoryMetricResource.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Resources/InventoryMetricResource.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 12,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Reporting\\Http\\Resources\\InventoryMetricResource::$product_id.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Resources/InventoryMetricResource.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Resources/InventoryMetricResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 15,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Reporting\\Http\\Resources\\InventoryMetricResource::$sku.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Resources/InventoryMetricResource.php',
       'line' => 16,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Resources/InventoryMetricResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 16,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Reporting\\Http\\Resources\\InventoryMetricResource::$product_name.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Resources/InventoryMetricResource.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Resources/InventoryMetricResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 17,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Reporting\\Http\\Resources\\InventoryMetricResource::$current_stock.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Resources/InventoryMetricResource.php',
       'line' => 18,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Resources/InventoryMetricResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 18,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Reporting\\Http\\Resources\\InventoryMetricResource::$reorder_point.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Resources/InventoryMetricResource.php',
       'line' => 19,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Resources/InventoryMetricResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 19,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Reporting\\Http\\Resources\\InventoryMetricResource::$stock_gap.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Resources/InventoryMetricResource.php',
       'line' => 20,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Resources/InventoryMetricResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 20,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Reporting\\Http\\Resources\\InventoryMetricResource::$updated_from_event_at.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Resources/InventoryMetricResource.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Resources/InventoryMetricResource.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 21,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Infrastructure/Listeners/UpdateInventoryMetricsOnStockAdjusted.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Illuminate\\Database\\Eloquent\\Model::$quantity.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Infrastructure/Listeners/UpdateInventoryMetricsOnStockAdjusted.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Infrastructure/Listeners/UpdateInventoryMetricsOnStockAdjusted.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 21,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Inventory\\Infrastructure\\Models\\Product::$reorder_point.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Infrastructure/Listeners/UpdateInventoryMetricsOnStockAdjusted.php',
       'line' => 22,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Infrastructure/Listeners/UpdateInventoryMetricsOnStockAdjusted.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 22,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Inventory\\Infrastructure\\Models\\Product::$sku.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Infrastructure/Listeners/UpdateInventoryMetricsOnStockAdjusted.php',
       'line' => 27,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Infrastructure/Listeners/UpdateInventoryMetricsOnStockAdjusted.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 27,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Access to an undefined property Modules\\Inventory\\Infrastructure\\Models\\Product::$name.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Infrastructure/Listeners/UpdateInventoryMetricsOnStockAdjusted.php',
       'line' => 28,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Infrastructure/Listeners/UpdateInventoryMetricsOnStockAdjusted.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more: <fg=cyan>https://phpstan.org/blog/solving-phpstan-access-to-undefined-property</>',
       'nodeLine' => 28,
       'nodeType' => 'PhpParser\\Node\\Expr\\PropertyFetch',
       'identifier' => 'property.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Shared/Http/OpenApi.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant L5_SWAGGER_CONST_HOST not found.',
       'file' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Shared/Http/OpenApi.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Shared/Http/OpenApi.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 15,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Models/User.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'App\\Models\\User',
        1 => 'casts',
        2 => 'App\\Models\\User',
      ),
    ),
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Laravel\\Sanctum\\HasApiTokens',
        1 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        2 => 'Illuminate\\Notifications\\Notifiable',
      ),
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Application/DTOs/LoginData.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Modules\\Auth\\Application\\DTOs\\LoginData',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Requests/LoginRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Auth\\Http\\Requests\\LoginRequest',
        1 => 'authorize',
        2 => 'Modules\\Auth\\Http\\Requests\\LoginRequest',
      ),
      1 => 
      array (
        0 => 'Modules\\Auth\\Http\\Requests\\LoginRequest',
        1 => 'rules',
        2 => 'Modules\\Auth\\Http\\Requests\\LoginRequest',
      ),
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/routes.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 9,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 12,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 13,
      ),
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Illuminate\\Database\\Eloquent\\Model',
        ),
        1 => 'save',
        2 => 42,
      ),
      1 => 
      array (
        0 => 
        array (
          0 => 'Illuminate\\Database\\Eloquent\\Model',
        ),
        1 => 'save',
        2 => 45,
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Event',
        1 => 'dispatch',
        2 => 47,
      ),
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/PickStockUsingFEFOAction.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Illuminate\\Database\\Eloquent\\Model',
        ),
        1 => 'save',
        2 => 55,
      ),
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/DTOs/CreateDispatchOrderData.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Modules\\Dispatch\\Application\\DTOs\\CreateDispatchOrderData',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Domain/Events/DispatchConfirmed.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Modules\\Dispatch\\Domain\\Events\\DispatchConfirmed',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Requests/CreateDispatchOrderRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Dispatch\\Http\\Requests\\CreateDispatchOrderRequest',
        1 => 'authorize',
        2 => 'Modules\\Dispatch\\Http\\Requests\\CreateDispatchOrderRequest',
      ),
      1 => 
      array (
        0 => 'Modules\\Dispatch\\Http\\Requests\\CreateDispatchOrderRequest',
        1 => 'rules',
        2 => 'Modules\\Dispatch\\Http\\Requests\\CreateDispatchOrderRequest',
      ),
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/routes.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 10,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 11,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 12,
      ),
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Modules\\Inventory\\Application\\Actions\\AdjustStockAction',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Event',
        1 => 'dispatch',
        2 => 38,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Event',
        1 => 'dispatch',
        2 => 45,
      ),
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/GetProductStockAction.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Modules\\Inventory\\Application\\Actions\\GetProductStockAction',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/ListProductsBelowReorderPointAction.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Modules\\Inventory\\Application\\Actions\\ListProductsBelowReorderPointAction',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/RegisterProductAction.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Modules\\Inventory\\Application\\Actions\\RegisterProductAction',
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Event',
        1 => 'dispatch',
        2 => 36,
      ),
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/DTOs/AdjustStockData.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Modules\\Inventory\\Application\\DTOs\\AdjustStockData',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/DTOs/RegisterProductData.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Modules\\Inventory\\Application\\DTOs\\RegisterProductData',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Entities/Location.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Modules\\Inventory\\Domain\\Entities\\Location',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Entities/Lot.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Modules\\Inventory\\Domain\\Entities\\Lot',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Entities/Product.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Modules\\Inventory\\Domain\\Entities\\Product',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Entities/StockLevel.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Modules\\Inventory\\Domain\\Entities\\StockLevel',
    ),
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Inventory\\Domain\\Entities\\StockLevel',
        1 => 'quantity',
        2 => 'Modules\\Inventory\\Domain\\Entities\\StockLevel',
      ),
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Events/ProductRegistered.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Modules\\Inventory\\Domain\\Events\\ProductRegistered',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Events/ReorderPointReached.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Modules\\Inventory\\Domain\\Events\\ReorderPointReached',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Events/StockAdjusted.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Modules\\Inventory\\Domain\\Events\\StockAdjusted',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Requests/AdjustStockRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Inventory\\Http\\Requests\\AdjustStockRequest',
        1 => 'authorize',
        2 => 'Modules\\Inventory\\Http\\Requests\\AdjustStockRequest',
      ),
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Requests/RegisterProductRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Inventory\\Http\\Requests\\RegisterProductRequest',
        1 => 'authorize',
        2 => 'Modules\\Inventory\\Http\\Requests\\RegisterProductRequest',
      ),
      1 => 
      array (
        0 => 'Modules\\Inventory\\Http\\Requests\\RegisterProductRequest',
        1 => 'rules',
        2 => 'Modules\\Inventory\\Http\\Requests\\RegisterProductRequest',
      ),
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Listeners/SyncInventoryOnMerchandiseReceived.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Illuminate\\Database\\Eloquent\\Model',
        ),
        1 => 'save',
        2 => 36,
      ),
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Product.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitUseCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Repositories/EloquentProductRepository.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureMethodCallCollector' => 
    array (
      0 => 
      array (
        0 => 
        array (
          0 => 'Illuminate\\Database\\Eloquent\\Model',
        ),
        1 => 'save',
        2 => 37,
      ),
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/routes.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 10,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 11,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 12,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 13,
      ),
      4 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'patch',
        2 => 14,
      ),
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/LinkLotToReceiptAction.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Event',
        1 => 'dispatch',
        2 => 25,
      ),
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/DTOs/LinkLotToReceiptData.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Modules\\Receiving\\Application\\DTOs\\LinkLotToReceiptData',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/DTOs/RegisterReceiptData.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Modules\\Receiving\\Application\\DTOs\\RegisterReceiptData',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Domain/Events/MerchandiseReceived.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\ConstructorWithoutImpurePointsCollector' => 
    array (
      0 => 'Modules\\Receiving\\Domain\\Events\\MerchandiseReceived',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Requests/LinkLotToReceiptRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Receiving\\Http\\Requests\\LinkLotToReceiptRequest',
        1 => 'authorize',
        2 => 'Modules\\Receiving\\Http\\Requests\\LinkLotToReceiptRequest',
      ),
      1 => 
      array (
        0 => 'Modules\\Receiving\\Http\\Requests\\LinkLotToReceiptRequest',
        1 => 'rules',
        2 => 'Modules\\Receiving\\Http\\Requests\\LinkLotToReceiptRequest',
      ),
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Requests/RegisterReceiptRequest.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Receiving\\Http\\Requests\\RegisterReceiptRequest',
        1 => 'authorize',
        2 => 'Modules\\Receiving\\Http\\Requests\\RegisterReceiptRequest',
      ),
      1 => 
      array (
        0 => 'Modules\\Receiving\\Http\\Requests\\RegisterReceiptRequest',
        1 => 'rules',
        2 => 'Modules\\Receiving\\Http\\Requests\\RegisterReceiptRequest',
      ),
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/routes.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 10,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'post',
        2 => 11,
      ),
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'Modules\\Reporting\\Application\\Exports\\InventoryMetricsExport',
        1 => 'headings',
        2 => 'Modules\\Reporting\\Application\\Exports\\InventoryMetricsExport',
      ),
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/routes.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 10,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 11,
      ),
      2 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 12,
      ),
      3 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'get',
        2 => 13,
      ),
    ),
  ),
); },
	'dependencies' => array (
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Http/Controllers/Controller.php' => 
  array (
    'fileHash' => '25d1c1ef8e6cc8a376553faacfba2b07d9dfaee9bdbb84f14f77517580e9deb1',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Http/Middleware/EnsureUserHasRole.php' => 
  array (
    'fileHash' => '2cbb57b5bb912d2f6961960a11bba952bd95e2c3df5e604dd96a337d6ad8b1d5',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Models/User.php' => 
  array (
    'fileHash' => '5d394f15c45373e4e7d1bf52f1a83ddf9217f95fb66bd976d800e6a910eaa6d4',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Http/Middleware/EnsureUserHasRole.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Application/Actions/GetAuthenticatedUserAction.php',
      2 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Application/Actions/LoginAction.php',
      3 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Application/Actions/LogoutAction.php',
      4 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Controllers/AuthController.php',
      5 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Infrastructure/Models/Role.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Application/Actions/GetAuthenticatedUserAction.php' => 
  array (
    'fileHash' => '786effd1973b58dfebe1e8e51791126cd49a022c3a2a40211e043516196458d8',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Controllers/AuthController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Application/Actions/LoginAction.php' => 
  array (
    'fileHash' => '51ae99bf70a605d10fc8a7f66530aac969b88c141c78569c0964dbdbde2ab314',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Controllers/AuthController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Application/Actions/LogoutAction.php' => 
  array (
    'fileHash' => '6cd0f29de83e9bab04becd4bcbb9c61fc31ba4a2f4b1878e20f871a41611b324',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Controllers/AuthController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Application/DTOs/LoginData.php' => 
  array (
    'fileHash' => '76d138072453be6c43fb1640fd6f482d5efe6c6bc07276deee6792d72eca8434',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Application/Actions/LoginAction.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Controllers/AuthController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/AuthServiceProvider.php' => 
  array (
    'fileHash' => 'f96dc363fb3235808b55517eefff4822b7ff4a0562991ad11d7e85294ee73be2',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Database/Migrations/2026_04_28_000100_create_roles_permissions_tables.php' => 
  array (
    'fileHash' => '4ebadf906ef6f34b3fca2e22c743d66437af13395a2ff372fb5a2744fd0e80c4',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Database/Seeders/AuthRolesSeeder.php' => 
  array (
    'fileHash' => '81b544d060f20ceee5686cf21ff9de732461523c68b9d28c8127ffbf44e87a8f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Controllers/AuthController.php' => 
  array (
    'fileHash' => '30cf04c2735156e0c5b23f043fe9df591183eddfc6c18f52799c5fa7b017e6f7',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/routes.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Requests/LoginRequest.php' => 
  array (
    'fileHash' => '78d48daf6b6c22e4d29ba6ad200782d87d7288986bca0f41ac383381a69c81d5',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Controllers/AuthController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Resources/AuthUserResource.php' => 
  array (
    'fileHash' => 'eb8d500832db79cd41789533e6d4f62c9180bf6726e69f829567f6f099ab624a',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Controllers/AuthController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Infrastructure/Models/Permission.php' => 
  array (
    'fileHash' => 'a052c20926dfe7a0393e66d3a6e33da93245ab08db5ce261b15e8c707c6f9192',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Infrastructure/Models/Role.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Infrastructure/Models/Role.php' => 
  array (
    'fileHash' => '817422d94d51ecdb506e6ab6e11988489bd4e52d939559108718e1666c934a09',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Models/User.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Database/Seeders/AuthRolesSeeder.php',
      2 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Infrastructure/Models/Permission.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/routes.php' => 
  array (
    'fileHash' => '66ee615f8bd5b51c4e91a138b3796f30d445f086e454d571f1e421edbb68c35c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php' => 
  array (
    'fileHash' => 'c3bed17a621a953dad1bf3e03a6735747dece2c1cd3417c229159436f175de51',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Controllers/DispatchController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/CreateDispatchOrderAction.php' => 
  array (
    'fileHash' => '2256388a98031c487289020a4384a710c8ddca9bd802d173dc89064e4d58c6a3',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Controllers/DispatchController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/PickStockUsingFEFOAction.php' => 
  array (
    'fileHash' => 'e88cdefbe891db7ac74bd63085ef28f7cd323e209f3f7714b62ce7dbd5589a9c',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Controllers/DispatchController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/DTOs/CreateDispatchOrderData.php' => 
  array (
    'fileHash' => 'e9b9479875f85c3ac4b583d65b17f854fc47308c9ab87c486df58bbee1c0169c',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/CreateDispatchOrderAction.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Controllers/DispatchController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Database/Migrations/2026_04_28_000400_create_dispatch_tables.php' => 
  array (
    'fileHash' => 'c4d67b196dbf46fe925ee6d14608523f27f9d119628dd08829f0da1324286753',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/DispatchServiceProvider.php' => 
  array (
    'fileHash' => 'b017ede633ad49a5315b78c15d7772d3b63a98ec4255615d52e2e1e134dd4cb7',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Domain/Events/DispatchConfirmed.php' => 
  array (
    'fileHash' => 'acce9a62210375e047fbe326732af668642837f46e9e7939965010a335e493a7',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Controllers/DispatchController.php' => 
  array (
    'fileHash' => 'a4a6a98e1b4b2194e3e8c33d3771517d082c47aa9fda7878e166041154e05639',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/routes.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Requests/CreateDispatchOrderRequest.php' => 
  array (
    'fileHash' => '80aa35ebfa5f25e62dac089ce2d16b24e1e62af804bd44e81095b5b7d776de6e',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Controllers/DispatchController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Resources/DispatchOrderResource.php' => 
  array (
    'fileHash' => 'c13f4bb9c8cf54e4c2937ba0938510f611ffeaebf49864c3d0d14027ab84a953',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Controllers/DispatchController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Infrastructure/Models/DispatchOrder.php' => 
  array (
    'fileHash' => '6fc9f6b239e21af73df0edb49333aeb859b8c0a76223fb7d51a471545636c927',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/CreateDispatchOrderAction.php',
      2 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/PickStockUsingFEFOAction.php',
      3 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Controllers/DispatchController.php',
      4 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Infrastructure/Models/DispatchPick.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Infrastructure/Models/DispatchPick.php' => 
  array (
    'fileHash' => 'bba9749cac225f9cf46f331dc3ae7c59bbcbabb4162f484b80f1e8e472070267',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/PickStockUsingFEFOAction.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Infrastructure/Models/DispatchOrder.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/routes.php' => 
  array (
    'fileHash' => '49280aea14d91cec560a820810e93574fcc465584c824c1162a741149339602e',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php' => 
  array (
    'fileHash' => '6256318210641e66a3eed1bf4ba3233f1c1a96f6f41482aed63efa64c82476b2',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Controllers/InventoryController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/GetProductStockAction.php' => 
  array (
    'fileHash' => '9a2ba9cd336592a1bbee5a01e3eb395c978b1e87b07d7e9e47742799d40e1007',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Controllers/InventoryController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/ListProductsBelowReorderPointAction.php' => 
  array (
    'fileHash' => 'ff3c4ab113d001f783fb1a857c98c1cdabe2f5ca09a0271fae07839b357504ce',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Controllers/InventoryController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/RegisterProductAction.php' => 
  array (
    'fileHash' => '21e1d1557a576c984acf83f9f282f85b15b524e315ae6fff8d4040d2db525f3f',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Controllers/InventoryController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/DTOs/AdjustStockData.php' => 
  array (
    'fileHash' => '7644dfdf6304e1a6d7b815cd8dd57fc75fa21d4c262f78ddaaf100a74dbad7a8',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Controllers/InventoryController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/DTOs/RegisterProductData.php' => 
  array (
    'fileHash' => '311754681e7bff1c1cc06b5c316c81278e836d55e195e5f68d47d6c217ce03ed',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/RegisterProductAction.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Controllers/InventoryController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Database/Factories/ProductFactory.php' => 
  array (
    'fileHash' => '2924e5fd504659bf8db55ef1089285c6c43b5cb91720ea254e8115695d3d65f6',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Database/Seeders/InventorySeeder.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Product.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Database/Migrations/2026_04_28_000200_create_inventory_tables.php' => 
  array (
    'fileHash' => '6290266090e6eb50799c4ac31f035505f081b5885c62ddff7d62865059dc0e5d',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Database/Seeders/InventorySeeder.php' => 
  array (
    'fileHash' => '0e0964e9574bc099d1f386f56f5b4f361fe2f9858106762b5f77b391bee0d85c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Entities/Location.php' => 
  array (
    'fileHash' => '4675f50a4116122f2236bcab047e5c0a1719c2f90e76274fcd0071221a2940a8',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Entities/Lot.php' => 
  array (
    'fileHash' => '1d4c9b7dfdf374a2c525e38368249934c75b724695500959ba8bf5e12bffe01b',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Entities/Product.php' => 
  array (
    'fileHash' => '8b43edd447bf3804b1e413651e19bf0e0abd06cc3cf2fbb0e784f25fbf4e077e',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/RegisterProductAction.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Entities/StockLevel.php' => 
  array (
    'fileHash' => '3300db87b9471a70efcf134a622867f475361950dc792bf6326fccd41458020f',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Events/ProductRegistered.php' => 
  array (
    'fileHash' => '758973d6945e91f48b6a09c3f6238088a302402c841e8aadd729b0128b6ccd73',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/RegisterProductAction.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Events/ReorderPointReached.php' => 
  array (
    'fileHash' => '973e3fe08661b5c8b3366905ff59833518d7f7774fbe720d2c63641d18846b6e',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Events/StockAdjusted.php' => 
  array (
    'fileHash' => 'bbdf8add98b2e04705d5366b0b50e6ef8826aa367f20bff046535d280baaa122',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Infrastructure/Listeners/UpdateInventoryMetricsOnStockAdjusted.php',
      2 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/ReportingServiceProvider.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/ValueObjects/LotNumber.php' => 
  array (
    'fileHash' => 'f0a8ab607cccc637497564312a4f42fbb8fdab68784d2a1f431ee65223ca40b2',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Entities/Lot.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/ValueObjects/Quantity.php' => 
  array (
    'fileHash' => '4470d9e80da9972fe80defd16a7c902e3f9cff27ecf4c09a9157e64d43388cfc',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Entities/Lot.php',
      2 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Entities/StockLevel.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/ValueObjects/ReorderPoint.php' => 
  array (
    'fileHash' => '9a94eb65520017cfd0a90c4f7e6f7bce38551f8414ef605e1ecd5648d6c6845c',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/RegisterProductAction.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Entities/Product.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/ValueObjects/Sku.php' => 
  array (
    'fileHash' => 'ddb268b4a3c63521b36dce81ff26654df81c05a2e0eea54d69dcd8b080b008fa',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/RegisterProductAction.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Entities/Product.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Controllers/InventoryController.php' => 
  array (
    'fileHash' => '9f4d36d2e34b08291e9f761f6986663120ff36ecd590e60e2f79b9d0e5d71acf',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/routes.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Requests/AdjustStockRequest.php' => 
  array (
    'fileHash' => 'c3c01cde2b4916c0714843ad89d261da4047269f2788d3a0ae3287944fab25a5',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Controllers/InventoryController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Requests/RegisterProductRequest.php' => 
  array (
    'fileHash' => '85cf85eabab8cccce9ceefea4c1f1c3b6cd510a1e718d2a3737f495e7ebad8d7',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Controllers/InventoryController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Resources/ProductResource.php' => 
  array (
    'fileHash' => '72ffde497e1d3e426878a95376fcdeed3f2b16b252c9e25f6bd39c554191da39',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Controllers/InventoryController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Listeners/SyncInventoryOnMerchandiseReceived.php' => 
  array (
    'fileHash' => 'b87d6113dab51db728cafd4c517875eae98b7675448d2a9612d543c5c03d1699',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/InventoryServiceProvider.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Location.php' => 
  array (
    'fileHash' => '0b8f9c277965ebf51459d0afd5b781f0d12e93d2ae4e7142b1d68fb625d81531',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Database/Seeders/InventorySeeder.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Lot.php',
      2 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Actions/GetReportingSummaryAction.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Lot.php' => 
  array (
    'fileHash' => '7fb8ae1912f0e3cbc86dea96d0fa1bc39cf0d8dd14466a9cbe252b58193725a0',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/PickStockUsingFEFOAction.php',
      2 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Listeners/SyncInventoryOnMerchandiseReceived.php',
      3 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Location.php',
      4 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Product.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Product.php' => 
  array (
    'fileHash' => '3cb769f62112ff1bdbd85020c38ae2a2206e2b66a01e5c511f220ace7ae47fc4',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/GetProductStockAction.php',
      2 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/RegisterProductAction.php',
      3 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Database/Factories/ProductFactory.php',
      4 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Database/Seeders/InventorySeeder.php',
      5 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Controllers/InventoryController.php',
      6 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Listeners/SyncInventoryOnMerchandiseReceived.php',
      7 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Lot.php',
      8 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/StockLevel.php',
      9 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Repositories/EloquentProductRepository.php',
      10 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Infrastructure/Listeners/UpdateInventoryMetricsOnStockAdjusted.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/StockLevel.php' => 
  array (
    'fileHash' => 'dba8d797678437ec058fde8df5776b116c747d7ebfd5d84ca2b0dc06bc2c1026',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/CreateDispatchOrderAction.php',
      2 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Database/Seeders/InventorySeeder.php',
      3 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Listeners/SyncInventoryOnMerchandiseReceived.php',
      4 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Product.php',
      5 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Repositories/EloquentProductRepository.php',
      6 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Actions/GetReportingSummaryAction.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Repositories/EloquentProductRepository.php' => 
  array (
    'fileHash' => '22c1ecce6889c11a0b78d19899c351f480defa742f81a5d35d10196fd914dad7',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/GetProductStockAction.php',
      2 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/ListProductsBelowReorderPointAction.php',
      3 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/RegisterProductAction.php',
      4 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Controllers/InventoryController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/InventoryServiceProvider.php' => 
  array (
    'fileHash' => '3cb9c19b7241fe685ea4406a0b17be592b962b09149f27991ea9fe170933a4a0',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/routes.php' => 
  array (
    'fileHash' => '1da13528246d2cb31e57d777b7038bfdb075e51554ebb75b0a31f417902c480c',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/LinkLotToReceiptAction.php' => 
  array (
    'fileHash' => '13438618843c8eccacbb9557fe8869b56c714505ad4ba35a4411bc95f7e727b0',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Controllers/ReceivingController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/RegisterReceiptAction.php' => 
  array (
    'fileHash' => '4ae9344bf067df120e926ebe8a7a360d66a70550d7fe39c1177b11c178ee3aff',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Controllers/ReceivingController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/DTOs/LinkLotToReceiptData.php' => 
  array (
    'fileHash' => 'ffef3c16d68d6d1eabd56a2805c6d7406a408221dd13a40d7a0f851312aa137c',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/LinkLotToReceiptAction.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Controllers/ReceivingController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/DTOs/RegisterReceiptData.php' => 
  array (
    'fileHash' => '84e8525306013a36338b38ddaa1476f22cbd795250e3d42c62a543265983ce2a',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/RegisterReceiptAction.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Controllers/ReceivingController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Database/Migrations/2026_04_28_000300_create_receiving_tables.php' => 
  array (
    'fileHash' => 'd0b2fec6d008e379ae307ed7c3805df5d8c7e0fad4f1f1d28ff7a4a880a2ecc7',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Domain/Events/MerchandiseReceived.php' => 
  array (
    'fileHash' => 'b73ba4f1a38ab55cdd5d793ad89691a07ac3dc2bc686f21db32e6e4bb274f3b6',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Listeners/SyncInventoryOnMerchandiseReceived.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/InventoryServiceProvider.php',
      2 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/LinkLotToReceiptAction.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Controllers/ReceivingController.php' => 
  array (
    'fileHash' => '2b9e2579481946d85c40a916ea3eaeb0858de7f6ee5c07b54fd4695f3a415e50',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/routes.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Requests/LinkLotToReceiptRequest.php' => 
  array (
    'fileHash' => '7a7faf31c4294436630a3bb6867b4ebd3ced11fcb18305fce48cc0725b8ac3a4',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Controllers/ReceivingController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Requests/RegisterReceiptRequest.php' => 
  array (
    'fileHash' => 'e4da7a3cfed2b37c99cb078a2d45f99066acdced31793686229b9401eba514fd',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Controllers/ReceivingController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptLotLinkResource.php' => 
  array (
    'fileHash' => '6468b21056b893015942f6dfd115a92193691edf0619382ff2495999743a96b2',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Controllers/ReceivingController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptResource.php' => 
  array (
    'fileHash' => 'a76787a8789045379b6e2f0910e739a5b04215df0d38568a28ea33d9764e4e97',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Controllers/ReceivingController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Infrastructure/Models/Receipt.php' => 
  array (
    'fileHash' => '4a5acbedbe28163b13efa03589ccd543976baccd0cdedc4c4be8f00ac4b217a1',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/RegisterReceiptAction.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Controllers/ReceivingController.php',
      2 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Infrastructure/Models/ReceiptLotLink.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Infrastructure/Models/ReceiptLotLink.php' => 
  array (
    'fileHash' => 'da1a3432f8b21d5e28b0cd538e095ba7df676b3ed533beb8323304ff72d198de',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/LinkLotToReceiptAction.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Controllers/ReceivingController.php',
      2 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Infrastructure/Models/Receipt.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/ReceivingServiceProvider.php' => 
  array (
    'fileHash' => '9e742c860d15e92571f7a1bff157c59496fd9406a01c16b9677024cd0c491efa',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/routes.php' => 
  array (
    'fileHash' => '47270a2d557c6046d3424e61b1d8506dcbc37d6cb6be03a44fe5510044e894a4',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Actions/GetInventoryMetricsAction.php' => 
  array (
    'fileHash' => 'baef4d55c336ea7b4933b18e055a8e064dac0b040b62f867da7ee39d85c73d02',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Controllers/ReportingController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Actions/GetReportingSummaryAction.php' => 
  array (
    'fileHash' => 'ef134a08c8b0733cb5273bf2ba7222fba7882425ed09c860245e1f98443ce46b',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Controllers/ReportingController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php' => 
  array (
    'fileHash' => '82bb0e6f11e92de13378094be6b889852e6d5ba8c93d639101a980f7091c470b',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Controllers/ReportingController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Database/Migrations/2026_04_28_000500_create_inventory_metrics_table.php' => 
  array (
    'fileHash' => '504bdc1246c53372f2315be586565c79cdb5e586c6594e0407433545e51b35df',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Controllers/ReportingController.php' => 
  array (
    'fileHash' => '9e412283d8ef85c720575d0cb87fc424ed148ebf71034823987c81aa58577364',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/routes.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Resources/InventoryMetricResource.php' => 
  array (
    'fileHash' => 'bdc4e36fc28284cc9fdf2a322726477856d13cb00753d22670fd5e0bb5e04c8c',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Controllers/ReportingController.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Infrastructure/Listeners/UpdateInventoryMetricsOnStockAdjusted.php' => 
  array (
    'fileHash' => 'd711b757551907e22f9e66128facc81509304717777c21d8dd1fa174fdfec447',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/ReportingServiceProvider.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Infrastructure/Models/InventoryMetric.php' => 
  array (
    'fileHash' => 'aadfeda1b38647b3321cefe2cb9dc3f49ef95751cb59fb474916514317fda20a',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Actions/GetInventoryMetricsAction.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Actions/GetReportingSummaryAction.php',
      2 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php',
      3 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Controllers/ReportingController.php',
      4 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Infrastructure/Listeners/UpdateInventoryMetricsOnStockAdjusted.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/ReportingServiceProvider.php' => 
  array (
    'fileHash' => 'a72a88a01bf7c68c0d39aab904c283193fba8de1f2db50a0f44581aa2538f284',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/routes.php' => 
  array (
    'fileHash' => '25bffb6349be174d0ee52b743edefadeff2dd383d34a2bb47a1b2656f5d7b73e',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Shared/Http/OpenApi.php' => 
  array (
    'fileHash' => '700a2182080d657632b91ec26881793e64cca0d4d320117db3c6ace582203032',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Shared/Providers/BaseModuleServiceProvider.php' => 
  array (
    'fileHash' => 'dda4fad8de2920e9a3b1b44fbb184fb06168292fa12e77ecd24ba2c352977897',
    'dependentFiles' => 
    array (
      0 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/AuthServiceProvider.php',
      1 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/DispatchServiceProvider.php',
      2 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/InventoryServiceProvider.php',
      3 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/ReceivingServiceProvider.php',
      4 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/ReportingServiceProvider.php',
      5 => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Shared/SharedServiceProvider.php',
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Shared/SharedServiceProvider.php' => 
  array (
    'fileHash' => '71dd0cd1f8cec6b1f26938f5edd2077f4b52c9a93af7118d8306e1564fc76611',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Shared/routes.php' => 
  array (
    'fileHash' => '0f47689a54b62f2fa99240ff0e081920bad20dc3779b24d76f16e7709eecbed3',
    'dependentFiles' => 
    array (
    ),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Providers/AppServiceProvider.php' => 
  array (
    'fileHash' => '53ea3f5768da07591c987cd86cda2c18ea10091243bd49fcaf8708ca6cdec827',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Http/Controllers/Controller.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Controllers\\Controller',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Http/Middleware/EnsureUserHasRole.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Http\\Middleware\\EnsureUserHasRole',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'roles',
               'type' => 'string',
               'byRef' => false,
               'variadic' => true,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Models/User.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Models\\User',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Foundation\\Auth\\User',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Laravel\\Sanctum\\HasApiTokens',
        1 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
        2 => 'Illuminate\\Notifications\\Notifiable',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'casts',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */',
             'namespace' => 'App\\Models',
             'uses' => 
            array (
              'userfactory' => 'Database\\Factories\\UserFactory',
              'fillable' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
              'hidden' => 'Illuminate\\Database\\Eloquent\\Attributes\\Hidden',
              'hasfactory' => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
              'belongstomany' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
              'authenticatable' => 'Illuminate\\Foundation\\Auth\\User',
              'notifiable' => 'Illuminate\\Notifications\\Notifiable',
              'hasapitokens' => 'Laravel\\Sanctum\\HasApiTokens',
              'role' => 'Modules\\Auth\\Infrastructure\\Models\\Role',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'roles',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Database\\Eloquent\\Attributes\\Fillable',
           'args' => 
          array (
            0 => '[\'name\', \'email\', \'password\']',
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'Illuminate\\Database\\Eloquent\\Attributes\\Hidden',
           'args' => 
          array (
            0 => '[\'password\', \'remember_token\']',
          ),
        )),
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Application/Actions/GetAuthenticatedUserAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Auth\\Application\\Actions\\GetAuthenticatedUserAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'App\\Models\\User',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Application/Actions/LoginAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Auth\\Application\\Actions\\LoginAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array{token:string,user:User}
     */',
             'namespace' => 'Modules\\Auth\\Application\\Actions',
             'uses' => 
            array (
              'user' => 'App\\Models\\User',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'logindata' => 'Modules\\Auth\\Application\\DTOs\\LoginData',
              'unauthorizedhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\UnauthorizedHttpException',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'Modules\\Auth\\Application\\DTOs\\LoginData',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Application/Actions/LogoutAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Auth\\Application\\Actions\\LogoutAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => 'App\\Models\\User',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Application/DTOs/LoginData.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Auth\\Application\\DTOs\\LoginData',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'email',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'password',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'deviceName',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/AuthServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Auth\\AuthServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Shared\\Providers\\BaseModuleServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'moduleName',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Database/Seeders/AuthRolesSeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Auth\\Database\\Seeders\\AuthRolesSeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Controllers/AuthController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Auth\\Http\\Controllers\\AuthController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'login',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Modules\\Auth\\Http\\Requests\\LoginRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'Modules\\Auth\\Application\\Actions\\LoginAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Post',
               'args' => 
              array (
                'path' => '\'/api/v1/auth/login\'',
                'tags' => '[\'Auth\']',
                'summary' => '\'Iniciar sesión con credenciales\'',
                'requestBody' => 'new \\OpenApi\\Attributes\\RequestBody(required: true, content: new \\OpenApi\\Attributes\\JsonContent(required: [\'email\', \'password\', \'device_name\'], properties: [new \\OpenApi\\Attributes\\Property(property: \'email\', type: \'string\', format: \'email\'), new \\OpenApi\\Attributes\\Property(property: \'password\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'device_name\', type: \'string\')]))',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Autenticación exitosa\'), new \\OpenApi\\Attributes\\Response(response: 401, description: \'Credenciales inválidas\')]',
              ),
            )),
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'logout',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'Modules\\Auth\\Application\\Actions\\LogoutAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Post',
               'args' => 
              array (
                'path' => '\'/api/v1/auth/logout\'',
                'tags' => '[\'Auth\']',
                'security' => '[[\'bearerAuth\' => []]]',
                'summary' => '\'Cerrar sesión y revocar token actual\'',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Sesión cerrada\')]',
              ),
            )),
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'me',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'Modules\\Auth\\Application\\Actions\\GetAuthenticatedUserAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Get',
               'args' => 
              array (
                'path' => '\'/api/v1/auth/me\'',
                'tags' => '[\'Auth\']',
                'security' => '[[\'bearerAuth\' => []]]',
                'summary' => '\'Obtiene el usuario autenticado\'',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Usuario autenticado\')]',
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Requests/LoginRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Auth\\Http\\Requests\\LoginRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, array<int, string>>
     */',
             'namespace' => 'Modules\\Auth\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Resources/AuthUserResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Auth\\Http\\Resources\\AuthUserResource',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'Modules\\Auth\\Http\\Resources',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Infrastructure/Models/Permission.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Auth\\Infrastructure\\Models\\Permission',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'roles',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Infrastructure/Models/Role.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Auth\\Infrastructure\\Models\\Role',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'permissions',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'users',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsToMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/ConfirmDispatchAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Dispatch\\Application\\Actions\\ConfirmDispatchAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Modules\\Dispatch\\Infrastructure\\Models\\DispatchOrder',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'dispatchOrderId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/CreateDispatchOrderAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Dispatch\\Application\\Actions\\CreateDispatchOrderAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Modules\\Dispatch\\Infrastructure\\Models\\DispatchOrder',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'Modules\\Dispatch\\Application\\DTOs\\CreateDispatchOrderData',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/Actions/PickStockUsingFEFOAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Dispatch\\Application\\Actions\\PickStockUsingFEFOAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Modules\\Dispatch\\Infrastructure\\Models\\DispatchOrder',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'dispatchOrderId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Application/DTOs/CreateDispatchOrderData.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Dispatch\\Application\\DTOs\\CreateDispatchOrderData',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'orderReference',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'productId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'quantity',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/DispatchServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Dispatch\\DispatchServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Shared\\Providers\\BaseModuleServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'moduleName',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Domain/Events/DispatchConfirmed.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Dispatch\\Domain\\Events\\DispatchConfirmed',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'dispatchOrderId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'productId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'quantity',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Controllers/DispatchController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Dispatch\\Http\\Controllers\\DispatchController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'createOrder',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Modules\\Dispatch\\Http\\Requests\\CreateDispatchOrderRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'Modules\\Dispatch\\Application\\Actions\\CreateDispatchOrderAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Post',
               'args' => 
              array (
                'path' => '\'/api/v1/dispatch/orders\'',
                'tags' => '[\'Dispatch\']',
                'summary' => '\'Crea orden de despacho\'',
                'requestBody' => 'new \\OpenApi\\Attributes\\RequestBody(required: true, content: new \\OpenApi\\Attributes\\JsonContent(required: [\'order_reference\', \'product_id\', \'quantity\'], properties: [new \\OpenApi\\Attributes\\Property(property: \'order_reference\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'product_id\', type: \'integer\'), new \\OpenApi\\Attributes\\Property(property: \'quantity\', type: \'integer\', minimum: 1)]))',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 201, description: \'Orden creada\')]',
              ),
            )),
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'pickFefo',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'dispatchOrderId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'Modules\\Dispatch\\Application\\Actions\\PickStockUsingFEFOAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Post',
               'args' => 
              array (
                'path' => '\'/api/v1/dispatch/orders/{dispatchOrderId}/pick-fefo\'',
                'tags' => '[\'Dispatch\']',
                'summary' => '\'Ejecuta picking FEFO\'',
                'parameters' => '[new \\OpenApi\\Attributes\\Parameter(name: \'dispatchOrderId\', in: \'path\', required: true, schema: new \\OpenApi\\Attributes\\Schema(type: \'integer\'))]',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Picking realizado\')]',
              ),
            )),
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'confirm',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'dispatchOrderId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'Modules\\Dispatch\\Application\\Actions\\ConfirmDispatchAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Post',
               'args' => 
              array (
                'path' => '\'/api/v1/dispatch/orders/{dispatchOrderId}/confirm\'',
                'tags' => '[\'Dispatch\']',
                'summary' => '\'Confirma despacho y descuenta inventario\'',
                'parameters' => '[new \\OpenApi\\Attributes\\Parameter(name: \'dispatchOrderId\', in: \'path\', required: true, schema: new \\OpenApi\\Attributes\\Schema(type: \'integer\'))]',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Despacho confirmado\')]',
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Requests/CreateDispatchOrderRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Dispatch\\Http\\Requests\\CreateDispatchOrderRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Resources/DispatchOrderResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Dispatch\\Http\\Resources\\DispatchOrderResource',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Infrastructure/Models/DispatchOrder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Dispatch\\Infrastructure\\Models\\DispatchOrder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'picks',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Infrastructure/Models/DispatchPick.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Dispatch\\Infrastructure\\Models\\DispatchPick',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'order',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/AdjustStockAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Application\\Actions\\AdjustStockAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'repository',
               'type' => 'Modules\\Inventory\\Infrastructure\\Repositories\\EloquentProductRepository',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 68,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'Modules\\Inventory\\Application\\DTOs\\AdjustStockData',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/GetProductStockAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Application\\Actions\\GetProductStockAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'repository',
               'type' => 'Modules\\Inventory\\Infrastructure\\Repositories\\EloquentProductRepository',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 68,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'productId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/ListProductsBelowReorderPointAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Application\\Actions\\ListProductsBelowReorderPointAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'repository',
               'type' => 'Modules\\Inventory\\Infrastructure\\Repositories\\EloquentProductRepository',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 68,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Support\\Collection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/Actions/RegisterProductAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Application\\Actions\\RegisterProductAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'repository',
               'type' => 'Modules\\Inventory\\Infrastructure\\Repositories\\EloquentProductRepository',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 68,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'Modules\\Inventory\\Application\\DTOs\\RegisterProductData',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/DTOs/AdjustStockData.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Application\\DTOs\\AdjustStockData',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'productId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'quantity',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'operation',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'reason',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Application/DTOs/RegisterProductData.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Application\\DTOs\\RegisterProductData',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sku',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'reorderPoint',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Database/Factories/ProductFactory.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Database\\Factories\\ProductFactory',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @extends Factory<Product>
 */',
         'namespace' => 'Modules\\Inventory\\Database\\Factories',
         'uses' => 
        array (
          'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
          'product' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'model',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'definition',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'Modules\\Inventory\\Database\\Factories',
             'uses' => 
            array (
              'factory' => 'Illuminate\\Database\\Eloquent\\Factories\\Factory',
              'product' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Database/Seeders/InventorySeeder.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Database\\Seeders\\InventorySeeder',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Seeder',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'run',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Entities/Location.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Domain\\Entities\\Location',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Entities/Lot.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Domain\\Entities\\Lot',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'lotNumber',
               'type' => 'Modules\\Inventory\\Domain\\ValueObjects\\LotNumber',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'expiresAt',
               'type' => 'Carbon\\CarbonImmutable',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'quantity',
               'type' => 'Modules\\Inventory\\Domain\\ValueObjects\\Quantity',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Entities/Product.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Domain\\Entities\\Product',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sku',
               'type' => 'Modules\\Inventory\\Domain\\ValueObjects\\Sku',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'reorderPoint',
               'type' => 'Modules\\Inventory\\Domain\\ValueObjects\\ReorderPoint',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Entities/StockLevel.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Domain\\Entities\\StockLevel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'quantity',
               'type' => 'Modules\\Inventory\\Domain\\ValueObjects\\Quantity',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 4,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'increase',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'quantity',
               'type' => 'Modules\\Inventory\\Domain\\ValueObjects\\Quantity',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'decrease',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'quantity',
               'type' => 'Modules\\Inventory\\Domain\\ValueObjects\\Quantity',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'quantity',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Modules\\Inventory\\Domain\\ValueObjects\\Quantity',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Events/ProductRegistered.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Domain\\Events\\ProductRegistered',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'productId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sku',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Events/ReorderPointReached.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Domain\\Events\\ReorderPointReached',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'productId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'currentQuantity',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'reorderPoint',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/Events/StockAdjusted.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Domain\\Events\\StockAdjusted',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'productId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'newQuantity',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'reason',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/ValueObjects/LotNumber.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Domain\\ValueObjects\\LotNumber',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/ValueObjects/Quantity.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Domain\\ValueObjects\\Quantity',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/ValueObjects/ReorderPoint.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Domain\\ValueObjects\\ReorderPoint',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Domain/ValueObjects/Sku.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Domain\\ValueObjects\\Sku',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Controllers/InventoryController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Http\\Controllers\\InventoryController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'repository',
               'type' => 'Modules\\Inventory\\Infrastructure\\Repositories\\EloquentProductRepository',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Get',
               'args' => 
              array (
                'path' => '\'/api/v1/inventory/products\'',
                'tags' => '[\'Inventory\']',
                'summary' => '\'Lista productos con paginación por cursor\'',
                'parameters' => '[new \\OpenApi\\Attributes\\Parameter(name: \'per_page\', in: \'query\', schema: new \\OpenApi\\Attributes\\Schema(type: \'integer\', minimum: 1, maximum: 100))]',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Listado de productos\')]',
              ),
            )),
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Modules\\Inventory\\Http\\Requests\\RegisterProductRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'Modules\\Inventory\\Application\\Actions\\RegisterProductAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Post',
               'args' => 
              array (
                'path' => '\'/api/v1/inventory/products\'',
                'tags' => '[\'Inventory\']',
                'summary' => '\'Registra un producto\'',
                'requestBody' => 'new \\OpenApi\\Attributes\\RequestBody(required: true, content: new \\OpenApi\\Attributes\\JsonContent(required: [\'name\', \'sku\', \'reorder_point\'], properties: [new \\OpenApi\\Attributes\\Property(property: \'name\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'sku\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'reorder_point\', type: \'integer\', minimum: 0)]))',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 201, description: \'Producto registrado\')]',
              ),
            )),
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'productId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'Modules\\Inventory\\Application\\Actions\\GetProductStockAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Get',
               'args' => 
              array (
                'path' => '\'/api/v1/inventory/products/{productId}\'',
                'tags' => '[\'Inventory\']',
                'summary' => '\'Consulta stock de producto\'',
                'parameters' => '[new \\OpenApi\\Attributes\\Parameter(name: \'productId\', in: \'path\', required: true, schema: new \\OpenApi\\Attributes\\Schema(type: \'integer\'))]',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Detalle de producto\')]',
              ),
            )),
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'adjustStock',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'productId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Modules\\Inventory\\Http\\Requests\\AdjustStockRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'Modules\\Inventory\\Application\\Actions\\AdjustStockAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Patch',
               'args' => 
              array (
                'path' => '\'/api/v1/inventory/products/{productId}/stock\'',
                'tags' => '[\'Inventory\']',
                'summary' => '\'Ajusta stock de un producto\'',
                'parameters' => '[new \\OpenApi\\Attributes\\Parameter(name: \'productId\', in: \'path\', required: true, schema: new \\OpenApi\\Attributes\\Schema(type: \'integer\'))]',
                'requestBody' => 'new \\OpenApi\\Attributes\\RequestBody(required: true, content: new \\OpenApi\\Attributes\\JsonContent(required: [\'quantity\', \'operation\', \'reason\'], properties: [new \\OpenApi\\Attributes\\Property(property: \'quantity\', type: \'integer\', minimum: 1), new \\OpenApi\\Attributes\\Property(property: \'operation\', type: \'string\', enum: [\'add\', \'subtract\']), new \\OpenApi\\Attributes\\Property(property: \'reason\', type: \'string\')]))',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Stock ajustado\')]',
              ),
            )),
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'belowReorderPoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'Modules\\Inventory\\Application\\Actions\\ListProductsBelowReorderPointAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Get',
               'args' => 
              array (
                'path' => '\'/api/v1/inventory/products/below-reorder-point\'',
                'tags' => '[\'Inventory\']',
                'summary' => '\'Lista productos bajo punto de reorden\'',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Listado filtrado\')]',
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Requests/AdjustStockRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Http\\Requests\\AdjustStockRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, array<int, string|In>>
     */',
             'namespace' => 'Modules\\Inventory\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
              'rule' => 'Illuminate\\Validation\\Rule',
              'in' => 'Illuminate\\Validation\\Rules\\In',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Requests/RegisterProductRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Http\\Requests\\RegisterProductRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, array<int, string>>
     */',
             'namespace' => 'Modules\\Inventory\\Http\\Requests',
             'uses' => 
            array (
              'formrequest' => 'Illuminate\\Foundation\\Http\\FormRequest',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Resources/ProductResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Http\\Resources\\ProductResource',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, mixed>
     */',
             'namespace' => 'Modules\\Inventory\\Http\\Resources',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'jsonresource' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Listeners/SyncInventoryOnMerchandiseReceived.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Infrastructure\\Listeners\\SyncInventoryOnMerchandiseReceived',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'event',
               'type' => 'Modules\\Receiving\\Domain\\Events\\MerchandiseReceived',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Location.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Infrastructure\\Models\\Location',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'lots',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Lot.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Infrastructure\\Models\\Lot',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'product',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'location',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Product.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
        0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'lots',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'stockLevel',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'newFactory',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'Modules\\Inventory\\Database\\Factories\\ProductFactory',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/StockLevel.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Infrastructure\\Models\\StockLevel',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'product',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Repositories/EloquentProductRepository.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\Infrastructure\\Repositories\\EloquentProductRepository',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'create',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'sku',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'reorderPoint',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'findOrFail',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'productId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'save',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'product',
               'type' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'cursorPaginate',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'perPage',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'belowReorderPoint',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Support\\Collection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/InventoryServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Inventory\\InventoryServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Shared\\Providers\\BaseModuleServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'moduleName',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/LinkLotToReceiptAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Receiving\\Application\\Actions\\LinkLotToReceiptAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Modules\\Receiving\\Infrastructure\\Models\\ReceiptLotLink',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'Modules\\Receiving\\Application\\DTOs\\LinkLotToReceiptData',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/Actions/RegisterReceiptAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Receiving\\Application\\Actions\\RegisterReceiptAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Modules\\Receiving\\Infrastructure\\Models\\Receipt',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'Modules\\Receiving\\Application\\DTOs\\RegisterReceiptData',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/DTOs/LinkLotToReceiptData.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Receiving\\Application\\DTOs\\LinkLotToReceiptData',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'receiptId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'productId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'lotNumber',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'expiresAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'quantity',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'locationId',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Application/DTOs/RegisterReceiptData.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Receiving\\Application\\DTOs\\RegisterReceiptData',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'supplierReference',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'receivedAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'notes',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Domain/Events/MerchandiseReceived.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Receiving\\Domain\\Events\\MerchandiseReceived',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'receiptId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'productId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'lotNumber',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'expiresAt',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            4 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'quantity',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
            5 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'locationId',
               'type' => '?int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 1,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Controllers/ReceivingController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Receiving\\Http\\Controllers\\ReceivingController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'registerReceipt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Modules\\Receiving\\Http\\Requests\\RegisterReceiptRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'Modules\\Receiving\\Application\\Actions\\RegisterReceiptAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Post',
               'args' => 
              array (
                'path' => '\'/api/v1/receiving/receipts\'',
                'tags' => '[\'Receiving\']',
                'summary' => '\'Registra una recepción\'',
                'requestBody' => 'new \\OpenApi\\Attributes\\RequestBody(required: true, content: new \\OpenApi\\Attributes\\JsonContent(required: [\'supplier_reference\', \'received_at\'], properties: [new \\OpenApi\\Attributes\\Property(property: \'supplier_reference\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'received_at\', type: \'string\', format: \'date-time\'), new \\OpenApi\\Attributes\\Property(property: \'notes\', type: \'string\')]))',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 201, description: \'Recepción creada\')]',
              ),
            )),
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'linkLotToReceipt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'receiptId',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Modules\\Receiving\\Http\\Requests\\LinkLotToReceiptRequest',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'Modules\\Receiving\\Application\\Actions\\LinkLotToReceiptAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Post',
               'args' => 
              array (
                'path' => '\'/api/v1/receiving/receipts/{receiptId}/lots\'',
                'tags' => '[\'Receiving\']',
                'summary' => '\'Asocia lote a recepción\'',
                'parameters' => '[new \\OpenApi\\Attributes\\Parameter(name: \'receiptId\', in: \'path\', required: true, schema: new \\OpenApi\\Attributes\\Schema(type: \'integer\'))]',
                'requestBody' => 'new \\OpenApi\\Attributes\\RequestBody(required: true, content: new \\OpenApi\\Attributes\\JsonContent(required: [\'product_id\', \'lot_number\', \'expires_at\', \'quantity\'], properties: [new \\OpenApi\\Attributes\\Property(property: \'product_id\', type: \'integer\'), new \\OpenApi\\Attributes\\Property(property: \'lot_number\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'expires_at\', type: \'string\', format: \'date\'), new \\OpenApi\\Attributes\\Property(property: \'quantity\', type: \'integer\'), new \\OpenApi\\Attributes\\Property(property: \'location_id\', type: \'integer\')]))',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 201, description: \'Lote asociado y mercancía recibida\')]',
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Requests/LinkLotToReceiptRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Receiving\\Http\\Requests\\LinkLotToReceiptRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Requests/RegisterReceiptRequest.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Receiving\\Http\\Requests\\RegisterReceiptRequest',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Foundation\\Http\\FormRequest',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authorize',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'rules',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptLotLinkResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Receiving\\Http\\Resources\\ReceiptLotLinkResource',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Resources/ReceiptResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Receiving\\Http\\Resources\\ReceiptResource',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Infrastructure/Models/Receipt.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Receiving\\Infrastructure\\Models\\Receipt',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'lots',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Infrastructure/Models/ReceiptLotLink.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Receiving\\Infrastructure\\Models\\ReceiptLotLink',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'receipt',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/ReceivingServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Receiving\\ReceivingServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Shared\\Providers\\BaseModuleServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'moduleName',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Actions/GetInventoryMetricsAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Reporting\\Application\\Actions\\GetInventoryMetricsAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Support\\Collection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Actions/GetReportingSummaryAction.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Reporting\\Application\\Actions\\GetReportingSummaryAction',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__invoke',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * @return array<string, float|int>
     */',
             'namespace' => 'Modules\\Reporting\\Application\\Actions',
             'uses' => 
            array (
              'location' => 'Modules\\Inventory\\Infrastructure\\Models\\Location',
              'stocklevel' => 'Modules\\Inventory\\Infrastructure\\Models\\StockLevel',
              'inventorymetric' => 'Modules\\Reporting\\Infrastructure\\Models\\InventoryMetric',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Application/Exports/InventoryMetricsExport.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Reporting\\Application\\Exports\\InventoryMetricsExport',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'Maatwebsite\\Excel\\Concerns\\FromCollection',
        1 => 'Maatwebsite\\Excel\\Concerns\\WithHeadings',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'collection',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Support\\Collection',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'headings',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Controllers/ReportingController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Reporting\\Http\\Controllers\\ReportingController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'inventoryMetrics',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'Modules\\Reporting\\Application\\Actions\\GetInventoryMetricsAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Get',
               'args' => 
              array (
                'path' => '\'/api/v1/reporting/inventory-metrics\'',
                'tags' => '[\'Reporting\']',
                'summary' => '\'Obtiene tabla materializada de métricas de inventario\'',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Métricas de inventario\')]',
              ),
            )),
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'summary',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'action',
               'type' => 'Modules\\Reporting\\Application\\Actions\\GetReportingSummaryAction',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Get',
               'args' => 
              array (
                'path' => '\'/api/v1/reporting/summary\'',
                'tags' => '[\'Reporting\']',
                'summary' => '\'Obtiene indicadores agregados de reporting\'',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Resumen de indicadores\')]',
              ),
            )),
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'exportMetricsPdf',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Get',
               'args' => 
              array (
                'path' => '\'/api/v1/reporting/inventory-metrics/export/pdf\'',
                'tags' => '[\'Reporting\']',
                'summary' => '\'Exporta métricas de inventario en PDF\'',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Archivo PDF\')]',
              ),
            )),
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'exportMetricsExcel',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
               'name' => 'OpenApi\\Attributes\\Get',
               'args' => 
              array (
                'path' => '\'/api/v1/reporting/inventory-metrics/export/excel\'',
                'tags' => '[\'Reporting\']',
                'summary' => '\'Exporta métricas de inventario en Excel\'',
                'responses' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Archivo XLSX\')]',
              ),
            )),
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Resources/InventoryMetricResource.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Reporting\\Http\\Resources\\InventoryMetricResource',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Http\\Resources\\Json\\JsonResource',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toArray',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Infrastructure/Listeners/UpdateInventoryMetricsOnStockAdjusted.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Reporting\\Infrastructure\\Listeners\\UpdateInventoryMetricsOnStockAdjusted',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'event',
               'type' => 'Modules\\Inventory\\Domain\\Events\\StockAdjusted',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Infrastructure/Models/InventoryMetric.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Reporting\\Infrastructure\\Models\\InventoryMetric',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => NULL,
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/ReportingServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Reporting\\ReportingServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Shared\\Providers\\BaseModuleServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'moduleName',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Shared/Http/OpenApi.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Shared\\Http\\OpenApi',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
      ),
       'attributes' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Info',
           'args' => 
          array (
            'version' => '\'1.0.0\'',
            'title' => '\'Stockflow API\'',
            'description' => '\'API REST para inventario y logística de centros de distribución\'',
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\Server',
           'args' => 
          array (
            'url' => 'L5_SWAGGER_CONST_HOST',
            'description' => '\'Servidor principal\'',
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedAttributeNode::__set_state(array(
           'name' => 'OpenApi\\Attributes\\SecurityScheme',
           'args' => 
          array (
            'securityScheme' => '\'bearerAuth\'',
            'type' => '\'http\'',
            'scheme' => '\'bearer\'',
            'bearerFormat' => '\'Token\'',
          ),
        )),
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Shared/Providers/BaseModuleServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Shared\\Providers\\BaseModuleServiceProvider',
       'phpDoc' => NULL,
       'abstract' => true,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'moduleName',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'modulePath',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'path',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
               'phpDoc' => NULL,
               'flags' => 0,
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'loadModuleRoutes',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'loadModuleMigrations',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Shared/SharedServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Modules\\Shared\\SharedServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Modules\\Shared\\Providers\\BaseModuleServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'moduleName',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Providers/AppServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'App\\Providers\\AppServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     */',
             'namespace' => 'App\\Providers',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
