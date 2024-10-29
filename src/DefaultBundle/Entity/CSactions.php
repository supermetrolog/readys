<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CSactions
 *
 * @ORM\Table(name="c_sactions")
 * @ORM\Entity
 */
class CSactions
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
     * @ORM\Column(name="request_table", type="string", length=64, nullable=true)
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
     * @ORM\Column(name="dt_action", type="date", nullable=true)
     */
    private $dtAction;

    /**
     * @var string
     *
     * @ORM\Column(name="action_type", type="string", length=20, nullable=true)
     */
    private $actionType;

    /**
     * @var boolean
     *
     * @ORM\Column(name="action_maked", type="boolean", nullable=false)
     */
    private $actionMaked;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

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
     * Set customerTable
     *
     * @param string $customerTable
     * @return CSactions
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
     * @return CSactions
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
     * @return CSactions
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
     * @return CSactions
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
     * Set dtAction
     *
     * @param \DateTime $dtAction
     * @return CSactions
     */
    public function setDtAction($dtAction)
    {
        $this->dtAction = $dtAction;

        return $this;
    }

    /**
     * Get dtAction
     *
     * @return \DateTime 
     */
    public function getDtAction()
    {
        return $this->dtAction;
    }

    /**
     * Set actionType
     *
     * @param string $actionType
     * @return CSactions
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Get actionType
     *
     * @return string 
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Set actionMaked
     *
     * @param boolean $actionMaked
     * @return CSactions
     */
    public function setActionMaked($actionMaked)
    {
        $this->actionMaked = $actionMaked;

        return $this;
    }

    /**
     * Get actionMaked
     *
     * @return boolean 
     */
    public function getActionMaked()
    {
        return $this->actionMaked;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return CSactions
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return CSactions
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
     * Set deleted
     *
     * @param boolean $deleted
     * @return CSactions
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
