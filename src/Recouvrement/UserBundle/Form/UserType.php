<?php

namespace Recouvrement\UserBundle\Form;

use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
//    public function getParent(){
//        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
//    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
            ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))
            ->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
                'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'form.password'),
                'second_options' => array('label' => 'form.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
//            ->add('roles', CollectionType::class, array(
//                    'entry_type' => ChoiceType::class,
//                    'entry_options' => array(
//                        'choices' => array(
//                            'Marketeur' => 'ROLE_MARKETEUR',
//                            'Commercial' => 'ROLE_COMMERCIAL',
//                            'Recouvreur' => 'ROLE_RECOUVREUR',
//                            'admin'=>'ROLE_ADMIN'
//                        )
//                    )
//                )
//            )
            ->add('roles', ChoiceType::class, array('label' => 'Type ',
                'choices' => array(' Marketeur' => 'ROLE_MARKETEUR', 'Commercial' => 'ROLE_COMMERCIAL', 'Recouvreur' => 'ROLE_RECOUVREUR','admin'=>'ROLE_ADMIN'), 'required' => true, 'multiple' => true,))
            ->add('NomPrenom',TextType::class)
            ->add('cin',TextType::class)
            ->add('dateNaissance',DateType::class, array(
                'widget' => 'single_text',
                'html5' => false,
            ))
            ->add('lieuNaissance',TextType::class)
            ->add('tel')
            ->add('adresse',TextType::class)
            ->add('image', ImageUserType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Recouvrement\UserBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'recouvrement_userbundle_user';
    }




}
