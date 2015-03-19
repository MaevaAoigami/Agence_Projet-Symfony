<?php
namespace Agence\AgenceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Agence\AgenceBundle\Entity\MediaEvent;

class MediaEventData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $mediaEvent1 = new MediaEvent();
        $mediaEvent1->setPath('event_1.jpg');
        $mediaEvent1->setName('KAGUYAHIME');
        $manager->persist($mediaEvent1);
        
        $manager->flush();
        
        $this->addReference('mediaEvent1', $mediaEvent1);
    }
    
    public function getOrder()
    {
        return 6;
    }
}