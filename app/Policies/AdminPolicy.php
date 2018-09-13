<?php

namespace App\Policies;

use TCG\Voyager\Contracts\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\FileTranslation;
use TCG\Voyager\Policies\BasePolicy;

class AdminPolicy extends BasePolicy
{
    use HandlesAuthorization;

    /**
     * Check if user has an associated permission.
     *
     * @param \TCG\Voyager\Contracts\User $user
     * @param object                      $model
     * @param string                      $action
     *
     * @return bool
     */
    protected function checkPermission(User $user, $model, $action)
    {
        return $user->hasPermission($action);
    }
}
