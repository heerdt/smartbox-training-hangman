<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController as Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/game")
 */
class GameController extends Controller
{
    /**
     * @Route(methods={"GET"}, name="app_game_index")
     */
    public function gameAction()
    {
        return $this->render('Game/game.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/won", methods={"GET"}, name="app_game_won")
     */
    public function wonAction()
    {
        return $this->render('Game/won.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/failed", name="app_game_failed", methods={"GET"})
     */
    public function failedAction()
    {
        return $this->render('Game/failed.html.twig', array(
            // ...
        ));
    }

    public function sidebar()
    {
        return $this->render('Game/sidebar.html.twig', array(
            'users' => array_fill(0, 5, 'user')
        ));
    }

}
