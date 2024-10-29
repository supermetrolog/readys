<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FiasStreets
 *
 * @ORM\Table(name="fias_streets", indexes={@ORM\Index(name="aoguid", columns={"aoguid"}), @ORM\Index(name="shortprefix", columns={"shortprefix"}), @ORM\Index(name="shortname", columns={"shortname"}), @ORM\Index(name="fullprefix", columns={"fullprefix"}), @ORM\Index(name="fullname", columns={"fullname"}), @ORM\Index(name="parentguid", columns={"parentguid"}), @ORM\Index(name="parentname", columns={"parentname"}), @ORM\Index(name="l_city", columns={"l_city"})})
 * @ORM\Entity
 */
class FiasStreets
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
     * @var string
     *
     * @ORM\Column(name="aoguid", type="string", length=36, nullable=true)
     */
    private $aoguid;

    /**
     * @var string
     *
     * @ORM\Column(name="shortprefix", type="string", length=10, nullable=true)
     */
    private $shortprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="shortname", type="string", length=120, nullable=true)
     */
    private $shortname;

    /**
     * @var string
     *
     * @ORM\Column(name="fullprefix", type="string", length=50, nullable=true)
     */
    private $fullprefix;

    /**
     * @var string
     *
     * @ORM\Column(name="fullname", type="string", length=120, nullable=true)
     */
    private $fullname;

    /**
     * @var string
     *
     * @ORM\Column(name="parentguid", type="string", length=36, nullable=true)
     */
    private $parentguid;

    /**
     * @var string
     *
     * @ORM\Column(name="parentname", type="string", length=120, nullable=true)
     */
    private $parentname;

    /**
     * @var integer
     *
     * @ORM\Column(name="l_city", type="integer", nullable=true)
     */
    private $lCity;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255, nullable=true)
     */
    private $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=true)
     */
    private $dateAdded;

    /**
     * @var string
     *
     * @ORM\Column(name="en", type="string", length=100, nullable=true)
     */
    private $en;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=100, nullable=true)
     */
    private $link;

    /**
     * @var float
     *
     * @ORM\Column(name="x_ya", type="float", precision=15, scale=6, nullable=true)
     */
    private $xYa;

    /**
     * @var float
     *
     * @ORM\Column(name="y_ya", type="float", precision=15, scale=6, nullable=true)
     */
    private $yYa;

    /**
     * @var string
     *
     * @ORM\Column(name="coords", type="text", length=65535, nullable=true)
     */
    private $coords;

    /**
     * @var string
     *
     * @ORM\Column(name="infrastructure", type="text", length=65535, nullable=true)
     */
    private $infrastructure;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=true)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="metro", type="string", length=255, nullable=true)
     */
    private $metro;

    /**
     * @var integer
     *
     * @ORM\Column(name="real_district", type="integer", nullable=true)
     */
    private $realDistrict;

    /**
     * @var integer
     *
     * @ORM\Column(name="real_area", type="integer", nullable=false)
     */
    private $realArea;

    /**
     * @var integer
     *
     * @ORM\Column(name="old_id", type="integer", nullable=false)
     */
    private $oldId;

    /**
     * @var string
     *
     * @ORM\Column(name="fias_city", type="string", length=64, nullable=false)
     */
    private $fiasCity;

    /**
     * @var string
     *
     * @ORM\Column(name="fias_location", type="string", length=64, nullable=false)
     */
    private $fiasLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="fias_area", type="string", length=64, nullable=false)
     */
    private $fiasArea;

    /**
     * @var string
     *
     * @ORM\Column(name="fias_region", type="string", length=64, nullable=false)
     */
    private $fiasRegion;

    /**
     * @var integer
     *
     * @ORM\Column(name="fias_regioncode", type="integer", nullable=false)
     */
    private $fiasRegioncode;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=1000, nullable=false)
     */
    private $title;



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
     * Set aoguid
     *
     * @param string $aoguid
     * @return FiasStreets
     */
    public function setAoguid($aoguid)
    {
        $this->aoguid = $aoguid;

        return $this;
    }

    /**
     * Get aoguid
     *
     * @return string 
     */
    public function getAoguid()
    {
        return $this->aoguid;
    }

    /**
     * Set shortprefix
     *
     * @param string $shortprefix
     * @return FiasStreets
     */
    public function setShortprefix($shortprefix)
    {
        $this->shortprefix = $shortprefix;

        return $this;
    }

    /**
     * Get shortprefix
     *
     * @return string 
     */
    public function getShortprefix()
    {
        return $this->shortprefix;
    }

    /**
     * Set shortname
     *
     * @param string $shortname
     * @return FiasStreets
     */
    public function setShortname($shortname)
    {
        $this->shortname = $shortname;

        return $this;
    }

    /**
     * Get shortname
     *
     * @return string 
     */
    public function getShortname()
    {
        return $this->shortname;
    }

    /**
     * Set fullprefix
     *
     * @param string $fullprefix
     * @return FiasStreets
     */
    public function setFullprefix($fullprefix)
    {
        $this->fullprefix = $fullprefix;

        return $this;
    }

    /**
     * Get fullprefix
     *
     * @return string 
     */
    public function getFullprefix()
    {
        return $this->fullprefix;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     * @return FiasStreets
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname
     *
     * @return string 
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set parentguid
     *
     * @param string $parentguid
     * @return FiasStreets
     */
    public function setParentguid($parentguid)
    {
        $this->parentguid = $parentguid;

        return $this;
    }

    /**
     * Get parentguid
     *
     * @return string 
     */
    public function getParentguid()
    {
        return $this->parentguid;
    }

    /**
     * Set parentname
     *
     * @param string $parentname
     * @return FiasStreets
     */
    public function setParentname($parentname)
    {
        $this->parentname = $parentname;

        return $this;
    }

    /**
     * Get parentname
     *
     * @return string 
     */
    public function getParentname()
    {
        return $this->parentname;
    }

    /**
     * Set lCity
     *
     * @param integer $lCity
     * @return FiasStreets
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
     * Set user
     *
     * @param string $user
     * @return FiasStreets
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     * @return FiasStreets
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime 
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set en
     *
     * @param string $en
     * @return FiasStreets
     */
    public function setEn($en)
    {
        $this->en = $en;

        return $this;
    }

    /**
     * Get en
     *
     * @return string 
     */
    public function getEn()
    {
        return $this->en;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return FiasStreets
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set xYa
     *
     * @param float $xYa
     * @return FiasStreets
     */
    public function setXYa($xYa)
    {
        $this->xYa = $xYa;

        return $this;
    }

    /**
     * Get xYa
     *
     * @return float 
     */
    public function getXYa()
    {
        return $this->xYa;
    }

    /**
     * Set yYa
     *
     * @param float $yYa
     * @return FiasStreets
     */
    public function setYYa($yYa)
    {
        $this->yYa = $yYa;

        return $this;
    }

    /**
     * Get yYa
     *
     * @return float 
     */
    public function getYYa()
    {
        return $this->yYa;
    }

    /**
     * Set coords
     *
     * @param string $coords
     * @return FiasStreets
     */
    public function setCoords($coords)
    {
        $this->coords = $coords;

        return $this;
    }

    /**
     * Get coords
     *
     * @return string 
     */
    public function getCoords()
    {
        return $this->coords;
    }

    /**
     * Set infrastructure
     *
     * @param string $infrastructure
     * @return FiasStreets
     */
    public function setInfrastructure($infrastructure)
    {
        $this->infrastructure = $infrastructure;

        return $this;
    }

    /**
     * Get infrastructure
     *
     * @return string 
     */
    public function getInfrastructure()
    {
        return $this->infrastructure;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return FiasStreets
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
     * Set content
     *
     * @param string $content
     * @return FiasStreets
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set metro
     *
     * @param string $metro
     * @return FiasStreets
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
     * Set realDistrict
     *
     * @param integer $realDistrict
     * @return FiasStreets
     */
    public function setRealDistrict($realDistrict)
    {
        $this->realDistrict = $realDistrict;

        return $this;
    }

    /**
     * Get realDistrict
     *
     * @return integer 
     */
    public function getRealDistrict()
    {
        return $this->realDistrict;
    }

    /**
     * Set realArea
     *
     * @param integer $realArea
     * @return FiasStreets
     */
    public function setRealArea($realArea)
    {
        $this->realArea = $realArea;

        return $this;
    }

    /**
     * Get realArea
     *
     * @return integer 
     */
    public function getRealArea()
    {
        return $this->realArea;
    }

    /**
     * Set oldId
     *
     * @param integer $oldId
     * @return FiasStreets
     */
    public function setOldId($oldId)
    {
        $this->oldId = $oldId;

        return $this;
    }

    /**
     * Get oldId
     *
     * @return integer 
     */
    public function getOldId()
    {
        return $this->oldId;
    }

    /**
     * Set fiasCity
     *
     * @param string $fiasCity
     * @return FiasStreets
     */
    public function setFiasCity($fiasCity)
    {
        $this->fiasCity = $fiasCity;

        return $this;
    }

    /**
     * Get fiasCity
     *
     * @return string 
     */
    public function getFiasCity()
    {
        return $this->fiasCity;
    }

    /**
     * Set fiasLocation
     *
     * @param string $fiasLocation
     * @return FiasStreets
     */
    public function setFiasLocation($fiasLocation)
    {
        $this->fiasLocation = $fiasLocation;

        return $this;
    }

    /**
     * Get fiasLocation
     *
     * @return string 
     */
    public function getFiasLocation()
    {
        return $this->fiasLocation;
    }

    /**
     * Set fiasArea
     *
     * @param string $fiasArea
     * @return FiasStreets
     */
    public function setFiasArea($fiasArea)
    {
        $this->fiasArea = $fiasArea;

        return $this;
    }

    /**
     * Get fiasArea
     *
     * @return string 
     */
    public function getFiasArea()
    {
        return $this->fiasArea;
    }

    /**
     * Set fiasRegion
     *
     * @param string $fiasRegion
     * @return FiasStreets
     */
    public function setFiasRegion($fiasRegion)
    {
        $this->fiasRegion = $fiasRegion;

        return $this;
    }

    /**
     * Get fiasRegion
     *
     * @return string 
     */
    public function getFiasRegion()
    {
        return $this->fiasRegion;
    }

    /**
     * Set fiasRegioncode
     *
     * @param integer $fiasRegioncode
     * @return FiasStreets
     */
    public function setFiasRegioncode($fiasRegioncode)
    {
        $this->fiasRegioncode = $fiasRegioncode;

        return $this;
    }

    /**
     * Get fiasRegioncode
     *
     * @return integer 
     */
    public function getFiasRegioncode()
    {
        return $this->fiasRegioncode;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return FiasStreets
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }
}
