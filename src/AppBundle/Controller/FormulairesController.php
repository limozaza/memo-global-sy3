<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Entity\Categorie;
use AppBundle\Entity\TestClientParPays;
use AppBundle\Form\TestClientParPaysType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FormulairesController extends Controller
{

    /**
     * @Route(path="/formulaires", name="forms_index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();



        return $this->render('AppBundle:Formulaires:index.html.twig');
    }

    /**
     * @Route(path="/TestClientParPays", name="forms_TestClientParPays")
     */
    public function testClientParPaysAction(Request $request)
    {
        $testClientParPays = new TestClientParPays();
        $testClientParPays->setPays('en');
        $form = $this->createForm(TestClientParPaysType::class, $testClientParPays);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            dump($form->getData());
        }



        return $this->render('AppBundle:Formulaires:testClientParPays.html.twig',[
            'form' => $form->createView()
        ]);
    }
}
