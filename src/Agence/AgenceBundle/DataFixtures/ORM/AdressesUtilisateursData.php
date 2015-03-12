<?php
namespace Agence\AgenceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Agence\AgenceBundle\Entity\AdressesUtilisateurs;

class AdressesUtilisateursData extends AbstractFixture implements OrderedFixtureInterface
{
    
    public function load(ObjectManager $manager)
    {
        

        $adresse1 = new AdressesUtilisateurs();
        $adresse1->setUtilisateur($this->getReference('utilisateur1'));
        $adresse1->setNom('Eric');
        $adresse1->setPrenom('Christopher');
        $adresse1->setTelephone('+33 6 59 41 18 35');
        $adresse1->setAdresse('12 rue Jacques Ibert ');
        $adresse1->setCodePostal('92300');
        $adresse1->setPays('France');
        $adresse1->setVille('Levallois-Perret');
        $adresse1->setComplementInformation('face à l\'école');
        $manager->persist($adresse1);
        
        $adresse2 = new AdressesUtilisateurs();
        $adresse2->setUtilisateur($this->getReference('utilisateur2'));
        $adresse2->setNom('Salama');
        $adresse2->setPrenom('Soheil');
        $adresse2->setTelephone('+33 659 41 18 35');
        $adresse2->setAdresse('5 rue rubosca');
        $adresse2->setCodePostal('92300');
        $adresse2->setPays('France');
        $adresse2->setVille('Levallois-Perret');
        $adresse2->setComplementInformation('face à la station de metro');
        $manager->persist($adresse2);
        
        $manager->flush();

       // $this->addReference('adresse1', $adresse1);
    }
    public function getOrder()
    {
        return 6;
    }
}

?>