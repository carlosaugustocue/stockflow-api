<?php

declare(strict_types=1);

namespace Modules\Auth\Application\Actions;

use App\Models\User;

final class LogoutAction
{
    public function __invoke(User $user): void
    {
        $user->currentAccessToken()?->delete();
    }
}
