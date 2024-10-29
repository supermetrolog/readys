<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CIndustryLandsRequests
 *
 * @ORM\Table(name="c_industry_lands_requests")
 * @ORM\Entity
 */
class CIndustryLandsRequests
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
     * @ORM\Column(name="clyent_id", type="integer", nullable=false)
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
     * @ORM\Column(name="n_directions", type="string", length=100, nullable=true)
     */
    private $nDirections;

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
     * @var string
     *
     * @ORM\Column(name="n_category", type="string", length=100, nullable=true)
     */
    private $nCategory;

    /**
     * @var string
     *
     * @ORM\Column(name="n_function", type="string", length=200, nullable=true)
     */
    private $nFunction;

    /**
     * @var integer
     *
     * @ORM\Column(name="deal_type", type="integer", nullable=false)
     */
    private $dealType;

    /**
     * @var integer
     *
     * @ORM\Column(name="budget_s", type="integer", nullable=true)
     */
    private $budgetS;

    /**
     * @var integer
     *
     * @ORM\Column(name="budget_f", type="integer", nullable=true)
     */
    private $budgetF;

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
     * @ORM\Column(name="dt_active", type="date", nullable=true)
     */
    private $dtActive;

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
     * @return CIndustryLandsRequests
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
     * @return CIndustryLandsRequests
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
     * @return CIndustryLandsRequests
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
     * @return CIndustryLandsRequests
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
     * Set nHighways
     *
     * @param string $nHighways
     * @return CIndustryLandsRequests
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
     * @return CIndustryLandsRequests
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
     * @return CIndustryLandsRequests
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
     * Set areaMin
     *
     * @param integer $areaMin
     * @return CIndustryLandsRequests
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
     * @return CIndustryLandsRequests
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
     * Set nCategory
     *
     * @param string $nCategory
     * @return CIndustryLandsRequests
     */
    public function setNCategory($nCategory)
    {
        $this->nCategory = $nCategory;

        return $this;
    }

    /**
     * Get nCategory
     *
     * @return string 
     */
    public function getNCategory()
    {
        return $this->nCategory;
    }

    /**
     * Set nFunction
     *
     * @param string $nFunction
     * @return CIndustryLandsRequests
     */
    public function setNFunction($nFunction)
    {
        $this->nFunction = $nFunction;

        return $this;
    }

    /**
     * Get nFunction
     *
     * @return string 
     */
    public function getNFunction()
    {
        return $this->nFunction;
    }

    /**
     * Set dealType
     *
     * @param integer $dealType
     * @return CIndustryLandsRequests
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
     * Set budgetS
     *
     * @param integer $budgetS
     * @return CIndustryLandsRequests
     */
    public function setBudgetS($budgetS)
    {
        $this->budgetS = $budgetS;

        return $this;
    }

    /**
     * Get budgetS
     *
     * @return integer 
     */
    public function getBudgetS()
    {
        return $this->budgetS;
    }

    /**
     * Set budgetF
     *
     * @param integer $budgetF
     * @return CIndustryLandsRequests
     */
    public function setBudgetF($budgetF)
    {
        $this->budgetF = $budgetF;

        return $this;
    }

    /**
     * Get budgetF
     *
     * @return integer 
     */
    public function getBudgetF()
    {
        return $this->budgetF;
    }

    /**
     * Set currency
     *
     * @param integer $currency
     * @return CIndustryLandsRequests
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
     * @return CIndustryLandsRequests
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
     * @return CIndustryLandsRequests
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
     * @return CIndustryLandsRequests
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
     * @return CIndustryLandsRequests
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
     * @return CIndustryLandsRequests
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
     * @return CIndustryLandsRequests
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
     * @return CIndustryLandsRequests
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
     * @return CIndustryLandsRequests
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
     * @return CIndustryLandsRequests
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
     * Set dtActive
     *
     * @param \DateTime $dtActive
     * @return CIndustryLandsRequests
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
     * Set deleted
     *
     * @param boolean $deleted
     * @return CIndustryLandsRequests
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
