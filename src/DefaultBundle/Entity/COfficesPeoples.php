<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * COfficesPeoples
 *
 * @ORM\Table(name="c_offices_peoples", indexes={@ORM\Index(name="clyent_id", columns={"clyent_id"}), @ORM\Index(name="phones", columns={"phones"})})
 * @ORM\Entity
 */
class COfficesPeoples
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
     * @ORM\Column(name="clyent_id", type="integer", nullable=true)
     */
    private $clyentId;

    /**
     * @var string
     *
     * @ORM\Column(name="fio", type="string", length=200, nullable=true)
     */
    private $fio;

    /**
     * @var string
     *
     * @ORM\Column(name="dolzhnost", type="string", length=200, nullable=true)
     */
    private $dolzhnost;

    /**
     * @var string
     *
     * @ORM\Column(name="phones", type="string", length=200, nullable=true)
     */
    private $phones;

    /**
     * @var string
     *
     * @ORM\Column(name="emails", type="string", length=200, nullable=true)
     */
    private $emails;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent", type="integer", nullable=false)
     */
    private $agent;

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
     * @var boolean
     *
     * @ORM\Column(name="allow_view", type="boolean", nullable=false)
     */
    private $allowView;

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
     * Set clyentId
     *
     * @param integer $clyentId
     * @return COfficesPeoples
     */
    public function setClyentId($clyentId)
    {
        $this->clyentId = $clyentId;

        return $this;
    }

    /**
     * Get clyentId
     *
     * @return integer 
     */
    public function getClyentId()
    {
        return $this->clyentId;
    }

    /**
     * Set fio
     *
     * @param string $fio
     * @return COfficesPeoples
     */
    public function setFio($fio)
    {
        $this->fio = $fio;

        return $this;
    }

    /**
     * Get fio
     *
     * @return string 
     */
    public function getFio()
    {
        return $this->fio;
    }

    /**
     * Set dolzhnost
     *
     * @param string $dolzhnost
     * @return COfficesPeoples
     */
    public function setDolzhnost($dolzhnost)
    {
        $this->dolzhnost = $dolzhnost;

        return $this;
    }

    /**
     * Get dolzhnost
     *
     * @return string 
     */
    public function getDolzhnost()
    {
        return $this->dolzhnost;
    }

    /**
     * Set phones
     *
     * @param string $phones
     * @return COfficesPeoples
     */
    public function setPhones($phones)
    {
        $this->phones = $phones;

        return $this;
    }

    /**
     * Get phones
     *
     * @return string 
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * Set emails
     *
     * @param string $emails
     * @return COfficesPeoples
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;

        return $this;
    }

    /**
     * Get emails
     *
     * @return string 
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * Set agent
     *
     * @param integer $agent
     * @return COfficesPeoples
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
     * Set dtInsert
     *
     * @param \DateTime $dtInsert
     * @return COfficesPeoples
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
     * @return COfficesPeoples
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
     * Set allowView
     *
     * @param boolean $allowView
     * @return COfficesPeoples
     */
    public function setAllowView($allowView)
    {
        $this->allowView = $allowView;

        return $this;
    }

    /**
     * Get allowView
     *
     * @return boolean 
     */
    public function getAllowView()
    {
        return $this->allowView;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return COfficesPeoples
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
