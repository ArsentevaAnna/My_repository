<?php

namespace App\Repository;

use App\Entity\CoeffFive;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CoeffFive|null find($id, $lockMode = null, $lockVersion = null)
 * @method CoeffFive|null findOneBy(array $criteria, array $orderBy = null)
 * @method CoeffFive[]    findAll()
 * @method CoeffFive[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoeffFiveRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CoeffFive::class);
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
//     * @return CoeffFive[] Returns an array of CoeffFive objects
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
    public function findOneBySomeField($value): ?CoeffFive
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
