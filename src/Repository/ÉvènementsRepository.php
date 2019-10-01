<?php

namespace App\Repository;

use App\Entity\Évènements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Évènements|null find($id, $lockMode = null, $lockVersion = null)
 * @method Évènements|null findOneBy(array $criteria, array $orderBy = null)
 * @method Évènements[]    findAll()
 * @method Évènements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ÉvènementsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Évènements::class);
    }

    // /**
    //  * @return Évènements[] Returns an array of Évènements objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('�')
            ->andWhere('�.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('�.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Évènements
    {
        return $this->createQueryBuilder('�')
            ->andWhere('�.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
