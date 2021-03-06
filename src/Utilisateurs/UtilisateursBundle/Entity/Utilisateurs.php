<?php
// src/Acme/UserBundle/Entity/User.php

namespace Utilisateurs\UtilisateursBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateurs")
 */
class Utilisateurs extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        $this->commande = new \Doctrine\Common\Collections\ArrayCollection();
        $this->adresses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @ORM\OneToMany(targetEntity="Agence\AgenceBundle\Entity\Commande", mappedBy="utilisateur", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $commande;

    /**
     * @ORM\OneToMany(targetEntity="Agence\AgenceBundle\Entity\UtilisateurAdresse", mappedBy="utilisateur", cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $adresses;

    /**
     * @ORM\OneToMany(targetEntity="Agence\AgenceBundle\Entity\Danseuses", mappedBy="utilisateur", cascade={"remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $danseuse;

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
     * Add commande
     *
     * @param \Agence\AgenceBundle\Entity\Commande $commande
     * @return Utilisateurs
     */
    public function addCommande(\Agence\AgenceBundle\Entity\Commande $commande)
    {
        $this->commande[] = $commande;

        return $this;
    }

    /**
     * Remove commande
     *
     * @param \Agence\AgenceBundle\Entity\Commande $commande
     */
    public function removeCommande(\Agence\AgenceBundle\Entity\Commande $commande)
    {
        $this->commande->removeElement($commande);
    }

    /**
     * Get commande
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Add adresses
     *
     * @param \Agence\AgenceBundle\Entity\UtilisateurAdresse $adresses
     * @return Utilisateurs
     */
    public function addAdress(\Agence\AgenceBundle\Entity\UtilisateurAdresse $adresses)
    {
        $this->adresses[] = $adresses;

        return $this;
    }

    /**
     * Remove adresses
     *
     * @param \Agence\AgenceBundle\Entity\UtilisateurAdresse $adresses
     */
    public function removeAdress(\Agence\AgenceBundle\Entity\UtilisateurAdresse $adresses)
    {
        $this->adresses->removeElement($adresses);
    }

    /**
     * Get adresses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAdresses()
    {
        return $this->adresses;
    }

    /**
     * Add danseuse
     *
     * @param \Agence\AgenceBundle\Entity\Danseuses $danseuse
     * @return Utilisateurs
     */
    public function addDanseuse(\Agence\AgenceBundle\Entity\Danseuses $danseuse)
    {
        $this->danseuse[] = $danseuse;

        return $this;
    }

    /**
     * Remove danseuse
     *
     * @param \Agence\AgenceBundle\Entity\Danseuses $danseuse
     */
    public function removeDanseuse(\Agence\AgenceBundle\Entity\Danseuses $danseuse)
    {
        $this->danseuse->removeElement($danseuse);
    }

    /**
     * Get danseuse
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDanseuse()
    {
        return $this->danseuse;
    }
}
