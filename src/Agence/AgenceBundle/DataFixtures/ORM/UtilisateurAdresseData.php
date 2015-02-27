<?php

namespace Agence\AgenceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Agence\AgenceBundle\Entity\UtilisateurAdresse;

class UtilisateurAdresseData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $adresse1 = new UtilisateurAdresse();
        $adresse1->setUtilisateur($this->getReference('user1'));
        $adresse1->setNom('Polo');
        $adresse1->setPrenom('Marco');
        $adresse1->setTelephone('0600000000');
        $adresse1->setAdresse('8 rue de chez Moi');
        $adresse1->setCp('10000');
        $adresse1->setVille('ChezMoi');
        $adresse1->setPays('France');
        $manager->persist($adresse1);

        $adresse2 = new UtilisateurAdresse();
        $adresse2->setUtilisateur($this->getReference('user2'));
        $adresse2->setNom('De Vinci');
        $adresse2->setPrenom('Léonard');
        $adresse2->setTelephone('0601010101');
        $adresse2->setAdresse('12 rue de la Joconde');
        $adresse2->setCp('38000');
        $adresse2->setVille('Florence');
        $adresse2->setPays('Italie');
        $manager->persist($adresse2);

        $adresse3 = new UtilisateurAdresse();
        $adresse3->setUtilisateur($this->getReference('user3'));
        $adresse3->setNom('Saso');
        $adresse3->setPrenom('Julien');
        $adresse3->setTelephone('0745856930');
        $adresse3->setAdresse('3 rue de la Liberté');
        $adresse3->setCp('35000');
        $adresse3->setVille('Rennes');
        $adresse3->setPays('France');
        $manager->persist($adresse3);

        $adresse4 = new UtilisateurAdresse();
        $adresse4->setUtilisateur($this->getReference('user4'));
        $adresse4->setNom('Papon');
        $adresse4->setPrenom('Bernard');
        $adresse4->setTelephone('0620147810');
        $adresse4->setAdresse('65 avenue de Paris');
        $adresse4->setCp('75014');
        $adresse4->setVille('Paris');
        $adresse4->setPays('France');
        $manager->persist($adresse4);

        $adresse5 = new UtilisateurAdresse();
        $adresse5->setUtilisateur($this->getReference('user5'));
        $adresse5->setNom('Chatre');
        $adresse5->setPrenom('Marie');
        $adresse5->setTelephone('0789654102');
        $adresse5->setAdresse('78 Boulevard de Voltaire');
        $adresse5->setCp('75011');
        $adresse5->setVille('Paris');
        $adresse5->setPays('France');
        $manager->persist($adresse5);

        $manager->flush();
    }

    public function getOrder()
    {
        return 5;
    }
}