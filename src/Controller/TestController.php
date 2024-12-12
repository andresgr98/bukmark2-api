<?php

namespace App\Controller;

use App\User\Application\CreateUserCommand;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/TestController.php',
        ]);
    }

    #[Route('/users', name: 'register user', methods: 'POST')]
    public function register(Request $request, MessageBusInterface $bus): JsonResponse
    {
        $request = json_decode($request->getContent(), true);
        $command = new CreateUserCommand($request["email"], $request["password"], $request["firstName"], $request["lastName"]);
        $bus->dispatch($command);
        return new JsonResponse("ok", HttpFoundationResponse::HTTP_CREATED);
    }
}
