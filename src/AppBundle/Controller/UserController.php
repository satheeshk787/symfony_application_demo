<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\Hobby;
use AppBundle\Entity\Assignment;
use AppBundle\Entity\Share;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
 

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

//use Doctrine\Common\Collections\ArrayCollection;




use AppBundle\Form\HobbyType;

use AppBundle\Entity\University;

/**
 * User controller.
 *
 */
class UserController extends Controller
{
    /**
     * Lists all user entities.
     *
     * @Route("/user/", name="user_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AppBundle:User')->findBy(array('role' => '1'));

        return $this->render('user/index.html.twig', array(
            'users' => $users,
        ));
    }




    /**
     * Creates a new user entity.
     *
     * @Route("/user/new", name="user_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $user = new User();

            $form = $this->createFormBuilder($user)
            
            ->add("username",TextType::class, array('attr'=>
                array('class' => 'form-control','placeholder'=>'Enter username',)
            ))
            
            ->add("email",TextType::class, array('attr'=>
                array('class' => 'form-control','placeholder'=>'Enter Email',)
            ))

            // ->add("password",PasswordType::class, array('attr'=>
            //     array('class' => 'form-control')
            // ))
            


            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'options' => array(
                    'attr' => array(
                        'autocomplete' => 'new-password',
                        'class' => 'form-control',
                        'placeholder'=>'Enter password',

                    ),
                ),
                'first_options' => array('label' => 'Password'),
                'second_options' => array('label' => 'Confirmarm Password'),
                'invalid_message' => 'fos_user.password.mismatch',)
            )


            ->add('dob', DateType::class, array('widget' => 
                'single_text','attr'=> 
                array('class' => 'form-control'
            )))
            
            ->add('university', null, ['attr'=>array('class' => 'form-control')])
                  
            ->add('role', ChoiceType::class, ['attr'=>['class' => 'form-control'],'choices' => [ 
                '' => '---Select Role---',
                'admin' => 'Admin',
                'student' => 'Student',
                'professor' => 'Professor',
                'school' => 'School'
            ]])
            
            
            ->add('profilePictureFile',null, array('attr'=>
                array('class' => 'form-control')
            ))

            
            ->add("update", SubmitType::class,array(
                'label'=>'Add User',
                'attr' => array('class'=>'btn btn-primary')
            ))
            
            ->getForm();
           

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            return $this->redirectToRoute("user_index");
        }

        return $this->render('user/new.html.twig',array(
            'form'=> $form->createView()
        ));
    }

    /**
     * Finds and displays a user entity.
     *
     * @Route("/user/{id}", name="user_show")
     * @Method("GET")
     */
    public function showAction($id)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        return $this->render('user/show.html.twig', array('user' => $user));
    }


    


    /**
     * Displays a form to edit an existing user entity.
     *
     * @Route("/user/{id}/edit", name="user_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, User $id)
    {
       
        $user = new User();
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);

        $form = $this->createFormBuilder($user)
            
            ->add("username",TextType::class, array('attr'=>
                array('class' => 'form-control')
            ))
            
            ->add("email",TextType::class, array('attr'=>
                array('class' => 'form-control')
            ))
            
            ->add('dob', DateType::class, array('widget' => 
                'single_text','attr'=> 
                array('class' => 'form-control'
            )))
            
            ->add('university', null, ['attr'=>['class' => 'form-control']])

            ->add('university_add', 'text', ['attr'=>['class' => 'form-control'],'required' => false])
               
               //'choices' => ['admin' => 'Admin']

            ->add('role', ChoiceType::class, ['attr'=>['class' => 'form-control'],'choices' => [ 
                'admin' => 'Admin',
                'student' => 'Student',
                'professor' => 'Professor',
                'school' => 'School'
            ]])

            ->add('hobbies', CollectionType::class, array(
                'entry_type' => HobbyType::class,
                'entry_options' => ['label' => false],
                'by_reference' => false,
                'allow_add' => true,
                'allow_delete'=>true
            ))
            
            
            ->add('profilePictureFile',null, array('attr'=>
                array('class' => 'form-control'),
                'required' => false
            ))

            
            ->add("update", SubmitType::class,array(
                'label'=>'Update Profile',
                'attr' => array('class'=>'btn btn-primary')
            ))
            
            ->getForm();
            

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {


            if($form->get('university_add')->getData()!="" )
            {
                $universityEntityManager = $this->getDoctrine()->getManager();
                $university = new University();
                $university->setName( $form->get('university_add')->getData() );
                $universityEntityManager->persist($university);
                $user->setUniversity($university);
                $universityEntityManager->flush();
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            return $this->redirectToRoute("user_index");
        }

        return $this->render('user/edit.html.twig',array(
            'form'=> $form->createView()
        ));


    }



    /**
     * Deletes a user entity.
     *
     * @Route("/user/{id}/delete", name="user_delete")
     * @Method("GET")
     */
    public function deleteAction(Request $request,$id)
    {

        $user = $this->getDoctrine()->getRepository(User::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($user);
        $entityManager->flush();

        return $this->redirectToRoute("user_index");
    }

    



    /**
     * Displays a form to edit myprofile.
     *
     * @Route("/student_profile/edit", name="student_profile_edit")
     * @Method({"GET", "POST"})
     */
    public function studentprofile(Request $request)
    {
        $user = new User();

        $current_user = $this->container->get('security.context')->getToken()->getUser();
        $user = $this->getDoctrine()->getRepository(User::class)->find($current_user);

        $user_create_form_b=$this->createFormBuilder($user);

        if($user->getUniversityStatus()=='')
        {


             $form = $user_create_form_b
            
            ->add("username",TextType::class, array('attr'=>
                array('class' => 'form-control')
            ))
            
            ->add("email",TextType::class, array('attr'=>
                array('class' => 'form-control')
            ))
            
            ->add('dob', DateType::class, array('widget' => 
                'single_text','attr'=> 
                array('class' => 'form-control'
            )))


            ->add('university', null, ['attr'=>['class' => 'form-control']])

            ->add('university_status',HiddenType::class)

            ->add('hobbies', CollectionType::class, array(
                'entry_type' => HobbyType::class,
                'entry_options' => ['label' => false],
                'by_reference' => false,
                'allow_add' => true,
                'allow_delete'=>true
            ))
            
            ->add('profilePictureFile',FileType::class, array('attr'=>
                array('class' => 'form-control'),
                'required' => false
            ))
            
            ->add("update", SubmitType::class,array(
                'label'=>'Update Profile',
                'attr' => array('class'=>'btn btn-primary')
            ))
            
            ->getForm();


            if($form->get('university')->getData() != $form->get('university_status')->getData())
            {
                //$_POST['form']['university_status'] =  $form->get('university')->getData() ;
                $form->get('university_status')->setData(  $form->get('university')->getData() );
            }


        }
        else
        {

             $form = $user_create_form_b
            
            ->add("username",TextType::class, array('attr'=>
                array('class' => 'form-control')
            ))
            
            ->add("email",TextType::class, array('attr'=>
                array('class' => 'form-control')
            ))
            
            ->add('dob', DateType::class, array('widget' => 
                'single_text','attr'=> 
                array('class' => 'form-control'
            )))

            

            ->add('hobbies', CollectionType::class, array(
                'entry_type' => HobbyType::class,
                'entry_options' => ['label' => false],
                'by_reference' => false,
                'allow_add' => true,
                'allow_delete'=>true
            ))
            
            ->add('profilePictureFile',FileType::class, array('attr'=>
                array('class' => 'form-control'),
                'required' => false
            ))
            
            ->add("update", SubmitType::class,array(
                'label'=>'Update Profile',
                'attr' => array('class'=>'btn btn-primary')
            ))
            
            ->getForm();





        }

       
        

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            return $this->redirectToRoute("fos_user_profile_show");
        }

        return $this->render('user/myprofile.html.twig',array(
            'form'=> $form->createView()
        ));

    }



    /**
     * Displays a form to edit myprofile.
     *
     * @Route("/myprofile/edit", name="myprofile_edit")
     * @Method({"GET", "POST"})
     */
    public function myprofile(Request $request)
    {
        $user = new User();

        $current_user = $this->container->get('security.context')->getToken()->getUser();
        $user = $this->getDoctrine()->getRepository(User::class)->find($current_user);

        $form = $this->createFormBuilder($user)
            
            ->add("username",TextType::class, array('attr'=>
                array('class' => 'form-control')
            ))
            
            ->add("email",TextType::class, array('attr'=>
                array('class' => 'form-control')
            ))
            
            ->add('dob', DateType::class, array('widget' => 
                'single_text','attr'=> 
                array('class' => 'form-control'
            )))

            ->add('hobbies', CollectionType::class, array(
                'entry_type' => HobbyType::class,
                'entry_options' => ['label' => false],
                'by_reference' => false,
                'allow_add' => true,
                'allow_delete'=>true
            ))
            
            ->add('profilePictureFile',FileType::class, array('attr'=>
                array('class' => 'form-control'),
                'required' => false
            ))
            
            ->add("update", SubmitType::class,array(
                'label'=>'Update Profile',
                'attr' => array('class'=>'btn btn-primary')
            ))

            
            
            ->getForm();
            

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            return $this->redirectToRoute("fos_user_profile_show");
        }

        return $this->render('user/myprofile.html.twig',array(
            'form'=> $form->createView()
        ));

    }






    /**
     * 
     *
     * @Route("/university_changed_user/", name="university_changed_user")
     * @Method("GET")
     */
    public function universityReview()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AppBundle:User')
            ->createQueryBuilder('u')
            ->where("u.university_status!=''")
            ->getQuery()
            ->execute();

        //print_r($users );exit;

        return $this->render('user/university_review.html.twig', array(
            'users' => $users,
        ));
    }

    
    /**
     * Finds and displays a user entity.
     *
     * @Route("/university_changed_user_review/{id}", name="university_changed_user_review")
     * @Method("GET")
     */
    public function universityReviewAction($id)
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);


        $entityManager = $this->getDoctrine()->getManager();
        
        $user->setUniversityStatus('');
        $entityManager->persist($user);
        $entityManager->flush();

        return $this->redirectToRoute("university_changed_user");
    }



    /**
     * 
     *
     * @Route("/assignment/share/{id}", name="share_assignment")
     * @Method({"GET","POST"})
     */
    public function share(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();


         //$users = $em->getRepository('AppBundle:User')->findBy(array('role' => '1'));
        $search="";
        if(isset($_GET['search']))
        {
            if($_GET['search']!="")
            {
                $search=" and u.username like '%".$_GET['search']."%'";
            }
        }

         $users = $em->getRepository('AppBundle:User')
            ->createQueryBuilder('u')
            ->where("u.role='1'".$search)
            ->getQuery()
            ->execute();
         
         // $assignments = $em->getRepository('AppBundle:Assignment')->find($id);
         // $shares=$assignments->getShares();
         // $users_shares = $shares->map(function($share){return $share->getUser()->getId();});

        //$share_delete = $this->getDoctrine()->getRepository(Share::class)->find('3');

        if ($request->isMethod('POST')) 
        {
            $share_data = null;
            if(isset($_POST['share'])){ $share_data =  $_POST['share']; }

            $before_shared_users = null;
            if(isset($_POST['before_shared_users'])){  $before_shared_users = $_POST['before_shared_users'];}

            



            //for delete
            if($before_shared_users!=null)
            {
                foreach ($before_shared_users as $form_before_shared_users_id) 
                {
                    if($share_data!=null)
                    {
                        if (!in_array($form_before_shared_users_id, $share_data))
                        {

                            $entityManagerForDelete = $this->getDoctrine()->getManager();
                            $qb = $entityManagerForDelete->createQueryBuilder();
                            $query = $qb->delete('AppBundle:Share', 'u')
                                ->where('u.user = '.$form_before_shared_users_id.' and u.assignment='.$id)
                                ->getQuery();
                            $query->execute();
                        }
                    }
                    else
                    {
                        $entityManagerForDelete = $this->getDoctrine()->getManager();
                        $qb = $entityManagerForDelete->createQueryBuilder();
                        $query = $qb->delete('AppBundle:Share', 'u')
                            ->where('u.user = '.$form_before_shared_users_id.' and u.assignment='.$id)
                            ->getQuery();
                        $query->execute();
                    }
                }
            }


            //for add share
            if($share_data!=null)
            {
                foreach ($share_data as $form_user_id) 
                {
                    if($before_shared_users!=null)
                    {
                        if (!in_array($form_user_id, $before_shared_users))
                        {
                            $user = $this->getDoctrine()->getRepository(User::class)->find($form_user_id);
                            $assignment = $this->getDoctrine()->getRepository(Assignment::class)->find($id);

                            $entityManager = $this->getDoctrine()->getManager();

                            $share = new Share();
                            $share->setUser($user);
                            $share->setAssignment($assignment);
                            $entityManager->persist($share);
                            $entityManager->flush();
                        }
                    }
                    else
                    {
                        $user = $this->getDoctrine()->getRepository(User::class)->find($form_user_id);
                        $assignment = $this->getDoctrine()->getRepository(Assignment::class)->find($id);

                        $entityManager = $this->getDoctrine()->getManager();

                        $share = new Share();
                        $share->setUser($user);
                        $share->setAssignment($assignment);
                        $entityManager->persist($share);
                        $entityManager->flush();
                    }
                }
            }




        }

        //for get select collection
         $assignments = $em->getRepository('AppBundle:Assignment')->find($id);
         $shares=$assignments->getShares();
         $users_shares = $shares->map(function($share){return $share->getUser()->getId();});

        return $this->render('user/share.html.twig', array(
            'users' => $users,
            'users_shares' => $users_shares,
        ));
    }


   
    /**
     * 
     *
     * @Route("/assignment/review/{id}", name="review_assignment")
     * @Method({"GET","POST"})
     */
    public function review(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();



         //$users = $em->getRepository('AppBundle:User')->findBy(array('role' => '1'));
        $search="";
        if(isset($_GET['search']))
        {
            if($_GET['search']!="")
            {
                $search=" and u.username like '%".$_GET['search']."%'";
            }
        }

       // $assignments = $em->getRepository('AppBundle:Assignment')->find($id);
       // $shares=$assignments->getShares();

       // $users=$shares->getUser();

       $users = $em->getRepository('AppBundle:User')
            ->createQueryBuilder('u')
            ->where("u.role='1' ".$search)
            ->getQuery()
            ->execute();
         

    

        return $this->render('user/review.html.twig', array(
            'users' => $users,
            'assignment_id' => $id,
        ));
    }





    /**
     *
     * @Route("/admin_dashboard/", name="admin_dashboard")
     * @Method("GET")
     */
    public function adminDashboardAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users_data = $em->getRepository('AppBundle:User')
            ->createQueryBuilder('u')
            ->select('u.role,count(u.id) as number_data')
            ->groupBy('u.role')
            ->getQuery()
            ->execute();

        
        $total_assignments = $em->getRepository('AppBundle:Assignment')
            ->createQueryBuilder('u')
            ->select('count(u.id) as assignment_count')
            ->getQuery()
            ->execute();

         $assignment_finished_data = $em->getRepository('AppBundle:StudentsAnswer')
            ->createQueryBuilder('u')
            ->select('u.reviewStatus,count(u.id) as number_data')
            ->groupBy('u.reviewStatus')
            ->getQuery()
            ->execute();

        // $max_share_assignment = $em->getRepository('AppBundle:Share')
        //     ->createQueryBuilder('u')
        //     ->select('u.assignment,count(u.user) as user_count')
        //     ->groupBy('u.assignment')
        //     ->orderBy('user_count', 'DESC')
        //     ->getQuery()
        //     ->execute();

        return $this->render('user/admin_index.html.twig', array(
            'users_data' => $users_data,
            'total_assignments'=>$total_assignments,
            'assignment_finished_data'=>$assignment_finished_data,
        ));
    }







}
