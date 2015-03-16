<?php

namespace Agence\AgenceBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * DanseusesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DanseusesRepository extends EntityRepository
{

	public function findArray($array)
    {
        $qb = $this->createQueryBuilder('u')
                ->Select('u')
                ->Where('u.id IN (:array)')
                ->setParameter('array', $array);
        return $qb->getQuery()->getResult();
    }

    public function byCategorie($categorie)
    {
         $qb = $this->createQueryBuilder('u')
                    ->select('u')
                    ->where('u.categories = :categorie')
                    ->andWhere('u.disponible = 1')
                    ->orderBy('u.id')
                    ->setParameter('categorie', $categorie);
        return $qb->getQuery()->getResult();
    }
}
