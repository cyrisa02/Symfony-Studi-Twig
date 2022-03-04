<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="app_user")
     */
    public function user()
    {
        $user = new class() {
            public $name = 'Bruce';
            private $surname = 'Wayne';

            public function getSurname(): string
            {
                return $this->surname;
            }

            public function getFullName(): string
            {
                return $this->name.' '.$this->surname;
            }

            public function revealSecretIdentity(): string
            {
                return 'I\'m Batman.';
            }
        };

        return $this->render('user.html.twig', [
            'user' => $user,
        ]);
    }
}
