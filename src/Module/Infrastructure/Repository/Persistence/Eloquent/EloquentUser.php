<?php

namespace Infrastructure\Repository\Persistence\Eloquent;

use Domain\Entities\User;
use Domain\Repositories\UserRepositoryInterface;
use Infrastructure\Repository\Persistence\Eloquent\Models\UserModel;

class EloquentUser implements UserRepositoryInterface
{

    public function allUsers()
    {
        return UserModel::all();
    }

    public function getUserFromId(string $id)
    {
        // TODO: Implement getUserFromId() method.
    }

    public function saveUser(User $user)
    {
        // TODO: Implement saveUser() method.
    }

    public function updateUser(User $user)
    {
        // TODO: Implement updateUser() method.
    }

    public function deleteUser(User $user)
    {
        // TODO: Implement deleteUser() method.
    }
}
