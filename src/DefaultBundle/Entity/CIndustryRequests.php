<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CIndustryRequests
 *
 * @ORM\Table(name="c_industry_requests", indexes={@ORM\Index(name="clyent_id", columns={"clyent_id"}), @ORM\Index(name="dt_insert", columns={"dt_insert"}), @ORM\Index(name="n_type", columns={"n_type"}), @ORM\Index(name="n_regions", columns={"n_regions"}), @ORM\Index(name="n_directions", columns={"n_directions"}), @ORM\Index(name="n_highways", columns={"n_highways"}), @ORM\Index(name="otmkad_min", columns={"otmkad_min"}), @ORM\Index(name="otmkad_max", columns={"otmkad_max"}), @ORM\Index(name="n_class", columns={"n_class"}), @ORM\Index(name="area_min", columns={"area_min"}), @ORM\Index(name="area_max", columns={"area_max"}), @ORM\Index(name="power", columns={"power"}), @ORM\Index(name="deal_type", columns={"deal_type"}), @ORM\Index(name="sale_price", columns={"sale_price"}), @ORM\Index(name="rent_price", columns={"rent_price"}), @ORM\Index(name="currency", columns={"currency"}), @ORM\Index(name="agent", columns={"agent"}), @ORM\Index(name="infosource", columns={"infosource"}), @ORM\Index(name="result", columns={"result"}), @ORM\Index(name="deleted", columns={"deleted"}), @ORM\Index(name="l_urgency", columns={"l_urgency"}), @ORM\Index(name="ceiling_height", columns={"ceiling_height"}), @ORM\Index(name="comments", columns={"comments"})})
 * @ORM\Entity
 */
