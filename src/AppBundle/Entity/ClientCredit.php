<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientCredit
 *
 * @ORM\Table(name="client_credit")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClientCreditRepository")
 */
class ClientCredit
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
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\ConjoinClientCredit")
     */
    private $conjoinClientCredit;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\RessourceClient",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $ressourceClient;


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
     * @return ClientCredit
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
     * @return ClientCredit
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
     * @return ClientCredit
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
     * @return ClientCredit
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
     * Set conjoinClientCredit
     *
     * @param \AppBundle\Entity\ConjoinClientCredit $conjoinClientCredit
     *
     * @return ClientCredit
     */
    public function setConjoinClientCredit(\AppBundle\Entity\ConjoinClientCredit $conjoinClientCredit = null)
    {
        $this->conjoinClientCredit = $conjoinClientCredit;

        return $this;
    }

    /**
     * Get conjoinClientCredit
     *
     * @return \AppBundle\Entity\ConjoinClientCredit
     */
    public function getConjoinClientCredit()
    {
        return $this->conjoinClientCredit;
    }

    /**
     * Set ressourceClient
     *
     * @param \AppBundle\Entity\RessourceClient $ressourceClient
     *
     * @return ClientCredit
     */
    public function setRessourceClient(\AppBundle\Entity\RessourceClient $ressourceClient)
    {
        $this->ressourceClient = $ressourceClient;

        return $this;
    }

    /**
     * Get ressourceClient
     *
     * @return \AppBundle\Entity\RessourceClient
     */
    public function getRessourceClient()
    {
        return $this->ressourceClient;
    }
}
