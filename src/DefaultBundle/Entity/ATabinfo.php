<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ATabinfo
 *
 * @ORM\Table(name="a_tabinfo", indexes={@ORM\Index(name="tbl_name", columns={"tbl_name", "col_table"})})
 * @ORM\Entity
 */
class ATabinfo
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
     * @var integer
     *
     * @ORM\Column(name="col_sort", type="integer", nullable=true)
     */
    private $colSort;

    /**
     * @var integer
     *
     * @ORM\Column(name="col_sort_search", type="integer", nullable=true)
     */
    private $colSortSearch;

    /**
     * @var string
     *
     * @ORM\Column(name="col_type", type="string", length=50, nullable=true)
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
     * @var boolean
     *
     * @ORM\Column(name="col_req_apartments", type="boolean", nullable=false)
     */
    private $colReqApartments;

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
     * @var boolean
     *
     * @ORM\Column(name="col_lib_rnd", type="boolean", nullable=true)
     */
    private $colLibRnd;

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
     * @var boolean
     *
     * @ORM\Column(name="fix_history", type="boolean", nullable=true)
     */
    private $fixHistory;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fix_verifed", type="boolean", nullable=true)
     */
    private $fixVerifed;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", length=65535, nullable=false)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="data_default", type="string", length=255, nullable=true)
     */
    private $dataDefault;



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
     * @return ATabinfo
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
     * @return ATabinfo
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
     * @return ATabinfo
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
     * Set colSort
     *
     * @param integer $colSort
     * @return ATabinfo
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
     * Set colSortSearch
     *
     * @param integer $colSortSearch
     * @return ATabinfo
     */
    public function setColSortSearch($colSortSearch)
    {
        $this->colSortSearch = $colSortSearch;

        return $this;
    }

    /**
     * Get colSortSearch
     *
     * @return integer 
     */
    public function getColSortSearch()
    {
        return $this->colSortSearch;
    }

    /**
     * Set colType
     *
     * @param string $colType
     * @return ATabinfo
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
     * @return ATabinfo
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
     * @return ATabinfo
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
     * Set colReqApartments
     *
     * @param boolean $colReqApartments
     * @return ATabinfo
     */
    public function setColReqApartments($colReqApartments)
    {
        $this->colReqApartments = $colReqApartments;

        return $this;
    }

    /**
     * Get colReqApartments
     *
     * @return boolean 
     */
    public function getColReqApartments()
    {
        return $this->colReqApartments;
    }

    /**
     * Set editSort
     *
     * @param integer $editSort
     * @return ATabinfo
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
     * @return ATabinfo
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
     * @return ATabinfo
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
     * @return ATabinfo
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
     * Set colLibRnd
     *
     * @param boolean $colLibRnd
     * @return ATabinfo
     */
    public function setColLibRnd($colLibRnd)
    {
        $this->colLibRnd = $colLibRnd;

        return $this;
    }

    /**
     * Get colLibRnd
     *
     * @return boolean 
     */
    public function getColLibRnd()
    {
        return $this->colLibRnd;
    }

    /**
     * Set colGroup
     *
     * @param string $colGroup
     * @return ATabinfo
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
     * @return ATabinfo
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
     * @return ATabinfo
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
     * @return ATabinfo
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
     * @return ATabinfo
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
     * @return ATabinfo
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
     * Set colDepended
     *
     * @param string $colDepended
     * @return ATabinfo
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
     * @return ATabinfo
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
     * @return ATabinfo
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
     * @return ATabinfo
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
     * @return ATabinfo
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
     * @return ATabinfo
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

    /**
     * Set fixHistory
     *
     * @param boolean $fixHistory
     * @return ATabinfo
     */
    public function setFixHistory($fixHistory)
    {
        $this->fixHistory = $fixHistory;

        return $this;
    }

    /**
     * Get fixHistory
     *
     * @return boolean 
     */
    public function getFixHistory()
    {
        return $this->fixHistory;
    }

    /**
     * Set fixVerifed
     *
     * @param boolean $fixVerifed
     * @return ATabinfo
     */
    public function setFixVerifed($fixVerifed)
    {
        $this->fixVerifed = $fixVerifed;

        return $this;
    }

    /**
     * Get fixVerifed
     *
     * @return boolean 
     */
    public function getFixVerifed()
    {
        return $this->fixVerifed;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return ATabinfo
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set dataDefault
     *
     * @param string $dataDefault
     * @return ATabinfo
     */
    public function setDataDefault($dataDefault)
    {
        $this->dataDefault = $dataDefault;

        return $this;
    }

    /**
     * Get dataDefault
     *
     * @return string 
     */
    public function getDataDefault()
    {
        return $this->dataDefault;
    }
}
