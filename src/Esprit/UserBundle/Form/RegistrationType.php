<?php

namespace Something\Bundle\Form;
 
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
 
class RegistrationType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder,
                                           array $options)
    {
        parent::buildForm($builder, $options);
 
        $builder->add('captcha', 'captcha', array(
            'label' => 'Code visuel :'
        ));
    }
 
    public function getName()
    {
        return 'somethingbundle_user_registration';
    }
}

?>
