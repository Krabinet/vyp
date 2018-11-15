<?php

namespace App\Repository;

use App\Entity\Rapport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Rapport|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rapport|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rapport[]    findAll()
 * @method Rapport[]    findAllOrder()
 * @method Rapport[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RapportRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Rapport::class);
    }

    public function findAllOrder()
    {
        $querybuilder = $this->createQueryBuilder('r')
            ->orderBy('r.id', 'ASC')
            ->getQuery();
        return $querybuilder->getResult();
    }

//    /**
//     * @return Rapport[] Returns an array of Rapport objects
//     */
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
    public function findAllOrder()
    {
        return $this->createQueryBuilder('r')
            ->orderBy('r.id', 'ASC')
            ->getQuery()
            ->getResult();
    }
    */

    /*
    public function findOneBySomeField($value): ?Rapport
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
?>