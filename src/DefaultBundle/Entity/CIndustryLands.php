<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CIndustryLands
 *
 * @ORM\Table(name="c_industry_lands")
 * @ORM\Entity
 */
class CIndustryLands
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
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_insert", type="date", nullable=true)
     */
    private $dtInsert;

    /**
     * @var integer
     *
     * @ORM\Column(name="clyent_id", type="integer", nullable=true)
     */
    private $clyentId;

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
     * @ORM\Column(name="highway2", type="integer", nullable=false)
     */
    private $highway2;

    /**
     * @var integer
     *
     * @ORM\Column(name="otmkad", type="integer", nullable=true)
     */
    private $otmkad;

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
     * @var integer
     *
     * @ORM\Column(name="area_max", type="integer", nullable=true)
     */
    private $areaMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_min", type="integer", nullable=true)
     */
    private $areaMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="cover_type", type="integer", nullable=false)
     */
    private $coverType;

    /**
     * @var string
     *
     * @ORM\Column(name="gantry_cranes", type="string", length=200, nullable=true)
     */
    private $gantryCranes;

    /**
     * @var string
     *
     * @ORM\Column(name="railway_cranes", type="string", length=200, nullable=true)
     */
    private $railwayCranes;

    /**
     * @var string
     *
     * @ORM\Column(name="dsection", type="string", length=200, nullable=true)
     */
    private $dsection;

    /**
     * @var boolean
     *
     * @ORM\Column(name="railway", type="boolean", nullable=false)
     */
    private $railway;

    /**
     * @var boolean
     *
     * @ORM\Column(name="barrier", type="boolean", nullable=false)
     */
    private $barrier;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fence_around_perimeter", type="boolean", nullable=false)
     */
    private $fenceAroundPerimeter;

    /**
     * @var integer
     *
     * @ORM\Column(name="finishing", type="integer", nullable=false)
     */
    private $finishing;

    /**
     * @var integer
     *
     * @ORM\Column(name="guard", type="integer", nullable=false)
     */
    private $guard;

    /**
     * @var string
     *
     * @ORM\Column(name="parking", type="string", length=100, nullable=true)
     */
    private $parking;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="path2fs", type="text", length=65535, nullable=true)
     */
    private $path2fs;

    /**
     * @var string
     *
     * @ORM\Column(name="infrastructure", type="string", length=100, nullable=true)
     */
    private $infrastructure;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gas", type="boolean", nullable=false)
     */
    private $gas;

    /**
     * @var integer
     *
     * @ORM\Column(name="water", type="integer", nullable=false)
     */
    private $water;

    /**
     * @var integer
     *
     * @ORM\Column(name="sewage", type="integer", nullable=false)
     */
    private $sewage;

    /**
     * @var string
     *
     * @ORM\Column(name="telecommunications", type="string", length=100, nullable=true)
     */
    private $telecommunications;

    /**
     * @var string
     *
     * @ORM\Column(name="safety_systems", type="string", length=100, nullable=true)
     */
    private $safetySystems;

    /**
     * @var string
     *
     * @ORM\Column(name="deal_type", type="string", length=100, nullable=true)
     */
    private $dealType;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_price", type="integer", nullable=false)
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
     * @ORM\Column(name="office_price", type="integer", nullable=false)
     */
    private $officePrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="currency", type="integer", nullable=false)
     */
    private $currency;

    /**
     * @var integer
     *
     * @ORM\Column(name="currency_all", type="integer", nullable=false)
     */
    private $currencyAll;

    /**
     * @var integer
     *
     * @ORM\Column(name="currency_all_metr", type="integer", nullable=false)
     */
    private $currencyAllMetr;

    /**
     * @var integer
     *
     * @ORM\Column(name="currency_office", type="integer", nullable=false)
     */
    private $currencyOffice;

    /**
     * @var string
     *
     * @ORM\Column(name="rent_inc", type="string", length=100, nullable=true)
     */
    private $rentInc;

    /**
     * @var string
     *
     * @ORM\Column(name="incs_currency", type="string", length=100, nullable=true)
     */
    private $incsCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="incs_currency_office", type="string", length=100, nullable=true)
     */
    private $incsCurrencyOffice;

    /**
     * @var integer
     *
     * @ORM\Column(name="result", type="integer", nullable=false)
     */
    private $result;

    /**
     * @var integer
     *
     * @ORM\Column(name="result_who", type="integer", nullable=false)
     */
    private $resultWho;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_result", type="date", nullable=true)
     */
    private $dtResult;

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
     * @ORM\Column(name="c_map", type="text", length=65535, nullable=true)
     */
    private $cMap;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_update", type="date", nullable=true)
     */
    private $dtUpdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_update_full", type="datetime", nullable=true)
     */
    private $dtUpdateFull;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent", type="integer", nullable=false)
     */
    private $agent;

    /**
     * @var integer
     *
     * @ORM\Column(name="old_agent", type="integer", nullable=true)
     */
    private $oldAgent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="onsite", type="boolean", nullable=false)
     */
    private $onsite;

    /**
     * @var boolean
     *
     * @ORM\Column(name="dogovor", type="boolean", nullable=false)
     */
    private $dogovor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="onsite_top", type="boolean", nullable=false)
     */
    private $onsiteTop;

    /**
     * @var boolean
     *
     * @ORM\Column(name="onsite_noprice", type="boolean", nullable=false)
     */
    private $onsiteNoprice;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var string
     *
     * @ORM\Column(name="slcomments", type="text", length=65535, nullable=true)
     */
    private $slcomments;

    /**
     * @var string
     *
     * @ORM\Column(name="owner_pays_howmuch", type="decimal", precision=10, scale=1, nullable=true)
     */
    private $ownerPaysHowmuch;

    /**
     * @var string
     *
     * @ORM\Column(name="owner_pays_howmuch_4client", type="decimal", precision=10, scale=1, nullable=true)
     */
    private $ownerPaysHowmuch4client;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_dogovor", type="date", nullable=true)
     */
    private $dtDogovor;

    /**
     * @var string
     *
     * @ORM\Column(name="cnumber", type="string", length=100, nullable=true)
     */
    private $cnumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="l_category", type="integer", nullable=false)
     */
    private $lCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="l_function", type="string", length=200, nullable=true)
     */
    private $lFunction;

    /**
     * @var integer
     *
     * @ORM\Column(name="l_property", type="integer", nullable=false)
     */
    private $lProperty;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return CIndustryLands
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set dtInsert
     *
     * @param \DateTime $dtInsert
     * @return CIndustryLands
     */
    public function setDtInsert($dtInsert)
    {
        $this->dtInsert = $dtInsert;

        return $this;
    }

    /**
     * Get dtInsert
     *
     * @return \DateTime 
     */
    public function getDtInsert()
    {
        return $this->dtInsert;
    }

    /**
     * Set clyentId
     *
     * @param integer $clyentId
     * @return CIndustryLands
     */
    public function setClyentId($clyentId)
    {
        $this->clyentId = $clyentId;

        return $this;
    }

    /**
     * Get clyentId
     *
     * @return integer 
     */
    public function getClyentId()
    {
        return $this->clyentId;
    }

    /**
     * Set region
     *
     * @param integer $region
     * @return CIndustryLands
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return integer 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set district
     *
     * @param integer $district
     * @return CIndustryLands
     */
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * Get district
     *
     * @return integer 
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set direction
     *
     * @param integer $direction
     * @return CIndustryLands
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Get direction
     *
     * @return integer 
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Set village
     *
     * @param integer $village
     * @return CIndustryLands
     */
    public function setVillage($village)
    {
        $this->village = $village;

        return $this;
    }

    /**
     * Get village
     *
     * @return integer 
     */
    public function getVillage()
    {
        return $this->village;
    }

    /**
     * Set highway
     *
     * @param integer $highway
     * @return CIndustryLands
     */
    public function setHighway($highway)
    {
        $this->highway = $highway;

        return $this;
    }

    /**
     * Get highway
     *
     * @return integer 
     */
    public function getHighway()
    {
        return $this->highway;
    }

    /**
     * Set highway2
     *
     * @param integer $highway2
     * @return CIndustryLands
     */
    public function setHighway2($highway2)
    {
        $this->highway2 = $highway2;

        return $this;
    }

    /**
     * Get highway2
     *
     * @return integer 
     */
    public function getHighway2()
    {
        return $this->highway2;
    }

    /**
     * Set otmkad
     *
     * @param integer $otmkad
     * @return CIndustryLands
     */
    public function setOtmkad($otmkad)
    {
        $this->otmkad = $otmkad;

        return $this;
    }

    /**
     * Get otmkad
     *
     * @return integer 
     */
    public function getOtmkad()
    {
        return $this->otmkad;
    }

    /**
     * Set metro
     *
     * @param integer $metro
     * @return CIndustryLands
     */
    public function setMetro($metro)
    {
        $this->metro = $metro;

        return $this;
    }

    /**
     * Get metro
     *
     * @return integer 
     */
    public function getMetro()
    {
        return $this->metro;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return CIndustryLands
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set uArea
     *
     * @param integer $uArea
     * @return CIndustryLands
     */
    public function setUArea($uArea)
    {
        $this->uArea = $uArea;

        return $this;
    }

    /**
     * Get uArea
     *
     * @return integer 
     */
    public function getUArea()
    {
        return $this->uArea;
    }

    /**
     * Set areaMax
     *
     * @param integer $areaMax
     * @return CIndustryLands
     */
    public function setAreaMax($areaMax)
    {
        $this->areaMax = $areaMax;

        return $this;
    }

    /**
     * Get areaMax
     *
     * @return integer 
     */
    public function getAreaMax()
    {
        return $this->areaMax;
    }

    /**
     * Set areaMin
     *
     * @param integer $areaMin
     * @return CIndustryLands
     */
    public function setAreaMin($areaMin)
    {
        $this->areaMin = $areaMin;

        return $this;
    }

    /**
     * Get areaMin
     *
     * @return integer 
     */
    public function getAreaMin()
    {
        return $this->areaMin;
    }

    /**
     * Set coverType
     *
     * @param integer $coverType
     * @return CIndustryLands
     */
    public function setCoverType($coverType)
    {
        $this->coverType = $coverType;

        return $this;
    }

    /**
     * Get coverType
     *
     * @return integer 
     */
    public function getCoverType()
    {
        return $this->coverType;
    }

    /**
     * Set gantryCranes
     *
     * @param string $gantryCranes
     * @return CIndustryLands
     */
    public function setGantryCranes($gantryCranes)
    {
        $this->gantryCranes = $gantryCranes;

        return $this;
    }

    /**
     * Get gantryCranes
     *
     * @return string 
     */
    public function getGantryCranes()
    {
        return $this->gantryCranes;
    }

    /**
     * Set railwayCranes
     *
     * @param string $railwayCranes
     * @return CIndustryLands
     */
    public function setRailwayCranes($railwayCranes)
    {
        $this->railwayCranes = $railwayCranes;

        return $this;
    }

    /**
     * Get railwayCranes
     *
     * @return string 
     */
    public function getRailwayCranes()
    {
        return $this->railwayCranes;
    }

    /**
     * Set dsection
     *
     * @param string $dsection
     * @return CIndustryLands
     */
    public function setDsection($dsection)
    {
        $this->dsection = $dsection;

        return $this;
    }

    /**
     * Get dsection
     *
     * @return string 
     */
    public function getDsection()
    {
        return $this->dsection;
    }

    /**
     * Set railway
     *
     * @param boolean $railway
     * @return CIndustryLands
     */
    public function setRailway($railway)
    {
        $this->railway = $railway;

        return $this;
    }

    /**
     * Get railway
     *
     * @return boolean 
     */
    public function getRailway()
    {
        return $this->railway;
    }

    /**
     * Set barrier
     *
     * @param boolean $barrier
     * @return CIndustryLands
     */
    public function setBarrier($barrier)
    {
        $this->barrier = $barrier;

        return $this;
    }

    /**
     * Get barrier
     *
     * @return boolean 
     */
    public function getBarrier()
    {
        return $this->barrier;
    }

    /**
     * Set fenceAroundPerimeter
     *
     * @param boolean $fenceAroundPerimeter
     * @return CIndustryLands
     */
    public function setFenceAroundPerimeter($fenceAroundPerimeter)
    {
        $this->fenceAroundPerimeter = $fenceAroundPerimeter;

        return $this;
    }

    /**
     * Get fenceAroundPerimeter
     *
     * @return boolean 
     */
    public function getFenceAroundPerimeter()
    {
        return $this->fenceAroundPerimeter;
    }

    /**
     * Set finishing
     *
     * @param integer $finishing
     * @return CIndustryLands
     */
    public function setFinishing($finishing)
    {
        $this->finishing = $finishing;

        return $this;
    }

    /**
     * Get finishing
     *
     * @return integer 
     */
    public function getFinishing()
    {
        return $this->finishing;
    }

    /**
     * Set guard
     *
     * @param integer $guard
     * @return CIndustryLands
     */
    public function setGuard($guard)
    {
        $this->guard = $guard;

        return $this;
    }

    /**
     * Get guard
     *
     * @return integer 
     */
    public function getGuard()
    {
        return $this->guard;
    }

    /**
     * Set parking
     *
     * @param string $parking
     * @return CIndustryLands
     */
    public function setParking($parking)
    {
        $this->parking = $parking;

        return $this;
    }

    /**
     * Get parking
     *
     * @return string 
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return CIndustryLands
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set path2fs
     *
     * @param string $path2fs
     * @return CIndustryLands
     */
    public function setPath2fs($path2fs)
    {
        $this->path2fs = $path2fs;

        return $this;
    }

    /**
     * Get path2fs
     *
     * @return string 
     */
    public function getPath2fs()
    {
        return $this->path2fs;
    }

    /**
     * Set infrastructure
     *
     * @param string $infrastructure
     * @return CIndustryLands
     */
    public function setInfrastructure($infrastructure)
    {
        $this->infrastructure = $infrastructure;

        return $this;
    }

    /**
     * Get infrastructure
     *
     * @return string 
     */
    public function getInfrastructure()
    {
        return $this->infrastructure;
    }

    /**
     * Set gas
     *
     * @param boolean $gas
     * @return CIndustryLands
     */
    public function setGas($gas)
    {
        $this->gas = $gas;

        return $this;
    }

    /**
     * Get gas
     *
     * @return boolean 
     */
    public function getGas()
    {
        return $this->gas;
    }

    /**
     * Set water
     *
     * @param integer $water
     * @return CIndustryLands
     */
    public function setWater($water)
    {
        $this->water = $water;

        return $this;
    }

    /**
     * Get water
     *
     * @return integer 
     */
    public function getWater()
    {
        return $this->water;
    }

    /**
     * Set sewage
     *
     * @param integer $sewage
     * @return CIndustryLands
     */
    public function setSewage($sewage)
    {
        $this->sewage = $sewage;

        return $this;
    }

    /**
     * Get sewage
     *
     * @return integer 
     */
    public function getSewage()
    {
        return $this->sewage;
    }

    /**
     * Set telecommunications
     *
     * @param string $telecommunications
     * @return CIndustryLands
     */
    public function setTelecommunications($telecommunications)
    {
        $this->telecommunications = $telecommunications;

        return $this;
    }

    /**
     * Get telecommunications
     *
     * @return string 
     */
    public function getTelecommunications()
    {
        return $this->telecommunications;
    }

    /**
     * Set safetySystems
     *
     * @param string $safetySystems
     * @return CIndustryLands
     */
    public function setSafetySystems($safetySystems)
    {
        $this->safetySystems = $safetySystems;

        return $this;
    }

    /**
     * Get safetySystems
     *
     * @return string 
     */
    public function getSafetySystems()
    {
        return $this->safetySystems;
    }

    /**
     * Set dealType
     *
     * @param string $dealType
     * @return CIndustryLands
     */
    public function setDealType($dealType)
    {
        $this->dealType = $dealType;

        return $this;
    }

    /**
     * Get dealType
     *
     * @return string 
     */
    public function getDealType()
    {
        return $this->dealType;
    }

    /**
     * Set salePrice
     *
     * @param integer $salePrice
     * @return CIndustryLands
     */
    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;

        return $this;
    }

    /**
     * Get salePrice
     *
     * @return integer 
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * Set salePriceMetr
     *
     * @param integer $salePriceMetr
     * @return CIndustryLands
     */
    public function setSalePriceMetr($salePriceMetr)
    {
        $this->salePriceMetr = $salePriceMetr;

        return $this;
    }

    /**
     * Get salePriceMetr
     *
     * @return integer 
     */
    public function getSalePriceMetr()
    {
        return $this->salePriceMetr;
    }

    /**
     * Set rentPrice
     *
     * @param integer $rentPrice
     * @return CIndustryLands
     */
    public function setRentPrice($rentPrice)
    {
        $this->rentPrice = $rentPrice;

        return $this;
    }

    /**
     * Get rentPrice
     *
     * @return integer 
     */
    public function getRentPrice()
    {
        return $this->rentPrice;
    }

    /**
     * Set officePrice
     *
     * @param integer $officePrice
     * @return CIndustryLands
     */
    public function setOfficePrice($officePrice)
    {
        $this->officePrice = $officePrice;

        return $this;
    }

    /**
     * Get officePrice
     *
     * @return integer 
     */
    public function getOfficePrice()
    {
        return $this->officePrice;
    }

    /**
     * Set currency
     *
     * @param integer $currency
     * @return CIndustryLands
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return integer 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set currencyAll
     *
     * @param integer $currencyAll
     * @return CIndustryLands
     */
    public function setCurrencyAll($currencyAll)
    {
        $this->currencyAll = $currencyAll;

        return $this;
    }

    /**
     * Get currencyAll
     *
     * @return integer 
     */
    public function getCurrencyAll()
    {
        return $this->currencyAll;
    }

    /**
     * Set currencyAllMetr
     *
     * @param integer $currencyAllMetr
     * @return CIndustryLands
     */
    public function setCurrencyAllMetr($currencyAllMetr)
    {
        $this->currencyAllMetr = $currencyAllMetr;

        return $this;
    }

    /**
     * Get currencyAllMetr
     *
     * @return integer 
     */
    public function getCurrencyAllMetr()
    {
        return $this->currencyAllMetr;
    }

    /**
     * Set currencyOffice
     *
     * @param integer $currencyOffice
     * @return CIndustryLands
     */
    public function setCurrencyOffice($currencyOffice)
    {
        $this->currencyOffice = $currencyOffice;

        return $this;
    }

    /**
     * Get currencyOffice
     *
     * @return integer 
     */
    public function getCurrencyOffice()
    {
        return $this->currencyOffice;
    }

    /**
     * Set rentInc
     *
     * @param string $rentInc
     * @return CIndustryLands
     */
    public function setRentInc($rentInc)
    {
        $this->rentInc = $rentInc;

        return $this;
    }

    /**
     * Get rentInc
     *
     * @return string 
     */
    public function getRentInc()
    {
        return $this->rentInc;
    }

    /**
     * Set incsCurrency
     *
     * @param string $incsCurrency
     * @return CIndustryLands
     */
    public function setIncsCurrency($incsCurrency)
    {
        $this->incsCurrency = $incsCurrency;

        return $this;
    }

    /**
     * Get incsCurrency
     *
     * @return string 
     */
    public function getIncsCurrency()
    {
        return $this->incsCurrency;
    }

    /**
     * Set incsCurrencyOffice
     *
     * @param string $incsCurrencyOffice
     * @return CIndustryLands
     */
    public function setIncsCurrencyOffice($incsCurrencyOffice)
    {
        $this->incsCurrencyOffice = $incsCurrencyOffice;

        return $this;
    }

    /**
     * Get incsCurrencyOffice
     *
     * @return string 
     */
    public function getIncsCurrencyOffice()
    {
        return $this->incsCurrencyOffice;
    }

    /**
     * Set result
     *
     * @param integer $result
     * @return CIndustryLands
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return integer 
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set resultWho
     *
     * @param integer $resultWho
     * @return CIndustryLands
     */
    public function setResultWho($resultWho)
    {
        $this->resultWho = $resultWho;

        return $this;
    }

    /**
     * Get resultWho
     *
     * @return integer 
     */
    public function getResultWho()
    {
        return $this->resultWho;
    }

    /**
     * Set dtResult
     *
     * @param \DateTime $dtResult
     * @return CIndustryLands
     */
    public function setDtResult($dtResult)
    {
        $this->dtResult = $dtResult;

        return $this;
    }

    /**
     * Get dtResult
     *
     * @return \DateTime 
     */
    public function getDtResult()
    {
        return $this->dtResult;
    }

    /**
     * Set cX
     *
     * @param float $cX
     * @return CIndustryLands
     */
    public function setCX($cX)
    {
        $this->cX = $cX;

        return $this;
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
     * Set cY
     *
     * @param float $cY
     * @return CIndustryLands
     */
    public function setCY($cY)
    {
        $this->cY = $cY;

        return $this;
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
     * Set cMap
     *
     * @param string $cMap
     * @return CIndustryLands
     */
    public function setCMap($cMap)
    {
        $this->cMap = $cMap;

        return $this;
    }

    /**
     * Get cMap
     *
     * @return string 
     */
    public function getCMap()
    {
        return $this->cMap;
    }

    /**
     * Set dtUpdate
     *
     * @param \DateTime $dtUpdate
     * @return CIndustryLands
     */
    public function setDtUpdate($dtUpdate)
    {
        $this->dtUpdate = $dtUpdate;

        return $this;
    }

    /**
     * Get dtUpdate
     *
     * @return \DateTime 
     */
    public function getDtUpdate()
    {
        return $this->dtUpdate;
    }

    /**
     * Set dtUpdateFull
     *
     * @param \DateTime $dtUpdateFull
     * @return CIndustryLands
     */
    public function setDtUpdateFull($dtUpdateFull)
    {
        $this->dtUpdateFull = $dtUpdateFull;

        return $this;
    }

    /**
     * Get dtUpdateFull
     *
     * @return \DateTime 
     */
    public function getDtUpdateFull()
    {
        return $this->dtUpdateFull;
    }

    /**
     * Set agent
     *
     * @param integer $agent
     * @return CIndustryLands
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;

        return $this;
    }

    /**
     * Get agent
     *
     * @return integer 
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Set oldAgent
     *
     * @param integer $oldAgent
     * @return CIndustryLands
     */
    public function setOldAgent($oldAgent)
    {
        $this->oldAgent = $oldAgent;

        return $this;
    }

    /**
     * Get oldAgent
     *
     * @return integer 
     */
    public function getOldAgent()
    {
        return $this->oldAgent;
    }

    /**
     * Set onsite
     *
     * @param boolean $onsite
     * @return CIndustryLands
     */
    public function setOnsite($onsite)
    {
        $this->onsite = $onsite;

        return $this;
    }

    /**
     * Get onsite
     *
     * @return boolean 
     */
    public function getOnsite()
    {
        return $this->onsite;
    }

    /**
     * Set dogovor
     *
     * @param boolean $dogovor
     * @return CIndustryLands
     */
    public function setDogovor($dogovor)
    {
        $this->dogovor = $dogovor;

        return $this;
    }

    /**
     * Get dogovor
     *
     * @return boolean 
     */
    public function getDogovor()
    {
        return $this->dogovor;
    }

    /**
     * Set onsiteTop
     *
     * @param boolean $onsiteTop
     * @return CIndustryLands
     */
    public function setOnsiteTop($onsiteTop)
    {
        $this->onsiteTop = $onsiteTop;

        return $this;
    }

    /**
     * Get onsiteTop
     *
     * @return boolean 
     */
    public function getOnsiteTop()
    {
        return $this->onsiteTop;
    }

    /**
     * Set onsiteNoprice
     *
     * @param boolean $onsiteNoprice
     * @return CIndustryLands
     */
    public function setOnsiteNoprice($onsiteNoprice)
    {
        $this->onsiteNoprice = $onsiteNoprice;

        return $this;
    }

    /**
     * Get onsiteNoprice
     *
     * @return boolean 
     */
    public function getOnsiteNoprice()
    {
        return $this->onsiteNoprice;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return CIndustryLands
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set slcomments
     *
     * @param string $slcomments
     * @return CIndustryLands
     */
    public function setSlcomments($slcomments)
    {
        $this->slcomments = $slcomments;

        return $this;
    }

    /**
     * Get slcomments
     *
     * @return string 
     */
    public function getSlcomments()
    {
        return $this->slcomments;
    }

    /**
     * Set ownerPaysHowmuch
     *
     * @param string $ownerPaysHowmuch
     * @return CIndustryLands
     */
    public function setOwnerPaysHowmuch($ownerPaysHowmuch)
    {
        $this->ownerPaysHowmuch = $ownerPaysHowmuch;

        return $this;
    }

    /**
     * Get ownerPaysHowmuch
     *
     * @return string 
     */
    public function getOwnerPaysHowmuch()
    {
        return $this->ownerPaysHowmuch;
    }

    /**
     * Set ownerPaysHowmuch4client
     *
     * @param string $ownerPaysHowmuch4client
     * @return CIndustryLands
     */
    public function setOwnerPaysHowmuch4client($ownerPaysHowmuch4client)
    {
        $this->ownerPaysHowmuch4client = $ownerPaysHowmuch4client;

        return $this;
    }

    /**
     * Get ownerPaysHowmuch4client
     *
     * @return string 
     */
    public function getOwnerPaysHowmuch4client()
    {
        return $this->ownerPaysHowmuch4client;
    }

    /**
     * Set dtDogovor
     *
     * @param \DateTime $dtDogovor
     * @return CIndustryLands
     */
    public function setDtDogovor($dtDogovor)
    {
        $this->dtDogovor = $dtDogovor;

        return $this;
    }

    /**
     * Get dtDogovor
     *
     * @return \DateTime 
     */
    public function getDtDogovor()
    {
        return $this->dtDogovor;
    }

    /**
     * Set cnumber
     *
     * @param string $cnumber
     * @return CIndustryLands
     */
    public function setCnumber($cnumber)
    {
        $this->cnumber = $cnumber;

        return $this;
    }

    /**
     * Get cnumber
     *
     * @return string 
     */
    public function getCnumber()
    {
        return $this->cnumber;
    }

    /**
     * Set lCategory
     *
     * @param integer $lCategory
     * @return CIndustryLands
     */
    public function setLCategory($lCategory)
    {
        $this->lCategory = $lCategory;

        return $this;
    }

    /**
     * Get lCategory
     *
     * @return integer 
     */
    public function getLCategory()
    {
        return $this->lCategory;
    }

    /**
     * Set lFunction
     *
     * @param string $lFunction
     * @return CIndustryLands
     */
    public function setLFunction($lFunction)
    {
        $this->lFunction = $lFunction;

        return $this;
    }

    /**
     * Get lFunction
     *
     * @return string 
     */
    public function getLFunction()
    {
        return $this->lFunction;
    }

    /**
     * Set lProperty
     *
     * @param integer $lProperty
     * @return CIndustryLands
     */
    public function setLProperty($lProperty)
    {
        $this->lProperty = $lProperty;

        return $this;
    }

    /**
     * Get lProperty
     *
     * @return integer 
     */
    public function getLProperty()
    {
        return $this->lProperty;
    }
}
