<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiasHouses
 *
 * @ORM\Table(name="fias_houses", indexes={@ORM\Index(name="houseguid", columns={"houseguid"}), @ORM\Index(name="housenum", columns={"housenum"}), @ORM\Index(name="buildnum", columns={"buildnum"}), @ORM\Index(name="strucnum", columns={"strucnum"}), @ORM\Index(name="houseprefix", columns={"houseshortprefix"}), @ORM\Index(name="strucprefix", columns={"strucshortprefix"}), @ORM\Index(name="streetid", columns={"streetid"}), @ORM\Index(name="housefullprefix", columns={"housefullprefix"}), @ORM\Index(name="strucfullprefix", columns={"strucfullprefix"}), @ORM\Index(name="lat", columns={"lat"}), @ORM\Index(name="lng", columns={"lng"}), @ORM\Index(name="pano", columns={"pano_lat", "pano_lng", "pano_heading", "pano_pitch", "pano_zoom"}), @ORM\Index(name="id_tc", columns={"id_tc"}), @ORM\Index(name="id_bc", columns={"id_bc"}), @ORM\Index(name="id_complex", columns={"id_complex"}), @ORM\Index(name="floors", columns={"floors"}), @ORM\Index(name="pano_exist", columns={"pano_exist"}), @ORM\Index(name="has_rent", columns={"has_rent"}), @ORM\Index(name="has_sale", columns={"has_sale"}), @ORM\Index(name="has_retail", columns={"has_retail"}), @ORM\Index(name="has_office", columns={"has_office"}), @ORM\Index(name="has_plr_rent", columns={"has_plr_rent"}), @ORM\Index(name="has_plr_sale", columns={"has_plr_sale"}), @ORM\Index(name="has_plr_retail", columns={"has_plr_retail"}), @ORM\Index(name="has_plr_office", columns={"has_plr_office"}), @ORM\Index(name="type", columns={"type"}), @ORM\Index(name="l_city", columns={"l_city"}), @ORM\Index(name="has_spbretail", columns={"has_spbretail"}), @ORM\Index(name="has_plr_spbretail", columns={"has_plr_spbretail"}), @ORM\Index(name="id_warehouse", columns={"id_warehouse"})})
 * @ORM\Entity
 */
