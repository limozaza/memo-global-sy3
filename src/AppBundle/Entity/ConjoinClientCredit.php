<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConjoinClientCredit
 *
 * @ORM\Table(name="conjoin_client_credit")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ConjoinClientCreditRepository")
 */
class ConjoinClientCredit
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="profession", type="string", length=255)
     */
    private $profession;


    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\RessourceConjoint",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $ressourceConjoint;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return ConjoinClientCredit
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return ConjoinClientCredit
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return ConjoinClientCredit
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set profession
     *
     * @param string $profession
     *
     * @return ConjoinClientCredit
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
     * Get profession
     *
     * @return string
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set ressourceConjoint
     *
     * @param \AppBundle\Entity\RessourceConjoint $ressourceConjoint
     *
     * @return ConjoinClientCredit
     */
    public function setRessourceConjoint(\AppBundle\Entity\RessourceConjoint $ressourceConjoint)
    {
        $this->ressourceConjoint = $ressourceConjoint;

        return $this;
    }

    /**
     * Get ressourceConjoint
     *
     * @return \AppBundle\Entity\RessourceConjoint
     */
    public function getRessourceConjoint()
    {
        return $this->ressourceConjoint;
    }
}
