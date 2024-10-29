<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CCallOffice
 *
 * @ORM\Table(name="c_call_office", indexes={@ORM\Index(name="IdChain", columns={"IdChain"}), @ORM\Index(name="IdNext", columns={"IdNext"}), @ORM\Index(name="IdPrev", columns={"IdPrev"}), @ORM\Index(name="TimeStart", columns={"TimeStart"}), @ORM\Index(name="TimeAnswer", columns={"TimeAnswer"}), @ORM\Index(name="TimeStop", columns={"TimeStop"}), @ORM\Index(name="IdChain_IdPrev", columns={"IdChain", "IdPrev"}), @ORM\Index(name="IdChain_IdNext", columns={"IdChain", "IdNext"}), @ORM\Index(name="AOutNumber_Direction_TimeStart", columns={"AOutNumber", "Direction", "TimeStart"}), @ORM\Index(name="Id", columns={"Id"}), @ORM\Index(name="CommutationIndex", columns={"CommutationIndex"})})
 * @ORM\Entity
 */
class CCallOffice
{
    /**
     * @var integer
     *
     * @ORM\Column(name="i", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $i;

    /**
     * @var string
     *
     * @ORM\Column(name="Id", type="string", length=36, nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Direction", type="string", length=36, nullable=false)
     */
    private $direction;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=36, nullable=false)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="CommutationCount", type="integer", nullable=true)
     */
    private $commutationcount;

    /**
     * @var integer
     *
     * @ORM\Column(name="CommutationIndex", type="integer", nullable=true)
     */
    private $commutationindex;

    /**
     * @var string
     *
     * @ORM\Column(name="IdChain", type="string", length=36, nullable=false)
     */
    private $idchain;

    /**
     * @var string
     *
     * @ORM\Column(name="TimeStart", type="string", length=36, nullable=false)
     */
    private $timestart;

    /**
     * @var string
     *
     * @ORM\Column(name="TimeAnswer", type="string", length=36, nullable=false)
     */
    private $timeanswer;

    /**
     * @var string
     *
     * @ORM\Column(name="TimeStop", type="string", length=36, nullable=false)
     */
    private $timestop;

    /**
     * @var integer
     *
     * @ORM\Column(name="ReasonStart", type="integer", nullable=true)
     */
    private $reasonstart;

    /**
     * @var integer
     *
     * @ORM\Column(name="ReasonStop", type="integer", nullable=true)
     */
    private $reasonstop;

    /**
     * @var integer
     *
     * @ORM\Column(name="StopSide", type="integer", nullable=true)
     */
    private $stopside;

    /**
     * @var string
     *
     * @ORM\Column(name="ALineId", type="string", length=36, nullable=false)
     */
    private $alineid;

    /**
     * @var string
     *
     * @ORM\Column(name="BLineId", type="string", length=36, nullable=false)
     */
    private $blineid;

    /**
     * @var string
     *
     * @ORM\Column(name="AOutNumber", type="string", length=36, nullable=false)
     */
    private $aoutnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="BOutNumber", type="string", length=36, nullable=false)
     */
    private $boutnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="ALineNum", type="string", length=6, nullable=false)
     */
    private $alinenum;

    /**
     * @var string
     *
     * @ORM\Column(name="BLineNum", type="string", length=5, nullable=false)
     */
    private $blinenum;

    /**
     * @var string
     *
     * @ORM\Column(name="AUserId", type="string", length=36, nullable=false)
     */
    private $auserid;

    /**
     * @var string
     *
     * @ORM\Column(name="BUserId", type="string", length=36, nullable=false)
     */
    private $buserid;

    /**
     * @var string
     *
     * @ORM\Column(name="ANumberDialed", type="string", length=36, nullable=false)
     */
    private $anumberdialed;

    /**
     * @var string
     *
     * @ORM\Column(name="BNumberDialed", type="string", length=36, nullable=false)
     */
    private $bnumberdialed;

    /**
     * @var integer
     *
     * @ORM\Column(name="IsRecorded", type="integer", nullable=true)
     */
    private $isrecorded;

    /**
     * @var integer
     *
     * @ORM\Column(name="ConnectionType", type="integer", nullable=true)
     */
    private $connectiontype;

    /**
     * @var string
     *
     * @ORM\Column(name="Astr", type="string", length=64, nullable=false)
     */
    private $astr;

    /**
     * @var string
     *
     * @ORM\Column(name="Bstr", type="string", length=64, nullable=false)
     */
    private $bstr;

    /**
     * @var integer
     *
     * @ORM\Column(name="FromCC", type="integer", nullable=true)
     */
    private $fromcc;

    /**
     * @var integer
     *
     * @ORM\Column(name="IsBetweenUsers", type="integer", nullable=true)
     */
    private $isbetweenusers;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdRecDir", type="integer", nullable=true)
     */
    private $idrecdir;

    /**
     * @var string
     *
     * @ORM\Column(name="IdNext", type="string", length=36, nullable=false)
     */
    private $idnext;

    /**
     * @var string
     *
     * @ORM\Column(name="IdPrev", type="string", length=36, nullable=false)
     */
    private $idprev;

    /**
     * @var integer
     *
     * @ORM\Column(name="ReasonFailed", type="integer", nullable=true)
     */
    private $reasonfailed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="_sync", type="boolean", nullable=false)
     */
    private $sync;



    /**
     * Get i
     *
     * @return integer 
     */
    public function getI()
    {
        return $this->i;
    }

    /**
     * Set id
     *
     * @param string $id
     * @return CCallOffice
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set direction
     *
     * @param string $direction
     * @return CCallOffice
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Get direction
     *
     * @return string 
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return CCallOffice
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set commutationcount
     *
     * @param integer $commutationcount
     * @return CCallOffice
     */
    public function setCommutationcount($commutationcount)
    {
        $this->commutationcount = $commutationcount;

        return $this;
    }

    /**
     * Get commutationcount
     *
     * @return integer 
     */
    public function getCommutationcount()
    {
        return $this->commutationcount;
    }

    /**
     * Set commutationindex
     *
     * @param integer $commutationindex
     * @return CCallOffice
     */
    public function setCommutationindex($commutationindex)
    {
        $this->commutationindex = $commutationindex;

        return $this;
    }

    /**
     * Get commutationindex
     *
     * @return integer 
     */
    public function getCommutationindex()
    {
        return $this->commutationindex;
    }

    /**
     * Set idchain
     *
     * @param string $idchain
     * @return CCallOffice
     */
    public function setIdchain($idchain)
    {
        $this->idchain = $idchain;

        return $this;
    }

    /**
     * Get idchain
     *
     * @return string 
     */
    public function getIdchain()
    {
        return $this->idchain;
    }

    /**
     * Set timestart
     *
     * @param string $timestart
     * @return CCallOffice
     */
    public function setTimestart($timestart)
    {
        $this->timestart = $timestart;

        return $this;
    }

    /**
     * Get timestart
     *
     * @return string 
     */
    public function getTimestart()
    {
        return $this->timestart;
    }

    /**
     * Set timeanswer
     *
     * @param string $timeanswer
     * @return CCallOffice
     */
    public function setTimeanswer($timeanswer)
    {
        $this->timeanswer = $timeanswer;

        return $this;
    }

    /**
     * Get timeanswer
     *
     * @return string 
     */
    public function getTimeanswer()
    {
        return $this->timeanswer;
    }

    /**
     * Set timestop
     *
     * @param string $timestop
     * @return CCallOffice
     */
    public function setTimestop($timestop)
    {
        $this->timestop = $timestop;

        return $this;
    }

    /**
     * Get timestop
     *
     * @return string 
     */
    public function getTimestop()
    {
        return $this->timestop;
    }

    /**
     * Set reasonstart
     *
     * @param integer $reasonstart
     * @return CCallOffice
     */
    public function setReasonstart($reasonstart)
    {
        $this->reasonstart = $reasonstart;

        return $this;
    }

    /**
     * Get reasonstart
     *
     * @return integer 
     */
    public function getReasonstart()
    {
        return $this->reasonstart;
    }

    /**
     * Set reasonstop
     *
     * @param integer $reasonstop
     * @return CCallOffice
     */
    public function setReasonstop($reasonstop)
    {
        $this->reasonstop = $reasonstop;

        return $this;
    }

    /**
     * Get reasonstop
     *
     * @return integer 
     */
    public function getReasonstop()
    {
        return $this->reasonstop;
    }

    /**
     * Set stopside
     *
     * @param integer $stopside
     * @return CCallOffice
     */
    public function setStopside($stopside)
    {
        $this->stopside = $stopside;

        return $this;
    }

    /**
     * Get stopside
     *
     * @return integer 
     */
    public function getStopside()
    {
        return $this->stopside;
    }

    /**
     * Set alineid
     *
     * @param string $alineid
     * @return CCallOffice
     */
    public function setAlineid($alineid)
    {
        $this->alineid = $alineid;

        return $this;
    }

    /**
     * Get alineid
     *
     * @return string 
     */
    public function getAlineid()
    {
        return $this->alineid;
    }

    /**
     * Set blineid
     *
     * @param string $blineid
     * @return CCallOffice
     */
    public function setBlineid($blineid)
    {
        $this->blineid = $blineid;

        return $this;
    }

    /**
     * Get blineid
     *
     * @return string 
     */
    public function getBlineid()
    {
        return $this->blineid;
    }

    /**
     * Set aoutnumber
     *
     * @param string $aoutnumber
     * @return CCallOffice
     */
    public function setAoutnumber($aoutnumber)
    {
        $this->aoutnumber = $aoutnumber;

        return $this;
    }

    /**
     * Get aoutnumber
     *
     * @return string 
     */
    public function getAoutnumber()
    {
        return $this->aoutnumber;
    }

    /**
     * Set boutnumber
     *
     * @param string $boutnumber
     * @return CCallOffice
     */
    public function setBoutnumber($boutnumber)
    {
        $this->boutnumber = $boutnumber;

        return $this;
    }

    /**
     * Get boutnumber
     *
     * @return string 
     */
    public function getBoutnumber()
    {
        return $this->boutnumber;
    }

    /**
     * Set alinenum
     *
     * @param string $alinenum
     * @return CCallOffice
     */
    public function setAlinenum($alinenum)
    {
        $this->alinenum = $alinenum;

        return $this;
    }

    /**
     * Get alinenum
     *
     * @return string 
     */
    public function getAlinenum()
    {
        return $this->alinenum;
    }

    /**
     * Set blinenum
     *
     * @param string $blinenum
     * @return CCallOffice
     */
    public function setBlinenum($blinenum)
    {
        $this->blinenum = $blinenum;

        return $this;
    }

    /**
     * Get blinenum
     *
     * @return string 
     */
    public function getBlinenum()
    {
        return $this->blinenum;
    }

    /**
     * Set auserid
     *
     * @param string $auserid
     * @return CCallOffice
     */
    public function setAuserid($auserid)
    {
        $this->auserid = $auserid;

        return $this;
    }

    /**
     * Get auserid
     *
     * @return string 
     */
    public function getAuserid()
    {
        return $this->auserid;
    }

    /**
     * Set buserid
     *
     * @param string $buserid
     * @return CCallOffice
     */
    public function setBuserid($buserid)
    {
        $this->buserid = $buserid;

        return $this;
    }

    /**
     * Get buserid
     *
     * @return string 
     */
    public function getBuserid()
    {
        return $this->buserid;
    }

    /**
     * Set anumberdialed
     *
     * @param string $anumberdialed
     * @return CCallOffice
     */
    public function setAnumberdialed($anumberdialed)
    {
        $this->anumberdialed = $anumberdialed;

        return $this;
    }

    /**
     * Get anumberdialed
     *
     * @return string 
     */
    public function getAnumberdialed()
    {
        return $this->anumberdialed;
    }

    /**
     * Set bnumberdialed
     *
     * @param string $bnumberdialed
     * @return CCallOffice
     */
    public function setBnumberdialed($bnumberdialed)
    {
        $this->bnumberdialed = $bnumberdialed;

        return $this;
    }

    /**
     * Get bnumberdialed
     *
     * @return string 
     */
    public function getBnumberdialed()
    {
        return $this->bnumberdialed;
    }

    /**
     * Set isrecorded
     *
     * @param integer $isrecorded
     * @return CCallOffice
     */
    public function setIsrecorded($isrecorded)
    {
        $this->isrecorded = $isrecorded;

        return $this;
    }

    /**
     * Get isrecorded
     *
     * @return integer 
     */
    public function getIsrecorded()
    {
        return $this->isrecorded;
    }

    /**
     * Set connectiontype
     *
     * @param integer $connectiontype
     * @return CCallOffice
     */
    public function setConnectiontype($connectiontype)
    {
        $this->connectiontype = $connectiontype;

        return $this;
    }

    /**
     * Get connectiontype
     *
     * @return integer 
     */
    public function getConnectiontype()
    {
        return $this->connectiontype;
    }

    /**
     * Set astr
     *
     * @param string $astr
     * @return CCallOffice
     */
    public function setAstr($astr)
    {
        $this->astr = $astr;

        return $this;
    }

    /**
     * Get astr
     *
     * @return string 
     */
    public function getAstr()
    {
        return $this->astr;
    }

    /**
     * Set bstr
     *
     * @param string $bstr
     * @return CCallOffice
     */
    public function setBstr($bstr)
    {
        $this->bstr = $bstr;

        return $this;
    }

    /**
     * Get bstr
     *
     * @return string 
     */
    public function getBstr()
    {
        return $this->bstr;
    }

    /**
     * Set fromcc
     *
     * @param integer $fromcc
     * @return CCallOffice
     */
    public function setFromcc($fromcc)
    {
        $this->fromcc = $fromcc;

        return $this;
    }

    /**
     * Get fromcc
     *
     * @return integer 
     */
    public function getFromcc()
    {
        return $this->fromcc;
    }

    /**
     * Set isbetweenusers
     *
     * @param integer $isbetweenusers
     * @return CCallOffice
     */
    public function setIsbetweenusers($isbetweenusers)
    {
        $this->isbetweenusers = $isbetweenusers;

        return $this;
    }

    /**
     * Get isbetweenusers
     *
     * @return integer 
     */
    public function getIsbetweenusers()
    {
        return $this->isbetweenusers;
    }

    /**
     * Set idrecdir
     *
     * @param integer $idrecdir
     * @return CCallOffice
     */
    public function setIdrecdir($idrecdir)
    {
        $this->idrecdir = $idrecdir;

        return $this;
    }

    /**
     * Get idrecdir
     *
     * @return integer 
     */
    public function getIdrecdir()
    {
        return $this->idrecdir;
    }

    /**
     * Set idnext
     *
     * @param string $idnext
     * @return CCallOffice
     */
    public function setIdnext($idnext)
    {
        $this->idnext = $idnext;

        return $this;
    }

    /**
     * Get idnext
     *
     * @return string 
     */
    public function getIdnext()
    {
        return $this->idnext;
    }

    /**
     * Set idprev
     *
     * @param string $idprev
     * @return CCallOffice
     */
    public function setIdprev($idprev)
    {
        $this->idprev = $idprev;

        return $this;
    }

    /**
     * Get idprev
     *
     * @return string 
     */
    public function getIdprev()
    {
        return $this->idprev;
    }

    /**
     * Set reasonfailed
     *
     * @param integer $reasonfailed
     * @return CCallOffice
     */
    public function setReasonfailed($reasonfailed)
    {
        $this->reasonfailed = $reasonfailed;

        return $this;
    }

    /**
     * Get reasonfailed
     *
     * @return integer 
     */
    public function getReasonfailed()
    {
        return $this->reasonfailed;
    }

    /**
     * Set sync
     *
     * @param boolean $sync
     * @return CCallOffice
     */
    public function setSync($sync)
    {
        $this->sync = $sync;

        return $this;
    }

    /**
     * Get sync
     *
     * @return boolean 
     */
    public function getSync()
    {
        return $this->sync;
    }
}
