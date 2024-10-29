<?php

namespace DefaultBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;

class LFloorTypesRepository extends EntityRepository {
    public function getAll($val){
        $qb = $this->createQueryBuilder('f');
        $lots = $qb
            ->andWhere($qb->expr()->in("f.id", ":val"))
            ->setParameter("val", array_diff(explode(",", $val), array("")));
        return $lots;
    }
}