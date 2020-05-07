<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
    * @Route("/home", name="home")
    */
    public function home()
    {
      return $this->render('default/home.html.twig', [
          'headline' => 'brasstonality headline',
          'content' => 'brasstonality content',
      ]);
    }

    /**
    * @Route("/", name="index")
    */
    public function index()
    {
      return $this->render('default/index.html.twig', [
          'headline' => 'brasstonality headline',
          'content' => 'brasstonality content',
      ]);
    }
}
