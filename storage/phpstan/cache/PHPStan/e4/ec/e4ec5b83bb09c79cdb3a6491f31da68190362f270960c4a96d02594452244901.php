<?php declare(strict_types = 1);

// odsl-/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Controllers/ReceivingController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\Receiving\Http\Controllers\ReceivingController
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.0-8.3.30-2b9e2579481946d85c40a916ea3eaeb0858de7f6ee5c07b54fd4695f3a415e50',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Modules\\Receiving\\Http\\Controllers\\ReceivingController',
        'filename' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Receiving/Http/Controllers/ReceivingController.php',
      ),
    ),
    'namespace' => 'Modules\\Receiving\\Http\\Controllers',
    'name' => 'Modules\\Receiving\\Http\\Controllers\\ReceivingController',
    'shortName' => 'ReceivingController',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 19,
    'endLine' => 90,
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
      'registerReceipt' => 
      array (
        'name' => 'registerReceipt',
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
                'name' => 'Modules\\Receiving\\Http\\Requests\\RegisterReceiptRequest',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 38,
            'endLine' => 38,
            'startColumn' => 37,
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
                'name' => 'Modules\\Receiving\\Application\\Actions\\RegisterReceiptAction',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 38,
            'endLine' => 38,
            'startColumn' => 70,
            'endColumn' => 98,
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
                'code' => '\'/api/v1/receiving/receipts\'',
                'attributes' => 
                array (
                  'startLine' => 22,
                  'endLine' => 22,
                  'startTokenPos' => 93,
                  'startFilePos' => 750,
                  'endTokenPos' => 93,
                  'endFilePos' => 777,
                ),
              ),
              'tags' => 
              array (
                'code' => '[\'Receiving\']',
                'attributes' => 
                array (
                  'startLine' => 23,
                  'endLine' => 23,
                  'startTokenPos' => 99,
                  'startFilePos' => 794,
                  'endTokenPos' => 101,
                  'endFilePos' => 806,
                ),
              ),
              'summary' => 
              array (
                'code' => '\'Registra una recepción\'',
                'attributes' => 
                array (
                  'startLine' => 24,
                  'endLine' => 24,
                  'startTokenPos' => 107,
                  'startFilePos' => 826,
                  'endTokenPos' => 107,
                  'endFilePos' => 850,
                ),
              ),
              'requestBody' => 
              array (
                'code' => 'new \\OpenApi\\Attributes\\RequestBody(required: true, content: new \\OpenApi\\Attributes\\JsonContent(required: [\'supplier_reference\', \'received_at\'], properties: [new \\OpenApi\\Attributes\\Property(property: \'supplier_reference\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'received_at\', type: \'string\', format: \'date-time\'), new \\OpenApi\\Attributes\\Property(property: \'notes\', type: \'string\')]))',
                'attributes' => 
                array (
                  'startLine' => 25,
                  'endLine' => 35,
                  'startTokenPos' => 113,
                  'startFilePos' => 874,
                  'endTokenPos' => 211,
                  'endFilePos' => 1356,
                ),
              ),
              'responses' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Response(response: 201, description: \'Recepción creada\')]',
                'attributes' => 
                array (
                  'startLine' => 36,
                  'endLine' => 36,
                  'startTokenPos' => 217,
                  'startFilePos' => 1378,
                  'endTokenPos' => 233,
                  'endFilePos' => 1443,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 21,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Receiving\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Receiving\\Http\\Controllers\\ReceivingController',
        'implementingClassName' => 'Modules\\Receiving\\Http\\Controllers\\ReceivingController',
        'currentClassName' => 'Modules\\Receiving\\Http\\Controllers\\ReceivingController',
        'aliasName' => NULL,
      ),
      'linkLotToReceipt' => 
      array (
        'name' => 'linkLotToReceipt',
        'parameters' => 
        array (
          'receiptId' => 
          array (
            'name' => 'receiptId',
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
            'startColumn' => 38,
            'endColumn' => 51,
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
                'name' => 'Modules\\Receiving\\Http\\Requests\\LinkLotToReceiptRequest',
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
            'startColumn' => 54,
            'endColumn' => 85,
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
                'name' => 'Modules\\Receiving\\Application\\Actions\\LinkLotToReceiptAction',
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
            'startColumn' => 88,
            'endColumn' => 117,
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
            'name' => 'OpenApi\\Attributes\\Post',
            'isRepeated' => false,
            'arguments' => 
            array (
              'path' => 
              array (
                'code' => '\'/api/v1/receiving/receipts/{receiptId}/lots\'',
                'attributes' => 
                array (
                  'startLine' => 53,
                  'endLine' => 53,
                  'startTokenPos' => 378,
                  'startFilePos' => 2093,
                  'endTokenPos' => 378,
                  'endFilePos' => 2137,
                ),
              ),
              'tags' => 
              array (
                'code' => '[\'Receiving\']',
                'attributes' => 
                array (
                  'startLine' => 54,
                  'endLine' => 54,
                  'startTokenPos' => 384,
                  'startFilePos' => 2154,
                  'endTokenPos' => 386,
                  'endFilePos' => 2166,
                ),
              ),
              'summary' => 
              array (
                'code' => '\'Asocia lote a recepción\'',
                'attributes' => 
                array (
                  'startLine' => 55,
                  'endLine' => 55,
                  'startTokenPos' => 392,
                  'startFilePos' => 2186,
                  'endTokenPos' => 392,
                  'endFilePos' => 2211,
                ),
              ),
              'parameters' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Parameter(name: \'receiptId\', in: \'path\', required: true, schema: new \\OpenApi\\Attributes\\Schema(type: \'integer\'))]',
                'attributes' => 
                array (
                  'startLine' => 56,
                  'endLine' => 58,
                  'startTokenPos' => 398,
                  'startFilePos' => 2234,
                  'endTokenPos' => 437,
                  'endFilePos' => 2361,
                ),
              ),
              'requestBody' => 
              array (
                'code' => 'new \\OpenApi\\Attributes\\RequestBody(required: true, content: new \\OpenApi\\Attributes\\JsonContent(required: [\'product_id\', \'lot_number\', \'expires_at\', \'quantity\'], properties: [new \\OpenApi\\Attributes\\Property(property: \'product_id\', type: \'integer\'), new \\OpenApi\\Attributes\\Property(property: \'lot_number\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'expires_at\', type: \'string\', format: \'date\'), new \\OpenApi\\Attributes\\Property(property: \'quantity\', type: \'integer\'), new \\OpenApi\\Attributes\\Property(property: \'location_id\', type: \'integer\')]))',
                'attributes' => 
                array (
                  'startLine' => 59,
                  'endLine' => 71,
                  'startTokenPos' => 443,
                  'startFilePos' => 2385,
                  'endTokenPos' => 581,
                  'endFilePos' => 3031,
                ),
              ),
              'responses' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Response(response: 201, description: \'Lote asociado y mercancía recibida\')]',
                'attributes' => 
                array (
                  'startLine' => 72,
                  'endLine' => 72,
                  'startTokenPos' => 587,
                  'startFilePos' => 3053,
                  'endTokenPos' => 603,
                  'endFilePos' => 3136,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 52,
        'endLine' => 89,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Receiving\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Receiving\\Http\\Controllers\\ReceivingController',
        'implementingClassName' => 'Modules\\Receiving\\Http\\Controllers\\ReceivingController',
        'currentClassName' => 'Modules\\Receiving\\Http\\Controllers\\ReceivingController',
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