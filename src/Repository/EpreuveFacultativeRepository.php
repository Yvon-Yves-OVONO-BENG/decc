<?php

namespace App\Repository;

use App\Entity\EpreuveFacultative;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EpreuveFacultative>
 *
 * @method EpreuveFacultative|null find($id, $lockMode = null, $lockVersion = null)
 * @method EpreuveFacultative|null findOneBy(array $criteria, array $orderBy = null)
 * @method EpreuveFacultative[]    findAll()
 * @method EpreuveFacultative[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EpreuveFacultativeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EpreuveFacultative::class);
    }

    public function save(EpreuveFacultative $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EpreuveFacultative $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return EpreuveFacultative[] Returns an array of EpreuveFacultative objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?EpreuveFacultative
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
