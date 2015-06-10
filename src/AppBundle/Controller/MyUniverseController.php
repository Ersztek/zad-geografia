<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyUniverseController extends Controller
{

    /**
     * @Route("/universe.html", name="universe")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Universe')->findAll();

        return $this->render(
            'default/universe.html.twig',
            array(
                'entities' => $entities,
            )
        );
    }

}
