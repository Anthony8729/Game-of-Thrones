<?php

namespace App\Repository;

use App\Entity\InformationsLégales;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method InformationsLégales|null find($id, $lockMode = null, $lockVersion = null)
 * @method InformationsLégales|null findOneBy(array $criteria, array $orderBy = null)
 * @method InformationsLégales[]    findAll()
 * @method InformationsLégales[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InformationsLégalesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InformationsLégales::class);
    }

    // /**
    //  * @return InformationsLégales[] Returns an array of InformationsLégales objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InformationsLégales
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
