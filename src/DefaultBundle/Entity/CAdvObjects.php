<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CAdvObjects
 *
 * @ORM\Table(name="c_adv_objects", indexes={@ORM\Index(name="user_department", columns={"user_department"}), @ORM\Index(name="object_id", columns={"object_id"})})
 * @ORM\Entity
 */
class CAdvObjects
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
     * @var string
     *
     * @ORM\Column(name="object_banner", type="text", length=65535, nullable=true)
     */
    private $objectBanner;

    /**
     * @var string
     *
     * @ORM\Column(name="object_banner_tags", type="text", length=65535, nullable=true)
     */
    private $objectBannerTags;



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
     * @return CAdvObjects
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
     * @return CAdvObjects
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
     * Set objectBanner
     *
     * @param string $objectBanner
     * @return CAdvObjects
     */
    public function setObjectBanner($objectBanner)
    {
        $this->objectBanner = $objectBanner;

        return $this;
    }

    /**
     * Get objectBanner
     *
     * @return string 
     */
    public function getObjectBanner()
    {
        return $this->objectBanner;
    }

    /**
     * Set objectBannerTags
     *
     * @param string $objectBannerTags
     * @return CAdvObjects
     */
    public function setObjectBannerTags($objectBannerTags)
    {
        $this->objectBannerTags = $objectBannerTags;

        return $this;
    }

    /**
     * Get objectBannerTags
     *
     * @return string 
     */
    public function getObjectBannerTags()
    {
        return $this->objectBannerTags;
    }
}
