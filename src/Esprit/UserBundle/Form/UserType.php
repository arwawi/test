<?php

namespace Esprit\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class UserType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
           
            ->add('roles', 'choice', array(
    'choices' => array('ROLE_ETUDIANT' => 'ROLE_ETUDIANT','ROLE_STAGE' => 'ROLE_STAGE','ROLE_SEMINAIRE' => 'ROLE_SEMINAIRE','ROLE_SCOLARITE' => 'ROLE_SCOLARITE','ROLE_COMMUNICATION' => 'ROLE_COMMUNICATION','ROLE_ADMIN' => 'ROLE_ADMIN',)
));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\UserBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'esprit_userbundle_usertype';
    }
}
