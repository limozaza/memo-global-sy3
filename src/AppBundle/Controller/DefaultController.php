<?php

namespace AppBundle\Controller;

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
}
