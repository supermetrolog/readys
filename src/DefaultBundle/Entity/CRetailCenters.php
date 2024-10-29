<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CRetailCenters
 *
 * @ORM\Table(name="c_retail_centers", indexes={@ORM\Index(name="clyent_id", columns={"clyent_id"})})
 * @ORM\Entity
 */
class CRetailCenters
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
     * @ORM\Column(name="lot_num", type="integer", nullable=true)
     */
    private $lotNum;

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
     * @var string
     *
     * @ORM\Column(name="title_address", type="text", length=65535, nullable=true)
     */
    private $titleAddress;

    /**
     * @var integer
     *
     * @ORM\Column(name="object_class", type="integer", nullable=false)
     */
    private $objectClass;

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
     * @ORM\Column(name="metro", type="integer", nullable=false)
     */
    private $metro;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=200, nullable=true)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="dom_num", type="string", length=200, nullable=true)
     */
    private $domNum;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=200, nullable=true)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="area", type="integer", nullable=true)
     */
    private $area;

    /**
     * @var string
     *
     * @ORM\Column(name="func_type", type="string", length=100, nullable=true)
     */
    private $funcType;

    /**
     * @var integer
     *
     * @ORM\Column(name="houses_line", type="integer", nullable=false)
     */
    private $housesLine;

    /**
     * @var integer
     *
     * @ORM\Column(name="ap", type="integer", nullable=true)
     */
    private $ap;

    /**
     * @var integer
     *
     * @ORM\Column(name="ac", type="integer", nullable=true)
     */
    private $ac;

    /**
     * @var integer
     *
     * @ORM\Column(name="a1", type="integer", nullable=true)
     */
    private $a1;

    /**
     * @var integer
     *
     * @ORM\Column(name="a2", type="integer", nullable=true)
     */
    private $a2;

    /**
     * @var integer
     *
     * @ORM\Column(name="a3", type="integer", nullable=true)
     */
    private $a3;

    /**
     * @var integer
     *
     * @ORM\Column(name="aa", type="integer", nullable=true)
     */
    private $aa;

    /**
     * @var integer
     *
     * @ORM\Column(name="am", type="integer", nullable=true)
     */
    private $am;

    /**
     * @var integer
     *
     * @ORM\Column(name="house_type", type="integer", nullable=false)
     */
    private $houseType;

    /**
     * @var string
     *
     * @ORM\Column(name="ceiling_height", type="string", length=100, nullable=true)
     */
    private $ceilingHeight;

    /**
     * @var integer
     *
     * @ORM\Column(name="window", type="integer", nullable=false)
     */
    private $window;

    /**
     * @var integer
     *
     * @ORM\Column(name="lifts", type="integer", nullable=true)
     */
    private $lifts;

    /**
     * @var boolean
     *
     * @ORM\Column(name="en_group", type="boolean", nullable=false)
     */
    private $enGroup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="platform", type="boolean", nullable=false)
     */
    private $platform;

    /**
     * @var integer
     *
     * @ORM\Column(name="parking", type="integer", nullable=false)
     */
    private $parking;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fasad_advert", type="boolean", nullable=false)
     */
    private $fasadAdvert;

    /**
     * @var integer
     *
     * @ORM\Column(name="rooms_finishing", type="integer", nullable=false)
     */
    private $roomsFinishing;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="power", type="integer", nullable=true)
     */
    private $power;

    /**
     * @var integer
     *
     * @ORM\Column(name="water", type="integer", nullable=false)
     */
    private $water;

    /**
     * @var integer
     *
     * @ORM\Column(name="toilet", type="integer", nullable=true)
     */
    private $toilet;

    /**
     * @var integer
     *
     * @ORM\Column(name="heating", type="integer", nullable=false)
     */
    private $heating;

    /**
     * @var integer
     *
     * @ORM\Column(name="ventilation", type="integer", nullable=false)
     */
    private $ventilation;

    /**
     * @var integer
     *
     * @ORM\Column(name="telecommunications", type="integer", nullable=false)
     */
    private $telecommunications;

    /**
     * @var integer
     *
     * @ORM\Column(name="deal_type", type="integer", nullable=false)
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
     * @ORM\Column(name="rent_price", type="integer", nullable=false)
     */
    private $rentPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="currency", type="integer", nullable=false)
     */
    private $currency;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_type", type="integer", nullable=false)
     */
    private $saleType;

    /**
     * @var integer
     *
     * @ORM\Column(name="property_type", type="integer", nullable=false)
     */
    private $propertyType;

    /**
     * @var integer
     *
     * @ORM\Column(name="contract", type="integer", nullable=false)
     */
    private $contract;

    /**
     * @var integer
     *
     * @ORM\Column(name="taxation", type="integer", nullable=false)
     */
    private $taxation;

    /**
     * @var integer
     *
     * @ORM\Column(name="utility_price", type="integer", nullable=false)
     */
    private $utilityPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="service_price", type="integer", nullable=false)
     */
    private $servicePrice;

    /**
     * @var string
     *
     * @ORM\Column(name="arendator", type="string", length=200, nullable=true)
     */
    private $arendator;

    /**
     * @var string
     *
     * @ORM\Column(name="arendator_price", type="string", length=200, nullable=true)
     */
    private $arendatorPrice;

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
     * @ORM\Column(name="dt_active", type="date", nullable=true)
     */
    private $dtActive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_update", type="date", nullable=true)
     */
    private $dtUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent", type="integer", nullable=false)
     */
    private $agent;

    /**
     * @var integer
     *
     * @ORM\Column(name="dogovor", type="integer", nullable=false)
     */
    private $dogovor;

    /**
     * @var string
     *
     * @ORM\Column(name="dogovor_com", type="string", length=100, nullable=true)
     */
    private $dogovorCom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="onsite", type="boolean", nullable=false)
     */
    private $onsite;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lotNum
     *
     * @param integer $lotNum
     * @return CRetailCenters
     */
    public function setLotNum($lotNum)
    {
        $this->lotNum = $lotNum;

        return $this;
    }

    /**
     * Get lotNum
     *
     * @return integer 
     */
    public function getLotNum()
    {
        return $this->lotNum;
    }

    /**
     * Set dtInsert
     *
     * @param \DateTime $dtInsert
     * @return CRetailCenters
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
     * @return CRetailCenters
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
     * Set titleAddress
     *
     * @param string $titleAddress
     * @return CRetailCenters
     */
    public function setTitleAddress($titleAddress)
    {
        $this->titleAddress = $titleAddress;

        return $this;
    }

    /**
     * Get titleAddress
     *
     * @return string 
     */
    public function getTitleAddress()
    {
        return $this->titleAddress;
    }

    /**
     * Set objectClass
     *
     * @param integer $objectClass
     * @return CRetailCenters
     */
    public function setObjectClass($objectClass)
    {
        $this->objectClass = $objectClass;

        return $this;
    }

    /**
     * Get objectClass
     *
     * @return integer 
     */
    public function getObjectClass()
    {
        return $this->objectClass;
    }

    /**
     * Set region
     *
     * @param integer $region
     * @return CRetailCenters
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
     * @return CRetailCenters
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
     * Set metro
     *
     * @param integer $metro
     * @return CRetailCenters
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
     * Set street
     *
     * @param string $street
     * @return CRetailCenters
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set domNum
     *
     * @param string $domNum
     * @return CRetailCenters
     */
    public function setDomNum($domNum)
    {
        $this->domNum = $domNum;

        return $this;
    }

    /**
     * Get domNum
     *
     * @return string 
     */
    public function getDomNum()
    {
        return $this->domNum;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return CRetailCenters
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set area
     *
     * @param integer $area
     * @return CRetailCenters
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return integer 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set funcType
     *
     * @param string $funcType
     * @return CRetailCenters
     */
    public function setFuncType($funcType)
    {
        $this->funcType = $funcType;

        return $this;
    }

    /**
     * Get funcType
     *
     * @return string 
     */
    public function getFuncType()
    {
        return $this->funcType;
    }

    /**
     * Set housesLine
     *
     * @param integer $housesLine
     * @return CRetailCenters
     */
    public function setHousesLine($housesLine)
    {
        $this->housesLine = $housesLine;

        return $this;
    }

    /**
     * Get housesLine
     *
     * @return integer 
     */
    public function getHousesLine()
    {
        return $this->housesLine;
    }

    /**
     * Set ap
     *
     * @param integer $ap
     * @return CRetailCenters
     */
    public function setAp($ap)
    {
        $this->ap = $ap;

        return $this;
    }

    /**
     * Get ap
     *
     * @return integer 
     */
    public function getAp()
    {
        return $this->ap;
    }

    /**
     * Set ac
     *
     * @param integer $ac
     * @return CRetailCenters
     */
    public function setAc($ac)
    {
        $this->ac = $ac;

        return $this;
    }

    /**
     * Get ac
     *
     * @return integer 
     */
    public function getAc()
    {
        return $this->ac;
    }

    /**
     * Set a1
     *
     * @param integer $a1
     * @return CRetailCenters
     */
    public function setA1($a1)
    {
        $this->a1 = $a1;

        return $this;
    }

    /**
     * Get a1
     *
     * @return integer 
     */
    public function getA1()
    {
        return $this->a1;
    }

    /**
     * Set a2
     *
     * @param integer $a2
     * @return CRetailCenters
     */
    public function setA2($a2)
    {
        $this->a2 = $a2;

        return $this;
    }

    /**
     * Get a2
     *
     * @return integer 
     */
    public function getA2()
    {
        return $this->a2;
    }

    /**
     * Set a3
     *
     * @param integer $a3
     * @return CRetailCenters
     */
    public function setA3($a3)
    {
        $this->a3 = $a3;

        return $this;
    }

    /**
     * Get a3
     *
     * @return integer 
     */
    public function getA3()
    {
        return $this->a3;
    }

    /**
     * Set aa
     *
     * @param integer $aa
     * @return CRetailCenters
     */
    public function setAa($aa)
    {
        $this->aa = $aa;

        return $this;
    }

    /**
     * Get aa
     *
     * @return integer 
     */
    public function getAa()
    {
        return $this->aa;
    }

    /**
     * Set am
     *
     * @param integer $am
     * @return CRetailCenters
     */
    public function setAm($am)
    {
        $this->am = $am;

        return $this;
    }

    /**
     * Get am
     *
     * @return integer 
     */
    public function getAm()
    {
        return $this->am;
    }

    /**
     * Set houseType
     *
     * @param integer $houseType
     * @return CRetailCenters
     */
    public function setHouseType($houseType)
    {
        $this->houseType = $houseType;

        return $this;
    }

    /**
     * Get houseType
     *
     * @return integer 
     */
    public function getHouseType()
    {
        return $this->houseType;
    }

    /**
     * Set ceilingHeight
     *
     * @param string $ceilingHeight
     * @return CRetailCenters
     */
    public function setCeilingHeight($ceilingHeight)
    {
        $this->ceilingHeight = $ceilingHeight;

        return $this;
    }

    /**
     * Get ceilingHeight
     *
     * @return string 
     */
    public function getCeilingHeight()
    {
        return $this->ceilingHeight;
    }

    /**
     * Set window
     *
     * @param integer $window
     * @return CRetailCenters
     */
    public function setWindow($window)
    {
        $this->window = $window;

        return $this;
    }

    /**
     * Get window
     *
     * @return integer 
     */
    public function getWindow()
    {
        return $this->window;
    }

    /**
     * Set lifts
     *
     * @param integer $lifts
     * @return CRetailCenters
     */
    public function setLifts($lifts)
    {
        $this->lifts = $lifts;

        return $this;
    }

    /**
     * Get lifts
     *
     * @return integer 
     */
    public function getLifts()
    {
        return $this->lifts;
    }

    /**
     * Set enGroup
     *
     * @param boolean $enGroup
     * @return CRetailCenters
     */
    public function setEnGroup($enGroup)
    {
        $this->enGroup = $enGroup;

        return $this;
    }

    /**
     * Get enGroup
     *
     * @return boolean 
     */
    public function getEnGroup()
    {
        return $this->enGroup;
    }

    /**
     * Set platform
     *
     * @param boolean $platform
     * @return CRetailCenters
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * Get platform
     *
     * @return boolean 
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Set parking
     *
     * @param integer $parking
     * @return CRetailCenters
     */
    public function setParking($parking)
    {
        $this->parking = $parking;

        return $this;
    }

    /**
     * Get parking
     *
     * @return integer 
     */
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * Set fasadAdvert
     *
     * @param boolean $fasadAdvert
     * @return CRetailCenters
     */
    public function setFasadAdvert($fasadAdvert)
    {
        $this->fasadAdvert = $fasadAdvert;

        return $this;
    }

    /**
     * Get fasadAdvert
     *
     * @return boolean 
     */
    public function getFasadAdvert()
    {
        return $this->fasadAdvert;
    }

    /**
     * Set roomsFinishing
     *
     * @param integer $roomsFinishing
     * @return CRetailCenters
     */
    public function setRoomsFinishing($roomsFinishing)
    {
        $this->roomsFinishing = $roomsFinishing;

        return $this;
    }

    /**
     * Get roomsFinishing
     *
     * @return integer 
     */
    public function getRoomsFinishing()
    {
        return $this->roomsFinishing;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return CRetailCenters
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
     * Set power
     *
     * @param integer $power
     * @return CRetailCenters
     */
    public function setPower($power)
    {
        $this->power = $power;

        return $this;
    }

    /**
     * Get power
     *
     * @return integer 
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Set water
     *
     * @param integer $water
     * @return CRetailCenters
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
     * Set toilet
     *
     * @param integer $toilet
     * @return CRetailCenters
     */
    public function setToilet($toilet)
    {
        $this->toilet = $toilet;

        return $this;
    }

    /**
     * Get toilet
     *
     * @return integer 
     */
    public function getToilet()
    {
        return $this->toilet;
    }

    /**
     * Set heating
     *
     * @param integer $heating
     * @return CRetailCenters
     */
    public function setHeating($heating)
    {
        $this->heating = $heating;

        return $this;
    }

    /**
     * Get heating
     *
     * @return integer 
     */
    public function getHeating()
    {
        return $this->heating;
    }

    /**
     * Set ventilation
     *
     * @param integer $ventilation
     * @return CRetailCenters
     */
    public function setVentilation($ventilation)
    {
        $this->ventilation = $ventilation;

        return $this;
    }

    /**
     * Get ventilation
     *
     * @return integer 
     */
    public function getVentilation()
    {
        return $this->ventilation;
    }

    /**
     * Set telecommunications
     *
     * @param integer $telecommunications
     * @return CRetailCenters
     */
    public function setTelecommunications($telecommunications)
    {
        $this->telecommunications = $telecommunications;

        return $this;
    }

    /**
     * Get telecommunications
     *
     * @return integer 
     */
    public function getTelecommunications()
    {
        return $this->telecommunications;
    }

    /**
     * Set dealType
     *
     * @param integer $dealType
     * @return CRetailCenters
     */
    public function setDealType($dealType)
    {
        $this->dealType = $dealType;

        return $this;
    }

    /**
     * Get dealType
     *
     * @return integer 
     */
    public function getDealType()
    {
        return $this->dealType;
    }

    /**
     * Set salePrice
     *
     * @param integer $salePrice
     * @return CRetailCenters
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
     * Set rentPrice
     *
     * @param integer $rentPrice
     * @return CRetailCenters
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
     * Set currency
     *
     * @param integer $currency
     * @return CRetailCenters
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
     * Set saleType
     *
     * @param integer $saleType
     * @return CRetailCenters
     */
    public function setSaleType($saleType)
    {
        $this->saleType = $saleType;

        return $this;
    }

    /**
     * Get saleType
     *
     * @return integer 
     */
    public function getSaleType()
    {
        return $this->saleType;
    }

    /**
     * Set propertyType
     *
     * @param integer $propertyType
     * @return CRetailCenters
     */
    public function setPropertyType($propertyType)
    {
        $this->propertyType = $propertyType;

        return $this;
    }

    /**
     * Get propertyType
     *
     * @return integer 
     */
    public function getPropertyType()
    {
        return $this->propertyType;
    }

    /**
     * Set contract
     *
     * @param integer $contract
     * @return CRetailCenters
     */
    public function setContract($contract)
    {
        $this->contract = $contract;

        return $this;
    }

    /**
     * Get contract
     *
     * @return integer 
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Set taxation
     *
     * @param integer $taxation
     * @return CRetailCenters
     */
    public function setTaxation($taxation)
    {
        $this->taxation = $taxation;

        return $this;
    }

    /**
     * Get taxation
     *
     * @return integer 
     */
    public function getTaxation()
    {
        return $this->taxation;
    }

    /**
     * Set utilityPrice
     *
     * @param integer $utilityPrice
     * @return CRetailCenters
     */
    public function setUtilityPrice($utilityPrice)
    {
        $this->utilityPrice = $utilityPrice;

        return $this;
    }

    /**
     * Get utilityPrice
     *
     * @return integer 
     */
    public function getUtilityPrice()
    {
        return $this->utilityPrice;
    }

    /**
     * Set servicePrice
     *
     * @param integer $servicePrice
     * @return CRetailCenters
     */
    public function setServicePrice($servicePrice)
    {
        $this->servicePrice = $servicePrice;

        return $this;
    }

    /**
     * Get servicePrice
     *
     * @return integer 
     */
    public function getServicePrice()
    {
        return $this->servicePrice;
    }

    /**
     * Set arendator
     *
     * @param string $arendator
     * @return CRetailCenters
     */
    public function setArendator($arendator)
    {
        $this->arendator = $arendator;

        return $this;
    }

    /**
     * Get arendator
     *
     * @return string 
     */
    public function getArendator()
    {
        return $this->arendator;
    }

    /**
     * Set arendatorPrice
     *
     * @param string $arendatorPrice
     * @return CRetailCenters
     */
    public function setArendatorPrice($arendatorPrice)
    {
        $this->arendatorPrice = $arendatorPrice;

        return $this;
    }

    /**
     * Get arendatorPrice
     *
     * @return string 
     */
    public function getArendatorPrice()
    {
        return $this->arendatorPrice;
    }

    /**
     * Set result
     *
     * @param integer $result
     * @return CRetailCenters
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
     * @return CRetailCenters
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
     * @return CRetailCenters
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
     * @return CRetailCenters
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
     * @return CRetailCenters
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
     * @return CRetailCenters
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
     * Set dtActive
     *
     * @param \DateTime $dtActive
     * @return CRetailCenters
     */
    public function setDtActive($dtActive)
    {
        $this->dtActive = $dtActive;

        return $this;
    }

    /**
     * Get dtActive
     *
     * @return \DateTime 
     */
    public function getDtActive()
    {
        return $this->dtActive;
    }

    /**
     * Set dtUpdate
     *
     * @param \DateTime $dtUpdate
     * @return CRetailCenters
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
     * Set agent
     *
     * @param integer $agent
     * @return CRetailCenters
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
     * Set dogovor
     *
     * @param integer $dogovor
     * @return CRetailCenters
     */
    public function setDogovor($dogovor)
    {
        $this->dogovor = $dogovor;

        return $this;
    }

    /**
     * Get dogovor
     *
     * @return integer 
     */
    public function getDogovor()
    {
        return $this->dogovor;
    }

    /**
     * Set dogovorCom
     *
     * @param string $dogovorCom
     * @return CRetailCenters
     */
    public function setDogovorCom($dogovorCom)
    {
        $this->dogovorCom = $dogovorCom;

        return $this;
    }

    /**
     * Get dogovorCom
     *
     * @return string 
     */
    public function getDogovorCom()
    {
        return $this->dogovorCom;
    }

    /**
     * Set onsite
     *
     * @param boolean $onsite
     * @return CRetailCenters
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
     * Set deleted
     *
     * @param boolean $deleted
     * @return CRetailCenters
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
     * @return CRetailCenters
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
}
