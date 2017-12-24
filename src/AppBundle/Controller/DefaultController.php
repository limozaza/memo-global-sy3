<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Identite;
use AppBundle\Form\IdentiteType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
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
     * @Route("/react01", name="react01")
     */
    public function react01Action(Request $request)
    {
        return $this->render('AppBundle:default:react01.html.twig');
    }

    /***********************
     * React/Redux appel ajax
     **********************/
    /**
     * @Route("/react01/aja", name="react01_ajax", options={"expose"=true})
     * @Method({"GET"})
     */
    public function react01AjaxAction(Request $request){
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('AppBundle:Categorie')->findAll();

        $formatted = [];
        foreach ($categories as $categorie) {
            $formatted[] = [
                'id' => $categorie->getId(),
                'name' => $categorie->getName(),
            ];
        }
        return new JsonResponse($formatted);
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
