<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * COfficesBlocksOld
 *
 * @ORM\Table(name="c_offices_blocks_old", indexes={@ORM\Index(name="clyent_id", columns={"clyent_id"}), @ORM\Index(name="parent_id", columns={"parent_id"}), @ORM\Index(name="c_company", columns={"c_company"}), @ORM\Index(name="district", columns={"district"}), @ORM\Index(name="metro", columns={"metro"}), @ORM\Index(name="from_metro", columns={"from_metro"}), @ORM\Index(name="street", columns={"street"}), @ORM\Index(name="dom_num", columns={"dom_num"}), @ORM\Index(name="object_class", columns={"object_class"}), @ORM\Index(name="house_type", columns={"house_type"}), @ORM\Index(name="area", columns={"area"}), @ORM\Index(name="area_min", columns={"area_min"}), @ORM\Index(name="area_max", columns={"area_max"}), @ORM\Index(name="finishing", columns={"finishing"}), @ORM\Index(name="planning", columns={"planning"}), @ORM\Index(name="deal_type", columns={"deal_type"}), @ORM\Index(name="sale_price", columns={"sale_price"}), @ORM\Index(name="metr_price", columns={"metr_price"}), @ORM\Index(name="rent_price", columns={"rent_price"}), @ORM\Index(name="currency", columns={"currency"}), @ORM\Index(name="sale_type", columns={"sale_type"}), @ORM\Index(name="dogovor", columns={"dogovor"}), @ORM\Index(name="result", columns={"result"}), @ORM\Index(name="verifed", columns={"verifed"}), @ORM\Index(name="agent", columns={"agent"}), @ORM\Index(name="onsite", columns={"onsite"}), @ORM\Index(name="deleted", columns={"deleted"})})
 * @ORM\Entity
 */
