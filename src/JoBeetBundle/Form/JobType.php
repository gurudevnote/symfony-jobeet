<?php

namespace JoBeetBundle\Form;

use JoBeetBundle\Entity\Job;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\Choice;

class JobType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type',ChoiceType::class,  array('choices' => Job::getTypes(), 'expanded' => true))
            ->add('company')
            ->add('logo', null, array('label' => 'Company logo'))
            ->add('url')
            ->add('position')
            ->add('location')
            ->add('description')
            ->add('how_to_apply', null, array('label' => 'How to apply?'))
            ->add('token')
            ->add('is_public', null, array('label' => 'Public?'))
            ->add('is_activated', null, array('label' => 'Active?'))
            ->add('email')
//            ->add('expires_at', DateType::class, array(
//                'input'  => 'datetime',
//                'widget' => 'choice',
//            ))
//            ->add('created_at', DateType::class, array(
//                'input'  => 'datetime',
//                'widget' => 'choice',
//            ))
//            ->add('updated_at', DateType::class, array(
//                'input'  => 'datetime',
//                'widget' => 'choice',
//            ))
            ->add('category')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'JoBeetBundle\Entity\Job'
        ));
    }
}
