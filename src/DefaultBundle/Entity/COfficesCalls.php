<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * COfficesCalls
 *
 * @ORM\Table(name="c_offices_calls", indexes={@ORM\Index(name="dt_insert", columns={"dt_insert"}), @ORM\Index(name="agent", columns={"agent"}), @ORM\Index(name="infosource", columns={"infosource"}), @ORM\Index(name="request_type", columns={"request_type"}), @ORM\Index(name="call_status", columns={"call_status"}), @ORM\Index(name="oper", columns={"oper"}), @ORM\Index(name="deleted", columns={"deleted"})})
 * @ORM\Entity
 */
class COfficesCalls
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
     * @ORM\Column(name="c_fio1", type="string", length=200, nullable=true)
     */
    private $cFio1;

    /**
     * @var string
     *
     * @ORM\Column(name="c_phones1", type="string", length=200, nullable=true)
     */
    private $cPhones1;

    /**
     * @var string
     *
     * @ORM\Column(name="c_emails1", type="string", length=200, nullable=true)
     */
    private $cEmails1;

    /**
     * @var string
     *
     * @ORM\Column(name="c_company", type="string", length=200, nullable=true)
     */
    private $cCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="c_comments", type="text", length=65535, nullable=true)
     */
    private $cComments;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_insert", type="date", nullable=true)
     */
    private $dtInsert;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tm_insert", type="datetime", nullable=true)
     */
    private $tmInsert;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_update", type="date", nullable=true)
     */
    private $dtUpdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tm_update", type="datetime", nullable=true)
     */
    private $tmUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent", type="integer", nullable=false)
     */
    private $agent;

    /**
     * @var integer
     *
     * @ORM\Column(name="infosource", type="integer", nullable=false)
     */
    private $infosource;

    /**
     * @var integer
     *
     * @ORM\Column(name="request_type", type="integer", nullable=false)
     */
    private $requestType;

    /**
     * @var integer
     *
     * @ORM\Column(name="call_status", type="integer", nullable=false)
     */
    private $callStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="call_status_tm_update", type="datetime", nullable=true)
     */
    private $callStatusTmUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="a_comments", type="text", length=65535, nullable=true)
     */
    private $aComments;

    /**
     * @var integer
     *
     * @ORM\Column(name="oper", type="integer", nullable=false)
     */
    private $oper;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="opened", type="datetime", nullable=true)
     */
    private $opened;

    /**
     * @var boolean
     *
     * @ORM\Column(name="notify_10min", type="boolean", nullable=true)
     */
    private $notify10min;



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
     * Set cFio1
     *
     * @param string $cFio1
     * @return COfficesCalls
     */
    public function setCFio1($cFio1)
    {
        $this->cFio1 = $cFio1;

        return $this;
    }

    /**
     * Get cFio1
     *
     * @return string 
     */
    public function getCFio1()
    {
        return $this->cFio1;
    }

    /**
     * Set cPhones1
     *
     * @param string $cPhones1
     * @return COfficesCalls
     */
    public function setCPhones1($cPhones1)
    {
        $this->cPhones1 = $cPhones1;

        return $this;
    }

    /**
     * Get cPhones1
     *
     * @return string 
     */
    public function getCPhones1()
    {
        return $this->cPhones1;
    }

    /**
     * Set cEmails1
     *
     * @param string $cEmails1
     * @return COfficesCalls
     */
    public function setCEmails1($cEmails1)
    {
        $this->cEmails1 = $cEmails1;

        return $this;
    }

    /**
     * Get cEmails1
     *
     * @return string 
     */
    public function getCEmails1()
    {
        return $this->cEmails1;
    }

    /**
     * Set cCompany
     *
     * @param string $cCompany
     * @return COfficesCalls
     */
    public function setCCompany($cCompany)
    {
        $this->cCompany = $cCompany;

        return $this;
    }

    /**
     * Get cCompany
     *
     * @return string 
     */
    public function getCCompany()
    {
        return $this->cCompany;
    }

    /**
     * Set cComments
     *
     * @param string $cComments
     * @return COfficesCalls
     */
    public function setCComments($cComments)
    {
        $this->cComments = $cComments;

        return $this;
    }

    /**
     * Get cComments
     *
     * @return string 
     */
    public function getCComments()
    {
        return $this->cComments;
    }

    /**
     * Set dtInsert
     *
     * @param \DateTime $dtInsert
     * @return COfficesCalls
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
     * Set tmInsert
     *
     * @param \DateTime $tmInsert
     * @return COfficesCalls
     */
    public function setTmInsert($tmInsert)
    {
        $this->tmInsert = $tmInsert;

        return $this;
    }

    /**
     * Get tmInsert
     *
     * @return \DateTime 
     */
    public function getTmInsert()
    {
        return $this->tmInsert;
    }

    /**
     * Set dtUpdate
     *
     * @param \DateTime $dtUpdate
     * @return COfficesCalls
     */
    public function setDtUpdate($dtUpdate)
    {
        $this->dtUpdate = $dtUpdate;

        return $this;
    }

    /**
     * Get dtUpdate
     *
     * @return \DateTime 
     */
    public function getDtUpdate()
    {
        return $this->dtUpdate;
    }

    /**
     * Set tmUpdate
     *
     * @param \DateTime $tmUpdate
     * @return COfficesCalls
     */
    public function setTmUpdate($tmUpdate)
    {
        $this->tmUpdate = $tmUpdate;

        return $this;
    }

    /**
     * Get tmUpdate
     *
     * @return \DateTime 
     */
    public function getTmUpdate()
    {
        return $this->tmUpdate;
    }

    /**
     * Set agent
     *
     * @param integer $agent
     * @return COfficesCalls
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
     * Set infosource
     *
     * @param integer $infosource
     * @return COfficesCalls
     */
    public function setInfosource($infosource)
    {
        $this->infosource = $infosource;

        return $this;
    }

    /**
     * Get infosource
     *
     * @return integer 
     */
    public function getInfosource()
    {
        return $this->infosource;
    }

    /**
     * Set requestType
     *
     * @param integer $requestType
     * @return COfficesCalls
     */
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;

        return $this;
    }

    /**
     * Get requestType
     *
     * @return integer 
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * Set callStatus
     *
     * @param integer $callStatus
     * @return COfficesCalls
     */
    public function setCallStatus($callStatus)
    {
        $this->callStatus = $callStatus;

        return $this;
    }

    /**
     * Get callStatus
     *
     * @return integer 
     */
    public function getCallStatus()
    {
        return $this->callStatus;
    }

    /**
     * Set callStatusTmUpdate
     *
     * @param \DateTime $callStatusTmUpdate
     * @return COfficesCalls
     */
    public function setCallStatusTmUpdate($callStatusTmUpdate)
    {
        $this->callStatusTmUpdate = $callStatusTmUpdate;

        return $this;
    }

    /**
     * Get callStatusTmUpdate
     *
     * @return \DateTime 
     */
    public function getCallStatusTmUpdate()
    {
        return $this->callStatusTmUpdate;
    }

    /**
     * Set aComments
     *
     * @param string $aComments
     * @return COfficesCalls
     */
    public function setAComments($aComments)
    {
        $this->aComments = $aComments;

        return $this;
    }

    /**
     * Get aComments
     *
     * @return string 
     */
    public function getAComments()
    {
        return $this->aComments;
    }

    /**
     * Set oper
     *
     * @param integer $oper
     * @return COfficesCalls
     */
    public function setOper($oper)
    {
        $this->oper = $oper;

        return $this;
    }

    /**
     * Get oper
     *
     * @return integer 
     */
    public function getOper()
    {
        return $this->oper;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return COfficesCalls
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set opened
     *
     * @param \DateTime $opened
     * @return COfficesCalls
     */
    public function setOpened($opened)
    {
        $this->opened = $opened;

        return $this;
    }

    /**
     * Get opened
     *
     * @return \DateTime 
     */
    public function getOpened()
    {
        return $this->opened;
    }

    /**
     * Set notify10min
     *
     * @param boolean $notify10min
     * @return COfficesCalls
     */
    public function setNotify10min($notify10min)
    {
        $this->notify10min = $notify10min;

        return $this;
    }

    /**
     * Get notify10min
     *
     * @return boolean 
     */
    public function getNotify10min()
    {
        return $this->notify10min;
    }
}
