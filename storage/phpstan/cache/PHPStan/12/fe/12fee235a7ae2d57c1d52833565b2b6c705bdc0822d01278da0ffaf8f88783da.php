<?php declare(strict_types = 1);

// osfsl-/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../laravel/framework/src/Illuminate/Pagination/Cursor.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Pagination\Cursor
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-29b8ae08874fef361935814f11cf5cb4735bff3584788b1f9eae1bad5cf95ac5-8.3.30-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Pagination\\Cursor',
        'filename' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../laravel/framework/src/Illuminate/Pagination/Cursor.php',
      ),
    ),
    'namespace' => 'Illuminate\\Pagination',
    'name' => 'Illuminate\\Pagination\\Cursor',
    'shortName' => 'Cursor',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/** @implements Arrayable<array-key, mixed> */',
    'attributes' => 
    array (
    ),
    'startLine' => 10,
    'endLine' => 138,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Support\\Arrayable',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'parameters' => 
      array (
        'declaringClassName' => 'Illuminate\\Pagination\\Cursor',
        'implementingClassName' => 'Illuminate\\Pagination\\Cursor',
        'name' => 'parameters',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The parameters associated with the cursor.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 17,
        'endLine' => 17,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'pointsToNextItems' => 
      array (
        'declaringClassName' => 'Illuminate\\Pagination\\Cursor',
        'implementingClassName' => 'Illuminate\\Pagination\\Cursor',
        'name' => 'pointsToNextItems',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Determine whether the cursor points to the next or previous set of items.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 24,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 33,
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
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 33,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'pointsToNextItems' => 
          array (
            'name' => 'pointsToNextItems',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 32,
                'endLine' => 32,
                'startTokenPos' => 65,
                'startFilePos' => 715,
                'endTokenPos' => 65,
                'endFilePos' => 718,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 52,
            'endColumn' => 76,
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
 * Create a new cursor instance.
 *
 * @param  array  $parameters
 * @param  bool  $pointsToNextItems
 */',
        'startLine' => 32,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Pagination',
        'declaringClassName' => 'Illuminate\\Pagination\\Cursor',
        'implementingClassName' => 'Illuminate\\Pagination\\Cursor',
        'currentClassName' => 'Illuminate\\Pagination\\Cursor',
        'aliasName' => NULL,
      ),
      'parameter' => 
      array (
        'name' => 'parameter',
        'parameters' => 
        array (
          'parameterName' => 
          array (
            'name' => 'parameterName',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 46,
            'endLine' => 46,
            'startColumn' => 31,
            'endColumn' => 51,
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
 * Get the given parameter from the cursor.
 *
 * @param  string  $parameterName
 * @return string|null
 *
 * @throws \\UnexpectedValueException
 */',
        'startLine' => 46,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Pagination',
        'declaringClassName' => 'Illuminate\\Pagination\\Cursor',
        'implementingClassName' => 'Illuminate\\Pagination\\Cursor',
        'currentClassName' => 'Illuminate\\Pagination\\Cursor',
        'aliasName' => NULL,
      ),
      'parameters' => 
      array (
        'name' => 'parameters',
        'parameters' => 
        array (
          'parameterNames' => 
          array (
            'name' => 'parameterNames',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 61,
            'endLine' => 61,
            'startColumn' => 32,
            'endColumn' => 52,
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
 * Get the given parameters from the cursor.
 *
 * @param  array  $parameterNames
 * @return array
 */',
        'startLine' => 61,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Pagination',
        'declaringClassName' => 'Illuminate\\Pagination\\Cursor',
        'implementingClassName' => 'Illuminate\\Pagination\\Cursor',
        'currentClassName' => 'Illuminate\\Pagination\\Cursor',
        'aliasName' => NULL,
      ),
      'pointsToNextItems' => 
      array (
        'name' => 'pointsToNextItems',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine whether the cursor points to the next set of items.
 *
 * @return bool
 */',
        'startLine' => 73,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Pagination',
        'declaringClassName' => 'Illuminate\\Pagination\\Cursor',
        'implementingClassName' => 'Illuminate\\Pagination\\Cursor',
        'currentClassName' => 'Illuminate\\Pagination\\Cursor',
        'aliasName' => NULL,
      ),
      'pointsToPreviousItems' => 
      array (
        'name' => 'pointsToPreviousItems',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine whether the cursor points to the previous set of items.
 *
 * @return bool
 */',
        'startLine' => 83,
        'endLine' => 86,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Pagination',
        'declaringClassName' => 'Illuminate\\Pagination\\Cursor',
        'implementingClassName' => 'Illuminate\\Pagination\\Cursor',
        'currentClassName' => 'Illuminate\\Pagination\\Cursor',
        'aliasName' => NULL,
      ),
      'toArray' => 
      array (
        'name' => 'toArray',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the array representation of the cursor.
 *
 * @return array
 */',
        'startLine' => 93,
        'endLine' => 98,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Pagination',
        'declaringClassName' => 'Illuminate\\Pagination\\Cursor',
        'implementingClassName' => 'Illuminate\\Pagination\\Cursor',
        'currentClassName' => 'Illuminate\\Pagination\\Cursor',
        'aliasName' => NULL,
      ),
      'encode' => 
      array (
        'name' => 'encode',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the encoded string representation of the cursor to construct a URL.
 *
 * @return string
 */',
        'startLine' => 105,
        'endLine' => 108,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Pagination',
        'declaringClassName' => 'Illuminate\\Pagination\\Cursor',
        'implementingClassName' => 'Illuminate\\Pagination\\Cursor',
        'currentClassName' => 'Illuminate\\Pagination\\Cursor',
        'aliasName' => NULL,
      ),
      'fromEncoded' => 
      array (
        'name' => 'fromEncoded',
        'parameters' => 
        array (
          'encodedString' => 
          array (
            'name' => 'encodedString',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 116,
            'endLine' => 116,
            'startColumn' => 40,
            'endColumn' => 53,
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
 * Get a cursor instance from the encoded string representation.
 *
 * @param  string|null  $encodedString
 * @return static|null
 */',
        'startLine' => 116,
        'endLine' => 137,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Pagination',
        'declaringClassName' => 'Illuminate\\Pagination\\Cursor',
        'implementingClassName' => 'Illuminate\\Pagination\\Cursor',
        'currentClassName' => 'Illuminate\\Pagination\\Cursor',
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