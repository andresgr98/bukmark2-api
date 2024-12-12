<?php

namespace App\User\Infrastructure;

use App\Entity\User;
use App\Shared\DoctrineRepository;
use App\User\Domain\UserRepository;

class UserMySqlRepository extends DoctrineRepository implements UserRepository
{
    public function save(User $user): void
    {
        $this->persist($user);
    }

    // public function searchByProductAndUser(array $criteria): ?CartProducts
    // {
    //     return $this->repository(CartProducts::class)->findOneBy($criteria);
    // }

    // public function searchAll()
    // {
    //     return $this->repository(CartProducts::class)->findAll();
    // }

    // public function delete(CartProducts $cartProducts): void
    // {
    //     $this->remove($cartProducts);
    // }

    // public function searchByUser(int $userId)
    // {
    //     return $this->repository(CartProducts::class)->findBy(["user" => $userId]);
    // }
}
