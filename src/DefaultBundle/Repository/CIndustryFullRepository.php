<?php

namespace DefaultBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;

class CIndustryFullRepository extends EntityRepository {

    public function getBaseLots(){
        //получаем объекты
        $qb = $this->createQueryBuilder('ci');
        $lots = $qb
            ->leftJoin("DefaultBundle:LRegions", 'lr', 'WITH', 'ci.region = lr.id')
            ->leftJoin("DefaultBundle:LHighways", 'lh', 'WITH', 'ci.highway = lh.id')
            ->leftJoin("DefaultBundle:LMetros", 'lm', 'WITH', 'ci.metro = lm.id')
            ->leftJoin("DefaultBundle:LVillages", 'lv', 'WITH', 'ci.village = lv.id')
            ->leftJoin("DefaultBundle:LClasses", 'lc', 'WITH', 'lc.id = ci.objectClass')
            ->leftJoin("DefaultBundle:LWaters", 'lw', 'WITH', 'lw.id = ci.water')
            ->leftJoin("DefaultBundle:LSewages", 'lsew', 'WITH', 'lsew.id = ci.sewage')
            ->leftJoin("DefaultBundle:LVentilations", 'lvnt', 'WITH', 'lvnt.id = ci.ventilation')
            ->leftJoin("DefaultBundle:LInternet", 'lintr', 'WITH', 'lintr.id = ci.internet')
            ->leftJoin("DefaultBundle:LGateTypes", 'lgate', 'WITH', 'lgate.id = ci.gateTypeRent')
            ->leftJoin("DefaultBundle:LEntryTerritory", 'lenter', 'WITH', 'lenter.id = ci.entryTerritory')
            ->leftJoin("DefaultBundle:LHeatings", 'lheat', 'WITH', 'lheat.id = ci.heating');
        return $lots;
    }

    public function getCatalogSelect($lots)
    {
        $lots->select([
            'ci.id as lot_num',
            'ci.idVisual',
            'ci.general',
            'ci.photo',
            'lr.title as region',
            'lh.title as highway',
            'lm.title as metro',
            'ci.otmkad',
            'ci.floors',
            'ci.power',
            'ci.squareMaxRent',
            'ci.squareMinRent',
            'ci.squareMaxSale',
            'ci.squareMinSale',
            'ci.ceilingHeightFromSale',
            'ci.ceilingHeightToSale',
            'ci.ceilingHeightFromRent',
            'ci.ceilingHeightToRent',
            'ci.objectType2',
            'ci.purposeWarehouse',
            "TRIM(BOTH ',' FROM ci.floorTypeRent) as floorTypeRent",
            "TRIM(BOTH ',' FROM ci.floorTypeSale) as floorTypeSale",
            'ifelse(ci.onsiteNopriceSale=0, ar_price(ci.salePrice, 1, ci.currencySaleAll, ' . USD . ', ' . EUR . '), 0) as sale_price',
            'ifelse(ci.onsiteNopriceSale=0, ar_price(ci.salePriceMetr, 1, ci.currencySale,' . USD . ',' . EUR . '), 0) as kv_sale_price',
            'ifelse(ci.onsiteNopriceRent=0, ar_price(ci.rentPrice, 1, ci.currencyRent,' . USD . ',' . EUR . '), 0) as rent_price',
            'ci.payinc',
            'lgate.title as gateTypeSale',
            'lgate.title as gateTypeRent',
        ]);
        return $lots;
    }

