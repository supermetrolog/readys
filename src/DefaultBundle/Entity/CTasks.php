<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CTasks
 *
 * @ORM\Table(name="c_tasks")
 * @ORM\Entity
 */
class CTasks
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
     * @ORM\Column(name="tbl_name", type="string", length=200, nullable=true)
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
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_insert", type="date", nullable=true)
     */
    private $dtInsert;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_active", type="date", nullable=true)
     */
    private $dtActive;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=200, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="done", type="boolean", nullable=false)
     */
    private $done;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_done", type="date", nullable=true)
     */
    private $dtDone;

    /**
     * @var string
     *
     * @ORM\Column(name="result", type="text", length=65535, nullable=true)
     */
    private $result;



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
     * @return CTasks
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
     * @return CTasks
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
     * Set userId
     *
     * @param integer $userId
     * @return CTasks
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set dtInsert
     *
     * @param \DateTime $dtInsert
     * @return CTasks
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

    /**
     * Set dtActive
     *
     * @param \DateTime $dtActive
     * @return CTasks
     */
    public function setDtActive($dtActive)
    {
        $this->dtActive = $dtActive;

        return $this;
    }

    /**
     * Get dtActive
     *
     * @return \DateTime 
     */
    public function getDtActive()
    {
        return $this->dtActive;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return CTasks
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
     * Set description
     *
     * @param string $description
     * @return CTasks
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
     * Set done
     *
     * @param boolean $done
     * @return CTasks
     */
    public function setDone($done)
    {
        $this->done = $done;

        return $this;
    }

    /**
     * Get done
     *
     * @return boolean 
     */
    public function getDone()
    {
        return $this->done;
    }

    /**
     * Set dtDone
     *
     * @param \DateTime $dtDone
     * @return CTasks
     */
    public function setDtDone($dtDone)
    {
        $this->dtDone = $dtDone;

        return $this;
    }

    /**
     * Get dtDone
     *
     * @return \DateTime 
     */
    public function getDtDone()
    {
        return $this->dtDone;
    }

    /**
     * Set result
     *
     * @param string $result
     * @return CTasks
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return string 
     */
    public function getResult()
    {
        return $this->result;
    }
}
