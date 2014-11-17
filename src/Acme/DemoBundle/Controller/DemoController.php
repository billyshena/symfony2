<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Acme\DemoBundle\Form\ContactType;
use Acme\DemoBundle\Entity\User;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DemoController extends Controller
{
    /**
     * @Route("/", name="_demo")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/hello/{name}", name="_demo_hello")
     * @Template()
     */

    /** Action sending back some JSON stuff using JsonReponse */
    public function sayAction(){
        return new JsonResponse(array('id' => 4));
    }

    // Action to render some random view
    public function helloAction(){
        return $this->render('AcmeDemoBundle:Demo:hello.html.twig', array(
            'name' => 'Billy Shen',
        ));
    }

    // Action to set a value in the $_SESSION
    public function sessionAction(Request $request){
        $session = $request->getSession();
        $session->set('user_id',4);
    }


    // Action to display a FLASH SESSION message that will only exist on the redirected route , it is destroyed later on
    public function flashAction(Request $request){
        $session = $request->getSession();
        $session->getFlashbag()->add('info','Something information here');
        return $this->redirect($this->generateUrl('view_product', array('id' => 5)));
    }


    // Action sending back a Response with different GET parameters passed
    public function viewAction($id){
        return new Response('You are viewing the product with id = ' .$id);
    }


    // Action to check the request type ( GET,POST,PUT,DELETE)
    public function requestAction(Request $request){
        return new Response('You are doing a ' . $request->getMethod() . ' HTTP request');
    }


    // Action to INSERT a new User object into the database
    public function createAction()
    {
        $user = new User(); // New user object
        $em = $this->getDoctrine()->getManager(); // Gettting the doctrine manager to make the database persistance
        $em->persist($user); // Persistance called
        $em->flush(); // INSERT
        return new Response('Utilisateur créé : '.$user->getId());
    }


    // Action to FIND an User object
    public function showAction(){
        $user = $this->getDoctrine()
            ->getRepository('AcmeDemoBundle:User')
            ->find(2); // SELECT * FROM USER WHERE ID =

        if (!$user) {
            throw $this->createNotFoundException(
                'Aucun produit trouvé pour cet id : '.$user->getId()
            );
        }

        return new Response('Utilisateur trouvé avec id ' .$user->getId());
    }


    /**
     * @Route("/contact", name="_demo_contact")
     * @Template()
     */
    public function contactAction(Request $request)
    {
        $form = $this->createForm(new ContactType());
        $form->handleRequest($request);

        if ($form->isValid()) {
            $mailer = $this->get('mailer');

            // .. setup a message and send it
            // http://symfony.com/doc/current/cookbook/email.html

            $request->getSession()->getFlashBag()->set('notice', 'Message sent!');

            return new RedirectResponse($this->generateUrl('_demo'));
        }

        return array('form' => $form->createView());
    }
}
