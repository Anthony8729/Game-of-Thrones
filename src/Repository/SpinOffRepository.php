<?php

namespace App\Repository;

use App\Entity\SpinOff;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SpinOff|null find($id, $lockMode = null, $lockVersion = null)
 * @method SpinOff|null findOneBy(array $criteria, array $orderBy = null)
 * @method SpinOff[]    findAll()
 * @method SpinOff[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SpinOffRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SpinOff::class);
    }

    // /**
    //  * @return SpinOff[] Returns an array of SpinOff objects
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
    public function findOneBySomeField($value): ?SpinOff
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
