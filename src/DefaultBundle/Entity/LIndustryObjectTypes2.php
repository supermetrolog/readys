<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LIndustryObjectTypes2
 *
 * @ORM\Table(name="l_industry_object_types2")
 * @ORM\Entity
 */
class LIndustryObjectTypes2
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
     * @ORM\Column(name="ord", type="integer", nullable=true)
     */
    private $ord;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent", type="integer", nullable=true)
     */
    private $parent;

    /**
     * @var boolean
     *
     * @ORM\Column(name="chield_req", type="boolean", nullable=true)
     */
    private $chieldReq;

    /**
     * @var string
     *
     * @ORM\Column(name="title_short", type="string", length=100, nullable=true)
     */
    private $titleShort;



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
     * @return LIndustryObjectTypes2
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
     * Set ord
     *
     * @param integer $ord
     * @return LIndustryObjectTypes2
     */
    public function setOrd($ord)
    {
        $this->ord = $ord;

        return $this;
    }

    /**
     * Get ord
     *
     * @return integer 
     */
    public function getOrd()
    {
        return $this->ord;
    }

    /**
     * Set parent
     *
     * @param integer $parent
     * @return LIndustryObjectTypes2
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return integer 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set chieldReq
     *
     * @param boolean $chieldReq
     * @return LIndustryObjectTypes2
     */
    public function setChieldReq($chieldReq)
    {
        $this->chieldReq = $chieldReq;

        return $this;
    }

    /**
     * Get chieldReq
     *
     * @return boolean 
     */
    public function getChieldReq()
    {
        return $this->chieldReq;
    }

    /**
     * Set titleShort
     *
     * @param string $titleShort
     * @return LIndustryObjectTypes2
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
}
