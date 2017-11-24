<?php
/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 24/11/17
 * Time: 21:05
 */

namespace AppBundle\Repository;


use AppBundle\Entity\Personne;
use Doctrine\ORM\EntityRepository;

class PersonneRepository extends EntityRepository
{
    /**
     * @return Personne[]
     */
    public function findAllPublished()
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.isActive = :isActive')
            ->setParameter('isActive',true)
            ->orderBy('p.name','DESC')
            ->getQuery()
            ->execute();
    }
}