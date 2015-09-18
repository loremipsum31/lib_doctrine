<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Page
 * @ORM\Entity
 * @ORM\Table(name="lep_pages")
 */
class Page
{

    /**
     * @var integer
     *
     * @ORM\Column(name="page_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var $this
     * @ORM\ManyToOne(targetEntity="Page", cascade={"persist"})
     * @ORM\JoinColumn(name="parent", referencedColumnName="page_id", nullable=true)
     */
    protected $parent;

    /**
     * @var $this
     * @ORM\ManyToOne(targetEntity="Page", cascade={"persist"})
     * @ORM\JoinColumn(name="root_parent", referencedColumnName="page_id", nullable=true)
     */
    protected $root;

    /**
     * @var int
     * @ORM\Column(name="level", type="integer")
     */
    protected $level = 0;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    protected $link;

    /**
     * @var string
     * @ORM\Column(type="string", length=7, options={"default" = ""})
     */
    protected $target;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, options={"default" = ""})
     */
    protected $page_title;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, options={"default" = ""})
     */
    protected $menu_title;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    protected $keywords;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    protected $page_trail;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, options={"default" = ""})
     */
    protected $template;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, options={"default" = ""})
     */
    protected $visibility;

    /**
     * @var int
     * @ORM\Column(type="integer", length=11, options={"default" = 0})
     */
    protected $position = 0;

    /**
     * @var int
     * @ORM\Column(type="integer", length=11, options={"default" = 0})
     */
    protected $menu = 0;

    /**
     * @var string
     * @ORM\Column(type="string", length=5, options={"default" = ""})
     */
    protected $language;

    /**
     * @var string
     * @ORM\Column(name="page_code", type="string", length=100, options={"default" = ""})
     */
    protected $code;

    /**
     * @var int
     * @ORM\Column(type="integer", length=11, options={"default" = 0})
     */
    protected $searching = 0;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    protected $admin_groups;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    protected $admin_users;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    protected $viewing_groups;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    protected $viewing_users;

    /**
     * @var int
     * @ORM\Column(type="integer", length=11, options={"default" = 0})
     */
    protected $modified_when = 0;

    /**
     * @var int
     * @ORM\Column(type="integer", length=11, options={"default" = 0})
     */
    protected $modified_by = 0;

    /**
     * @var Section[]
     * @ORM\OneToMany(targetEntity="Section", mappedBy="page")
     **/
    protected $sections;

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
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param mixed $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * @return mixed
     */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * @param mixed $root
     */
    public function setRoot($root)
    {
        $this->root = $root;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @return string
     */
    public function getHref()
    {
        return WB_URL . PAGES_DIRECTORY . $this->getLink() . PAGE_EXTENSION;
    }

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param string $target
     */
    public function setTarget($target)
    {
        $this->target = $target;
    }

    /**
     * @return string
     */
    public function getPageTitle()
    {
        return $this->page_title;
    }

    /**
     * @param string $page_title
     */
    public function setPageTitle($page_title)
    {
        $this->page_title = $page_title;
    }

    /**
     * @return string
     */
    public function getMenuTitle()
    {
        return $this->menu_title;
    }

    /**
     * @param string $menu_title
     */
    public function setMenuTitle($menu_title)
    {
        $this->menu_title = $menu_title;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param string $keywords
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }

    /**
     * @return string
     */
    public function getPageTrail()
    {
        return $this->page_trail;
    }

    /**
     * @param string $page_trail
     */
    public function setPageTrail($page_trail)
    {
        $this->page_trail = $page_trail;
    }

    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param string $template
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    }

    /**
     * @return string
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * @param string $visibility
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
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
     * @return int
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * @param int $menu
     */
    public function setMenu($menu)
    {
        $this->menu = $menu;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return int
     */
    public function getSearching()
    {
        return $this->searching;
    }

    /**
     * @param int $searching
     */
    public function setSearching($searching)
    {
        $this->searching = $searching;
    }

    /**
     * @return string
     */
    public function getAdminGroups()
    {
        return $this->admin_groups;
    }

    /**
     * @param string $admin_groups
     */
    public function setAdminGroups($admin_groups)
    {
        $this->admin_groups = $admin_groups;
    }

    /**
     * @return string
     */
    public function getAdminUsers()
    {
        return $this->admin_users;
    }

    /**
     * @param string $admin_users
     */
    public function setAdminUsers($admin_users)
    {
        $this->admin_users = $admin_users;
    }

    /**
     * @return string
     */
    public function getViewingGroups()
    {
        return $this->viewing_groups;
    }

    /**
     * @param string $viewing_groups
     */
    public function setViewingGroups($viewing_groups)
    {
        $this->viewing_groups = $viewing_groups;
    }

    /**
     * @return string
     */
    public function getViewingUsers()
    {
        return $this->viewing_users;
    }

    /**
     * @param string $viewing_users
     */
    public function setViewingUsers($viewing_users)
    {
        $this->viewing_users = $viewing_users;
    }

    /**
     * @return int
     */
    public function getModifiedWhen()
    {
        return $this->modified_when;
    }

    /**
     * @param int $modified_when
     */
    public function setModifiedWhen($modified_when)
    {
        $this->modified_when = $modified_when;
    }

    /**
     * @return int
     */
    public function getModifiedBy()
    {
        return $this->modified_by;
    }

    /**
     * @param int $modified_by
     */
    public function setModifiedBy($modified_by)
    {
        $this->modified_by = $modified_by;
    }

    /**
     * @return Section[]
     */
    public function getSections()
    {
        return $this->sections;
    }

    /**
     * @param Section[] $sections
     */
    public function setSections($sections)
    {
        $this->sections = $sections;
    }

}