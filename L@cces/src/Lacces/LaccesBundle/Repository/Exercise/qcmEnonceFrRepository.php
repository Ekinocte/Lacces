<?php

namespace Lacces\LaccesBundle\Repository\Exercise;

/**
 * qcmEnonceFrRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class qcmEnonceFrRepository extends \Doctrine\ORM\EntityRepository
{
  public function findByQcmFrId ($qcmFrId){
    return $this->createQueryBuilder('c')
      ->where('c.qcmFr=:word')
      ->setParameter('word', $qcmFrId)
      ->getQuery()
      ->getResult();
  }

    public function findQcmenonceByQcmAndEnonce($enonce){
        return $this->createQueryBuilder('c')
            ->where('c.enonces=:enonce')
            ->setParameter('enonce', $enonce)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }
}