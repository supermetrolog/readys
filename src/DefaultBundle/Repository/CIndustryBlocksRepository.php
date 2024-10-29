<?php

namespace DefaultBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;

class CIndustryBlocksRepository extends EntityRepository {

    public function getAvg($id){
        //получаем объекты
        $qb = $this->createQueryBuilder('cb');
        $lots = $qb
            ->select("MAX(cb.floor) as max_floors")
            ->addSelect("MIN(cb.floor) as min_floors")
            ->andWhere("cb.parentId = :id")
            ->setParameter("id", $id)
            ->groupBy("cb.parentId");
        return $lots;
    }

    public function getBlocks($id){
        $qb = $this->createQueryBuilder('cb');
        $lots = $qb->where("cb.parentId = :id")
            ->select([
                "cb.parentId",
                "cb.id",
                "cb.idVisual",
                "cb.floor",
                "cb.area",
                "cb.area2",
                "cb.ceilingHeight",
                "cb.ceilingHeight2",
                "cb.floorType",
                "cb.gateType",
                "cb.heated",
                'ifelse(cb.onsiteNoprice=0, ar_price(cb.salePrice, 1, cb.saleCurrency, ' . USD . ', ' . EUR . '), 0) as sale_price',
                'ifelse(cb.onsiteNoprice=0, ar_price((cb.salePrice / cb.area2), 1, cb.saleCurrency,' . USD . ',' . EUR . '), 0) as kv_sale_price',
                'ifelse(cb.onsiteNoprice=0, ar_price(cb.rentPrice, 1, cb.rentCurrency,' . USD . ',' . EUR . '), 0) as rent_price',
            ])
            ->setParameter("id", $id);
        return $lots;
    }
}