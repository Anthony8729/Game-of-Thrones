<?php

namespace App\Repository;

use App\Entity\Spinoff;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Spinoff|null find($id, $lockMode = null, $lockVersion = null)
 * @method Spinoff|null findOneBy(array $criteria, array $orderBy = null)
 * @method Spinoff[]    findAll()
 * @method Spinoff[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SpinoffRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Spinoff::class);
    }

    // /**
    //  * @return Spinoff[] Returns an array of Spinoff objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Spinoff
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
