<?php
namespace Agence\AgenceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Agence\AgenceBundle\Entity\Media;

class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $media1 = new Media();
        $media1->setPath('2.jpg');
        $media1->setName('ELEONORA ABBAGNATO');
        $manager->persist($media1);
        
        $media2 = new Media();
        $media2->setPath('3.jpg');
        $media2->setName('AMANDINE ALBISSON');
        $manager->persist($media2);

        $media3 = new Media();
        $media3->setPath('4.jpg');
        $media3->setName('ÉMILIE COZETTE');
        $manager->persist($media3);   
            
        $media4 = new Media();
        $media4->setPath('5.jpg');
        $media4->setName('AURÉLIE DUPONT');
        $manager->persist($media4);              
        
        $media5 = new Media();
        $media5->setPath('6.jpg');
        $media5->setName('DOROTHÉE GILBERT');
        $manager->persist($media5);
        
        $media6 = new Media();
        $media6->setPath('7.jpg');
        $media6->setName('MARIE-AGNÈS GILLOT');
        $manager->persist($media6);
        
        $media7 = new Media();
        $media7->setPath('8.jpg');
        $media7->setName('VAGINA TURLUTOVA');
        $manager->persist($media7);
        
        $manager->flush();
        
        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);        
        $this->addReference('media6', $media6);
        $this->addReference('media7', $media7); 
    }
    
    public function getOrder()
    {
        return 3;
    }
}