class CIndustryRequests
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
     * @ORM\Column(name="object_type2", type="string", length=100, nullable=true)
     */
    private $objectType2;

    /**
     * @var integer
     *
     * @ORM\Column(name="n_type", type="integer", nullable=false)
     */
    private $nType;

    /**
     * @var string
     *
     * @ORM\Column(name="n_regions", type="string", length=100, nullable=true)
     */
    private $nRegions;

    /**
     * @var string
     *
     * @ORM\Column(name="n_directions", type="string", length=100, nullable=true)
     */
    private $nDirections;

    /**
     * @var string
     *
     * @ORM\Column(name="howfloor", type="string", length=100, nullable=true)
     */
    private $howfloor;

    /**
     * @var string
     *
     * @ORM\Column(name="n_directions_obl", type="string", length=100, nullable=true)
     */
    private $nDirectionsObl;

    /**
     * @var string
     *
     * @ORM\Column(name="n_highways", type="string", length=100, nullable=true)
     */
    private $nHighways;

    /**
     * @var integer
     *
     * @ORM\Column(name="otmkad_min", type="integer", nullable=true)
     */
    private $otmkadMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="otmkad_max", type="integer", nullable=true)
     */
    private $otmkadMax;

    /**
     * @var string
     *
     * @ORM\Column(name="n_class", type="string", length=100, nullable=true)
     */
    private $nClass;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_min", type="integer", nullable=true)
     */
    private $areaMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_max", type="integer", nullable=true)
     */
    private $areaMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="power", type="integer", nullable=true)
     */
    private $power;

    /**
     * @var integer
     *
     * @ORM\Column(name="deal_type", type="integer", nullable=false)
     */
    private $dealType;

    /**
     * @var integer
     *
     * @ORM\Column(name="saleprice_type", type="integer", nullable=false)
     */
    private $salepriceType;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_price", type="bigint", nullable=true)
     */
    private $salePrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_price_max", type="bigint", nullable=true)
     */
    private $salePriceMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_price_all", type="bigint", nullable=true)
     */
    private $salePriceAll;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_price_all_max", type="bigint", nullable=true)
     */
    private $salePriceAllMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="rent_price", type="integer", nullable=true)
     */
    private $rentPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="rent_price_max", type="integer", nullable=true)
     */
    private $rentPriceMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="currency", type="integer", nullable=false)
     */
    private $currency;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent", type="integer", nullable=false)
     */
    private $agent;

    /**
     * @var integer
     *
     * @ORM\Column(name="ceiling_height", type="integer", nullable=true)
     */
    private $ceilingHeight;

    /**
     * @var integer
     *
     * @ORM\Column(name="infosource", type="integer", nullable=false)
     */
    private $infosource;

    /**
     * @var string
     *
     * @ORM\Column(name="infosource_ext", type="string", length=100, nullable=true)
     */
    private $infosourceExt;

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
     * @var string
     *
     * @ORM\Column(name="comments", type="text", length=65535, nullable=true)
     */
    private $comments;

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
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var integer
     *
     * @ORM\Column(name="l_urgency", type="integer", nullable=false)
     */
    private $lUrgency;

    /**
     * @var string
     *
     * @ORM\Column(name="floor_type", type="string", length=100, nullable=true)
     */
    private $floorType;

    /**
     * @var string
     *
     * @ORM\Column(name="gate_type", type="string", length=100, nullable=true)
     */
    private $gateType;

    /**
     * @var integer
     *
     * @ORM\Column(name="cranebeam", type="integer", nullable=false)
     */
    private $cranebeam;

    /**
     * @var integer
     *
     * @ORM\Column(name="railway", type="integer", nullable=false)
     */
    private $railway;

    /**
     * @var string
     *
     * @ORM\Column(name="heated", type="string", length=100, nullable=true)
     */
    private $heated;



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
     * @return CIndustryRequests
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
     * @return CIndustryRequests
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
     * Set objectType2
     *
     * @param string $objectType2
     * @return CIndustryRequests
     */
    public function setObjectType2($objectType2)
    {
        $this->objectType2 = $objectType2;

        return $this;
    }

    /**
     * Get objectType2
     *
     * @return string 
     */
    public function getObjectType2()
    {
        return $this->objectType2;
    }

    /**
     * Set nType
     *
     * @param integer $nType
     * @return CIndustryRequests
     */
    public function setNType($nType)
    {
        $this->nType = $nType;

        return $this;
    }

    /**
     * Get nType
     *
     * @return integer 
     */
    public function getNType()
    {
        return $this->nType;
    }

    /**
     * Set nRegions
     *
     * @param string $nRegions
     * @return CIndustryRequests
     */
    public function setNRegions($nRegions)
    {
        $this->nRegions = $nRegions;

        return $this;
    }

    /**
     * Get nRegions
     *
     * @return string 
     */
    public function getNRegions()
    {
        return $this->nRegions;
    }

    /**
     * Set nDirections
     *
     * @param string $nDirections
     * @return CIndustryRequests
     */
    public function setNDirections($nDirections)
    {
        $this->nDirections = $nDirections;

        return $this;
    }

    /**
     * Get nDirections
     *
     * @return string 
     */
    public function getNDirections()
    {
        return $this->nDirections;
    }

    /**
     * Set howfloor
     *
     * @param string $howfloor
     * @return CIndustryRequests
     */
    public function setHowfloor($howfloor)
    {
        $this->howfloor = $howfloor;

        return $this;
    }

    /**
     * Get howfloor
     *
     * @return string 
     */
    public function getHowfloor()
    {
        return $this->howfloor;
    }

    /**
     * Set nDirectionsObl
     *
     * @param string $nDirectionsObl
     * @return CIndustryRequests
     */
    public function setNDirectionsObl($nDirectionsObl)
    {
        $this->nDirectionsObl = $nDirectionsObl;

        return $this;
    }

    /**
     * Get nDirectionsObl
     *
     * @return string 
     */
    public function getNDirectionsObl()
    {
        return $this->nDirectionsObl;
    }

    /**
     * Set nHighways
     *
     * @param string $nHighways
     * @return CIndustryRequests
     */
    public function setNHighways($nHighways)
    {
        $this->nHighways = $nHighways;

        return $this;
    }

    /**
     * Get nHighways
     *
     * @return string 
     */
    public function getNHighways()
    {
        return $this->nHighways;
    }

    /**
     * Set otmkadMin
     *
     * @param integer $otmkadMin
     * @return CIndustryRequests
     */
    public function setOtmkadMin($otmkadMin)
    {
        $this->otmkadMin = $otmkadMin;

        return $this;
    }

    /**
     * Get otmkadMin
     *
     * @return integer 
     */
    public function getOtmkadMin()
    {
        return $this->otmkadMin;
    }

    /**
     * Set otmkadMax
     *
     * @param integer $otmkadMax
     * @return CIndustryRequests
     */
    public function setOtmkadMax($otmkadMax)
    {
        $this->otmkadMax = $otmkadMax;

        return $this;
    }

    /**
     * Get otmkadMax
     *
     * @return integer 
     */
    public function getOtmkadMax()
    {
        return $this->otmkadMax;
    }

    /**
     * Set nClass
     *
     * @param string $nClass
     * @return CIndustryRequests
     */
    public function setNClass($nClass)
    {
        $this->nClass = $nClass;

        return $this;
    }

    /**
     * Get nClass
     *
     * @return string 
     */
    public function getNClass()
    {
        return $this->nClass;
    }

    /**
     * Set areaMin
     *
     * @param integer $areaMin
     * @return CIndustryRequests
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
     * Set areaMax
     *
     * @param integer $areaMax
     * @return CIndustryRequests
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
     * Set power
     *
     * @param integer $power
     * @return CIndustryRequests
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
     * Set dealType
     *
     * @param integer $dealType
     * @return CIndustryRequests
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
     * Set salepriceType
     *
     * @param integer $salepriceType
     * @return CIndustryRequests
     */
    public function setSalepriceType($salepriceType)
    {
        $this->salepriceType = $salepriceType;

        return $this;
    }

    /**
     * Get salepriceType
     *
     * @return integer 
     */
    public function getSalepriceType()
    {
        return $this->salepriceType;
    }

    /**
     * Set salePrice
     *
     * @param integer $salePrice
     * @return CIndustryRequests
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
     * Set salePriceMax
     *
     * @param integer $salePriceMax
     * @return CIndustryRequests
     */
    public function setSalePriceMax($salePriceMax)
    {
        $this->salePriceMax = $salePriceMax;

        return $this;
    }

    /**
     * Get salePriceMax
     *
     * @return integer 
     */
    public function getSalePriceMax()
    {
        return $this->salePriceMax;
    }

    /**
     * Set salePriceAll
     *
     * @param integer $salePriceAll
     * @return CIndustryRequests
     */
    public function setSalePriceAll($salePriceAll)
    {
        $this->salePriceAll = $salePriceAll;

        return $this;
    }

    /**
     * Get salePriceAll
     *
     * @return integer 
     */
    public function getSalePriceAll()
    {
        return $this->salePriceAll;
    }

    /**
     * Set salePriceAllMax
     *
     * @param integer $salePriceAllMax
     * @return CIndustryRequests
     */
    public function setSalePriceAllMax($salePriceAllMax)
    {
        $this->salePriceAllMax = $salePriceAllMax;

        return $this;
    }

    /**
     * Get salePriceAllMax
     *
     * @return integer 
     */
    public function getSalePriceAllMax()
    {
        return $this->salePriceAllMax;
    }

    /**
     * Set rentPrice
     *
     * @param integer $rentPrice
     * @return CIndustryRequests
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
     * Set rentPriceMax
     *
     * @param integer $rentPriceMax
     * @return CIndustryRequests
     */
    public function setRentPriceMax($rentPriceMax)
    {
        $this->rentPriceMax = $rentPriceMax;

        return $this;
    }

    /**
     * Get rentPriceMax
     *
     * @return integer 
     */
    public function getRentPriceMax()
    {
        return $this->rentPriceMax;
    }

    /**
     * Set currency
     *
     * @param integer $currency
     * @return CIndustryRequests
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
     * Set agent
     *
     * @param integer $agent
     * @return CIndustryRequests
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
     * Set ceilingHeight
     *
     * @param integer $ceilingHeight
     * @return CIndustryRequests
     */
    public function setCeilingHeight($ceilingHeight)
    {
        $this->ceilingHeight = $ceilingHeight;

        return $this;
    }

    /**
     * Get ceilingHeight
     *
     * @return integer 
     */
    public function getCeilingHeight()
    {
        return $this->ceilingHeight;
    }

    /**
     * Set infosource
     *
     * @param integer $infosource
     * @return CIndustryRequests
     */
    public function setInfosource($infosource)
    {
        $this->infosource = $infosource;

        return $this;
    }

    /**
     * Get infosource
     *
     * @return integer 
     */
    public function getInfosource()
    {
        return $this->infosource;
    }

    /**
     * Set infosourceExt
     *
     * @param string $infosourceExt
     * @return CIndustryRequests
     */
    public function setInfosourceExt($infosourceExt)
    {
        $this->infosourceExt = $infosourceExt;

        return $this;
    }

    /**
     * Get infosourceExt
     *
     * @return string 
     */
    public function getInfosourceExt()
    {
        return $this->infosourceExt;
    }

    /**
     * Set result
     *
     * @param integer $result
     * @return CIndustryRequests
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
     * @return CIndustryRequests
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
     * Set comments
     *
     * @param string $comments
     * @return CIndustryRequests
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set dtUpdate
     *
     * @param \DateTime $dtUpdate
     * @return CIndustryRequests
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
     * @return CIndustryRequests
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
     * Set deleted
     *
     * @param boolean $deleted
     * @return CIndustryRequests
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
     * Set lUrgency
     *
     * @param integer $lUrgency
     * @return CIndustryRequests
     */
    public function setLUrgency($lUrgency)
    {
        $this->lUrgency = $lUrgency;

        return $this;
    }

    /**
     * Get lUrgency
     *
     * @return integer 
     */
    public function getLUrgency()
    {
        return $this->lUrgency;
    }

    /**
     * Set floorType
     *
     * @param string $floorType
     * @return CIndustryRequests
     */
    public function setFloorType($floorType)
    {
        $this->floorType = $floorType;

        return $this;
    }

    /**
     * Get floorType
     *
     * @return string 
     */
    public function getFloorType()
    {
        return $this->floorType;
    }

    /**
     * Set gateType
     *
     * @param string $gateType
     * @return CIndustryRequests
     */
    public function setGateType($gateType)
    {
        $this->gateType = $gateType;

        return $this;
    }

    /**
     * Get gateType
     *
     * @return string 
     */
    public function getGateType()
    {
        return $this->gateType;
    }

    /**
     * Set cranebeam
     *
     * @param integer $cranebeam
     * @return CIndustryRequests
     */
    public function setCranebeam($cranebeam)
    {
        $this->cranebeam = $cranebeam;

        return $this;
    }

    /**
     * Get cranebeam
     *
     * @return integer 
     */
    public function getCranebeam()
    {
        return $this->cranebeam;
    }

    /**
     * Set railway
     *
     * @param integer $railway
     * @return CIndustryRequests
     */
    public function setRailway($railway)
    {
        $this->railway = $railway;

        return $this;
    }

    /**
     * Get railway
     *
     * @return integer 
     */
    public function getRailway()
    {
        return $this->railway;
    }

    /**
     * Set heated
     *
     * @param string $heated
     * @return CIndustryRequests
     */
    public function setHeated($heated)
    {
        $this->heated = $heated;

        return $this;
    }

    /**
     * Get heated
     *
     * @return string 
     */
    public function getHeated()
    {
        return $this->heated;
    }
}
