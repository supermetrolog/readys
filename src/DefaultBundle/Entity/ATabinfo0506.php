<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ATabinfo0506
 *
 * @ORM\Table(name="a_tabinfo_0506", indexes={@ORM\Index(name="tbl_name", columns={"tbl_name", "col_table"})})
 * @ORM\Entity
 */
class ATabinfo0506
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
     * @ORM\Column(name="col_edit", type="string", length=100, nullable=true)
     */
    private $colEdit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="col_req", type="boolean", nullable=false)
     */
    private $colReq;

    /**
     * @var integer
     *
     * @ORM\Column(name="edit_sort", type="integer", nullable=false)
     */
    private $editSort;

    /**
     * @var string
     *
     * @ORM\Column(name="col_mask", type="string", length=20, nullable=true)
     */
    private $colMask;

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
     * @var integer
     *
     * @ORM\Column(name="view_sort", type="integer", nullable=false)
     */
    private $viewSort;

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
     * @ORM\Column(name="col_print", type="boolean", nullable=false)
     */
    private $colPrint;

    /**
     * @var string
     *
     * @ORM\Column(name="col_title_cl", type="string", length=100, nullable=true)
     */
    private $colTitleCl;

    /**
     * @var string
     *
     * @ORM\Column(name="block_types", type="string", length=20, nullable=true)
     */
    private $blockTypes;

    /**
     * @var string
     *
     * @ORM\Column(name="col_comment", type="text", length=65535, nullable=true)
     */
    private $colComment;



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
     * @return ATabinfo0506
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
     * Set colName
     *
     * @param string $colName
     * @return ATabinfo0506
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
     * @return ATabinfo0506
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
     * @return ATabinfo0506
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
     * Set colEdit
     *
     * @param string $colEdit
     * @return ATabinfo0506
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
     * Set colReq
     *
     * @param boolean $colReq
     * @return ATabinfo0506
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

    /**
     * Set editSort
     *
     * @param integer $editSort
     * @return ATabinfo0506
     */
    public function setEditSort($editSort)
    {
        $this->editSort = $editSort;

        return $this;
    }

    /**
     * Get editSort
     *
     * @return integer 
     */
    public function getEditSort()
    {
        return $this->editSort;
    }

    /**
     * Set colMask
     *
     * @param string $colMask
     * @return ATabinfo0506
     */
    public function setColMask($colMask)
    {
        $this->colMask = $colMask;

        return $this;
    }

    /**
     * Get colMask
     *
     * @return string 
     */
    public function getColMask()
    {
        return $this->colMask;
    }

    /**
     * Set colLibTbl
     *
     * @param string $colLibTbl
     * @return ATabinfo0506
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
     * @return ATabinfo0506
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
     * @return ATabinfo0506
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
     * @return ATabinfo0506
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
     * @return ATabinfo0506
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
     * @return ATabinfo0506
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
     * @return ATabinfo0506
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
     * Set viewSort
     *
     * @param integer $viewSort
     * @return ATabinfo0506
     */
    public function setViewSort($viewSort)
    {
        $this->viewSort = $viewSort;

        return $this;
    }

    /**
     * Get viewSort
     *
     * @return integer 
     */
    public function getViewSort()
    {
        return $this->viewSort;
    }

    /**
     * Set colSort
     *
     * @param integer $colSort
     * @return ATabinfo0506
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
     * @return ATabinfo0506
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
     * @return ATabinfo0506
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
     * Set colPrint
     *
     * @param boolean $colPrint
     * @return ATabinfo0506
     */
    public function setColPrint($colPrint)
    {
        $this->colPrint = $colPrint;

        return $this;
    }

    /**
     * Get colPrint
     *
     * @return boolean 
     */
    public function getColPrint()
    {
        return $this->colPrint;
    }

    /**
     * Set colTitleCl
     *
     * @param string $colTitleCl
     * @return ATabinfo0506
     */
    public function setColTitleCl($colTitleCl)
    {
        $this->colTitleCl = $colTitleCl;

        return $this;
    }

    /**
     * Get colTitleCl
     *
     * @return string 
     */
    public function getColTitleCl()
    {
        return $this->colTitleCl;
    }

    /**
     * Set blockTypes
     *
     * @param string $blockTypes
     * @return ATabinfo0506
     */
    public function setBlockTypes($blockTypes)
    {
        $this->blockTypes = $blockTypes;

        return $this;
    }

    /**
     * Get blockTypes
     *
     * @return string 
     */
    public function getBlockTypes()
    {
        return $this->blockTypes;
    }

    /**
     * Set colComment
     *
     * @param string $colComment
     * @return ATabinfo0506
     */
    public function setColComment($colComment)
    {
        $this->colComment = $colComment;

        return $this;
    }

    /**
     * Get colComment
     *
     * @return string 
     */
    public function getColComment()
    {
        return $this->colComment;
    }
}
