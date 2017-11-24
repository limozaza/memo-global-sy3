<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Personne;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonneController extends Controller
{
    /**
     * @Route(path="/personne/new",name="personne_new")
     */
    public function indexAction()
    {
        $personne = new Personne();
        $personne->setName("Zakaria");
        $personne->setProfession("Developpeur");

        $em = $this->getDoctrine()->getManager();
        $em->persist($personne);
        $em->flush();

        return new Response('Personne cree!');
        //return $this->render('AppBundle:Personne:index.html.twig');
    }

    /**
     * @Route(path="/personnes",name="personnes_list")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $personnes = $em->getRepository('AppBundle:Personne')->findAll();
        return $this->render('AppBundle:Personne:list.html.twig',[
            'personnes'=>$personnes
        ]);
    }
}
