<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * COffices
 *
 * @ORM\Table(name="c_offices", indexes={@ORM\Index(name="deleted", columns={"deleted"}), @ORM\Index(name="street", columns={"street"}), @ORM\Index(name="district", columns={"district"}), @ORM\Index(name="metro", columns={"metro"}), @ORM\Index(name="object_name", columns={"object_name"}), @ORM\Index(name="dom_num", columns={"dom_num"}), @ORM\Index(name="object_class", columns={"object_class"}), @ORM\Index(name="house_type", columns={"house_type"}), @ORM\Index(name="object_build", columns={"object_build"}), @ORM\Index(name="banner", columns={"banner"}), @ORM\Index(name="adv", columns={"adv"}), @ORM\Index(name="deal_type", columns={"deal_type"}), @ORM\Index(name="clyent_id", columns={"clyent_id"}), @ORM\Index(name="banner_tags", columns={"banner_tags"})})
 * @ORM\Entity
 */
class COffices
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
     * @ORM\Column(name="fias_houses_id", type="integer", nullable=true)
     */
    private $fiasHousesId;

    /**
     * @var string
     *
     * @ORM\Column(name="yandex_address_str", type="string", length=200, nullable=true)
     */
    private $yandexAddressStr;

    /**
     * @var integer
     *
     * @ORM\Column(name="street", type="integer", nullable=false)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="dom_num", type="string", length=200, nullable=true)
     */
    private $domNum;

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
     * @var integer
     *
     * @ORM\Column(name="from_metro", type="integer", nullable=true)
     */
    private $fromMetro;

    /**
     * @var integer
     *
     * @ORM\Column(name="from_metro_by", type="integer", nullable=false)
     */
    private $fromMetroBy;

    /**
     * @var string
     *
     * @ORM\Column(name="location_text", type="text", length=65535, nullable=true)
     */
    private $locationText;

    /**
     * @var string
     *
     * @ORM\Column(name="site4_text", type="text", length=65535, nullable=true)
     */
    private $site4Text;

    /**
     * @var string
     *
     * @ORM\Column(name="object_name", type="string", length=200, nullable=true)
     */
    private $objectName;

    /**
     * @var integer
     *
     * @ORM\Column(name="adv", type="smallint", nullable=false)
     */
    private $adv;

    /**
     * @var integer
     *
     * @ORM\Column(name="banner", type="smallint", nullable=false)
     */
    private $banner;

    /**
     * @var string
     *
     * @ORM\Column(name="banner_tags", type="text", length=65535, nullable=true)
     */
    private $bannerTags;

    /**
     * @var float
     *
     * @ORM\Column(name="area", type="float", precision=15, scale=1, nullable=true)
     */
    private $area;

    /**
     * @var integer
     *
     * @ORM\Column(name="house_maintype", type="integer", nullable=false)
     */
    private $houseMaintype;

    /**
     * @var integer
     *
     * @ORM\Column(name="house_type", type="integer", nullable=false)
     */
    private $houseType;

    /**
     * @var integer
     *
     * @ORM\Column(name="house_house", type="integer", nullable=false)
     */
    private $houseHouse;

    /**
     * @var integer
     *
     * @ORM\Column(name="house_ring", type="integer", nullable=false)
     */
    private $houseRing;

    /**
     * @var integer
     *
     * @ORM\Column(name="house_moscowcity", type="integer", nullable=false)
     */
    private $houseMoscowcity;

    /**
     * @var integer
     *
     * @ORM\Column(name="house_entrance", type="integer", nullable=false)
     */
    private $houseEntrance;

    /**
     * @var integer
     *
     * @ORM\Column(name="object_class", type="integer", nullable=false)
     */
    private $objectClass;

    /**
     * @var boolean
     *
     * @ORM\Column(name="object_build", type="boolean", nullable=false)
     */
    private $objectBuild;

    /**
     * @var string
     *
     * @ORM\Column(name="floors", type="string", length=100, nullable=true)
     */
    private $floors;

    /**
     * @var integer
     *
     * @ORM\Column(name="floors_int", type="integer", nullable=true)
     */
    private $floorsInt;

    /**
     * @var string
     *
     * @ORM\Column(name="inc_floors", type="string", length=20, nullable=true)
     */
    private $incFloors;

    /**
     * @var string
     *
     * @ORM\Column(name="inc_floors_ext", type="text", length=65535, nullable=true)
     */
    private $incFloorsExt;

    /**
     * @var integer
     *
     * @ORM\Column(name="finishing", type="integer", nullable=false)
     */
    private $finishing;

    /**
     * @var string
     *
     * @ORM\Column(name="finishing_ext", type="text", length=65535, nullable=true)
     */
    private $finishingExt;

    /**
     * @var integer
     *
     * @ORM\Column(name="rooms_finishing", type="integer", nullable=false)
     */
    private $roomsFinishing;

    /**
     * @var string
     *
     * @ORM\Column(name="rooms_finishing_ext", type="text", length=65535, nullable=true)
     */
    private $roomsFinishingExt;

    /**
     * @var integer
     *
     * @ORM\Column(name="overlapping", type="integer", nullable=false)
     */
    private $overlapping;

    /**
     * @var float
     *
     * @ORM\Column(name="land_area", type="float", precision=9, scale=3, nullable=true)
     */
    private $landArea;

    /**
     * @var integer
     *
     * @ORM\Column(name="land_property", type="integer", nullable=true)
     */
    private $landProperty;

    /**
     * @var string
     *
     * @ORM\Column(name="land_options", type="text", length=65535, nullable=true)
     */
    private $landOptions;

    /**
     * @var integer
     *
     * @ORM\Column(name="parking_s", type="integer", nullable=true)
     */
    private $parkingS;

    /**
     * @var integer
     *
     * @ORM\Column(name="parking_o", type="integer", nullable=true)
     */
    private $parkingO;

    /**
     * @var integer
     *
     * @ORM\Column(name="parking_p", type="integer", nullable=true)
     */
    private $parkingP;

    /**
     * @var integer
     *
     * @ORM\Column(name="parking_m", type="integer", nullable=true)
     */
    private $parkingM;

    /**
     * @var string
     *
     * @ORM\Column(name="parking_e", type="text", length=65535, nullable=true)
     */
    private $parkingE;

    /**
     * @var integer
     *
     * @ORM\Column(name="ventilation", type="integer", nullable=false)
     */
    private $ventilation;

    /**
     * @var integer
     *
     * @ORM\Column(name="lifts", type="integer", nullable=true)
     */
    private $lifts;

    /**
     * @var string
     *
     * @ORM\Column(name="lifts_text", type="text", length=65535, nullable=true)
     */
    private $liftsText;

    /**
     * @var integer
     *
     * @ORM\Column(name="heating", type="integer", nullable=false)
     */
    private $heating;

    /**
     * @var integer
     *
     * @ORM\Column(name="power", type="integer", nullable=true)
     */
    private $power;

    /**
     * @var integer
     *
     * @ORM\Column(name="power_a", type="integer", nullable=true)
     */
    private $powerA;

    /**
     * @var integer
     *
     * @ORM\Column(name="power_b", type="integer", nullable=false)
     */
    private $powerB;

    /**
     * @var boolean
     *
     * @ORM\Column(name="power_c", type="boolean", nullable=false)
     */
    private $powerC;

    /**
     * @var string
     *
     * @ORM\Column(name="ingening", type="string", length=20, nullable=true)
     */
    private $ingening;

    /**
     * @var string
     *
     * @ORM\Column(name="ingening_ext", type="text", length=65535, nullable=true)
     */
    private $ingeningExt;

    /**
     * @var string
     *
     * @ORM\Column(name="services", type="string", length=20, nullable=true)
     */
    private $services;

    /**
     * @var string
     *
     * @ORM\Column(name="services_ext", type="text", length=65535, nullable=true)
     */
    private $servicesExt;

    /**
     * @var string
     *
     * @ORM\Column(name="infrastructure", type="string", length=20, nullable=true)
     */
    private $infrastructure;

    /**
     * @var string
     *
     * @ORM\Column(name="infrastructure_ext", type="text", length=65535, nullable=true)
     */
    private $infrastructureExt;

    /**
     * @var integer
     *
     * @ORM\Column(name="clyent_id", type="integer", nullable=false)
     */
    private $clyentId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="c_jperson", type="boolean", nullable=false)
     */
    private $cJperson;

    /**
     * @var string
     *
     * @ORM\Column(name="c_company", type="string", length=200, nullable=true)
     */
    private $cCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="c_fio1", type="string", length=200, nullable=true)
     */
    private $cFio1;

    /**
     * @var string
     *
     * @ORM\Column(name="c_dolzhnost1", type="string", length=200, nullable=true)
     */
    private $cDolzhnost1;

    /**
     * @var string
     *
     * @ORM\Column(name="c_phones1", type="string", length=200, nullable=true)
     */
    private $cPhones1;

    /**
     * @var string
     *
     * @ORM\Column(name="c_emails1", type="string", length=200, nullable=true)
     */
    private $cEmails1;

    /**
     * @var string
     *
     * @ORM\Column(name="c_fio2", type="string", length=200, nullable=true)
     */
    private $cFio2;

    /**
     * @var string
     *
     * @ORM\Column(name="c_dolzhnost2", type="string", length=200, nullable=true)
     */
    private $cDolzhnost2;

    /**
     * @var string
     *
     * @ORM\Column(name="c_phones2", type="string", length=200, nullable=true)
     */
    private $cPhones2;

    /**
     * @var string
     *
     * @ORM\Column(name="c_emails2", type="string", length=200, nullable=true)
     */
    private $cEmails2;

    /**
     * @var string
     *
     * @ORM\Column(name="c_fio3", type="string", length=200, nullable=true)
     */
    private $cFio3;

    /**
     * @var string
     *
     * @ORM\Column(name="c_dolzhnost3", type="string", length=200, nullable=true)
     */
    private $cDolzhnost3;

    /**
     * @var string
     *
     * @ORM\Column(name="c_phones3", type="string", length=200, nullable=true)
     */
    private $cPhones3;

    /**
     * @var string
     *
     * @ORM\Column(name="c_emails3", type="string", length=200, nullable=true)
     */
    private $cEmails3;

    /**
     * @var string
     *
     * @ORM\Column(name="c_comments", type="text", length=65535, nullable=true)
     */
    private $cComments;

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
     * @var \DateTime
     *
     * @ORM\Column(name="dt_insert", type="date", nullable=true)
     */
    private $dtInsert;

    /**
     * @var boolean
     *
     * @ORM\Column(name="verifed", type="boolean", nullable=false)
     */
    private $verifed;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent", type="integer", nullable=false)
     */
    private $agent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="onsite", type="boolean", nullable=false)
     */
    private $onsite;

    /**
     * @var string
     *
     * @ORM\Column(name="slcomments", type="text", length=65535, nullable=true)
     */
    private $slcomments;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var string
     *
     * @ORM\Column(name="plan1", type="string", length=100, nullable=true)
     */
    private $plan1;

    /**
     * @var string
     *
     * @ORM\Column(name="plan2", type="string", length=100, nullable=true)
     */
    private $plan2;

    /**
     * @var string
     *
     * @ORM\Column(name="plan3", type="string", length=100, nullable=true)
     */
    private $plan3;

    /**
     * @var string
     *
     * @ORM\Column(name="plan4", type="string", length=100, nullable=true)
     */
    private $plan4;

    /**
     * @var string
     *
     * @ORM\Column(name="plan5", type="string", length=100, nullable=true)
     */
    private $plan5;

    /**
     * @var string
     *
     * @ORM\Column(name="plan6", type="string", length=100, nullable=true)
     */
    private $plan6;

    /**
     * @var string
     *
     * @ORM\Column(name="plan7", type="string", length=100, nullable=true)
     */
    private $plan7;

    /**
     * @var string
     *
     * @ORM\Column(name="plan8", type="string", length=100, nullable=true)
     */
    private $plan8;

    /**
     * @var string
     *
     * @ORM\Column(name="plan9", type="string", length=100, nullable=true)
     */
    private $plan9;

    /**
     * @var string
     *
     * @ORM\Column(name="plan10", type="string", length=100, nullable=true)
     */
    private $plan10;

    /**
     * @var string
     *
     * @ORM\Column(name="plan11", type="string", length=100, nullable=true)
     */
    private $plan11;

    /**
     * @var string
     *
     * @ORM\Column(name="plan12", type="string", length=100, nullable=true)
     */
    private $plan12;

    /**
     * @var string
     *
     * @ORM\Column(name="plan13", type="string", length=100, nullable=true)
     */
    private $plan13;

    /**
     * @var string
     *
     * @ORM\Column(name="plan14", type="string", length=100, nullable=true)
     */
    private $plan14;

    /**
     * @var string
     *
     * @ORM\Column(name="plan15", type="string", length=100, nullable=true)
     */
    private $plan15;

    /**
     * @var integer
     *
     * @ORM\Column(name="deal_type", type="integer", nullable=false)
     */
    private $dealType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="main2site", type="boolean", nullable=false)
     */
    private $main2site;



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
     * Set fiasHousesId
     *
     * @param integer $fiasHousesId
     * @return COffices
     */
    public function setFiasHousesId($fiasHousesId)
    {
        $this->fiasHousesId = $fiasHousesId;

        return $this;
    }

    /**
     * Get fiasHousesId
     *
     * @return integer 
     */
    public function getFiasHousesId()
    {
        return $this->fiasHousesId;
    }

    /**
     * Set yandexAddressStr
     *
     * @param string $yandexAddressStr
     * @return COffices
     */
    public function setYandexAddressStr($yandexAddressStr)
    {
        $this->yandexAddressStr = $yandexAddressStr;

        return $this;
    }

    /**
     * Get yandexAddressStr
     *
     * @return string 
     */
    public function getYandexAddressStr()
    {
        return $this->yandexAddressStr;
    }

    /**
     * Set street
     *
     * @param integer $street
     * @return COffices
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return integer 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set domNum
     *
     * @param string $domNum
     * @return COffices
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
     * Set district
     *
     * @param integer $district
     * @return COffices
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
     * @return COffices
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
     * Set fromMetro
     *
     * @param integer $fromMetro
     * @return COffices
     */
    public function setFromMetro($fromMetro)
    {
        $this->fromMetro = $fromMetro;

        return $this;
    }

    /**
     * Get fromMetro
     *
     * @return integer 
     */
    public function getFromMetro()
    {
        return $this->fromMetro;
    }

    /**
     * Set fromMetroBy
     *
     * @param integer $fromMetroBy
     * @return COffices
     */
    public function setFromMetroBy($fromMetroBy)
    {
        $this->fromMetroBy = $fromMetroBy;

        return $this;
    }

    /**
     * Get fromMetroBy
     *
     * @return integer 
     */
    public function getFromMetroBy()
    {
        return $this->fromMetroBy;
    }

    /**
     * Set locationText
     *
     * @param string $locationText
     * @return COffices
     */
    public function setLocationText($locationText)
    {
        $this->locationText = $locationText;

        return $this;
    }

    /**
     * Get locationText
     *
     * @return string 
     */
    public function getLocationText()
    {
        return $this->locationText;
    }

    /**
     * Set site4Text
     *
     * @param string $site4Text
     * @return COffices
     */
    public function setSite4Text($site4Text)
    {
        $this->site4Text = $site4Text;

        return $this;
    }

    /**
     * Get site4Text
     *
     * @return string 
     */
    public function getSite4Text()
    {
        return $this->site4Text;
    }

    /**
     * Set objectName
     *
     * @param string $objectName
     * @return COffices
     */
    public function setObjectName($objectName)
    {
        $this->objectName = $objectName;

        return $this;
    }

    /**
     * Get objectName
     *
     * @return string 
     */
    public function getObjectName()
    {
        return $this->objectName;
    }

    /**
     * Set adv
     *
     * @param integer $adv
     * @return COffices
     */
    public function setAdv($adv)
    {
        $this->adv = $adv;

        return $this;
    }

    /**
     * Get adv
     *
     * @return integer 
     */
    public function getAdv()
    {
        return $this->adv;
    }

    /**
     * Set banner
     *
     * @param integer $banner
     * @return COffices
     */
    public function setBanner($banner)
    {
        $this->banner = $banner;

        return $this;
    }

    /**
     * Get banner
     *
     * @return integer 
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * Set bannerTags
     *
     * @param string $bannerTags
     * @return COffices
     */
    public function setBannerTags($bannerTags)
    {
        $this->bannerTags = $bannerTags;

        return $this;
    }

    /**
     * Get bannerTags
     *
     * @return string 
     */
    public function getBannerTags()
    {
        return $this->bannerTags;
    }

    /**
     * Set area
     *
     * @param float $area
     * @return COffices
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return float 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set houseMaintype
     *
     * @param integer $houseMaintype
     * @return COffices
     */
    public function setHouseMaintype($houseMaintype)
    {
        $this->houseMaintype = $houseMaintype;

        return $this;
    }

    /**
     * Get houseMaintype
     *
     * @return integer 
     */
    public function getHouseMaintype()
    {
        return $this->houseMaintype;
    }

    /**
     * Set houseType
     *
     * @param integer $houseType
     * @return COffices
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
     * Set houseHouse
     *
     * @param integer $houseHouse
     * @return COffices
     */
    public function setHouseHouse($houseHouse)
    {
        $this->houseHouse = $houseHouse;

        return $this;
    }

    /**
     * Get houseHouse
     *
     * @return integer 
     */
    public function getHouseHouse()
    {
        return $this->houseHouse;
    }

    /**
     * Set houseRing
     *
     * @param integer $houseRing
     * @return COffices
     */
    public function setHouseRing($houseRing)
    {
        $this->houseRing = $houseRing;

        return $this;
    }

    /**
     * Get houseRing
     *
     * @return integer 
     */
    public function getHouseRing()
    {
        return $this->houseRing;
    }

    /**
     * Set houseMoscowcity
     *
     * @param integer $houseMoscowcity
     * @return COffices
     */
    public function setHouseMoscowcity($houseMoscowcity)
    {
        $this->houseMoscowcity = $houseMoscowcity;

        return $this;
    }

    /**
     * Get houseMoscowcity
     *
     * @return integer 
     */
    public function getHouseMoscowcity()
    {
        return $this->houseMoscowcity;
    }

    /**
     * Set houseEntrance
     *
     * @param integer $houseEntrance
     * @return COffices
     */
    public function setHouseEntrance($houseEntrance)
    {
        $this->houseEntrance = $houseEntrance;

        return $this;
    }

    /**
     * Get houseEntrance
     *
     * @return integer 
     */
    public function getHouseEntrance()
    {
        return $this->houseEntrance;
    }

    /**
     * Set objectClass
     *
     * @param integer $objectClass
     * @return COffices
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
     * Set objectBuild
     *
     * @param boolean $objectBuild
     * @return COffices
     */
    public function setObjectBuild($objectBuild)
    {
        $this->objectBuild = $objectBuild;

        return $this;
    }

    /**
     * Get objectBuild
     *
     * @return boolean 
     */
    public function getObjectBuild()
    {
        return $this->objectBuild;
    }

    /**
     * Set floors
     *
     * @param string $floors
     * @return COffices
     */
    public function setFloors($floors)
    {
        $this->floors = $floors;

        return $this;
    }

    /**
     * Get floors
     *
     * @return string 
     */
    public function getFloors()
    {
        return $this->floors;
    }

    /**
     * Set floorsInt
     *
     * @param integer $floorsInt
     * @return COffices
     */
    public function setFloorsInt($floorsInt)
    {
        $this->floorsInt = $floorsInt;

        return $this;
    }

    /**
     * Get floorsInt
     *
     * @return integer 
     */
    public function getFloorsInt()
    {
        return $this->floorsInt;
    }

    /**
     * Set incFloors
     *
     * @param string $incFloors
     * @return COffices
     */
    public function setIncFloors($incFloors)
    {
        $this->incFloors = $incFloors;

        return $this;
    }

    /**
     * Get incFloors
     *
     * @return string 
     */
    public function getIncFloors()
    {
        return $this->incFloors;
    }

    /**
     * Set incFloorsExt
     *
     * @param string $incFloorsExt
     * @return COffices
     */
    public function setIncFloorsExt($incFloorsExt)
    {
        $this->incFloorsExt = $incFloorsExt;

        return $this;
    }

    /**
     * Get incFloorsExt
     *
     * @return string 
     */
    public function getIncFloorsExt()
    {
        return $this->incFloorsExt;
    }

    /**
     * Set finishing
     *
     * @param integer $finishing
     * @return COffices
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
     * Set finishingExt
     *
     * @param string $finishingExt
     * @return COffices
     */
    public function setFinishingExt($finishingExt)
    {
        $this->finishingExt = $finishingExt;

        return $this;
    }

    /**
     * Get finishingExt
     *
     * @return string 
     */
    public function getFinishingExt()
    {
        return $this->finishingExt;
    }

    /**
     * Set roomsFinishing
     *
     * @param integer $roomsFinishing
     * @return COffices
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
     * Set roomsFinishingExt
     *
     * @param string $roomsFinishingExt
     * @return COffices
     */
    public function setRoomsFinishingExt($roomsFinishingExt)
    {
        $this->roomsFinishingExt = $roomsFinishingExt;

        return $this;
    }

    /**
     * Get roomsFinishingExt
     *
     * @return string 
     */
    public function getRoomsFinishingExt()
    {
        return $this->roomsFinishingExt;
    }

    /**
     * Set overlapping
     *
     * @param integer $overlapping
     * @return COffices
     */
    public function setOverlapping($overlapping)
    {
        $this->overlapping = $overlapping;

        return $this;
    }

    /**
     * Get overlapping
     *
     * @return integer 
     */
    public function getOverlapping()
    {
        return $this->overlapping;
    }

    /**
     * Set landArea
     *
     * @param float $landArea
     * @return COffices
     */
    public function setLandArea($landArea)
    {
        $this->landArea = $landArea;

        return $this;
    }

    /**
     * Get landArea
     *
     * @return float 
     */
    public function getLandArea()
    {
        return $this->landArea;
    }

    /**
     * Set landProperty
     *
     * @param integer $landProperty
     * @return COffices
     */
    public function setLandProperty($landProperty)
    {
        $this->landProperty = $landProperty;

        return $this;
    }

    /**
     * Get landProperty
     *
     * @return integer 
     */
    public function getLandProperty()
    {
        return $this->landProperty;
    }

    /**
     * Set landOptions
     *
     * @param string $landOptions
     * @return COffices
     */
    public function setLandOptions($landOptions)
    {
        $this->landOptions = $landOptions;

        return $this;
    }

    /**
     * Get landOptions
     *
     * @return string 
     */
    public function getLandOptions()
    {
        return $this->landOptions;
    }

    /**
     * Set parkingS
     *
     * @param integer $parkingS
     * @return COffices
     */
    public function setParkingS($parkingS)
    {
        $this->parkingS = $parkingS;

        return $this;
    }

    /**
     * Get parkingS
     *
     * @return integer 
     */
    public function getParkingS()
    {
        return $this->parkingS;
    }

    /**
     * Set parkingO
     *
     * @param integer $parkingO
     * @return COffices
     */
    public function setParkingO($parkingO)
    {
        $this->parkingO = $parkingO;

        return $this;
    }

    /**
     * Get parkingO
     *
     * @return integer 
     */
    public function getParkingO()
    {
        return $this->parkingO;
    }

    /**
     * Set parkingP
     *
     * @param integer $parkingP
     * @return COffices
     */
    public function setParkingP($parkingP)
    {
        $this->parkingP = $parkingP;

        return $this;
    }

    /**
     * Get parkingP
     *
     * @return integer 
     */
    public function getParkingP()
    {
        return $this->parkingP;
    }

    /**
     * Set parkingM
     *
     * @param integer $parkingM
     * @return COffices
     */
    public function setParkingM($parkingM)
    {
        $this->parkingM = $parkingM;

        return $this;
    }

    /**
     * Get parkingM
     *
     * @return integer 
     */
    public function getParkingM()
    {
        return $this->parkingM;
    }

    /**
     * Set parkingE
     *
     * @param string $parkingE
     * @return COffices
     */
    public function setParkingE($parkingE)
    {
        $this->parkingE = $parkingE;

        return $this;
    }

    /**
     * Get parkingE
     *
     * @return string 
     */
    public function getParkingE()
    {
        return $this->parkingE;
    }

    /**
     * Set ventilation
     *
     * @param integer $ventilation
     * @return COffices
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
     * Set lifts
     *
     * @param integer $lifts
     * @return COffices
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
     * Set liftsText
     *
     * @param string $liftsText
     * @return COffices
     */
    public function setLiftsText($liftsText)
    {
        $this->liftsText = $liftsText;

        return $this;
    }

    /**
     * Get liftsText
     *
     * @return string 
     */
    public function getLiftsText()
    {
        return $this->liftsText;
    }

    /**
     * Set heating
     *
     * @param integer $heating
     * @return COffices
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
     * Set power
     *
     * @param integer $power
     * @return COffices
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
     * Set powerA
     *
     * @param integer $powerA
     * @return COffices
     */
    public function setPowerA($powerA)
    {
        $this->powerA = $powerA;

        return $this;
    }

    /**
     * Get powerA
     *
     * @return integer 
     */
    public function getPowerA()
    {
        return $this->powerA;
    }

    /**
     * Set powerB
     *
     * @param integer $powerB
     * @return COffices
     */
    public function setPowerB($powerB)
    {
        $this->powerB = $powerB;

        return $this;
    }

    /**
     * Get powerB
     *
     * @return integer 
     */
    public function getPowerB()
    {
        return $this->powerB;
    }

    /**
     * Set powerC
     *
     * @param boolean $powerC
     * @return COffices
     */
    public function setPowerC($powerC)
    {
        $this->powerC = $powerC;

        return $this;
    }

    /**
     * Get powerC
     *
     * @return boolean 
     */
    public function getPowerC()
    {
        return $this->powerC;
    }

    /**
     * Set ingening
     *
     * @param string $ingening
     * @return COffices
     */
    public function setIngening($ingening)
    {
        $this->ingening = $ingening;

        return $this;
    }

    /**
     * Get ingening
     *
     * @return string 
     */
    public function getIngening()
    {
        return $this->ingening;
    }

    /**
     * Set ingeningExt
     *
     * @param string $ingeningExt
     * @return COffices
     */
    public function setIngeningExt($ingeningExt)
    {
        $this->ingeningExt = $ingeningExt;

        return $this;
    }

    /**
     * Get ingeningExt
     *
     * @return string 
     */
    public function getIngeningExt()
    {
        return $this->ingeningExt;
    }

    /**
     * Set services
     *
     * @param string $services
     * @return COffices
     */
    public function setServices($services)
    {
        $this->services = $services;

        return $this;
    }

    /**
     * Get services
     *
     * @return string 
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Set servicesExt
     *
     * @param string $servicesExt
     * @return COffices
     */
    public function setServicesExt($servicesExt)
    {
        $this->servicesExt = $servicesExt;

        return $this;
    }

    /**
     * Get servicesExt
     *
     * @return string 
     */
    public function getServicesExt()
    {
        return $this->servicesExt;
    }

    /**
     * Set infrastructure
     *
     * @param string $infrastructure
     * @return COffices
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
     * Set infrastructureExt
     *
     * @param string $infrastructureExt
     * @return COffices
     */
    public function setInfrastructureExt($infrastructureExt)
    {
        $this->infrastructureExt = $infrastructureExt;

        return $this;
    }

    /**
     * Get infrastructureExt
     *
     * @return string 
     */
    public function getInfrastructureExt()
    {
        return $this->infrastructureExt;
    }

    /**
     * Set clyentId
     *
     * @param integer $clyentId
     * @return COffices
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
     * Set cJperson
     *
     * @param boolean $cJperson
     * @return COffices
     */
    public function setCJperson($cJperson)
    {
        $this->cJperson = $cJperson;

        return $this;
    }

    /**
     * Get cJperson
     *
     * @return boolean 
     */
    public function getCJperson()
    {
        return $this->cJperson;
    }

    /**
     * Set cCompany
     *
     * @param string $cCompany
     * @return COffices
     */
    public function setCCompany($cCompany)
    {
        $this->cCompany = $cCompany;

        return $this;
    }

    /**
     * Get cCompany
     *
     * @return string 
     */
    public function getCCompany()
    {
        return $this->cCompany;
    }

    /**
     * Set cFio1
     *
     * @param string $cFio1
     * @return COffices
     */
    public function setCFio1($cFio1)
    {
        $this->cFio1 = $cFio1;

        return $this;
    }

    /**
     * Get cFio1
     *
     * @return string 
     */
    public function getCFio1()
    {
        return $this->cFio1;
    }

    /**
     * Set cDolzhnost1
     *
     * @param string $cDolzhnost1
     * @return COffices
     */
    public function setCDolzhnost1($cDolzhnost1)
    {
        $this->cDolzhnost1 = $cDolzhnost1;

        return $this;
    }

    /**
     * Get cDolzhnost1
     *
     * @return string 
     */
    public function getCDolzhnost1()
    {
        return $this->cDolzhnost1;
    }

    /**
     * Set cPhones1
     *
     * @param string $cPhones1
     * @return COffices
     */
    public function setCPhones1($cPhones1)
    {
        $this->cPhones1 = $cPhones1;

        return $this;
    }

    /**
     * Get cPhones1
     *
     * @return string 
     */
    public function getCPhones1()
    {
        return $this->cPhones1;
    }

    /**
     * Set cEmails1
     *
     * @param string $cEmails1
     * @return COffices
     */
    public function setCEmails1($cEmails1)
    {
        $this->cEmails1 = $cEmails1;

        return $this;
    }

    /**
     * Get cEmails1
     *
     * @return string 
     */
    public function getCEmails1()
    {
        return $this->cEmails1;
    }

    /**
     * Set cFio2
     *
     * @param string $cFio2
     * @return COffices
     */
    public function setCFio2($cFio2)
    {
        $this->cFio2 = $cFio2;

        return $this;
    }

    /**
     * Get cFio2
     *
     * @return string 
     */
    public function getCFio2()
    {
        return $this->cFio2;
    }

    /**
     * Set cDolzhnost2
     *
     * @param string $cDolzhnost2
     * @return COffices
     */
    public function setCDolzhnost2($cDolzhnost2)
    {
        $this->cDolzhnost2 = $cDolzhnost2;

        return $this;
    }

    /**
     * Get cDolzhnost2
     *
     * @return string 
     */
    public function getCDolzhnost2()
    {
        return $this->cDolzhnost2;
    }

    /**
     * Set cPhones2
     *
     * @param string $cPhones2
     * @return COffices
     */
    public function setCPhones2($cPhones2)
    {
        $this->cPhones2 = $cPhones2;

        return $this;
    }

    /**
     * Get cPhones2
     *
     * @return string 
     */
    public function getCPhones2()
    {
        return $this->cPhones2;
    }

    /**
     * Set cEmails2
     *
     * @param string $cEmails2
     * @return COffices
     */
    public function setCEmails2($cEmails2)
    {
        $this->cEmails2 = $cEmails2;

        return $this;
    }

    /**
     * Get cEmails2
     *
     * @return string 
     */
    public function getCEmails2()
    {
        return $this->cEmails2;
    }

    /**
     * Set cFio3
     *
     * @param string $cFio3
     * @return COffices
     */
    public function setCFio3($cFio3)
    {
        $this->cFio3 = $cFio3;

        return $this;
    }

    /**
     * Get cFio3
     *
     * @return string 
     */
    public function getCFio3()
    {
        return $this->cFio3;
    }

    /**
     * Set cDolzhnost3
     *
     * @param string $cDolzhnost3
     * @return COffices
     */
    public function setCDolzhnost3($cDolzhnost3)
    {
        $this->cDolzhnost3 = $cDolzhnost3;

        return $this;
    }

    /**
     * Get cDolzhnost3
     *
     * @return string 
     */
    public function getCDolzhnost3()
    {
        return $this->cDolzhnost3;
    }

    /**
     * Set cPhones3
     *
     * @param string $cPhones3
     * @return COffices
     */
    public function setCPhones3($cPhones3)
    {
        $this->cPhones3 = $cPhones3;

        return $this;
    }

    /**
     * Get cPhones3
     *
     * @return string 
     */
    public function getCPhones3()
    {
        return $this->cPhones3;
    }

    /**
     * Set cEmails3
     *
     * @param string $cEmails3
     * @return COffices
     */
    public function setCEmails3($cEmails3)
    {
        $this->cEmails3 = $cEmails3;

        return $this;
    }

    /**
     * Get cEmails3
     *
     * @return string 
     */
    public function getCEmails3()
    {
        return $this->cEmails3;
    }

    /**
     * Set cComments
     *
     * @param string $cComments
     * @return COffices
     */
    public function setCComments($cComments)
    {
        $this->cComments = $cComments;

        return $this;
    }

    /**
     * Get cComments
     *
     * @return string 
     */
    public function getCComments()
    {
        return $this->cComments;
    }

    /**
     * Set cX
     *
     * @param float $cX
     * @return COffices
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
     * @return COffices
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
     * @return COffices
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
     * @return COffices
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
     * @return COffices
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
     * Set dtInsert
     *
     * @param \DateTime $dtInsert
     * @return COffices
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
     * Set verifed
     *
     * @param boolean $verifed
     * @return COffices
     */
    public function setVerifed($verifed)
    {
        $this->verifed = $verifed;

        return $this;
    }

    /**
     * Get verifed
     *
     * @return boolean 
     */
    public function getVerifed()
    {
        return $this->verifed;
    }

    /**
     * Set agent
     *
     * @param integer $agent
     * @return COffices
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
     * Set onsite
     *
     * @param boolean $onsite
     * @return COffices
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
     * Set slcomments
     *
     * @param string $slcomments
     * @return COffices
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
     * Set deleted
     *
     * @param boolean $deleted
     * @return COffices
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
     * Set plan1
     *
     * @param string $plan1
     * @return COffices
     */
    public function setPlan1($plan1)
    {
        $this->plan1 = $plan1;

        return $this;
    }

    /**
     * Get plan1
     *
     * @return string 
     */
    public function getPlan1()
    {
        return $this->plan1;
    }

    /**
     * Set plan2
     *
     * @param string $plan2
     * @return COffices
     */
    public function setPlan2($plan2)
    {
        $this->plan2 = $plan2;

        return $this;
    }

    /**
     * Get plan2
     *
     * @return string 
     */
    public function getPlan2()
    {
        return $this->plan2;
    }

    /**
     * Set plan3
     *
     * @param string $plan3
     * @return COffices
     */
    public function setPlan3($plan3)
    {
        $this->plan3 = $plan3;

        return $this;
    }

    /**
     * Get plan3
     *
     * @return string 
     */
    public function getPlan3()
    {
        return $this->plan3;
    }

    /**
     * Set plan4
     *
     * @param string $plan4
     * @return COffices
     */
    public function setPlan4($plan4)
    {
        $this->plan4 = $plan4;

        return $this;
    }

    /**
     * Get plan4
     *
     * @return string 
     */
    public function getPlan4()
    {
        return $this->plan4;
    }

    /**
     * Set plan5
     *
     * @param string $plan5
     * @return COffices
     */
    public function setPlan5($plan5)
    {
        $this->plan5 = $plan5;

        return $this;
    }

    /**
     * Get plan5
     *
     * @return string 
     */
    public function getPlan5()
    {
        return $this->plan5;
    }

    /**
     * Set plan6
     *
     * @param string $plan6
     * @return COffices
     */
    public function setPlan6($plan6)
    {
        $this->plan6 = $plan6;

        return $this;
    }

    /**
     * Get plan6
     *
     * @return string 
     */
    public function getPlan6()
    {
        return $this->plan6;
    }

    /**
     * Set plan7
     *
     * @param string $plan7
     * @return COffices
     */
    public function setPlan7($plan7)
    {
        $this->plan7 = $plan7;

        return $this;
    }

    /**
     * Get plan7
     *
     * @return string 
     */
    public function getPlan7()
    {
        return $this->plan7;
    }

    /**
     * Set plan8
     *
     * @param string $plan8
     * @return COffices
     */
    public function setPlan8($plan8)
    {
        $this->plan8 = $plan8;

        return $this;
    }

    /**
     * Get plan8
     *
     * @return string 
     */
    public function getPlan8()
    {
        return $this->plan8;
    }

    /**
     * Set plan9
     *
     * @param string $plan9
     * @return COffices
     */
    public function setPlan9($plan9)
    {
        $this->plan9 = $plan9;

        return $this;
    }

    /**
     * Get plan9
     *
     * @return string 
     */
    public function getPlan9()
    {
        return $this->plan9;
    }

    /**
     * Set plan10
     *
     * @param string $plan10
     * @return COffices
     */
    public function setPlan10($plan10)
    {
        $this->plan10 = $plan10;

        return $this;
    }

    /**
     * Get plan10
     *
     * @return string 
     */
    public function getPlan10()
    {
        return $this->plan10;
    }

    /**
     * Set plan11
     *
     * @param string $plan11
     * @return COffices
     */
    public function setPlan11($plan11)
    {
        $this->plan11 = $plan11;

        return $this;
    }

    /**
     * Get plan11
     *
     * @return string 
     */
    public function getPlan11()
    {
        return $this->plan11;
    }

    /**
     * Set plan12
     *
     * @param string $plan12
     * @return COffices
     */
    public function setPlan12($plan12)
    {
        $this->plan12 = $plan12;

        return $this;
    }

    /**
     * Get plan12
     *
     * @return string 
     */
    public function getPlan12()
    {
        return $this->plan12;
    }

    /**
     * Set plan13
     *
     * @param string $plan13
     * @return COffices
     */
    public function setPlan13($plan13)
    {
        $this->plan13 = $plan13;

        return $this;
    }

    /**
     * Get plan13
     *
     * @return string 
     */
    public function getPlan13()
    {
        return $this->plan13;
    }

    /**
     * Set plan14
     *
     * @param string $plan14
     * @return COffices
     */
    public function setPlan14($plan14)
    {
        $this->plan14 = $plan14;

        return $this;
    }

    /**
     * Get plan14
     *
     * @return string 
     */
    public function getPlan14()
    {
        return $this->plan14;
    }

    /**
     * Set plan15
     *
     * @param string $plan15
     * @return COffices
     */
    public function setPlan15($plan15)
    {
        $this->plan15 = $plan15;

        return $this;
    }

    /**
     * Get plan15
     *
     * @return string 
     */
    public function getPlan15()
    {
        return $this->plan15;
    }

    /**
     * Set dealType
     *
     * @param integer $dealType
     * @return COffices
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
     * Set main2site
     *
     * @param boolean $main2site
     * @return COffices
     */
    public function setMain2site($main2site)
    {
        $this->main2site = $main2site;

        return $this;
    }

    /**
     * Get main2site
     *
     * @return boolean 
     */
    public function getMain2site()
    {
        return $this->main2site;
    }
}
