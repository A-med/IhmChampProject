<?php

namespace IIT\IhmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PartieType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('iddate')
            ->add('idcompetition')
            ->add('idstade')
            ->add('idequipe')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IIT\IhmBundle\Entity\Partie'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'iit_ihmbundle_partie';
    }
}
