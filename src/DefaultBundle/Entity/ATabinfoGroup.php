<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ATabinfoGroup
 *
 * @ORM\Table(name="a_tabinfo_group", uniqueConstraints={@ORM\UniqueConstraint(name="tbl_name_col_group", columns={"tbl_name", "col_group"})})
 * @ORM\Entity
 */
class ATabinfoGroup
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
     * @ORM\Column(name="tbl_name", type="string", length=100, nullable=false)
     */
    private $tblName;

    /**
     * @var string
     *
     * @ORM\Column(name="col_group", type="string", length=100, nullable=false)
     */
    private $colGroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="col_group_sort", type="integer", nullable=false)
     */
    private $colGroupSort;



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
     * @return ATabinfoGroup
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
     * Set colGroup
     *
     * @param string $colGroup
     * @return ATabinfoGroup
     */
    public function setColGroup($colGroup)
    {
        $this->colGroup = $colGroup;

        return $this;
    }

    /**
     * Get colGroup
     *
     * @return string 
     */
    public function getColGroup()
    {
        return $this->colGroup;
    }

    /**
     * Set colGroupSort
     *
     * @param integer $colGroupSort
     * @return ATabinfoGroup
     */
    public function setColGroupSort($colGroupSort)
    {
        $this->colGroupSort = $colGroupSort;

        return $this;
    }

    /**
     * Get colGroupSort
     *
     * @return integer 
     */
    public function getColGroupSort()
    {
        return $this->colGroupSort;
    }
}
