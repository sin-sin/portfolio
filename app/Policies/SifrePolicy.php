<?php

namespace App\Policies;

use App\User;
use App\Sifre;
use Illuminate\Auth\Access\HandlesAuthorization;

class SifrePolicy
{
    
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view the sifre.
     *
     * @param  \App\User  $user
     * @param  \App\Sifre $sifre
     *
     * @return mixed
     */
    public function view(User $user, Sifre $sifre)
    {
        return $user->name === 'Srdjan Sin Jovanovic';
    }
    
    /**
     * Determine whether the user can create sifres.
     *
     * @param  \App\User $user
     *
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->name === 'Srdjan Sin Jovanovic';
    }
    
    /**
     * Determine whether the user can update the sifre.
     *
     * @param  \App\User  $user
     * @param  \App\Sifre $sifre
     *
     * @return mixed
     */
    public function update(User $user, Sifre $sifre)
    {
        return $user->name === 'Srdjan Sin Jovanovic';
    }
    
    /**
     * Determine whether the user can delete the sifre.
     *
     * @param  \App\User  $user
     * @param  \App\Sifre $sifre
     *
     * @return mixed
     */
    public function delete(User $user, Sifre $sifre)
    {
        return $user->name === 'Srdjan Sin Jovanovic';
    }
}
