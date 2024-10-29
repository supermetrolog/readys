<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OldCLands
 *
 * @ORM\Table(name="old_c_lands")
 * @ORM\Entity
 */
class OldCLands
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
     * @ORM\Column(name="cnumber", type="string", length=100, nullable=true)
     */
    private $cnumber;

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
     * @ORM\Column(name="otmkad", type="integer", nullable=false)
     */
    private $otmkad;

    /**
     * @var string
     *
     * @ORM\Column(name="unumber", type="string", length=100, nullable=true)
     */
    private $unumber;

    /**
     * @var float
     *
     * @ORM\Column(name="uarea", type="float", precision=15, scale=2, nullable=true)
     */
    private $uarea;

    /**
     * @var float
     *
     * @ORM\Column(name="d_area", type="float", precision=15, scale=2, nullable=true)
     */
    private $dArea;

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
     * @var string
     *
     * @ORM\Column(name="l_group", type="string", length=100, nullable=true)
     */
    private $lGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="l_options", type="text", length=65535, nullable=true)
     */
    private $lOptions;

    /**
     * @var string
     *
     * @ORM\Column(name="roads", type="string", length=200, nullable=true)
     */
    private $roads;

    /**
     * @var boolean
     *
     * @ORM\Column(name="railway", type="boolean", nullable=false)
     */
    private $railway;

    /**
     * @var string
     *
     * @ORM\Column(name="gas", type="string", length=200, nullable=true)
     */
    private $gas;

    /**
     * @var string
     *
     * @ORM\Column(name="power", type="string", length=200, nullable=true)
     */
    private $power;

    /**
     * @var string
     *
     * @ORM\Column(name="water", type="string", length=200, nullable=true)
     */
    private $water;

    /**
     * @var string
     *
     * @ORM\Column(name="sewage", type="string", length=200, nullable=true)
     */
    private $sewage;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_price", type="integer", nullable=false)
     */
    private $salePrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="currency", type="integer", nullable=false)
     */
    private $currency;

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
     * @ORM\Column(name="c_x", type="float", precision=15, scale=12, nullable=true)
     */
    private $cX;

    /**
     * @var float
     *
     * @ORM\Column(name="c_y", type="float", precision=15, scale=12, nullable=true)
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
     * @var string
     *
     * @ORM\Column(name="adjoining", type="string", length=500, nullable=true)
     */
    private $adjoining;



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
     * Set dtInsert
     *
     * @param \DateTime $dtInsert
     * @return OldCLands
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
     * @return OldCLands
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
     * Set cnumber
     *
     * @param string $cnumber
     * @return OldCLands
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
     * Set region
     *
     * @param integer $region
     * @return OldCLands
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
     * @return OldCLands
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
     * Set village
     *
     * @param integer $village
     * @return OldCLands
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
     * @return OldCLands
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
     * @return OldCLands
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
     * @return OldCLands
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
     * Set unumber
     *
     * @param string $unumber
     * @return OldCLands
     */
    public function setUnumber($unumber)
    {
        $this->unumber = $unumber;

        return $this;
    }

    /**
     * Get unumber
     *
     * @return string 
     */
    public function getUnumber()
    {
        return $this->unumber;
    }

    /**
     * Set uarea
     *
     * @param float $uarea
     * @return OldCLands
     */
    public function setUarea($uarea)
    {
        $this->uarea = $uarea;

        return $this;
    }

    /**
     * Get uarea
     *
     * @return float 
     */
    public function getUarea()
    {
        return $this->uarea;
    }

    /**
     * Set dArea
     *
     * @param float $dArea
     * @return OldCLands
     */
    public function setDArea($dArea)
    {
        $this->dArea = $dArea;

        return $this;
    }

    /**
     * Get dArea
     *
     * @return float 
     */
    public function getDArea()
    {
        return $this->dArea;
    }

    /**
     * Set lCategory
     *
     * @param integer $lCategory
     * @return OldCLands
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
     * @return OldCLands
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
     * @return OldCLands
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

    /**
     * Set lGroup
     *
     * @param string $lGroup
     * @return OldCLands
     */
    public function setLGroup($lGroup)
    {
        $this->lGroup = $lGroup;

        return $this;
    }

    /**
     * Get lGroup
     *
     * @return string 
     */
    public function getLGroup()
    {
        return $this->lGroup;
    }

    /**
     * Set lOptions
     *
     * @param string $lOptions
     * @return OldCLands
     */
    public function setLOptions($lOptions)
    {
        $this->lOptions = $lOptions;

        return $this;
    }

    /**
     * Get lOptions
     *
     * @return string 
     */
    public function getLOptions()
    {
        return $this->lOptions;
    }

    /**
     * Set roads
     *
     * @param string $roads
     * @return OldCLands
     */
    public function setRoads($roads)
    {
        $this->roads = $roads;

        return $this;
    }

    /**
     * Get roads
     *
     * @return string 
     */
    public function getRoads()
    {
        return $this->roads;
    }

    /**
     * Set railway
     *
     * @param boolean $railway
     * @return OldCLands
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
     * Set gas
     *
     * @param string $gas
     * @return OldCLands
     */
    public function setGas($gas)
    {
        $this->gas = $gas;

        return $this;
    }

    /**
     * Get gas
     *
     * @return string 
     */
    public function getGas()
    {
        return $this->gas;
    }

    /**
     * Set power
     *
     * @param string $power
     * @return OldCLands
     */
    public function setPower($power)
    {
        $this->power = $power;

        return $this;
    }

    /**
     * Get power
     *
     * @return string 
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Set water
     *
     * @param string $water
     * @return OldCLands
     */
    public function setWater($water)
    {
        $this->water = $water;

        return $this;
    }

    /**
     * Get water
     *
     * @return string 
     */
    public function getWater()
    {
        return $this->water;
    }

    /**
     * Set sewage
     *
     * @param string $sewage
     * @return OldCLands
     */
    public function setSewage($sewage)
    {
        $this->sewage = $sewage;

        return $this;
    }

    /**
     * Get sewage
     *
     * @return string 
     */
    public function getSewage()
    {
        return $this->sewage;
    }

    /**
     * Set salePrice
     *
     * @param integer $salePrice
     * @return OldCLands
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
     * Set currency
     *
     * @param integer $currency
     * @return OldCLands
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
     * Set result
     *
     * @param integer $result
     * @return OldCLands
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
     * @return OldCLands
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
     * @return OldCLands
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
     * @return OldCLands
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
     * @return OldCLands
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
     * @return OldCLands
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
     * @return OldCLands
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
     * @return OldCLands
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
     * @return OldCLands
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
     * @return OldCLands
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
     * @return OldCLands
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
     * @return OldCLands
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
     * Set adjoining
     *
     * @param string $adjoining
     * @return OldCLands
     */
    public function setAdjoining($adjoining)
    {
        $this->adjoining = $adjoining;

        return $this;
    }

    /**
     * Get adjoining
     *
     * @return string 
     */
    public function getAdjoining()
    {
        return $this->adjoining;
    }
}
