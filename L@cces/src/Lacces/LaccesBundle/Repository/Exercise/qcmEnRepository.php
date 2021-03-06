<?php

namespace Lacces\LaccesBundle\Repository\Exercise;

/**
 * qcmEnRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class qcmEnRepository extends \Doctrine\ORM\EntityRepository
{

  public function findByWordEnId ($wordEnId){
      return $this->createQueryBuilder('c')
        ->select('c.id')
        ->where('c.wordEn=:word')
        ->setParameter('word', $wordEnId)
        ->getQuery()
        ->getResult();
  }

  public function findAll()
  {
      return $this->createQueryBuilder('c')
          ->join('c.wordEn', 'w')
          ->addSelect('w')
          ->getQuery()
          ->getResult();
  }
}
