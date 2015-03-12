<?php
namespace Agence\AgenceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Agence\AgenceBundle\Entity\Categories;

class CategoriesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // voici la categorie 1 etoile
        $categorie1 = new Categories();
        $categorie1->setNom('etoile');
        $categorie1->setImage($this->getReference('media1'));
        $manager->persist($categorie1);

        // voici la deuxieme categorie balerine
        $categorie2 = new Categories();
        $categorie2->setNom('balerine');
        $categorie2->setImage($this->getReference('media2'));
        $manager->persist($categorie2);


        $manager->flush();

        // ici pour le nomnbre de categrie
        $this->addReference('categorie1', $categorie1);
        $this->addReference('categorie2', $categorie2);
        
        
    }
    public function getOrder()
    {
        return 2;
    }
}

?>