class FiasHouses
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
     * @ORM\Column(name="streetid", type="integer", nullable=true)
     */
    private $streetid;

    /**
     * @var string
     *
     * @ORM\Column(name="houseguid", type="string", length=36, nullable=true)
     */
    private $houseguid;

    /**
     * @var string
     *
     * @ORM\Column(name="housenum", type="string", length=20, nullable=true)
     */
    private $housenum;

    /**
     * @var string
     *
     * @ORM\Column(name="buildnum", type="string", length=10, nullable=true)
     */
    private $buildnum;

    /**
     * @var string
     *
     * @ORM\Column(name="strucnum", type="string", length=10, nullable=true)
     */
    private $strucnum;

    /**
     * @var string
     *
     * @ORM\Column(name="houseshortprefix", type="string", length=20, nullable=true)
     */
    private $houseshortprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="housefullprefix", type="string", length=20, nullable=true)
     */
    private $housefullprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="strucshortprefix", type="string", length=20, nullable=true)
     */
    private $strucshortprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="strucfullprefix", type="string", length=20, nullable=true)
     */
    private $strucfullprefix;

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
     * @var integer
     *
     * @ORM\Column(name="pano_exist", type="integer", nullable=true)
     */
    private $panoExist;

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
     * @var integer
     *
     * @ORM\Column(name="id_tc", type="integer", nullable=true)
     */
    private $idTc;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_bc", type="integer", nullable=true)
     */
    private $idBc;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_warehouse", type="integer", nullable=true)
     */
    private $idWarehouse;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_complex", type="integer", nullable=true)
     */
    private $idComplex;

    /**
     * @var integer
     *
     * @ORM\Column(name="floors", type="integer", nullable=true)
     */
    private $floors;

    /**
     * @var integer
     *
     * @ORM\Column(name="has_rent", type="integer", nullable=true)
     */
    private $hasRent;

    /**
     * @var integer
     *
     * @ORM\Column(name="has_sale", type="integer", nullable=true)
     */
    private $hasSale;

    /**
     * @var integer
     *
     * @ORM\Column(name="has_retail", type="integer", nullable=true)
     */
    private $hasRetail;

    /**
     * @var integer
     *
     * @ORM\Column(name="has_office", type="integer", nullable=true)
     */
    private $hasOffice;

    /**
     * @var integer
     *
     * @ORM\Column(name="has_spbretail", type="integer", nullable=true)
     */
    private $hasSpbretail;

    /**
     * @var integer
     *
     * @ORM\Column(name="has_plr_rent", type="integer", nullable=true)
     */
    private $hasPlrRent;

    /**
     * @var integer
     *
     * @ORM\Column(name="has_plr_sale", type="integer", nullable=true)
     */
    private $hasPlrSale;

    /**
     * @var integer
     *
     * @ORM\Column(name="has_plr_retail", type="integer", nullable=true)
     */
    private $hasPlrRetail;

    /**
     * @var integer
     *
     * @ORM\Column(name="has_plr_office", type="integer", nullable=true)
     */
    private $hasPlrOffice;

    /**
     * @var integer
     *
     * @ORM\Column(name="has_plr_spbretail", type="integer", nullable=true)
     */
    private $hasPlrSpbretail;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="l_district", type="integer", nullable=false)
     */
    private $lDistrict;

    /**
     * @var integer
     *
     * @ORM\Column(name="l_district_real", type="integer", nullable=false)
     */
    private $lDistrictReal;

    /**
     * @var integer
     *
     * @ORM\Column(name="l_area_real", type="integer", nullable=false)
     */
    private $lAreaReal;

    /**
     * @var string
     *
     * @ORM\Column(name="metro", type="string", length=255, nullable=true)
     */
    private $metro;

    /**
     * @var integer
     *
     * @ORM\Column(name="metro_id", type="integer", nullable=true)
     */
    private $metroId;

    /**
     * @var integer
     *
     * @ORM\Column(name="l_city", type="integer", nullable=true)
     */
    private $lCity;

    /**
     * @var string
     *
     * @ORM\Column(name="district_text", type="string", length=255, nullable=true)
     */
    private $districtText;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=128, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="postalcode", type="string", length=6, nullable=true)
     */
    private $postalcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="year", type="integer", nullable=true)
     */
    private $year;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_living", type="integer", nullable=true)
     */
    private $isLiving;

    /**
     * @var string
     *
     * @ORM\Column(name="walls", type="string", length=32, nullable=false)
     */
    private $walls;

    /**
     * @var string
     *
     * @ORM\Column(name="project", type="string", length=32, nullable=false)
     */
    private $project;

    /**
     * @var integer
     *
     * @ORM\Column(name="flats", type="integer", nullable=false)
     */
    private $flats;

    /**
     * @var integer
     *
     * @ORM\Column(name="unlivings", type="integer", nullable=false)
     */
    private $unlivings;

    /**
     * @var string
     *
     * @ORM\Column(name="floor_height", type="string", length=8, nullable=false)
     */
    private $floorHeight;

    /**
     * @var integer
     *
     * @ORM\Column(name="square", type="integer", nullable=false)
     */
    private $square;

    /**
     * @var integer
     *
     * @ORM\Column(name="square_living", type="integer", nullable=false)
     */
    private $squareLiving;

    /**
     * @var integer
     *
     * @ORM\Column(name="square_unliving", type="integer", nullable=false)
     */
    private $squareUnliving;

    /**
     * @var integer
     *
     * @ORM\Column(name="porches", type="integer", nullable=false)
     */
    private $porches;

    /**
     * @var integer
     *
     * @ORM\Column(name="lifts_per_porch", type="integer", nullable=false)
     */
    private $liftsPerPorch;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;



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
     * Set streetid
     *
     * @param integer $streetid
     * @return FiasHouses
     */
    public function setStreetid($streetid)
    {
        $this->streetid = $streetid;

        return $this;
    }

    /**
     * Get streetid
     *
     * @return integer 
     */
    public function getStreetid()
    {
        return $this->streetid;
    }

    /**
     * Set houseguid
     *
     * @param string $houseguid
     * @return FiasHouses
     */
    public function setHouseguid($houseguid)
    {
        $this->houseguid = $houseguid;

        return $this;
    }

    /**
     * Get houseguid
     *
     * @return string 
     */
    public function getHouseguid()
    {
        return $this->houseguid;
    }

    /**
     * Set housenum
     *
     * @param string $housenum
     * @return FiasHouses
     */
    public function setHousenum($housenum)
    {
        $this->housenum = $housenum;

        return $this;
    }

    /**
     * Get housenum
     *
     * @return string 
     */
    public function getHousenum()
    {
        return $this->housenum;
    }

    /**
     * Set buildnum
     *
     * @param string $buildnum
     * @return FiasHouses
     */
    public function setBuildnum($buildnum)
    {
        $this->buildnum = $buildnum;

        return $this;
    }

    /**
     * Get buildnum
     *
     * @return string 
     */
    public function getBuildnum()
    {
        return $this->buildnum;
    }

    /**
     * Set strucnum
     *
     * @param string $strucnum
     * @return FiasHouses
     */
    public function setStrucnum($strucnum)
    {
        $this->strucnum = $strucnum;

        return $this;
    }

    /**
     * Get strucnum
     *
     * @return string 
     */
    public function getStrucnum()
    {
        return $this->strucnum;
    }

    /**
     * Set houseshortprefix
     *
     * @param string $houseshortprefix
     * @return FiasHouses
     */
    public function setHouseshortprefix($houseshortprefix)
    {
        $this->houseshortprefix = $houseshortprefix;

        return $this;
    }

    /**
     * Get houseshortprefix
     *
     * @return string 
     */
    public function getHouseshortprefix()
    {
        return $this->houseshortprefix;
    }

    /**
     * Set housefullprefix
     *
     * @param string $housefullprefix
     * @return FiasHouses
     */
    public function setHousefullprefix($housefullprefix)
    {
        $this->housefullprefix = $housefullprefix;

        return $this;
    }

    /**
     * Get housefullprefix
     *
     * @return string 
     */
    public function getHousefullprefix()
    {
        return $this->housefullprefix;
    }

    /**
     * Set strucshortprefix
     *
     * @param string $strucshortprefix
     * @return FiasHouses
     */
    public function setStrucshortprefix($strucshortprefix)
    {
        $this->strucshortprefix = $strucshortprefix;

        return $this;
    }

    /**
     * Get strucshortprefix
     *
     * @return string 
     */
    public function getStrucshortprefix()
    {
        return $this->strucshortprefix;
    }

    /**
     * Set strucfullprefix
     *
     * @param string $strucfullprefix
     * @return FiasHouses
     */
    public function setStrucfullprefix($strucfullprefix)
    {
        $this->strucfullprefix = $strucfullprefix;

        return $this;
    }

    /**
     * Get strucfullprefix
     *
     * @return string 
     */
    public function getStrucfullprefix()
    {
        return $this->strucfullprefix;
    }

    /**
     * Set lat
     *
     * @param string $lat
     * @return FiasHouses
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
     * @return FiasHouses
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
     * Set panoExist
     *
     * @param integer $panoExist
     * @return FiasHouses
     */
    public function setPanoExist($panoExist)
    {
        $this->panoExist = $panoExist;

        return $this;
    }

    /**
     * Get panoExist
     *
     * @return integer 
     */
    public function getPanoExist()
    {
        return $this->panoExist;
    }

    /**
     * Set panoLat
     *
     * @param string $panoLat
     * @return FiasHouses
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
     * @return FiasHouses
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
     * @return FiasHouses
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
     * @return FiasHouses
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
     * @return FiasHouses
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
     * Set idTc
     *
     * @param integer $idTc
     * @return FiasHouses
     */
    public function setIdTc($idTc)
    {
        $this->idTc = $idTc;

        return $this;
    }

    /**
     * Get idTc
     *
     * @return integer 
     */
    public function getIdTc()
    {
        return $this->idTc;
    }

    /**
     * Set idBc
     *
     * @param integer $idBc
     * @return FiasHouses
     */
    public function setIdBc($idBc)
    {
        $this->idBc = $idBc;

        return $this;
    }

    /**
     * Get idBc
     *
     * @return integer 
     */
    public function getIdBc()
    {
        return $this->idBc;
    }

    /**
     * Set idWarehouse
     *
     * @param integer $idWarehouse
     * @return FiasHouses
     */
    public function setIdWarehouse($idWarehouse)
    {
        $this->idWarehouse = $idWarehouse;

        return $this;
    }

    /**
     * Get idWarehouse
     *
     * @return integer 
     */
    public function getIdWarehouse()
    {
        return $this->idWarehouse;
    }

    /**
     * Set idComplex
     *
     * @param integer $idComplex
     * @return FiasHouses
     */
    public function setIdComplex($idComplex)
    {
        $this->idComplex = $idComplex;

        return $this;
    }

    /**
     * Get idComplex
     *
     * @return integer 
     */
    public function getIdComplex()
    {
        return $this->idComplex;
    }

    /**
     * Set floors
     *
     * @param integer $floors
     * @return FiasHouses
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
     * Set hasRent
     *
     * @param integer $hasRent
     * @return FiasHouses
     */
    public function setHasRent($hasRent)
    {
        $this->hasRent = $hasRent;

        return $this;
    }

    /**
     * Get hasRent
     *
     * @return integer 
     */
    public function getHasRent()
    {
        return $this->hasRent;
    }

    /**
     * Set hasSale
     *
     * @param integer $hasSale
     * @return FiasHouses
     */
    public function setHasSale($hasSale)
    {
        $this->hasSale = $hasSale;

        return $this;
    }

    /**
     * Get hasSale
     *
     * @return integer 
     */
    public function getHasSale()
    {
        return $this->hasSale;
    }

    /**
     * Set hasRetail
     *
     * @param integer $hasRetail
     * @return FiasHouses
     */
    public function setHasRetail($hasRetail)
    {
        $this->hasRetail = $hasRetail;

        return $this;
    }

    /**
     * Get hasRetail
     *
     * @return integer 
     */
    public function getHasRetail()
    {
        return $this->hasRetail;
    }

    /**
     * Set hasOffice
     *
     * @param integer $hasOffice
     * @return FiasHouses
     */
    public function setHasOffice($hasOffice)
    {
        $this->hasOffice = $hasOffice;

        return $this;
    }

    /**
     * Get hasOffice
     *
     * @return integer 
     */
    public function getHasOffice()
    {
        return $this->hasOffice;
    }

    /**
     * Set hasSpbretail
     *
     * @param integer $hasSpbretail
     * @return FiasHouses
     */
    public function setHasSpbretail($hasSpbretail)
    {
        $this->hasSpbretail = $hasSpbretail;

        return $this;
    }

    /**
     * Get hasSpbretail
     *
     * @return integer 
     */
    public function getHasSpbretail()
    {
        return $this->hasSpbretail;
    }

    /**
     * Set hasPlrRent
     *
     * @param integer $hasPlrRent
     * @return FiasHouses
     */
    public function setHasPlrRent($hasPlrRent)
    {
        $this->hasPlrRent = $hasPlrRent;

        return $this;
    }

    /**
     * Get hasPlrRent
     *
     * @return integer 
     */
    public function getHasPlrRent()
    {
        return $this->hasPlrRent;
    }

    /**
     * Set hasPlrSale
     *
     * @param integer $hasPlrSale
     * @return FiasHouses
     */
    public function setHasPlrSale($hasPlrSale)
    {
        $this->hasPlrSale = $hasPlrSale;

        return $this;
    }

    /**
     * Get hasPlrSale
     *
     * @return integer 
     */
    public function getHasPlrSale()
    {
        return $this->hasPlrSale;
    }

    /**
     * Set hasPlrRetail
     *
     * @param integer $hasPlrRetail
     * @return FiasHouses
     */
    public function setHasPlrRetail($hasPlrRetail)
    {
        $this->hasPlrRetail = $hasPlrRetail;

        return $this;
    }

    /**
     * Get hasPlrRetail
     *
     * @return integer 
     */
    public function getHasPlrRetail()
    {
        return $this->hasPlrRetail;
    }

    /**
     * Set hasPlrOffice
     *
     * @param integer $hasPlrOffice
     * @return FiasHouses
     */
    public function setHasPlrOffice($hasPlrOffice)
    {
        $this->hasPlrOffice = $hasPlrOffice;

        return $this;
    }

    /**
     * Get hasPlrOffice
     *
     * @return integer 
     */
    public function getHasPlrOffice()
    {
        return $this->hasPlrOffice;
    }

    /**
     * Set hasPlrSpbretail
     *
     * @param integer $hasPlrSpbretail
     * @return FiasHouses
     */
    public function setHasPlrSpbretail($hasPlrSpbretail)
    {
        $this->hasPlrSpbretail = $hasPlrSpbretail;

        return $this;
    }

    /**
     * Get hasPlrSpbretail
     *
     * @return integer 
     */
    public function getHasPlrSpbretail()
    {
        return $this->hasPlrSpbretail;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return FiasHouses
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
     * Set lDistrict
     *
     * @param integer $lDistrict
     * @return FiasHouses
     */
    public function setLDistrict($lDistrict)
    {
        $this->lDistrict = $lDistrict;

        return $this;
    }

    /**
     * Get lDistrict
     *
     * @return integer 
     */
    public function getLDistrict()
    {
        return $this->lDistrict;
    }

    /**
     * Set lDistrictReal
     *
     * @param integer $lDistrictReal
     * @return FiasHouses
     */
    public function setLDistrictReal($lDistrictReal)
    {
        $this->lDistrictReal = $lDistrictReal;

        return $this;
    }

    /**
     * Get lDistrictReal
     *
     * @return integer 
     */
    public function getLDistrictReal()
    {
        return $this->lDistrictReal;
    }

    /**
     * Set lAreaReal
     *
     * @param integer $lAreaReal
     * @return FiasHouses
     */
    public function setLAreaReal($lAreaReal)
    {
        $this->lAreaReal = $lAreaReal;

        return $this;
    }

    /**
     * Get lAreaReal
     *
     * @return integer 
     */
    public function getLAreaReal()
    {
        return $this->lAreaReal;
    }

    /**
     * Set metro
     *
     * @param string $metro
     * @return FiasHouses
     */
    public function setMetro($metro)
    {
        $this->metro = $metro;

        return $this;
    }

    /**
     * Get metro
     *
     * @return string 
     */
    public function getMetro()
    {
        return $this->metro;
    }

    /**
     * Set metroId
     *
     * @param integer $metroId
     * @return FiasHouses
     */
    public function setMetroId($metroId)
    {
        $this->metroId = $metroId;

        return $this;
    }

    /**
     * Get metroId
     *
     * @return integer 
     */
    public function getMetroId()
    {
        return $this->metroId;
    }

    /**
     * Set lCity
     *
     * @param integer $lCity
     * @return FiasHouses
     */
    public function setLCity($lCity)
    {
        $this->lCity = $lCity;

        return $this;
    }

    /**
     * Get lCity
     *
     * @return integer 
     */
    public function getLCity()
    {
        return $this->lCity;
    }

    /**
     * Set districtText
     *
     * @param string $districtText
     * @return FiasHouses
     */
    public function setDistrictText($districtText)
    {
        $this->districtText = $districtText;

        return $this;
    }

    /**
     * Get districtText
     *
     * @return string 
     */
    public function getDistrictText()
    {
        return $this->districtText;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return FiasHouses
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set postalcode
     *
     * @param string $postalcode
     * @return FiasHouses
     */
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;

        return $this;
    }

    /**
     * Get postalcode
     *
     * @return string 
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }

    /**
     * Set year
     *
     * @param integer $year
     * @return FiasHouses
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set isLiving
     *
     * @param integer $isLiving
     * @return FiasHouses
     */
    public function setIsLiving($isLiving)
    {
        $this->isLiving = $isLiving;

        return $this;
    }

    /**
     * Get isLiving
     *
     * @return integer 
     */
    public function getIsLiving()
    {
        return $this->isLiving;
    }

    /**
     * Set walls
     *
     * @param string $walls
     * @return FiasHouses
     */
    public function setWalls($walls)
    {
        $this->walls = $walls;

        return $this;
    }

    /**
     * Get walls
     *
     * @return string 
     */
    public function getWalls()
    {
        return $this->walls;
    }

    /**
     * Set project
     *
     * @param string $project
     * @return FiasHouses
     */
    public function setProject($project)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return string 
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set flats
     *
     * @param integer $flats
     * @return FiasHouses
     */
    public function setFlats($flats)
    {
        $this->flats = $flats;

        return $this;
    }

    /**
     * Get flats
     *
     * @return integer 
     */
    public function getFlats()
    {
        return $this->flats;
    }

    /**
     * Set unlivings
     *
     * @param integer $unlivings
     * @return FiasHouses
     */
    public function setUnlivings($unlivings)
    {
        $this->unlivings = $unlivings;

        return $this;
    }

    /**
     * Get unlivings
     *
     * @return integer 
     */
    public function getUnlivings()
    {
        return $this->unlivings;
    }

    /**
     * Set floorHeight
     *
     * @param string $floorHeight
     * @return FiasHouses
     */
    public function setFloorHeight($floorHeight)
    {
        $this->floorHeight = $floorHeight;

        return $this;
    }

    /**
     * Get floorHeight
     *
     * @return string 
     */
    public function getFloorHeight()
    {
        return $this->floorHeight;
    }

    /**
     * Set square
     *
     * @param integer $square
     * @return FiasHouses
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
     * Set squareLiving
     *
     * @param integer $squareLiving
     * @return FiasHouses
     */
    public function setSquareLiving($squareLiving)
    {
        $this->squareLiving = $squareLiving;

        return $this;
    }

    /**
     * Get squareLiving
     *
     * @return integer 
     */
    public function getSquareLiving()
    {
        return $this->squareLiving;
    }

    /**
     * Set squareUnliving
     *
     * @param integer $squareUnliving
     * @return FiasHouses
     */
    public function setSquareUnliving($squareUnliving)
    {
        $this->squareUnliving = $squareUnliving;

        return $this;
    }

    /**
     * Get squareUnliving
     *
     * @return integer 
     */
    public function getSquareUnliving()
    {
        return $this->squareUnliving;
    }

    /**
     * Set porches
     *
     * @param integer $porches
     * @return FiasHouses
     */
    public function setPorches($porches)
    {
        $this->porches = $porches;

        return $this;
    }

    /**
     * Get porches
     *
     * @return integer 
     */
    public function getPorches()
    {
        return $this->porches;
    }

    /**
     * Set liftsPerPorch
     *
     * @param integer $liftsPerPorch
     * @return FiasHouses
     */
    public function setLiftsPerPorch($liftsPerPorch)
    {
        $this->liftsPerPorch = $liftsPerPorch;

        return $this;
    }

    /**
     * Get liftsPerPorch
     *
     * @return integer 
     */
    public function getLiftsPerPorch()
    {
        return $this->liftsPerPorch;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return FiasHouses
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
}
