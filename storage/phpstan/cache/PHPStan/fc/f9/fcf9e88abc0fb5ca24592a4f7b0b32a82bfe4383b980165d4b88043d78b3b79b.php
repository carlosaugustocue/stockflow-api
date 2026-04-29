<?php declare(strict_types = 1);

// osfsl-/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Bus/PendingDispatch.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Bus\PendingDispatch
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-617330fc827f8a323abc2eed8b7ec45d3c704a649e45f6cbf292fcfb1f5af4c8-8.3.30-6.70.0.0',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'filename' => '/home/newton/Escritorio/proyecto-nuclear/stockflow-api/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Bus/PendingDispatch.php',
      ),
    ),
    'namespace' => 'Illuminate\\Foundation\\Bus',
    'name' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
    'shortName' => 'PendingDispatch',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 16,
    'endLine' => 298,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Foundation\\Queue\\InteractsWithUniqueJobs',
      1 => 'Illuminate\\Queue\\Attributes\\ReadsQueueAttributes',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'job' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'name' => 'job',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The job.
 *
 * @var mixed
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 26,
        'endLine' => 26,
        'startColumn' => 5,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'afterResponse' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'name' => 'afterResponse',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 33,
            'endLine' => 33,
            'startTokenPos' => 92,
            'startFilePos' => 788,
            'endTokenPos' => 92,
            'endFilePos' => 792,
          ),
        ),
        'docComment' => '/**
 * Indicates if the job should be dispatched immediately after sending the response.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 33,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 37,
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
          'job' => 
          array (
            'name' => 'job',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 33,
            'endColumn' => 36,
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
 * Create a new pending job dispatch.
 *
 * @param  mixed  $job
 */',
        'startLine' => 40,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'onConnection' => 
      array (
        'name' => 'onConnection',
        'parameters' => 
        array (
          'connection' => 
          array (
            'name' => 'connection',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 51,
            'endLine' => 51,
            'startColumn' => 34,
            'endColumn' => 44,
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
 * Set the desired connection for the job.
 *
 * @param  \\BackedEnum|string|null  $connection
 * @return $this
 */',
        'startLine' => 51,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'onQueue' => 
      array (
        'name' => 'onQueue',
        'parameters' => 
        array (
          'queue' => 
          array (
            'name' => 'queue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 64,
            'endLine' => 64,
            'startColumn' => 29,
            'endColumn' => 34,
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
 * Set the desired queue for the job.
 *
 * @param  \\BackedEnum|string|null  $queue
 * @return $this
 */',
        'startLine' => 64,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'onGroup' => 
      array (
        'name' => 'onGroup',
        'parameters' => 
        array (
          'group' => 
          array (
            'name' => 'group',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 79,
            'endLine' => 79,
            'startColumn' => 29,
            'endColumn' => 34,
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
 * Set the desired job "group".
 *
 * This feature is only supported by some queues, such as Amazon SQS.
 *
 * @param  \\UnitEnum|string  $group
 * @return $this
 */',
        'startLine' => 79,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'withDeduplicator' => 
      array (
        'name' => 'withDeduplicator',
        'parameters' => 
        array (
          'deduplicator' => 
          array (
            'name' => 'deduplicator',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 94,
            'endLine' => 94,
            'startColumn' => 38,
            'endColumn' => 50,
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
 * Set the desired job deduplicator callback.
 *
 * This feature is only supported by some queues, such as Amazon SQS FIFO.
 *
 * @param  callable|null  $deduplicator
 * @return $this
 */',
        'startLine' => 94,
        'endLine' => 99,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'allOnConnection' => 
      array (
        'name' => 'allOnConnection',
        'parameters' => 
        array (
          'connection' => 
          array (
            'name' => 'connection',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 107,
            'endLine' => 107,
            'startColumn' => 37,
            'endColumn' => 47,
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
 * Set the desired connection for the chain.
 *
 * @param  \\BackedEnum|string|null  $connection
 * @return $this
 */',
        'startLine' => 107,
        'endLine' => 112,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'allOnQueue' => 
      array (
        'name' => 'allOnQueue',
        'parameters' => 
        array (
          'queue' => 
          array (
            'name' => 'queue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 120,
            'endLine' => 120,
            'startColumn' => 32,
            'endColumn' => 37,
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
 * Set the desired queue for the chain.
 *
 * @param  \\BackedEnum|string|null  $queue
 * @return $this
 */',
        'startLine' => 120,
        'endLine' => 125,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'delay' => 
      array (
        'name' => 'delay',
        'parameters' => 
        array (
          'delay' => 
          array (
            'name' => 'delay',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 133,
            'endLine' => 133,
            'startColumn' => 27,
            'endColumn' => 32,
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
 * Set the desired delay in seconds for the job.
 *
 * @param  \\DateTimeInterface|\\DateInterval|int|null  $delay
 * @return $this
 */',
        'startLine' => 133,
        'endLine' => 138,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'withoutDelay' => 
      array (
        'name' => 'withoutDelay',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the delay for the job to zero seconds.
 *
 * @return $this
 */',
        'startLine' => 145,
        'endLine' => 150,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'afterCommit' => 
      array (
        'name' => 'afterCommit',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that the job should be dispatched after all database transactions have committed.
 *
 * @return $this
 */',
        'startLine' => 157,
        'endLine' => 162,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'beforeCommit' => 
      array (
        'name' => 'beforeCommit',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that the job should not wait until database transactions have been committed before dispatching.
 *
 * @return $this
 */',
        'startLine' => 169,
        'endLine' => 174,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'chain' => 
      array (
        'name' => 'chain',
        'parameters' => 
        array (
          'chain' => 
          array (
            'name' => 'chain',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 182,
            'endLine' => 182,
            'startColumn' => 27,
            'endColumn' => 32,
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
 * Set the jobs that should run if this job is successful.
 *
 * @param  array  $chain
 * @return $this
 */',
        'startLine' => 182,
        'endLine' => 187,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'afterResponse' => 
      array (
        'name' => 'afterResponse',
        'parameters' => 
        array (
          'afterResponse' => 
          array (
            'name' => 'afterResponse',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 195,
                'endLine' => 195,
                'startTokenPos' => 455,
                'startFilePos' => 4129,
                'endTokenPos' => 455,
                'endFilePos' => 4132,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 195,
            'endLine' => 195,
            'startColumn' => 35,
            'endColumn' => 55,
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
 * Indicate that the job should be dispatched after the response is sent to the browser.
 *
 * @param  bool  $afterResponse
 * @return $this
 */',
        'startLine' => 195,
        'endLine' => 200,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'shouldDispatch' => 
      array (
        'name' => 'shouldDispatch',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the job should be dispatched.
 *
 * @return bool
 */',
        'startLine' => 207,
        'endLine' => 215,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'acquireDebounceLock' => 
      array (
        'name' => 'acquireDebounceLock',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Acquire a debounce lock for the job and set its delay.
 *
 * @return void
 *
 * @throws LogicException
 */',
        'startLine' => 224,
        'endLine' => 247,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      'getJob' => 
      array (
        'name' => 'getJob',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the underlying job instance.
 *
 * @return mixed
 */',
        'startLine' => 254,
        'endLine' => 257,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      '__call' => 
      array (
        'name' => '__call',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 266,
            'endLine' => 266,
            'startColumn' => 28,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 266,
            'endLine' => 266,
            'startColumn' => 37,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dynamically proxy methods to the underlying job.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return $this
 */',
        'startLine' => 266,
        'endLine' => 271,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'aliasName' => NULL,
      ),
      '__destruct' => 
      array (
        'name' => '__destruct',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Handle the object\'s destruction.
 *
 * @return void
 */',
        'startLine' => 278,
        'endLine' => 297,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Bus',
        'declaringClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'implementingClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
        'currentClassName' => 'Illuminate\\Foundation\\Bus\\PendingDispatch',
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