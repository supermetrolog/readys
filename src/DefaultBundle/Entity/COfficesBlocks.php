<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * COfficesBlocks
 *
 * @ORM\Table(name="c_offices_blocks", indexes={@ORM\Index(name="clyent_id", columns={"clyent_id"}), @ORM\Index(name="parent_id", columns={"parent_id"}), @ORM\Index(name="block_type", columns={"block_type"}), @ORM\Index(name="block_atype", columns={"block_atype"}), @ORM\Index(name="block_area", columns={"block_area"}), @ORM\Index(name="block_area_min", columns={"block_area_min"}), @ORM\Index(name="block_area_max", columns={"block_area_max"}), @ORM\Index(name="block_arst", columns={"block_arst"}), @ORM\Index(name="block_fin", columns={"block_fin"}), @ORM\Index(name="block_finishing", columns={"block_finishing"}), @ORM\Index(name="block_planning", columns={"block_planning"}), @ORM\Index(name="rent_price", columns={"rent_price"}), @ORM\Index(name="rent_currency", columns={"rent_currency"}), @ORM\Index(name="rent_nds", columns={"rent_nds"}), @ORM\Index(name="exp_include", columns={"exp_include"}), @ORM\Index(name="exp_price", columns={"exp_price"}), @ORM\Index(name="exp_currency", columns={"exp_currency"}), @ORM\Index(name="exp_nds", columns={"exp_nds"}), @ORM\Index(name="rent_schema", columns={"rent_schema"}), @ORM\Index(name="sale_price", columns={"sale_price"}), @ORM\Index(name="sprice_type", columns={"sprice_type"}), @ORM\Index(name="sale_currency", columns={"sale_currency"}), @ORM\Index(name="service_pay", columns={"service_pay"}), @ORM\Index(name="sale_schema", columns={"sale_schema"}), @ORM\Index(name="banner", columns={"banner"}), @ORM\Index(name="onsite", columns={"onsite"}), @ORM\Index(name="c_jperson", columns={"c_jperson"}), @ORM\Index(name="dt_update", columns={"dt_update"}), @ORM\Index(name="dt_insert", columns={"dt_insert"}), @ORM\Index(name="result", columns={"result"}), @ORM\Index(name="verifed", columns={"verifed"}), @ORM\Index(name="agent", columns={"agent"}), @ORM\Index(name="deleted", columns={"deleted"}), @ORM\Index(name="block_psn", columns={"block_psn"}), @ORM\Index(name="block_readiness", columns={"block_readiness"}), @ORM\Index(name="owner_pays", columns={"owner_pays"}), @ORM\Index(name="agency_comission", columns={"agency_comission"}), @ORM\Index(name="deal_type", columns={"deal_type"}), @ORM\Index(name="deleted_result_id", columns={"deleted", "result", "id"}), @ORM\Index(name="block_title", columns={"block_title"}), @ORM\Index(name="advertising_buzzword", columns={"advertising_buzzword"}), @ORM\Index(name="advertising_buzzword_position", columns={"advertising_buzzword_position"}), @ORM\Index(name="export", columns={"export"}), @ORM\Index(name="paperdb", columns={"paperdb"}), @ORM\Index(name="dt_update_block_type", columns={"dt_update", "block_type"}), @ORM\Index(name="banner_tags", columns={"banner_tags"})})
 * @ORM\Entity
 */
