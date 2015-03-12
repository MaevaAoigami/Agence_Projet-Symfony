<?php

namespace Agence\AgenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Danseuses
 *
 * @ORM\Table("danseuses")
 * @ORM\Entity(repositoryClass="Agence\AgenceBundle\Repository\DanseusesRepository")
 */
class Danseuses
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="Agence\AgenceBundle\Entity\Media", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */ 
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity="Agence\AgenceBundle\Entity\Categories", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */ 
    private $categorie;

    /**
     * @ORM\ManyToOne(targetEntity="Agence\AgenceBundle\Entity\Tva", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false)
     */ 
    private $tva;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=150)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibilite", type="boolean")
     */
    private $disponibilite;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Danseuses
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Danseuses
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set laDescription
     *
     * @param string $laDescription
     * @return Danseuses
     */
    public function setLaDescription($laDescription)
    {
        $this->laDescription = $laDescription;

        return $this;
    }

    /**
     * Get laDescription
     *
     * @return string 
     */
    public function getLaDescription()
    {
        return $this->laDescription;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Danseuses
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set disponibilite
     *
     * @param boolean $disponibilite
     * @return Danseuses
     */
    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    /**
     * Get disponibilite
     *
     * @return boolean 
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    /**
     * Set image
     *
     * @param \Agence\AgenceBundle\Entity\Media $image
     * @return Danseuses
     */
    public function setImage(\Agence\AgenceBundle\Entity\Media $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Agence\AgenceBundle\Entity\Media 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set categorie
     *
     * @param \Agence\AgenceBundle\Entity\Categories $categorie
     * @return Danseuses
     */
    public function setCategorie(\Agence\AgenceBundle\Entity\Categories $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Agence\AgenceBundle\Entity\Categories 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set tva
     *
     * @param \Agence\AgenceBundle\Entity\Tva $tva
     * @return Danseuses
     */
    public function setTva(\Agence\AgenceBundle\Entity\Tva $tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return \Agence\AgenceBundle\Entity\Tva 
     */
    public function getTva()
    {
        return $this->tva;
    }
}
