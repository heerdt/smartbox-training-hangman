<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="app_main_index", methods={"GET"}),
     */
    public function indexAction(Request $request)
    {
        return $this->render('Game/index.html.twig', array(
            // ...
        ));
    }
}
