<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use \Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\User;
use \Symfony\Component\Form\Extension\Core\Type\TextType;
use \Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UserRegisterType extends UserLoginType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        //parent::buildForm($builder, $options);
        $builder->add('firstname', TextType::class)
                ->add('pseudo', TextType::class)
                ->add('password', PasswordType::class)
                ->add('save', SubmitType::class, array(
                    'attr' => array('value' => 'ok')
        ));
    }

}
