<?php
namespace Agence\AgenceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Agence\AgenceBundle\Entity\Tva;

class TvaData extends AbstractFixture implements OrderedFixtureInterface
{
    
    public function load(ObjectManager $manager)
    {

        // ici pour la tva à 20% comme c'est une prestation  
        $tva1 = new tva();
        $tva1->setMultiplicate('0.833');
        $tva1->setNom('Tva 20%');
        $tva1->setValeur('20');
        $manager->persist($tva1);

        //ici pour fire une declaration de la tva

        $manager->flush();

        $this->addReference('tva1', $tva1);
    }
    public function getOrder()
    {
        return 3;
    }
}

?>