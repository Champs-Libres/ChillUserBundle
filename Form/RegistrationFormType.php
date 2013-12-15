<?php

namespace CL\Chill\UserBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

/**
 * 
 *
 * @author julien.fastre@champs-libres.coop
 */
class RegistrationFormType extends BaseType {
    
    public function buildForm(FormBuilderInterface $builder, array $options){
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('name', 'text', array( 'label' => 'form.User.registration.name'));
    }

    public function getName() {
        return 'chill_user_registration';
    }
    
}
