<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CRetailCustomers
 *
 * @ORM\Table(name="c_retail_customers", indexes={@ORM\Index(name="l_activity", columns={"l_customers_activity"}), @ORM\Index(name="active", columns={"active"}), @ORM\Index(name="c_dogovor", columns={"c_dogovor"})})
 * @ORM\Entity
 */
class CRetailCustomers
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
     * @ORM\Column(name="c_dolzhnost", type="string", length=200, nullable=true)
     */
    private $cDolzhnost;

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
     * @var string
     *
     * @ORM\Column(name="c_dogovor", type="string", length=255, nullable=true)
     */
    private $cDogovor;

    /**
     * @var integer
     *
     * @ORM\Column(name="l_customers_activity", type="integer", nullable=false)
     */
    private $lCustomersActivity;

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
     * @var integer
     *
     * @ORM\Column(name="infosource", type="integer", nullable=false)
     */
    private $infosource;

    /**
     * @var boolean
     *
     * @ORM\Column(name="salerent_request", type="boolean", nullable=false)
     */
    private $salerentRequest;

    /**
     * @var string
     *
     * @ORM\Column(name="history", type="text", length=65535, nullable=true)
     */
    private $history;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

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
     * @return CRetailCustomers
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
     * @return CRetailCustomers
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
     * @return CRetailCustomers
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
     * Set cDolzhnost
     *
     * @param string $cDolzhnost
     * @return CRetailCustomers
     */
    public function setCDolzhnost($cDolzhnost)
    {
        $this->cDolzhnost = $cDolzhnost;

        return $this;
    }

    /**
     * Get cDolzhnost
     *
     * @return string 
     */
    public function getCDolzhnost()
    {
        return $this->cDolzhnost;
    }

    /**
     * Set cPhones
     *
     * @param string $cPhones
     * @return CRetailCustomers
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
     * @return CRetailCustomers
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
     * @return CRetailCustomers
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
     * @return CRetailCustomers
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
     * Set cSfera
     *
     * @param string $cSfera
     * @return CRetailCustomers
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
     * @return CRetailCustomers
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
     * @return CRetailCustomers
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
     * Set cDogovor
     *
     * @param string $cDogovor
     * @return CRetailCustomers
     */
    public function setCDogovor($cDogovor)
    {
        $this->cDogovor = $cDogovor;

        return $this;
    }

    /**
     * Get cDogovor
     *
     * @return string 
     */
    public function getCDogovor()
    {
        return $this->cDogovor;
    }

    /**
     * Set lCustomersActivity
     *
     * @param integer $lCustomersActivity
     * @return CRetailCustomers
     */
    public function setLCustomersActivity($lCustomersActivity)
    {
        $this->lCustomersActivity = $lCustomersActivity;

        return $this;
    }

    /**
     * Get lCustomersActivity
     *
     * @return integer 
     */
    public function getLCustomersActivity()
    {
        return $this->lCustomersActivity;
    }

    /**
     * Set dtInsert
     *
     * @param \DateTime $dtInsert
     * @return CRetailCustomers
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
     * @return CRetailCustomers
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
     * @return CRetailCustomers
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
     * @return CRetailCustomers
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
     * Set salerentRequest
     *
     * @param boolean $salerentRequest
     * @return CRetailCustomers
     */
    public function setSalerentRequest($salerentRequest)
    {
        $this->salerentRequest = $salerentRequest;

        return $this;
    }

    /**
     * Get salerentRequest
     *
     * @return boolean 
     */
    public function getSalerentRequest()
    {
        return $this->salerentRequest;
    }

    /**
     * Set history
     *
     * @param string $history
     * @return CRetailCustomers
     */
    public function setHistory($history)
    {
        $this->history = $history;

        return $this;
    }

    /**
     * Get history
     *
     * @return string 
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return CRetailCustomers
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return CRetailCustomers
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
