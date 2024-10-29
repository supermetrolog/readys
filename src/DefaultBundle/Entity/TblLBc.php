<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblLBc
 *
 * @ORM\Table(name="tbl_l_bc", indexes={@ORM\Index(name="l_street", columns={"l_street", "building_number"})})
 * @ORM\Entity
 */
class TblLBc
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
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="second_name", type="string", length=100, nullable=true)
     */
    private $secondName;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_build", type="integer", nullable=true)
     */
    private $isBuild;

    /**
     * @var string
     *
     * @ORM\Column(name="builder", type="string", length=255, nullable=true)
     */
    private $builder;

    /**
     * @var string
     *
     * @ORM\Column(name="architector", type="string", length=255, nullable=true)
     */
    private $architector;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=20, nullable=true)
     */
    private $class;

    /**
     * @var integer
     *
     * @ORM\Column(name="year_build", type="integer", nullable=true)
     */
    private $yearBuild;

    /**
     * @var string
     *
     * @ORM\Column(name="year_build_title", type="string", length=255, nullable=true)
     */
    private $yearBuildTitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="year_reconstruct", type="integer", nullable=true)
     */
    private $yearReconstruct;

    /**
     * @var integer
     *
     * @ORM\Column(name="l_metro", type="integer", nullable=true)
     */
    private $lMetro;

    /**
     * @var integer
     *
     * @ORM\Column(name="l_street", type="integer", nullable=true)
     */
    private $lStreet;

    /**
     * @var string
     *
     * @ORM\Column(name="building_number", type="string", length=30, nullable=true)
     */
    private $buildingNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="second_address", type="string", length=255, nullable=true)
     */
    private $secondAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="lat", type="decimal", precision=15, scale=7, nullable=true)
     */
    private $lat;

    /**
     * @var string
     *
     * @ORM\Column(name="lng", type="decimal", precision=15, scale=7, nullable=true)
     */
    private $lng;

    /**
     * @var string
     *
     * @ORM\Column(name="pano_lat", type="decimal", precision=15, scale=7, nullable=true)
     */
    private $panoLat;

    /**
     * @var string
     *
     * @ORM\Column(name="pano_lng", type="decimal", precision=15, scale=7, nullable=true)
     */
    private $panoLng;

    /**
     * @var string
     *
     * @ORM\Column(name="pano_heading", type="decimal", precision=15, scale=7, nullable=true)
     */
    private $panoHeading;

    /**
     * @var string
     *
     * @ORM\Column(name="pano_pitch", type="decimal", precision=15, scale=7, nullable=true)
     */
    private $panoPitch;

    /**
     * @var string
     *
     * @ORM\Column(name="pano_zoom", type="decimal", precision=15, scale=7, nullable=true)
     */
    private $panoZoom;

    /**
     * @var string
     *
     * @ORM\Column(name="design", type="string", length=100, nullable=true)
     */
    private $design;

    /**
     * @var float
     *
     * @ORM\Column(name="height_common", type="float", precision=10, scale=0, nullable=true)
     */
    private $heightCommon;

    /**
     * @var float
     *
     * @ORM\Column(name="height_min", type="float", precision=10, scale=0, nullable=true)
     */
    private $heightMin;

    /**
     * @var float
     *
     * @ORM\Column(name="height_max", type="float", precision=10, scale=0, nullable=true)
     */
    private $heightMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="floors", type="integer", nullable=true)
     */
    private $floors;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_dif_floors", type="integer", nullable=true)
     */
    private $isDifFloors;

    /**
     * @var string
     *
     * @ORM\Column(name="ventilation", type="string", length=255, nullable=true)
     */
    private $ventilation;

    /**
     * @var integer
     *
     * @ORM\Column(name="square", type="integer", nullable=true)
     */
    private $square;

    /**
     * @var integer
     *
     * @ORM\Column(name="square_ground", type="integer", nullable=true)
     */
    private $squareGround;

    /**
     * @var integer
     *
     * @ORM\Column(name="square_underground", type="integer", nullable=true)
     */
    private $squareUnderground;

    /**
     * @var integer
     *
     * @ORM\Column(name="square_rent", type="integer", nullable=true)
     */
    private $squareRent;

    /**
     * @var string
     *
     * @ORM\Column(name="heating", type="string", length=255, nullable=true)
     */
    private $heating;

    /**
     * @var string
     *
     * @ORM\Column(name="fire_proof", type="string", length=255, nullable=true)
     */
    private $fireProof;

    /**
     * @var string
     *
     * @ORM\Column(name="electricity", type="string", length=255, nullable=true)
     */
    private $electricity;

    /**
     * @var string
     *
     * @ORM\Column(name="telecom", type="string", length=255, nullable=true)
     */
    private $telecom;

    /**
     * @var string
     *
     * @ORM\Column(name="providers", type="string", length=255, nullable=true)
     */
    private $providers;

    /**
     * @var integer
     *
     * @ORM\Column(name="security", type="integer", nullable=true)
     */
    private $security;

    /**
     * @var string
     *
     * @ORM\Column(name="security_tech", type="string", length=255, nullable=true)
     */
    private $securityTech;

    /**
     * @var integer
     *
     * @ORM\Column(name="elevators", type="integer", nullable=true)
     */
    private $elevators;

    /**
     * @var string
     *
     * @ORM\Column(name="elevators_company", type="string", length=255, nullable=true)
     */
    private $elevatorsCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="parking", type="string", length=255, nullable=true)
     */
    private $parking;

    /**
     * @var integer
     *
     * @ORM\Column(name="parking_ground_size", type="integer", nullable=true)
     */
    private $parkingGroundSize;

    /**
     * @var integer
     *
     * @ORM\Column(name="parking_underground_size", type="integer", nullable=true)
     */
    private $parkingUndergroundSize;

    /**
     * @var integer
     *
     * @ORM\Column(name="parking_multilevel_size", type="integer", nullable=true)
     */
    private $parkingMultilevelSize;

    /**
     * @var string
     *
     * @ORM\Column(name="parking_value", type="string", length=255, nullable=true)
     */
    private $parkingValue;

    /**
     * @var string
     *
     * @ORM\Column(name="parking_value_price", type="string", length=16, nullable=true)
     */
    private $parkingValuePrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="parking_value_price_currency", type="integer", nullable=true)
     */
    private $parkingValuePriceCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="parking_value_price_for", type="string", length=255, nullable=true)
     */
    private $parkingValuePriceFor;

    /**
     * @var string
     *
     * @ORM\Column(name="infra", type="string", length=255, nullable=true)
     */
    private $infra;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="arendators", type="string", length=255, nullable=true)
     */
    private $arendators;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;



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
     * @return TblLBc
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
     * Set name
     *
     * @param string $name
     * @return TblLBc
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set secondName
     *
     * @param string $secondName
     * @return TblLBc
     */
    public function setSecondName($secondName)
    {
        $this->secondName = $secondName;

        return $this;
    }

    /**
     * Get secondName
     *
     * @return string 
     */
    public function getSecondName()
    {
        return $this->secondName;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return TblLBc
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set isBuild
     *
     * @param integer $isBuild
     * @return TblLBc
     */
    public function setIsBuild($isBuild)
    {
        $this->isBuild = $isBuild;

        return $this;
    }

    /**
     * Get isBuild
     *
     * @return integer 
     */
    public function getIsBuild()
    {
        return $this->isBuild;
    }

    /**
     * Set builder
     *
     * @param string $builder
     * @return TblLBc
     */
    public function setBuilder($builder)
    {
        $this->builder = $builder;

        return $this;
    }

    /**
     * Get builder
     *
     * @return string 
     */
    public function getBuilder()
    {
        return $this->builder;
    }

    /**
     * Set architector
     *
     * @param string $architector
     * @return TblLBc
     */
    public function setArchitector($architector)
    {
        $this->architector = $architector;

        return $this;
    }

    /**
     * Get architector
     *
     * @return string 
     */
    public function getArchitector()
    {
        return $this->architector;
    }

    /**
     * Set class
     *
     * @param string $class
     * @return TblLBc
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string 
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set yearBuild
     *
     * @param integer $yearBuild
     * @return TblLBc
     */
    public function setYearBuild($yearBuild)
    {
        $this->yearBuild = $yearBuild;

        return $this;
    }

    /**
     * Get yearBuild
     *
     * @return integer 
     */
    public function getYearBuild()
    {
        return $this->yearBuild;
    }

    /**
     * Set yearBuildTitle
     *
     * @param string $yearBuildTitle
     * @return TblLBc
     */
    public function setYearBuildTitle($yearBuildTitle)
    {
        $this->yearBuildTitle = $yearBuildTitle;

        return $this;
    }

    /**
     * Get yearBuildTitle
     *
     * @return string 
     */
    public function getYearBuildTitle()
    {
        return $this->yearBuildTitle;
    }

    /**
     * Set yearReconstruct
     *
     * @param integer $yearReconstruct
     * @return TblLBc
     */
    public function setYearReconstruct($yearReconstruct)
    {
        $this->yearReconstruct = $yearReconstruct;

        return $this;
    }

    /**
     * Get yearReconstruct
     *
     * @return integer 
     */
    public function getYearReconstruct()
    {
        return $this->yearReconstruct;
    }

    /**
     * Set lMetro
     *
     * @param integer $lMetro
     * @return TblLBc
     */
    public function setLMetro($lMetro)
    {
        $this->lMetro = $lMetro;

        return $this;
    }

    /**
     * Get lMetro
     *
     * @return integer 
     */
    public function getLMetro()
    {
        return $this->lMetro;
    }

    /**
     * Set lStreet
     *
     * @param integer $lStreet
     * @return TblLBc
     */
    public function setLStreet($lStreet)
    {
        $this->lStreet = $lStreet;

        return $this;
    }

    /**
     * Get lStreet
     *
     * @return integer 
     */
    public function getLStreet()
    {
        return $this->lStreet;
    }

    /**
     * Set buildingNumber
     *
     * @param string $buildingNumber
     * @return TblLBc
     */
    public function setBuildingNumber($buildingNumber)
    {
        $this->buildingNumber = $buildingNumber;

        return $this;
    }

    /**
     * Get buildingNumber
     *
     * @return string 
     */
    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }

    /**
     * Set secondAddress
     *
     * @param string $secondAddress
     * @return TblLBc
     */
    public function setSecondAddress($secondAddress)
    {
        $this->secondAddress = $secondAddress;

        return $this;
    }

    /**
     * Get secondAddress
     *
     * @return string 
     */
    public function getSecondAddress()
    {
        return $this->secondAddress;
    }

    /**
     * Set lat
     *
     * @param string $lat
     * @return TblLBc
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return string 
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lng
     *
     * @param string $lng
     * @return TblLBc
     */
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get lng
     *
     * @return string 
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Set panoLat
     *
     * @param string $panoLat
     * @return TblLBc
     */
    public function setPanoLat($panoLat)
    {
        $this->panoLat = $panoLat;

        return $this;
    }

    /**
     * Get panoLat
     *
     * @return string 
     */
    public function getPanoLat()
    {
        return $this->panoLat;
    }

    /**
     * Set panoLng
     *
     * @param string $panoLng
     * @return TblLBc
     */
    public function setPanoLng($panoLng)
    {
        $this->panoLng = $panoLng;

        return $this;
    }

    /**
     * Get panoLng
     *
     * @return string 
     */
    public function getPanoLng()
    {
        return $this->panoLng;
    }

    /**
     * Set panoHeading
     *
     * @param string $panoHeading
     * @return TblLBc
     */
    public function setPanoHeading($panoHeading)
    {
        $this->panoHeading = $panoHeading;

        return $this;
    }

    /**
     * Get panoHeading
     *
     * @return string 
     */
    public function getPanoHeading()
    {
        return $this->panoHeading;
    }

    /**
     * Set panoPitch
     *
     * @param string $panoPitch
     * @return TblLBc
     */
    public function setPanoPitch($panoPitch)
    {
        $this->panoPitch = $panoPitch;

        return $this;
    }

    /**
     * Get panoPitch
     *
     * @return string 
     */
    public function getPanoPitch()
    {
        return $this->panoPitch;
    }

    /**
     * Set panoZoom
     *
     * @param string $panoZoom
     * @return TblLBc
     */
    public function setPanoZoom($panoZoom)
    {
        $this->panoZoom = $panoZoom;

        return $this;
    }

    /**
     * Get panoZoom
     *
     * @return string 
     */
    public function getPanoZoom()
    {
        return $this->panoZoom;
    }

    /**
     * Set design
     *
     * @param string $design
     * @return TblLBc
     */
    public function setDesign($design)
    {
        $this->design = $design;

        return $this;
    }

    /**
     * Get design
     *
     * @return string 
     */
    public function getDesign()
    {
        return $this->design;
    }

    /**
     * Set heightCommon
     *
     * @param float $heightCommon
     * @return TblLBc
     */
    public function setHeightCommon($heightCommon)
    {
        $this->heightCommon = $heightCommon;

        return $this;
    }

    /**
     * Get heightCommon
     *
     * @return float 
     */
    public function getHeightCommon()
    {
        return $this->heightCommon;
    }

    /**
     * Set heightMin
     *
     * @param float $heightMin
     * @return TblLBc
     */
    public function setHeightMin($heightMin)
    {
        $this->heightMin = $heightMin;

        return $this;
    }

    /**
     * Get heightMin
     *
     * @return float 
     */
    public function getHeightMin()
    {
        return $this->heightMin;
    }

    /**
     * Set heightMax
     *
     * @param float $heightMax
     * @return TblLBc
     */
    public function setHeightMax($heightMax)
    {
        $this->heightMax = $heightMax;

        return $this;
    }

    /**
     * Get heightMax
     *
     * @return float 
     */
    public function getHeightMax()
    {
        return $this->heightMax;
    }

    /**
     * Set floors
     *
     * @param integer $floors
     * @return TblLBc
     */
    public function setFloors($floors)
    {
        $this->floors = $floors;

        return $this;
    }

    /**
     * Get floors
     *
     * @return integer 
     */
    public function getFloors()
    {
        return $this->floors;
    }

    /**
     * Set isDifFloors
     *
     * @param integer $isDifFloors
     * @return TblLBc
     */
    public function setIsDifFloors($isDifFloors)
    {
        $this->isDifFloors = $isDifFloors;

        return $this;
    }

    /**
     * Get isDifFloors
     *
     * @return integer 
     */
    public function getIsDifFloors()
    {
        return $this->isDifFloors;
    }

    /**
     * Set ventilation
     *
     * @param string $ventilation
     * @return TblLBc
     */
    public function setVentilation($ventilation)
    {
        $this->ventilation = $ventilation;

        return $this;
    }

    /**
     * Get ventilation
     *
     * @return string 
     */
    public function getVentilation()
    {
        return $this->ventilation;
    }

    /**
     * Set square
     *
     * @param integer $square
     * @return TblLBc
     */
    public function setSquare($square)
    {
        $this->square = $square;

        return $this;
    }

    /**
     * Get square
     *
     * @return integer 
     */
    public function getSquare()
    {
        return $this->square;
    }

    /**
     * Set squareGround
     *
     * @param integer $squareGround
     * @return TblLBc
     */
    public function setSquareGround($squareGround)
    {
        $this->squareGround = $squareGround;

        return $this;
    }

    /**
     * Get squareGround
     *
     * @return integer 
     */
    public function getSquareGround()
    {
        return $this->squareGround;
    }

    /**
     * Set squareUnderground
     *
     * @param integer $squareUnderground
     * @return TblLBc
     */
    public function setSquareUnderground($squareUnderground)
    {
        $this->squareUnderground = $squareUnderground;

        return $this;
    }

    /**
     * Get squareUnderground
     *
     * @return integer 
     */
    public function getSquareUnderground()
    {
        return $this->squareUnderground;
    }

    /**
     * Set squareRent
     *
     * @param integer $squareRent
     * @return TblLBc
     */
    public function setSquareRent($squareRent)
    {
        $this->squareRent = $squareRent;

        return $this;
    }

    /**
     * Get squareRent
     *
     * @return integer 
     */
    public function getSquareRent()
    {
        return $this->squareRent;
    }

    /**
     * Set heating
     *
     * @param string $heating
     * @return TblLBc
     */
    public function setHeating($heating)
    {
        $this->heating = $heating;

        return $this;
    }

    /**
     * Get heating
     *
     * @return string 
     */
    public function getHeating()
    {
        return $this->heating;
    }

    /**
     * Set fireProof
     *
     * @param string $fireProof
     * @return TblLBc
     */
    public function setFireProof($fireProof)
    {
        $this->fireProof = $fireProof;

        return $this;
    }

    /**
     * Get fireProof
     *
     * @return string 
     */
    public function getFireProof()
    {
        return $this->fireProof;
    }

    /**
     * Set electricity
     *
     * @param string $electricity
     * @return TblLBc
     */
    public function setElectricity($electricity)
    {
        $this->electricity = $electricity;

        return $this;
    }

    /**
     * Get electricity
     *
     * @return string 
     */
    public function getElectricity()
    {
        return $this->electricity;
    }

    /**
     * Set telecom
     *
     * @param string $telecom
     * @return TblLBc
     */
    public function setTelecom($telecom)
    {
        $this->telecom = $telecom;

        return $this;
    }

    /**
     * Get telecom
     *
     * @return string 
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * Set providers
     *
     * @param string $providers
     * @return TblLBc
     */
    public function setProviders($providers)
    {
        $this->providers = $providers;

        return $this;
    }

    /**
     * Get providers
     *
     * @return string 
     */
    public function getProviders()
    {
        return $this->providers;
    }

    /**
     * Set security
     *
     * @param integer $security
     * @return TblLBc
     */
    public function setSecurity($security)
    {
        $this->security = $security;

        return $this;
    }

    /**
     * Get security
     *
     * @return integer 
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * Set securityTech
     *
     * @param string $securityTech
     * @return TblLBc
     */
    public function setSecurityTech($securityTech)
    {
        $this->securityTech = $securityTech;

        return $this;
    }

    /**
     * Get securityTech
     *
     * @return string 
     */
    public function getSecurityTech()
    {
        return $this->securityTech;
    }

    /**
     * Set elevators
     *
     * @param integer $elevators
     * @return TblLBc
     */
    public function setElevators($elevators)
    {
        $this->elevators = $elevators;

        return $this;
    }

    /**
     * Get elevators
     *
     * @return integer 
     */
    public function getElevators()
    {
        return $this->elevators;
    }

    /**
     * Set elevatorsCompany
     *
     * @param string $elevatorsCompany
     * @return TblLBc
     */
    public function setElevatorsCompany($elevatorsCompany)
    {
        $this->elevatorsCompany = $elevatorsCompany;

        return $this;
    }

    /**
     * Get elevatorsCompany
     *
     * @return string 
     */
    public function getElevatorsCompany()
    {
        return $this->elevatorsCompany;
    }

    /**
     * Set parking
     *
     * @param string $parking
     * @return TblLBc
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
     * Set parkingGroundSize
     *
     * @param integer $parkingGroundSize
     * @return TblLBc
     */
    public function setParkingGroundSize($parkingGroundSize)
    {
        $this->parkingGroundSize = $parkingGroundSize;

        return $this;
    }

    /**
     * Get parkingGroundSize
     *
     * @return integer 
     */
    public function getParkingGroundSize()
    {
        return $this->parkingGroundSize;
    }

    /**
     * Set parkingUndergroundSize
     *
     * @param integer $parkingUndergroundSize
     * @return TblLBc
     */
    public function setParkingUndergroundSize($parkingUndergroundSize)
    {
        $this->parkingUndergroundSize = $parkingUndergroundSize;

        return $this;
    }

    /**
     * Get parkingUndergroundSize
     *
     * @return integer 
     */
    public function getParkingUndergroundSize()
    {
        return $this->parkingUndergroundSize;
    }

    /**
     * Set parkingMultilevelSize
     *
     * @param integer $parkingMultilevelSize
     * @return TblLBc
     */
    public function setParkingMultilevelSize($parkingMultilevelSize)
    {
        $this->parkingMultilevelSize = $parkingMultilevelSize;

        return $this;
    }

    /**
     * Get parkingMultilevelSize
     *
     * @return integer 
     */
    public function getParkingMultilevelSize()
    {
        return $this->parkingMultilevelSize;
    }

    /**
     * Set parkingValue
     *
     * @param string $parkingValue
     * @return TblLBc
     */
    public function setParkingValue($parkingValue)
    {
        $this->parkingValue = $parkingValue;

        return $this;
    }

    /**
     * Get parkingValue
     *
     * @return string 
     */
    public function getParkingValue()
    {
        return $this->parkingValue;
    }

    /**
     * Set parkingValuePrice
     *
     * @param string $parkingValuePrice
     * @return TblLBc
     */
    public function setParkingValuePrice($parkingValuePrice)
    {
        $this->parkingValuePrice = $parkingValuePrice;

        return $this;
    }

    /**
     * Get parkingValuePrice
     *
     * @return string 
     */
    public function getParkingValuePrice()
    {
        return $this->parkingValuePrice;
    }

    /**
     * Set parkingValuePriceCurrency
     *
     * @param integer $parkingValuePriceCurrency
     * @return TblLBc
     */
    public function setParkingValuePriceCurrency($parkingValuePriceCurrency)
    {
        $this->parkingValuePriceCurrency = $parkingValuePriceCurrency;

        return $this;
    }

    /**
     * Get parkingValuePriceCurrency
     *
     * @return integer 
     */
    public function getParkingValuePriceCurrency()
    {
        return $this->parkingValuePriceCurrency;
    }

    /**
     * Set parkingValuePriceFor
     *
     * @param string $parkingValuePriceFor
     * @return TblLBc
     */
    public function setParkingValuePriceFor($parkingValuePriceFor)
    {
        $this->parkingValuePriceFor = $parkingValuePriceFor;

        return $this;
    }

    /**
     * Get parkingValuePriceFor
     *
     * @return string 
     */
    public function getParkingValuePriceFor()
    {
        return $this->parkingValuePriceFor;
    }

    /**
     * Set infra
     *
     * @param string $infra
     * @return TblLBc
     */
    public function setInfra($infra)
    {
        $this->infra = $infra;

        return $this;
    }

    /**
     * Get infra
     *
     * @return string 
     */
    public function getInfra()
    {
        return $this->infra;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return TblLBc
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
     * Set arendators
     *
     * @param string $arendators
     * @return TblLBc
     */
    public function setArendators($arendators)
    {
        $this->arendators = $arendators;

        return $this;
    }

    /**
     * Get arendators
     *
     * @return string 
     */
    public function getArendators()
    {
        return $this->arendators;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return TblLBc
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }
}
