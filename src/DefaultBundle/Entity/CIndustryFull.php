<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CIndustryFull
 *
 * @ORM\Table(name="c_industry_full", indexes={@ORM\Index(name="clyent_id", columns={"clyent_id"}), @ORM\Index(name="print", columns={"id", "object_class", "region", "direction", "highway", "facing_type", "water", "sewage", "heating", "ventilation", "deleted"}), @ORM\Index(name="fias_houses_id", columns={"fias_houses_id"}), @ORM\Index(name="area_max", columns={"area_max"}), @ORM\Index(name="area_max_sale", columns={"area_max_sale"}), @ORM\Index(name="t_area", columns={"t_area"}), @ORM\Index(name="area_min", columns={"area_min"}), @ORM\Index(name="area_min_sale", columns={"area_min_sale"}), @ORM\Index(name="_calc_rent_ceiling_height", columns={"_calc_rent_ceiling_height"}), @ORM\Index(name="_calc_rent_ceiling_height2", columns={"_calc_rent_ceiling_height2"}), @ORM\Index(name="_calc_sale_ceiling_height", columns={"_calc_sale_ceiling_height"}), @ORM\Index(name="_calc_sale_ceiling_height2", columns={"_calc_sale_ceiling_height2"}), @ORM\Index(name="_calc_rent_gate_type", columns={"_calc_rent_gate_type"}), @ORM\Index(name="_calc_sale_gate_type", columns={"_calc_sale_gate_type"}), @ORM\Index(name="_calc_rent_floor_type", columns={"_calc_rent_floor_type"}), @ORM\Index(name="_calc_sale_floor_type", columns={"_calc_sale_floor_type"}), @ORM\Index(name="_calc_rent_heated", columns={"_calc_rent_heated"}), @ORM\Index(name="_calc_sale_heated", columns={"_calc_sale_heated"}), @ORM\Index(name="deleted", columns={"deleted"}), @ORM\Index(name="deal_type", columns={"deal_type"}), @ORM\Index(name="object_type2", columns={"object_type2"}), @ORM\Index(name="metro_id_deleted", columns={"metro", "id", "deleted"}), @ORM\Index(name="metro", columns={"metro"}), @ORM\Index(name="yandex_address_str_address", columns={"yandex_address_str", "address"}), @ORM\Index(name="yandex_address_str", columns={"yandex_address_str"}), @ORM\Index(name="address", columns={"address"})})
 * @ORM\Entity(repositoryClass="DefaultBundle\Repository\CIndustryFullRepository")
 */
