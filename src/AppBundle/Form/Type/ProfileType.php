<?php


namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use AppBundle\Form\Type\ProfileType;

class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('dob', DateType::class, array('widget' => 'single_text',))
        ->add('profilePictureFile');
        // ->add('hobby', CollectionType::class,[
        //     'entry_type'=> HobbyType::class,
        //     'entry_options'=>['label'=>false],
        //     'by_reference'=> false,
        //     'allow_add'=> true,
        //     'allow_delete'=>true
        // ]);
        // ->add('role', ChoiceType::class, ['choices' => [ 
        //     '' => 'Select Role',
        //     'admin' => 'Admin',
        //     'student' => 'Student',
        //     'professor' => 'Professor',
        //     'school' => 'School'
        // ]]);
                   
               
            
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';

        // Or for Symfony < 2.8
         //return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}