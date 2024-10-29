<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LMetros
 *
 * @ORM\Table(name="l_metros", uniqueConstraints={@ORM\UniqueConstraint(name="title_m_lines", columns={"title", "m_lines"})})
 * @ORM\Entity
 */
class LMetros
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
     * @ORM\Column(name="title", type="string", length=100, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="coordinates", type="string", length=100, nullable=true)
     */
    private $coordinates;

    /**
     * @var string
     *
     * @ORM\Column(name="shape", type="string", length=20, nullable=true)
     */
    private $shape;

    /**
     * @var string
     *
     * @ORM\Column(name="m_lines", type="string", length=20, nullable=true)
     */
    private $mLines;

    /**
     * @var string
     *
     * @ORM\Column(name="m_x", type="string", length=20, nullable=true)
     */
    private $mX;

    /**
     * @var string
     *
     * @ORM\Column(name="m_y", type="string", length=20, nullable=true)
     */
    private $mY;

    /**
     * @var integer
     *
     * @ORM\Column(name="u_s", type="integer", nullable=true)
     */
    private $uS;

    /**
     * @var integer
     *
     * @ORM\Column(name="yandex_id", type="integer", nullable=true)
     */
    private $yandexId;

    /**
     * @var integer
     *
     * @ORM\Column(name="cntr", type="integer", nullable=true)
     */
    private $cntr;

    /**
     * @var integer
     *
     * @ORM\Column(name="ttk", type="integer", nullable=true)
     */
    private $ttk;

    /**
     * @var integer
     *
     * @ORM\Column(name="cian_id", type="integer", nullable=true)
     */
    private $cianId;

    /**
     * @var integer
     *
     * @ORM\Column(name="map_x", type="integer", nullable=true)
     */
    private $mapX;

    /**
     * @var integer
     *
     * @ORM\Column(name="map_y", type="integer", nullable=true)
     */
    private $mapY;

    /**
     * @var string
     *
     * @ORM\Column(name="map_html", type="string", length=2000, nullable=true)
     */
    private $mapHtml;



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
     * @return LMetros
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
     * Set coordinates
     *
     * @param string $coordinates
     * @return LMetros
     */
    public function setCoordinates($coordinates)
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * Get coordinates
     *
     * @return string 
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }

    /**
     * Set shape
     *
     * @param string $shape
     * @return LMetros
     */
    public function setShape($shape)
    {
        $this->shape = $shape;

        return $this;
    }

    /**
     * Get shape
     *
     * @return string 
     */
    public function getShape()
    {
        return $this->shape;
    }

    /**
     * Set mLines
     *
     * @param string $mLines
     * @return LMetros
     */
    public function setMLines($mLines)
    {
        $this->mLines = $mLines;

        return $this;
    }

    /**
     * Get mLines
     *
     * @return string 
     */
    public function getMLines()
    {
        return $this->mLines;
    }

    /**
     * Set mX
     *
     * @param string $mX
     * @return LMetros
     */
    public function setMX($mX)
    {
        $this->mX = $mX;

        return $this;
    }

    /**
     * Get mX
     *
     * @return string 
     */
    public function getMX()
    {
        return $this->mX;
    }

    /**
     * Set mY
     *
     * @param string $mY
     * @return LMetros
     */
    public function setMY($mY)
    {
        $this->mY = $mY;

        return $this;
    }

    /**
     * Get mY
     *
     * @return string 
     */
    public function getMY()
    {
        return $this->mY;
    }

    /**
     * Set uS
     *
     * @param integer $uS
     * @return LMetros
     */
    public function setUS($uS)
    {
        $this->uS = $uS;
        return $this;
    }

    /**
     * Get uS
     *
     * @return integer 
     */
    public function getUS()
    {
        return $this->uS;
    }

    /**
     * Set cntr
     *
     * @param integer $cntr
     * @return LMetros
     */
    public function setCntr($cntr)
    {
        $this->cntr = $cntr;

        return $this;
    }

    /**
     * Get cntr
     *
     * @return integer 
     */
    public function getCntr()
    {
        return $this->cntr;
    }

    /**
     * Set ttk
     *
     * @param integer $ttk
     * @return LMetros
     */
    public function setTtk($ttk)
    {
        $this->ttk = $ttk;

        return $this;
    }

    /**
     * Get ttk
     *
     * @return integer 
     */
    public function getTtk()
    {
        return $this->ttk;
    }

    /**
     * Set cianId
     *
     * @param integer $cianId
     * @return LMetros
     */
    public function setCianId($cianId)
    {
        $this->cianId = $cianId;

        return $this;
    }

    /**
     * Get cianId
     *
     * @return integer 
     */
    public function getCianId()
    {
        return $this->cianId;
    }

    /**
     * Set mapX
     *
     * @param integer $mapX
     * @return LMetros
     */
    public function setMapX($mapX)
    {
        $this->mapX = $mapX;

        return $this;
    }

    /**
     * Get mapX
     *
     * @return integer 
     */
    public function getMapX()
    {
        return $this->mapX;
    }

    /**
     * Set mapY
     *
     * @param integer $mapY
     * @return LMetros
     */
    public function setMapY($mapY)
    {
        $this->mapY = $mapY;

        return $this;
    }

    /**
     * Get mapY
     *
     * @return integer 
     */
    public function getMapY()
    {
        return $this->mapY;
    }

    /**
     * Set mapHtml
     *
     * @param string $mapHtml
     * @return LMetros
     */
    public function setMapHtml($mapHtml)
    {
        $this->mapHtml = $mapHtml;

        return $this;
    }

    /**
     * Get mapHtml
     *
     * @return string 
     */
    public function getMapHtml()
    {
        return $this->mapHtml;
    }

    /**
     * @return int
     */
    public function getYandexId()
    {
        return $this->yandexId;
    }
}
