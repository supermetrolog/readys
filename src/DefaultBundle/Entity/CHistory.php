<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CHistory
 *
 * @ORM\Table(name="c_history", indexes={@ORM\Index(name="tbl_name", columns={"tbl_name"}), @ORM\Index(name="agent", columns={"agent"}), @ORM\Index(name="dt_insert", columns={"dt_insert"}), @ORM\Index(name="tbl_name_agent_dt_insert", columns={"tbl_name", "agent", "dt_insert"}), @ORM\Index(name="tbl_id", columns={"tbl_id"})})
 * @ORM\Entity
 */
class CHistory
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
     * @ORM\Column(name="tbl_name", type="string", length=20, nullable=true)
     */
    private $tblName;

    /**
     * @var integer
     *
     * @ORM\Column(name="tbl_id", type="integer", nullable=true)
     */
    private $tblId;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent", type="integer", nullable=true)
     */
    private $agent;

    /**
     * @var string
     *
     * @ORM\Column(name="agent_name", type="string", length=50, nullable=true)
     */
    private $agentName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_insert", type="datetime", nullable=true)
     */
    private $dtInsert;



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
     * Set tblName
     *
     * @param string $tblName
     * @return CHistory
     */
    public function setTblName($tblName)
    {
        $this->tblName = $tblName;

        return $this;
    }

    /**
     * Get tblName
     *
     * @return string 
     */
    public function getTblName()
    {
        return $this->tblName;
    }

    /**
     * Set tblId
     *
     * @param integer $tblId
     * @return CHistory
     */
    public function setTblId($tblId)
    {
        $this->tblId = $tblId;

        return $this;
    }

    /**
     * Get tblId
     *
     * @return integer 
     */
    public function getTblId()
    {
        return $this->tblId;
    }

    /**
     * Set agent
     *
     * @param integer $agent
     * @return CHistory
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;

        return $this;
    }

    /**
     * Get agent
     *
     * @return integer 
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Set agentName
     *
     * @param string $agentName
     * @return CHistory
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
     * Set description
     *
     * @param string $description
     * @return CHistory
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dtInsert
     *
     * @param \DateTime $dtInsert
     * @return CHistory
     */
    public function setDtInsert($dtInsert)
    {
        $this->dtInsert = $dtInsert;

        return $this;
    }

    /**
     * Get dtInsert
     *
     * @return \DateTime 
     */
    public function getDtInsert()
    {
        return $this->dtInsert;
    }
}
