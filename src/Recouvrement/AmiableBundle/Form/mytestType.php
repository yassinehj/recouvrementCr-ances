<?php

namespace Recouvrement\AmiableBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class mytestType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('mytest',CollectionType::class, array(
            'entry_type' => ChoiceType::class,
            'entry_options' => array(
                'choices' => array(
                    'Marketeur' => 'ROLE_MARKETEUR',
                    'Commercial' => 'ROLE_COMMERCIAL',
                    'Recouvreur' => 'ROLE_RECOUVREUR',
                    'admin'=>'ROLE_ADMIN'
                )
            )
        ))->add('Ajouter',SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Recouvrement\AmiableBundle\Entity\mytest'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'recouvrement_amiablebundle_mytest';
    }


}
