<?php

namespace ForumBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
        ->add('prenom')
        ->add('roles', ChoiceType::class,array(
            'label'=>'Type',
            'choices' => array(
                'ADMIN'=>'ROLE_ADMIN',
                'USER'=>'ROLE_USER'
            ),
            'required' =>true,
            'multiple'=>true,)
        );
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }


    public function getBlockPrefix()
    {
        return 'forum_bundle_registration_type';
    }
}
