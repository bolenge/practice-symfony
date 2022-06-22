<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WelcomeController extends AbstractController
{

  /**
   * @Route("/", name="home")
   */
  public function home()
  {
    return new Response('Welcome Here !');
  }

}