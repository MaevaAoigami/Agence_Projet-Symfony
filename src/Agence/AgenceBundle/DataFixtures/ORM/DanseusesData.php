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
        $danseuse1->setNom('ELEONORA ABBAGNATO');
        $danseuse1->setDescription('Un danseur est nommé danseur étoile à l\'issue d\'une représentation sur scène, en tant que premier danseur.Pour atteindre le grade de premier danseur ou de première danseuse, il est obligatoire de participer au moins trois fois au concours interne de promotion de l\'Opéra de Paris. Le concours annuel de promotion se déroule tous les ans en novembre.En cas de réussite, on en gravit les échelons de la hiérarchie du ballet. Le danseur ou la danseuse est promu quadrille, coryphée et sujet à l\'issue de ce concours.Dans la première étape, passé le concours d\'entrée en juillet, un jeune danseur ou une jeune danseuse intègre le corps de ballet de l\'Opéra de Paris comme stagiaire.');
        $danseuse1->setPrix('1235');
        $danseuse1->setDisponible(1);
        $danseuse1->setValider(0);
        $danseuse1->setImage($this->getReference('media1'));
        $danseuse1->setTva($this->getReference('tva1'));
        $danseuse1->setCategories($this->getReference('categorie1'));
        $danseuse1->setUtilisateur($this->getReference('user3'));
        $manager->persist($danseuse1);

        $danseuse2 = new Danseuses();
        $danseuse2->setNom('AMANDINE ALBISSON');
        $danseuse2->setDescription('Un danseur est nommé danseur étoile à l\'issue d\'une représentation sur scène, en tant que premier danseur.Pour atteindre le grade de premier danseur ou de première danseuse, il est obligatoire de participer au moins trois fois au concours interne de promotion de l\'Opéra de Paris. Le concours annuel de promotion se déroule tous les ans en novembre.En cas de réussite, on en gravit les échelons de la hiérarchie du ballet. Le danseur ou la danseuse est promu quadrille, coryphée et sujet à l\'issue de ce concours.Dans la première étape, passé le concours d\'entrée en juillet, un jeune danseur ou une jeune danseuse intègre le corps de ballet de l\'Opéra de Paris comme stagiaire.');
        $danseuse2->setPrix('1235');
        $danseuse2->setDisponible(1);
        $danseuse2->setValider(0);
        $danseuse2->setImage($this->getReference('media2'));
        $danseuse2->setTva($this->getReference('tva1'));
        $danseuse2->setCategories($this->getReference('categorie3'));
        $danseuse2->setUtilisateur($this->getReference('user1'));
        $manager->persist($danseuse2);

        $danseuse3 = new Danseuses();
        $danseuse3->setNom('ÉMILIE COZETTE');
        $danseuse3->setDescription('Un danseur est nommé danseur étoile à l\'issue d\'une représentation sur scène, en tant que premier danseur.Pour atteindre le grade de premier danseur ou de première danseuse, il est obligatoire de participer au moins trois fois au concours interne de promotion de l\'Opéra de Paris. Le concours annuel de promotion se déroule tous les ans en novembre.En cas de réussite, on en gravit les échelons de la hiérarchie du ballet. Le danseur ou la danseuse est promu quadrille, coryphée et sujet à l\'issue de ce concours.Dans la première étape, passé le concours d\'entrée en juillet, un jeune danseur ou une jeune danseuse intègre le corps de ballet de l\'Opéra de Paris comme stagiaire.');
        $danseuse3->setPrix('1235');
        $danseuse3->setDisponible(1);
        $danseuse3->setValider(0);
        $danseuse3->setImage($this->getReference('media3'));
        $danseuse3->setTva($this->getReference('tva1'));
        $danseuse3->setCategories($this->getReference('categorie1'));
        $danseuse3->setUtilisateur($this->getReference('user2'));
        $manager->persist($danseuse3);

        $danseuse4 = new Danseuses();
        $danseuse4->setNom('AURÉLIE DUPONT');
        $danseuse4->setDescription('Un danseur est nommé danseur étoile à l\'issue d\'une représentation sur scène, en tant que premier danseur.Pour atteindre le grade de premier danseur ou de première danseuse, il est obligatoire de participer au moins trois fois au concours interne de promotion de l\'Opéra de Paris. Le concours annuel de promotion se déroule tous les ans en novembre.En cas de réussite, on en gravit les échelons de la hiérarchie du ballet. Le danseur ou la danseuse est promu quadrille, coryphée et sujet à l\'issue de ce concours.Dans la première étape, passé le concours d\'entrée en juillet, un jeune danseur ou une jeune danseuse intègre le corps de ballet de l\'Opéra de Paris comme stagiaire.');
        $danseuse4->setPrix('1235');
        $danseuse4->setDisponible(1);
        $danseuse4->setValider(0);
        $danseuse4->setImage($this->getReference('media4'));
        $danseuse4->setTva($this->getReference('tva1'));
        $danseuse4->setCategories($this->getReference('categorie1'));
        $danseuse4->setUtilisateur($this->getReference('user3'));
        $manager->persist($danseuse4);

        $danseuse5 = new Danseuses();
        $danseuse5->setNom('DOROTHÉE GILBERT');
        $danseuse5->setDescription('Un danseur est nommé danseur étoile à l\'issue d\'une représentation sur scène, en tant que premier danseur.Pour atteindre le grade de premier danseur ou de première danseuse, il est obligatoire de participer au moins trois fois au concours interne de promotion de l\'Opéra de Paris. Le concours annuel de promotion se déroule tous les ans en novembre.En cas de réussite, on en gravit les échelons de la hiérarchie du ballet. Le danseur ou la danseuse est promu quadrille, coryphée et sujet à l\'issue de ce concours.Dans la première étape, passé le concours d\'entrée en juillet, un jeune danseur ou une jeune danseuse intègre le corps de ballet de l\'Opéra de Paris comme stagiaire.');
        $danseuse5->setPrix('1235');
        $danseuse5->setDisponible(1);
        $danseuse5->setValider(0);
        $danseuse5->setImage($this->getReference('media5'));
        $danseuse5->setTva($this->getReference('tva1'));
        $danseuse5->setCategories($this->getReference('categorie1'));
        $danseuse5->setUtilisateur($this->getReference('user2'));
        $manager->persist($danseuse5);

        $danseuse6 = new Danseuses();
        $danseuse6->setNom('MARIE-AGNÈS GILLOT');
        $danseuse6->setDescription('Un danseur est nommé danseur étoile à l\'issue d\'une représentation sur scène, en tant que premier danseur.Pour atteindre le grade de premier danseur ou de première danseuse, il est obligatoire de participer au moins trois fois au concours interne de promotion de l\'Opéra de Paris. Le concours annuel de promotion se déroule tous les ans en novembre.En cas de réussite, on en gravit les échelons de la hiérarchie du ballet. Le danseur ou la danseuse est promu quadrille, coryphée et sujet à l\'issue de ce concours.Dans la première étape, passé le concours d\'entrée en juillet, un jeune danseur ou une jeune danseuse intègre le corps de ballet de l\'Opéra de Paris comme stagiaire.');
        $danseuse6->setPrix('1235');
        $danseuse6->setDisponible(1);
        $danseuse6->setValider(0);
        $danseuse6->setImage($this->getReference('media6'));
        $danseuse6->setTva($this->getReference('tva1'));
        $danseuse6->setCategories($this->getReference('categorie2'));
        $danseuse6->setUtilisateur($this->getReference('user4'));
        $manager->persist($danseuse6);

        $danseuse7 = new Danseuses();
        $danseuse7->setNom('VAGINA TURLUTOVA');
        $danseuse7->setDescription('Un danseur est nommé danseur étoile à l\'issue d\'une représentation sur scène, en tant que premier danseur.Pour atteindre le grade de premier danseur ou de première danseuse, il est obligatoire de participer au moins trois fois au concours interne de promotion de l\'Opéra de Paris. Le concours annuel de promotion se déroule tous les ans en novembre.En cas de réussite, on en gravit les échelons de la hiérarchie du ballet. Le danseur ou la danseuse est promu quadrille, coryphée et sujet à l\'issue de ce concours.Dans la première étape, passé le concours d\'entrée en juillet, un jeune danseur ou une jeune danseuse intègre le corps de ballet de l\'Opéra de Paris comme stagiaire.');
        $danseuse7->setPrix('1235');
        $danseuse7->setDisponible(1);
        $danseuse7->setValider(0);
        $danseuse7->setImage($this->getReference('media7'));
        $danseuse7->setTva($this->getReference('tva1'));
        $danseuse7->setCategories($this->getReference('categorie2'));
        $danseuse7->setUtilisateur($this->getReference('user2'));
        $manager->persist($danseuse7);

        $manager->flush();

        $this->addReference('danseuse1', $danseuse1);
        $this->addReference('danseuse2', $danseuse2);
        $this->addReference('danseuse3', $danseuse3);
        $this->addReference('danseuse4', $danseuse4);
        $this->addReference('danseuse5', $danseuse5);
        $this->addReference('danseuse6', $danseuse6);
        $this->addReference('danseuse7', $danseuse7);
    }

    public function getOrder()
    {
        return 5;
    }
}