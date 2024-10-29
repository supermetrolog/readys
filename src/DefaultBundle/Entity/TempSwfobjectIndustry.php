<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TempSwfobjectIndustry
 *
 * @ORM\Table(name="temp_swfobject_industry", uniqueConstraints={@ORM\UniqueConstraint(name="filename", columns={"file"})})
 * @ORM\Entity
 */
class TempSwfobjectIndustry
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
     * @return TempSwfobjectIndustry
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
     * @return TempSwfobjectIndustry
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
     * @return TempSwfobjectIndustry
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
     * @return TempSwfobjectIndustry
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
     * Set fileUpload
     *
     * @param string $fileUpload
     * @return TempSwfobjectIndustry
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
     * @return TempSwfobjectIndustry
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
}
