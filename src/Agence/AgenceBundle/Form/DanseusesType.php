<?php

namespace Agence\AgenceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Agence\AgenceBundle\Form\MediaType;
use Agence\AgenceBundle\Form\CategoriesType;

class DanseusesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('description')
            ->add('prix')
            ->add('disponible')
            ->add('categories')
            ->add('image', new MediaType())
            ->add('tva')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Agence\AgenceBundle\Entity\Danseuses'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'agence_agencebundle_danseuses';
    }
}
