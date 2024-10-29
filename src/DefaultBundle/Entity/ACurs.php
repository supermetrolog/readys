<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ACurs
 *
 * @ORM\Table(name="a_curs")
 * @ORM\Entity
 */
class ACurs
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
     * @var \DateTime
     *
     * @ORM\Column(name="t_day", type="date", nullable=true)
     */
    private $tDay;

    /**
     * @var float
     *
     * @ORM\Column(name="dollar", type="float", precision=10, scale=4, nullable=true)
     */
    private $dollar;

    /**
     * @var float
     *
     * @ORM\Column(name="euro", type="float", precision=10, scale=4, nullable=true)
     */
    private $euro;



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
     * Set tDay
     *
     * @param \DateTime $tDay
     * @return ACurs
     */
    public function setTDay($tDay)
    {
        $this->tDay = $tDay;

        return $this;
    }

    /**
     * Get tDay
     *
     * @return \DateTime 
     */
    public function getTDay()
    {
        return $this->tDay;
    }

    /**
     * Set dollar
     *
     * @param float $dollar
     * @return ACurs
     */
    public function setDollar($dollar)
    {
        $this->dollar = $dollar;

        return $this;
    }

    /**
     * Get dollar
     *
     * @return float 
     */
    public function getDollar()
    {
        return $this->dollar;
    }

    /**
     * Set euro
     *
     * @param float $euro
     * @return ACurs
     */
    public function setEuro($euro)
    {
        $this->euro = $euro;

        return $this;
    }

    /**
     * Get euro
     *
     * @return float 
     */
    public function getEuro()
    {
        return $this->euro;
    }
}
