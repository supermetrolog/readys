<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * COfficesCallsSms
 *
 * @ORM\Table(name="c_offices_calls_sms")
 * @ORM\Entity
 */
class COfficesCallsSms
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
     * @ORM\Column(name="tel", type="string", length=11, nullable=false)
     */
    private $tel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt", type="datetime", nullable=false)
     */
    private $dt;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_call", type="integer", nullable=false)
     */
    private $idCall;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent_id", type="integer", nullable=false)
     */
    private $agentId;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_name", type="string", length=200, nullable=false)
     */
    private $agentName;

    /**
     * @var string
     *
     * @ORM\Column(name="sms", type="string", length=1000, nullable=false)
     */
    private $sms;



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
     * Set tel
     *
     * @param string $tel
     * @return COfficesCallsSms
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set dt
     *
     * @param \DateTime $dt
     * @return COfficesCallsSms
     */
    public function setDt($dt)
    {
        $this->dt = $dt;

        return $this;
    }

    /**
     * Get dt
     *
     * @return \DateTime 
     */
    public function getDt()
    {
        return $this->dt;
    }

    /**
     * Set idCall
     *
     * @param integer $idCall
     * @return COfficesCallsSms
     */
    public function setIdCall($idCall)
    {
        $this->idCall = $idCall;

        return $this;
    }

    /**
     * Get idCall
     *
     * @return integer 
     */
    public function getIdCall()
    {
        return $this->idCall;
    }

    /**
     * Set agentId
     *
     * @param integer $agentId
     * @return COfficesCallsSms
     */
    public function setAgentId($agentId)
    {
        $this->agentId = $agentId;

        return $this;
    }

    /**
     * Get agentId
     *
     * @return integer 
     */
    public function getAgentId()
    {
        return $this->agentId;
    }

    /**
     * Set agentName
     *
     * @param string $agentName
     * @return COfficesCallsSms
     */
    public function setAgentName($agentName)
    {
        $this->agentName = $agentName;

        return $this;
    }

    /**
     * Get agentName
     *
     * @return string 
     */
    public function getAgentName()
    {
        return $this->agentName;
    }

    /**
     * Set sms
     *
     * @param string $sms
     * @return COfficesCallsSms
     */
    public function setSms($sms)
    {
        $this->sms = $sms;

        return $this;
    }

    /**
     * Get sms
     *
     * @return string 
     */
    public function getSms()
    {
        return $this->sms;
    }
}
