<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AExport
 *
 * @ORM\Table(name="a_export", uniqueConstraints={@ORM\UniqueConstraint(name="siteurl_type_department", columns={"siteurl", "type", "department"})})
 * @ORM\Entity
 */
class AExport
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
     * @ORM\Column(name="siteurl", type="string", length=128, nullable=false)
     */
    private $siteurl;

    /**
     * @var string
     *
     * @ORM\Column(name="xmltype", type="string", length=32, nullable=false)
     */
    private $xmltype;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=32, nullable=false)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_query", type="datetime", nullable=true)
     */
    private $lastQuery;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_generate", type="datetime", nullable=true)
     */
    private $lastGenerate;

    /**
     * @var integer
     *
     * @ORM\Column(name="lifetime_hour", type="integer", nullable=false)
     */
    private $lifetimeHour;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="department", type="string", length=32, nullable=false)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=32, nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="url_handmade", type="string", length=1000, nullable=false)
     */
    private $urlHandmade;

    /**
     * @var string
     *
     * @ORM\Column(name="url_autogen", type="string", length=1000, nullable=false)
     */
    private $urlAutogen;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var boolean
     *
     * @ORM\Column(name="check_handmade", type="boolean", nullable=false)
     */
    private $checkHandmade;

    /**
     * @var boolean
     *
     * @ORM\Column(name="payed", type="boolean", nullable=false)
     */
    private $payed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="as_object", type="boolean", nullable=false)
     */
    private $asObject;

    /**
     * @var string
     *
     * @ORM\Column(name="url_handmade_bazanda", type="text", length=65535, nullable=false)
     */
    private $urlHandmadeBazanda;



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
     * Set siteurl
     *
     * @param string $siteurl
     * @return AExport
     */
    public function setSiteurl($siteurl)
    {
        $this->siteurl = $siteurl;

        return $this;
    }

    /**
     * Get siteurl
     *
     * @return string 
     */
    public function getSiteurl()
    {
        return $this->siteurl;
    }

    /**
     * Set xmltype
     *
     * @param string $xmltype
     * @return AExport
     */
    public function setXmltype($xmltype)
    {
        $this->xmltype = $xmltype;

        return $this;
    }

    /**
     * Get xmltype
     *
     * @return string 
     */
    public function getXmltype()
    {
        return $this->xmltype;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return AExport
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set lastQuery
     *
     * @param \DateTime $lastQuery
     * @return AExport
     */
    public function setLastQuery($lastQuery)
    {
        $this->lastQuery = $lastQuery;

        return $this;
    }

    /**
     * Get lastQuery
     *
     * @return \DateTime 
     */
    public function getLastQuery()
    {
        return $this->lastQuery;
    }

    /**
     * Set lastGenerate
     *
     * @param \DateTime $lastGenerate
     * @return AExport
     */
    public function setLastGenerate($lastGenerate)
    {
        $this->lastGenerate = $lastGenerate;

        return $this;
    }

    /**
     * Get lastGenerate
     *
     * @return \DateTime 
     */
    public function getLastGenerate()
    {
        return $this->lastGenerate;
    }

    /**
     * Set lifetimeHour
     *
     * @param integer $lifetimeHour
     * @return AExport
     */
    public function setLifetimeHour($lifetimeHour)
    {
        $this->lifetimeHour = $lifetimeHour;

        return $this;
    }

    /**
     * Get lifetimeHour
     *
     * @return integer 
     */
    public function getLifetimeHour()
    {
        return $this->lifetimeHour;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return AExport
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set department
     *
     * @param string $department
     * @return AExport
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string 
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return AExport
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
     * Set urlHandmade
     *
     * @param string $urlHandmade
     * @return AExport
     */
    public function setUrlHandmade($urlHandmade)
    {
        $this->urlHandmade = $urlHandmade;

        return $this;
    }

    /**
     * Get urlHandmade
     *
     * @return string 
     */
    public function getUrlHandmade()
    {
        return $this->urlHandmade;
    }

    /**
     * Set urlAutogen
     *
     * @param string $urlAutogen
     * @return AExport
     */
    public function setUrlAutogen($urlAutogen)
    {
        $this->urlAutogen = $urlAutogen;

        return $this;
    }

    /**
     * Get urlAutogen
     *
     * @return string 
     */
    public function getUrlAutogen()
    {
        return $this->urlAutogen;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return AExport
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set checkHandmade
     *
     * @param boolean $checkHandmade
     * @return AExport
     */
    public function setCheckHandmade($checkHandmade)
    {
        $this->checkHandmade = $checkHandmade;

        return $this;
    }

    /**
     * Get checkHandmade
     *
     * @return boolean 
     */
    public function getCheckHandmade()
    {
        return $this->checkHandmade;
    }

    /**
     * Set payed
     *
     * @param boolean $payed
     * @return AExport
     */
    public function setPayed($payed)
    {
        $this->payed = $payed;

        return $this;
    }

    /**
     * Get payed
     *
     * @return boolean 
     */
    public function getPayed()
    {
        return $this->payed;
    }

    /**
     * Set asObject
     *
     * @param boolean $asObject
     * @return AExport
     */
    public function setAsObject($asObject)
    {
        $this->asObject = $asObject;

        return $this;
    }

    /**
     * Get asObject
     *
     * @return boolean 
     */
    public function getAsObject()
    {
        return $this->asObject;
    }

    /**
     * Set urlHandmadeBazanda
     *
     * @param string $urlHandmadeBazanda
     * @return AExport
     */
    public function setUrlHandmadeBazanda($urlHandmadeBazanda)
    {
        $this->urlHandmadeBazanda = $urlHandmadeBazanda;

        return $this;
    }

    /**
     * Get urlHandmadeBazanda
     *
     * @return string 
     */
    public function getUrlHandmadeBazanda()
    {
        return $this->urlHandmadeBazanda;
    }
}
