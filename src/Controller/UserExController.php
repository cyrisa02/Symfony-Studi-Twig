<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserExController extends AbstractController
{
    /**
     * @Route("/user_ex", name="app_user_ex")
     */
    private const USERS = [
        ['name' => 'Nicolas', 'connected' => false],
        ['name' => 'Alice', 'connected' => true],
        ['name' => 'Grégory', 'connected' => false],
    ];

    public function list(): Response
    {
        return $this->render('user_ex.html.twig', [
            'users' => self::USERS,
        ]);
    }

    public function item(int $id): Response
    {
        return $this->render('user_ex.html.twig', [
            'user' => self::USERS[$id],
        ]);
    }
}
