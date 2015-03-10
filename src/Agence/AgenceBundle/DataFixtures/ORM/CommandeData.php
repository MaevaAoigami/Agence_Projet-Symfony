<?php

namespace Agence\AgenceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Agence\AgenceBundle\Entity\Commande;

class CommandeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $commande1 = new Commande();
        $commande1->setUtilisateur($this->getReference('user3'));
        $commande1->setValider('1');
        $commande1->setDate(new \DateTime());
        $commande1->setReference('1');
        $commande1->setCommande(array('0' => array('129' => '1'),
                                      '1' => array('131' => '1')
                                ));
        $manager->persist($commande1);

        $commande2 = new Commande();
        $commande2->setUtilisateur($this->getReference('user4'));
        $commande2->setValider('1');
        $commande2->setDate(new \DateTime());
        $commande2->setReference('2');
        $commande2->setCommande(array('0' => array('126' => '1'),
                                      '1' => array('128' => '1')
                                ));
        $manager->persist($commande2);

        $manager->flush();

        $this->addReference('commande1', $commande1);
        $this->addReference('commande2', $commande2);
    }

    public function getOrder()
    {
        return 6;
    }
}