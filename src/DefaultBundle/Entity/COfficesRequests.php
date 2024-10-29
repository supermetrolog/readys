<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * COfficesRequests
 *
 * @ORM\Table(name="c_offices_requests", indexes={@ORM\Index(name="clyent_id", columns={"clyent_id"}), @ORM\Index(name="readiness", columns={"readiness"}), @ORM\Index(name="n_metros", columns={"n_metros"}), @ORM\Index(name="n_districts", columns={"n_districts"}), @ORM\Index(name="n_class", columns={"n_class"}), @ORM\Index(name="house_type", columns={"house_type"}), @ORM\Index(name="area_min", columns={"area_min"}), @ORM\Index(name="area_max", columns={"area_max"}), @ORM\Index(name="build", columns={"build"}), @ORM\Index(name="finished", columns={"finished"}), @ORM\Index(name="psn", columns={"psn"}), @ORM\Index(name="deal_type", columns={"deal_type"}), @ORM\Index(name="sale_price_min", columns={"sale_price_min"}), @ORM\Index(name="sale_price_max", columns={"sale_price_max"}), @ORM\Index(name="sprice_type", columns={"sprice_type"}), @ORM\Index(name="currency", columns={"currency"}), @ORM\Index(name="agent", columns={"agent"}), @ORM\Index(name="result", columns={"result"}), @ORM\Index(name="verifed", columns={"verifed"}), @ORM\Index(name="deleted", columns={"deleted"}), @ORM\Index(name="rent_price_min", columns={"rent_price_min"}), @ORM\Index(name="rent_price_max", columns={"rent_price_max"}), @ORM\Index(name="infosource", columns={"infosource"})})
 * @ORM\Entity
 */
