<?php

namespace App\User\Application;

class CreateUserCommand
{
    public function __construct(
        private readonly string $email,
        private readonly string $password,
        private readonly string $firstName,
        private readonly string $lastName,
    ) {}

    public function email(): string
    {
        return $this->email;
    }
    public function password(): string
    {
        return $this->password;
    }
    public function firstName(): string
    {
        return $this->firstName;
    }
    public function lastName(): string
    {
        return $this->lastName;
    }
}
