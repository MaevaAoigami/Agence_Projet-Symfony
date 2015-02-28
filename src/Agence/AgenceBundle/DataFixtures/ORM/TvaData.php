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
        $tva1 = new Tva();
        $tva1->setMultiplicate('0.938');
        $tva1->setName('TVA 1.75%');
        $tva1->setValeur('1.75');
        $manager->persist($tva1);

        $tva2 = new tva();
        $tva2->setMultiplicate('0.838');
        $tva2->setName('TVA 20%');
        $tva2->setValeur('20');
        $manager->persist($tva2);

        $manager->flush();

        $this->addReference('tva1', $tva1);
        $this->addReference('tva2', $tva2);
    }

    public function getOrder()
    {
        return 1;
    }
}