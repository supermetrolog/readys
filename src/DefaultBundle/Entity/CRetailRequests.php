<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CRetailRequests
 *
 * @ORM\Table(name="c_retail_requests", indexes={@ORM\Index(name="clyent_id", columns={"clyent_id"})})
 * @ORM\Entity
 */
class CRetailRequests
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
     * @ORM\Column(name="n_regions", type="string", length=100, nullable=true)
     */
    private $nRegions;

    /**
     * @var string
     *
     * @ORM\Column(name="n_districts", type="string", length=100, nullable=true)
     */
    private $nDistricts;

    /**
     * @var string
     *
     * @ORM\Column(name="n_class", type="string", length=100, nullable=true)
     */
    private $nClass;

    /**
     * @var string
     *
     * @ORM\Column(name="house_type", type="string", length=100, nullable=true)
     */
    private $houseType;

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
     * @ORM\Column(name="deal_type", type="integer", nullable=false)
     */
    private $dealType;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_price", type="integer", nullable=true)
     */
    private $salePrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="rent_price", type="integer", nullable=true)
     */
    private $rentPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="rprice_period", type="integer", nullable=false)
     */
    private $rpricePeriod;

    /**
     * @var integer
     *
     * @ORM\Column(name="currency", type="integer", nullable=false)
     */
    private $currency;

    /**
     * @var integer
     *
     * @ORM\Column(name="commission", type="integer", nullable=true)
     */
    private $commission;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent", type="integer", nullable=false)
     */
    private $agent;

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
     * @var \DateTime
     *
     * @ORM\Column(name="dt_result", type="date", nullable=true)
     */
    private $dtResult;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="text", length=65535, nullable=true)
     */
    private $comments;

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
     * @var string
     *
     * @ORM\Column(name="history", type="text", length=65535, nullable=true)
     */
    private $history;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;



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
     * @return CRetailRequests
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
     * @return CRetailRequests
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
     * Set nRegions
     *
     * @param string $nRegions
     * @return CRetailRequests
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
     * Set nDistricts
     *
     * @param string $nDistricts
     * @return CRetailRequests
     */
    public function setNDistricts($nDistricts)
    {
        $this->nDistricts = $nDistricts;

        return $this;
    }

    /**
     * Get nDistricts
     *
     * @return string 
     */
    public function getNDistricts()
    {
        return $this->nDistricts;
    }

    /**
     * Set nClass
     *
     * @param string $nClass
     * @return CRetailRequests
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
     * Set houseType
     *
     * @param string $houseType
     * @return CRetailRequests
     */
    public function setHouseType($houseType)
    {
        $this->houseType = $houseType;

        return $this;
    }

    /**
     * Get houseType
     *
     * @return string 
     */
    public function getHouseType()
    {
        return $this->houseType;
    }

    /**
     * Set areaMin
     *
     * @param integer $areaMin
     * @return CRetailRequests
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
     * @return CRetailRequests
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
     * Set dealType
     *
     * @param integer $dealType
     * @return CRetailRequests
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
     * @return CRetailRequests
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
     * @return CRetailRequests
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
     * Set rpricePeriod
     *
     * @param integer $rpricePeriod
     * @return CRetailRequests
     */
    public function setRpricePeriod($rpricePeriod)
    {
        $this->rpricePeriod = $rpricePeriod;

        return $this;
    }

    /**
     * Get rpricePeriod
     *
     * @return integer 
     */
    public function getRpricePeriod()
    {
        return $this->rpricePeriod;
    }

    /**
     * Set currency
     *
     * @param integer $currency
     * @return CRetailRequests
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
     * Set commission
     *
     * @param integer $commission
     * @return CRetailRequests
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Get commission
     *
     * @return integer 
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set agent
     *
     * @param integer $agent
     * @return CRetailRequests
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
     * Set infosource
     *
     * @param integer $infosource
     * @return CRetailRequests
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
     * @return CRetailRequests
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
     * @return CRetailRequests
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
     * @return CRetailRequests
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
     * @return CRetailRequests
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
     * Set comments
     *
     * @param string $comments
     * @return CRetailRequests
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
     * Set dtActive
     *
     * @param \DateTime $dtActive
     * @return CRetailRequests
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
     * @return CRetailRequests
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
     * Set history
     *
     * @param string $history
     * @return CRetailRequests
     */
    public function setHistory($history)
    {
        $this->history = $history;

        return $this;
    }

    /**
     * Get history
     *
     * @return string 
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return CRetailRequests
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
}
