<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CBlocksErrorsViewed
 *
 * @ORM\Table(name="c_blocks_errors_viewed", indexes={@ORM\Index(name="blocks_error_id", columns={"blocks_error_id"}), @ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class CBlocksErrorsViewed
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
     * @ORM\Column(name="blocks_error_id", type="integer", nullable=false)
     */
    private $blocksErrorId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;



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
     * Set blocksErrorId
     *
     * @param integer $blocksErrorId
     * @return CBlocksErrorsViewed
     */
    public function setBlocksErrorId($blocksErrorId)
    {
        $this->blocksErrorId = $blocksErrorId;

        return $this;
    }

    /**
     * Get blocksErrorId
     *
     * @return integer 
     */
    public function getBlocksErrorId()
    {
        return $this->blocksErrorId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return CBlocksErrorsViewed
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
