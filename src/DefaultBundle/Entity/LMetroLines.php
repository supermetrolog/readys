<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LMetroLines
 *
 * @ORM\Table(name="l_metro_lines", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class LMetroLines
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
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="coordinates", type="string", length=100, nullable=false)
     */
    private $coordinates;

    /**
     * @var integer
     *
     * @ORM\Column(name="x_pic", type="integer", nullable=true)
     */
    private $xPic;

    /**
     * @var integer
     *
     * @ORM\Column(name="y_pic", type="integer", nullable=true)
     */
    private $yPic;



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
     * @return LMetroLines
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
     * @return LMetroLines
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
     * Set xPic
     *
     * @param integer $xPic
     * @return LMetroLines
     */
    public function setXPic($xPic)
    {
        $this->xPic = $xPic;

        return $this;
    }

    /**
     * Get xPic
     *
     * @return integer 
     */
    public function getXPic()
    {
        return $this->xPic;
    }

    /**
     * Set yPic
     *
     * @param integer $yPic
     * @return LMetroLines
     */
    public function setYPic($yPic)
    {
        $this->yPic = $yPic;

        return $this;
    }

    /**
     * Get yPic
     *
     * @return integer 
     */
    public function getYPic()
    {
        return $this->yPic;
    }
}
