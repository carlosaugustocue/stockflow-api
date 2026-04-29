<?php declare(strict_types = 1);

// osfsl-/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Pagination/CursorPaginator.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Contracts\Pagination\CursorPaginator
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-f0367d19724749093060836f2d17404aeadd187b376dc146c3000e8ef898f800-8.3.30-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'filename' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Pagination/CursorPaginator.php',
      ),
    ),
    'namespace' => 'Illuminate\\Contracts\\Pagination',
    'name' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
    'shortName' => 'CursorPaginator',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @template TKey of array-key
 *
 * @template-covariant TValue
 *
 * @method $this through(callable(TValue): mixed $callback)
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 138,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
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
      'url' => 
      array (
        'name' => 'url',
        'parameters' => 
        array (
          'cursor' => 
          array (
            'name' => 'cursor',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 20,
            'endLine' => 20,
            'startColumn' => 25,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the URL for a given cursor.
 *
 * @param  \\Illuminate\\Pagination\\Cursor|null  $cursor
 * @return string
 */',
        'startLine' => 20,
        'endLine' => 20,
        'startColumn' => 5,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Pagination',
        'declaringClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'implementingClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'currentClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'aliasName' => NULL,
      ),
      'appends' => 
      array (
        'name' => 'appends',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 29,
            'endLine' => 29,
            'startColumn' => 29,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 29,
                'endLine' => 29,
                'startTokenPos' => 42,
                'startFilePos' => 611,
                'endTokenPos' => 42,
                'endFilePos' => 614,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 29,
            'endLine' => 29,
            'startColumn' => 35,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a set of query string values to the paginator.
 *
 * @param  array|string|null  $key
 * @param  string|null  $value
 * @return $this
 */',
        'startLine' => 29,
        'endLine' => 29,
        'startColumn' => 5,
        'endColumn' => 49,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Pagination',
        'declaringClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'implementingClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'currentClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'aliasName' => NULL,
      ),
      'fragment' => 
      array (
        'name' => 'fragment',
        'parameters' => 
        array (
          'fragment' => 
          array (
            'name' => 'fragment',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 37,
                'endLine' => 37,
                'startTokenPos' => 58,
                'startFilePos' => 812,
                'endTokenPos' => 58,
                'endFilePos' => 815,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 30,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get / set the URL fragment to be appended to URLs.
 *
 * @param  string|null  $fragment
 * @return $this|string|null
 */',
        'startLine' => 37,
        'endLine' => 37,
        'startColumn' => 5,
        'endColumn' => 47,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Pagination',
        'declaringClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'implementingClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'currentClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'aliasName' => NULL,
      ),
      'withQueryString' => 
      array (
        'name' => 'withQueryString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add all current query string values to the paginator.
 *
 * @return $this
 */',
        'startLine' => 44,
        'endLine' => 44,
        'startColumn' => 5,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Pagination',
        'declaringClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'implementingClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'currentClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'aliasName' => NULL,
      ),
      'previousPageUrl' => 
      array (
        'name' => 'previousPageUrl',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the URL for the previous page, or null.
 *
 * @return string|null
 */',
        'startLine' => 51,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Pagination',
        'declaringClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'implementingClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'currentClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'aliasName' => NULL,
      ),
      'nextPageUrl' => 
      array (
        'name' => 'nextPageUrl',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * The URL for the next page, or null.
 *
 * @return string|null
 */',
        'startLine' => 58,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Pagination',
        'declaringClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'implementingClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'currentClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'aliasName' => NULL,
      ),
      'items' => 
      array (
        'name' => 'items',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all of the items being paginated.
 *
 * @return array<TKey, TValue>
 */',
        'startLine' => 65,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Pagination',
        'declaringClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'implementingClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'currentClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'aliasName' => NULL,
      ),
      'previousCursor' => 
      array (
        'name' => 'previousCursor',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the "cursor" of the previous set of items.
 *
 * @return \\Illuminate\\Pagination\\Cursor|null
 */',
        'startLine' => 72,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Pagination',
        'declaringClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'implementingClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'currentClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'aliasName' => NULL,
      ),
      'nextCursor' => 
      array (
        'name' => 'nextCursor',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the "cursor" of the next set of items.
 *
 * @return \\Illuminate\\Pagination\\Cursor|null
 */',
        'startLine' => 79,
        'endLine' => 79,
        'startColumn' => 5,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Pagination',
        'declaringClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'implementingClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'currentClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'aliasName' => NULL,
      ),
      'perPage' => 
      array (
        'name' => 'perPage',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine how many items are being shown per page.
 *
 * @return int
 */',
        'startLine' => 86,
        'endLine' => 86,
        'startColumn' => 5,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Pagination',
        'declaringClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'implementingClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'currentClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'aliasName' => NULL,
      ),
      'cursor' => 
      array (
        'name' => 'cursor',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the current cursor being paginated.
 *
 * @return \\Illuminate\\Pagination\\Cursor|null
 */',
        'startLine' => 93,
        'endLine' => 93,
        'startColumn' => 5,
        'endColumn' => 29,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Pagination',
        'declaringClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'implementingClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'currentClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'aliasName' => NULL,
      ),
      'hasPages' => 
      array (
        'name' => 'hasPages',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if there are enough items to split into multiple pages.
 *
 * @return bool
 */',
        'startLine' => 100,
        'endLine' => 100,
        'startColumn' => 5,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Pagination',
        'declaringClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'implementingClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'currentClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'aliasName' => NULL,
      ),
      'hasMorePages' => 
      array (
        'name' => 'hasMorePages',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if there are more items in the data source.
 *
 * @return bool
 */',
        'startLine' => 107,
        'endLine' => 107,
        'startColumn' => 5,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Pagination',
        'declaringClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'implementingClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'currentClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'aliasName' => NULL,
      ),
      'path' => 
      array (
        'name' => 'path',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the base path for paginator generated URLs.
 *
 * @return string|null
 */',
        'startLine' => 114,
        'endLine' => 114,
        'startColumn' => 5,
        'endColumn' => 27,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Pagination',
        'declaringClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'implementingClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'currentClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'aliasName' => NULL,
      ),
      'isEmpty' => 
      array (
        'name' => 'isEmpty',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the list of items is empty or not.
 *
 * @return bool
 */',
        'startLine' => 121,
        'endLine' => 121,
        'startColumn' => 5,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Pagination',
        'declaringClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'implementingClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'currentClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'aliasName' => NULL,
      ),
      'isNotEmpty' => 
      array (
        'name' => 'isNotEmpty',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the list of items is not empty.
 *
 * @return bool
 */',
        'startLine' => 128,
        'endLine' => 128,
        'startColumn' => 5,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Pagination',
        'declaringClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'implementingClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'currentClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'aliasName' => NULL,
      ),
      'render' => 
      array (
        'name' => 'render',
        'parameters' => 
        array (
          'view' => 
          array (
            'name' => 'view',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 137,
                'endLine' => 137,
                'startTokenPos' => 217,
                'startFilePos' => 2849,
                'endTokenPos' => 217,
                'endFilePos' => 2852,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 137,
            'endLine' => 137,
            'startColumn' => 28,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'data' => 
          array (
            'name' => 'data',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 137,
                'endLine' => 137,
                'startTokenPos' => 224,
                'startFilePos' => 2863,
                'endTokenPos' => 225,
                'endFilePos' => 2864,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 137,
            'endLine' => 137,
            'startColumn' => 42,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Render the paginator using a given view.
 *
 * @param  string|null  $view
 * @param  array  $data
 * @return string
 */',
        'startLine' => 137,
        'endLine' => 137,
        'startColumn' => 5,
        'endColumn' => 53,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Contracts\\Pagination',
        'declaringClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'implementingClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
        'currentClassName' => 'Illuminate\\Contracts\\Pagination\\CursorPaginator',
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