<?php declare(strict_types = 1);

// odsl-/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Controllers/AuthController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\Auth\Http\Controllers\AuthController
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.0-8.3.30-30cf04c2735156e0c5b23f043fe9df591183eddfc6c18f52799c5fa7b017e6f7',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Modules\\Auth\\Http\\Controllers\\AuthController',
        'filename' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Auth/Http/Controllers/AuthController.php',
      ),
    ),
    'namespace' => 'Modules\\Auth\\Http\\Controllers',
    'name' => 'Modules\\Auth\\Http\\Controllers\\AuthController',
    'shortName' => 'AuthController',
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
    'endLine' => 99,
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
      'login' => 
      array (
        'name' => 'login',
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
                'name' => 'Modules\\Auth\\Http\\Requests\\LoginRequest',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 41,
            'endLine' => 41,
            'startColumn' => 27,
            'endColumn' => 47,
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
                'name' => 'Modules\\Auth\\Application\\Actions\\LoginAction',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 41,
            'endLine' => 41,
            'startColumn' => 50,
            'endColumn' => 68,
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
                'code' => '\'/api/v1/auth/login\'',
                'attributes' => 
                array (
                  'startLine' => 22,
                  'endLine' => 22,
                  'startTokenPos' => 93,
                  'startFilePos' => 608,
                  'endTokenPos' => 93,
                  'endFilePos' => 627,
                ),
              ),
              'tags' => 
              array (
                'code' => '[\'Auth\']',
                'attributes' => 
                array (
                  'startLine' => 23,
                  'endLine' => 23,
                  'startTokenPos' => 99,
                  'startFilePos' => 644,
                  'endTokenPos' => 101,
                  'endFilePos' => 651,
                ),
              ),
              'summary' => 
              array (
                'code' => '\'Iniciar sesión con credenciales\'',
                'attributes' => 
                array (
                  'startLine' => 24,
                  'endLine' => 24,
                  'startTokenPos' => 107,
                  'startFilePos' => 671,
                  'endTokenPos' => 107,
                  'endFilePos' => 704,
                ),
              ),
              'requestBody' => 
              array (
                'code' => 'new \\OpenApi\\Attributes\\RequestBody(required: true, content: new \\OpenApi\\Attributes\\JsonContent(required: [\'email\', \'password\', \'device_name\'], properties: [new \\OpenApi\\Attributes\\Property(property: \'email\', type: \'string\', format: \'email\'), new \\OpenApi\\Attributes\\Property(property: \'password\', type: \'string\'), new \\OpenApi\\Attributes\\Property(property: \'device_name\', type: \'string\')]))',
                'attributes' => 
                array (
                  'startLine' => 25,
                  'endLine' => 35,
                  'startTokenPos' => 113,
                  'startFilePos' => 728,
                  'endTokenPos' => 214,
                  'endFilePos' => 1195,
                ),
              ),
              'responses' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Autenticación exitosa\'), new \\OpenApi\\Attributes\\Response(response: 401, description: \'Credenciales inválidas\')]',
                'attributes' => 
                array (
                  'startLine' => 36,
                  'endLine' => 39,
                  'startTokenPos' => 220,
                  'startFilePos' => 1217,
                  'endTokenPos' => 256,
                  'endFilePos' => 1394,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 21,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Auth\\Http\\Controllers\\AuthController',
        'implementingClassName' => 'Modules\\Auth\\Http\\Controllers\\AuthController',
        'currentClassName' => 'Modules\\Auth\\Http\\Controllers\\AuthController',
        'aliasName' => NULL,
      ),
      'logout' => 
      array (
        'name' => 'logout',
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
            'startLine' => 67,
            'endLine' => 67,
            'startColumn' => 28,
            'endColumn' => 43,
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
                'name' => 'Modules\\Auth\\Application\\Actions\\LogoutAction',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 67,
            'endLine' => 67,
            'startColumn' => 46,
            'endColumn' => 65,
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
                'code' => '\'/api/v1/auth/logout\'',
                'attributes' => 
                array (
                  'startLine' => 61,
                  'endLine' => 61,
                  'startTokenPos' => 410,
                  'startFilePos' => 2061,
                  'endTokenPos' => 410,
                  'endFilePos' => 2081,
                ),
              ),
              'tags' => 
              array (
                'code' => '[\'Auth\']',
                'attributes' => 
                array (
                  'startLine' => 62,
                  'endLine' => 62,
                  'startTokenPos' => 416,
                  'startFilePos' => 2098,
                  'endTokenPos' => 418,
                  'endFilePos' => 2105,
                ),
              ),
              'security' => 
              array (
                'code' => '[[\'bearerAuth\' => []]]',
                'attributes' => 
                array (
                  'startLine' => 63,
                  'endLine' => 63,
                  'startTokenPos' => 424,
                  'startFilePos' => 2126,
                  'endTokenPos' => 433,
                  'endFilePos' => 2147,
                ),
              ),
              'summary' => 
              array (
                'code' => '\'Cerrar sesión y revocar token actual\'',
                'attributes' => 
                array (
                  'startLine' => 64,
                  'endLine' => 64,
                  'startTokenPos' => 439,
                  'startFilePos' => 2167,
                  'endTokenPos' => 439,
                  'endFilePos' => 2205,
                ),
              ),
              'responses' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Sesión cerrada\')]',
                'attributes' => 
                array (
                  'startLine' => 65,
                  'endLine' => 65,
                  'startTokenPos' => 445,
                  'startFilePos' => 2227,
                  'endTokenPos' => 461,
                  'endFilePos' => 2290,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 60,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Auth\\Http\\Controllers\\AuthController',
        'implementingClassName' => 'Modules\\Auth\\Http\\Controllers\\AuthController',
        'currentClassName' => 'Modules\\Auth\\Http\\Controllers\\AuthController',
        'aliasName' => NULL,
      ),
      'me' => 
      array (
        'name' => 'me',
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
            'startLine' => 89,
            'endLine' => 89,
            'startColumn' => 24,
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
                'name' => 'Modules\\Auth\\Application\\Actions\\GetAuthenticatedUserAction',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 89,
            'endLine' => 89,
            'startColumn' => 42,
            'endColumn' => 75,
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
                'code' => '\'/api/v1/auth/me\'',
                'attributes' => 
                array (
                  'startLine' => 83,
                  'endLine' => 83,
                  'startTokenPos' => 553,
                  'startFilePos' => 2689,
                  'endTokenPos' => 553,
                  'endFilePos' => 2705,
                ),
              ),
              'tags' => 
              array (
                'code' => '[\'Auth\']',
                'attributes' => 
                array (
                  'startLine' => 84,
                  'endLine' => 84,
                  'startTokenPos' => 559,
                  'startFilePos' => 2722,
                  'endTokenPos' => 561,
                  'endFilePos' => 2729,
                ),
              ),
              'security' => 
              array (
                'code' => '[[\'bearerAuth\' => []]]',
                'attributes' => 
                array (
                  'startLine' => 85,
                  'endLine' => 85,
                  'startTokenPos' => 567,
                  'startFilePos' => 2750,
                  'endTokenPos' => 576,
                  'endFilePos' => 2771,
                ),
              ),
              'summary' => 
              array (
                'code' => '\'Obtiene el usuario autenticado\'',
                'attributes' => 
                array (
                  'startLine' => 86,
                  'endLine' => 86,
                  'startTokenPos' => 582,
                  'startFilePos' => 2791,
                  'endTokenPos' => 582,
                  'endFilePos' => 2822,
                ),
              ),
              'responses' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Usuario autenticado\')]',
                'attributes' => 
                array (
                  'startLine' => 87,
                  'endLine' => 87,
                  'startTokenPos' => 588,
                  'startFilePos' => 2844,
                  'endTokenPos' => 604,
                  'endFilePos' => 2911,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 82,
        'endLine' => 98,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Auth\\Http\\Controllers\\AuthController',
        'implementingClassName' => 'Modules\\Auth\\Http\\Controllers\\AuthController',
        'currentClassName' => 'Modules\\Auth\\Http\\Controllers\\AuthController',
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