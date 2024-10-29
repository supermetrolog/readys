<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LVillages
 *
 * @ORM\Table(name="l_villages")
 * @ORM\Entity
 */
class LVillages
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
     * @var integer
     *
     * @ORM\Column(name="district", type="integer", nullable=false)
     */
    private $district;

    /**
     * @var integer
     *
     * @ORM\Column(name="highway", type="integer", nullable=false)
     */
    private $highway;

    /**
     * @var integer
     *
     * @ORM\Column(name="highway2", type="integer", nullable=false)
     */
    private $highway2;

    /**
     * @var integer
     *
     * @ORM\Column(name="otmkad", type="integer", nullable=true)
     */
    private $otmkad;

    /**
     * @var float
     *
     * @ORM\Column(name="c_x", type="float", precision=15, scale=12, nullable=true)
     */
    private $cX;

    /**
     * @var float
     *
     * @ORM\Column(name="c_y", type="float", precision=15, scale=12, nullable=true)
     */
    private $cY;

    /**
     * @var string
     *
     * @ORM\Column(name="en", type="string", length=100, nullable=true)
     */
    private $en;



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
     * @return LVillages
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
     * Set district
     *
     * @param integer $district
     * @return LVillages
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
     * Set highway
     *
     * @param integer $highway
     * @return LVillages
     */
    public function setHighway($highway)
    {
        $this->highway = $highway;

        return $this;
    }

    /**
     * Get highway
     *
     * @return integer 
     */
    public function getHighway()
    {
        return $this->highway;
    }

    /**
     * Set highway2
     *
     * @param integer $highway2
     * @return LVillages
     */
    public function setHighway2($highway2)
    {
        $this->highway2 = $highway2;

        return $this;
    }

    /**
     * Get highway2
     *
     * @return integer 
     */
    public function getHighway2()
    {
        return $this->highway2;
    }

    /**
     * Set otmkad
     *
     * @param integer $otmkad
     * @return LVillages
     */
    public function setOtmkad($otmkad)
    {
        $this->otmkad = $otmkad;

        return $this;
    }

    /**
     * Get otmkad
     *
     * @return integer 
     */
    public function getOtmkad()
    {
        return $this->otmkad;
    }

    /**
     * Set cX
     *
     * @param float $cX
     * @return LVillages
     */
    public function setCX($cX)
    {
        $this->cX = $cX;

        return $this;
    }

    /**
     * Get cX
     *
     * @return float 
     */
    public function getCX()
    {
        return $this->cX;
    }

    /**
     * Set cY
     *
     * @param float $cY
     * @return LVillages
     */
    public function setCY($cY)
    {
        $this->cY = $cY;

        return $this;
    }

    /**
     * Get cY
     *
     * @return float 
     */
    public function getCY()
    {
        return $this->cY;
    }

    /**
     * Set en
     *
     * @param string $en
     * @return LVillages
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
}
