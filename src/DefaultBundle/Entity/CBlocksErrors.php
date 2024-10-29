<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CBlocksErrors
 *
 * @ORM\Table(name="c_blocks_errors")
 * @ORM\Entity
 */
class CBlocksErrors
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
     * @ORM\Column(name="block_id", type="integer", nullable=false)
     */
    private $blockId;

    /**
     * @var integer
     *
     * @ORM\Column(name="block_user", type="integer", nullable=false)
     */
    private $blockUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="comm_user", type="integer", nullable=false)
     */
    private $commUser;

    /**
     * @var string
     *
     * @ORM\Column(name="block_desc", type="string", length=200, nullable=true)
     */
    private $blockDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="e_message", type="text", length=65535, nullable=true)
     */
    private $eMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="a_messgae", type="text", length=65535, nullable=true)
     */
    private $aMessgae;

    /**
     * @var boolean
     *
     * @ORM\Column(name="m_active", type="boolean", nullable=false)
     */
    private $mActive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_insert", type="date", nullable=true)
     */
    private $dtInsert;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_result", type="date", nullable=true)
     */
    private $dtResult;



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
     * Set blockId
     *
     * @param integer $blockId
     * @return CBlocksErrors
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
     * Set blockUser
     *
     * @param integer $blockUser
     * @return CBlocksErrors
     */
    public function setBlockUser($blockUser)
    {
        $this->blockUser = $blockUser;

        return $this;
    }

    /**
     * Get blockUser
     *
     * @return integer 
     */
    public function getBlockUser()
    {
        return $this->blockUser;
    }

    /**
     * Set commUser
     *
     * @param integer $commUser
     * @return CBlocksErrors
     */
    public function setCommUser($commUser)
    {
        $this->commUser = $commUser;

        return $this;
    }

    /**
     * Get commUser
     *
     * @return integer 
     */
    public function getCommUser()
    {
        return $this->commUser;
    }

    /**
     * Set blockDesc
     *
     * @param string $blockDesc
     * @return CBlocksErrors
     */
    public function setBlockDesc($blockDesc)
    {
        $this->blockDesc = $blockDesc;

        return $this;
    }

    /**
     * Get blockDesc
     *
     * @return string 
     */
    public function getBlockDesc()
    {
        return $this->blockDesc;
    }

    /**
     * Set eMessage
     *
     * @param string $eMessage
     * @return CBlocksErrors
     */
    public function setEMessage($eMessage)
    {
        $this->eMessage = $eMessage;

        return $this;
    }

    /**
     * Get eMessage
     *
     * @return string 
     */
    public function getEMessage()
    {
        return $this->eMessage;
    }

    /**
     * Set aMessgae
     *
     * @param string $aMessgae
     * @return CBlocksErrors
     */
    public function setAMessgae($aMessgae)
    {
        $this->aMessgae = $aMessgae;

        return $this;
    }

    /**
     * Get aMessgae
     *
     * @return string 
     */
    public function getAMessgae()
    {
        return $this->aMessgae;
    }

    /**
     * Set mActive
     *
     * @param boolean $mActive
     * @return CBlocksErrors
     */
    public function setMActive($mActive)
    {
        $this->mActive = $mActive;

        return $this;
    }

    /**
     * Get mActive
     *
     * @return boolean 
     */
    public function getMActive()
    {
        return $this->mActive;
    }

    /**
     * Set dtInsert
     *
     * @param \DateTime $dtInsert
     * @return CBlocksErrors
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
     * Set dtResult
     *
     * @param \DateTime $dtResult
     * @return CBlocksErrors
     */
    public function setDtResult($dtResult)
    {
        $this->dtResult = $dtResult;

        return $this;
    }

    /**
     * Get dtResult
     *
     * @return \DateTime 
     */
    public function getDtResult()
    {
        return $this->dtResult;
    }
}
