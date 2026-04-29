<?php declare(strict_types = 1);

// odsl-/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Lot.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\Inventory\Infrastructure\Models\Lot
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.0-8.3.30-7fb8ae1912f0e3cbc86dea96d0fa1bc39cf0d8dd14466a9cbe252b58193725a0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Modules\\Inventory\\Infrastructure\\Models\\Lot',
        'filename' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Lot.php',
      ),
    ),
    'namespace' => 'Modules\\Inventory\\Infrastructure\\Models',
    'name' => 'Modules\\Inventory\\Infrastructure\\Models\\Lot',
    'shortName' => 'Lot',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 35,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'table' => 
      array (
        'declaringClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Lot',
        'implementingClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Lot',
        'name' => 'table',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'inventory_lots\'',
          'attributes' => 
          array (
            'startLine' => 12,
            'endLine' => 12,
            'startTokenPos' => 43,
            'startFilePos' => 235,
            'endTokenPos' => 43,
            'endFilePos' => 250,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 12,
        'endLine' => 12,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'fillable' => 
      array (
        'declaringClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Lot',
        'implementingClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Lot',
        'name' => 'fillable',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'product_id\', \'location_id\', \'lot_number\', \'expires_at\', \'quantity\']',
          'attributes' => 
          array (
            'startLine' => 14,
            'endLine' => 20,
            'startTokenPos' => 52,
            'startFilePos' => 280,
            'endTokenPos' => 69,
            'endFilePos' => 395,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 14,
        'endLine' => 20,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'casts' => 
      array (
        'declaringClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Lot',
        'implementingClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Lot',
        'name' => 'casts',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'expires_at\' => \'date\']',
          'attributes' => 
          array (
            'startLine' => 22,
            'endLine' => 24,
            'startTokenPos' => 78,
            'startFilePos' => 422,
            'endTokenPos' => 87,
            'endFilePos' => 460,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 22,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      'product' => 
      array (
        'name' => 'product',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 26,
        'endLine' => 29,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Inventory\\Infrastructure\\Models',
        'declaringClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Lot',
        'implementingClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Lot',
        'currentClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Lot',
        'aliasName' => NULL,
      ),
      'location' => 
      array (
        'name' => 'location',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 31,
        'endLine' => 34,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Inventory\\Infrastructure\\Models',
        'declaringClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Lot',
        'implementingClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Lot',
        'currentClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Lot',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));