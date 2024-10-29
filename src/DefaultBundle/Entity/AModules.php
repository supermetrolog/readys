<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AModules
 *
 * @ORM\Table(name="a_modules")
 * @ORM\Entity
 */
class AModules
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
     * @ORM\Column(name="module_name", type="string", length=100, nullable=true)
     */
    private $moduleName;

    /**
     * @var string
     *
     * @ORM\Column(name="module_title", type="string", length=100, nullable=true)
     */
    private $moduleTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="module_department", type="string", length=100, nullable=true)
     */
    private $moduleDepartment;



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
     * Set moduleName
     *
     * @param string $moduleName
     * @return AModules
     */
    public function setModuleName($moduleName)
    {
        $this->moduleName = $moduleName;

        return $this;
    }

    /**
     * Get moduleName
     *
     * @return string 
     */
    public function getModuleName()
    {
        return $this->moduleName;
    }

    /**
     * Set moduleTitle
     *
     * @param string $moduleTitle
     * @return AModules
     */
    public function setModuleTitle($moduleTitle)
    {
        $this->moduleTitle = $moduleTitle;

        return $this;
    }

    /**
     * Get moduleTitle
     *
     * @return string 
     */
    public function getModuleTitle()
    {
        return $this->moduleTitle;
    }

    /**
     * Set moduleDepartment
     *
     * @param string $moduleDepartment
     * @return AModules
     */
    public function setModuleDepartment($moduleDepartment)
    {
        $this->moduleDepartment = $moduleDepartment;

        return $this;
    }

    /**
     * Get moduleDepartment
     *
     * @return string 
     */
    public function getModuleDepartment()
    {
        return $this->moduleDepartment;
    }
}
