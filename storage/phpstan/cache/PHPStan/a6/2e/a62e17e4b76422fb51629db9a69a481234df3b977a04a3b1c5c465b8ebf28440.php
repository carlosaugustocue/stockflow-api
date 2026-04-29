<?php declare(strict_types = 1);

// odsl-/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Controllers/ReportingController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Modules\Reporting\Http\Controllers\ReportingController
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.70.0.0-8.3.30-9e412283d8ef85c720575d0cb87fc424ed148ebf71034823987c81aa58577364',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Modules\\Reporting\\Http\\Controllers\\ReportingController',
        'filename' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/app/Modules/Reporting/Http/Controllers/ReportingController.php',
      ),
    ),
    'namespace' => 'Modules\\Reporting\\Http\\Controllers',
    'name' => 'Modules\\Reporting\\Http\\Controllers\\ReportingController',
    'shortName' => 'ReportingController',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 18,
    'endLine' => 77,
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
      'inventoryMetrics' => 
      array (
        'name' => 'inventoryMetrics',
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
                'name' => 'Modules\\Reporting\\Application\\Actions\\GetInventoryMetricsAction',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 26,
            'endLine' => 26,
            'startColumn' => 38,
            'endColumn' => 70,
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
                'code' => '\'/api/v1/reporting/inventory-metrics\'',
                'attributes' => 
                array (
                  'startLine' => 21,
                  'endLine' => 21,
                  'startTokenPos' => 88,
                  'startFilePos' => 657,
                  'endTokenPos' => 88,
                  'endFilePos' => 693,
                ),
              ),
              'tags' => 
              array (
                'code' => '[\'Reporting\']',
                'attributes' => 
                array (
                  'startLine' => 22,
                  'endLine' => 22,
                  'startTokenPos' => 94,
                  'startFilePos' => 710,
                  'endTokenPos' => 96,
                  'endFilePos' => 722,
                ),
              ),
              'summary' => 
              array (
                'code' => '\'Obtiene tabla materializada de métricas de inventario\'',
                'attributes' => 
                array (
                  'startLine' => 23,
                  'endLine' => 23,
                  'startTokenPos' => 102,
                  'startFilePos' => 742,
                  'endTokenPos' => 102,
                  'endFilePos' => 797,
                ),
              ),
              'responses' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Métricas de inventario\')]',
                'attributes' => 
                array (
                  'startLine' => 24,
                  'endLine' => 24,
                  'startTokenPos' => 108,
                  'startFilePos' => 819,
                  'endTokenPos' => 124,
                  'endFilePos' => 890,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 20,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Reporting\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Reporting\\Http\\Controllers\\ReportingController',
        'implementingClassName' => 'Modules\\Reporting\\Http\\Controllers\\ReportingController',
        'currentClassName' => 'Modules\\Reporting\\Http\\Controllers\\ReportingController',
        'aliasName' => NULL,
      ),
      'summary' => 
      array (
        'name' => 'summary',
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
                'name' => 'Modules\\Reporting\\Application\\Actions\\GetReportingSummaryAction',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 29,
            'endColumn' => 61,
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
                'code' => '\'/api/v1/reporting/summary\'',
                'attributes' => 
                array (
                  'startLine' => 35,
                  'endLine' => 35,
                  'startTokenPos' => 191,
                  'startFilePos' => 1169,
                  'endTokenPos' => 191,
                  'endFilePos' => 1195,
                ),
              ),
              'tags' => 
              array (
                'code' => '[\'Reporting\']',
                'attributes' => 
                array (
                  'startLine' => 36,
                  'endLine' => 36,
                  'startTokenPos' => 197,
                  'startFilePos' => 1212,
                  'endTokenPos' => 199,
                  'endFilePos' => 1224,
                ),
              ),
              'summary' => 
              array (
                'code' => '\'Obtiene indicadores agregados de reporting\'',
                'attributes' => 
                array (
                  'startLine' => 37,
                  'endLine' => 37,
                  'startTokenPos' => 205,
                  'startFilePos' => 1244,
                  'endTokenPos' => 205,
                  'endFilePos' => 1287,
                ),
              ),
              'responses' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Resumen de indicadores\')]',
                'attributes' => 
                array (
                  'startLine' => 38,
                  'endLine' => 38,
                  'startTokenPos' => 211,
                  'startFilePos' => 1309,
                  'endTokenPos' => 227,
                  'endFilePos' => 1379,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 34,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Reporting\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Reporting\\Http\\Controllers\\ReportingController',
        'implementingClassName' => 'Modules\\Reporting\\Http\\Controllers\\ReportingController',
        'currentClassName' => 'Modules\\Reporting\\Http\\Controllers\\ReportingController',
        'aliasName' => NULL,
      ),
      'exportMetricsPdf' => 
      array (
        'name' => 'exportMetricsPdf',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
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
                'code' => '\'/api/v1/reporting/inventory-metrics/export/pdf\'',
                'attributes' => 
                array (
                  'startLine' => 49,
                  'endLine' => 49,
                  'startTokenPos' => 289,
                  'startFilePos' => 1612,
                  'endTokenPos' => 289,
                  'endFilePos' => 1659,
                ),
              ),
              'tags' => 
              array (
                'code' => '[\'Reporting\']',
                'attributes' => 
                array (
                  'startLine' => 50,
                  'endLine' => 50,
                  'startTokenPos' => 295,
                  'startFilePos' => 1676,
                  'endTokenPos' => 297,
                  'endFilePos' => 1688,
                ),
              ),
              'summary' => 
              array (
                'code' => '\'Exporta métricas de inventario en PDF\'',
                'attributes' => 
                array (
                  'startLine' => 51,
                  'endLine' => 51,
                  'startTokenPos' => 303,
                  'startFilePos' => 1708,
                  'endTokenPos' => 303,
                  'endFilePos' => 1747,
                ),
              ),
              'responses' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Archivo PDF\')]',
                'attributes' => 
                array (
                  'startLine' => 52,
                  'endLine' => 52,
                  'startTokenPos' => 309,
                  'startFilePos' => 1769,
                  'endTokenPos' => 325,
                  'endFilePos' => 1828,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 48,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Reporting\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Reporting\\Http\\Controllers\\ReportingController',
        'implementingClassName' => 'Modules\\Reporting\\Http\\Controllers\\ReportingController',
        'currentClassName' => 'Modules\\Reporting\\Http\\Controllers\\ReportingController',
        'aliasName' => NULL,
      ),
      'exportMetricsExcel' => 
      array (
        'name' => 'exportMetricsExcel',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
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
                'code' => '\'/api/v1/reporting/inventory-metrics/export/excel\'',
                'attributes' => 
                array (
                  'startLine' => 68,
                  'endLine' => 68,
                  'startTokenPos' => 406,
                  'startFilePos' => 2190,
                  'endTokenPos' => 406,
                  'endFilePos' => 2239,
                ),
              ),
              'tags' => 
              array (
                'code' => '[\'Reporting\']',
                'attributes' => 
                array (
                  'startLine' => 69,
                  'endLine' => 69,
                  'startTokenPos' => 412,
                  'startFilePos' => 2256,
                  'endTokenPos' => 414,
                  'endFilePos' => 2268,
                ),
              ),
              'summary' => 
              array (
                'code' => '\'Exporta métricas de inventario en Excel\'',
                'attributes' => 
                array (
                  'startLine' => 70,
                  'endLine' => 70,
                  'startTokenPos' => 420,
                  'startFilePos' => 2288,
                  'endTokenPos' => 420,
                  'endFilePos' => 2329,
                ),
              ),
              'responses' => 
              array (
                'code' => '[new \\OpenApi\\Attributes\\Response(response: 200, description: \'Archivo XLSX\')]',
                'attributes' => 
                array (
                  'startLine' => 71,
                  'endLine' => 71,
                  'startTokenPos' => 426,
                  'startFilePos' => 2351,
                  'endTokenPos' => 442,
                  'endFilePos' => 2411,
                ),
              ),
            ),
          ),
        ),
        'docComment' => NULL,
        'startLine' => 67,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Modules\\Reporting\\Http\\Controllers',
        'declaringClassName' => 'Modules\\Reporting\\Http\\Controllers\\ReportingController',
        'implementingClassName' => 'Modules\\Reporting\\Http\\Controllers\\ReportingController',
        'currentClassName' => 'Modules\\Reporting\\Http\\Controllers\\ReportingController',
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