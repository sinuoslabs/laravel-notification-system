<?php

namespace Domain\Repositories;

use Domain\Entities\User;

interface UserRepositoryInterface
{
    public function allUsers();

    public function getUserFromId(string $id);

    public function saveUser(User $user);

    public function updateUser(User $user);

    public function deleteUser(User $user);
}
