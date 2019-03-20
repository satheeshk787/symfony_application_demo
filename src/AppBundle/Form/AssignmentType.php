<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use AppBundle\Entity\Assignment;
use AppBundle\Entity\Material;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use Symfony\Component\Form\Extension\Core\Type\CollectionType;






class AssignmentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',null,array('attr'=>array('class' => 'form-control','placeholder'=>'Enter Assignment Title')))
                
            ->add('description', null,array('attr'=>array('class' => 'form-control','placeholder'=>'Enter Assignment Title')))


            ->add('expire_date', DateType::class, array('widget' => 
                'single_text','attr'=> 
                array('class' => 'form-control'
            )))

            ->add('materials', CollectionType::class, array(
                'entry_type' => MaterialType::class,
                'entry_options' => ['label' => false],
                'by_reference' => false,
                'allow_add' => true,
                'allow_delete'=> true
            ))

            
            ->add('questions', CollectionType::class, array(
                'entry_type' => QuestionType::class,
                'entry_options' => ['label' => false],
                'by_reference' => false,
                'allow_add' => true,
                'allow_delete'=> true
            ))

            ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Assignment'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_assignment';
    }


}
