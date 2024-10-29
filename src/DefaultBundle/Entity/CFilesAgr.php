<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CFilesAgr
 *
 * @ORM\Table(name="c_files_agr")
 * @ORM\Entity
 */
class CFilesAgr
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
     * @ORM\Column(name="agr_name", type="string", length=127, nullable=false)
     */
    private $agrName;

    /**
     * @var string
     *
     * @ORM\Column(name="agr_file", type="string", length=255, nullable=true)
     */
    private $agrFile;

    /**
     * @var string
     *
     * @ORM\Column(name="agr_descr", type="text", length=65535, nullable=true)
     */
    private $agrDescr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt", type="datetime", nullable=false)
     */
    private $dt;



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
     * Set agrName
     *
     * @param string $agrName
     * @return CFilesAgr
     */
    public function setAgrName($agrName)
    {
        $this->agrName = $agrName;

        return $this;
    }

    /**
     * Get agrName
     *
     * @return string 
     */
    public function getAgrName()
    {
        return $this->agrName;
    }

    /**
     * Set agrFile
     *
     * @param string $agrFile
     * @return CFilesAgr
     */
    public function setAgrFile($agrFile)
    {
        $this->agrFile = $agrFile;

        return $this;
    }

    /**
     * Get agrFile
     *
     * @return string 
     */
    public function getAgrFile()
    {
        return $this->agrFile;
    }

    /**
     * Set agrDescr
     *
     * @param string $agrDescr
     * @return CFilesAgr
     */
    public function setAgrDescr($agrDescr)
    {
        $this->agrDescr = $agrDescr;

        return $this;
    }

    /**
     * Get agrDescr
     *
     * @return string 
     */
    public function getAgrDescr()
    {
        return $this->agrDescr;
    }

    /**
     * Set dt
     *
     * @param \DateTime $dt
     * @return CFilesAgr
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
}
