<?php

namespace DefaultBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LGateTypes
 *
 * @ORM\Table(name="l_gate_types")
 * @ORM\Entity(repositoryClass="DefaultBundle\Repository\LGateTypesRepository")
 */
class LGateTypes
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
     * @ORM\Column(name="title", type="string", length=20, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="title_short", type="string", length=100, nullable=true)
     */
    private $titleShort;



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
     * Set title
     *
     * @param string $title
     * @return LGateTypes
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set titleShort
     *
     * @param string $titleShort
     * @return LGateTypes
     */
    public function setTitleShort($titleShort)
    {
        $this->titleShort = $titleShort;

        return $this;
    }

    /**
     * Get titleShort
     *
     * @return string 
     */
    public function getTitleShort()
    {
        return $this->titleShort;
    }
}
