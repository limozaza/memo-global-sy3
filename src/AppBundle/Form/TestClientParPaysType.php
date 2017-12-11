<?php

namespace AppBundle\Form;

use AppBundle\Entity\TestClientParPays;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TestClientParPaysType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('nomMarital');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\TestClientParPays',
            'validation_groups'=> function(FormInterface $form){
                $data = $form->getData();
                if(TestClientParPays::COUNTRY_FR === $data->getPays()){
                    return ['fr'];
                }
                if(TestClientParPays::COUNTRY_EN === $data->getPays()){
                    return ['en'];
                }
            }
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_testclientparpays';
    }


}
