<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Identite
 *
 * @ORM\Table(name="identite")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IdentiteRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Identite
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;


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
     * Set name
     *
     * @param string $name
     *
     * @return Identite
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Identite
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }


    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function formatPhone()
    {
        $this->setPhone($this->traitementPhone($this->getPhone()));
    }

    private function traitementPhone($tel)
    {
        $tel = str_split($tel);
        $tab = [];

        for($i=0;$i<count($tel);$i = $i+2)
        {
            $tab[] = $tel[$i].$tel[$i+1];
        }

        return implode(' ',$tab);
    }
}