class COfficesBlocksOld
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
     * @ORM\Column(name="clyent_id", type="integer", nullable=false)
     */
    private $clyentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=false)
     */
    private $parentId;

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
     * @ORM\Column(name="c_fio", type="string", length=200, nullable=true)
     */
    private $cFio;

    /**
     * @var string
     *
     * @ORM\Column(name="c_dolzhnost", type="string", length=200, nullable=true)
     */
    private $cDolzhnost;

    /**
     * @var string
     *
     * @ORM\Column(name="c_phones", type="string", length=200, nullable=true)
     */
    private $cPhones;

    /**
     * @var string
     *
     * @ORM\Column(name="c_emails", type="string", length=200, nullable=true)
     */
    private $cEmails;

    /**
     * @var string
     *
     * @ORM\Column(name="c_comments", type="text", length=65535, nullable=true)
     */
    private $cComments;

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
     * @var string
     *
     * @ORM\Column(name="object_name", type="string", length=200, nullable=true)
     */
    private $objectName;

    /**
     * @var integer
     *
     * @ORM\Column(name="object_class", type="integer", nullable=false)
     */
    private $objectClass;

    /**
     * @var integer
     *
     * @ORM\Column(name="house_type", type="integer", nullable=false)
     */
    private $houseType;

    /**
     * @var integer
     *
     * @ORM\Column(name="area", type="integer", nullable=true)
     */
    private $area;

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
     * @ORM\Column(name="floors", type="string", length=200, nullable=true)
     */
    private $floors;

    /**
     * @var integer
     *
     * @ORM\Column(name="finishing", type="integer", nullable=false)
     */
    private $finishing;

    /**
     * @var integer
     *
     * @ORM\Column(name="planning", type="integer", nullable=false)
     */
    private $planning;

    /**
     * @var string
     *
     * @ORM\Column(name="parking", type="string", length=200, nullable=true)
     */
    private $parking;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

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
     * @ORM\Column(name="metr_price", type="integer", nullable=false)
     */
    private $metrPrice;

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
     * @var \DateTime
     *
     * @ORM\Column(name="dt_update", type="date", nullable=true)
     */
    private $dtUpdate;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set clyentId
     *
     * @param integer $clyentId
     * @return COfficesBlocksOld
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
     * Set parentId
     *
     * @param integer $parentId
     * @return COfficesBlocksOld
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set cJperson
     *
     * @param boolean $cJperson
     * @return COfficesBlocksOld
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
     * @return COfficesBlocksOld
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
     * Set cFio
     *
     * @param string $cFio
     * @return COfficesBlocksOld
     */
    public function setCFio($cFio)
    {
        $this->cFio = $cFio;

        return $this;
    }

    /**
     * Get cFio
     *
     * @return string 
     */
    public function getCFio()
    {
        return $this->cFio;
    }

    /**
     * Set cDolzhnost
     *
     * @param string $cDolzhnost
     * @return COfficesBlocksOld
     */
    public function setCDolzhnost($cDolzhnost)
    {
        $this->cDolzhnost = $cDolzhnost;

        return $this;
    }

    /**
     * Get cDolzhnost
     *
     * @return string 
     */
    public function getCDolzhnost()
    {
        return $this->cDolzhnost;
    }

    /**
     * Set cPhones
     *
     * @param string $cPhones
     * @return COfficesBlocksOld
     */
    public function setCPhones($cPhones)
    {
        $this->cPhones = $cPhones;

        return $this;
    }

    /**
     * Get cPhones
     *
     * @return string 
     */
    public function getCPhones()
    {
        return $this->cPhones;
    }

    /**
     * Set cEmails
     *
     * @param string $cEmails
     * @return COfficesBlocksOld
     */
    public function setCEmails($cEmails)
    {
        $this->cEmails = $cEmails;

        return $this;
    }

    /**
     * Get cEmails
     *
     * @return string 
     */
    public function getCEmails()
    {
        return $this->cEmails;
    }

    /**
     * Set cComments
     *
     * @param string $cComments
     * @return COfficesBlocksOld
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
     * Set district
     *
     * @param integer $district
     * @return COfficesBlocksOld
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
     * @return COfficesBlocksOld
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
     * @return COfficesBlocksOld
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
     * Set street
     *
     * @param integer $street
     * @return COfficesBlocksOld
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
     * @return COfficesBlocksOld
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
     * Set objectName
     *
     * @param string $objectName
     * @return COfficesBlocksOld
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
     * Set objectClass
     *
     * @param integer $objectClass
     * @return COfficesBlocksOld
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
     * Set houseType
     *
     * @param integer $houseType
     * @return COfficesBlocksOld
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
     * Set area
     *
     * @param integer $area
     * @return COfficesBlocksOld
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
     * Set areaMin
     *
     * @param integer $areaMin
     * @return COfficesBlocksOld
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
     * @return COfficesBlocksOld
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
     * Set floors
     *
     * @param string $floors
     * @return COfficesBlocksOld
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
     * Set finishing
     *
     * @param integer $finishing
     * @return COfficesBlocksOld
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
     * Set planning
     *
     * @param integer $planning
     * @return COfficesBlocksOld
     */
    public function setPlanning($planning)
    {
        $this->planning = $planning;

        return $this;
    }

    /**
     * Get planning
     *
     * @return integer 
     */
    public function getPlanning()
    {
        return $this->planning;
    }

    /**
     * Set parking
     *
     * @param string $parking
     * @return COfficesBlocksOld
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
     * Set description
     *
     * @param string $description
     * @return COfficesBlocksOld
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
     * Set dealType
     *
     * @param integer $dealType
     * @return COfficesBlocksOld
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
     * @return COfficesBlocksOld
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
     * Set metrPrice
     *
     * @param integer $metrPrice
     * @return COfficesBlocksOld
     */
    public function setMetrPrice($metrPrice)
    {
        $this->metrPrice = $metrPrice;

        return $this;
    }

    /**
     * Get metrPrice
     *
     * @return integer 
     */
    public function getMetrPrice()
    {
        return $this->metrPrice;
    }

    /**
     * Set rentPrice
     *
     * @param integer $rentPrice
     * @return COfficesBlocksOld
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
     * @return COfficesBlocksOld
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
     * @return COfficesBlocksOld
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
     * Set dogovor
     *
     * @param integer $dogovor
     * @return COfficesBlocksOld
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
     * @return COfficesBlocksOld
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
     * Set result
     *
     * @param integer $result
     * @return COfficesBlocksOld
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
     * @return COfficesBlocksOld
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
     * @return COfficesBlocksOld
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
     * Set dtUpdate
     *
     * @param \DateTime $dtUpdate
     * @return COfficesBlocksOld
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
     * Set dtInsert
     *
     * @param \DateTime $dtInsert
     * @return COfficesBlocksOld
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
     * @return COfficesBlocksOld
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
     * @return COfficesBlocksOld
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
     * @return COfficesBlocksOld
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
     * @return COfficesBlocksOld
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
     * @return COfficesBlocksOld
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
