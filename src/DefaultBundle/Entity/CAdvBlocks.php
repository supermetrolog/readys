<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CAdvBlocks
 *
 * @ORM\Table(name="c_adv_blocks", indexes={@ORM\Index(name="user_department", columns={"user_department"}), @ORM\Index(name="object_id", columns={"object_id"}), @ORM\Index(name="block_id", columns={"block_id"}), @ORM\Index(name="block_status", columns={"block_status"})})
 * @ORM\Entity
 */
class CAdvBlocks
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
     * @ORM\Column(name="object_id", type="integer", nullable=false)
     */
    private $objectId;

    /**
     * @var integer
     *
     * @ORM\Column(name="block_id", type="integer", nullable=false)
     */
    private $blockId;

    /**
     * @var string
     *
     * @ORM\Column(name="block_ad", type="text", length=65535, nullable=true)
     */
    private $blockAd;

    /**
     * @var integer
     *
     * @ORM\Column(name="block_status", type="smallint", nullable=false)
     */
    private $blockStatus;



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
     * @return CAdvBlocks
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
     * Set objectId
     *
     * @param integer $objectId
     * @return CAdvBlocks
     */
    public function setObjectId($objectId)
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * Get objectId
     *
     * @return integer 
     */
    public function getObjectId()
    {
        return $this->objectId;
    }

    /**
     * Set blockId
     *
     * @param integer $blockId
     * @return CAdvBlocks
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
     * Set blockAd
     *
     * @param string $blockAd
     * @return CAdvBlocks
     */
    public function setBlockAd($blockAd)
    {
        $this->blockAd = $blockAd;

        return $this;
    }

    /**
     * Get blockAd
     *
     * @return string 
     */
    public function getBlockAd()
    {
        return $this->blockAd;
    }

    /**
     * Set blockStatus
     *
     * @param integer $blockStatus
     * @return CAdvBlocks
     */
    public function setBlockStatus($blockStatus)
    {
        $this->blockStatus = $blockStatus;

        return $this;
    }

    /**
     * Get blockStatus
     *
     * @return integer 
     */
    public function getBlockStatus()
    {
        return $this->blockStatus;
    }
}
