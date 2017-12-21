<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * TestClientParPays
 *
 * @ORM\Table(name="test_client_par_pays")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TestClientParPaysRepository")
 */
class TestClientParPays
{
    const COUNTRY_FR = 'fr';
    const COUNTRY_EN = 'en';

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
     * @Assert\NotBlank(groups={"fr","en"})
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     * @Assert\NotBlank(groups={"fr","en"})
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nomMarital", type="string", length=255)
     * @Assert\NotBlank(groups={"fr"})
     */
    private $nomMarital;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     * @Assert\Choice({TestClientParPays::COUNTRY_FR, TestClientParPays::COUNTRY_EN})
     */
    private $pays;



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
     * @return TestClientParPays
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
     * @return TestClientParPays
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
     * Set nomMarital
     *
     * @param string $nomMarital
     *
     * @return TestClientParPays
     */
    public function setNomMarital($nomMarital)
    {
        $this->nomMarital = $nomMarital;

        return $this;
    }

    /**
     * Get nomMarital
     *
     * @return string
     */
    public function getNomMarital()
    {
        return $this->nomMarital;
    }

    /**
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param string $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    }
}

