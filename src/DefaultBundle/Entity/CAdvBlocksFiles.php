<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CAdvBlocksFiles
 *
 * @ORM\Table(name="c_adv_blocks_files", indexes={@ORM\Index(name="user_department", columns={"user_department"}), @ORM\Index(name="block_id", columns={"block_id"})})
 * @ORM\Entity
 */
class CAdvBlocksFiles
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
     * @ORM\Column(name="user_department", type="string", length=16, nullable=true)
     */
    private $userDepartment;

    /**
     * @var integer
     *
     * @ORM\Column(name="block_id", type="integer", nullable=false)
     */
    private $blockId;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=true)
     */
    private $filename;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime", nullable=true)
     */
    private $dateAdded;



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
     * Set userDepartment
     *
     * @param string $userDepartment
     * @return CAdvBlocksFiles
     */
    public function setUserDepartment($userDepartment)
    {
        $this->userDepartment = $userDepartment;

        return $this;
    }

    /**
     * Get userDepartment
     *
     * @return string 
     */
    public function getUserDepartment()
    {
        return $this->userDepartment;
    }

    /**
     * Set blockId
     *
     * @param integer $blockId
     * @return CAdvBlocksFiles
     */
    public function setBlockId($blockId)
    {
        $this->blockId = $blockId;

        return $this;
    }

    /**
     * Get blockId
     *
     * @return integer 
     */
    public function getBlockId()
    {
        return $this->blockId;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return CAdvBlocksFiles
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     * @return CAdvBlocksFiles
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime 
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }
}
