<?php

declare(strict_types=1);

namespace Modules\Auth\Application\Actions;

use App\Models\User;

final class GetAuthenticatedUserAction
{
    public function __invoke(User $user): User
    {
        return $user->load('roles.permissions');
    }
}