class COfficesBlocks
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
     * @ORM\Column(name="parent_id", type="integer", nullable=false)
     */
    private $parentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="block_type", type="integer", nullable=false)
     */
    private $blockType;

    /**
     * @var string
     *
     * @ORM\Column(name="block_title", type="string", length=200, nullable=true)
     */
    private $blockTitle;

    /**
     * @var boolean
     *
     * @ORM\Column(name="block_atype", type="boolean", nullable=false)
     */
    private $blockAtype;

    /**
     * @var float
     *
     * @ORM\Column(name="block_area", type="float", precision=15, scale=1, nullable=true)
     */
    private $blockArea;

    /**
     * @var float
     *
     * @ORM\Column(name="block_area_min", type="float", precision=15, scale=1, nullable=true)
     */
    private $blockAreaMin;

    /**
     * @var float
     *
     * @ORM\Column(name="block_area_max", type="float", precision=15, scale=1, nullable=true)
     */
    private $blockAreaMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="block_arst", type="integer", nullable=false)
     */
    private $blockArst;

    /**
     * @var string
     *
     * @ORM\Column(name="block_arst_ext", type="text", length=65535, nullable=true)
     */
    private $blockArstExt;

    /**
     * @var string
     *
     * @ORM\Column(name="block_location", type="string", length=1500, nullable=true)
     */
    private $blockLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="block_fin", type="string", length=4, nullable=true)
     */
    private $blockFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="block_finishing", type="integer", nullable=false)
     */
    private $blockFinishing;

    /**
     * @var string
     *
     * @ORM\Column(name="block_finishing_ext", type="text", length=65535, nullable=true)
     */
    private $blockFinishingExt;

    /**
     * @var string
     *
     * @ORM\Column(name="block_finishing_c", type="string", length=200, nullable=true)
     */
    private $blockFinishingC;

    /**
     * @var string
     *
     * @ORM\Column(name="block_finishing_a", type="string", length=200, nullable=true)
     */
    private $blockFinishingA;

    /**
     * @var integer
     *
     * @ORM\Column(name="block_planning", type="integer", nullable=false)
     */
    private $blockPlanning;

    /**
     * @var string
     *
     * @ORM\Column(name="block_planning_ext", type="text", length=65535, nullable=true)
     */
    private $blockPlanningExt;

    /**
     * @var string
     *
     * @ORM\Column(name="block_psn", type="string", length=64, nullable=true)
     */
    private $blockPsn;

    /**
     * @var boolean
     *
     * @ORM\Column(name="block_apartments", type="boolean", nullable=true)
     */
    private $blockApartments;

    /**
     * @var boolean
     *
     * @ORM\Column(name="block_rebus", type="boolean", nullable=true)
     */
    private $blockRebus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="block_rebus_sitting", type="boolean", nullable=true)
     */
    private $blockRebusSitting;

    /**
     * @var boolean
     *
     * @ORM\Column(name="block_loft", type="boolean", nullable=true)
     */
    private $blockLoft;

    /**
     * @var boolean
     *
     * @ORM\Column(name="block_streetretail", type="boolean", nullable=true)
     */
    private $blockStreetretail;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="block_readiness", type="date", nullable=true)
     */
    private $blockReadiness;

    /**
     * @var integer
     *
     * @ORM\Column(name="rent_price", type="integer", nullable=true)
     */
    private $rentPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="rent_price_type", type="integer", nullable=false)
     */
    private $rentPriceType;

    /**
     * @var integer
     *
     * @ORM\Column(name="rent_currency", type="integer", nullable=false)
     */
    private $rentCurrency;

    /**
     * @var integer
     *
     * @ORM\Column(name="rent_nds", type="integer", nullable=false)
     */
    private $rentNds;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_include", type="integer", nullable=false)
     */
    private $expInclude;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_price", type="integer", nullable=true)
     */
    private $expPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_currency", type="integer", nullable=false)
     */
    private $expCurrency;

    /**
     * @var integer
     *
     * @ORM\Column(name="exp_nds", type="integer", nullable=false)
     */
    private $expNds;

    /**
     * @var integer
     *
     * @ORM\Column(name="rent_schema", type="integer", nullable=false)
     */
    private $rentSchema;

    /**
     * @var string
     *
     * @ORM\Column(name="rent_dop", type="text", length=65535, nullable=true)
     */
    private $rentDop;

    /**
     * @var string
     *
     * @ORM\Column(name="rent_period", type="string", length=200, nullable=true)
     */
    private $rentPeriod;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_price", type="bigint", nullable=true)
     */
    private $salePrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="sprice_type", type="integer", nullable=false)
     */
    private $spriceType;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_currency", type="integer", nullable=false)
     */
    private $saleCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="uk_price", type="string", length=100, nullable=true)
     */
    private $ukPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="service_pay", type="integer", nullable=false)
     */
    private $servicePay;

    /**
     * @var string
     *
     * @ORM\Column(name="service_pay_ext", type="text", length=65535, nullable=true)
     */
    private $servicePayExt;

    /**
     * @var string
     *
     * @ORM\Column(name="parking_places", type="string", length=200, nullable=true)
     */
    private $parkingPlaces;

    /**
     * @var string
     *
     * @ORM\Column(name="parking_rent", type="text", length=65535, nullable=true)
     */
    private $parkingRent;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_schema", type="integer", nullable=false)
     */
    private $saleSchema;

    /**
     * @var string
     *
     * @ORM\Column(name="payback", type="text", length=65535, nullable=true)
     */
    private $payback;

    /**
     * @var boolean
     *
     * @ORM\Column(name="agency_comission", type="boolean", nullable=false)
     */
    private $agencyComission;

    /**
     * @var boolean
     *
     * @ORM\Column(name="owner_pays", type="boolean", nullable=true)
     */
    private $ownerPays;

    /**
     * @var string
     *
     * @ORM\Column(name="block_rebus_payback", type="decimal", precision=10, scale=1, nullable=true)
     */
    private $blockRebusPayback;

    /**
     * @var string
     *
     * @ORM\Column(name="owner_pays_howmuch", type="decimal", precision=10, scale=1, nullable=true)
     */
    private $ownerPaysHowmuch;

    /**
     * @var string
     *
     * @ORM\Column(name="slcomments", type="text", length=65535, nullable=true)
     */
    private $slcomments;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="text", length=65535, nullable=true)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="comments_export", type="text", length=65535, nullable=true)
     */
    private $commentsExport;

    /**
     * @var boolean
     *
     * @ORM\Column(name="banner", type="boolean", nullable=false)
     */
    private $banner;

    /**
     * @var string
     *
     * @ORM\Column(name="banner_tags", type="text", length=65535, nullable=true)
     */
    private $bannerTags;

    /**
     * @var boolean
     *
     * @ORM\Column(name="onsite", type="boolean", nullable=false)
     */
    private $onsite;

    /**
     * @var integer
     *
     * @ORM\Column(name="clyent_id", type="integer", nullable=false)
     */
    private $clyentId;

    /**
     * @var string
     *
     * @ORM\Column(name="clyetnt_contact", type="text", length=65535, nullable=true)
     */
    private $clyetntContact;

    /**
     * @var string
     *
     * @ORM\Column(name="prozvon_contact", type="text", length=65535, nullable=true)
     */
    private $prozvonContact;

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
     * @ORM\Column(name="dt_promo_full", type="datetime", nullable=true)
     */
    private $dtPromoFull;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_insert", type="date", nullable=true)
     */
    private $dtInsert;

    /**
     * @var integer
     *
     * @ORM\Column(name="result", type="smallint", nullable=false)
     */
    private $result;

    /**
     * @var boolean
     *
     * @ORM\Column(name="verifed", type="boolean", nullable=false)
     */
    private $verifed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="paperdb", type="boolean", nullable=false)
     */
    private $paperdb;

    /**
     * @var boolean
     *
     * @ORM\Column(name="special4site", type="boolean", nullable=false)
     */
    private $special4site;

    /**
     * @var boolean
     *
     * @ORM\Column(name="export", type="boolean", nullable=false)
     */
    private $export;

    /**
     * @var boolean
     *
     * @ORM\Column(name="export2site", type="boolean", nullable=false)
     */
    private $export2site;

    /**
     * @var boolean
     *
     * @ORM\Column(name="export2cian", type="boolean", nullable=false)
     */
    private $export2cian;

    /**
     * @var boolean
     *
     * @ORM\Column(name="export2yandex", type="boolean", nullable=false)
     */
    private $export2yandex;

    /**
     * @var boolean
     *
     * @ORM\Column(name="export2avito", type="boolean", nullable=false)
     */
    private $export2avito;

    /**
     * @var boolean
     *
     * @ORM\Column(name="export2irr", type="boolean", nullable=false)
     */
    private $export2irr;

    /**
     * @var boolean
     *
     * @ORM\Column(name="export2irr_premium", type="boolean", nullable=false)
     */
    private $export2irrPremium;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent", type="integer", nullable=false)
     */
    private $agent;

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
     * @var integer
     *
     * @ORM\Column(name="agr_status", type="integer", nullable=false)
     */
    private $agrStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="agr_contragent", type="string", length=255, nullable=false)
     */
    private $agrContragent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="agr_limit", type="date", nullable=true)
     */
    private $agrLimit;

    /**
     * @var string
     *
     * @ORM\Column(name="agr_cond", type="text", length=65535, nullable=true)
     */
    private $agrCond;

    /**
     * @var integer
     *
     * @ORM\Column(name="advertising_buzzword", type="integer", nullable=true)
     */
    private $advertisingBuzzword;

    /**
     * @var string
     *
     * @ORM\Column(name="cian_type", type="string", length=2, nullable=false)
     */
    private $cianType;

    /**
     * @var integer
     *
     * @ORM\Column(name="advertising_buzzword_position", type="integer", nullable=true)
     */
    private $advertisingBuzzwordPosition;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="string", length=2000, nullable=true)
     */
    private $tags;

    /**
     * @var boolean
     *
     * @ORM\Column(name="main2site", type="boolean", nullable=false)
     */
    private $main2site;

    /**
     * @var string
     *
     * @ORM\Column(name="agent2", type="string", length=255, nullable=true)
     */
    private $agent2;

    /**
     * @var integer
     *
     * @ORM\Column(name="floor", type="integer", nullable=true)
     */
    private $floor;

    /**
     * @var string
     *
     * @ORM\Column(name="reklama_urls_cian", type="text", length=65535, nullable=true)
     */
    private $reklamaUrlsCian;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reklama_urls_cian_upd", type="datetime", nullable=true)
     */
    private $reklamaUrlsCianUpd;

    /**
     * @var string
     *
     * @ORM\Column(name="reklama_urls_irr", type="text", length=65535, nullable=true)
     */
    private $reklamaUrlsIrr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reklama_urls_irr_upd", type="datetime", nullable=true)
     */
    private $reklamaUrlsIrrUpd;

    /**
     * @var string
     *
     * @ORM\Column(name="reklama_urls_afy", type="text", length=65535, nullable=true)
     */
    private $reklamaUrlsAfy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reklama_urls_afy_upd", type="datetime", nullable=true)
     */
    private $reklamaUrlsAfyUpd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_export_yandex", type="datetime", nullable=true)
     */
    private $dtExportYandex;



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
     * Set parentId
     *
     * @param integer $parentId
     * @return COfficesBlocks
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
     * Set blockType
     *
     * @param integer $blockType
     * @return COfficesBlocks
     */
    public function setBlockType($blockType)
    {
        $this->blockType = $blockType;

        return $this;
    }

    /**
     * Get blockType
     *
     * @return integer 
     */
    public function getBlockType()
    {
        return $this->blockType;
    }

    /**
     * Set blockTitle
     *
     * @param string $blockTitle
     * @return COfficesBlocks
     */
    public function setBlockTitle($blockTitle)
    {
        $this->blockTitle = $blockTitle;

        return $this;
    }

    /**
     * Get blockTitle
     *
     * @return string 
     */
    public function getBlockTitle()
    {
        return $this->blockTitle;
    }

    /**
     * Set blockAtype
     *
     * @param boolean $blockAtype
     * @return COfficesBlocks
     */
    public function setBlockAtype($blockAtype)
    {
        $this->blockAtype = $blockAtype;

        return $this;
    }

    /**
     * Get blockAtype
     *
     * @return boolean 
     */
    public function getBlockAtype()
    {
        return $this->blockAtype;
    }

    /**
     * Set blockArea
     *
     * @param float $blockArea
     * @return COfficesBlocks
     */
    public function setBlockArea($blockArea)
    {
        $this->blockArea = $blockArea;

        return $this;
    }

    /**
     * Get blockArea
     *
     * @return float 
     */
    public function getBlockArea()
    {
        return $this->blockArea;
    }

    /**
     * Set blockAreaMin
     *
     * @param float $blockAreaMin
     * @return COfficesBlocks
     */
    public function setBlockAreaMin($blockAreaMin)
    {
        $this->blockAreaMin = $blockAreaMin;

        return $this;
    }

    /**
     * Get blockAreaMin
     *
     * @return float 
     */
    public function getBlockAreaMin()
    {
        return $this->blockAreaMin;
    }

    /**
     * Set blockAreaMax
     *
     * @param float $blockAreaMax
     * @return COfficesBlocks
     */
    public function setBlockAreaMax($blockAreaMax)
    {
        $this->blockAreaMax = $blockAreaMax;

        return $this;
    }

    /**
     * Get blockAreaMax
     *
     * @return float 
     */
    public function getBlockAreaMax()
    {
        return $this->blockAreaMax;
    }

    /**
     * Set blockArst
     *
     * @param integer $blockArst
     * @return COfficesBlocks
     */
    public function setBlockArst($blockArst)
    {
        $this->blockArst = $blockArst;

        return $this;
    }

    /**
     * Get blockArst
     *
     * @return integer 
     */
    public function getBlockArst()
    {
        return $this->blockArst;
    }

    /**
     * Set blockArstExt
     *
     * @param string $blockArstExt
     * @return COfficesBlocks
     */
    public function setBlockArstExt($blockArstExt)
    {
        $this->blockArstExt = $blockArstExt;

        return $this;
    }

    /**
     * Get blockArstExt
     *
     * @return string 
     */
    public function getBlockArstExt()
    {
        return $this->blockArstExt;
    }

    /**
     * Set blockLocation
     *
     * @param string $blockLocation
     * @return COfficesBlocks
     */
    public function setBlockLocation($blockLocation)
    {
        $this->blockLocation = $blockLocation;

        return $this;
    }

    /**
     * Get blockLocation
     *
     * @return string 
     */
    public function getBlockLocation()
    {
        return $this->blockLocation;
    }

    /**
     * Set blockFin
     *
     * @param string $blockFin
     * @return COfficesBlocks
     */
    public function setBlockFin($blockFin)
    {
        $this->blockFin = $blockFin;

        return $this;
    }

    /**
     * Get blockFin
     *
     * @return string 
     */
    public function getBlockFin()
    {
        return $this->blockFin;
    }

    /**
     * Set blockFinishing
     *
     * @param integer $blockFinishing
     * @return COfficesBlocks
     */
    public function setBlockFinishing($blockFinishing)
    {
        $this->blockFinishing = $blockFinishing;

        return $this;
    }

    /**
     * Get blockFinishing
     *
     * @return integer 
     */
    public function getBlockFinishing()
    {
        return $this->blockFinishing;
    }

    /**
     * Set blockFinishingExt
     *
     * @param string $blockFinishingExt
     * @return COfficesBlocks
     */
    public function setBlockFinishingExt($blockFinishingExt)
    {
        $this->blockFinishingExt = $blockFinishingExt;

        return $this;
    }

    /**
     * Get blockFinishingExt
     *
     * @return string 
     */
    public function getBlockFinishingExt()
    {
        return $this->blockFinishingExt;
    }

    /**
     * Set blockFinishingC
     *
     * @param string $blockFinishingC
     * @return COfficesBlocks
     */
    public function setBlockFinishingC($blockFinishingC)
    {
        $this->blockFinishingC = $blockFinishingC;

        return $this;
    }

    /**
     * Get blockFinishingC
     *
     * @return string 
     */
    public function getBlockFinishingC()
    {
        return $this->blockFinishingC;
    }

    /**
     * Set blockFinishingA
     *
     * @param string $blockFinishingA
     * @return COfficesBlocks
     */
    public function setBlockFinishingA($blockFinishingA)
    {
        $this->blockFinishingA = $blockFinishingA;

        return $this;
    }

    /**
     * Get blockFinishingA
     *
     * @return string 
     */
    public function getBlockFinishingA()
    {
        return $this->blockFinishingA;
    }

    /**
     * Set blockPlanning
     *
     * @param integer $blockPlanning
     * @return COfficesBlocks
     */
    public function setBlockPlanning($blockPlanning)
    {
        $this->blockPlanning = $blockPlanning;

        return $this;
    }

    /**
     * Get blockPlanning
     *
     * @return integer 
     */
    public function getBlockPlanning()
    {
        return $this->blockPlanning;
    }

    /**
     * Set blockPlanningExt
     *
     * @param string $blockPlanningExt
     * @return COfficesBlocks
     */
    public function setBlockPlanningExt($blockPlanningExt)
    {
        $this->blockPlanningExt = $blockPlanningExt;

        return $this;
    }

    /**
     * Get blockPlanningExt
     *
     * @return string 
     */
    public function getBlockPlanningExt()
    {
        return $this->blockPlanningExt;
    }

    /**
     * Set blockPsn
     *
     * @param string $blockPsn
     * @return COfficesBlocks
     */
    public function setBlockPsn($blockPsn)
    {
        $this->blockPsn = $blockPsn;

        return $this;
    }

    /**
     * Get blockPsn
     *
     * @return string 
     */
    public function getBlockPsn()
    {
        return $this->blockPsn;
    }

    /**
     * Set blockApartments
     *
     * @param boolean $blockApartments
     * @return COfficesBlocks
     */
    public function setBlockApartments($blockApartments)
    {
        $this->blockApartments = $blockApartments;

        return $this;
    }

    /**
     * Get blockApartments
     *
     * @return boolean 
     */
    public function getBlockApartments()
    {
        return $this->blockApartments;
    }

    /**
     * Set blockRebus
     *
     * @param boolean $blockRebus
     * @return COfficesBlocks
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
     * Set blockRebusSitting
     *
     * @param boolean $blockRebusSitting
     * @return COfficesBlocks
     */
    public function setBlockRebusSitting($blockRebusSitting)
    {
        $this->blockRebusSitting = $blockRebusSitting;

        return $this;
    }

    /**
     * Get blockRebusSitting
     *
     * @return boolean 
     */
    public function getBlockRebusSitting()
    {
        return $this->blockRebusSitting;
    }

    /**
     * Set blockLoft
     *
     * @param boolean $blockLoft
     * @return COfficesBlocks
     */
    public function setBlockLoft($blockLoft)
    {
        $this->blockLoft = $blockLoft;

        return $this;
    }

    /**
     * Get blockLoft
     *
     * @return boolean 
     */
    public function getBlockLoft()
    {
        return $this->blockLoft;
    }

    /**
     * Set blockStreetretail
     *
     * @param boolean $blockStreetretail
     * @return COfficesBlocks
     */
    public function setBlockStreetretail($blockStreetretail)
    {
        $this->blockStreetretail = $blockStreetretail;

        return $this;
    }

    /**
     * Get blockStreetretail
     *
     * @return boolean 
     */
    public function getBlockStreetretail()
    {
        return $this->blockStreetretail;
    }

    /**
     * Set blockReadiness
     *
     * @param \DateTime $blockReadiness
     * @return COfficesBlocks
     */
    public function setBlockReadiness($blockReadiness)
    {
        $this->blockReadiness = $blockReadiness;

        return $this;
    }

    /**
     * Get blockReadiness
     *
     * @return \DateTime 
     */
    public function getBlockReadiness()
    {
        return $this->blockReadiness;
    }

    /**
     * Set rentPrice
     *
     * @param integer $rentPrice
     * @return COfficesBlocks
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
     * Set rentPriceType
     *
     * @param integer $rentPriceType
     * @return COfficesBlocks
     */
    public function setRentPriceType($rentPriceType)
    {
        $this->rentPriceType = $rentPriceType;

        return $this;
    }

    /**
     * Get rentPriceType
     *
     * @return integer 
     */
    public function getRentPriceType()
    {
        return $this->rentPriceType;
    }

    /**
     * Set rentCurrency
     *
     * @param integer $rentCurrency
     * @return COfficesBlocks
     */
    public function setRentCurrency($rentCurrency)
    {
        $this->rentCurrency = $rentCurrency;

        return $this;
    }

    /**
     * Get rentCurrency
     *
     * @return integer 
     */
    public function getRentCurrency()
    {
        return $this->rentCurrency;
    }

    /**
     * Set rentNds
     *
     * @param integer $rentNds
     * @return COfficesBlocks
     */
    public function setRentNds($rentNds)
    {
        $this->rentNds = $rentNds;

        return $this;
    }

    /**
     * Get rentNds
     *
     * @return integer 
     */
    public function getRentNds()
    {
        return $this->rentNds;
    }

    /**
     * Set expInclude
     *
     * @param integer $expInclude
     * @return COfficesBlocks
     */
    public function setExpInclude($expInclude)
    {
        $this->expInclude = $expInclude;

        return $this;
    }

    /**
     * Get expInclude
     *
     * @return integer 
     */
    public function getExpInclude()
    {
        return $this->expInclude;
    }

    /**
     * Set expPrice
     *
     * @param integer $expPrice
     * @return COfficesBlocks
     */
    public function setExpPrice($expPrice)
    {
        $this->expPrice = $expPrice;

        return $this;
    }

    /**
     * Get expPrice
     *
     * @return integer 
     */
    public function getExpPrice()
    {
        return $this->expPrice;
    }

    /**
     * Set expCurrency
     *
     * @param integer $expCurrency
     * @return COfficesBlocks
     */
    public function setExpCurrency($expCurrency)
    {
        $this->expCurrency = $expCurrency;

        return $this;
    }

    /**
     * Get expCurrency
     *
     * @return integer 
     */
    public function getExpCurrency()
    {
        return $this->expCurrency;
    }

    /**
     * Set expNds
     *
     * @param integer $expNds
     * @return COfficesBlocks
     */
    public function setExpNds($expNds)
    {
        $this->expNds = $expNds;

        return $this;
    }

    /**
     * Get expNds
     *
     * @return integer 
     */
    public function getExpNds()
    {
        return $this->expNds;
    }

    /**
     * Set rentSchema
     *
     * @param integer $rentSchema
     * @return COfficesBlocks
     */
    public function setRentSchema($rentSchema)
    {
        $this->rentSchema = $rentSchema;

        return $this;
    }

    /**
     * Get rentSchema
     *
     * @return integer 
     */
    public function getRentSchema()
    {
        return $this->rentSchema;
    }

    /**
     * Set rentDop
     *
     * @param string $rentDop
     * @return COfficesBlocks
     */
    public function setRentDop($rentDop)
    {
        $this->rentDop = $rentDop;

        return $this;
    }

    /**
     * Get rentDop
     *
     * @return string 
     */
    public function getRentDop()
    {
        return $this->rentDop;
    }

    /**
     * Set rentPeriod
     *
     * @param string $rentPeriod
     * @return COfficesBlocks
     */
    public function setRentPeriod($rentPeriod)
    {
        $this->rentPeriod = $rentPeriod;

        return $this;
    }

    /**
     * Get rentPeriod
     *
     * @return string 
     */
    public function getRentPeriod()
    {
        return $this->rentPeriod;
    }

    /**
     * Set salePrice
     *
     * @param integer $salePrice
     * @return COfficesBlocks
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
     * Set spriceType
     *
     * @param integer $spriceType
     * @return COfficesBlocks
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
     * Set saleCurrency
     *
     * @param integer $saleCurrency
     * @return COfficesBlocks
     */
    public function setSaleCurrency($saleCurrency)
    {
        $this->saleCurrency = $saleCurrency;

        return $this;
    }

    /**
     * Get saleCurrency
     *
     * @return integer 
     */
    public function getSaleCurrency()
    {
        return $this->saleCurrency;
    }

    /**
     * Set ukPrice
     *
     * @param string $ukPrice
     * @return COfficesBlocks
     */
    public function setUkPrice($ukPrice)
    {
        $this->ukPrice = $ukPrice;

        return $this;
    }

    /**
     * Get ukPrice
     *
     * @return string 
     */
    public function getUkPrice()
    {
        return $this->ukPrice;
    }

    /**
     * Set servicePay
     *
     * @param integer $servicePay
     * @return COfficesBlocks
     */
    public function setServicePay($servicePay)
    {
        $this->servicePay = $servicePay;

        return $this;
    }

    /**
     * Get servicePay
     *
     * @return integer 
     */
    public function getServicePay()
    {
        return $this->servicePay;
    }

    /**
     * Set servicePayExt
     *
     * @param string $servicePayExt
     * @return COfficesBlocks
     */
    public function setServicePayExt($servicePayExt)
    {
        $this->servicePayExt = $servicePayExt;

        return $this;
    }

    /**
     * Get servicePayExt
     *
     * @return string 
     */
    public function getServicePayExt()
    {
        return $this->servicePayExt;
    }

    /**
     * Set parkingPlaces
     *
     * @param string $parkingPlaces
     * @return COfficesBlocks
     */
    public function setParkingPlaces($parkingPlaces)
    {
        $this->parkingPlaces = $parkingPlaces;

        return $this;
    }

    /**
     * Get parkingPlaces
     *
     * @return string 
     */
    public function getParkingPlaces()
    {
        return $this->parkingPlaces;
    }

    /**
     * Set parkingRent
     *
     * @param string $parkingRent
     * @return COfficesBlocks
     */
    public function setParkingRent($parkingRent)
    {
        $this->parkingRent = $parkingRent;

        return $this;
    }

    /**
     * Get parkingRent
     *
     * @return string 
     */
    public function getParkingRent()
    {
        return $this->parkingRent;
    }

    /**
     * Set saleSchema
     *
     * @param integer $saleSchema
     * @return COfficesBlocks
     */
    public function setSaleSchema($saleSchema)
    {
        $this->saleSchema = $saleSchema;

        return $this;
    }

    /**
     * Get saleSchema
     *
     * @return integer 
     */
    public function getSaleSchema()
    {
        return $this->saleSchema;
    }

    /**
     * Set payback
     *
     * @param string $payback
     * @return COfficesBlocks
     */
    public function setPayback($payback)
    {
        $this->payback = $payback;

        return $this;
    }

    /**
     * Get payback
     *
     * @return string 
     */
    public function getPayback()
    {
        return $this->payback;
    }

    /**
     * Set agencyComission
     *
     * @param boolean $agencyComission
     * @return COfficesBlocks
     */
    public function setAgencyComission($agencyComission)
    {
        $this->agencyComission = $agencyComission;

        return $this;
    }

    /**
     * Get agencyComission
     *
     * @return boolean 
     */
    public function getAgencyComission()
    {
        return $this->agencyComission;
    }

    /**
     * Set ownerPays
     *
     * @param boolean $ownerPays
     * @return COfficesBlocks
     */
    public function setOwnerPays($ownerPays)
    {
        $this->ownerPays = $ownerPays;

        return $this;
    }

    /**
     * Get ownerPays
     *
     * @return boolean 
     */
    public function getOwnerPays()
    {
        return $this->ownerPays;
    }

    /**
     * Set blockRebusPayback
     *
     * @param string $blockRebusPayback
     * @return COfficesBlocks
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

    /**
     * Set ownerPaysHowmuch
     *
     * @param string $ownerPaysHowmuch
     * @return COfficesBlocks
     */
    public function setOwnerPaysHowmuch($ownerPaysHowmuch)
    {
        $this->ownerPaysHowmuch = $ownerPaysHowmuch;

        return $this;
    }

    /**
     * Get ownerPaysHowmuch
     *
     * @return string 
     */
    public function getOwnerPaysHowmuch()
    {
        return $this->ownerPaysHowmuch;
    }

    /**
     * Set slcomments
     *
     * @param string $slcomments
     * @return COfficesBlocks
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
     * Set comments
     *
     * @param string $comments
     * @return COfficesBlocks
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
     * Set commentsExport
     *
     * @param string $commentsExport
     * @return COfficesBlocks
     */
    public function setCommentsExport($commentsExport)
    {
        $this->commentsExport = $commentsExport;

        return $this;
    }

    /**
     * Get commentsExport
     *
     * @return string 
     */
    public function getCommentsExport()
    {
        return $this->commentsExport;
    }

    /**
     * Set banner
     *
     * @param boolean $banner
     * @return COfficesBlocks
     */
    public function setBanner($banner)
    {
        $this->banner = $banner;

        return $this;
    }

    /**
     * Get banner
     *
     * @return boolean 
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * Set bannerTags
     *
     * @param string $bannerTags
     * @return COfficesBlocks
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
     * Set onsite
     *
     * @param boolean $onsite
     * @return COfficesBlocks
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
     * Set clyentId
     *
     * @param integer $clyentId
     * @return COfficesBlocks
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
     * Set clyetntContact
     *
     * @param string $clyetntContact
     * @return COfficesBlocks
     */
    public function setClyetntContact($clyetntContact)
    {
        $this->clyetntContact = $clyetntContact;

        return $this;
    }

    /**
     * Get clyetntContact
     *
     * @return string 
     */
    public function getClyetntContact()
    {
        return $this->clyetntContact;
    }

    /**
     * Set prozvonContact
     *
     * @param string $prozvonContact
     * @return COfficesBlocks
     */
    public function setProzvonContact($prozvonContact)
    {
        $this->prozvonContact = $prozvonContact;

        return $this;
    }

    /**
     * Get prozvonContact
     *
     * @return string 
     */
    public function getProzvonContact()
    {
        return $this->prozvonContact;
    }

    /**
     * Set cJperson
     *
     * @param boolean $cJperson
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * Set dtUpdate
     *
     * @param \DateTime $dtUpdate
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * Set dtPromoFull
     *
     * @param \DateTime $dtPromoFull
     * @return COfficesBlocks
     */
    public function setDtPromoFull($dtPromoFull)
    {
        $this->dtPromoFull = $dtPromoFull;

        return $this;
    }

    /**
     * Get dtPromoFull
     *
     * @return \DateTime 
     */
    public function getDtPromoFull()
    {
        return $this->dtPromoFull;
    }

    /**
     * Set dtInsert
     *
     * @param \DateTime $dtInsert
     * @return COfficesBlocks
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
     * Set result
     *
     * @param integer $result
     * @return COfficesBlocks
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
     * Set verifed
     *
     * @param boolean $verifed
     * @return COfficesBlocks
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
     * Set paperdb
     *
     * @param boolean $paperdb
     * @return COfficesBlocks
     */
    public function setPaperdb($paperdb)
    {
        $this->paperdb = $paperdb;

        return $this;
    }

    /**
     * Get paperdb
     *
     * @return boolean 
     */
    public function getPaperdb()
    {
        return $this->paperdb;
    }

    /**
     * Set special4site
     *
     * @param boolean $special4site
     * @return COfficesBlocks
     */
    public function setSpecial4site($special4site)
    {
        $this->special4site = $special4site;

        return $this;
    }

    /**
     * Get special4site
     *
     * @return boolean 
     */
    public function getSpecial4site()
    {
        return $this->special4site;
    }

    /**
     * Set export
     *
     * @param boolean $export
     * @return COfficesBlocks
     */
    public function setExport($export)
    {
        $this->export = $export;

        return $this;
    }

    /**
     * Get export
     *
     * @return boolean 
     */
    public function getExport()
    {
        return $this->export;
    }

    /**
     * Set export2site
     *
     * @param boolean $export2site
     * @return COfficesBlocks
     */
    public function setExport2site($export2site)
    {
        $this->export2site = $export2site;

        return $this;
    }

    /**
     * Get export2site
     *
     * @return boolean 
     */
    public function getExport2site()
    {
        return $this->export2site;
    }

    /**
     * Set export2cian
     *
     * @param boolean $export2cian
     * @return COfficesBlocks
     */
    public function setExport2cian($export2cian)
    {
        $this->export2cian = $export2cian;

        return $this;
    }

    /**
     * Get export2cian
     *
     * @return boolean 
     */
    public function getExport2cian()
    {
        return $this->export2cian;
    }

    /**
     * Set export2yandex
     *
     * @param boolean $export2yandex
     * @return COfficesBlocks
     */
    public function setExport2yandex($export2yandex)
    {
        $this->export2yandex = $export2yandex;

        return $this;
    }

    /**
     * Get export2yandex
     *
     * @return boolean 
     */
    public function getExport2yandex()
    {
        return $this->export2yandex;
    }

    /**
     * Set export2avito
     *
     * @param boolean $export2avito
     * @return COfficesBlocks
     */
    public function setExport2avito($export2avito)
    {
        $this->export2avito = $export2avito;

        return $this;
    }

    /**
     * Get export2avito
     *
     * @return boolean 
     */
    public function getExport2avito()
    {
        return $this->export2avito;
    }

    /**
     * Set export2irr
     *
     * @param boolean $export2irr
     * @return COfficesBlocks
     */
    public function setExport2irr($export2irr)
    {
        $this->export2irr = $export2irr;

        return $this;
    }

    /**
     * Get export2irr
     *
     * @return boolean 
     */
    public function getExport2irr()
    {
        return $this->export2irr;
    }

    /**
     * Set export2irrPremium
     *
     * @param boolean $export2irrPremium
     * @return COfficesBlocks
     */
    public function setExport2irrPremium($export2irrPremium)
    {
        $this->export2irrPremium = $export2irrPremium;

        return $this;
    }

    /**
     * Get export2irrPremium
     *
     * @return boolean 
     */
    public function getExport2irrPremium()
    {
        return $this->export2irrPremium;
    }

    /**
     * Set agent
     *
     * @param integer $agent
     * @return COfficesBlocks
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
     * Set deleted
     *
     * @param boolean $deleted
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * @return COfficesBlocks
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
     * Set agrStatus
     *
     * @param integer $agrStatus
     * @return COfficesBlocks
     */
    public function setAgrStatus($agrStatus)
    {
        $this->agrStatus = $agrStatus;

        return $this;
    }

    /**
     * Get agrStatus
     *
     * @return integer 
     */
    public function getAgrStatus()
    {
        return $this->agrStatus;
    }

    /**
     * Set agrContragent
     *
     * @param string $agrContragent
     * @return COfficesBlocks
     */
    public function setAgrContragent($agrContragent)
    {
        $this->agrContragent = $agrContragent;

        return $this;
    }

    /**
     * Get agrContragent
     *
     * @return string 
     */
    public function getAgrContragent()
    {
        return $this->agrContragent;
    }

    /**
     * Set agrLimit
     *
     * @param \DateTime $agrLimit
     * @return COfficesBlocks
     */
    public function setAgrLimit($agrLimit)
    {
        $this->agrLimit = $agrLimit;

        return $this;
    }

    /**
     * Get agrLimit
     *
     * @return \DateTime 
     */
    public function getAgrLimit()
    {
        return $this->agrLimit;
    }

    /**
     * Set agrCond
     *
     * @param string $agrCond
     * @return COfficesBlocks
     */
    public function setAgrCond($agrCond)
    {
        $this->agrCond = $agrCond;

        return $this;
    }

    /**
     * Get agrCond
     *
     * @return string 
     */
    public function getAgrCond()
    {
        return $this->agrCond;
    }

    /**
     * Set advertisingBuzzword
     *
     * @param integer $advertisingBuzzword
     * @return COfficesBlocks
     */
    public function setAdvertisingBuzzword($advertisingBuzzword)
    {
        $this->advertisingBuzzword = $advertisingBuzzword;

        return $this;
    }

    /**
     * Get advertisingBuzzword
     *
     * @return integer 
     */
    public function getAdvertisingBuzzword()
    {
        return $this->advertisingBuzzword;
    }

    /**
     * Set cianType
     *
     * @param string $cianType
     * @return COfficesBlocks
     */
    public function setCianType($cianType)
    {
        $this->cianType = $cianType;

        return $this;
    }

    /**
     * Get cianType
     *
     * @return string 
     */
    public function getCianType()
    {
        return $this->cianType;
    }

    /**
     * Set advertisingBuzzwordPosition
     *
     * @param integer $advertisingBuzzwordPosition
     * @return COfficesBlocks
     */
    public function setAdvertisingBuzzwordPosition($advertisingBuzzwordPosition)
    {
        $this->advertisingBuzzwordPosition = $advertisingBuzzwordPosition;

        return $this;
    }

    /**
     * Get advertisingBuzzwordPosition
     *
     * @return integer 
     */
    public function getAdvertisingBuzzwordPosition()
    {
        return $this->advertisingBuzzwordPosition;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return COfficesBlocks
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set main2site
     *
     * @param boolean $main2site
     * @return COfficesBlocks
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

    /**
     * Set agent2
     *
     * @param string $agent2
     * @return COfficesBlocks
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
     * Set floor
     *
     * @param integer $floor
     * @return COfficesBlocks
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * Get floor
     *
     * @return integer 
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Set reklamaUrlsCian
     *
     * @param string $reklamaUrlsCian
     * @return COfficesBlocks
     */
    public function setReklamaUrlsCian($reklamaUrlsCian)
    {
        $this->reklamaUrlsCian = $reklamaUrlsCian;

        return $this;
    }

    /**
     * Get reklamaUrlsCian
     *
     * @return string 
     */
    public function getReklamaUrlsCian()
    {
        return $this->reklamaUrlsCian;
    }

    /**
     * Set reklamaUrlsCianUpd
     *
     * @param \DateTime $reklamaUrlsCianUpd
     * @return COfficesBlocks
     */
    public function setReklamaUrlsCianUpd($reklamaUrlsCianUpd)
    {
        $this->reklamaUrlsCianUpd = $reklamaUrlsCianUpd;

        return $this;
    }

    /**
     * Get reklamaUrlsCianUpd
     *
     * @return \DateTime 
     */
    public function getReklamaUrlsCianUpd()
    {
        return $this->reklamaUrlsCianUpd;
    }

    /**
     * Set reklamaUrlsIrr
     *
     * @param string $reklamaUrlsIrr
     * @return COfficesBlocks
     */
    public function setReklamaUrlsIrr($reklamaUrlsIrr)
    {
        $this->reklamaUrlsIrr = $reklamaUrlsIrr;

        return $this;
    }

    /**
     * Get reklamaUrlsIrr
     *
     * @return string 
     */
    public function getReklamaUrlsIrr()
    {
        return $this->reklamaUrlsIrr;
    }

    /**
     * Set reklamaUrlsIrrUpd
     *
     * @param \DateTime $reklamaUrlsIrrUpd
     * @return COfficesBlocks
     */
    public function setReklamaUrlsIrrUpd($reklamaUrlsIrrUpd)
    {
        $this->reklamaUrlsIrrUpd = $reklamaUrlsIrrUpd;

        return $this;
    }

    /**
     * Get reklamaUrlsIrrUpd
     *
     * @return \DateTime 
     */
    public function getReklamaUrlsIrrUpd()
    {
        return $this->reklamaUrlsIrrUpd;
    }

    /**
     * Set reklamaUrlsAfy
     *
     * @param string $reklamaUrlsAfy
     * @return COfficesBlocks
     */
    public function setReklamaUrlsAfy($reklamaUrlsAfy)
    {
        $this->reklamaUrlsAfy = $reklamaUrlsAfy;

        return $this;
    }

    /**
     * Get reklamaUrlsAfy
     *
     * @return string 
     */
    public function getReklamaUrlsAfy()
    {
        return $this->reklamaUrlsAfy;
    }

    /**
     * Set reklamaUrlsAfyUpd
     *
     * @param \DateTime $reklamaUrlsAfyUpd
     * @return COfficesBlocks
     */
    public function setReklamaUrlsAfyUpd($reklamaUrlsAfyUpd)
    {
        $this->reklamaUrlsAfyUpd = $reklamaUrlsAfyUpd;

        return $this;
    }

    /**
     * Get reklamaUrlsAfyUpd
     *
     * @return \DateTime 
     */
    public function getReklamaUrlsAfyUpd()
    {
        return $this->reklamaUrlsAfyUpd;
    }

    /**
     * Set dtExportYandex
     *
     * @param \DateTime $dtExportYandex
     * @return COfficesBlocks
     */
    public function setDtExportYandex($dtExportYandex)
    {
        $this->dtExportYandex = $dtExportYandex;

        return $this;
    }

    /**
     * Get dtExportYandex
     *
     * @return \DateTime 
     */
    public function getDtExportYandex()
    {
        return $this->dtExportYandex;
    }
}
