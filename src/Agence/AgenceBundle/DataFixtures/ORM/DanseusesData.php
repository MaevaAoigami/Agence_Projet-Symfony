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
        $danseuse1->setPhoto('http://foyerculturel.milly.free.fr/DanseClassique/photos/DanseClassique.Vignette.350x459.jpg');
        $manager->persist($danseuse1);

        $danseuse2 = new Danseuses();
        $danseuse2->setNom('Marie');
        $danseuse2->setDescription('Danseuse étoile veuve.');
        $danseuse2->setPrix('800');
        $danseuse2->setDisponible(1);
        $danseuse2->setCategorie('Veuve');
        $danseuse2->setTva($this->getReference('tva2'));
        $danseuse2->setPhoto('http://www.ac-grenoble.fr/ecole/sauve.nyons/IMG/jpg/Danse_classique.jpg');
        $manager->persist($danseuse2);

        $danseuse3 = new Danseuses();
        $danseuse3->setNom('Chloé');
        $danseuse3->setDescription('Super danseuse étoile.');
        $danseuse3->setPrix('1200');
        $danseuse3->setDisponible(1);
        $danseuse3->setCategorie('Étoile');
        $danseuse3->setTva($this->getReference('tva2'));
        $danseuse3->setPhoto('http://images.jedessine.com/_uploads/_tiny_galerie/20090833/classique-source_wli.jpg');
        $manager->persist($danseuse3);

        $danseuse4 = new Danseuses();
        $danseuse4->setNom('Patricia');
        $danseuse4->setDescription('Toute jeune danseuse.');
        $danseuse4->setPrix('500');
        $danseuse4->setDisponible(1);
        $danseuse4->setCategorie('Débutante');
        $danseuse4->setTva($this->getReference('tva2'));
        $danseuse4->setPhoto('http://www.espace-danse-79.com/espace-danse/images/danse-classique-niort/photo6_g.jpg');
        $manager->persist($danseuse4);

        $danseuse5 = new Danseuses();
        $danseuse5->setNom('Sarah');
        $danseuse5->setDescription('Jeune danseuse.');
        $danseuse5->setPrix('1200');
        $danseuse5->setDisponible(1);
        $danseuse5->setCategorie('Débutante');
        $danseuse5->setTva($this->getReference('tva2'));
        $danseuse5->setPhoto('http://s3.e-monsite.com/2011/02/06/12/219437731.jpg');
        $manager->persist($danseuse5);

        $danseuse6 = new Danseuses();
        $danseuse6->setNom('Flora');
        $danseuse6->setDescription('Plus jeune danseuse veuve.');
        $danseuse6->setPrix('1500');
        $danseuse6->setDisponible(1);
        $danseuse6->setCategorie('Veuve');
        $danseuse6->setTva($this->getReference('tva2'));
        $danseuse6->setPhoto('http://static.seety.pagesjaunes.fr/asset_site_89fb29e2-4806-47fe-88ba-880295ed8f37/ae2fd69f-10fd-4be3-8bcc-d4050c3c23f4');
        $manager->persist($danseuse6);

        $danseuse7 = new Danseuses();
        $danseuse7->setNom('Olivia');
        $danseuse7->setDescription('Plus vieille danseuse étoile.');
        $danseuse7->setPrix('1500');
        $danseuse7->setDisponible(1);
        $danseuse7->setCategorie('Étoile');
        $danseuse7->setTva($this->getReference('tva2'));
        $danseuse7->setPhoto('http://imworld.aufeminin.com/dossiers/D20130918/Sans-titre-3-171846_L.jpg');
        $manager->persist($danseuse7);

        $danseuse8 = new Danseuses();
        $danseuse8->setNom('Noëlle');
        $danseuse8->setDescription('Danseuse étoile prodige.');
        $danseuse8->setPrix('1500');
        $danseuse8->setDisponible(1);
        $danseuse8->setCategorie('Étoile');
        $danseuse8->setTva($this->getReference('tva2'));
        $danseuse8->setPhoto('http://www.utile.fr/sites/default/files/imagecache/article_image/images/ballet_preparation_little_ballerina_girl_.jpg');
        $manager->persist($danseuse8);

        $manager->flush();

        $this->addReference('danseuse1', $danseuse1);
        $this->addReference('danseuse2', $danseuse2);
        $this->addReference('danseuse3', $danseuse3);
        $this->addReference('danseuse4', $danseuse4);
        $this->addReference('danseuse5', $danseuse5);
        $this->addReference('danseuse6', $danseuse6);
        $this->addReference('danseuse7', $danseuse7);
        $this->addReference('danseuse8', $danseuse8);
    }

    public function getOrder()
    {
        return 2;
    }
}