<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OldCCustomers
 *
 * @ORM\Table(name="old_c_customers")
 * @ORM\Entity
 */
class OldCCustomers
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
     * @var boolean
     *
     * @ORM\Column(name="c_jperson", type="boolean", nullable=false)
     */
    private $cJperson;

    /**
     * @var integer
     *
     * @ORM\Column(name="c_type", type="integer", nullable=false)
     */
    private $cType;

    /**
     * @var string
     *
     * @ORM\Column(name="c_fio", type="string", length=200, nullable=true)
     */
    private $cFio;

    /**
     * @var string
     *
     * @ORM\Column(name="c_phones", type="string", length=200, nullable=true)
     */
    private $cPhones;

    /**
     * @var string
     *
     * @ORM\Column(name="c_emails", type="string", length=200, nullable=true)
     */
    private $cEmails;

    /**
     * @var string
     *
     * @ORM\Column(name="c_adress", type="string", length=500, nullable=true)
     */
    private $cAdress;

    /**
     * @var string
     *
     * @ORM\Column(name="c_company", type="string", length=200, nullable=true)
     */
    private $cCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="c_position", type="string", length=200, nullable=true)
     */
    private $cPosition;

    /**
     * @var string
     *
     * @ORM\Column(name="c_sfera", type="string", length=200, nullable=true)
     */
    private $cSfera;

    /**
     * @var string
     *
     * @ORM\Column(name="c_url", type="string", length=200, nullable=true)
     */
    private $cUrl;

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
     * @ORM\Column(name="dt_update", type="date", nullable=true)
     */
    private $dtUpdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent", type="integer", nullable=false)
     */
    private $agent;

    /**
     * @var string
     *
     * @ORM\Column(name="f_comments", type="string", length=500, nullable=true)
     */
    private $fComments;

    /**
     * @var string
     *
     * @ORM\Column(name="c_projects", type="string", length=500, nullable=true)
     */
    private $cProjects;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;



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
     * Set cJperson
     *
     * @param boolean $cJperson
     * @return OldCCustomers
     */
    public function setCJperson($cJperson)
    {
        $this->cJperson = $cJperson;

        return $this;
    }

    /**
     * Get cJperson
     *
     * @return boolean 
     */
    public function getCJperson()
    {
        return $this->cJperson;
    }

    /**
     * Set cType
     *
     * @param integer $cType
     * @return OldCCustomers
     */
    public function setCType($cType)
    {
        $this->cType = $cType;

        return $this;
    }

    /**
     * Get cType
     *
     * @return integer 
     */
    public function getCType()
    {
        return $this->cType;
    }

    /**
     * Set cFio
     *
     * @param string $cFio
     * @return OldCCustomers
     */
    public function setCFio($cFio)
    {
        $this->cFio = $cFio;

        return $this;
    }

    /**
     * Get cFio
     *
     * @return string 
     */
    public function getCFio()
    {
        return $this->cFio;
    }

    /**
     * Set cPhones
     *
     * @param string $cPhones
     * @return OldCCustomers
     */
    public function setCPhones($cPhones)
    {
        $this->cPhones = $cPhones;

        return $this;
    }

    /**
     * Get cPhones
     *
     * @return string 
     */
    public function getCPhones()
    {
        return $this->cPhones;
    }

    /**
     * Set cEmails
     *
     * @param string $cEmails
     * @return OldCCustomers
     */
    public function setCEmails($cEmails)
    {
        $this->cEmails = $cEmails;

        return $this;
    }

    /**
     * Get cEmails
     *
     * @return string 
     */
    public function getCEmails()
    {
        return $this->cEmails;
    }

    /**
     * Set cAdress
     *
     * @param string $cAdress
     * @return OldCCustomers
     */
    public function setCAdress($cAdress)
    {
        $this->cAdress = $cAdress;

        return $this;
    }

    /**
     * Get cAdress
     *
     * @return string 
     */
    public function getCAdress()
    {
        return $this->cAdress;
    }

    /**
     * Set cCompany
     *
     * @param string $cCompany
     * @return OldCCustomers
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
     * Set cPosition
     *
     * @param string $cPosition
     * @return OldCCustomers
     */
    public function setCPosition($cPosition)
    {
        $this->cPosition = $cPosition;

        return $this;
    }

    /**
     * Get cPosition
     *
     * @return string 
     */
    public function getCPosition()
    {
        return $this->cPosition;
    }

    /**
     * Set cSfera
     *
     * @param string $cSfera
     * @return OldCCustomers
     */
    public function setCSfera($cSfera)
    {
        $this->cSfera = $cSfera;

        return $this;
    }

    /**
     * Get cSfera
     *
     * @return string 
     */
    public function getCSfera()
    {
        return $this->cSfera;
    }

    /**
     * Set cUrl
     *
     * @param string $cUrl
     * @return OldCCustomers
     */
    public function setCUrl($cUrl)
    {
        $this->cUrl = $cUrl;

        return $this;
    }

    /**
     * Get cUrl
     *
     * @return string 
     */
    public function getCUrl()
    {
        return $this->cUrl;
    }

    /**
     * Set cComments
     *
     * @param string $cComments
     * @return OldCCustomers
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
     * @return OldCCustomers
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
     * Set dtUpdate
     *
     * @param \DateTime $dtUpdate
     * @return OldCCustomers
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
     * Set agent
     *
     * @param integer $agent
     * @return OldCCustomers
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
     * Set fComments
     *
     * @param string $fComments
     * @return OldCCustomers
     */
    public function setFComments($fComments)
    {
        $this->fComments = $fComments;

        return $this;
    }

    /**
     * Get fComments
     *
     * @return string 
     */
    public function getFComments()
    {
        return $this->fComments;
    }

    /**
     * Set cProjects
     *
     * @param string $cProjects
     * @return OldCCustomers
     */
    public function setCProjects($cProjects)
    {
        $this->cProjects = $cProjects;

        return $this;
    }

    /**
     * Get cProjects
     *
     * @return string 
     */
    public function getCProjects()
    {
        return $this->cProjects;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return OldCCustomers
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
}
