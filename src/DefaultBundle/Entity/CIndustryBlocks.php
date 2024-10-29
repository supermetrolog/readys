<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CIndustryBlocks
 *
 * @ORM\Table(name="c_industry_blocks")
 * @ORM\Entity(repositoryClass="DefaultBundle\Repository\CIndustryBlocksRepository")
 */
class CIndustryBlocks
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
     * @ORM\Column(name="id_visual", type="integer", nullable=true)
     */
    private $idVisual;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true)
     */
    private $parentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="area", type="integer", nullable=true)
     */
    private $area;

    /**
     * @var integer
     *
     * @ORM\Column(name="area2", type="integer", nullable=true)
     */
    private $area2;

    /**
     * @var integer
     */
    private $palletMest;

    /**
     * @var integer
     */
    private $palletMest2;

    /**
     * @var integer
     */
    private $areaMezz;

    /**
     * @var integer
     */
    private $areaOffice;

    /**
     * @var integer
     *
     * @ORM\Column(name="floor", type="integer", nullable=true)
     */
    private $floor;

    /**
     * @var integer
     *
     * @ORM\Column(name="floor_type", type="string", length=255, nullable=false)
     */
    private $floorType;

    /**
     * @var integer
     *
     * @ORM\Column(name="ceiling_height", type="integer", nullable=false)
     */
    private $ceilingHeight;

    /**
     * @var integer
     *
     * @ORM\Column(name="ceiling_height2", type="integer", nullable=false)
     */
    private $ceilingHeight2;

    /**
     * @var string
     */
    private $floorLevel;

    /**
     * @var integer
     */
    private $temp;

    /**
     * @var string
     */
    private $power;

    /**
     * @var string
     */
    private $priceInc;

    /**
     * @var string
     */
    private $priceInc2;

    /**
     * @var string
     */
    private $priceIncOffice;

    /**
     * @var string
     */
    private $priceInc2Office;

    /**
     * @var integer
     *
     * @ORM\Column(name="rent_price", type="integer", nullable=false)
     */
    private $rentPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="rent_price_exp", type="integer", nullable=false)
     */
    private $rentPriceExp;

    /**
     * @var integer
     */
    private $rentPriceCom;

    /**
     * @var integer
     */
    private $safePriceRack;

    /**
     * @var integer
     */
    private $safePriceRackOversized;

    /**
     * @var integer
     */
    private $safePriceCell;

    /**
     * @var integer
     */
    private $safePriceFloor;

    /**
     * @var integer
     */
    private $safePriceFloorOversized;

    /**
     * @var string
     */
    private $rentPayopt;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_price", type="integer", nullable=false)
     */
    private $salePrice;

    /**
     * @var integer
     */
    private $mezzPrice;

    /**
     * @var integer
     */
    private $officePrice;

    /**
     * @var string
     */
    private $descriptionHandmade;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $descriptionHandmadeUse;

    /**
     * @var \DateTime
     */
    private $dtUpdate;

    /**
     * @var \DateTime
     */
    private $dtUpdateFull;

    /**
     * @var boolean
     */
    private $deleted;

    /**
     * @var string
     */
    private $photos;

    /**
     * @var integer
     */
    private $dealType;

    /**
     * @var integer
     *
     * @ORM\Column(name="heated", type="integer", nullable=false)
     */
    private $heated;

    /**
     * @var integer
     */
    private $collonMesh;

    /**
     * @var string
     */
    private $floorLoad;

    /**
     * @var integer
     */
    private $mezzLoad;

    /**
     * @var integer
     */
    private $gatesNumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="gate_type", type="integer", nullable=false)
     */
    private $gateType;

    /**
     * @var integer
     */
    private $warehouseEquipment;

    /**
     * @var string
     */
    private $finishing;

    /**
     * @var boolean
     */
    private $importCian;

    /**
     * @var boolean
     */
    private $importIrr;

    /**
     * @var boolean
     */
    private $importIrrVip;

    /**
     * @var boolean
     */
    private $importIrrPremium;

    /**
     * @var boolean
     */
    private $importIrrMarkup;

    /**
     * @var boolean
     */
    private $importIrrPushup;

    /**
     * @var boolean
     */
    private $importYandex;

    /**
     * @var boolean
     */
    private $importFree;

    /**
     * @var boolean
     */
    private $importCianPremium;

    /**
     * @var boolean
     */
    private $importCianTop3;

    /**
     * @var boolean
     */
    private $importCianHl;

    /**
     * @var integer
     *
     * @ORM\Column(name="rent_currency", type="integer", nullable=false)
     */
    private $rentCurrency;

    /**
     * @var integer
     *
     * @ORM\Column(name="sale_currency", type="integer", nullable=false)
     */
    private $saleCurrency;

    /**
     * @var integer
     *
     * @ORM\Column(name="mezz_currency", type="integer", nullable=false)
     */
    private $mezzCurrency;

    /**
     * @var integer
     *
     * @ORM\Column(name="office_currency", type="integer", nullable=false)
     */
    private $officeCurrency;

    /**
     * @var string
     */
    private $telphers;

    /**
     * @var string
     */
    private $catheads;

    /**
     * @var string
     */
    private $overheadCranes;

    /**
     * @var string
     */
    private $sElevators;

    /**
     * @var integer
     */
    private $result;

    /**
     * @var string
     */
    private $payinc;

    /**
     * @var integer
     */
    private $payincOpex;

    /**
     * @var integer
     */
    private $payincHeat;

    /**
     * @var integer
     */
    private $payincWater;

    /**
     * @var integer
     */
    private $payincE;

    /**
     * @var boolean
     *
     * @ORM\Column(name="onsite_noprice", type="boolean", nullable=false)
     */
    private $onsiteNoprice;

    /**
     * Set idVisual
     *
     * @param integer $idVisual
     * @return CIndustryBlocks
     */
    public function setIdVisual($idVisual)
    {
        $this->idVisual = $idVisual;

        return $this;
    }

    /**
     * Get idVisual
     *
     * @return integer 
     */
    public function getIdVisual()
    {
        return $this->idVisual;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     * @return CIndustryBlocks
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
     * Set area
     *
     * @param integer $area
     * @return CIndustryBlocks
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
     * Set area2
     *
     * @param integer $area2
     * @return CIndustryBlocks
     */
    public function setArea2($area2)
    {
        $this->area2 = $area2;

        return $this;
    }

    /**
     * Get area2
     *
     * @return integer 
     */
    public function getArea2()
    {
        return $this->area2;
    }

    /**
     * Set palletMest
     *
     * @param integer $palletMest
     * @return CIndustryBlocks
     */
    public function setPalletMest($palletMest)
    {
        $this->palletMest = $palletMest;

        return $this;
    }

    /**
     * Get palletMest
     *
     * @return integer 
     */
    public function getPalletMest()
    {
        return $this->palletMest;
    }

    /**
     * Set palletMest2
     *
     * @param integer $palletMest2
     * @return CIndustryBlocks
     */
    public function setPalletMest2($palletMest2)
    {
        $this->palletMest2 = $palletMest2;

        return $this;
    }

    /**
     * Get palletMest2
     *
     * @return integer 
     */
    public function getPalletMest2()
    {
        return $this->palletMest2;
    }

    /**
     * Set areaMezz
     *
     * @param integer $areaMezz
     * @return CIndustryBlocks
     */
    public function setAreaMezz($areaMezz)
    {
        $this->areaMezz = $areaMezz;

        return $this;
    }

    /**
     * Get areaMezz
     *
     * @return integer 
     */
    public function getAreaMezz()
    {
        return $this->areaMezz;
    }

    /**
     * Set areaOffice
     *
     * @param integer $areaOffice
     * @return CIndustryBlocks
     */
    public function setAreaOffice($areaOffice)
    {
        $this->areaOffice = $areaOffice;

        return $this;
    }

    /**
     * Get areaOffice
     *
     * @return integer 
     */
    public function getAreaOffice()
    {
        return $this->areaOffice;
    }

    /**
     * Set floor
     *
     * @param integer $floor
     * @return CIndustryBlocks
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
     * Set floorType
     *
     * @param integer $floorType
     * @return CIndustryBlocks
     */
    public function setFloorType($floorType)
    {
        $this->floorType = $floorType;

        return $this;
    }

    /**
     * Get floorType
     *
     * @return integer 
     */
    public function getFloorType()
    {
        return $this->floorType;
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
     * Get ceilingHeight2
     *
     * @return integer
     */
    public function getCeilingHeight2()
    {
        return $this->ceilingHeight2;
    }

    /**
     * Set floorLevel
     *
     * @param string $floorLevel
     * @return CIndustryBlocks
     */
    public function setFloorLevel($floorLevel)
    {
        $this->floorLevel = $floorLevel;

        return $this;
    }

    /**
     * Get floorLevel
     *
     * @return string 
     */
    public function getFloorLevel()
    {
        return $this->floorLevel;
    }

    /**
     * Set temp
     *
     * @param integer $temp
     * @return CIndustryBlocks
     */
    public function setTemp($temp)
    {
        $this->temp = $temp;

        return $this;
    }

    /**
     * Get temp
     *
     * @return integer 
     */
    public function getTemp()
    {
        return $this->temp;
    }

    /**
     * Set power
     *
     * @param string $power
     * @return CIndustryBlocks
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
     * Set priceInc
     *
     * @param string $priceInc
     * @return CIndustryBlocks
     */
    public function setPriceInc($priceInc)
    {
        $this->priceInc = $priceInc;

        return $this;
    }

    /**
     * Get priceInc
     *
     * @return string 
     */
    public function getPriceInc()
    {
        return $this->priceInc;
    }

    /**
     * Set priceInc2
     *
     * @param string $priceInc2
     * @return CIndustryBlocks
     */
    public function setPriceInc2($priceInc2)
    {
        $this->priceInc2 = $priceInc2;

        return $this;
    }

    /**
     * Get priceInc2
     *
     * @return string 
     */
    public function getPriceInc2()
    {
        return $this->priceInc2;
    }

    /**
     * Set priceIncOffice
     *
     * @param string $priceIncOffice
     * @return CIndustryBlocks
     */
    public function setPriceIncOffice($priceIncOffice)
    {
        $this->priceIncOffice = $priceIncOffice;

        return $this;
    }

    /**
     * Get priceIncOffice
     *
     * @return string 
     */
    public function getPriceIncOffice()
    {
        return $this->priceIncOffice;
    }

    /**
     * Set priceInc2Office
     *
     * @param string $priceInc2Office
     * @return CIndustryBlocks
     */
    public function setPriceInc2Office($priceInc2Office)
    {
        $this->priceInc2Office = $priceInc2Office;

        return $this;
    }

    /**
     * Get priceInc2Office
     *
     * @return string 
     */
    public function getPriceInc2Office()
    {
        return $this->priceInc2Office;
    }

    /**
     * Set rentPrice
     *
     * @param integer $rentPrice
     * @return CIndustryBlocks
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
     * Set rentPriceExp
     *
     * @param integer $rentPriceExp
     * @return CIndustryBlocks
     */
    public function setRentPriceExp($rentPriceExp)
    {
        $this->rentPriceExp = $rentPriceExp;

        return $this;
    }

    /**
     * Get rentPriceExp
     *
     * @return integer 
     */
    public function getRentPriceExp()
    {
        return $this->rentPriceExp;
    }

    /**
     * Set rentPriceCom
     *
     * @param integer $rentPriceCom
     * @return CIndustryBlocks
     */
    public function setRentPriceCom($rentPriceCom)
    {
        $this->rentPriceCom = $rentPriceCom;

        return $this;
    }

    /**
     * Get rentPriceCom
     *
     * @return integer 
     */
    public function getRentPriceCom()
    {
        return $this->rentPriceCom;
    }

    /**
     * Set safePriceRack
     *
     * @param integer $safePriceRack
     * @return CIndustryBlocks
     */
    public function setSafePriceRack($safePriceRack)
    {
        $this->safePriceRack = $safePriceRack;

        return $this;
    }

    /**
     * Get safePriceRack
     *
     * @return integer 
     */
    public function getSafePriceRack()
    {
        return $this->safePriceRack;
    }

    /**
     * Set safePriceRackOversized
     *
     * @param integer $safePriceRackOversized
     * @return CIndustryBlocks
     */
    public function setSafePriceRackOversized($safePriceRackOversized)
    {
        $this->safePriceRackOversized = $safePriceRackOversized;

        return $this;
    }

    /**
     * Get safePriceRackOversized
     *
     * @return integer 
     */
    public function getSafePriceRackOversized()
    {
        return $this->safePriceRackOversized;
    }

    /**
     * Set safePriceCell
     *
     * @param integer $safePriceCell
     * @return CIndustryBlocks
     */
    public function setSafePriceCell($safePriceCell)
    {
        $this->safePriceCell = $safePriceCell;

        return $this;
    }

    /**
     * Get safePriceCell
     *
     * @return integer 
     */
    public function getSafePriceCell()
    {
        return $this->safePriceCell;
    }

    /**
     * Set safePriceFloor
     *
     * @param integer $safePriceFloor
     * @return CIndustryBlocks
     */
    public function setSafePriceFloor($safePriceFloor)
    {
        $this->safePriceFloor = $safePriceFloor;

        return $this;
    }

    /**
     * Get safePriceFloor
     *
     * @return integer 
     */
    public function getSafePriceFloor()
    {
        return $this->safePriceFloor;
    }

    /**
     * Set safePriceFloorOversized
     *
     * @param integer $safePriceFloorOversized
     * @return CIndustryBlocks
     */
    public function setSafePriceFloorOversized($safePriceFloorOversized)
    {
        $this->safePriceFloorOversized = $safePriceFloorOversized;

        return $this;
    }

    /**
     * Get safePriceFloorOversized
     *
     * @return integer 
     */
    public function getSafePriceFloorOversized()
    {
        return $this->safePriceFloorOversized;
    }

    /**
     * Set rentPayopt
     *
     * @param string $rentPayopt
     * @return CIndustryBlocks
     */
    public function setRentPayopt($rentPayopt)
    {
        $this->rentPayopt = $rentPayopt;

        return $this;
    }

    /**
     * Get rentPayopt
     *
     * @return string 
     */
    public function getRentPayopt()
    {
        return $this->rentPayopt;
    }

    /**
     * Set salePrice
     *
     * @param integer $salePrice
     * @return CIndustryBlocks
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
     * Set mezzPrice
     *
     * @param integer $mezzPrice
     * @return CIndustryBlocks
     */
    public function setMezzPrice($mezzPrice)
    {
        $this->mezzPrice = $mezzPrice;

        return $this;
    }

    /**
     * Get mezzPrice
     *
     * @return integer 
     */
    public function getMezzPrice()
    {
        return $this->mezzPrice;
    }

    /**
     * Set officePrice
     *
     * @param integer $officePrice
     * @return CIndustryBlocks
     */
    public function setOfficePrice($officePrice)
    {
        $this->officePrice = $officePrice;

        return $this;
    }

    /**
     * Get officePrice
     *
     * @return integer 
     */
    public function getOfficePrice()
    {
        return $this->officePrice;
    }

    /**
     * Set descriptionHandmade
     *
     * @param string $descriptionHandmade
     * @return CIndustryBlocks
     */
    public function setDescriptionHandmade($descriptionHandmade)
    {
        $this->descriptionHandmade = $descriptionHandmade;

        return $this;
    }

    /**
     * Get descriptionHandmade
     *
     * @return string 
     */
    public function getDescriptionHandmade()
    {
        return $this->descriptionHandmade;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return CIndustryBlocks
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
     * Set descriptionHandmadeUse
     *
     * @param boolean $descriptionHandmadeUse
     * @return CIndustryBlocks
     */
    public function setDescriptionHandmadeUse($descriptionHandmadeUse)
    {
        $this->descriptionHandmadeUse = $descriptionHandmadeUse;

        return $this;
    }

    /**
     * Get descriptionHandmadeUse
     *
     * @return boolean 
     */
    public function getDescriptionHandmadeUse()
    {
        return $this->descriptionHandmadeUse;
    }

    /**
     * Set dtUpdate
     *
     * @param \DateTime $dtUpdate
     * @return CIndustryBlocks
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
     * @return CIndustryBlocks
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
     * @return CIndustryBlocks
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
     * Set photos
     *
     * @param string $photos
     * @return CIndustryBlocks
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;

        return $this;
    }

    /**
     * Get photos
     *
     * @return string 
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Set dealType
     *
     * @param integer $dealType
     * @return CIndustryBlocks
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
     * Set heated
     *
     * @param boolean $heated
     * @return CIndustryBlocks
     */
    public function setHeated($heated)
    {
        $this->heated = $heated;

        return $this;
    }

    /**
     * Get heated
     *
     * @return boolean 
     */
    public function getHeated()
    {
        return $this->heated;
    }

    /**
     * Set collonMesh
     *
     * @param integer $collonMesh
     * @return CIndustryBlocks
     */
    public function setCollonMesh($collonMesh)
    {
        $this->collonMesh = $collonMesh;

        return $this;
    }

    /**
     * Get collonMesh
     *
     * @return integer 
     */
    public function getCollonMesh()
    {
        return $this->collonMesh;
    }

    /**
     * Set floorLoad
     *
     * @param string $floorLoad
     * @return CIndustryBlocks
     */
    public function setFloorLoad($floorLoad)
    {
        $this->floorLoad = $floorLoad;

        return $this;
    }

    /**
     * Get floorLoad
     *
     * @return string 
     */
    public function getFloorLoad()
    {
        return $this->floorLoad;
    }

    /**
     * Set mezzLoad
     *
     * @param integer $mezzLoad
     * @return CIndustryBlocks
     */
    public function setMezzLoad($mezzLoad)
    {
        $this->mezzLoad = $mezzLoad;

        return $this;
    }

    /**
     * Get mezzLoad
     *
     * @return integer 
     */
    public function getMezzLoad()
    {
        return $this->mezzLoad;
    }

    /**
     * Set gatesNumber
     *
     * @param integer $gatesNumber
     * @return CIndustryBlocks
     */
    public function setGatesNumber($gatesNumber)
    {
        $this->gatesNumber = $gatesNumber;

        return $this;
    }

    /**
     * Get gatesNumber
     *
     * @return integer 
     */
    public function getGatesNumber()
    {
        return $this->gatesNumber;
    }

    /**
     * Set gateType
     *
     * @param integer $gateType
     * @return CIndustryBlocks
     */
    public function setGateType($gateType)
    {
        $this->gateType = $gateType;

        return $this;
    }

    /**
     * Get gateType
     *
     * @return integer 
     */
    public function getGateType()
    {
        return $this->gateType;
    }

    /**
     * Set warehouseEquipment
     *
     * @param integer $warehouseEquipment
     * @return CIndustryBlocks
     */
    public function setWarehouseEquipment($warehouseEquipment)
    {
        $this->warehouseEquipment = $warehouseEquipment;

        return $this;
    }

    /**
     * Get warehouseEquipment
     *
     * @return integer 
     */
    public function getWarehouseEquipment()
    {
        return $this->warehouseEquipment;
    }

    /**
     * Set finishing
     *
     * @param string $finishing
     * @return CIndustryBlocks
     */
    public function setFinishing($finishing)
    {
        $this->finishing = $finishing;

        return $this;
    }

    /**
     * Get finishing
     *
     * @return string 
     */
    public function getFinishing()
    {
        return $this->finishing;
    }

    /**
     * Set importCian
     *
     * @param boolean $importCian
     * @return CIndustryBlocks
     */
    public function setImportCian($importCian)
    {
        $this->importCian = $importCian;

        return $this;
    }

    /**
     * Get importCian
     *
     * @return boolean 
     */
    public function getImportCian()
    {
        return $this->importCian;
    }

    /**
     * Set importIrr
     *
     * @param boolean $importIrr
     * @return CIndustryBlocks
     */
    public function setImportIrr($importIrr)
    {
        $this->importIrr = $importIrr;

        return $this;
    }

    /**
     * Get importIrr
     *
     * @return boolean 
     */
    public function getImportIrr()
    {
        return $this->importIrr;
    }

    /**
     * Set importIrrVip
     *
     * @param boolean $importIrrVip
     * @return CIndustryBlocks
     */
    public function setImportIrrVip($importIrrVip)
    {
        $this->importIrrVip = $importIrrVip;

        return $this;
    }

    /**
     * Get importIrrVip
     *
     * @return boolean 
     */
    public function getImportIrrVip()
    {
        return $this->importIrrVip;
    }

    /**
     * Set importIrrPremium
     *
     * @param boolean $importIrrPremium
     * @return CIndustryBlocks
     */
    public function setImportIrrPremium($importIrrPremium)
    {
        $this->importIrrPremium = $importIrrPremium;

        return $this;
    }

    /**
     * Get importIrrPremium
     *
     * @return boolean 
     */
    public function getImportIrrPremium()
    {
        return $this->importIrrPremium;
    }

    /**
     * Set importIrrMarkup
     *
     * @param boolean $importIrrMarkup
     * @return CIndustryBlocks
     */
    public function setImportIrrMarkup($importIrrMarkup)
    {
        $this->importIrrMarkup = $importIrrMarkup;

        return $this;
    }

    /**
     * Get importIrrMarkup
     *
     * @return boolean 
     */
    public function getImportIrrMarkup()
    {
        return $this->importIrrMarkup;
    }

    /**
     * Set importIrrPushup
     *
     * @param boolean $importIrrPushup
     * @return CIndustryBlocks
     */
    public function setImportIrrPushup($importIrrPushup)
    {
        $this->importIrrPushup = $importIrrPushup;

        return $this;
    }

    /**
     * Get importIrrPushup
     *
     * @return boolean 
     */
    public function getImportIrrPushup()
    {
        return $this->importIrrPushup;
    }

    /**
     * Set importYandex
     *
     * @param boolean $importYandex
     * @return CIndustryBlocks
     */
    public function setImportYandex($importYandex)
    {
        $this->importYandex = $importYandex;

        return $this;
    }

    /**
     * Get importYandex
     *
     * @return boolean 
     */
    public function getImportYandex()
    {
        return $this->importYandex;
    }

    /**
     * Set importFree
     *
     * @param boolean $importFree
     * @return CIndustryBlocks
     */
    public function setImportFree($importFree)
    {
        $this->importFree = $importFree;

        return $this;
    }

    /**
     * Get importFree
     *
     * @return boolean 
     */
    public function getImportFree()
    {
        return $this->importFree;
    }

    /**
     * Set importCianPremium
     *
     * @param boolean $importCianPremium
     * @return CIndustryBlocks
     */
    public function setImportCianPremium($importCianPremium)
    {
        $this->importCianPremium = $importCianPremium;

        return $this;
    }

    /**
     * Get importCianPremium
     *
     * @return boolean 
     */
    public function getImportCianPremium()
    {
        return $this->importCianPremium;
    }

    /**
     * Set importCianTop3
     *
     * @param boolean $importCianTop3
     * @return CIndustryBlocks
     */
    public function setImportCianTop3($importCianTop3)
    {
        $this->importCianTop3 = $importCianTop3;

        return $this;
    }

    /**
     * Get importCianTop3
     *
     * @return boolean 
     */
    public function getImportCianTop3()
    {
        return $this->importCianTop3;
    }

    /**
     * Set importCianHl
     *
     * @param boolean $importCianHl
     * @return CIndustryBlocks
     */
    public function setImportCianHl($importCianHl)
    {
        $this->importCianHl = $importCianHl;

        return $this;
    }

    /**
     * Get importCianHl
     *
     * @return boolean 
     */
    public function getImportCianHl()
    {
        return $this->importCianHl;
    }

    /**
     * Set rentCurrency
     *
     * @param integer $rentCurrency
     * @return CIndustryBlocks
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
     * Set saleCurrency
     *
     * @param integer $saleCurrency
     * @return CIndustryBlocks
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
     * Set mezzCurrency
     *
     * @param integer $mezzCurrency
     * @return CIndustryBlocks
     */
    public function setMezzCurrency($mezzCurrency)
    {
        $this->mezzCurrency = $mezzCurrency;

        return $this;
    }

    /**
     * Get mezzCurrency
     *
     * @return integer 
     */
    public function getMezzCurrency()
    {
        return $this->mezzCurrency;
    }

    /**
     * Set officeCurrency
     *
     * @param integer $officeCurrency
     * @return CIndustryBlocks
     */
    public function setOfficeCurrency($officeCurrency)
    {
        $this->officeCurrency = $officeCurrency;

        return $this;
    }

    /**
     * Get officeCurrency
     *
     * @return integer 
     */
    public function getOfficeCurrency()
    {
        return $this->officeCurrency;
    }

    /**
     * Set telphers
     *
     * @param string $telphers
     * @return CIndustryBlocks
     */
    public function setTelphers($telphers)
    {
        $this->telphers = $telphers;

        return $this;
    }

    /**
     * Get telphers
     *
     * @return string 
     */
    public function getTelphers()
    {
        return $this->telphers;
    }

    /**
     * Set catheads
     *
     * @param string $catheads
     * @return CIndustryBlocks
     */
    public function setCatheads($catheads)
    {
        $this->catheads = $catheads;

        return $this;
    }

    /**
     * Get catheads
     *
     * @return string 
     */
    public function getCatheads()
    {
        return $this->catheads;
    }

    /**
     * Set overheadCranes
     *
     * @param string $overheadCranes
     * @return CIndustryBlocks
     */
    public function setOverheadCranes($overheadCranes)
    {
        $this->overheadCranes = $overheadCranes;

        return $this;
    }

    /**
     * Get overheadCranes
     *
     * @return string 
     */
    public function getOverheadCranes()
    {
        return $this->overheadCranes;
    }

    /**
     * Set sElevators
     *
     * @param string $sElevators
     * @return CIndustryBlocks
     */
    public function setSElevators($sElevators)
    {
        $this->sElevators = $sElevators;

        return $this;
    }

    /**
     * Get sElevators
     *
     * @return string 
     */
    public function getSElevators()
    {
        return $this->sElevators;
    }

    /**
     * Set result
     *
     * @param integer $result
     * @return CIndustryBlocks
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
     * Set payinc
     *
     * @param string $payinc
     * @return CIndustryBlocks
     */
    public function setPayinc($payinc)
    {
        $this->payinc = $payinc;

        return $this;
    }

    /**
     * Get payinc
     *
     * @return string 
     */
    public function getPayinc()
    {
        return $this->payinc;
    }

    /**
     * Set payincOpex
     *
     * @param integer $payincOpex
     * @return CIndustryBlocks
     */
    public function setPayincOpex($payincOpex)
    {
        $this->payincOpex = $payincOpex;

        return $this;
    }

    /**
     * Get payincOpex
     *
     * @return integer 
     */
    public function getPayincOpex()
    {
        return $this->payincOpex;
    }

    /**
     * Set payincHeat
     *
     * @param integer $payincHeat
     * @return CIndustryBlocks
     */
    public function setPayincHeat($payincHeat)
    {
        $this->payincHeat = $payincHeat;

        return $this;
    }

    /**
     * Get payincHeat
     *
     * @return integer 
     */
    public function getPayincHeat()
    {
        return $this->payincHeat;
    }

    /**
     * Set payincWater
     *
     * @param integer $payincWater
     * @return CIndustryBlocks
     */
    public function setPayincWater($payincWater)
    {
        $this->payincWater = $payincWater;

        return $this;
    }

    /**
     * Get payincWater
     *
     * @return integer 
     */
    public function getPayincWater()
    {
        return $this->payincWater;
    }

    /**
     * Set payincE
     *
     * @param integer $payincE
     * @return CIndustryBlocks
     */
    public function setPayincE($payincE)
    {
        $this->payincE = $payincE;

        return $this;
    }

    /**
     * Get payincE
     *
     * @return integer 
     */
    public function getPayincE()
    {
        return $this->payincE;
    }

    /**
     * Set onsiteNoprice
     *
     * @param boolean $onsiteNoprice
     * @return CIndustryBlocks
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
