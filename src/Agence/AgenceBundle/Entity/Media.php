<?php

namespace Agence\AgenceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table("media")
 * @ORM\Entity(repositoryClass="Agence\AgenceBundle\Repository\MediaRepository")
 */
class Media
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
     * @ORM\ManyToOne(targetEntity="Agence\AgenceBundle\Entity\Danseuses", inversedBy="media")
     * @ORM\JoinColumn(nullable=true)
     */
    private $danseuse;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;

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
     * Set path
     *
     * @param string $path
     * @return media
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set alt
     *
     * @param string $alt
     * @return media
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string 
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set danseuse
     *
     * @param \Agence\AgenceBundle\Entity\Danseuses $danseuse
     * @return Media
     */
    public function setDanseuse(\Agence\AgenceBundle\Entity\Danseuses $danseuse = null)
    {
        $this->danseuse = $danseuse;

        return $this;
    }

    /**
     * Get danseuse
     *
     * @return \Agence\AgenceBundle\Entity\Danseuses 
     */
    public function getDanseuse()
    {
        return $this->danseuse;
    }
}
