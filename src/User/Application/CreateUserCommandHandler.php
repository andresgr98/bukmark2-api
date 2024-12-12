<?php

namespace App\User\Application;

use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class CreateUserCommandHandler
{
    public function __construct(
        private readonly CreateUser $createUser
    ) {}

    public function __invoke(CreateUserCommand $command): void
    {
        $this->createUser->create(
            $command->email(),
            $command->password(),
            $command->firstName(),
            $command->lastName()
        );
    }
}
