<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OldCFiles
 *
 * @ORM\Table(name="old_c_files")
 * @ORM\Entity
 */
class OldCFiles
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
     * @ORM\Column(name="tbl_name", type="string", length=100, nullable=true)
     */
    private $tblName;

    /**
     * @var integer
     *
     * @ORM\Column(name="tbl_id", type="integer", nullable=true)
     */
    private $tblId;

    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=100, nullable=true)
     */
    private $fileName;

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
     * Set tblName
     *
     * @param string $tblName
     * @return OldCFiles
     */
    public function setTblName($tblName)
    {
        $this->tblName = $tblName;

        return $this;
    }

    /**
     * Get tblName
     *
     * @return string 
     */
    public function getTblName()
    {
        return $this->tblName;
    }

    /**
     * Set tblId
     *
     * @param integer $tblId
     * @return OldCFiles
     */
    public function setTblId($tblId)
    {
        $this->tblId = $tblId;

        return $this;
    }

    /**
     * Get tblId
     *
     * @return integer 
     */
    public function getTblId()
    {
        return $this->tblId;
    }

    /**
     * Set fileName
     *
     * @param string $fileName
     * @return OldCFiles
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileName
     *
     * @return string 
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return OldCFiles
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
