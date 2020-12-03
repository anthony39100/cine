<?php

namespace App\Repository;

use App\Entity\Daredevil;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Daredevil|null find($id, $lockMode = null, $lockVersion = null)
 * @method Daredevil|null findOneBy(array $criteria, array $orderBy = null)
 * @method Daredevil[]    findAll()
 * @method Daredevil[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DaredevilRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Daredevil::class);
    }

    // /**
    //  * @return Daredevil[] Returns an array of Daredevil objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Daredevil
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
