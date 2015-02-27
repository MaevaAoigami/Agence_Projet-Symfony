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
        $media1->setDanseuse($this->getReference('danseuse1'));
        $manager->persist($media1);

        $media2 = new Media();
        $media2->setPath('http://www.ac-grenoble.fr/ecole/sauve.nyons/IMG/jpg/Danse_classique.jpg');
        $media2->setAlt('Marie');
        $media2->setDanseuse($this->getReference('danseuse2'));
        $manager->persist($media2);

        $media3 = new Media();
        $media3->setPath('http://imalbum.aufeminin.com/album/D20050516/103831_UGDC6C6HZGDP75IPA4ICVBADUBRM8Z_9_1__H111549_L.jpg');
        $media3->setAlt('Chloé');
        $media3->setDanseuse($this->getReference('danseuse3'));
        $manager->persist($media3);

        $media4 = new Media();
        $media4->setPath('http://www.mesacosan.com/media/articles/articles-utilisateurs/danse-moderner-vs-danse-classique-443.jpg');
        $media4->setAlt('Patricia');
        $media4->setDanseuse($this->getReference('danseuse4'));
        $manager->persist($media4);

        $media5 = new Media();
        $media5->setPath('http://i40.servimg.com/u/f40/11/00/40/37/swan_l10.jpg');
        $media5->setAlt('Sarah');
        $media5->setDanseuse($this->getReference('danseuse5'));
        $manager->persist($media5);

        $media6 = new Media();
        $media6->setPath('http://s3.e-monsite.com/2011/02/06/12/219437731.jpg');
        $media6->setAlt('Flora');
        $media6->setDanseuse($this->getReference('danseuse6'));
        $manager->persist($media6);

        $media7 = new Media();
        $media7->setPath('http://ekladata.com/sxMG0qfuzkzLysTI9-yqUFAMcpA.png');
        $media7->setAlt('Olivia');
        $media7->setDanseuse($this->getReference('danseuse7'));
        $manager->persist($media7);

        $media8 = new Media();
        $media8->setPath('http://www.academiedanseattitude.com/public/img/big/52b8692803713.jpg');
        $media8->setAlt('Noëlle');
        $media8->setDanseuse($this->getReference('danseuse8'));
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
        return 3;
    }
}