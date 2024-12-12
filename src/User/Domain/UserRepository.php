<?php

namespace App\User\Domain;

use App\Entity\User;

interface UserRepository
{
    public function save(User $user): void;

    // public function search(int $id): ?User;

    // public function searchByCriteria();
}
