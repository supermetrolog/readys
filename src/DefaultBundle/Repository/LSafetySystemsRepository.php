<?php

namespace DefaultBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;

class LSafetySystemsRepository extends EntityRepository {

    public function getAll($val){
        $qb = $this->createQueryBuilder('s');
        $lots = $qb
            ->andWhere($qb->expr()->in("s.id", ":val"))
            ->setParameter("val", array_diff(explode(",", $val), array("")));
        return $lots;
    }
}