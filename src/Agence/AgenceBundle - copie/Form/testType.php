<?php	

namespace Agence\AgenceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class testType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
    {

		// ici nous allons faire notre fomulaire en php
		$builder->add('email','email',array('required' => true))
				->add('nom')
				->add('email')
				->add('prenom')
				->add('sexe','choice', array('choices' => array('0' => 'Homme',
																'1' => 'Femme'),'expanded' => true))
				->add('contenu','textarea')
				->add('date','datetime')
				->add('utilisateurs','entity', array('class' => 'Utilisateurs\UtilisateursBundle\Entity\utilisateurs'))
				->add('envoyer','submit')
				->add('pays','country');

	}

	public function getName()
	{
		return 'agence_agencebundle_test';
	}

}