<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AExportLog
 *
 * @ORM\Table(name="a_export_log", indexes={@ORM\Index(name="added", columns={"added"})})
 * @ORM\Entity
 */
class AExportLog
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
     * @ORM\Column(name="id_export", type="integer", nullable=false)
     */
    private $idExport;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="added", type="datetime", nullable=false)
     */
    private $added;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=64, nullable=false)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="siteurl", type="string", length=64, nullable=false)
     */
    private $siteurl;

    /**
     * @var string
     *
     * @ORM\Column(name="department", type="string", length=64, nullable=false)
     */
    private $department;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=64, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="method", type="string", length=64, nullable=false)
     */
    private $method;



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
     * Set idExport
     *
     * @param integer $idExport
     * @return AExportLog
     */
    public function setIdExport($idExport)
    {
        $this->idExport = $idExport;

        return $this;
    }

    /**
     * Get idExport
     *
     * @return integer 
     */
    public function getIdExport()
    {
        return $this->idExport;
    }

    /**
     * Set added
     *
     * @param \DateTime $added
     * @return AExportLog
     */
    public function setAdded($added)
    {
        $this->added = $added;

        return $this;
    }

    /**
     * Get added
     *
     * @return \DateTime 
     */
    public function getAdded()
    {
        return $this->added;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return AExportLog
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set siteurl
     *
     * @param string $siteurl
     * @return AExportLog
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
     * Set department
     *
     * @param string $department
     * @return AExportLog
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
     * Set type
     *
     * @param string $type
     * @return AExportLog
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
     * Set method
     *
     * @param string $method
     * @return AExportLog
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get method
     *
     * @return string 
     */
    public function getMethod()
    {
        return $this->method;
    }
}
