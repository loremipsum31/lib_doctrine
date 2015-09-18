<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Page
 * @ORM\Entity
 * @ORM\Table(name="lep_groups")
 */
class Group
{

    /**
     * @var integer
     *
     * @ORM\Column(name="group_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, options={"default" = ""})
     */
    protected $name;

    /**
     * @var string
     * @ORM\Column(type="text", options={"default" = ""})
     */
    protected $system_permissions;

    /**
     * @var string
     * @ORM\Column(type="text", options={"default" = ""})
     */
    protected $module_permissions;

    /**
     * @var string
     * @ORM\Column(type="text", options={"default" = ""})
     */
    protected $template_permissions;

    /**
     * @var User[]
     * @ORM\OneToMany(targetEntity="User", mappedBy="group")
     **/
    protected $users;

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

    /**
     * @return string
     */
    public function getSystemPermissions()
    {
        return $this->system_permissions;
    }

    /**
     * @param string $system_permissions
     */
    public function setSystemPermissions($system_permissions)
    {
        $this->system_permissions = $system_permissions;
    }

    /**
     * @return string
     */
    public function getModulePermissions()
    {
        return $this->module_permissions;
    }

    /**
     * @param string $module_permissions
     */
    public function setModulePermissions($module_permissions)
    {
        $this->module_permissions = $module_permissions;
    }

    /**
     * @return string
     */
    public function getTemplatePermissions()
    {
        return $this->template_permissions;
    }

    /**
     * @param string $template_permissions
     */
    public function setTemplatePermissions($template_permissions)
    {
        $this->template_permissions = $template_permissions;
    }

    /**
     * @return User[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param User[] $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
    }


}