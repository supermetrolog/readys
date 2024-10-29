<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LBuildingTypes
 *
 * @ORM\Table(name="l_building_types")
 * @ORM\Entity
 */
class LBuildingTypes
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
     * @ORM\Column(name="maintype", type="integer", nullable=false)
     */
    private $maintype;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=true)
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
     * Set maintype
     *
     * @param integer $maintype
     * @return LBuildingTypes
     */
    public function setMaintype($maintype)
    {
        $this->maintype = $maintype;

        return $this;
    }

    /**
     * Get maintype
     *
     * @return integer 
     */
    public function getMaintype()
    {
        return $this->maintype;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return LBuildingTypes
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
