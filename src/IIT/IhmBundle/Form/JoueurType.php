<?php

namespace IIT\IhmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class JoueurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('nationalite')
            ->add('datenaiss')
            ->add('taille')
            ->add('poids')
            ->add('image')
            ->add('idequipe')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'IIT\IhmBundle\Entity\Joueur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'iit_ihmbundle_joueur';
    }
}
