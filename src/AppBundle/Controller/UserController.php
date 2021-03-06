<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Form\UserRegisterationForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends Controller
{

    /**
     * @Route("/register", name="user_register")
     */
    public function registerAction(Request $request)
    {
        $form= $this->createForm(UserRegisterationForm::class);
        $form->handleRequest($request);

        if($form->isValid()){
            /** @var User $user */
            $user = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', "Bienvenue ".$user->getEmail());
            return $this->redirectToRoute('homepage');
        }

        return $this->render('AppBundle:user:register.html.twig', array('form' => $form->createView()));
    }
}
