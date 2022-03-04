<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageExController extends AbstractController
{
    /**
     * @Route("/homepage_ex", name="app_homepage_ex")
     */
    public function homepage()
    {
        $lastPost = new class() {
            private string $title;
            private \DateTime $createdAt;

            public function __construct()
            {
                $this->title = 'Mon article';
                $this->createdAt = new \DateTime();
            }

            public function getTitle(): string
            {
                return $this->title;
            }

            public function getCreatedAt(): \DateTime
            {
                return $this->createdAt;
            }
        };

        return $this->render('homepage_ex.html.twig', [
            'title' => 'Page d\'accueil',
            'content' => 'Ceci est le contenu de ma page d\'accueil',
            'lastPost' => $lastPost,
        ]);
    }
}
