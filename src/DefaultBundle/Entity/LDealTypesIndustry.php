<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LDealTypesIndustry
 *
 * @ORM\Table(name="l_deal_types_industry")
 * @ORM\Entity
 */
class LDealTypesIndustry
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
     * @var integer
     *
     * @ORM\Column(name="cian_id", type="integer", nullable=true)
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
     * @return LDealTypesIndustry
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
     * Set cianId
     *
     * @param integer $cianId
     * @return LDealTypesIndustry
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
