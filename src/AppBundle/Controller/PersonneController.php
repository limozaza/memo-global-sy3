<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Personne;
use AppBundle\Entity\Vehicule;
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
        $personne->setName("Kassym");
        $personne->setProfession("Bébé");

        $vehicule = new Vehicule();
        $vehicule->setName("A3 6V");
        $vehicule->setMarque("AUDI");
        $vehicule->setPersonne($personne);

        $em = $this->getDoctrine()->getManager();
        $em->persist($personne);
        $em->persist($vehicule);
        $em->flush();

        return new Response('<html><body>Personne cree!</body></html>');
        //return $this->render('AppBundle:Personne:index.html.twig');
    }

    /**
     * @Route(path="/personnes",name="personnes_list")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $personnes = $em->getRepository('AppBundle:Personne')->findAllPublished();
        return $this->render('AppBundle:Personne:list.html.twig',[
            'personnes'=>$personnes
        ]);
    }
    /**
     * @Route(path="/personne/{personneName}",name="personne_show")
     */
    public function showAction($personneName)
    {
        $em = $this->getDoctrine()->getManager();
        $personne = $em->getRepository('AppBundle:Personne')->findOneBy([
            'name'=> $personneName
        ]);
        if(!$personne)
        {
            throw $this->createNotFoundException('No Personne found');
        }
        return $this->render('AppBundle:Personne:show.html.twig',[
            'personne'=>$personne
        ]);
    }

    /**
     * @Route(path="/personne/{name}/vehicules",name="personne_show_vehicules")
     */
    public function getVehiculesAction(Personne $personne)
    {
        dump($personne);exit();
    }
}
