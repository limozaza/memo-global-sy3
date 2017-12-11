<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
}
