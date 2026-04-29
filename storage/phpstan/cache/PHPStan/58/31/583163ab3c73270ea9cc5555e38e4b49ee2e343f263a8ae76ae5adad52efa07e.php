<?php declare(strict_types = 1);

// odsl-/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Product.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\Inventory\Infrastructure\Models\Product
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.0-8.3.30-3cb769f62112ff1bdbd85020c38ae2a2206e2b66a01e5c511f220ace7ae47fc4',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
        'filename' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Infrastructure/Models/Product.php',
      ),
    ),
    'namespace' => 'Modules\\Inventory\\Infrastructure\\Models',
    'name' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
    'shortName' => 'Product',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 13,
    'endLine' => 39,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'table' => 
      array (
        'declaringClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
        'implementingClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
        'name' => 'table',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'inventory_products\'',
          'attributes' => 
          array (
            'startLine' => 17,
            'endLine' => 17,
            'startTokenPos' => 63,
            'startFilePos' => 421,
            'endTokenPos' => 63,
            'endFilePos' => 440,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 44,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'fillable' => 
      array (
        'declaringClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
        'implementingClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
        'name' => 'fillable',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'name\', \'sku\', \'reorder_point\']',
          'attributes' => 
          array (
            'startLine' => 19,
            'endLine' => 23,
            'startTokenPos' => 72,
            'startFilePos' => 470,
            'endTokenPos' => 83,
            'endFilePos' => 532,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 19,
        'endLine' => 23,
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
      'lots' => 
      array (
        'name' => 'lots',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 25,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Inventory\\Infrastructure\\Models',
        'declaringClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
        'implementingClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
        'currentClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
        'aliasName' => NULL,
      ),
      'stockLevel' => 
      array (
        'name' => 'stockLevel',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\HasOne',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 30,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Inventory\\Infrastructure\\Models',
        'declaringClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
        'implementingClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
        'currentClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
        'aliasName' => NULL,
      ),
      'newFactory' => 
      array (
        'name' => 'newFactory',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Modules\\Inventory\\Database\\Factories\\ProductFactory',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 35,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 18,
        'namespace' => 'Modules\\Inventory\\Infrastructure\\Models',
        'declaringClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
        'implementingClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
        'currentClassName' => 'Modules\\Inventory\\Infrastructure\\Models\\Product',
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