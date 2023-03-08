<?php

namespace App\Controller;

use App\Classe\Mail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $mail = new Mail();
        $mail->send('arnaudgif@hotmail.fr', 'toure','test copavia', "bonjour nneooe");

        return $this->render('home/index.html.twig');
    }
}
