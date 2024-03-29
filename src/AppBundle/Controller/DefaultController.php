<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $users = $this->getDoctrine()->getRepository('AppBundle:User')->findAll();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'users' => $users,
        ]);
    }
}
