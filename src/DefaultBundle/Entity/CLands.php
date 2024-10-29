<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CLands
 *
 * @ORM\Table(name="c_lands", indexes={@ORM\Index(name="clyent_id", columns={"clyent_id"}), @ORM\Index(name="dt_insert", columns={"dt_insert"}), @ORM\Index(name="cnumber", columns={"cnumber"}), @ORM\Index(name="region", columns={"region"}), @ORM\Index(name="district", columns={"district"}), @ORM\Index(name="direction", columns={"direction"}), @ORM\Index(name="village", columns={"village"}), @ORM\Index(name="highway", columns={"highway"}), @ORM\Index(name="highway2", columns={"highway2"}), @ORM\Index(name="otmkad", columns={"otmkad"}), @ORM\Index(name="uarea", columns={"uarea"}), @ORM\Index(name="d_area", columns={"d_area"}), @ORM\Index(name="l_category", columns={"l_category"}), @ORM\Index(name="l_function", columns={"l_function"}), @ORM\Index(name="l_property", columns={"l_property"}), @ORM\Index(name="l_group", columns={"l_group"}), @ORM\Index(name="railway", columns={"railway"}), @ORM\Index(name="gas", columns={"gas"}), @ORM\Index(name="power", columns={"power"}), @ORM\Index(name="water", columns={"water"}), @ORM\Index(name="sewage", columns={"sewage"}), @ORM\Index(name="sale_price", columns={"sale_price"}), @ORM\Index(name="currency", columns={"currency"}), @ORM\Index(name="result", columns={"result"}), @ORM\Index(name="agent", columns={"agent"}), @ORM\Index(name="onsite", columns={"onsite"}), @ORM\Index(name="onsite_noprice", columns={"onsite_noprice"}), @ORM\Index(name="deleted", columns={"deleted"})})
 * @ORM\Entity
 */
class CLands
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
     * @var string
     *
     * @ORM\Column(name="unumber", type="string", length=100, nullable=true)
     */
    private $unumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="uarea", type="integer", nullable=true)
     */
    private $uarea;

    /**
     * @var integer
     *
     * @ORM\Column(name="d_area", type="integer", nullable=true)
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @param integer $uarea
     * @return CLands
     */
    public function setUarea($uarea)
    {
        $this->uarea = $uarea;

        return $this;
    }

    /**
     * Get uarea
     *
     * @return integer 
     */
    public function getUarea()
    {
        return $this->uarea;
    }

    /**
     * Set dArea
     *
     * @param integer $dArea
     * @return CLands
     */
    public function setDArea($dArea)
    {
        $this->dArea = $dArea;

        return $this;
    }

    /**
     * Get dArea
     *
     * @return integer 
     */
    public function getDArea()
    {
        return $this->dArea;
    }

    /**
     * Set lCategory
     *
     * @param integer $lCategory
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * Set onsiteNoprice
     *
     * @param boolean $onsiteNoprice
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
     * @return CLands
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
