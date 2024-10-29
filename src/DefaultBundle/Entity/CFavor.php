<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CFavor
 *
 * @ORM\Table(name="c_favor", indexes={@ORM\Index(name="tbl_name", columns={"tbl_name", "tbl_id", "user_id"})})
 * @ORM\Entity
 */
class CFavor
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
     * @ORM\Column(name="tbl_name", type="string", length=20, nullable=true)
     */
    private $tblName;

    /**
     * @var integer
     *
     * @ORM\Column(name="tbl_id", type="integer", nullable=true)
     */
    private $tblId;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false)
     */
    private $groupId;



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
     * @return CFavor
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
     * @return CFavor
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
     * Set userId
     *
     * @param integer $userId
     * @return CFavor
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

    /**
     * Set groupId
     *
     * @param integer $groupId
     * @return CFavor
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * Get groupId
     *
     * @return integer 
     */
    public function getGroupId()
    {
        return $this->groupId;
    }
}
