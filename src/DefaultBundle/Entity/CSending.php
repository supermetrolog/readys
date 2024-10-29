<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CSending
 *
 * @ORM\Table(name="c_sending", indexes={@ORM\Index(name="object_table", columns={"object_table"}), @ORM\Index(name="object_id", columns={"object_id"}), @ORM\Index(name="customer_table", columns={"customer_table"}), @ORM\Index(name="customer_id", columns={"customer_id"}), @ORM\Index(name="request_table", columns={"request_table"}), @ORM\Index(name="request_id", columns={"request_id"}), @ORM\Index(name="dt_sending", columns={"dt_sending"}), @ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="sending_status", columns={"sending_status"}), @ORM\Index(name="object_table_2", columns={"object_table", "request_table", "request_id"})})
 * @ORM\Entity
 */
class CSending
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
     * @ORM\Column(name="object_table", type="string", length=100, nullable=true)
     */
    private $objectTable;

    /**
     * @var integer
     *
     * @ORM\Column(name="object_id", type="integer", nullable=true)
     */
    private $objectId;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_table", type="string", length=100, nullable=true)
     */
    private $customerTable;

    /**
     * @var integer
     *
     * @ORM\Column(name="customer_id", type="integer", nullable=true)
     */
    private $customerId;

    /**
     * @var string
     *
     * @ORM\Column(name="request_table", type="string", length=32, nullable=true)
     */
    private $requestTable;

    /**
     * @var integer
     *
     * @ORM\Column(name="request_id", type="integer", nullable=true)
     */
    private $requestId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_sending", type="date", nullable=true)
     */
    private $dtSending;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sending_status", type="boolean", nullable=false)
     */
    private $sendingStatus;



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
     * Set objectTable
     *
     * @param string $objectTable
     * @return CSending
     */
    public function setObjectTable($objectTable)
    {
        $this->objectTable = $objectTable;

        return $this;
    }

    /**
     * Get objectTable
     *
     * @return string 
     */
    public function getObjectTable()
    {
        return $this->objectTable;
    }

    /**
     * Set objectId
     *
     * @param integer $objectId
     * @return CSending
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
     * Set customerTable
     *
     * @param string $customerTable
     * @return CSending
     */
    public function setCustomerTable($customerTable)
    {
        $this->customerTable = $customerTable;

        return $this;
    }

    /**
     * Get customerTable
     *
     * @return string 
     */
    public function getCustomerTable()
    {
        return $this->customerTable;
    }

    /**
     * Set customerId
     *
     * @param integer $customerId
     * @return CSending
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return integer 
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set requestTable
     *
     * @param string $requestTable
     * @return CSending
     */
    public function setRequestTable($requestTable)
    {
        $this->requestTable = $requestTable;

        return $this;
    }

    /**
     * Get requestTable
     *
     * @return string 
     */
    public function getRequestTable()
    {
        return $this->requestTable;
    }

    /**
     * Set requestId
     *
     * @param integer $requestId
     * @return CSending
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;

        return $this;
    }

    /**
     * Get requestId
     *
     * @return integer 
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Set dtSending
     *
     * @param \DateTime $dtSending
     * @return CSending
     */
    public function setDtSending($dtSending)
    {
        $this->dtSending = $dtSending;

        return $this;
    }

    /**
     * Get dtSending
     *
     * @return \DateTime 
     */
    public function getDtSending()
    {
        return $this->dtSending;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return CSending
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
     * Set sendingStatus
     *
     * @param boolean $sendingStatus
     * @return CSending
     */
    public function setSendingStatus($sendingStatus)
    {
        $this->sendingStatus = $sendingStatus;

        return $this;
    }

    /**
     * Get sendingStatus
     *
     * @return boolean 
     */
    public function getSendingStatus()
    {
        return $this->sendingStatus;
    }
}
