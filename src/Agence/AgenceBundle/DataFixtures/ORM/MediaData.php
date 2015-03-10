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
        $media1->setPath('http://www.espace-danse-tarbes.com/images/martine1.jpg');
        $media1->setAlt('Lily');
        $manager->persist($media1);

        $media2 = new Media();
        $media2->setPath('http://www.mon-wallpaper.com/wp-content/uploads/danseuse.jpg');
        $media2->setAlt('Marie');
        $manager->persist($media2);

        $media3 = new Media();
        $media3->setPath('http://imalbum.aufeminin.com/album/D20050516/103831_UGDC6C6HZGDP75IPA4ICVBADUBRM8Z_9_1__H111549_L.jpg');
        $media3->setAlt('Chloé');
        $manager->persist($media3);

        $media4 = new Media();
        $media4->setPath('http://www.mesacosan.com/media/articles/articles-utilisateurs/danse-moderner-vs-danse-classique-443.jpg');
        $media4->setAlt('Patricia');
        $manager->persist($media4);

        $manager->flush();

        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
    }

    public function getOrder()
    {
        return 1;
    }
}