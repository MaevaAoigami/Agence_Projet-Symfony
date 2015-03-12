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
        $media1 = new media();
        $media1->setPath('http://www.espace-danse-79.com/espace-danse/images/danse-classique-niort/photo6_g.jpg');
        $media1->setAlt('danseuse');
        $media1->setTitle('irina petroviska');
        $manager->persist($media1);

        $media2 = new media();
        $media2->setPath('http://www.espace-danse-79.com/espace-danse/images/danse-classique-niort/photo6_g.jpg');
        $media2->setAlt('etoile');
        $media2->setTitle('serena golovina');
        $manager->persist($media2);

        $media3 = new media();
        $media3->setPath('http://auto.img.v4.skyrock.net/2391/5352391/pics/153879625_small.jpg');
        $media3->setAlt('etoile');
        $media3->setTitle('irina salome');
        $manager->persist($media3);

        $media4 = new media();
        $media4->setPath('http://auto.img.v4.skyrock.net/2391/5352391/pics/153879625_small.jpg');
        $media4->setAlt('etoile');
        $media4->setTitle('therisa iranova');
        $manager->persist($media4);

        $media5 = new media();
        $media5->setPath('http://auto.img.v4.skyrock.net/2391/5352391/pics/153879625_small.jpg');
        $media5->setAlt('balerine');
        $media5->setTitle('clitova selena');
        $manager->persist($media5);

        $media6 = new media();
        $media6->setPath('http://ageheureux.a.g.pic.centerblog.net/69qr.jpg');
        $media6->setAlt('etoile');
        $media6->setTitle('Vagina turlutova');
        $manager->persist($media6);

        $media7 = new media();
        $media7->setPath('http://www.sailorbouboulette.net/public/.dancegrey1_m.jpg');
        $media7->setAlt('balerine');
        $media7->setTitle('melanie clitova');
        $manager->persist($media7);

        $media8 = new media();
        $media8->setPath('http://imalbum.aufeminin.com/album/D20081205/497784_6VKWRJMUNZA73JHGWMKB85SJ8LHOCO_danseuse_H131902_L.jpg');
        $media8->setAlt('balerine');
        $media8->setTitle('laureen irimanova');
        $manager->persist($media8);


        $manager->flush();

        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);
        $this->addReference('media6', $media6);
        $this->addReference('media7', $media7);
        $this->addReference('media8', $media8);

    }
    public function getOrder()
    {
        return 1;
    }
}

?>