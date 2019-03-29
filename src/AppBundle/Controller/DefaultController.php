<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Hobby;
use AppBundle\Entity\Banner;
use Doctrine\Common\Collections\ArrayCollection;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }



    public function bannerAction()
    {
        $em = $this->getDoctrine()->getManager();


        $newrole=null;
        $role=$this->getUser()->getRole();
        switch ($role) 
        {
            case 'admin': $newrole=0;  break;
            case 'student': $newrole=1;  break;
            case 'professor': $newrole=2;  break;
            case 'school': $newrole=3;  break;
        }
        
        
        $banner = $em->getRepository('AppBundle:Banner')->findBy(array('role' => $newrole));
        
        return $this->render('default/banner.html.twig', array(
            'banners' => $banner,
        ));
    }





    /**
     * Creates a new hobby entity.
     *
     * @Route("/add_hobby", name="add_hobby")
     * @Method({"GET", "POST"})
     */
 
    public function addHobbyAction(Request $request)
    {
        // if($form->isSubmitted() && $form->isValid())
        // {
        //     // $contact= $form->getData();

        //     // $entityManager = $this->getDoctrine()->getManager();
        //     // $entityManager->persist($contact);
        //     // $entityManager->flush();

        //     // return $this->redirectToRoute("index");
        // }


        $result="Hobby Added";

        $hobbies = $request->get('name');
        for ($i=0; $i < count($hobbies); $i++) 
        { 
            $hobby = new Hobby();

            $user = $this->container->get('security.context')->getToken()->getUser();
            $hobby->setUser($user);

            $hobby->setName($hobbies[$i]);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($hobby);
            $entityManager->flush();
        }


       return new Response($result);

    }


}
