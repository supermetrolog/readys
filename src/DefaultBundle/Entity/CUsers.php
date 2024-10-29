<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CUsers
 *
 * @ORM\Table(name="c_users")
 * @ORM\Entity
 */
class CUsers
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
     * @ORM\Column(name="user_type", type="string", length=100, nullable=true)
     */
    private $userType;

    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=100, nullable=true)
     */
    private $userName;

    /**
     * @var string
     *
     * @ORM\Column(name="user_department", type="string", length=100, nullable=true)
     */
    private $userDepartment;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=100, nullable=true)
     */
    private $userEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="string", length=20, nullable=true)
     */
    private $userPassword;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_active", type="boolean", nullable=false)
     */
    private $userActive;

    /**
     * @var string
     *
     * @ORM\Column(name="user_phone", type="string", length=100, nullable=true)
     */
    private $userPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="call4", type="string", length=1000, nullable=false)
     */
    private $call4;

    /**
     * @var string
     *
     * @ORM\Column(name="call4_string", type="string", length=1000, nullable=false)
     */
    private $call4String;

    /**
     * @var string
     *
     * @ORM\Column(name="sms2", type="string", length=100, nullable=false)
     */
    private $sms2;

    /**
     * @var string
     *
     * @ORM\Column(name="user_title", type="string", length=200, nullable=true)
     */
    private $userTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="user_description", type="text", length=65535, nullable=true)
     */
    private $userDescription;

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_group", type="boolean", nullable=false)
     */
    private $userGroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_ingroup", type="integer", nullable=false)
     */
    private $userIngroup;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_active", type="date", nullable=true)
     */
    private $dtActive;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_remote", type="boolean", nullable=false)
     */
    private $allowRemote;

    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=100, nullable=true)
     */
    private $sessionId;

    /**
     * @var string
     *
     * @ORM\Column(name="ctype", type="string", length=20, nullable=true)
     */
    private $ctype;

    /**
     * @var string
     *
     * @ORM\Column(name="otype", type="string", length=20, nullable=true)
     */
    private $otype;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password_backup", type="string", length=20, nullable=true)
     */
    private $userPasswordBackup;

    /**
     * @var boolean
     *
     * @ORM\Column(name="apartments_allow", type="boolean", nullable=true)
     */
    private $apartmentsAllow;

    /**
     * @var boolean
     *
     * @ORM\Column(name="notupdatedt", type="boolean", nullable=true)
     */
    private $notupdatedt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_call2statall", type="boolean", nullable=true)
     */
    private $allowCall2statall;

    /**
     * @var string
     *
     * @ORM\Column(name="mergeid", type="string", length=32, nullable=true)
     */
    private $mergeid;

    /**
     * @var string
     *
     * @ORM\Column(name="mergeid_allow2ids", type="string", length=1000, nullable=true)
     */
    private $mergeidAllow2ids;

    /**
     * @var boolean
     *
     * @ORM\Column(name="newdesign", type="boolean", nullable=true)
     */
    private $newdesign;

    /**
     * @var boolean
     *
     * @ORM\Column(name="office_mail_digest", type="boolean", nullable=true)
     */
    private $officeMailDigest;



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
     * Set userType
     *
     * @param string $userType
     * @return CUsers
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return string 
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * @return CUsers
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set userDepartment
     *
     * @param string $userDepartment
     * @return CUsers
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
     * Set userEmail
     *
     * @param string $userEmail
     * @return CUsers
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string 
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set userPassword
     *
     * @param string $userPassword
     * @return CUsers
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    /**
     * Get userPassword
     *
     * @return string 
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Set userActive
     *
     * @param boolean $userActive
     * @return CUsers
     */
    public function setUserActive($userActive)
    {
        $this->userActive = $userActive;

        return $this;
    }

    /**
     * Get userActive
     *
     * @return boolean 
     */
    public function getUserActive()
    {
        return $this->userActive;
    }

    /**
     * Set userPhone
     *
     * @param string $userPhone
     * @return CUsers
     */
    public function setUserPhone($userPhone)
    {
        $this->userPhone = $userPhone;

        return $this;
    }

    /**
     * Get userPhone
     *
     * @return string 
     */
    public function getUserPhone()
    {
        return $this->userPhone;
    }

    /**
     * Set call4
     *
     * @param string $call4
     * @return CUsers
     */
    public function setCall4($call4)
    {
        $this->call4 = $call4;

        return $this;
    }

    /**
     * Get call4
     *
     * @return string 
     */
    public function getCall4()
    {
        return $this->call4;
    }

    /**
     * Set call4String
     *
     * @param string $call4String
     * @return CUsers
     */
    public function setCall4String($call4String)
    {
        $this->call4String = $call4String;

        return $this;
    }

    /**
     * Get call4String
     *
     * @return string 
     */
    public function getCall4String()
    {
        return $this->call4String;
    }

    /**
     * Set sms2
     *
     * @param string $sms2
     * @return CUsers
     */
    public function setSms2($sms2)
    {
        $this->sms2 = $sms2;

        return $this;
    }

    /**
     * Get sms2
     *
     * @return string 
     */
    public function getSms2()
    {
        return $this->sms2;
    }

    /**
     * Set userTitle
     *
     * @param string $userTitle
     * @return CUsers
     */
    public function setUserTitle($userTitle)
    {
        $this->userTitle = $userTitle;

        return $this;
    }

    /**
     * Get userTitle
     *
     * @return string 
     */
    public function getUserTitle()
    {
        return $this->userTitle;
    }

    /**
     * Set userDescription
     *
     * @param string $userDescription
     * @return CUsers
     */
    public function setUserDescription($userDescription)
    {
        $this->userDescription = $userDescription;

        return $this;
    }

    /**
     * Get userDescription
     *
     * @return string 
     */
    public function getUserDescription()
    {
        return $this->userDescription;
    }

    /**
     * Set userGroup
     *
     * @param boolean $userGroup
     * @return CUsers
     */
    public function setUserGroup($userGroup)
    {
        $this->userGroup = $userGroup;

        return $this;
    }

    /**
     * Get userGroup
     *
     * @return boolean 
     */
    public function getUserGroup()
    {
        return $this->userGroup;
    }

    /**
     * Set userIngroup
     *
     * @param integer $userIngroup
     * @return CUsers
     */
    public function setUserIngroup($userIngroup)
    {
        $this->userIngroup = $userIngroup;

        return $this;
    }

    /**
     * Get userIngroup
     *
     * @return integer 
     */
    public function getUserIngroup()
    {
        return $this->userIngroup;
    }

    /**
     * Set dtActive
     *
     * @param \DateTime $dtActive
     * @return CUsers
     */
    public function setDtActive($dtActive)
    {
        $this->dtActive = $dtActive;

        return $this;
    }

    /**
     * Get dtActive
     *
     * @return \DateTime 
     */
    public function getDtActive()
    {
        return $this->dtActive;
    }

    /**
     * Set allowRemote
     *
     * @param boolean $allowRemote
     * @return CUsers
     */
    public function setAllowRemote($allowRemote)
    {
        $this->allowRemote = $allowRemote;

        return $this;
    }

    /**
     * Get allowRemote
     *
     * @return boolean 
     */
    public function getAllowRemote()
    {
        return $this->allowRemote;
    }

    /**
     * Set sessionId
     *
     * @param string $sessionId
     * @return CUsers
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Get sessionId
     *
     * @return string 
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set ctype
     *
     * @param string $ctype
     * @return CUsers
     */
    public function setCtype($ctype)
    {
        $this->ctype = $ctype;

        return $this;
    }

    /**
     * Get ctype
     *
     * @return string 
     */
    public function getCtype()
    {
        return $this->ctype;
    }

    /**
     * Set otype
     *
     * @param string $otype
     * @return CUsers
     */
    public function setOtype($otype)
    {
        $this->otype = $otype;

        return $this;
    }

    /**
     * Get otype
     *
     * @return string 
     */
    public function getOtype()
    {
        return $this->otype;
    }

    /**
     * Set userPasswordBackup
     *
     * @param string $userPasswordBackup
     * @return CUsers
     */
    public function setUserPasswordBackup($userPasswordBackup)
    {
        $this->userPasswordBackup = $userPasswordBackup;

        return $this;
    }

    /**
     * Get userPasswordBackup
     *
     * @return string 
     */
    public function getUserPasswordBackup()
    {
        return $this->userPasswordBackup;
    }

    /**
     * Set apartmentsAllow
     *
     * @param boolean $apartmentsAllow
     * @return CUsers
     */
    public function setApartmentsAllow($apartmentsAllow)
    {
        $this->apartmentsAllow = $apartmentsAllow;

        return $this;
    }

    /**
     * Get apartmentsAllow
     *
     * @return boolean 
     */
    public function getApartmentsAllow()
    {
        return $this->apartmentsAllow;
    }

    /**
     * Set notupdatedt
     *
     * @param boolean $notupdatedt
     * @return CUsers
     */
    public function setNotupdatedt($notupdatedt)
    {
        $this->notupdatedt = $notupdatedt;

        return $this;
    }

    /**
     * Get notupdatedt
     *
     * @return boolean 
     */
    public function getNotupdatedt()
    {
        return $this->notupdatedt;
    }

    /**
     * Set allowCall2statall
     *
     * @param boolean $allowCall2statall
     * @return CUsers
     */
    public function setAllowCall2statall($allowCall2statall)
    {
        $this->allowCall2statall = $allowCall2statall;

        return $this;
    }

    /**
     * Get allowCall2statall
     *
     * @return boolean 
     */
    public function getAllowCall2statall()
    {
        return $this->allowCall2statall;
    }

    /**
     * Set mergeid
     *
     * @param string $mergeid
     * @return CUsers
     */
    public function setMergeid($mergeid)
    {
        $this->mergeid = $mergeid;

        return $this;
    }

    /**
     * Get mergeid
     *
     * @return string 
     */
    public function getMergeid()
    {
        return $this->mergeid;
    }

    /**
     * Set mergeidAllow2ids
     *
     * @param string $mergeidAllow2ids
     * @return CUsers
     */
    public function setMergeidAllow2ids($mergeidAllow2ids)
    {
        $this->mergeidAllow2ids = $mergeidAllow2ids;

        return $this;
    }

    /**
     * Get mergeidAllow2ids
     *
     * @return string 
     */
    public function getMergeidAllow2ids()
    {
        return $this->mergeidAllow2ids;
    }

    /**
     * Set newdesign
     *
     * @param boolean $newdesign
     * @return CUsers
     */
    public function setNewdesign($newdesign)
    {
        $this->newdesign = $newdesign;

        return $this;
    }

    /**
     * Get newdesign
     *
     * @return boolean 
     */
    public function getNewdesign()
    {
        return $this->newdesign;
    }

    /**
     * Set officeMailDigest
     *
     * @param boolean $officeMailDigest
     * @return CUsers
     */
    public function setOfficeMailDigest($officeMailDigest)
    {
        $this->officeMailDigest = $officeMailDigest;

        return $this;
    }

    /**
     * Get officeMailDigest
     *
     * @return boolean 
     */
    public function getOfficeMailDigest()
    {
        return $this->officeMailDigest;
    }
}