class COfficesRequests
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
     * @ORM\Column(name="n_metros", type="string", length=500, nullable=true)
     */
    private $nMetros;

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
     * @ORM\Column(name="house_maintype", type="string", length=255, nullable=true)
     */
    private $houseMaintype;

    /**
     * @var string
     *
     * @ORM\Column(name="agent2", type="string", length=255, nullable=true)
     */
    private $agent2;

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
     * @var boolean
     *
     * @ORM\Column(name="build", type="boolean", nullable=false)
     */
    private $build;

    /**
     * @var boolean
     *
     * @ORM\Column(name="finished", type="boolean", nullable=false)
     */
    private $finished;

    /**
     * @var boolean
     *
     * @ORM\Column(name="psn", type="boolean", nullable=false)
     */
    private $psn;

    /**
     * @var string
     *
     * @ORM\Column(name="psn_share", type="string", length=255, nullable=true)
     */
    private $psnShare;

    /**
     * @var boolean
     *
     * @ORM\Column(name="apartments", type="boolean", nullable=false)
     */
    private $apartments;

    /**
     * @var boolean
     *
     * @ORM\Column(name="house_house", type="boolean", nullable=false)
     */
    private $houseHouse;

    /**
     * @var boolean
     *
     * @ORM\Column(name="house_entrance", type="boolean", nullable=false)
     */
    private $houseEntrance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="readiness", type="date", nullable=true)
     */
    private $readiness;

    /**
     * @var integer
     *
     * @ORM\Column(name="deal_type", type="integer", nullable=false)
     */
    private $dealType;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_price_min", type="integer", nullable=true)
     */
    private $salePriceMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_price_max", type="integer", nullable=true)
     */
    private $salePriceMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="sprice_type", type="integer", nullable=false)
     */
    private $spriceType;

    /**
     * @var integer
     *
     * @ORM\Column(name="rent_price_min", type="integer", nullable=true)
     */
    private $rentPriceMin;

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
     * @var string
     *
     * @ORM\Column(name="commission", type="string", length=200, nullable=true)
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
     * @var \DateTime
     *
     * @ORM\Column(name="dt_update_full", type="datetime", nullable=true)
     */
    private $dtUpdateFull;

    /**
     * @var string
     *
     * @ORM\Column(name="history", type="text", length=65535, nullable=true)
     */
    private $history;

    /**
     * @var boolean
     *
     * @ORM\Column(name="verifed", type="boolean", nullable=false)
     */
    private $verifed;

    /**
     * @var string
     *
     * @ORM\Column(name="verifed_comment", type="string", length=1000, nullable=false)
     */
    private $verifedComment;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

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
     * @var boolean
     *
     * @ORM\Column(name="olddb", type="boolean", nullable=true)
     */
    private $olddb;

    /**
     * @var boolean
     *
     * @ORM\Column(name="block_rebus", type="boolean", nullable=true)
     */
    private $blockRebus;

    /**
     * @var string
     *
     * @ORM\Column(name="block_rebus_payback", type="decimal", precision=10, scale=1, nullable=true)
     */
    private $blockRebusPayback;



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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * Set nMetros
     *
     * @param string $nMetros
     * @return COfficesRequests
     */
    public function setNMetros($nMetros)
    {
        $this->nMetros = $nMetros;

        return $this;
    }

    /**
     * Get nMetros
     *
     * @return string 
     */
    public function getNMetros()
    {
        return $this->nMetros;
    }

    /**
     * Set nDistricts
     *
     * @param string $nDistricts
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * Set houseMaintype
     *
     * @param string $houseMaintype
     * @return COfficesRequests
     */
    public function setHouseMaintype($houseMaintype)
    {
        $this->houseMaintype = $houseMaintype;

        return $this;
    }

    /**
     * Get houseMaintype
     *
     * @return string 
     */
    public function getHouseMaintype()
    {
        return $this->houseMaintype;
    }

    /**
     * Set agent2
     *
     * @param string $agent2
     * @return COfficesRequests
     */
    public function setAgent2($agent2)
    {
        $this->agent2 = $agent2;

        return $this;
    }

    /**
     * Get agent2
     *
     * @return string 
     */
    public function getAgent2()
    {
        return $this->agent2;
    }

    /**
     * Set houseType
     *
     * @param string $houseType
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * Set build
     *
     * @param boolean $build
     * @return COfficesRequests
     */
    public function setBuild($build)
    {
        $this->build = $build;

        return $this;
    }

    /**
     * Get build
     *
     * @return boolean 
     */
    public function getBuild()
    {
        return $this->build;
    }

    /**
     * Set finished
     *
     * @param boolean $finished
     * @return COfficesRequests
     */
    public function setFinished($finished)
    {
        $this->finished = $finished;

        return $this;
    }

    /**
     * Get finished
     *
     * @return boolean 
     */
    public function getFinished()
    {
        return $this->finished;
    }

    /**
     * Set psn
     *
     * @param boolean $psn
     * @return COfficesRequests
     */
    public function setPsn($psn)
    {
        $this->psn = $psn;

        return $this;
    }

    /**
     * Get psn
     *
     * @return boolean 
     */
    public function getPsn()
    {
        return $this->psn;
    }

    /**
     * Set psnShare
     *
     * @param string $psnShare
     * @return COfficesRequests
     */
    public function setPsnShare($psnShare)
    {
        $this->psnShare = $psnShare;

        return $this;
    }

    /**
     * Get psnShare
     *
     * @return string 
     */
    public function getPsnShare()
    {
        return $this->psnShare;
    }

    /**
     * Set apartments
     *
     * @param boolean $apartments
     * @return COfficesRequests
     */
    public function setApartments($apartments)
    {
        $this->apartments = $apartments;

        return $this;
    }

    /**
     * Get apartments
     *
     * @return boolean 
     */
    public function getApartments()
    {
        return $this->apartments;
    }

    /**
     * Set houseHouse
     *
     * @param boolean $houseHouse
     * @return COfficesRequests
     */
    public function setHouseHouse($houseHouse)
    {
        $this->houseHouse = $houseHouse;

        return $this;
    }

    /**
     * Get houseHouse
     *
     * @return boolean 
     */
    public function getHouseHouse()
    {
        return $this->houseHouse;
    }

    /**
     * Set houseEntrance
     *
     * @param boolean $houseEntrance
     * @return COfficesRequests
     */
    public function setHouseEntrance($houseEntrance)
    {
        $this->houseEntrance = $houseEntrance;

        return $this;
    }

    /**
     * Get houseEntrance
     *
     * @return boolean 
     */
    public function getHouseEntrance()
    {
        return $this->houseEntrance;
    }

    /**
     * Set readiness
     *
     * @param \DateTime $readiness
     * @return COfficesRequests
     */
    public function setReadiness($readiness)
    {
        $this->readiness = $readiness;

        return $this;
    }

    /**
     * Get readiness
     *
     * @return \DateTime 
     */
    public function getReadiness()
    {
        return $this->readiness;
    }

    /**
     * Set dealType
     *
     * @param integer $dealType
     * @return COfficesRequests
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
     * Set salePriceMin
     *
     * @param integer $salePriceMin
     * @return COfficesRequests
     */
    public function setSalePriceMin($salePriceMin)
    {
        $this->salePriceMin = $salePriceMin;

        return $this;
    }

    /**
     * Get salePriceMin
     *
     * @return integer 
     */
    public function getSalePriceMin()
    {
        return $this->salePriceMin;
    }

    /**
     * Set salePriceMax
     *
     * @param integer $salePriceMax
     * @return COfficesRequests
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
     * Set spriceType
     *
     * @param integer $spriceType
     * @return COfficesRequests
     */
    public function setSpriceType($spriceType)
    {
        $this->spriceType = $spriceType;

        return $this;
    }

    /**
     * Get spriceType
     *
     * @return integer 
     */
    public function getSpriceType()
    {
        return $this->spriceType;
    }

    /**
     * Set rentPriceMin
     *
     * @param integer $rentPriceMin
     * @return COfficesRequests
     */
    public function setRentPriceMin($rentPriceMin)
    {
        $this->rentPriceMin = $rentPriceMin;

        return $this;
    }

    /**
     * Get rentPriceMin
     *
     * @return integer 
     */
    public function getRentPriceMin()
    {
        return $this->rentPriceMin;
    }

    /**
     * Set rentPriceMax
     *
     * @param integer $rentPriceMax
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @param string $commission
     * @return COfficesRequests
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Get commission
     *
     * @return string 
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set agent
     *
     * @param integer $agent
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * Set history
     *
     * @param string $history
     * @return COfficesRequests
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
     * Set verifed
     *
     * @param boolean $verifed
     * @return COfficesRequests
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
     * Set verifedComment
     *
     * @param string $verifedComment
     * @return COfficesRequests
     */
    public function setVerifedComment($verifedComment)
    {
        $this->verifedComment = $verifedComment;

        return $this;
    }

    /**
     * Get verifedComment
     *
     * @return string 
     */
    public function getVerifedComment()
    {
        return $this->verifedComment;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return COfficesRequests
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
     * Set cJperson
     *
     * @param boolean $cJperson
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * @return COfficesRequests
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
     * Set olddb
     *
     * @param boolean $olddb
     * @return COfficesRequests
     */
    public function setOlddb($olddb)
    {
        $this->olddb = $olddb;

        return $this;
    }

    /**
     * Get olddb
     *
     * @return boolean 
     */
    public function getOlddb()
    {
        return $this->olddb;
    }

    /**
     * Set blockRebus
     *
     * @param boolean $blockRebus
     * @return COfficesRequests
     */
    public function setBlockRebus($blockRebus)
    {
        $this->blockRebus = $blockRebus;

        return $this;
    }

    /**
     * Get blockRebus
     *
     * @return boolean 
     */
    public function getBlockRebus()
    {
        return $this->blockRebus;
    }

    /**
     * Set blockRebusPayback
     *
     * @param string $blockRebusPayback
     * @return COfficesRequests
     */
    public function setBlockRebusPayback($blockRebusPayback)
    {
        $this->blockRebusPayback = $blockRebusPayback;

        return $this;
    }

    /**
     * Get blockRebusPayback
     *
     * @return string 
     */
    public function getBlockRebusPayback()
    {
        return $this->blockRebusPayback;
    }
}
