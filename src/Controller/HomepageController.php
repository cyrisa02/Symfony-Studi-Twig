<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/homepage", name="app_homepage")
     */
    public function homepage(): Response
    {
        $welcome = 'Bienvenue !';
        $visitorNumber = 42;
        $isHomepage = true;
        $knowEverythingAboutTwig = false;
        $pageLoadTime = 0.23;

        return $this->render('homepage.html.twig', [
            'welcome' => $welcome,
            'visitorNumber' => $visitorNumber,
            'isHomepage' => $isHomepage,
            'knowEverythingAboutTwig' => $knowEverythingAboutTwig,
            'pageLoadTime' => $pageLoadTime,
        ]);
    }
}
