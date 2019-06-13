<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Competence
 *
 * @ORM\Table(name="competence")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompetenceRepository")
 * @UniqueEntity(fields={"name"}, message="Compétence saisie éxiste déja!")
 */
class Competence
{




    /**
     * @return mixed
     */
    public function getStagiaire()
    {
        return $this->stagiaire;
    }

    /**
     * @param mixed $stagiaire
     */
    public function setStagiaire($stagiaire)
    {
        $this->stagiaire = $stagiaire;
    }
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
     * @ORM\Column(name="name", type="string", length=150, unique=true, nullable=false)
     * @Assert\NotBlank(message="Indiquer votre nom")
     * @ORM\OrderBy({"name" = "DESC"})
     *
     */
    private $name;

    /**
     *
     *
     * @ORM\ManyToMany(targetEntity="Stagiaire", inversedBy="competence")
     */

    private $stagiaire;


    /**
     * Get id.
     *
     * @return int
     */

    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Competence
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
