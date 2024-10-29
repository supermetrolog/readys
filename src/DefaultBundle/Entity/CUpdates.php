<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CUpdates
 *
 * @ORM\Table(name="c_updates")
 * @ORM\Entity
 */
class CUpdates
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
     * @ORM\Column(name="enabled", type="integer", nullable=false)
     */
    private $enabled;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="added", type="datetime", nullable=false)
     */
    private $added;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=1000, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", length=65535, nullable=false)
     */
    private $text;

    /**
     * @var boolean
     *
     * @ORM\Column(name="for_industry", type="boolean", nullable=false)
     */
    private $forIndustry;

    /**
     * @var boolean
     *
     * @ORM\Column(name="for_retail", type="boolean", nullable=false)
     */
    private $forRetail;

    /**
     * @var boolean
     *
     * @ORM\Column(name="for_lands", type="boolean", nullable=false)
     */
    private $forLands;

    /**
     * @var boolean
     *
     * @ORM\Column(name="for_offices", type="boolean", nullable=false)
     */
    private $forOffices;

    /**
     * @var integer
     *
     * @ORM\Column(name="timeout", type="integer", nullable=false)
     */
    private $timeout;



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
     * Set enabled
     *
     * @param integer $enabled
     * @return CUpdates
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return integer 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set added
     *
     * @param \DateTime $added
     * @return CUpdates
     */
    public function setAdded($added)
    {
        $this->added = $added;

        return $this;
    }

    /**
     * Get added
     *
     * @return \DateTime 
     */
    public function getAdded()
    {
        return $this->added;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return CUpdates
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
     * Set text
     *
     * @param string $text
     * @return CUpdates
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set forIndustry
     *
     * @param boolean $forIndustry
     * @return CUpdates
     */
    public function setForIndustry($forIndustry)
    {
        $this->forIndustry = $forIndustry;

        return $this;
    }

    /**
     * Get forIndustry
     *
     * @return boolean 
     */
    public function getForIndustry()
    {
        return $this->forIndustry;
    }

    /**
     * Set forRetail
     *
     * @param boolean $forRetail
     * @return CUpdates
     */
    public function setForRetail($forRetail)
    {
        $this->forRetail = $forRetail;

        return $this;
    }

    /**
     * Get forRetail
     *
     * @return boolean 
     */
    public function getForRetail()
    {
        return $this->forRetail;
    }

    /**
     * Set forLands
     *
     * @param boolean $forLands
     * @return CUpdates
     */
    public function setForLands($forLands)
    {
        $this->forLands = $forLands;

        return $this;
    }

    /**
     * Get forLands
     *
     * @return boolean 
     */
    public function getForLands()
    {
        return $this->forLands;
    }

    /**
     * Set forOffices
     *
     * @param boolean $forOffices
     * @return CUpdates
     */
    public function setForOffices($forOffices)
    {
        $this->forOffices = $forOffices;

        return $this;
    }

    /**
     * Get forOffices
     *
     * @return boolean 
     */
    public function getForOffices()
    {
        return $this->forOffices;
    }

    /**
     * Set timeout
     *
     * @param integer $timeout
     * @return CUpdates
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;

        return $this;
    }

    /**
     * Get timeout
     *
     * @return integer 
     */
    public function getTimeout()
    {
        return $this->timeout;
    }
}
