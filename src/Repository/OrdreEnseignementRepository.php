<?php

namespace App\Repository;

use App\Entity\OrdreEnseignement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OrdreEnseignement>
 *
 * @method OrdreEnseignement|null find($id, $lockMode = null, $lockVersion = null)
 * @method OrdreEnseignement|null findOneBy(array $criteria, array $orderBy = null)
 * @method OrdreEnseignement[]    findAll()
 * @method OrdreEnseignement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdreEnseignementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OrdreEnseignement::class);
    }

    public function save(OrdreEnseignement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OrdreEnseignement $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OrdreEnseignement[] Returns an array of OrdreEnseignement objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?OrdreEnseignement
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
