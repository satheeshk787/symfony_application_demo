<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;



class QuestionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('question',null, array('attr'=>
                array('class' => 'form-control','placeholder'=>'Enter Question'),
                'label' => 'Question:'
            ))

            ->add('question_type', ChoiceType::class, ['attr'=>['class' => 'form-control'],'choices' => [ 
                '1' => 'Answer',
                '2' => 'Radiobutton',
                '3' => 'Checkbox'
            ]])
            
            ->add('answers', CollectionType::class, array(
                'entry_type' => AnswerType::class,
                'entry_options' => ['label' => false],
                'by_reference' => false,
                'allow_add' => true,
                'allow_delete'=> true
            ))
            
            ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Question'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_contact';
    }


}