<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DossierAchat
 *
 * @ORM\Table(name="dossier_achat")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DossierAchatRepository")
 */
class DossierAchat
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
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Voiture")
     */
    private $voiture;


    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\ClientCredit",cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $clientCredit;

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
     * Set voiture
     *
     * @param \AppBundle\Entity\Voiture $voiture
     *
     * @return DossierAchat
     */
    public function setVoiture(\AppBundle\Entity\Voiture $voiture = null)
    {
        $this->voiture = $voiture;

        return $this;
    }

    /**
     * Get voiture
     *
     * @return \AppBundle\Entity\Voiture
     */
    public function getVoiture()
    {
        return $this->voiture;
    }

    /**
     * Set clientCredit
     *
     * @param \AppBundle\Entity\ClientCredit $clientCredit
     *
     * @return DossierAchat
     */
    public function setClientCredit(\AppBundle\Entity\ClientCredit $clientCredit)
    {
        $this->clientCredit = $clientCredit;

        return $this;
    }

    /**
     * Get clientCredit
     *
     * @return \AppBundle\Entity\ClientCredit
     */
    public function getClientCredit()
    {
        return $this->clientCredit;
    }
}
