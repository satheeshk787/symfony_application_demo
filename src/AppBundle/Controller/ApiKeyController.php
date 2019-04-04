<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ApiKey;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Apikey controller.
 *
 * @Route("apikey")
 */
class ApiKeyController extends Controller
{
    /**
     * Lists all apiKey entities.
     *
     * @Route("/", name="apikey_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $apiKeys = $em->getRepository('AppBundle:ApiKey')->findAll();

        return $this->render('apikey/index.html.twig', array(
            'apiKeys' => $apiKeys,
        ));
    }

    /**
     * Creates a new apiKey entity.
     *
     * @Route("/new", name="apikey_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $apiKey = new Apikey();
        $form = $this->createForm('AppBundle\Form\ApiKeyType', $apiKey);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($apiKey);
            $em->flush();

            return $this->redirectToRoute('apikey_show', array('id' => $apiKey->getId()));
        }

        return $this->render('apikey/new.html.twig', array(
            'apiKey' => $apiKey,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a apiKey entity.
     *
     * @Route("/{id}", name="apikey_show")
     * @Method("GET")
     */
    public function showAction(ApiKey $apiKey)
    {
        $deleteForm = $this->createDeleteForm($apiKey);

        return $this->render('apikey/show.html.twig', array(
            'apiKey' => $apiKey,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing apiKey entity.
     *
     * @Route("/{id}/edit", name="apikey_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ApiKey $apiKey)
    {
        $deleteForm = $this->createDeleteForm($apiKey);
        $editForm = $this->createForm('AppBundle\Form\ApiKeyType', $apiKey);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('apikey_edit', array('id' => $apiKey->getId()));
        }

        return $this->render('apikey/edit.html.twig', array(
            'apiKey' => $apiKey,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a apiKey entity.
     *
     * @Route("/{id}", name="apikey_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ApiKey $apiKey)
    {
        $form = $this->createDeleteForm($apiKey);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($apiKey);
            $em->flush();
        }

        return $this->redirectToRoute('apikey_index');
    }

    /**
     * Creates a form to delete a apiKey entity.
     *
     * @param ApiKey $apiKey The apiKey entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ApiKey $apiKey)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('apikey_delete', array('id' => $apiKey->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
