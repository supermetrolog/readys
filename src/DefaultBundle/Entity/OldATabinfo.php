<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OldATabinfo
 *
 * @ORM\Table(name="old_a_tabinfo")
 * @ORM\Entity
 */
class OldATabinfo
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
     * @ORM\Column(name="tbl_name", type="string", length=100, nullable=true)
     */
    private $tblName;

    /**
     * @var string
     *
     * @ORM\Column(name="tbl_title", type="string", length=100, nullable=true)
     */
    private $tblTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="col_name", type="string", length=100, nullable=true)
     */
    private $colName;

    /**
     * @var string
     *
     * @ORM\Column(name="col_title", type="string", length=100, nullable=true)
     */
    private $colTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="col_type", type="string", length=20, nullable=true)
     */
    private $colType;

    /**
     * @var string
     *
     * @ORM\Column(name="col_lib_tbl", type="string", length=100, nullable=true)
     */
    private $colLibTbl;

    /**
     * @var string
     *
     * @ORM\Column(name="col_lib_fields", type="string", length=200, nullable=true)
     */
    private $colLibFields;

    /**
     * @var string
     *
     * @ORM\Column(name="col_group", type="string", length=100, nullable=true)
     */
    private $colGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="col_search", type="string", length=100, nullable=true)
     */
    private $colSearch;

    /**
     * @var integer
     *
     * @ORM\Column(name="col_sgroup", type="integer", nullable=true)
     */
    private $colSgroup;

    /**
     * @var string
     *
     * @ORM\Column(name="col_table", type="string", length=100, nullable=true)
     */
    private $colTable;

    /**
     * @var string
     *
     * @ORM\Column(name="col_view", type="string", length=100, nullable=true)
     */
    private $colView;

    /**
     * @var string
     *
     * @ORM\Column(name="col_edit", type="string", length=100, nullable=true)
     */
    private $colEdit;

    /**
     * @var integer
     *
     * @ORM\Column(name="col_sort", type="integer", nullable=true)
     */
    private $colSort;

    /**
     * @var string
     *
     * @ORM\Column(name="col_depended", type="string", length=100, nullable=true)
     */
    private $colDepended;

    /**
     * @var string
     *
     * @ORM\Column(name="col_unit", type="string", length=20, nullable=true)
     */
    private $colUnit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="col_req", type="boolean", nullable=true)
     */
    private $colReq;



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
     * @return OldATabinfo
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
     * Set tblTitle
     *
     * @param string $tblTitle
     * @return OldATabinfo
     */
    public function setTblTitle($tblTitle)
    {
        $this->tblTitle = $tblTitle;

        return $this;
    }

    /**
     * Get tblTitle
     *
     * @return string 
     */
    public function getTblTitle()
    {
        return $this->tblTitle;
    }

    /**
     * Set colName
     *
     * @param string $colName
     * @return OldATabinfo
     */
    public function setColName($colName)
    {
        $this->colName = $colName;

        return $this;
    }

    /**
     * Get colName
     *
     * @return string 
     */
    public function getColName()
    {
        return $this->colName;
    }

    /**
     * Set colTitle
     *
     * @param string $colTitle
     * @return OldATabinfo
     */
    public function setColTitle($colTitle)
    {
        $this->colTitle = $colTitle;

        return $this;
    }

    /**
     * Get colTitle
     *
     * @return string 
     */
    public function getColTitle()
    {
        return $this->colTitle;
    }

    /**
     * Set colType
     *
     * @param string $colType
     * @return OldATabinfo
     */
    public function setColType($colType)
    {
        $this->colType = $colType;

        return $this;
    }

    /**
     * Get colType
     *
     * @return string 
     */
    public function getColType()
    {
        return $this->colType;
    }

    /**
     * Set colLibTbl
     *
     * @param string $colLibTbl
     * @return OldATabinfo
     */
    public function setColLibTbl($colLibTbl)
    {
        $this->colLibTbl = $colLibTbl;

        return $this;
    }

    /**
     * Get colLibTbl
     *
     * @return string 
     */
    public function getColLibTbl()
    {
        return $this->colLibTbl;
    }

    /**
     * Set colLibFields
     *
     * @param string $colLibFields
     * @return OldATabinfo
     */
    public function setColLibFields($colLibFields)
    {
        $this->colLibFields = $colLibFields;

        return $this;
    }

    /**
     * Get colLibFields
     *
     * @return string 
     */
    public function getColLibFields()
    {
        return $this->colLibFields;
    }

    /**
     * Set colGroup
     *
     * @param string $colGroup
     * @return OldATabinfo
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
     * Set colSearch
     *
     * @param string $colSearch
     * @return OldATabinfo
     */
    public function setColSearch($colSearch)
    {
        $this->colSearch = $colSearch;

        return $this;
    }

    /**
     * Get colSearch
     *
     * @return string 
     */
    public function getColSearch()
    {
        return $this->colSearch;
    }

    /**
     * Set colSgroup
     *
     * @param integer $colSgroup
     * @return OldATabinfo
     */
    public function setColSgroup($colSgroup)
    {
        $this->colSgroup = $colSgroup;

        return $this;
    }

    /**
     * Get colSgroup
     *
     * @return integer 
     */
    public function getColSgroup()
    {
        return $this->colSgroup;
    }

    /**
     * Set colTable
     *
     * @param string $colTable
     * @return OldATabinfo
     */
    public function setColTable($colTable)
    {
        $this->colTable = $colTable;

        return $this;
    }

    /**
     * Get colTable
     *
     * @return string 
     */
    public function getColTable()
    {
        return $this->colTable;
    }

    /**
     * Set colView
     *
     * @param string $colView
     * @return OldATabinfo
     */
    public function setColView($colView)
    {
        $this->colView = $colView;

        return $this;
    }

    /**
     * Get colView
     *
     * @return string 
     */
    public function getColView()
    {
        return $this->colView;
    }

    /**
     * Set colEdit
     *
     * @param string $colEdit
     * @return OldATabinfo
     */
    public function setColEdit($colEdit)
    {
        $this->colEdit = $colEdit;

        return $this;
    }

    /**
     * Get colEdit
     *
     * @return string 
     */
    public function getColEdit()
    {
        return $this->colEdit;
    }

    /**
     * Set colSort
     *
     * @param integer $colSort
     * @return OldATabinfo
     */
    public function setColSort($colSort)
    {
        $this->colSort = $colSort;

        return $this;
    }

    /**
     * Get colSort
     *
     * @return integer 
     */
    public function getColSort()
    {
        return $this->colSort;
    }

    /**
     * Set colDepended
     *
     * @param string $colDepended
     * @return OldATabinfo
     */
    public function setColDepended($colDepended)
    {
        $this->colDepended = $colDepended;

        return $this;
    }

    /**
     * Get colDepended
     *
     * @return string 
     */
    public function getColDepended()
    {
        return $this->colDepended;
    }

    /**
     * Set colUnit
     *
     * @param string $colUnit
     * @return OldATabinfo
     */
    public function setColUnit($colUnit)
    {
        $this->colUnit = $colUnit;

        return $this;
    }

    /**
     * Get colUnit
     *
     * @return string 
     */
    public function getColUnit()
    {
        return $this->colUnit;
    }

    /**
     * Set colReq
     *
     * @param boolean $colReq
     * @return OldATabinfo
     */
    public function setColReq($colReq)
    {
        $this->colReq = $colReq;

        return $this;
    }

    /**
     * Get colReq
     *
     * @return boolean 
     */
    public function getColReq()
    {
        return $this->colReq;
    }
}
