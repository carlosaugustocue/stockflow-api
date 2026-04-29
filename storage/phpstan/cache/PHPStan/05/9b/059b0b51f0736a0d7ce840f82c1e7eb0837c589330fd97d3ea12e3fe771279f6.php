<?php declare(strict_types = 1);

// odsl-/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Controllers/DispatchController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\Dispatch\Http\Controllers\DispatchController
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.0-8.3.30-a4a6a98e1b4b2194e3e8c33d3771517d082c47aa9fda7878e166041154e05639',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Modules\\Dispatch\\Http\\Controllers\\DispatchController',
        'filename' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Dispatch/Http/Controllers/DispatchController.php',
      ),
    ),
    'namespace' => 'Modules\\Dispatch\\Http\\Controllers',
    'name' => 'Modules\\Dispatch\\Http\\Controllers\\DispatchController',
    'shortName' => 'DispatchController',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 17,
    'endLine' => 83,
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
      'createOrder' => 
      array (
        'name' => 'createOrder',
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
                'name' => 'Modules\\Dispatch\\Http\\Requests\\CreateDispatchOrderRequest',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 36,
            'endLine' => 36,
            'startColumn' => 33,
            'endColumn' => 67,
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
                'name' => 'Modules\\Dispatch\\Application\\Actions\\CreateDispatchOrderAction',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 36,
            'endLine' => 36,
            'startColumn' => 70,
            'endColumn' => 102,
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
                'code' => '\'/api/v1/dispatch/orders\'',
                'attributes' => 
                array (
                  'startLine' => 20,
                  'endLine' => 20,
                  'startTokenPos' => 83,
                  'startFilePos' => 644,
                  'endTokenPos' => 83,
                  'endFilePos' => 668,
                ),
              ),
              'tags' => 
              array (
                'code' => '[\'Dispatch\']',
                'attributes' => 
                array (
                  'startLine' => 21,
                  'endLine' => 21,
                  'startTokenPos' => 89,
                  'startFilePos' => 685,
                  'endTokenPos' => 91,
                  'endFilePos' => 696,
                ),
              ),
              'summary' => 
              array (
                'code' => '\'Crea orden de despacho\'',
                'attributes' => 
                array (
                  'startLine' => 22,
                  'endLine' => 22,
                  'startTokenPos' => 97,
                  'startFilePos' => 716,
                  'endTokenPos' => 97,
                  'endFilePos' => 739,
                ),
              ),
              'requestBody' => 
              array (
                'code' => 'new \\OpenApi\\Attributes\\RequestBody(required: true, content: new \\OpenApi\\Attributes\\JsonContent(required: [\'order_reference\', \'product_id\', \'quantity\'], properties: [new \\OpenApi\\Attributes\\Property(property: \'order_reference\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'product_id\', type: \'integer\'), new \\OpenApi\\Attributes\\Property(property: \'quantity\', type: \'integer\', minimum: 1)]))',
                'attributes' => 
                array (
                  'startLine' => 23,
                  'endLine' => 33,
                  'startTokenPos' => 103,
                  'startFilePos' => 763,
                  'endTokenPos' => 204,
                  'endFilePos' => 1245,
                ),
              ),
              'responses' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Response(response: 201, description: \'Orden creada\')]',
                'attributes' => 
                array (
                  'startLine' => 34,
                  'endLine' => 34,
                  'startTokenPos' => 210,
                  'startFilePos' => 1267,
                  'endTokenPos' => 226,
                  'endFilePos' => 1327,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 19,
        'endLine' => 48,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Dispatch\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Dispatch\\Http\\Controllers\\DispatchController',
        'implementingClassName' => 'Modules\\Dispatch\\Http\\Controllers\\DispatchController',
        'currentClassName' => 'Modules\\Dispatch\\Http\\Controllers\\DispatchController',
        'aliasName' => NULL,
      ),
      'pickFefo' => 
      array (
        'name' => 'pickFefo',
        'parameters' => 
        array (
          'dispatchOrderId' => 
          array (
            'name' => 'dispatchOrderId',
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
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 30,
            'endColumn' => 49,
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
                'name' => 'Modules\\Dispatch\\Application\\Actions\\PickStockUsingFEFOAction',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 57,
            'endLine' => 57,
            'startColumn' => 52,
            'endColumn' => 83,
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
                'code' => '\'/api/v1/dispatch/orders/{dispatchOrderId}/pick-fefo\'',
                'attributes' => 
                array (
                  'startLine' => 51,
                  'endLine' => 51,
                  'startTokenPos' => 354,
                  'startFilePos' => 1923,
                  'endTokenPos' => 354,
                  'endFilePos' => 1975,
                ),
              ),
              'tags' => 
              array (
                'code' => '[\'Dispatch\']',
                'attributes' => 
                array (
                  'startLine' => 52,
                  'endLine' => 52,
                  'startTokenPos' => 360,
                  'startFilePos' => 1992,
                  'endTokenPos' => 362,
                  'endFilePos' => 2003,
                ),
              ),
              'summary' => 
              array (
                'code' => '\'Ejecuta picking FEFO\'',
                'attributes' => 
                array (
                  'startLine' => 53,
                  'endLine' => 53,
                  'startTokenPos' => 368,
                  'startFilePos' => 2023,
                  'endTokenPos' => 368,
                  'endFilePos' => 2044,
                ),
              ),
              'parameters' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Parameter(name: \'dispatchOrderId\', in: \'path\', required: true, schema: new \\OpenApi\\Attributes\\Schema(type: \'integer\'))]',
                'attributes' => 
                array (
                  'startLine' => 54,
                  'endLine' => 54,
                  'startTokenPos' => 374,
                  'startFilePos' => 2067,
                  'endTokenPos' => 410,
                  'endFilePos' => 2177,
                ),
              ),
              'responses' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Picking realizado\')]',
                'attributes' => 
                array (
                  'startLine' => 55,
                  'endLine' => 55,
                  'startTokenPos' => 416,
                  'startFilePos' => 2199,
                  'endTokenPos' => 432,
                  'endFilePos' => 2264,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 50,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Dispatch\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Dispatch\\Http\\Controllers\\DispatchController',
        'implementingClassName' => 'Modules\\Dispatch\\Http\\Controllers\\DispatchController',
        'currentClassName' => 'Modules\\Dispatch\\Http\\Controllers\\DispatchController',
        'aliasName' => NULL,
      ),
      'confirm' => 
      array (
        'name' => 'confirm',
        'parameters' => 
        array (
          'dispatchOrderId' => 
          array (
            'name' => 'dispatchOrderId',
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
            'startLine' => 74,
            'endLine' => 74,
            'startColumn' => 29,
            'endColumn' => 48,
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
                'name' => 'Modules\\Dispatch\\Application\\Actions\\ConfirmDispatchAction',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 74,
            'endLine' => 74,
            'startColumn' => 51,
            'endColumn' => 79,
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
                'code' => '\'/api/v1/dispatch/orders/{dispatchOrderId}/confirm\'',
                'attributes' => 
                array (
                  'startLine' => 68,
                  'endLine' => 68,
                  'startTokenPos' => 522,
                  'startFilePos' => 2645,
                  'endTokenPos' => 522,
                  'endFilePos' => 2695,
                ),
              ),
              'tags' => 
              array (
                'code' => '[\'Dispatch\']',
                'attributes' => 
                array (
                  'startLine' => 69,
                  'endLine' => 69,
                  'startTokenPos' => 528,
                  'startFilePos' => 2712,
                  'endTokenPos' => 530,
                  'endFilePos' => 2723,
                ),
              ),
              'summary' => 
              array (
                'code' => '\'Confirma despacho y descuenta inventario\'',
                'attributes' => 
                array (
                  'startLine' => 70,
                  'endLine' => 70,
                  'startTokenPos' => 536,
                  'startFilePos' => 2743,
                  'endTokenPos' => 536,
                  'endFilePos' => 2784,
                ),
              ),
              'parameters' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Parameter(name: \'dispatchOrderId\', in: \'path\', required: true, schema: new \\OpenApi\\Attributes\\Schema(type: \'integer\'))]',
                'attributes' => 
                array (
                  'startLine' => 71,
                  'endLine' => 71,
                  'startTokenPos' => 542,
                  'startFilePos' => 2807,
                  'endTokenPos' => 578,
                  'endFilePos' => 2917,
                ),
              ),
              'responses' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Despacho confirmado\')]',
                'attributes' => 
                array (
                  'startLine' => 72,
                  'endLine' => 72,
                  'startTokenPos' => 584,
                  'startFilePos' => 2939,
                  'endTokenPos' => 600,
                  'endFilePos' => 3006,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 67,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Dispatch\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Dispatch\\Http\\Controllers\\DispatchController',
        'implementingClassName' => 'Modules\\Dispatch\\Http\\Controllers\\DispatchController',
        'currentClassName' => 'Modules\\Dispatch\\Http\\Controllers\\DispatchController',
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