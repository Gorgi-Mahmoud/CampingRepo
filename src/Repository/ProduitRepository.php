<?php

namespace App\Repository;

use App\Data\SearchData;
use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @method Produit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produit[]    findAll()
 * @method Produit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitRepository extends ServiceEntityRepository
{
    /**
     * @var PaginatorInterface
     */
    private $paginator;

    public function __construct(ManagerRegistry $registry , PaginatorInterface $paginator)
    {
        parent::__construct($registry, Produit::class);
        $this->paginator = $paginator;
    }
    public function OrderByPrix(){
        return $this->createQueryBuilder('p')
            ->orderBy('p.prixProd','ASC')
            ->getQuery()->getResult()
            ;
    }
    public function OrderByQuantite(){
        return $this->createQueryBuilder('p')
            ->orderBy('p.qteProd','ASC')
            ->getQuery()->getResult()
            ;
    }
    public function findProductByRef($refProd){
        return $this->createQueryBuilder('produit')
            ->where('produit.refProd LIKE :refProd')
            ->setParameter('refProd', '%'.$refProd.'%')
            ->getQuery()
            ->getResult();
    }
    // /**
    //  * @return Produit[] Returns an array of Produit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Produit
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    /**
     * @param SearchData $search
     * @return \Knp\Component\Pager\Pagination\PaginationInterface
     */
    public function findSearch(SearchData $search): \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $query = $this
            ->createQueryBuilder('p')
            ->select('c', 'p')
            ->join('p.categorie', 'c');

        if (!empty($search->q)) {
            $query = $query
                ->andWhere('p.nomProd LIKE :q')
                ->setParameter('q', "%{$search->q}%");
        }
        if (!empty($search->min)){
            $query = $query
                ->andWhere('p.prixProd >= :min')
                ->setParameter('min', $search->min);
        }

        if (!empty($search->max) ){
            $query = $query
                ->andWhere('p.prixProd <= :max')
                ->setParameter('max', $search->max);
        }
        if (!empty($search->categories)) {
            $query = $query
                ->andWhere('c.id LIKE :categories')
                ->setParameter('categories', $search->categories);
        }
        $query = $query->getQuery();
        return $this->paginator->paginate(
            $query,
            $search->page,
            6
        );
    }
}
