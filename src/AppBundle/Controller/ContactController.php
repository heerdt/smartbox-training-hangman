<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController as Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends Controller
{
    /**
     * @Route("/contact", name="app_contact_index", methods={"GET"})
     */
    public function indexAction()
    {
        return $this->render('Contact/index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/contact", name="app_contact_send", methods={"POST"})
     */
    public function sendAction(Request $request, \Swift_Mailer $mailer)
    {
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('maycon@heerdt.com.br')
            ->setTo($request->get('Email'))
            ->setSubject($request->get('subject'))
            ->setBody(
                $this->renderView(
                    '@App/Mail/contact.html.twig'
                ),
                'text/html'
            )
        ;

        $mailer->send($message);

        $this->addFlash("success", "Message was sent!");

        return $this->render('Contact/index.html.twig', array(
            // ...
        ));
    }
}
