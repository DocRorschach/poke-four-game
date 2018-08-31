<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use \Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\User;
use \Symfony\Component\Form\Extension\Core\Type\TextType;
use \Symfony\Component\Form\Extension\Core\Type\PasswordType;
use \Symfony\Component\Form\Extension\Core\Type\SubmitType;
use \Symfony\Component\Form\Extension\Core\Type\IntegerType;


class GameType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
         $builder->add('title', TextType::class)
                 ->add('difficulty', IntegerType::class)
                 ->add('color', IntegerType::class)
                 ->add('mode', IntegerType::class)
                 ->add('create', SubmitType::class, array(
                    'attr' => array('value' => 'ok')
        ));
    }
    
}