    public function getLotSelect($lot){
        $lot->select(array(
            'ci.id as lot_num',
            'ci.photo',
            'ci.otmkad',
            'ci.floors',
            'ci.floor',
            "TRIM(BOTH ',' FROM ci.floorTypeRent) as floorTypeRent",
            "TRIM(BOTH ',' FROM ci.floorTypeSale) as floorTypeSale",
            'ci.power',
            'ci.powerAll',
            'ci.squareMaxRent',
            'ci.squareMinRent',
            'ci.squareMaxSale',
            'ci.squareMinSale',
            'ci.ceilingHeightFromSale',
            'ci.ceilingHeightToSale',
            'ci.ceilingHeightFromRent',
            'ci.ceilingHeightToRent',
            'ci.gatesNumberRent',
            'ci.gatesNumberSale',
            'ci.areaMezzSale',
            'ci.areaMezzRent',
            'ci.areaOfficeSale',
            'ci.areaOfficeRent',
            'ci.gateTypeSale',
            'ci.gateTypeRent',
            'ci.floorLoadRent',
            'ci.floorLoadSale',
            'ci.collonMeshSale',
            'ci.collonMeshRent',
            'ci.elevatorsSale',
            'ci.elevatorsRent',
            'ci.temp',
            'ci.firefighting',
            'ci.safetySystems',
            "CONCAT(ci.payinc, TRIM(BOTH ',' FROM ci.rentPayinc)) as rentPayinc",
            "CONCAT(ci.payinc, TRIM(BOTH ',' FROM ci.salePayinc)) as salePayinc",
            'ci.general',
            'ci.cX as lng',
            'ci.cY as lat',
            'ci.region as region_id',
            'ci.direction as direction_id',
            'ci.village as village_id',
            'ci.highway as highway_id',
            'ci.objectType2',
            'ci.purposeWarehouse',
            'ci.nds',
            'ci.gas',
            'ci.vape',
            'ci.telephony',
            'ci.vapeHow',
            'ci.gasHow',
            'ci.railway',
            'ci.railwayLength',
            'ci.gantryCranes',
            'ci.catheadsRent',
            'ci.catheadsSale',
            'ci.telphersRent',
            'ci.telphersSale',
            'ci.overheadCranesRent',
            'ci.overheadCranesSale',
            'ci.railwayCranes',
            'ci.description',
            'ci.descriptionSale',
            'ci.parkingCar',
            'ci.parkingCarType',
            'ci.parkingTruck',
            'ci.parkingTruckType',
            'lw.title as water',
            'lheat.title as heating',
            'lsew.title as sewage',
            'lvnt.title as ventilation',
            'lintr.title as internet',
            'lenter.title as entryTerritory',
            'lc.title as class',
            'lr.title as region',
            'lh.title as highway',
            'lh.en as highway_en',
            'lm.title as metro',
            'lv.title as village',
            'lv.en as village_en',
            'ifelse(ci.onsiteNopriceSale=0, ar_price(ci.salePrice, 1, ci.currencySaleAll, ' . USD . ', ' . EUR . '), 0) as sale_price',
            'ifelse(ci.onsiteNopriceSale=0, ar_price(ci.salePriceMetr, 1, ci.currencySale,' . USD . ',' . EUR . '), 0) as kv_sale_price',
            'ifelse(ci.onsiteNopriceRent=0, ar_price(ci.rentPrice, 1, ci.currencyRent,' . USD . ',' . EUR . '), 0) as rent_price',

        ));
        return $lot;
    }

    public function getLimits($request, $limit, $lots){
        $page = $request->get('pages', 1);
        $offset = $limit * $page - ($limit);
        $lots = $lots->setFirstResult( $offset )
            ->setMaxResults( $limit );
        return $lots;
    }

