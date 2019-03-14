<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Assignment;
//use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\HttpFoundation\Response;


/**
 * Assignment controller.
 *
 */
class AssignmentController extends Controller
{
    /**
     * Lists all assignment entities.
     *
     * @Route("/assignment/", name="assignment_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        //$current_user = $this->container->get('security.context')->getToken()->getUser();

        $assignments = $this->getUser()->getAssignments(); //$em->getRepository('AppBundle:Assignment')->findBy(array('user' => $current_user));

        //->findBy(array(), array('user_id' => '2'));

        return $this->render('assignment/index.html.twig', array(
            'assignments' => $assignments,
        ));
    }

    /**
     * Creates a new assignment entity.
     *
     * @Route("/assignment/new", name="assignment_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $assignment = new Assignment();
        $form = $this->createForm('AppBundle\Form\AssignmentType', $assignment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $current_user = $this->getUser();
            $assignment->setUser($current_user);

            $em->persist($assignment);
            $em->flush();

            return $this->redirectToRoute('assignment_show', array('id' => $assignment->getId()));
        }

        return $this->render('assignment/new.html.twig', array(
            'assignment' => $assignment,
            'form' => $form->createView(),
        ));
    }



    /**
     * Finds and displays a assignment entity.
     *
     * @Route("/assignment/{id}", name="assignment_show")
     * @Method("GET")
     */
    public function showAction(Assignment $assignment)
    {
        $deleteForm = $this->createDeleteForm($assignment);

        return $this->render('assignment/show.html.twig', array(
            'assignment' => $assignment,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing assignment entity.
     *
     * @Route("/assignment/{id}/edit", name="assignment_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Assignment $assignment)
    {
        $deleteForm = $this->createDeleteForm($assignment);
        $editForm = $this->createForm('AppBundle\Form\AssignmentType', $assignment);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('assignment_edit', array('id' => $assignment->getId()));
        }

        return $this->render('assignment/edit.html.twig', array(
            'assignment' => $assignment,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a assignment entity.
     *
     * @Route("/assignment/{id}", name="assignment_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Assignment $assignment)
    {
        $form = $this->createDeleteForm($assignment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($assignment);
            $em->flush();
        }

        return $this->redirectToRoute('assignment_index');
    }

    /**
     * Creates a form to delete a assignment entity.
     *
     * @param Assignment $assignment The assignment entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Assignment $assignment)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('assignment_delete', array('id' => $assignment->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


    /**
     * Lists all assignments of student .
     *
     * @Route("/student_assignment/", name="student_assignment")
     * @Method("GET")
     */
    public function studentAssignmentAction()
    {
        $em = $this->getDoctrine()->getManager();
        $current_user = $this->container->get('security.context')->getToken()->getUser();
        $shares = $em->getRepository('AppBundle:Share')->findBy(array('user' => $current_user->getId()));

        return $this->render('assignment/student_assignment.html.twig', array(
            'shares' => $shares,
        ));
    }

    /**
     * Finds and displays a assignment entity.
     *
     * @Route("/student_assignment/{id}", name="student_assignment_show")
     * @Method("GET")
     */
    public function studentAssignmentShowAction(Assignment $assignment)
    {

        $current_user = $this->container->get('security.context')->getToken()->getUser();


        $shares=$assignment->getShares();
        $users_shares = $shares->map(function($share){return number_format($share->getUser()->getId());});


        if (! in_array(number_format($current_user->getId()) ,$users_shares->toArray(),TRUE))
        {
            return $this->redirectToRoute("contact_index");
        }
        

        return $this->render('assignment/student_assignment_view.html.twig', array(
            'assignment' => $assignment,
        ));

    }



    /**
     *
     * @Route("/update_assignment_status/", name="update_assignment_status")
     * @Method("GET")
     */
    public function updateAssignmentStatus()
    {
        // $assignments = $em->getRepository('AppBundle:Assignment')->findAll();

        $em = $this->getDoctrine()->getManager();
        $q = $em->createQuery("update AppBundle\Entity\Assignment m set m.status = 0 where m.expire_date < '".date('Y-m-d')."'");
        $numUpdated = $q->execute();

        return new Response("Updated");
    }




}