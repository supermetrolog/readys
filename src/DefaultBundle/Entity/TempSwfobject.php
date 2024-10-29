<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TempSwfobject
 *
 * @ORM\Table(name="temp_swfobject", uniqueConstraints={@ORM\UniqueConstraint(name="filename", columns={"file"})})
 * @ORM\Entity
 */
class TempSwfobject
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
     * @ORM\Column(name="id_obj", type="integer", nullable=true)
     */
    private $idObj;

    /**
     * @var string
     *
     * @ORM\Column(name="hash_group", type="string", length=32, nullable=true)
     */
    private $hashGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=false)
     */
    private $updated;

    /**
     * @var string
     *
     * @ORM\Column(name="department_init", type="string", length=255, nullable=false)
     */
    private $departmentInit;

    /**
     * @var string
     *
     * @ORM\Column(name="department_file", type="string", length=255, nullable=false)
     */
    private $departmentFile;

    /**
     * @var string
     *
     * @ORM\Column(name="file_exist", type="string", length=400, nullable=true)
     */
    private $fileExist;

    /**
     * @var string
     *
     * @ORM\Column(name="file_upload", type="string", length=255, nullable=true)
     */
    private $fileUpload;

    /**
     * @var string
     *
     * @ORM\Column(name="file", type="string", length=255, nullable=true)
     */
    private $file;

    /**
     * @var string
     *
     * @ORM\Column(name="tmpname", type="string", length=255, nullable=true)
     */
    private $tmpname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="removed", type="boolean", nullable=false)
     */
    private $removed;

    /**
     * @var string
     *
     * @ORM\Column(name="processed", type="string", length=255, nullable=false)
     */
    private $processed;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordered", type="integer", nullable=false)
     */
    private $ordered;

    /**
     * @var boolean
     *
     * @ORM\Column(name="main2site", type="boolean", nullable=false)
     */
    private $main2site;



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
     * Set idObj
     *
     * @param integer $idObj
     * @return TempSwfobject
     */
    public function setIdObj($idObj)
    {
        $this->idObj = $idObj;

        return $this;
    }

    /**
     * Get idObj
     *
     * @return integer 
     */
    public function getIdObj()
    {
        return $this->idObj;
    }

    /**
     * Set hashGroup
     *
     * @param string $hashGroup
     * @return TempSwfobject
     */
    public function setHashGroup($hashGroup)
    {
        $this->hashGroup = $hashGroup;

        return $this;
    }

    /**
     * Get hashGroup
     *
     * @return string 
     */
    public function getHashGroup()
    {
        return $this->hashGroup;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return TempSwfobject
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
     * Set updated
     *
     * @param \DateTime $updated
     * @return TempSwfobject
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set departmentInit
     *
     * @param string $departmentInit
     * @return TempSwfobject
     */
    public function setDepartmentInit($departmentInit)
    {
        $this->departmentInit = $departmentInit;

        return $this;
    }

    /**
     * Get departmentInit
     *
     * @return string 
     */
    public function getDepartmentInit()
    {
        return $this->departmentInit;
    }

    /**
     * Set departmentFile
     *
     * @param string $departmentFile
     * @return TempSwfobject
     */
    public function setDepartmentFile($departmentFile)
    {
        $this->departmentFile = $departmentFile;

        return $this;
    }

    /**
     * Get departmentFile
     *
     * @return string 
     */
    public function getDepartmentFile()
    {
        return $this->departmentFile;
    }

    /**
     * Set fileExist
     *
     * @param string $fileExist
     * @return TempSwfobject
     */
    public function setFileExist($fileExist)
    {
        $this->fileExist = $fileExist;

        return $this;
    }

    /**
     * Get fileExist
     *
     * @return string 
     */
    public function getFileExist()
    {
        return $this->fileExist;
    }

    /**
     * Set fileUpload
     *
     * @param string $fileUpload
     * @return TempSwfobject
     */
    public function setFileUpload($fileUpload)
    {
        $this->fileUpload = $fileUpload;

        return $this;
    }

    /**
     * Get fileUpload
     *
     * @return string 
     */
    public function getFileUpload()
    {
        return $this->fileUpload;
    }

    /**
     * Set file
     *
     * @param string $file
     * @return TempSwfobject
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set tmpname
     *
     * @param string $tmpname
     * @return TempSwfobject
     */
    public function setTmpname($tmpname)
    {
        $this->tmpname = $tmpname;

        return $this;
    }

    /**
     * Get tmpname
     *
     * @return string 
     */
    public function getTmpname()
    {
        return $this->tmpname;
    }

    /**
     * Set removed
     *
     * @param boolean $removed
     * @return TempSwfobject
     */
    public function setRemoved($removed)
    {
        $this->removed = $removed;

        return $this;
    }

    /**
     * Get removed
     *
     * @return boolean 
     */
    public function getRemoved()
    {
        return $this->removed;
    }

    /**
     * Set processed
     *
     * @param string $processed
     * @return TempSwfobject
     */
    public function setProcessed($processed)
    {
        $this->processed = $processed;

        return $this;
    }

    /**
     * Get processed
     *
     * @return string 
     */
    public function getProcessed()
    {
        return $this->processed;
    }

    /**
     * Set ordered
     *
     * @param integer $ordered
     * @return TempSwfobject
     */
    public function setOrdered($ordered)
    {
        $this->ordered = $ordered;

        return $this;
    }

    /**
     * Get ordered
     *
     * @return integer 
     */
    public function getOrdered()
    {
        return $this->ordered;
    }

    /**
     * Set main2site
     *
     * @param boolean $main2site
     * @return TempSwfobject
     */
    public function setMain2site($main2site)
    {
        $this->main2site = $main2site;

        return $this;
    }

    /**
     * Get main2site
     *
     * @return boolean 
     */
    public function getMain2site()
    {
        return $this->main2site;
    }
}
