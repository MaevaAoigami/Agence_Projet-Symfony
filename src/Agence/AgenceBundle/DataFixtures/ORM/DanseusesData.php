<?php

namespace Agence\AgenceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Agence\AgenceBundle\Entity\Danseuses;

class DanseusesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $danseuse1 = new Danseuses();
        $danseuse1->setNom('Lily');
        $danseuse1->setDescription('Toute première danseuse étoile de sa promotion.');
        $danseuse1->setPrix('1200');
        $danseuse1->setDisponible(1);
        $danseuse1->setCategorie('Étoile');
        $danseuse1->setTva($this->getReference('tva2'));
        $danseuse1->setImage($this->getReference('media1'));
        $manager->persist($danseuse1);

        $danseuse2 = new Danseuses();
        $danseuse2->setNom('Marie');
        $danseuse2->setDescription('Danseuse étoile veuve.');
        $danseuse2->setPrix('800');
        $danseuse2->setDisponible(1);
        $danseuse2->setCategorie('Veuve');
        $danseuse2->setTva($this->getReference('tva2'));
        $danseuse2->setImage($this->getReference('media2'));
        $manager->persist($danseuse2);


        $danseuse3 = new Danseuses();
        $danseuse3->setNom('Chloé');
        $danseuse3->setDescription('Super danseuse étoile.');
        $danseuse3->setPrix('1200');
        $danseuse3->setDisponible(1);
        $danseuse3->setCategorie('Étoile');
        $danseuse3->setTva($this->getReference('tva2'));
        $danseuse3->setImage($this->getReference('media3'));
        $manager->persist($danseuse3);

        $danseuse4 = new Danseuses();
        $danseuse4->setNom('Patricia');
        $danseuse4->setDescription('Toute jeune danseuse.');
        $danseuse4->setPrix('500');
        $danseuse4->setDisponible(1);
        $danseuse4->setCategorie('Débutante');
        $danseuse4->setTva($this->getReference('tva2'));
        $danseuse4->setImage($this->getReference('media4'));
        $manager->persist($danseuse4);

        $manager->flush();

        $this->addReference('danseuse1', $danseuse1);
        $this->addReference('danseuse2', $danseuse2);
        $this->addReference('danseuse3', $danseuse3);
        $this->addReference('danseuse4', $danseuse4);
    }

    public function getOrder()
    {
        return 3;
    }
}