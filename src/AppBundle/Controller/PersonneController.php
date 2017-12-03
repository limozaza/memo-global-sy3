<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Personne;
use AppBundle\Entity\Vehicule;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
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


        /*$personne = new Personne();
        $personne->setName("Zakaria");
        $personne->setProfession("Developpeur");

        $vehicule1 = new Vehicule();
        $vehicule1->setName("A3");
        $vehicule1->setMarque("AUDI");
        $vehicule1->setPersonne($personne);

        $vehicule2 = new Vehicule();
        $vehicule2->setName("Kia");
        $vehicule2->setMarque("CEED");
        $vehicule2->setPersonne($personne);


        $em = $this->getDoctrine()->getManager();
        $em->persist($personne);
        $em->persist($vehicule1);$em->persist($vehicule2);
        $em->flush();*/

        return new Response('<html><body>Personne cree!</body></html>');
        //return $this->render('AppBundle:Personne:index.html.twig');
    }

    /**
     * @Security("is_granted('ROLE_ADMIN')")
     * @Route(path="/personnes",name="personnes_list")
     */
    public function listAction()
    {
        /*
        if (!$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('GET OUT!');
        }*/
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
        foreach ( $personne->getVehicules() as $item) {
            dump($item);
        }
        exit();
    }
}
