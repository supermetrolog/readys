<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CErr
 *
 * @ORM\Table(name="c_err", uniqueConstraints={@ORM\UniqueConstraint(name="type_typeerr_id", columns={"type", "typeerr", "id"})})
 * @ORM\Entity
 */
class CErr
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
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="added", type="datetime", nullable=false)
     */
    private $added;

    /**
     * @var integer
     *
     * @ORM\Column(name="agent", type="integer", nullable=false)
     */
    private $agent;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    private $updated;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="typeerr", type="string", length=100, nullable=false)
     */
    private $typeerr;

    /**
     * @var string
     *
     * @ORM\Column(name="msg", type="string", length=2000, nullable=false)
     */
    private $msg;

    /**
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=32, nullable=false)
     */
    private $hash;

    /**
     * @var string
     *
     * @ORM\Column(name="shortname", type="string", length=2000, nullable=false)
     */
    private $shortname;



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
     * @param integer $id
     * @return CErr
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

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
     * Set added
     *
     * @param \DateTime $added
     * @return CErr
     */
    public function setAdded($added)
    {
        $this->added = $added;

        return $this;
    }

    /**
     * Get added
     *
     * @return \DateTime 
     */
    public function getAdded()
    {
        return $this->added;
    }

    /**
     * Set agent
     *
     * @param integer $agent
     * @return CErr
     */
    public function setAgent($agent)
    {
        $this->agent = $agent;

        return $this;
    }

    /**
     * Get agent
     *
     * @return integer 
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return CErr
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return CErr
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set typeerr
     *
     * @param string $typeerr
     * @return CErr
     */
    public function setTypeerr($typeerr)
    {
        $this->typeerr = $typeerr;

        return $this;
    }

    /**
     * Get typeerr
     *
     * @return string 
     */
    public function getTypeerr()
    {
        return $this->typeerr;
    }

    /**
     * Set msg
     *
     * @param string $msg
     * @return CErr
     */
    public function setMsg($msg)
    {
        $this->msg = $msg;

        return $this;
    }

    /**
     * Get msg
     *
     * @return string 
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * Set hash
     *
     * @param string $hash
     * @return CErr
     */
    public function setHash($hash)
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * Get hash
     *
     * @return string 
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set shortname
     *
     * @param string $shortname
     * @return CErr
     */
    public function setShortname($shortname)
    {
        $this->shortname = $shortname;

        return $this;
    }

    /**
     * Get shortname
     *
     * @return string 
     */
    public function getShortname()
    {
        return $this->shortname;
    }
}
