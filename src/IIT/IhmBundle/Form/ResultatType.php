<?php

namespace IIT\IhmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ResultatType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('buteq1')
            ->add('buteq2')
            ->add('pointeq1')
            ->add('pointeq2')
            ->add('idequipe2')
            ->add('idequipe1')
            ->add('idpartie')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IIT\IhmBundle\Entity\Resultat'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'iit_ihmbundle_resultat';
    }
}
