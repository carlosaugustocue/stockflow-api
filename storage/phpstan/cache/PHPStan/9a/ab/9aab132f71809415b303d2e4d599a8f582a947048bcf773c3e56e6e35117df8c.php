<?php declare(strict_types = 1);

// odsl-/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Controllers/InventoryController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\Inventory\Http\Controllers\InventoryController
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.0-8.3.30-9f4d36d2e34b08291e9f761f6986663120ff36ecd590e60e2f79b9d0e5d71acf',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Modules\\Inventory\\Http\\Controllers\\InventoryController',
        'filename' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Inventory/Http/Controllers/InventoryController.php',
      ),
    ),
    'namespace' => 'Modules\\Inventory\\Http\\Controllers',
    'name' => 'Modules\\Inventory\\Http\\Controllers\\InventoryController',
    'shortName' => 'InventoryController',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 22,
    'endLine' => 145,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Routing\\Controller',
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
    ),
    'immediateMethods' => 
    array (
      'index' => 
      array (
        'name' => 'index',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Http\\Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 33,
            'endLine' => 33,
            'startColumn' => 27,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'repository' => 
          array (
            'name' => 'repository',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Modules\\Inventory\\Infrastructure\\Repositories\\EloquentProductRepository',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 33,
            'endLine' => 33,
            'startColumn' => 45,
            'endColumn' => 81,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Http\\JsonResponse',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'OpenApi\\Attributes\\Get',
            'isRepeated' => false,
            'arguments' => 
            array (
              'path' => 
              array (
                'code' => '\'/api/v1/inventory/products\'',
                'attributes' => 
                array (
                  'startLine' => 25,
                  'endLine' => 25,
                  'startTokenPos' => 108,
                  'startFilePos' => 923,
                  'endTokenPos' => 108,
                  'endFilePos' => 950,
                ),
              ),
              'tags' => 
              array (
                'code' => '[\'Inventory\']',
                'attributes' => 
                array (
                  'startLine' => 26,
                  'endLine' => 26,
                  'startTokenPos' => 114,
                  'startFilePos' => 967,
                  'endTokenPos' => 116,
                  'endFilePos' => 979,
                ),
              ),
              'summary' => 
              array (
                'code' => '\'Lista productos con paginación por cursor\'',
                'attributes' => 
                array (
                  'startLine' => 27,
                  'endLine' => 27,
                  'startTokenPos' => 122,
                  'startFilePos' => 999,
                  'endTokenPos' => 122,
                  'endFilePos' => 1042,
                ),
              ),
              'parameters' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Parameter(name: \'per_page\', in: \'query\', schema: new \\OpenApi\\Attributes\\Schema(type: \'integer\', minimum: 1, maximum: 100))]',
                'attributes' => 
                array (
                  'startLine' => 28,
                  'endLine' => 30,
                  'startTokenPos' => 128,
                  'startFilePos' => 1065,
                  'endTokenPos' => 173,
                  'endFilePos' => 1202,
                ),
              ),
              'responses' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Listado de productos\')]',
                'attributes' => 
                array (
                  'startLine' => 31,
                  'endLine' => 31,
                  'startTokenPos' => 179,
                  'startFilePos' => 1224,
                  'endTokenPos' => 195,
                  'endFilePos' => 1292,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 24,
        'endLine' => 45,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Inventory\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Inventory\\Http\\Controllers\\InventoryController',
        'implementingClassName' => 'Modules\\Inventory\\Http\\Controllers\\InventoryController',
        'currentClassName' => 'Modules\\Inventory\\Http\\Controllers\\InventoryController',
        'aliasName' => NULL,
      ),
      'store' => 
      array (
        'name' => 'store',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Modules\\Inventory\\Http\\Requests\\RegisterProductRequest',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 64,
            'endLine' => 64,
            'startColumn' => 27,
            'endColumn' => 57,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'action' => 
          array (
            'name' => 'action',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Modules\\Inventory\\Application\\Actions\\RegisterProductAction',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 64,
            'endLine' => 64,
            'startColumn' => 60,
            'endColumn' => 88,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Http\\JsonResponse',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'OpenApi\\Attributes\\Post',
            'isRepeated' => false,
            'arguments' => 
            array (
              'path' => 
              array (
                'code' => '\'/api/v1/inventory/products\'',
                'attributes' => 
                array (
                  'startLine' => 48,
                  'endLine' => 48,
                  'startTokenPos' => 341,
                  'startFilePos' => 1877,
                  'endTokenPos' => 341,
                  'endFilePos' => 1904,
                ),
              ),
              'tags' => 
              array (
                'code' => '[\'Inventory\']',
                'attributes' => 
                array (
                  'startLine' => 49,
                  'endLine' => 49,
                  'startTokenPos' => 347,
                  'startFilePos' => 1921,
                  'endTokenPos' => 349,
                  'endFilePos' => 1933,
                ),
              ),
              'summary' => 
              array (
                'code' => '\'Registra un producto\'',
                'attributes' => 
                array (
                  'startLine' => 50,
                  'endLine' => 50,
                  'startTokenPos' => 355,
                  'startFilePos' => 1953,
                  'endTokenPos' => 355,
                  'endFilePos' => 1974,
                ),
              ),
              'requestBody' => 
              array (
                'code' => 'new \\OpenApi\\Attributes\\RequestBody(required: true, content: new \\OpenApi\\Attributes\\JsonContent(required: [\'name\', \'sku\', \'reorder_point\'], properties: [new \\OpenApi\\Attributes\\Property(property: \'name\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'sku\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'reorder_point\', type: \'integer\', minimum: 0)]))',
                'attributes' => 
                array (
                  'startLine' => 51,
                  'endLine' => 61,
                  'startTokenPos' => 361,
                  'startFilePos' => 1998,
                  'endTokenPos' => 462,
                  'endFilePos' => 2453,
                ),
              ),
              'responses' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Response(response: 201, description: \'Producto registrado\')]',
                'attributes' => 
                array (
                  'startLine' => 62,
                  'endLine' => 62,
                  'startTokenPos' => 468,
                  'startFilePos' => 2475,
                  'endTokenPos' => 484,
                  'endFilePos' => 2542,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 47,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Inventory\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Inventory\\Http\\Controllers\\InventoryController',
        'implementingClassName' => 'Modules\\Inventory\\Http\\Controllers\\InventoryController',
        'currentClassName' => 'Modules\\Inventory\\Http\\Controllers\\InventoryController',
        'aliasName' => NULL,
      ),
      'show' => 
      array (
        'name' => 'show',
        'parameters' => 
        array (
          'productId' => 
          array (
            'name' => 'productId',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 87,
            'endLine' => 87,
            'startColumn' => 26,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'action' => 
          array (
            'name' => 'action',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Modules\\Inventory\\Application\\Actions\\GetProductStockAction',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 87,
            'endLine' => 87,
            'startColumn' => 42,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Http\\JsonResponse',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'OpenApi\\Attributes\\Get',
            'isRepeated' => false,
            'arguments' => 
            array (
              'path' => 
              array (
                'code' => '\'/api/v1/inventory/products/{productId}\'',
                'attributes' => 
                array (
                  'startLine' => 79,
                  'endLine' => 79,
                  'startTokenPos' => 617,
                  'startFilePos' => 3121,
                  'endTokenPos' => 617,
                  'endFilePos' => 3160,
                ),
              ),
              'tags' => 
              array (
                'code' => '[\'Inventory\']',
                'attributes' => 
                array (
                  'startLine' => 80,
                  'endLine' => 80,
                  'startTokenPos' => 623,
                  'startFilePos' => 3177,
                  'endTokenPos' => 625,
                  'endFilePos' => 3189,
                ),
              ),
              'summary' => 
              array (
                'code' => '\'Consulta stock de producto\'',
                'attributes' => 
                array (
                  'startLine' => 81,
                  'endLine' => 81,
                  'startTokenPos' => 631,
                  'startFilePos' => 3209,
                  'endTokenPos' => 631,
                  'endFilePos' => 3236,
                ),
              ),
              'parameters' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Parameter(name: \'productId\', in: \'path\', required: true, schema: new \\OpenApi\\Attributes\\Schema(type: \'integer\'))]',
                'attributes' => 
                array (
                  'startLine' => 82,
                  'endLine' => 84,
                  'startTokenPos' => 637,
                  'startFilePos' => 3259,
                  'endTokenPos' => 676,
                  'endFilePos' => 3386,
                ),
              ),
              'responses' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Detalle de producto\')]',
                'attributes' => 
                array (
                  'startLine' => 85,
                  'endLine' => 85,
                  'startTokenPos' => 682,
                  'startFilePos' => 3408,
                  'endTokenPos' => 698,
                  'endFilePos' => 3475,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 78,
        'endLine' => 95,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Inventory\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Inventory\\Http\\Controllers\\InventoryController',
        'implementingClassName' => 'Modules\\Inventory\\Http\\Controllers\\InventoryController',
        'currentClassName' => 'Modules\\Inventory\\Http\\Controllers\\InventoryController',
        'aliasName' => NULL,
      ),
      'adjustStock' => 
      array (
        'name' => 'adjustStock',
        'parameters' => 
        array (
          'productId' => 
          array (
            'name' => 'productId',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 117,
            'endLine' => 117,
            'startColumn' => 33,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Modules\\Inventory\\Http\\Requests\\AdjustStockRequest',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 117,
            'endLine' => 117,
            'startColumn' => 49,
            'endColumn' => 75,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'action' => 
          array (
            'name' => 'action',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Modules\\Inventory\\Application\\Actions\\AdjustStockAction',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 117,
            'endLine' => 117,
            'startColumn' => 78,
            'endColumn' => 102,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Http\\JsonResponse',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'OpenApi\\Attributes\\Patch',
            'isRepeated' => false,
            'arguments' => 
            array (
              'path' => 
              array (
                'code' => '\'/api/v1/inventory/products/{productId}/stock\'',
                'attributes' => 
                array (
                  'startLine' => 98,
                  'endLine' => 98,
                  'startTokenPos' => 778,
                  'startFilePos' => 3782,
                  'endTokenPos' => 778,
                  'endFilePos' => 3827,
                ),
              ),
              'tags' => 
              array (
                'code' => '[\'Inventory\']',
                'attributes' => 
                array (
                  'startLine' => 99,
                  'endLine' => 99,
                  'startTokenPos' => 784,
                  'startFilePos' => 3844,
                  'endTokenPos' => 786,
                  'endFilePos' => 3856,
                ),
              ),
              'summary' => 
              array (
                'code' => '\'Ajusta stock de un producto\'',
                'attributes' => 
                array (
                  'startLine' => 100,
                  'endLine' => 100,
                  'startTokenPos' => 792,
                  'startFilePos' => 3876,
                  'endTokenPos' => 792,
                  'endFilePos' => 3904,
                ),
              ),
              'parameters' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Parameter(name: \'productId\', in: \'path\', required: true, schema: new \\OpenApi\\Attributes\\Schema(type: \'integer\'))]',
                'attributes' => 
                array (
                  'startLine' => 101,
                  'endLine' => 103,
                  'startTokenPos' => 798,
                  'startFilePos' => 3927,
                  'endTokenPos' => 837,
                  'endFilePos' => 4054,
                ),
              ),
              'requestBody' => 
              array (
                'code' => 'new \\OpenApi\\Attributes\\RequestBody(required: true, content: new \\OpenApi\\Attributes\\JsonContent(required: [\'quantity\', \'operation\', \'reason\'], properties: [new \\OpenApi\\Attributes\\Property(property: \'quantity\', type: \'integer\', minimum: 1), new \\OpenApi\\Attributes\\Property(property: \'operation\', type: \'string\', enum: [\'add\', \'subtract\']), new \\OpenApi\\Attributes\\Property(property: \'reason\', type: \'string\')]))',
                'attributes' => 
                array (
                  'startLine' => 104,
                  'endLine' => 114,
                  'startTokenPos' => 843,
                  'startFilePos' => 4078,
                  'endTokenPos' => 955,
                  'endFilePos' => 4566,
                ),
              ),
              'responses' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Stock ajustado\')]',
                'attributes' => 
                array (
                  'startLine' => 115,
                  'endLine' => 115,
                  'startTokenPos' => 961,
                  'startFilePos' => 4588,
                  'endTokenPos' => 977,
                  'endFilePos' => 4650,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 97,
        'endLine' => 130,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Inventory\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Inventory\\Http\\Controllers\\InventoryController',
        'implementingClassName' => 'Modules\\Inventory\\Http\\Controllers\\InventoryController',
        'currentClassName' => 'Modules\\Inventory\\Http\\Controllers\\InventoryController',
        'aliasName' => NULL,
      ),
      'belowReorderPoint' => 
      array (
        'name' => 'belowReorderPoint',
        'parameters' => 
        array (
          'action' => 
          array (
            'name' => 'action',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Modules\\Inventory\\Application\\Actions\\ListProductsBelowReorderPointAction',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 138,
            'endLine' => 138,
            'startColumn' => 39,
            'endColumn' => 81,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Http\\JsonResponse',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'OpenApi\\Attributes\\Get',
            'isRepeated' => false,
            'arguments' => 
            array (
              'path' => 
              array (
                'code' => '\'/api/v1/inventory/products/below-reorder-point\'',
                'attributes' => 
                array (
                  'startLine' => 133,
                  'endLine' => 133,
                  'startTokenPos' => 1115,
                  'startFilePos' => 5259,
                  'endTokenPos' => 1115,
                  'endFilePos' => 5306,
                ),
              ),
              'tags' => 
              array (
                'code' => '[\'Inventory\']',
                'attributes' => 
                array (
                  'startLine' => 134,
                  'endLine' => 134,
                  'startTokenPos' => 1121,
                  'startFilePos' => 5323,
                  'endTokenPos' => 1123,
                  'endFilePos' => 5335,
                ),
              ),
              'summary' => 
              array (
                'code' => '\'Lista productos bajo punto de reorden\'',
                'attributes' => 
                array (
                  'startLine' => 135,
                  'endLine' => 135,
                  'startTokenPos' => 1129,
                  'startFilePos' => 5355,
                  'endTokenPos' => 1129,
                  'endFilePos' => 5393,
                ),
              ),
              'responses' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Listado filtrado\')]',
                'attributes' => 
                array (
                  'startLine' => 136,
                  'endLine' => 136,
                  'startTokenPos' => 1135,
                  'startFilePos' => 5415,
                  'endTokenPos' => 1151,
                  'endFilePos' => 5479,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 132,
        'endLine' => 144,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Inventory\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Inventory\\Http\\Controllers\\InventoryController',
        'implementingClassName' => 'Modules\\Inventory\\Http\\Controllers\\InventoryController',
        'currentClassName' => 'Modules\\Inventory\\Http\\Controllers\\InventoryController',
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