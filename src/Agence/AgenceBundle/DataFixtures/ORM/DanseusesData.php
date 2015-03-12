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
        // ici pour le nombre de danseuse
        $danseuse1 = new danseuses();
        $danseuse1->setCategorie($this->getReference('categorie1'));
        $danseuse1->setDescription(" une danseuses qui à tjrs aimé danser");
        $danseuse1->setDisponibilite('1');
        $danseuse1->setImage($this->getReference('media1'));
        $danseuse1->setNom('etoile');
        $danseuse1->setPrix('835');
        $danseuse1->setTva($this->getReference('tva1'));
        $manager->persist($danseuse1);

        $danseuse2 = new danseuses();
        $danseuse2->setCategorie($this->getReference('categorie1'));
        $danseuse2->setDescription(" une danseuses qui à tjrs aimé danser de la categorie 1");
        $danseuse2->setDisponibilite('1');
        $danseuse2->setImage($this->getReference('media2'));
        $danseuse2->setNom('etoile');
        $danseuse2->setPrix('736');
        $danseuse2->setTva($this->getReference('tva1'));
        $manager->persist($danseuse2);

        $danseuse3 = new danseuses();
        $danseuse3->setCategorie($this->getReference('categorie1'));
        $danseuse3->setDescription(" une danseuses qui à tjrs aimé danser de la categorie 1");
        $danseuse3->setDisponibilite('1');
        $danseuse3->setImage($this->getReference('media3'));
        $danseuse3->setNom('etoile');
        $danseuse3->setPrix('1100');
        $danseuse3->setTva($this->getReference('tva1'));
        $manager->persist($danseuse3);

        $danseuse4 = new danseuses();
        $danseuse4->setCategorie($this->getReference('categorie1'));
        $danseuse4->setDescription(" une danseuses & danser de la categorie 1");
        $danseuse4->setDisponibilite('1');
        $danseuse4->setImage($this->getReference('media4'));
        $danseuse4->setNom('etoile');
        $danseuse4->setPrix('3578');
        $danseuse4->setTva($this->getReference('tva1'));
        $manager->persist($danseuse4);

        $danseuse5 = new danseuses();
        $danseuse5->setCategorie($this->getReference('categorie2'));
        $danseuse5->setDescription(" une balerine danser de la categorie 2");
        $danseuse5->setDisponibilite('1');
        $danseuse5->setImage($this->getReference('media5'));
        $danseuse5->setNom('balerine');
        $danseuse5->setPrix('635');
        $danseuse5->setTva($this->getReference('tva1'));
        $manager->persist($danseuse5);

        $danseuse6 = new danseuses();
        $danseuse6->setCategorie($this->getReference('categorie1'));
        $danseuse6->setDescription(" une etoile qui aime danser de la categorie 1");
        $danseuse6->setDisponibilite('1');
        $danseuse6->setImage($this->getReference('media6'));
        $danseuse6->setNom('etoile');
        $danseuse6->setPrix('756');
        $danseuse6->setTva($this->getReference('tva1'));
        $manager->persist($danseuse6);

        $danseuse7 = new danseuses();
        $danseuse7->setCategorie($this->getReference('categorie2'));
        $danseuse7->setDescription(" une balerine qui danse de la categorie 2");
        $danseuse7->setDisponibilite('1');
        $danseuse7->setImage($this->getReference('media7'));
        $danseuse7->setNom('balerine');
        $danseuse7->setPrix('734');
        $danseuse7->setTva($this->getReference('tva1'));
        $manager->persist($danseuse7);

        $danseuse8 = new danseuses();
        $danseuse8->setCategorie($this->getReference('categorie2'));
        $danseuse8->setDescription(" une balerine dansante de la categorie 2");
        $danseuse8->setDisponibilite('1');
        $danseuse8->setImage($this->getReference('media8'));
        $danseuse8->setNom('balerine');
        $danseuse8->setPrix('685');
        $danseuse8->setTva($this->getReference('tva1'));
        $manager->persist($danseuse8);

        $manager->flush();

        // pas bespin de faire un return this
    }
    public function getOrder()
    {
        return 4;
    }
}

?>