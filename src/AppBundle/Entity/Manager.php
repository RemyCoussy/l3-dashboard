<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Manager
 *
 * @ORM\Table(name="manager")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ManagerRepository")
 */
class Manager
{
    /**

    * @ORM\OneToMany(targetEntity="Fiche", mappedBy="Manager")
    */
    private $fiches;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    public function __toString(){
        return $this->firstName.' '.$this->lastName;
    }

    public function __construct() {
        $this->fiches = new ArrayCollection();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Manager
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Manager
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Manager
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Add fich
     *
     * @param \AppBundle\Entity\Fiches $fich
     *
     * @return Manager
     */
    public function addFich(\AppBundle\Entity\Fiche $fich)
    {
        $this->fiches[] = $fich;

        return $this;
    }

    /**
     * Remove fich
     *
     * @param \AppBundle\Entity\Fiches $fich
     */
    public function removeFich(\AppBundle\Entity\Fiche $fich)
    {
        $this->fiches->removeElement($fich);
    }

    /**
     * Get fiches
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFiches()
    {
        return $this->fiches;
    }

    /**
     * Set project
     *
     * @param \AppBundle\Entity\Projet $project
     *
     * @return Manager
     */
    public function setProject(\AppBundle\Entity\Projet $project = null)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return \AppBundle\Entity\Projet
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set fiches
     *
     * @param \AppBundle\Entity\Fiche $fiches
     *
     * @return Manager
     */
    public function setFiches(\AppBundle\Entity\Fiche $fiches = null)
    {
        $this->fiches = $fiches;

        return $this;
    }
}
