<?php

namespace DefaultBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;

class LCollonMeshesRepository extends EntityRepository {

    public function getAll($val){
        $qb = $this->createQueryBuilder('cm');
        $lots = $qb
            ->andWhere($qb->expr()->in("cm.id", ":val"))
            ->setParameter("val", array_diff(explode(",", $val), array("")));
        return $lots;
    }
}