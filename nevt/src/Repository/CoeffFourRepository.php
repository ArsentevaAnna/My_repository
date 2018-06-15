<?php

namespace App\Repository;

use App\Entity\CoeffFour;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CoeffFour|null find($id, $lockMode = null, $lockVersion = null)
 * @method CoeffFour|null findOneBy(array $criteria, array $orderBy = null)
 * @method CoeffFour[]    findAll()
 * @method CoeffFour[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoeffFourRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CoeffFour::class);
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
//     * @return CoeffFour[] Returns an array of CoeffFour objects
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
    public function findOneBySomeField($value): ?CoeffFour
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
