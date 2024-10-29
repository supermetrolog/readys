<?php

namespace DefaultBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;

class LGateTypesRepository extends EntityRepository {

    public function getAll($val){
        $qb = $this->createQueryBuilder('g');
        $lots = $qb
            ->andWhere($qb->expr()->in("g.id", ":val"))
            ->setParameter("val", array_diff(explode(",", $val), array("")));
        return $lots;
    }
}