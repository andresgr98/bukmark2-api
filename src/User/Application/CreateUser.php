<?php

namespace App\User\Application;

use App\Entity\User;
use App\User\Domain\UserRepository;

use function Symfony\Component\Clock\now;

class CreateUser
{

    public function __construct(private readonly UserRepository $userRepository) {}
    public function create(
        string $email,
        string $password,
        string $firstName,
        string $lastName
    ): User {
        $user = new User();
        $user->setEmail($email);
        $user->setPassword($password);
        $user->setFirstName($firstName);
        $user->setLastName($lastName);
        $user->setCreatedAt(now());
        $user->setUpdatedAt(now());
        $this->userRepository->save($user);
        return $user;
    }
}
