<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LRegions
 *
 * @ORM\Table(name="l_regions")
 * @ORM\Entity
 */
class LRegions
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
     * @ORM\Column(name="order_desc", type="string", length=100, nullable=true)
     */
    private $orderDesc;

    /**
     * @var integer
     *
     * @ORM\Column(name="cian_id", type="integer", nullable=false)
     */
    private $cianId;



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
     * @return LRegions
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
     * Set orderDesc
     *
     * @param string $orderDesc
     * @return LRegions
     */
    public function setOrderDesc($orderDesc)
    {
        $this->orderDesc = $orderDesc;

        return $this;
    }

    /**
     * Get orderDesc
     *
     * @return string 
     */
    public function getOrderDesc()
    {
        return $this->orderDesc;
    }

    /**
     * Set cianId
     *
     * @param integer $cianId
     * @return LRegions
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
}
