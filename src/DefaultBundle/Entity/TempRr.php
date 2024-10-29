<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TempRr
 *
 * @ORM\Table(name="temp_rr")
 * @ORM\Entity
 */
class TempRr
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
     * @var \DateTime
     *
     * @ORM\Column(name="temp_data", type="date", nullable=true)
     */
    private $tempData;

    /**
     * @var string
     *
     * @ORM\Column(name="temp_company", type="string", length=200, nullable=true)
     */
    private $tempCompany;

    /**
     * @var string
     *
     * @ORM\Column(name="temp_fio", type="string", length=200, nullable=true)
     */
    private $tempFio;

    /**
     * @var string
     *
     * @ORM\Column(name="temp_phones", type="string", length=200, nullable=true)
     */
    private $tempPhones;

    /**
     * @var string
     *
     * @ORM\Column(name="temp_email", type="string", length=200, nullable=true)
     */
    private $tempEmail;

    /**
     * @var integer
     *
     * @ORM\Column(name="temp_ar0", type="integer", nullable=true)
     */
    private $tempAr0;

    /**
     * @var integer
     *
     * @ORM\Column(name="temp_ar1", type="integer", nullable=true)
     */
    private $tempAr1;

    /**
     * @var string
     *
     * @ORM\Column(name="temp_func", type="string", length=200, nullable=true)
     */
    private $tempFunc;

    /**
     * @var integer
     *
     * @ORM\Column(name="temp_rprice", type="integer", nullable=true)
     */
    private $tempRprice;

    /**
     * @var integer
     *
     * @ORM\Column(name="temp_sprice", type="integer", nullable=true)
     */
    private $tempSprice;

    /**
     * @var integer
     *
     * @ORM\Column(name="temp_currency", type="integer", nullable=false)
     */
    private $tempCurrency;

    /**
     * @var integer
     *
     * @ORM\Column(name="temp_pmon", type="integer", nullable=false)
     */
    private $tempPmon;

    /**
     * @var string
     *
     * @ORM\Column(name="temp_r0", type="string", length=100, nullable=true)
     */
    private $tempR0;

    /**
     * @var integer
     *
     * @ORM\Column(name="temp_dealt", type="integer", nullable=false)
     */
    private $tempDealt;

    /**
     * @var integer
     *
     * @ORM\Column(name="temp_inf0", type="integer", nullable=false)
     */
    private $tempInf0;

    /**
     * @var string
     *
     * @ORM\Column(name="temp_infos", type="string", length=200, nullable=true)
     */
    private $tempInfos;

    /**
     * @var integer
     *
     * @ORM\Column(name="temp_agent", type="integer", nullable=false)
     */
    private $tempAgent;

    /**
     * @var string
     *
     * @ORM\Column(name="temp_comments", type="string", length=2000, nullable=true)
     */
    private $tempComments;

    /**
     * @var string
     *
     * @ORM\Column(name="temp_alltext", type="text", length=65535, nullable=true)
     */
    private $tempAlltext;



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
     * Set tempData
     *
     * @param \DateTime $tempData
     * @return TempRr
     */
    public function setTempData($tempData)
    {
        $this->tempData = $tempData;

        return $this;
    }

    /**
     * Get tempData
     *
     * @return \DateTime 
     */
    public function getTempData()
    {
        return $this->tempData;
    }

    /**
     * Set tempCompany
     *
     * @param string $tempCompany
     * @return TempRr
     */
    public function setTempCompany($tempCompany)
    {
        $this->tempCompany = $tempCompany;

        return $this;
    }

    /**
     * Get tempCompany
     *
     * @return string 
     */
    public function getTempCompany()
    {
        return $this->tempCompany;
    }

    /**
     * Set tempFio
     *
     * @param string $tempFio
     * @return TempRr
     */
    public function setTempFio($tempFio)
    {
        $this->tempFio = $tempFio;

        return $this;
    }

    /**
     * Get tempFio
     *
     * @return string 
     */
    public function getTempFio()
    {
        return $this->tempFio;
    }

    /**
     * Set tempPhones
     *
     * @param string $tempPhones
     * @return TempRr
     */
    public function setTempPhones($tempPhones)
    {
        $this->tempPhones = $tempPhones;

        return $this;
    }

    /**
     * Get tempPhones
     *
     * @return string 
     */
    public function getTempPhones()
    {
        return $this->tempPhones;
    }

    /**
     * Set tempEmail
     *
     * @param string $tempEmail
     * @return TempRr
     */
    public function setTempEmail($tempEmail)
    {
        $this->tempEmail = $tempEmail;

        return $this;
    }

    /**
     * Get tempEmail
     *
     * @return string 
     */
    public function getTempEmail()
    {
        return $this->tempEmail;
    }

    /**
     * Set tempAr0
     *
     * @param integer $tempAr0
     * @return TempRr
     */
    public function setTempAr0($tempAr0)
    {
        $this->tempAr0 = $tempAr0;

        return $this;
    }

    /**
     * Get tempAr0
     *
     * @return integer 
     */
    public function getTempAr0()
    {
        return $this->tempAr0;
    }

    /**
     * Set tempAr1
     *
     * @param integer $tempAr1
     * @return TempRr
     */
    public function setTempAr1($tempAr1)
    {
        $this->tempAr1 = $tempAr1;

        return $this;
    }

    /**
     * Get tempAr1
     *
     * @return integer 
     */
    public function getTempAr1()
    {
        return $this->tempAr1;
    }

    /**
     * Set tempFunc
     *
     * @param string $tempFunc
     * @return TempRr
     */
    public function setTempFunc($tempFunc)
    {
        $this->tempFunc = $tempFunc;

        return $this;
    }

    /**
     * Get tempFunc
     *
     * @return string 
     */
    public function getTempFunc()
    {
        return $this->tempFunc;
    }

    /**
     * Set tempRprice
     *
     * @param integer $tempRprice
     * @return TempRr
     */
    public function setTempRprice($tempRprice)
    {
        $this->tempRprice = $tempRprice;

        return $this;
    }

    /**
     * Get tempRprice
     *
     * @return integer 
     */
    public function getTempRprice()
    {
        return $this->tempRprice;
    }

    /**
     * Set tempSprice
     *
     * @param integer $tempSprice
     * @return TempRr
     */
    public function setTempSprice($tempSprice)
    {
        $this->tempSprice = $tempSprice;

        return $this;
    }

    /**
     * Get tempSprice
     *
     * @return integer 
     */
    public function getTempSprice()
    {
        return $this->tempSprice;
    }

    /**
     * Set tempCurrency
     *
     * @param integer $tempCurrency
     * @return TempRr
     */
    public function setTempCurrency($tempCurrency)
    {
        $this->tempCurrency = $tempCurrency;

        return $this;
    }

    /**
     * Get tempCurrency
     *
     * @return integer 
     */
    public function getTempCurrency()
    {
        return $this->tempCurrency;
    }

    /**
     * Set tempPmon
     *
     * @param integer $tempPmon
     * @return TempRr
     */
    public function setTempPmon($tempPmon)
    {
        $this->tempPmon = $tempPmon;

        return $this;
    }

    /**
     * Get tempPmon
     *
     * @return integer 
     */
    public function getTempPmon()
    {
        return $this->tempPmon;
    }

    /**
     * Set tempR0
     *
     * @param string $tempR0
     * @return TempRr
     */
    public function setTempR0($tempR0)
    {
        $this->tempR0 = $tempR0;

        return $this;
    }

    /**
     * Get tempR0
     *
     * @return string 
     */
    public function getTempR0()
    {
        return $this->tempR0;
    }

    /**
     * Set tempDealt
     *
     * @param integer $tempDealt
     * @return TempRr
     */
    public function setTempDealt($tempDealt)
    {
        $this->tempDealt = $tempDealt;

        return $this;
    }

    /**
     * Get tempDealt
     *
     * @return integer 
     */
    public function getTempDealt()
    {
        return $this->tempDealt;
    }

    /**
     * Set tempInf0
     *
     * @param integer $tempInf0
     * @return TempRr
     */
    public function setTempInf0($tempInf0)
    {
        $this->tempInf0 = $tempInf0;

        return $this;
    }

    /**
     * Get tempInf0
     *
     * @return integer 
     */
    public function getTempInf0()
    {
        return $this->tempInf0;
    }

    /**
     * Set tempInfos
     *
     * @param string $tempInfos
     * @return TempRr
     */
    public function setTempInfos($tempInfos)
    {
        $this->tempInfos = $tempInfos;

        return $this;
    }

    /**
     * Get tempInfos
     *
     * @return string 
     */
    public function getTempInfos()
    {
        return $this->tempInfos;
    }

    /**
     * Set tempAgent
     *
     * @param integer $tempAgent
     * @return TempRr
     */
    public function setTempAgent($tempAgent)
    {
        $this->tempAgent = $tempAgent;

        return $this;
    }

    /**
     * Get tempAgent
     *
     * @return integer 
     */
    public function getTempAgent()
    {
        return $this->tempAgent;
    }

    /**
     * Set tempComments
     *
     * @param string $tempComments
     * @return TempRr
     */
    public function setTempComments($tempComments)
    {
        $this->tempComments = $tempComments;

        return $this;
    }

    /**
     * Get tempComments
     *
     * @return string 
     */
    public function getTempComments()
    {
        return $this->tempComments;
    }

    /**
     * Set tempAlltext
     *
     * @param string $tempAlltext
     * @return TempRr
     */
    public function setTempAlltext($tempAlltext)
    {
        $this->tempAlltext = $tempAlltext;

        return $this;
    }

    /**
     * Get tempAlltext
     *
     * @return string 
     */
    public function getTempAlltext()
    {
        return $this->tempAlltext;
    }
}
