<?php
namespace Agence\AgenceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Agence\AgenceBundle\Entity\Evenements;

class EvenementsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $event1 = new Evenements();
        $event1->setName('KAGUYAHIME');
        $event1->setLocation('OPÉRA GARNIER');
        $event1->setDateHour(new \DateTime("2015-02-17 19:30:00"));
        $event1->setImage($this->getReference('mediaEvent1'));
        $manager->persist($event1);
        
        $manager->flush();
        
        $this->addReference('event1', $event1);
    }
    
    public function getOrder()
    {
        return 7;
    }
}