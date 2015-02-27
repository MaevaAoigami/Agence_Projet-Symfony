<?php

namespace Agence\AgenceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class testType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	// Ici nous allons faire notre formulaire en PHP
    	// Le HTML c'est finit
    	$builder-> add('email')
                -> add('prenom');
    }

    public function getName()
    {
    	return 'agence_agencebundle_test';
    }
}