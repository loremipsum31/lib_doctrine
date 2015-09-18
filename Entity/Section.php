<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Section
 * @ORM\Entity
 * @ORM\Table(name="lep_sections")
 */
class Section
{

    /**
     * @var integer
     *
     * @ORM\Column(name="section_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var $this
     * @ORM\ManyToOne(targetEntity="Page", cascade={"persist"}, inversedBy="sections")
     * @ORM\JoinColumn(name="page_id", referencedColumnName="page_id", nullable=true)
     */
    protected $page;

    /**
     * @var int
     * @ORM\Column(type="integer", length=11, options={"default" = 0})
     */
    protected $position = 0;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, options={"default" = ""})
     */
    protected $module;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, options={"default" = ""})
     */
    protected $block;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, options={"default" = "0"})
     */
    protected $publ_start = 0;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, options={"default" = "0"})
     */
    protected $publ_end = 0;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, options={"default" = "no name"})
     */
    protected $name = 'no name';

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * @param string $module
     */
    public function setModule($module)
    {
        $this->module = $module;
    }

    /**
     * @return string
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * @param string $block
     */
    public function setBlock($block)
    {
        $this->block = $block;
    }

    /**
     * @return string
     */
    public function getPublStart()
    {
        return $this->publ_start;
    }

    /**
     * @param string $publ_start
     */
    public function setPublStart($publ_start)
    {
        $this->publ_start = $publ_start;
    }

    /**
     * @return string
     */
    public function getPublEnd()
    {
        return $this->publ_end;
    }

    /**
     * @param string $publ_end
     */
    public function setPublEnd($publ_end)
    {
        $this->publ_end = $publ_end;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}