    public function getCatalogAddition($request, $lots){
        if($request->get("deal"))                       $lots->andWhere("find_in_set(".($request->get('deal') == "rent" ? 1 : 2).", TRIM(BOTH ',' FROM ci.dealType)) > 0 ");
        if($request->get("from_mkad_min"))                $lots->andWhere("ci.otmkad >= :from_mkad_min")->setParameter("from_mkad_min", $request->get("from_mkad_min"));
        if($request->get("from_mkad_max"))                  $lots->andWhere("ci.otmkad <= :from_mkad_max")->setParameter("from_mkad_max", $request->get("from_mkad_max"));
        if($request->get("object_class"))               $lots->andWhere($lots->expr()->in("ci.objectClass", ":object_class"))->setParameter("object_class", $request->get("object_class"));
        if($request->get("power"))                      $lots->andWhere("ci.power >= :power")->setParameter("power", $request->get("power"));
        if($request->get("floor_only"))                 $lots->andWhere("ci.floor = 1");
        if($request->get("railway"))                    $lots->andWhere("ci.railway = 1");
        if($request->get("region", [1,2]))              $lots->andWhere($lots->expr()->in("ci.region", ":region"))->setParameter("region", $request->get("region", [1,2]));
        if($request->get("reg"))                        $lots->andWhere($lots->expr()->in("ci.region", ":region_en"))->setParameter("region_en", ($request->get("reg") == "moscow_region"?[2]:[1]));
        if($request->get("direction"))                  $lots->andWhere($lots->expr()->in("ci.direction", ":direction"))->setParameter("direction", $request->get("direction"));
        if($request->get("city"))                       $lots->andWhere($lots->expr()->in("lv.en", ":city"))->setParameter("city", $request->get("city"));
        if($request->get("highway"))                    $lots->andWhere($lots->expr()->in("lh.en", ":highway"))->setParameter("highway", $request->get("highway"));
        if($request->get("metro"))                      $lots->andWhere($lots->expr()->in("lm.yandexId", ":metro"))->setParameter("metro", $request->get("metro"));
        if($request->get("deal", "rent") == "rent"){
            if($request->get("heated"))                 $lots->andWhere("ci.heatedRent = :heated")->setParameter("heated", $request->get("heated"));
            if($request->get("telphers"))               $lots->andWhere("((ci.telphersRent != '') or (ci.catheadsRent != '') or (ci.overheadCranesRent != ''))");
            if($request->get("ceiling_height_min"))    $lots->andWhere("ci.ceilingHeightToRent >= :ceiling_height_min")->setParameter("ceiling_height_min", $request->get("ceiling_height_min"));
            if($request->get("ceiling_height_max"))      $lots->andWhere("ci.ceilingHeightFromRent <= :ceiling_height_max")->setParameter("ceiling_height_max", $request->get("ceiling_height_max"));
            if($request->get("area_min"))            $lots->andWhere("ci.squareMaxRent >= :area_min")->setParameter("area_min", $request->get("area_min"));
            if($request->get("area_max"))              $lots->andWhere("ci.squareMinRent <= :area_max")->setParameter("area_max", $request->get("area_max"));
            if($request->get("type_price", 2) == 2){
                if($request->get("from_price"))         $lots->andWhere("((ar_price(ci.rentPrice, 1, ci.currencyRent, ".USD.", ".EUR."))/12 * ci.squareMinRent)  >= {$request->get("from_price")}");
                if($request->get("price_max"))           $lots->andWhere("((ar_price(ci.rentPrice, 1, ci.currencyRent, ".USD.", ".EUR."))/12 * ci.squareMinRent)  <= {$request->get("price_max")}");
            }else{
                if($request->get("from_price"))         $lots->andWhere("((ar_price(ci.rentPrice, 1, ci.currencyRent, ".USD.", ".EUR.")))  >= {$request->get("from_price")}");
                if($request->get("price_max"))           $lots->andWhere("((ar_price(ci.rentPrice, 1, ci.currencyRent, ".USD.", ".EUR.")))  <= {$request->get("price_max")}");
            }
            if($request->get("gate_type")){
                $object = [];
                foreach ($request->get("gate_type") as $v){
                    $object[] = "(find_in_set({$v}, TRIM(BOTH ',' FROM ci.gateTypeRent)) > 0)";
                }
                $lots->andWhere("(". implode(" OR ", $object) .")");
            }
            if($request->get("floor_type")){
                $object = [];
                foreach ($request->get("floor_type") as $item){
                    $floor_type = explode(",", $item);
                    foreach ($floor_type as $v){
                        $object[] = "(find_in_set({$v}, TRIM(BOTH ',' FROM ci.floorTypeRent)) > 0)";
                    }

                }
                $lots->andWhere("(". implode(" OR ", $object) .")");
            }
        }else{
            if($request->get("heated"))                 $lots->andWhere("ci.heatedSale = :heated")->setParameter("heated", $request->get("heated"));
            if($request->get("telphers"))               $lots->andWhere("((ci.telphersSale != '') or (ci.catheadsSale != '') or (ci.getOverheadCranesSale != ''))");
            if($request->get("ceiling_height_min"))    $lots->andWhere("ci.ceilingHeightToSale >= :ceiling_height_min")->setParameter("ceiling_height_min", $request->get("ceiling_height_min"));
            if($request->get("ceiling_height_max"))      $lots->andWhere("ci.ceilingHeightFromSale <= :ceiling_height_max")->setParameter("ceiling_height_max", $request->get("ceiling_height_max"));
            if($request->get("area_min"))            $lots->andWhere("ci.squareMaxSale >= :area_min")->setParameter("area_min", $request->get("area_min"));
            if($request->get("area_max"))              $lots->andWhere("ci.squareMinSale <= :area_max")->setParameter("area_max", $request->get("area_max"));
            if($request->get("from_price"))             $lots->andWhere("((ar_price(ci.salePrice, 1, ci.currencyAll, ".USD.", ".EUR.")))  >= {$request->get("from_price")}");
            if($request->get("price_max"))               $lots->andWhere("((ar_price(ci.salePrice, 1, ci.currencyAll, ".USD.", ".EUR.")))  <= {$request->get("price_max")}");
            if($request->get("gate_type")){
                $object = [];
                foreach ($request->get("gate_type") as $v){
                    $object[] = "(find_in_set({$v}, TRIM(BOTH ',' FROM ci.gate_type_sale)) > 0)";
                }
                $lots->andWhere("(". implode(" OR ", $object) .")");
            }
            if($request->get("floor_type")){
                $object = [];
                foreach ($request->get("floor_type") as $item){
                    $floor_type = explode(",", $item);
                    foreach ($floor_type as $v){
                        $object[] = "(find_in_set({$v}, TRIM(BOTH ',' FROM ci.floorTypeSale)) > 0)";
                    }

                }
                $lots->andWhere("(". implode(" OR ", $object) .")");
            }
        }
        if($request->get("overlay") == "circle"){
            $points = explode(",", $request->get("coords"));
            $sql = "(DIST({$points[1]}, {$points[0]}, ci.cX, ci.cY) < {$request->get("radius")}
					OR
					(ci.cX = {$points[1]} and ci.cY = {$points[0]}) )";
        }
        if($request->get("overlay") == "polygon"){
            $points = json_decode($request->get("coords"));
            foreach ($points as $point){
                $str[] = $point->lng." ".$point->lat;
            }
            $coords = implode(", ", $str).", ".$str[0];

            $sql = "(
					ST_Within(
					POINT(ci.cX, ci.cY),
					ST_GEOMFROMTEXT('POLYGON(({$coords}))')
					)) = 1";
        }
        if($request->get("overlay") == "circle" || $request->get("overlay") == "polygon"){
            $lots->andWhere($sql);
        }
        if($request->get("objectType2")){
            $object = [];
            foreach ($request->get("objectType2") as $v){
                $object[] = "(find_in_set({$v}, TRIM(BOTH ',' FROM ci.objectType2)) > 0)";
            }
            $lots->andWhere("(". implode(" OR ", $object) .")");
        }
        if($request->get("purposeWarehouse")){
            $object = [];
            foreach ($request->get("purposeWarehouse") as $v){
                $object[] = "(find_in_set({$v}, TRIM(BOTH ',' FROM ci.purposeWarehouse)) > 0)";
            }
            $lots->andWhere("(". implode(" OR ", $object) .")");
        }






    }

    public function getSort($request, $lots){
        switch ($request->get("sort")){
            case "price_down":
                break;
            case "price_up":
                break;
            case "square_up":
                break;
            case "square_down":
                break;
            case "area_down":
                break;
            case "area_up":
                break;
            case "metro_down":
                break;
            case "metro_up":
                break;
            case "dateInsert_down":
                $lots->addOrderBy("ci.dtUpdate", "DESC");
                break;
            case "dateInsert_up":
                $lots->addOrderBy("ci.dtUpdate");
                break;
            default:
                $lots->addOrderBy("ci.dtUpdate", "DESC");
                break;
        }
    }

    public function getVillages(){
        $qb = $this->createQueryBuilder('ci');
        $lots = $qb->leftJoin("DefaultBundle:LVillages", 'v', 'WITH', 'ci.village = v.id')
            ->where("v.id > 0")
            ->addOrderBy("v.title")
            ->groupBy("v.id")
            ->select([
                "v.id",
                "v.title",
                "v.en",
            ]);
        return $lots;
    }

    public function getHighways(){
        $qb = $this->createQueryBuilder('ci');
        $lots = $qb->leftJoin("DefaultBundle:LHighways", 'h', 'WITH', 'ci.highway = h.id')
            ->where("h.id > 0")
            ->addOrderBy("h.title")
            ->groupBy("h.id")
            ->select([
                "h.id",
                "h.title",
                "h.en",
            ]);
        return $lots;
    }
}