<?php

namespace App\Repository;

use App\Entity\CoeffOne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CoeffOne|null find($id, $lockMode = null, $lockVersion = null)
 * @method CoeffOne|null findOneBy(array $criteria, array $orderBy = null)
 * @method CoeffOne[]    findAll()
 * @method CoeffOne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoeffOneRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CoeffOne::class);
    }

    public function findAllCoeff()
    {
        return $this->createQueryBuilder('c')
            ->select('c.company_name', 'c.date', 'c.coeff_value')
            ->getQuery()
            ->getResult()
            ;
    }

//    /**
//     * @return CoeffOne[] Returns an array of CoeffOne objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CoeffOne
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
