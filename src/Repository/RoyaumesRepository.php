<?php

namespace App\Repository;

use App\Entity\Royaumes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Royaumes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Royaumes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Royaumes[]    findAll()
 * @method Royaumes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoyaumesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Royaumes::class);
    }

    // /**
    //  * @return Royaumes[] Returns an array of Royaumes objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Royaumes
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
