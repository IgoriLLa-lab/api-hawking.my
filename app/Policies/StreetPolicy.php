<?php

namespace App\Policies;

use App\Models\Api\V1\Street;
use App\Models\Api\V1\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StreetPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Api\V1\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Api\V1\User  $user
     * @param  \App\Models\Api\V1\Street  $street
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Street $street)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Api\V1\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Api\V1\User  $user
     * @param  \App\Models\Api\V1\Street  $street
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Street $street)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Api\V1\User  $user
     * @param  \App\Models\Api\V1\Street  $street
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Street $street)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Api\V1\User  $user
     * @param  \App\Models\Api\V1\Street  $street
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Street $street)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Api\V1\User  $user
     * @param  \App\Models\Api\V1\Street  $street
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Street $street)
    {
        //
    }
}
