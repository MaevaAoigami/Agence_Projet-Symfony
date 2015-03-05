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
     * @ORM\OneToMany(targetEntity="Agence\AgenceBundle\Entity\Media",  mappedBy="danseuse", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $media;

    /**
     * @ORM\ManyToOne(targetEntity="Agence\AgenceBundle\Entity\Tva",  inversedBy="danseuse", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $tva;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
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
     * @ORM\Column(name="disponible", type="boolean")
     */
    private $disponible;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=80)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * Transform to string
     * 
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getId();
    }
    
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
     * Set disponible
     *
     * @param boolean $disponible
     * @return Danseuses
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;

        return $this;
    }

    /**
     * Get disponible
     *
     * @return boolean 
     */
    public function getDisponible()
    {
        return $this->disponible;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Danseuses
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->media = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add media
     *
     * @param \Agence\AgenceBundle\Entity\Media $media
     * @return Danseuses
     */
    public function addMedia(\Agence\AgenceBundle\Entity\Media $media)
    {
        $this->media[] = $media;

        return $this;
    }

    /**
     * Remove media
     *
     * @param \Agence\AgenceBundle\Entity\Media $media
     */
    public function removeMedia(\Agence\AgenceBundle\Entity\Media $media)
    {
        $this->media->removeElement($media);
    }

    /**
     * Get media
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMedia()
    {
        return $this->media;
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

    /**
     * Set photo
     *
     * @param string $photo
     * @return Danseuses
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set qte
     *
     * @param integer $qte
     * @return Danseuses
     */
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get qte
     *
     * @return integer 
     */
    public function getQte()
    {
        return $this->qte;
    }
}
