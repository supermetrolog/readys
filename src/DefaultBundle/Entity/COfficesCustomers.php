<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * COfficesCustomers
 *
 * @ORM\Table(name="c_offices_customers", indexes={@ORM\Index(name="l_customers_activity", columns={"l_customers_activity"}), @ORM\Index(name="infosource", columns={"infosource"}), @ORM\Index(name="agent", columns={"agent"}), @ORM\Index(name="salerent_request", columns={"salerent_request"}), @ORM\Index(name="verifed", columns={"verifed"}), @ORM\Index(name="deleted", columns={"deleted"}), @ORM\Index(name="c_emails1", columns={"c_emails1"}), @ORM\Index(name="c_phones1", columns={"c_phones1"}), @ORM\Index(name="c_phones2", columns={"c_phones2"}), @ORM\Index(name="c_phones3", columns={"c_phones3"}), @ORM\Index(name="c_emails2", columns={"c_emails2"}), @ORM\Index(name="c_emails3", columns={"c_emails3"})})
 * @ORM\Entity
 */
class COfficesCustomers
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
     * @ORM\Column(name="c_type", type="integer", nullable=false)
     */
    private $cType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="c_jperson", type="boolean", nullable=false)
     */
    private $cJperson;

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
     * @ORM\Column(name="c_adress", type="string", length=500, nullable=true)
     */
    private $cAdress;

    /**
     * @var string
     *
     * @ORM\Column(name="c_url", type="string", length=200, nullable=true)
     */
    private $cUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="c_fio1", type="string", length=200, nullable=true)
     */
    private $cFio1;

    /**
     * @var string
     *
     * @ORM\Column(name="c_dolzhnost1", type="string", length=200, nullable=true)
     */
    private $cDolzhnost1;

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
     * @ORM\Column(name="c_fio2", type="string", length=200, nullable=true)
     */
    private $cFio2;

    /**
     * @var string
     *
     * @ORM\Column(name="c_dolzhnost2", type="string", length=200, nullable=true)
     */
    private $cDolzhnost2;

    /**
     * @var string
     *
     * @ORM\Column(name="c_phones2", type="string", length=200, nullable=true)
     */
    private $cPhones2;

    /**
     * @var string
     *
     * @ORM\Column(name="c_emails2", type="string", length=200, nullable=true)
     */
    private $cEmails2;

    /**
     * @var string
     *
     * @ORM\Column(name="c_fio3", type="string", length=200, nullable=true)
     */
    private $cFio3;

    /**
     * @var string
     *
     * @ORM\Column(name="c_dolzhnost3", type="string", length=200, nullable=true)
     */
    private $cDolzhnost3;

    /**
     * @var string
     *
     * @ORM\Column(name="c_phones3", type="string", length=200, nullable=true)
     */
    private $cPhones3;

    /**
     * @var string
     *
     * @ORM\Column(name="c_emails3", type="string", length=200, nullable=true)
     */
    private $cEmails3;

    /**
     * @var string
     *
     * @ORM\Column(name="c_comments", type="text", length=65535, nullable=true)
     */
    private $cComments;

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
     * @var \DateTime
     *
     * @ORM\Column(name="dt_update_full", type="datetime", nullable=true)
     */
    private $dtUpdateFull;

    /**
     * @var integer
     *
     * @ORM\Column(name="infosource", type="integer", nullable=false)
     */
    private $infosource;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent", type="integer", nullable=false)
     */
    private $agent;

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
     * @ORM\Column(name="verifed", type="boolean", nullable=false)
     */
    private $verifed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var boolean
     *
     * @ORM\Column(name="olddb", type="boolean", nullable=false)
     */
    private $olddb;

    /**
     * @var integer
     *
     * @ORM\Column(name="result", type="integer", nullable=false)
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
     * Set cType
     *
     * @param integer $cType
     * @return COfficesCustomers
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
     * Set cJperson
     *
     * @param boolean $cJperson
     * @return COfficesCustomers
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
     * Set cCompany
     *
     * @param string $cCompany
     * @return COfficesCustomers
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
     * @return COfficesCustomers
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
     * Set cAdress
     *
     * @param string $cAdress
     * @return COfficesCustomers
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
     * Set cUrl
     *
     * @param string $cUrl
     * @return COfficesCustomers
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
     * Set cFio1
     *
     * @param string $cFio1
     * @return COfficesCustomers
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
     * Set cDolzhnost1
     *
     * @param string $cDolzhnost1
     * @return COfficesCustomers
     */
    public function setCDolzhnost1($cDolzhnost1)
    {
        $this->cDolzhnost1 = $cDolzhnost1;

        return $this;
    }

    /**
     * Get cDolzhnost1
     *
     * @return string 
     */
    public function getCDolzhnost1()
    {
        return $this->cDolzhnost1;
    }

    /**
     * Set cPhones1
     *
     * @param string $cPhones1
     * @return COfficesCustomers
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
     * @return COfficesCustomers
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
     * Set cFio2
     *
     * @param string $cFio2
     * @return COfficesCustomers
     */
    public function setCFio2($cFio2)
    {
        $this->cFio2 = $cFio2;

        return $this;
    }

    /**
     * Get cFio2
     *
     * @return string 
     */
    public function getCFio2()
    {
        return $this->cFio2;
    }

    /**
     * Set cDolzhnost2
     *
     * @param string $cDolzhnost2
     * @return COfficesCustomers
     */
    public function setCDolzhnost2($cDolzhnost2)
    {
        $this->cDolzhnost2 = $cDolzhnost2;

        return $this;
    }

    /**
     * Get cDolzhnost2
     *
     * @return string 
     */
    public function getCDolzhnost2()
    {
        return $this->cDolzhnost2;
    }

    /**
     * Set cPhones2
     *
     * @param string $cPhones2
     * @return COfficesCustomers
     */
    public function setCPhones2($cPhones2)
    {
        $this->cPhones2 = $cPhones2;

        return $this;
    }

    /**
     * Get cPhones2
     *
     * @return string 
     */
    public function getCPhones2()
    {
        return $this->cPhones2;
    }

    /**
     * Set cEmails2
     *
     * @param string $cEmails2
     * @return COfficesCustomers
     */
    public function setCEmails2($cEmails2)
    {
        $this->cEmails2 = $cEmails2;

        return $this;
    }

    /**
     * Get cEmails2
     *
     * @return string 
     */
    public function getCEmails2()
    {
        return $this->cEmails2;
    }

    /**
     * Set cFio3
     *
     * @param string $cFio3
     * @return COfficesCustomers
     */
    public function setCFio3($cFio3)
    {
        $this->cFio3 = $cFio3;

        return $this;
    }

    /**
     * Get cFio3
     *
     * @return string 
     */
    public function getCFio3()
    {
        return $this->cFio3;
    }

    /**
     * Set cDolzhnost3
     *
     * @param string $cDolzhnost3
     * @return COfficesCustomers
     */
    public function setCDolzhnost3($cDolzhnost3)
    {
        $this->cDolzhnost3 = $cDolzhnost3;

        return $this;
    }

    /**
     * Get cDolzhnost3
     *
     * @return string 
     */
    public function getCDolzhnost3()
    {
        return $this->cDolzhnost3;
    }

    /**
     * Set cPhones3
     *
     * @param string $cPhones3
     * @return COfficesCustomers
     */
    public function setCPhones3($cPhones3)
    {
        $this->cPhones3 = $cPhones3;

        return $this;
    }

    /**
     * Get cPhones3
     *
     * @return string 
     */
    public function getCPhones3()
    {
        return $this->cPhones3;
    }

    /**
     * Set cEmails3
     *
     * @param string $cEmails3
     * @return COfficesCustomers
     */
    public function setCEmails3($cEmails3)
    {
        $this->cEmails3 = $cEmails3;

        return $this;
    }

    /**
     * Get cEmails3
     *
     * @return string 
     */
    public function getCEmails3()
    {
        return $this->cEmails3;
    }

    /**
     * Set cComments
     *
     * @param string $cComments
     * @return COfficesCustomers
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
     * Set lCustomersActivity
     *
     * @param integer $lCustomersActivity
     * @return COfficesCustomers
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
     * @return COfficesCustomers
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
     * @return COfficesCustomers
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
     * Set dtUpdateFull
     *
     * @param \DateTime $dtUpdateFull
     * @return COfficesCustomers
     */
    public function setDtUpdateFull($dtUpdateFull)
    {
        $this->dtUpdateFull = $dtUpdateFull;

        return $this;
    }

    /**
     * Get dtUpdateFull
     *
     * @return \DateTime 
     */
    public function getDtUpdateFull()
    {
        return $this->dtUpdateFull;
    }

    /**
     * Set infosource
     *
     * @param integer $infosource
     * @return COfficesCustomers
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
     * Set agent
     *
     * @param integer $agent
     * @return COfficesCustomers
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
     * Set salerentRequest
     *
     * @param boolean $salerentRequest
     * @return COfficesCustomers
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
     * @return COfficesCustomers
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
     * Set verifed
     *
     * @param boolean $verifed
     * @return COfficesCustomers
     */
    public function setVerifed($verifed)
    {
        $this->verifed = $verifed;

        return $this;
    }

    /**
     * Get verifed
     *
     * @return boolean 
     */
    public function getVerifed()
    {
        return $this->verifed;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return COfficesCustomers
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
     * Set olddb
     *
     * @param boolean $olddb
     * @return COfficesCustomers
     */
    public function setOlddb($olddb)
    {
        $this->olddb = $olddb;

        return $this;
    }

    /**
     * Get olddb
     *
     * @return boolean 
     */
    public function getOlddb()
    {
        return $this->olddb;
    }

    /**
     * Set result
     *
     * @param integer $result
     * @return COfficesCustomers
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return integer 
     */
    public function getResult()
    {
        return $this->result;
    }
}
