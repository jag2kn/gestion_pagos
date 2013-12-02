<?php

namespace Jorge\GespagosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

use Jorge\GespagosBundle\Form\LoginForm;

use Jorge\GespagosBundle\Entity\Usuario;
use Jorge\GespagosBundle\Form\UsuarioType;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$user = $this->getUser();
    	if (isset($user)){
	    	return $this->redirect($this->generateUrl('pagos'));
    	}
        return $this->render('JorgeGespagosBundle:Default:index.html.twig', array('user' => $user));
    }

    public function registroAction()
    {
    	$request = $this->get('request');
		$entity = new Usuario();
        $form = $this->createForm(new UsuarioType(), $entity, array(
            'action' => $this->generateUrl('registro'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Registrarse'));
        
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $factory = $this->get('security.encoder_factory');
            $encoder = $factory->getEncoder($entity);
			$password = $encoder->encodePassword($entity->getPassword(), "");
			$entity->setClave($password);
			$entity->setSalt("");
            
            $em->persist($entity);
            $em->flush();
            
            //ToDo: Colocar en la bolsa el mensaje sobre el registro

            return $this->redirect($this->generateUrl('homepage'));
        }

        return $this->render('JorgeGespagosBundle:Default:registro.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));

    }

    public function loginAction()
    {
		$request = $this->getRequest();
		$session = $request->getSession();
		// get the login error if there is one
		if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
			$error = $request->attributes->get(
				SecurityContext::AUTHENTICATION_ERROR
			);
		} else {
			$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
			$session->remove(SecurityContext::AUTHENTICATION_ERROR);
		}

        $em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository('JorgeGespagosBundle:Usuario')->findAll();

		return $this->render(
				'JorgeGespagosBundle:Default:login.html.twig',
				array(
					// last username entered by the user
					'last_username' => $session->get(SecurityContext::LAST_USERNAME),
					'error'=> $error,
					'usuarios'=>$usuarios,
				)
			);
	}
}
