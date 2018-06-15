<?php

namespace App\Repository;

use App\Entity\CoeffTwo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CoeffTwo|null find($id, $lockMode = null, $lockVersion = null)
 * @method CoeffTwo|null findOneBy(array $criteria, array $orderBy = null)
 * @method CoeffTwo[]    findAll()
 * @method CoeffTwo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoeffTwoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CoeffTwo::class);
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
//     * @return CoeffTwo[] Returns an array of CoeffTwo objects
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
    public function findOneBySomeField($value): ?CoeffTwo
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
