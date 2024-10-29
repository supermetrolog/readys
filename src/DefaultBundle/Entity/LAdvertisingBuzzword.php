<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LAdvertisingBuzzword
 *
 * @ORM\Table(name="l_advertising_buzzword")
 * @ORM\Entity
 */
class LAdvertisingBuzzword
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
     * @ORM\Column(name="title", type="string", length=1000, nullable=true)
     */
    private $title;

    /**
     * @var boolean
     *
     * @ORM\Column(name="norand", type="boolean", nullable=true)
     */
    private $norand;



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
     * @return LAdvertisingBuzzword
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
     * Set norand
     *
     * @param boolean $norand
     * @return LAdvertisingBuzzword
     */
    public function setNorand($norand)
    {
        $this->norand = $norand;

        return $this;
    }

    /**
     * Get norand
     *
     * @return boolean 
     */
    public function getNorand()
    {
        return $this->norand;
    }
}
