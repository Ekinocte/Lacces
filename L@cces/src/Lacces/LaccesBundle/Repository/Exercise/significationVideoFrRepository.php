<?php

namespace Lacces\LaccesBundle\Repository\Exercise;

/**
 * significationVideoFrRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class significationVideoFrRepository extends \Doctrine\ORM\EntityRepository
{
  public function findByWordFrId ($wordFrId){
    return $this->createQueryBuilder('c')
      ->select('c.id')
      ->where('c.wordFr=:word')
      ->setParameter('word', $wordFrId)
      ->getQuery()
      ->getResult();
  }
}