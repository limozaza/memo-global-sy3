<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Identite;
use AppBundle\Form\IdentiteType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $isSpam = $this->get('app.spam');
        $a = $isSpam->isSpam("Bonjour Monsieur");
        return $this->render('AppBundle:default:index.html.twig',['isSpam' => $a]);
    }


    /**
     * @Route("/form", name="form")
     */
    public function formAction(Request $request)
    {
        $identite = new Identite();
        $form = $this->createForm(IdentiteType::class, $identite);
        $form->handleRequest($request);

        if($form->isValid() && $form->isSubmitted()){
            $em =$this->getDoctrine()->getManager();
            $em->persist($identite);
            $em->flush();
            //dump($form->getData());exit();
        }

        return $this->render('AppBundle:default:form.html.twig',['form' => $form->createView()]);
    }
}
