<?php

namespace App\Repository;

use App\Entity\Video;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @method Video|null find($id, $lockMode = null, $lockVersion = null)
 * @method Video|null findOneBy(array $criteria, array $orderBy = null)
 * @method Video[]    findAll()
 * @method Video[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VideoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator)
    {
        parent::__construct($registry, Video::class);
        $this->paginator = $paginator;

    }
    public function findByChildIds(array $val,$page, $sort_method)
    {
        $sort_method = $sort_method !== 'rating' ? $sort_method : 'ASC';
        $db = $this->createQueryBuilder('v')->where('v.category IN (:val)')->setParameter('val', $val)->orderBy('v.title', $sort_method)->getQuery();
        return $this->paginator->paginate($db,$page,5);
    }
    public function findByTitle(string $query,int $page, ?string $sort_method)
    {
        $sort_method = $sort_method !== 'rating' ? $sort_method : 'ASC';

        $qb = $this->createQueryBuilder('v');
        $st = $this->prepareQuery($query);
        foreach ($st as $key => $term)
        {
            $qb->orWhere('v.title LIKE :t_'.$key)->setParameter('t_'.$key,'%'.trim($term).'%');
        }
        $db = $qb->orderBy('v.title', $sort_method)->getQuery();
        return $this->paginator->paginate($db,$page,5);
    }
    private function prepareQuery(string $query): array
    {
        $terms = array_unique(explode(' ',$query));
        return array_filter($terms, function ($term){
            return 2 <= mb_strlen($term);
        });
    }
    public function videoDetails($id)
    {
        try {
            return $this->createQueryBuilder('v')
                ->leftJoin('v.comments', 'c')
                ->leftJoin('c.user', 'u')
                ->addSelect('c', 'u')
                ->where('v.id = :id')
                ->setParameter('id', $id)
                ->getQuery()
                ->getOneOrNullResult();
        } catch (NonUniqueResultException $e) {
            return $e->getMessage();
        }
    }
// /**
    //  * @return Video[] Returns an array of Video objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Video
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
