<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Stagiaire
 *
 * @ORM\Table(name="stagiaire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StagiaireRepository")
 */
class Stagiaire
{
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
     *
     * @ORM\Column(name="name", type="string", length=150)
     * @Assert\NotBlank(message="Indiquer votre nom")
     *  * @Assert\Length(
     *     min=5,
     *     max=150,
     *     minMessage="Nom de 5 lettres min!",
     *     maxMessage="Nom trop long!"
     * )
     *
     *
     * @Assert\Regex(
     *     pattern="/^[A-Za-z]+$/",
     *     message="Lettre uniquement"
     * )
     *@ORM\OrderBy({"name" = "DESC"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=10)
     * @Assert\NotBlank(message="Indiquer votre numéro de téléphone")
     * @Assert\Length(
     *     min=10,
     *     max=10,
     *     minMessage="telephone sur 10 chiffre!",
     *     maxMessage="telephone sur 10 chiffre!"
     * )
     *
     * @Assert\Regex(
     *     pattern="/^[0-9]+$/",
     *     message="Chiffres uniquement!"
     * )
     *
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="birthday", type="date", length=10)
     * @Assert\NotBlank(message="Indiquer votre date anniverssaire")

     *
     *
     */
    private $birthday;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     *
     *
     * @ORM\ManyToMany(targetEntity="Competence", inversedBy="stagiaire")
     */

    private $competence;


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
     * @return Stagiaire
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

    /**
     * @return mixed
     */
    public function getCompetence()
    {
        return $this->competence;
    }

    /**
     * @param mixed $competence
     */
    public function setCompetence($competence)
    {
        $this->competence = $competence;
    }

    /**
     * Set phone.
     *
     * @param string $phone
     *
     * @return Stagiaire
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set birthday.
     *
     * @param string $birthday
     *
     * @return Stagiaire
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday.
     *
     * @return string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return Stagiaire
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function __construct()
    {
        // mettre le createdAt avec la date actuelle
        $this->setCreatedAt(new \DateTime());

    }

}
