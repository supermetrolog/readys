<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LDirections
 *
 * @ORM\Table(name="l_directions")
 * @ORM\Entity
 */
class LDirections
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
     * @ORM\Column(name="title", type="string", length=20, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="title_en", type="string", length=20, nullable=true)
     */
    private $titleEn;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=20, nullable=true)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="sklad_rent_title", type="text", length=65535, nullable=true)
     */
    private $skladRentTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="sklad_rent_text", type="text", length=65535, nullable=true)
     */
    private $skladRentText;

    /**
     * @var string
     *
     * @ORM\Column(name="sklad_sale_title", type="text", length=65535, nullable=true)
     */
    private $skladSaleTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="sklad_sale_text", type="text", length=65535, nullable=true)
     */
    private $skladSaleText;

    /**
     * @var string
     *
     * @ORM\Column(name="industry_rent_title", type="text", length=65535, nullable=true)
     */
    private $industryRentTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="industry_rent_text", type="text", length=65535, nullable=true)
     */
    private $industryRentText;

    /**
     * @var string
     *
     * @ORM\Column(name="industry_sale_title", type="text", length=65535, nullable=true)
     */
    private $industrySaleTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="industry_sale_text", type="text", length=65535, nullable=true)
     */
    private $industrySaleText;

    /**
     * @var string
     *
     * @ORM\Column(name="promland_title", type="text", length=65535, nullable=true)
     */
    private $promlandTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="promland_text", type="text", length=65535, nullable=true)
     */
    private $promlandText;

    /**
     * @var string
     *
     * @ORM\Column(name="coords", type="text", length=65535, nullable=true)
     */
    private $coords;

    /**
     * @var string
     *
     * @ORM\Column(name="title_short", type="string", length=200, nullable=true)
     */
    private $titleShort;

    /**
     * @var string
     *
     * @ORM\Column(name="title_short1", type="string", length=200, nullable=true)
     */
    private $titleShort1;



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
     * Set title
     *
     * @param string $title
     * @return LDirections
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

    /**
     * Set titleEn
     *
     * @param string $titleEn
     * @return LDirections
     */
    public function setTitleEn($titleEn)
    {
        $this->titleEn = $titleEn;

        return $this;
    }

    /**
     * Get titleEn
     *
     * @return string 
     */
    public function getTitleEn()
    {
        return $this->titleEn;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return LDirections
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
     * Set skladRentTitle
     *
     * @param string $skladRentTitle
     * @return LDirections
     */
    public function setSkladRentTitle($skladRentTitle)
    {
        $this->skladRentTitle = $skladRentTitle;

        return $this;
    }

    /**
     * Get skladRentTitle
     *
     * @return string 
     */
    public function getSkladRentTitle()
    {
        return $this->skladRentTitle;
    }

    /**
     * Set skladRentText
     *
     * @param string $skladRentText
     * @return LDirections
     */
    public function setSkladRentText($skladRentText)
    {
        $this->skladRentText = $skladRentText;

        return $this;
    }

    /**
     * Get skladRentText
     *
     * @return string 
     */
    public function getSkladRentText()
    {
        return $this->skladRentText;
    }

    /**
     * Set skladSaleTitle
     *
     * @param string $skladSaleTitle
     * @return LDirections
     */
    public function setSkladSaleTitle($skladSaleTitle)
    {
        $this->skladSaleTitle = $skladSaleTitle;

        return $this;
    }

    /**
     * Get skladSaleTitle
     *
     * @return string 
     */
    public function getSkladSaleTitle()
    {
        return $this->skladSaleTitle;
    }

    /**
     * Set skladSaleText
     *
     * @param string $skladSaleText
     * @return LDirections
     */
    public function setSkladSaleText($skladSaleText)
    {
        $this->skladSaleText = $skladSaleText;

        return $this;
    }

    /**
     * Get skladSaleText
     *
     * @return string 
     */
    public function getSkladSaleText()
    {
        return $this->skladSaleText;
    }

    /**
     * Set industryRentTitle
     *
     * @param string $industryRentTitle
     * @return LDirections
     */
    public function setIndustryRentTitle($industryRentTitle)
    {
        $this->industryRentTitle = $industryRentTitle;

        return $this;
    }

    /**
     * Get industryRentTitle
     *
     * @return string 
     */
    public function getIndustryRentTitle()
    {
        return $this->industryRentTitle;
    }

    /**
     * Set industryRentText
     *
     * @param string $industryRentText
     * @return LDirections
     */
    public function setIndustryRentText($industryRentText)
    {
        $this->industryRentText = $industryRentText;

        return $this;
    }

    /**
     * Get industryRentText
     *
     * @return string 
     */
    public function getIndustryRentText()
    {
        return $this->industryRentText;
    }

    /**
     * Set industrySaleTitle
     *
     * @param string $industrySaleTitle
     * @return LDirections
     */
    public function setIndustrySaleTitle($industrySaleTitle)
    {
        $this->industrySaleTitle = $industrySaleTitle;

        return $this;
    }

    /**
     * Get industrySaleTitle
     *
     * @return string 
     */
    public function getIndustrySaleTitle()
    {
        return $this->industrySaleTitle;
    }

    /**
     * Set industrySaleText
     *
     * @param string $industrySaleText
     * @return LDirections
     */
    public function setIndustrySaleText($industrySaleText)
    {
        $this->industrySaleText = $industrySaleText;

        return $this;
    }

    /**
     * Get industrySaleText
     *
     * @return string 
     */
    public function getIndustrySaleText()
    {
        return $this->industrySaleText;
    }

    /**
     * Set promlandTitle
     *
     * @param string $promlandTitle
     * @return LDirections
     */
    public function setPromlandTitle($promlandTitle)
    {
        $this->promlandTitle = $promlandTitle;

        return $this;
    }

    /**
     * Get promlandTitle
     *
     * @return string 
     */
    public function getPromlandTitle()
    {
        return $this->promlandTitle;
    }

    /**
     * Set promlandText
     *
     * @param string $promlandText
     * @return LDirections
     */
    public function setPromlandText($promlandText)
    {
        $this->promlandText = $promlandText;

        return $this;
    }

    /**
     * Get promlandText
     *
     * @return string 
     */
    public function getPromlandText()
    {
        return $this->promlandText;
    }

    /**
     * Set coords
     *
     * @param string $coords
     * @return LDirections
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
     * Set titleShort
     *
     * @param string $titleShort
     * @return LDirections
     */
    public function setTitleShort($titleShort)
    {
        $this->titleShort = $titleShort;

        return $this;
    }

    /**
     * Get titleShort
     *
     * @return string 
     */
    public function getTitleShort()
    {
        return $this->titleShort;
    }

    /**
     * Set titleShort1
     *
     * @param string $titleShort1
     * @return LDirections
     */
    public function setTitleShort1($titleShort1)
    {
        $this->titleShort1 = $titleShort1;

        return $this;
    }

    /**
     * Get titleShort1
     *
     * @return string 
     */
    public function getTitleShort1()
    {
        return $this->titleShort1;
    }
}
