<?php

namespace Infrastructure\Persistence\Eloquent;

use Domain\Entities\User;

class EloquentUser implements \Domain\Repositories\UserRepositoryInterface
{

    public function allUsers()
    {
        // TODO: Implement allUsers() method.
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