class CIndustryFull
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_visual", type="integer", nullable=true)
     */
    private $idVisual;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=false)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="`general`", type="string", length=255, nullable=false)
     */
    private $general;

    /**
     * @var integer
     *
     * @ORM\Column(name="object_class", type="integer", nullable=true)
     */
    private $objectClass;

    /**
     * @var integer
     *
     * @ORM\Column(name="firefighting", type="integer", nullable=true)
     */
    private $firefighting;

    /**
     * @var integer
     *
     * @ORM\Column(name="otmkad", type="integer", nullable=true)
     */
    private $otmkad;

    /**
     * @var integer
     *
     * @ORM\Column(name="floors", type="integer", nullable=true)
     */
    private $floors;

    /**
     * @var integer
     *
     * @ORM\Column(name="floor", type="integer", nullable=true)
     */
    private $floor;

    /**
     * @var string
     *
     * @ORM\Column(name="floor_type_rent", type="string", length=255, nullable=false)
     */
    private $floorTypeRent;

    /**
     * @var string
     *
     * @ORM\Column(name="floor_type_sale", type="string", length=255, nullable=false)
     */
    private $floorTypeSale;

    /**
     * @var string
     *
     * @ORM\Column(name="power", type="decimal", precision=10, scale=1, nullable=true)
     */
    private $power;

    /**
     * @var integer
     *
     * @ORM\Column(name="square_min_rent", type="integer", nullable=true)
     */
    private $squareMinRent;

    /**
     * @var integer
     *
     * @ORM\Column(name="square_max_rent", type="integer", nullable=true)
     */
    private $squareMaxRent;

    /**
     * @var integer
     *
     * @ORM\Column(name="square_min_sale", type="integer", nullable=true)
     */
    private $squareMinSale;

    /**
     * @var integer
     *
     * @ORM\Column(name="square_max_sale", type="integer", nullable=true)
     */
    private $squareMaxSale;

    /**
     * @var string
     *
     * @ORM\Column(name="ceiling_height_from_sale", type="string", length=255, nullable=false)
     */
    private $ceilingHeightFromSale;

    /**
     * @var string
     *
     * @ORM\Column(name="ceiling_height_to_sale", type="string", length=255, nullable=false)
     */
    private $ceilingHeightToSale;

    /**
     * @var string
     *
     * @ORM\Column(name="ceiling_height_from_rent", type="string", length=255, nullable=false)
     */
    private $ceilingHeightFromRent;

    /**
     * @var string
     *
     * @ORM\Column(name="ceiling_height_to_rent", type="string", length=255, nullable=false)
     */
    private $ceilingHeightToRent;

    /**
     * @var string
     *
     * @ORM\Column(name="deal_type", type="string", length=100, nullable=true)
     */
    private $dealType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="onsite_noprice_sale", type="boolean", nullable=false)
     */
    private $onsiteNopriceSale;

    /**
     * @var boolean
     *
     * @ORM\Column(name="onsite_noprice_rent", type="boolean", nullable=false)
     */
    private $onsiteNopriceRent;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_price", type="bigint", nullable=false)
     */
    private $salePrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_price_metr", type="integer", nullable=false)
     */
    private $salePriceMetr;

    /**
     * @var integer
     *
     * @ORM\Column(name="rent_price", type="integer", nullable=false)
     */
    private $rentPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="`currency_rent`", type="integer", nullable=false)
     */
    private $currencyRent;

    /**
     * @var integer
     *
     * @ORM\Column(name="currency_sale_all", type="integer", nullable=false)
     */
    private $currencySaleAll;

    /**
     * @var integer
     *
     * @ORM\Column(name="currency_sale", type="integer", nullable=false)
     */
    private $currencySale;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="description_handmade", type="text", length=65535, nullable=true)
     */
    private $descriptionHandmade;

    /**
     * @var string
     *
     * @ORM\Column(name="description_sale", type="text", length=65535, nullable=true)
     */
    private $descriptionSale;

    /**
     * @var string
     *
     * @ORM\Column(name="description_sale_handmade", type="text", length=65535, nullable=true)
     */
    private $descriptionSaleHandmade;

    /**
     * @var boolean
     *
     * @ORM\Column(name="description_sale_handmade_use", type="boolean", nullable=false)
     */
    private $descriptionSaleHandmadeUse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_update", type="date", nullable=true)
     */
    private $dtUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="heated_sale", type="string", length=255, nullable=false)
     */
    private $heatedSale;

    /**
     * @var string
     *
     * @ORM\Column(name="heated_rent", type="string", length=255, nullable=false)
     */
    private $heatedRent;

    /**
     * @var string
     *
     * @ORM\Column(name="collon_mesh_sale", type="string", length=255, nullable=false)
     */
    private $collonMeshSale;

    /**
     * @var string
     *
     * @ORM\Column(name="collon_mesh_rent", type="string", length=255, nullable=false)
     */
    private $collonMeshRent;

    /**
     * @var string
     *
     * @ORM\Column(name="floor_load_sale", type="string", length=255, nullable=false)
     */
    private $floorLoadSale;

    /**
     * @var string
     *
     * @ORM\Column(name="floor_load_rent", type="string", length=255, nullable=false)
     */
    private $floorLoadRent;

    /**
     * @var string
     *
     * @ORM\Column(name="gates_number_sale", type="string", length=255, nullable=false)
     */
    private $gatesNumberSale;

    /**
     * @var string
     *
     * @ORM\Column(name="gates_number_rent", type="string", length=255, nullable=false)
     */
    private $gatesNumberRent;

    /**
     * @var string
     *
     * @ORM\Column(name="gate_type_rent", type="string", length=255, nullable=false)
     */
    private $gateTypeRent;

    /**
     * @var string
     *
     * @ORM\Column(name="gate_type_sale", type="string", length=255, nullable=false)
     */
    private $gateTypeSale;

    /**
     * @var string
     *
     * @ORM\Column(name="catheads_sale", type="string", length=255, nullable=false)
     */
    private $catheadsSale;

    /**
     * @var string
     *
     * @ORM\Column(name="catheads_rent", type="string", length=255, nullable=false)
     */
    private $catheadsRent;

    /**
     * @var string
     *
     * @ORM\Column(name="elevators_sale", type="string", length=255, nullable=false)
     */
    private $elevatorsSale;

    /**
     * @var string
     *
     * @ORM\Column(name="elevators_rent", type="string", length=255, nullable=false)
     */
    private $elevatorsRent;

    /**
     * @var string
     *
     * @ORM\Column(name="telphers_sale", type="string", length=255, nullable=false)
     */
    private $telphersSale;

    /**
     * @var string
     *
     * @ORM\Column(name="telphers_rent", type="string", length=255, nullable=false)
     */
    private $telphersRent;

    /**
     * @var string
     *
     * @ORM\Column(name="overhead_cranes_sale", type="string", length=255, nullable=false)
     */
    private $overheadCranesSale;

    /**
     * @var string
     *
     * @ORM\Column(name="overhead_cranes_rent", type="string", length=255, nullable=false)
     */
    private $overheadCranesRent;

    /**
     * @var integer
     *
     * @ORM\Column(name="nds", type="integer", nullable=false)
     */
    private $nds;

    /**
     * @var string
     *
     * @ORM\Column(name="payinc", type="string", length=255, nullable=false)
     */
    private $payinc;

    /**
     * @var string
     *
     * @ORM\Column(name="entry_territory", type="string", length=255, nullable=false)
     */
    private $entryTerritory;

    /**
     * @var string
     *
     * @ORM\Column(name="rent_payinc", type="string", length=255, nullable=false)
     */
    private $rentPayinc;

    /**
     * @var string
     *
     * @ORM\Column(name="sale_payinc", type="string", length=255, nullable=false)
     */
    private $salePayinc;

    /**
     * @var integer
     *
     * @ORM\Column(name="region", type="integer", nullable=false)
     */
    private $region;

    /**
     * @var integer
     *
     * @ORM\Column(name="district", type="integer", nullable=false)
     */
    private $district;

    /**
     * @var integer
     *
     * @ORM\Column(name="direction", type="integer", nullable=false)
     */
    private $direction;

    /**
     * @var integer
     *
     * @ORM\Column(name="village", type="integer", nullable=false)
     */
    private $village;

    /**
     * @var integer
     *
     * @ORM\Column(name="highway", type="integer", nullable=false)
     */
    private $highway;

    /**
     * @var integer
     *
     * @ORM\Column(name="metro", type="integer", nullable=false)
     */
    private $metro;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=200, nullable=true)
     */
    private $address;

    /**
     * @var integer
     *
     * @ORM\Column(name="u_area", type="integer", nullable=true)
     */
    private $uArea;

    /**
     * @var string
     *
     * @ORM\Column(name="object_type2", type="string", length=200, nullable=true)
     */
    private $objectType2;

    /**
     * @var string
     *
     * @ORM\Column(name="purpose_warehouse", type="string", length=200, nullable=true)
     */
    private $purposeWarehouse;

    /**
     * @var integer
     *
     * @ORM\Column(name="railway", type="integer", nullable=true)
     */
    private $railway;

    /**
     * @var integer
     *
     * @ORM\Column(name="gantry_cranes", type="integer", nullable=true)
     */
    private $gantryCranes;

    /**
     * @var integer
     *
     * @ORM\Column(name="railway_cranes", type="integer", nullable=true)
     */
    private $railwayCranes;

    /**
     * @var integer
     *
     * @ORM\Column(name="railway_length", type="integer", nullable=true)
     */
    private $railwayLength;

    /**
     * @var integer
     *
     * @ORM\Column(name="heating", type="integer", nullable=true)
     */
    private $heating;

    /**
     * @var integer
     *
     * @ORM\Column(name="water", type="integer", nullable=true)
     */
    private $water;

    /**
     * @var integer
     *
     * @ORM\Column(name="sewage", type="integer", nullable=true)
     */
    private $sewage;

    /**
     * @var integer
     *
     * @ORM\Column(name="ventilation", type="integer", nullable=true)
     */
    private $ventilation;

    /**
     * @var integer
     *
     * @ORM\Column(name="gas", type="integer", nullable=true)
     */
    private $gas;

    /**
     * @var integer
     *
     * @ORM\Column(name="vape", type="integer", nullable=true)
     */
    private $vape;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephony", type="integer", nullable=true)
     */
    private $telephony;

    /**
     * @var integer
     *
     * @ORM\Column(name="internet", type="integer", nullable=true)
     */
    private $internet;

    /**
     * @var integer
     *
     * @ORM\Column(name="power_all", type="integer", nullable=true)
     */
    private $powerAll;

    /**
     * @var integer
     *
     * @ORM\Column(name="gas_how", type="integer", nullable=true)
     */
    private $gasHow;

    /**
     * @var integer
     *
     * @ORM\Column(name="vape_how", type="integer", nullable=true)
     */
    private $vapeHow;

    /**
     * @var integer
     *
     * @ORM\Column(name="temp", type="integer", nullable=true)
     */
    private $temp;

    /**
     * @var integer
     *
     * @ORM\Column(name="parking_car", type="integer", nullable=true)
     */
    private $parkingCar;

    /**
     * @var string
     *
     * @ORM\Column(name="parking_car_type", type="string", length=255, nullable=false)
     */
    private $parkingCarType;

    /**
     * @var integer
     *
     * @ORM\Column(name="parking_truck", type="integer", nullable=true)
     */
    private $parkingTruck;

    /**
     * @var string
     *
     * @ORM\Column(name="parking_truck_type", type="string", length=255, nullable=false)
     */
    private $parkingTruckType;

    /**
     * @var float
     *
     * @ORM\Column(name="c_x", type="float", precision=15, scale=12, nullable=false)
     */
    private $cX;

    /**
     * @var float
     *
     * @ORM\Column(name="c_y", type="float", precision=15, scale=12, nullable=false)
     */
    private $cY;

    /**
     * @var string
     *
     * @ORM\Column(name="area_mezz_sale", type="string", length=255, nullable=false)
     */
    private $areaMezzSale;

    /**
     * @var string
     *
     * @ORM\Column(name="area_mezz_rent", type="string", length=255, nullable=false)
     */
    private $areaMezzRent;

    /**
     * @var string
     *
     * @ORM\Column(name="area_office_sale", type="string", length=255, nullable=false)
     */
    private $areaOfficeSale;

    /**
     * @var string
     *
     * @ORM\Column(name="area_office_rent", type="string", length=255, nullable=false)
     */
    private $areaOfficeRent;

    /**
     * @var string
     *
     * @ORM\Column(name="safety_systems", type="string", length=255, nullable=false)
     */
    private $safetySystems;

    /**
     * @return int
     */
    public function getIdVisual()
    {
        return $this->idVisual;
    }

    /**
     * @return string
     */
    public function getPurposeWarehouse()
    {
        return $this->purposeWarehouse;
    }

    /**
     * @return string
     */
    public function getObjectType2()
    {
        return $this->objectType2;
    }

    /**
     * @return int
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @return int
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @return int
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * @return int
     */
    public function getVillage()
    {
        return $this->village;
    }

    /**
     * @return int
     */
    public function getHighway()
    {
        return $this->highway;
    }

    /**
     * @return int
     */
    public function getMetro()
    {
        return $this->metro;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return int
     */
    public function getUArea()
    {
        return $this->uArea;
    }

    /**
     * @return int
     */
    public function getTArea()
    {
        return $this->tArea;
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="t_area", type="integer", nullable=true)
     */
    private $tArea;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @return string
     */
    public function getGeneral()
    {
        return $this->general;
    }

    /**
     * @return int
     */
    public function getObjectClass()
    {
        return $this->objectClass;
    }

    /**
     * @return int
     */
    public function getOtmkad()
    {
        return $this->otmkad;
    }

    /**
     * @return int
     */
    public function getFloors()
    {
        return $this->floors;
    }

    /**
     * @return int
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * @return string
     */
    public function getFloorTypeRent()
    {
        return $this->floorTypeRent;
    }

    /**
     * @return string
     */
    public function getFloorTypeSale()
    {
        return $this->floorTypeSale;
    }

    /**
     * @return string
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @return int
     */
    public function getSquareMinRent()
    {
        return $this->squareMinRent;
    }

    /**
     * @return int
     */
    public function getSquareMaxRent()
    {
        return $this->squareMaxRent;
    }

    /**
     * @return int
     */
    public function getSquareMinSale()
    {
        return $this->squareMinSale;
    }

    /**
     * @return int
     */
    public function getSquareMaxSale()
    {
        return $this->squareMaxSale;
    }

    /**
     * @return string
     */
    public function getCeilingHeightFromSale()
    {
        return $this->ceilingHeightFromSale;
    }

    /**
     * @return string
     */
    public function getCeilingHeightToSale()
    {
        return $this->ceilingHeightToSale;
    }

    /**
     * @return string
     */
    public function getCeilingHeightFromRent()
    {
        return $this->ceilingHeightFromRent;
    }

    /**
     * @return string
     */
    public function getCeilingHeightToRent()
    {
        return $this->ceilingHeightToRent;
    }

    /**
     * @return string
     */
    public function getDealType()
    {
        return $this->dealType;
    }

    /**
     * @return bool
     */
    public function isOnsiteNopriceSale()
    {
        return $this->onsiteNopriceSale;
    }

    /**
     * @return bool
     */
    public function isOnsiteNopriceRent()
    {
        return $this->onsiteNopriceRent;
    }

    /**
     * @return int
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * @return int
     */
    public function getSalePriceMetr()
    {
        return $this->salePriceMetr;
    }

    /**
     * @return int
     */
    public function getRentPrice()
    {
        return $this->rentPrice;
    }

    /**
     * @return int
     */
    public function getCurrencyRent()
    {
        return $this->currencyRent;
    }

    /**
     * @return int
     */
    public function getCurrencySaleAll()
    {
        return $this->currencySaleAll;
    }

    /**
     * @return int
     */
    public function getCurrencySale()
    {
        return $this->currencySale;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getDescriptionHandmade()
    {
        return $this->descriptionHandmade;
    }

    /**
     * @return string
     */
    public function getDescriptionSale()
    {
        return $this->descriptionSale;
    }

    /**
     * @return string
     */
    public function getDescriptionSaleHandmade()
    {
        return $this->descriptionSaleHandmade;
    }

    /**
     * @return bool
     */
    public function isDescriptionSaleHandmadeUse()
    {
        return $this->descriptionSaleHandmadeUse;
    }

    /**
     * @return \DateTime
     */
    public function getDtUpdate()
    {
        return $this->dtUpdate;
    }

    /**
     * @return string
     */
    public function getHeatedSale()
    {
        return $this->heatedSale;
    }

    /**
     * @return string
     */
    public function getHeatedRent()
    {
        return $this->heatedRent;
    }

    /**
     * @return string
     */
    public function getCollonMeshSale()
    {
        return $this->collonMeshSale;
    }

    /**
     * @return string
     */
    public function getCollonMeshRent()
    {
        return $this->collonMeshRent;
    }

    /**
     * @return string
     */
    public function getFloorLoadSale()
    {
        return $this->floorLoadSale;
    }

    /**
     * @return string
     */
    public function getFloorLoadRent()
    {
        return $this->floorLoadRent;
    }

    /**
     * @return string
     */
    public function getGatesNumberSale()
    {
        return $this->gatesNumberSale;
    }

    /**
     * @return string
     */
    public function getGatesNumberRent()
    {
        return $this->gatesNumberRent;
    }

    /**
     * @return string
     */
    public function getGateTypeRent()
    {
        return $this->gateTypeRent;
    }

    /**
     * @return string
     */
    public function getGateTypeSale()
    {
        return $this->gateTypeSale;
    }

    /**
     * @return string
     */
    public function getCatheadsSale()
    {
        return $this->catheadsSale;
    }

    /**
     * @return string
     */
    public function getCatheadsRent()
    {
        return $this->catheadsRent;
    }

    /**
     * @return string
     */
    public function getTelphersRent()
    {
        return $this->telphersRent;
    }

    /**
     * @return string
     */
    public function getTelphersSale()
    {
        return $this->telphersSale;
    }

    /**
    * @return string
    */
    public function getOverheadCranesSale()
    {
        return $this->overheadCranesSale;
    }

    /**
     * @return string
     */
    public function getOverheadCranesRent()
    {
        return $this->overheadCranesRent;
    }



    /**
     * @return string
     */
    public function getElevatorsSale()
    {
        return $this->elevatorsSale;
    }

    /**
     * @return string
     */
    public function getElevatorsRent()
    {
        return $this->elevatorsRent;
    }

    /**
     * @return int
     */
    public function getNds()
    {
        return $this->nds;
    }

    /**
     * @return string
     */
    public function getPayinc()
    {
        return $this->payinc;
    }

    /**
     * @return int
     */
    public function getRailway()
    {
        return $this->railway;
    }

    /**
     * Get cX
     *
     * @return float
     */
    public function getCX()
    {
        return $this->cX;
    }

    /**
     * Get cY
     *
     * @return float
     */
    public function getCY()
    {
        return $this->cY;
    }


    /**
     * Set photo
     *
     * @param string $photo
     * @return CIndustryFull
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Set general
     *
     * @param string $general
     * @return CIndustryFull
     */
    public function setGeneral($general)
    {
        $this->general = $general;

        return $this;
    }

    /**
     * Set objectClass
     *
     * @param integer $objectClass
     * @return CIndustryFull
     */
    public function setObjectClass($objectClass)
    {
        $this->objectClass = $objectClass;

        return $this;
    }

    /**
     * Set otmkad
     *
     * @param integer $otmkad
     * @return CIndustryFull
     */
    public function setOtmkad($otmkad)
    {
        $this->otmkad = $otmkad;

        return $this;
    }

    /**
     * Set floors
     *
     * @param integer $floors
     * @return CIndustryFull
     */
    public function setFloors($floors)
    {
        $this->floors = $floors;

        return $this;
    }

    /**
     * Set floor
     *
     * @param integer $floor
     * @return CIndustryFull
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * Set floorTypeRent
     *
     * @param string $floorTypeRent
     * @return CIndustryFull
     */
    public function setFloorTypeRent($floorTypeRent)
    {
        $this->floorTypeRent = $floorTypeRent;

        return $this;
    }

    /**
     * Set floorTypeSale
     *
     * @param string $floorTypeSale
     * @return CIndustryFull
     */
    public function setFloorTypeSale($floorTypeSale)
    {
        $this->floorTypeSale = $floorTypeSale;

        return $this;
    }

    /**
     * Set power
     *
     * @param string $power
     * @return CIndustryFull
     */
    public function setPower($power)
    {
        $this->power = $power;

        return $this;
    }

    /**
     * Set squareMinRent
     *
     * @param integer $squareMinRent
     * @return CIndustryFull
     */
    public function setSquareMinRent($squareMinRent)
    {
        $this->squareMinRent = $squareMinRent;

        return $this;
    }

    /**
     * Set squareMaxRent
     *
     * @param integer $squareMaxRent
     * @return CIndustryFull
     */
    public function setSquareMaxRent($squareMaxRent)
    {
        $this->squareMaxRent = $squareMaxRent;

        return $this;
    }

    /**
     * Set squareMinSale
     *
     * @param integer $squareMinSale
     * @return CIndustryFull
     */
    public function setSquareMinSale($squareMinSale)
    {
        $this->squareMinSale = $squareMinSale;

        return $this;
    }

    /**
     * Set squareMaxSale
     *
     * @param integer $squareMaxSale
     * @return CIndustryFull
     */
    public function setSquareMaxSale($squareMaxSale)
    {
        $this->squareMaxSale = $squareMaxSale;

        return $this;
    }

    /**
     * Set ceilingHeightFromSale
     *
     * @param string $ceilingHeightFromSale
     * @return CIndustryFull
     */
    public function setCeilingHeightFromSale($ceilingHeightFromSale)
    {
        $this->ceilingHeightFromSale = $ceilingHeightFromSale;

        return $this;
    }

    /**
     * Set ceilingHeightToSale
     *
     * @param string $ceilingHeightToSale
     * @return CIndustryFull
     */
    public function setCeilingHeightToSale($ceilingHeightToSale)
    {
        $this->ceilingHeightToSale = $ceilingHeightToSale;

        return $this;
    }

    /**
     * Set ceilingHeightFromRent
     *
     * @param string $ceilingHeightFromRent
     * @return CIndustryFull
     */
    public function setCeilingHeightFromRent($ceilingHeightFromRent)
    {
        $this->ceilingHeightFromRent = $ceilingHeightFromRent;

        return $this;
    }

    /**
     * Set ceilingHeightToRent
     *
     * @param string $ceilingHeightToRent
     * @return CIndustryFull
     */
    public function setCeilingHeightToRent($ceilingHeightToRent)
    {
        $this->ceilingHeightToRent = $ceilingHeightToRent;

        return $this;
    }

    /**
     * Set dealType
     *
     * @param string $dealType
     * @return CIndustryFull
     */
    public function setDealType($dealType)
    {
        $this->dealType = $dealType;

        return $this;
    }

    /**
     * Set onsiteNopriceSale
     *
     * @param boolean $onsiteNopriceSale
     * @return CIndustryFull
     */
    public function setOnsiteNopriceSale($onsiteNopriceSale)
    {
        $this->onsiteNopriceSale = $onsiteNopriceSale;

        return $this;
    }

    /**
     * Get onsiteNopriceSale
     *
     * @return boolean 
     */
    public function getOnsiteNopriceSale()
    {
        return $this->onsiteNopriceSale;
    }

    /**
     * Set onsiteNopriceRent
     *
     * @param boolean $onsiteNopriceRent
     * @return CIndustryFull
     */
    public function setOnsiteNopriceRent($onsiteNopriceRent)
    {
        $this->onsiteNopriceRent = $onsiteNopriceRent;

        return $this;
    }

    /**
     * Get onsiteNopriceRent
     *
     * @return boolean 
     */
    public function getOnsiteNopriceRent()
    {
        return $this->onsiteNopriceRent;
    }

    /**
     * Set salePrice
     *
     * @param integer $salePrice
     * @return CIndustryFull
     */
    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;

        return $this;
    }

    /**
     * Set salePriceMetr
     *
     * @param integer $salePriceMetr
     * @return CIndustryFull
     */
    public function setSalePriceMetr($salePriceMetr)
    {
        $this->salePriceMetr = $salePriceMetr;

        return $this;
    }

    /**
     * Set rentPrice
     *
     * @param integer $rentPrice
     * @return CIndustryFull
     */
    public function setRentPrice($rentPrice)
    {
        $this->rentPrice = $rentPrice;

        return $this;
    }

    /**
     * Set currencyRent
     *
     * @param integer $currencyRent
     * @return CIndustryFull
     */
    public function setCurrencyRent($currencyRent)
    {
        $this->currencyRent = $currencyRent;

        return $this;
    }

    /**
     * Set currencySaleAll
     *
     * @param integer $currencySaleAll
     * @return CIndustryFull
     */
    public function setCurrencySaleAll($currencySaleAll)
    {
        $this->currencySaleAll = $currencySaleAll;

        return $this;
    }

    /**
     * Set currencySale
     *
     * @param integer $currencySale
     * @return CIndustryFull
     */
    public function setCurrencySale($currencySale)
    {
        $this->currencySale = $currencySale;

        return $this;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return CIndustryFull
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Set descriptionHandmade
     *
     * @param string $descriptionHandmade
     * @return CIndustryFull
     */
    public function setDescriptionHandmade($descriptionHandmade)
    {
        $this->descriptionHandmade = $descriptionHandmade;

        return $this;
    }

    /**
     * Set descriptionSale
     *
     * @param string $descriptionSale
     * @return CIndustryFull
     */
    public function setDescriptionSale($descriptionSale)
    {
        $this->descriptionSale = $descriptionSale;

        return $this;
    }

    /**
     * Set descriptionSaleHandmade
     *
     * @param string $descriptionSaleHandmade
     * @return CIndustryFull
     */
    public function setDescriptionSaleHandmade($descriptionSaleHandmade)
    {
        $this->descriptionSaleHandmade = $descriptionSaleHandmade;

        return $this;
    }

    /**
     * Set descriptionSaleHandmadeUse
     *
     * @param boolean $descriptionSaleHandmadeUse
     * @return CIndustryFull
     */
    public function setDescriptionSaleHandmadeUse($descriptionSaleHandmadeUse)
    {
        $this->descriptionSaleHandmadeUse = $descriptionSaleHandmadeUse;

        return $this;
    }

    /**
     * Get descriptionSaleHandmadeUse
     *
     * @return boolean 
     */
    public function getDescriptionSaleHandmadeUse()
    {
        return $this->descriptionSaleHandmadeUse;
    }

    /**
     * Set dtUpdate
     *
     * @param \DateTime $dtUpdate
     * @return CIndustryFull
     */
    public function setDtUpdate($dtUpdate)
    {
        $this->dtUpdate = $dtUpdate;

        return $this;
    }

    /**
     * Set heatedSale
     *
     * @param string $heatedSale
     * @return CIndustryFull
     */
    public function setHeatedSale($heatedSale)
    {
        $this->heatedSale = $heatedSale;

        return $this;
    }

    /**
     * Set heatedRent
     *
     * @param string $heatedRent
     * @return CIndustryFull
     */
    public function setHeatedRent($heatedRent)
    {
        $this->heatedRent = $heatedRent;

        return $this;
    }

    /**
     * Set collonMeshSale
     *
     * @param string $collonMeshSale
     * @return CIndustryFull
     */
    public function setCollonMeshSale($collonMeshSale)
    {
        $this->collonMeshSale = $collonMeshSale;

        return $this;
    }

    /**
     * Set collonMeshRent
     *
     * @param string $collonMeshRent
     * @return CIndustryFull
     */
    public function setCollonMeshRent($collonMeshRent)
    {
        $this->collonMeshRent = $collonMeshRent;

        return $this;
    }

    /**
     * Set floorLoadSale
     *
     * @param string $floorLoadSale
     * @return CIndustryFull
     */
    public function setFloorLoadSale($floorLoadSale)
    {
        $this->floorLoadSale = $floorLoadSale;

        return $this;
    }

    /**
     * Set floorLoadRent
     *
     * @param string $floorLoadRent
     * @return CIndustryFull
     */
    public function setFloorLoadRent($floorLoadRent)
    {
        $this->floorLoadRent = $floorLoadRent;

        return $this;
    }

    /**
     * Set gatesNumberSale
     *
     * @param string $gatesNumberSale
     * @return CIndustryFull
     */
    public function setGatesNumberSale($gatesNumberSale)
    {
        $this->gatesNumberSale = $gatesNumberSale;

        return $this;
    }

    /**
     * Set gatesNumberRent
     *
     * @param string $gatesNumberRent
     * @return CIndustryFull
     */
    public function setGatesNumberRent($gatesNumberRent)
    {
        $this->gatesNumberRent = $gatesNumberRent;

        return $this;
    }

    /**
     * Set gateTypeRent
     *
     * @param string $gateTypeRent
     * @return CIndustryFull
     */
    public function setGateTypeRent($gateTypeRent)
    {
        $this->gateTypeRent = $gateTypeRent;

        return $this;
    }

    /**
     * Set gateTypeSale
     *
     * @param string $gateTypeSale
     * @return CIndustryFull
     */
    public function setGateTypeSale($gateTypeSale)
    {
        $this->gateTypeSale = $gateTypeSale;

        return $this;
    }

    /**
     * Set catheadsSale
     *
     * @param string $catheadsSale
     * @return CIndustryFull
     */
    public function setCatheadsSale($catheadsSale)
    {
        $this->catheadsSale = $catheadsSale;

        return $this;
    }

    /**
     * Set catheadsRent
     *
     * @param string $catheadsRent
     * @return CIndustryFull
     */
    public function setCatheadsRent($catheadsRent)
    {
        $this->catheadsRent = $catheadsRent;

        return $this;
    }

    /**
     * Set elevatorsSale
     *
     * @param string $elevatorsSale
     * @return CIndustryFull
     */
    public function setElevatorsSale($elevatorsSale)
    {
        $this->elevatorsSale = $elevatorsSale;

        return $this;
    }

    /**
     * Set elevatorsRent
     *
     * @param string $elevatorsRent
     * @return CIndustryFull
     */
    public function setElevatorsRent($elevatorsRent)
    {
        $this->elevatorsRent = $elevatorsRent;

        return $this;
    }

    /**
     * Set telphersSale
     *
     * @param string $telphersSale
     * @return CIndustryFull
     */
    public function setTelphersSale($telphersSale)
    {
        $this->telphersSale = $telphersSale;

        return $this;
    }

    /**
     * Set telphersRent
     *
     * @param string $telphersRent
     * @return CIndustryFull
     */
    public function setTelphersRent($telphersRent)
    {
        $this->telphersRent = $telphersRent;

        return $this;
    }

    /**
     * Set overheadCranesSale
     *
     * @param string $overheadCranesSale
     * @return CIndustryFull
     */
    public function setOverheadCranesSale($overheadCranesSale)
    {
        $this->overheadCranesSale = $overheadCranesSale;

        return $this;
    }

    /**
     * Set overheadCranesRent
     *
     * @param string $overheadCranesRent
     * @return CIndustryFull
     */
    public function setOverheadCranesRent($overheadCranesRent)
    {
        $this->overheadCranesRent = $overheadCranesRent;

        return $this;
    }

    /**
     * Set payinc
     *
     * @param string $payinc
     * @return CIndustryFull
     */
    public function setPayinc($payinc)
    {
        $this->payinc = $payinc;

        return $this;
    }

    /**
     * Set region
     *
     * @param integer $region
     * @return CIndustryFull
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Set district
     *
     * @param integer $district
     * @return CIndustryFull
     */
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * Set direction
     *
     * @param integer $direction
     * @return CIndustryFull
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Set village
     *
     * @param integer $village
     * @return CIndustryFull
     */
    public function setVillage($village)
    {
        $this->village = $village;

        return $this;
    }

    /**
     * Set highway
     *
     * @param integer $highway
     * @return CIndustryFull
     */
    public function setHighway($highway)
    {
        $this->highway = $highway;

        return $this;
    }

    /**
     * Set metro
     *
     * @param integer $metro
     * @return CIndustryFull
     */
    public function setMetro($metro)
    {
        $this->metro = $metro;

        return $this;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return CIndustryFull
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Set uArea
     *
     * @param integer $uArea
     * @return CIndustryFull
     */
    public function setUArea($uArea)
    {
        $this->uArea = $uArea;

        return $this;
    }

    /**
     * Set objectType2
     *
     * @param string $objectType2
     * @return CIndustryFull
     */
    public function setObjectType2($objectType2)
    {
        $this->objectType2 = $objectType2;

        return $this;
    }

    /**
     * Set purposeWarehouse
     *
     * @param string $purposeWarehouse
     * @return CIndustryFull
     */
    public function setPurposeWarehouse($purposeWarehouse)
    {
        $this->purposeWarehouse = $purposeWarehouse;

        return $this;
    }

    /**
     * Set railway
     *
     * @param integer $railway
     * @return CIndustryFull
     */
    public function setRailway($railway)
    {
        $this->railway = $railway;

        return $this;
    }

    /**
     * Set cX
     *
     * @param float $cX
     * @return CIndustryFull
     */
    public function setCX($cX)
    {
        $this->cX = $cX;

        return $this;
    }

    /**
     * Set cY
     *
     * @param float $cY
     * @return CIndustryFull
     */
    public function setCY($cY)
    {
        $this->cY = $cY;

        return $this;
    }

    /**
     * Set tArea
     *
     * @param integer $tArea
     * @return CIndustryFull
     */
    public function setTArea($tArea)
    {
        $this->tArea = $tArea;

        return $this;
    }

    /**
     * @return string
     */
    public function getRentPayinc()
    {
        return $this->rentPayinc;
    }

    /**
     * @return string
     */
    public function getSalePayinc()
    {
        return $this->salePayinc;
    }

    /**
     * @return string
     */
    public function getAreaMezzSale()
    {
        return $this->areaMezzSale;
    }

    /**
     * @return string
     */
    public function getAreaMezzRent()
    {
        return $this->areaMezzRent;
    }

    /**
     * @return string
     */
    public function getAreaOfficeSale()
    {
        return $this->areaOfficeSale;
    }

    /**
     * @return string
     */
    public function getAreaOfficeRent()
    {
        return $this->areaOfficeRent;
    }

    /**
     * @return int
     */
    public function getTemp()
    {
        return $this->temp;
    }

    /**
     * @return int
     */
    public function getFirefighting()
    {
        return $this->firefighting;
    }

    /**
     * @return string
     */
    public function getSafetySystems()
    {
        return $this->safetySystems;
    }

    /**
     * @return int
     */
    public function getHeating()
    {
        return $this->heating;
    }

    /**
     * @return int
     */
    public function getWater()
    {
        return $this->water;
    }

    /**
     * @return int
     */
    public function getSewage()
    {
        return $this->sewage;
    }

    /**
     * @return int
     */
    public function getVentilation()
    {
        return $this->ventilation;
    }

    /**
     * @return int
     */
    public function getGas()
    {
        return $this->gas;
    }

    /**
     * @return int
     */
    public function getVape()
    {
        return $this->vape;
    }

    /**
     * @return int
     */
    public function getPowerAll()
    {
        return $this->powerAll;
    }

    /**
     * @return int
     */
    public function getGasHow()
    {
        return $this->gasHow;
    }

    /**
     * @return int
     */
    public function getVapeHow()
    {
        return $this->vapeHow;
    }

    /**
     * @return int
     */
    public function getTelephony()
    {
        return $this->telephony;
    }

    /**
     * @return int
     */
    public function getInternet()
    {
        return $this->internet;
    }

    /**
     * @return int
     */
    public function getRailwayLength()
    {
        return $this->railwayLength;
    }

    /**
     * @return int
     */
    public function getGantryCranes()
    {
        return $this->gantryCranes;
    }

    /**
     * @return int
     */
    public function getRailwayCranes()
    {
        return $this->railwayCranes;
    }

    /**
     * @return string
     */
    public function getEntryTerritory()
    {
        return $this->entryTerritory;
    }

    /**
     * @return int
     */
    public function getParkingCar()
    {
        return $this->parkingCar;
    }

    /**
     * @return string
     */
    public function getParkingCarType()
    {
        return $this->parkingCarType;
    }

    /**
     * @return int
     */
    public function getParkingTruck()
    {
        return $this->parkingTruck;
    }

    /**
     * @return string
     */
    public function getParkingTruckType()
    {
        return $this->parkingTruckType;
    }

}
