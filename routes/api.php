<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::get('/v1/health', static fn (): array => ['status' => 'ok']);
