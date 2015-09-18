<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Page
 * @ORM\Entity
 * @ORM\Table(name="lep_users")
 */
class User
{

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var $this
     * @ORM\ManyToOne(targetEntity="Group", cascade={"persist"}, inversedBy="users")
     * @ORM\JoinColumn(name="group_id", referencedColumnName="group_id", nullable=true)
     */
    protected $group;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, options={"default" = "0"})
     */
    protected $groups_id;

    /**
     * @var int
     * @ORM\Column(type="integer", options={"default" = "0"})
     */
    protected $active = 0;

    /**
     * @var int
     * @ORM\Column(type="integer", options={"default" = "6"})
     */
    protected $statusflags = 6;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, options={"default" = ""})
     */
    protected $username;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, options={"default" = ""})
     */
    protected $password;

    /**
     * @var int
     * @ORM\Column(type="integer", options={"default" = "0"})
     */
    protected $last_reset;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, options={"default" = ""})
     */
    protected $display_name;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    protected $email;

    /**
     * @var string
     * @ORM\Column(type="string", length=50, options={"default" = "Europe/Berlin"})
     */
    protected $timezone_string;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, options={"default" = ""})
     */
    protected $date_format;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, options={"default" = ""})
     */
    protected $time_format;

    /**
     * @var string
     * @ORM\Column(type="string", length=5, options={"default" = "EN"})
     */
    protected $language;

    /**
     * @var string
     * @ORM\Column(type="text")
     */
    protected $home_folder;

    /**
     * @var int
     * @ORM\Column(type="integer", options={"default" = "0"})
     */
    protected $login_when = 0;

    /**
     * @var string
     * @ORM\Column(type="string", length=15, options={"default" = ""})
     */
    protected $login_ip;

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
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param mixed $group
     */
    public function setGroup($group)
    {
        $this->group = $group;
    }

    /**
     * @return string
     */
    public function getGroupsId()
    {
        return $this->groups_id;
    }

    /**
     * @param string $groups_id
     */
    public function setGroupsId($groups_id)
    {
        $this->groups_id = $groups_id;
    }

    /**
     * @return int
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param int $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return int
     */
    public function getStatusflags()
    {
        return $this->statusflags;
    }

    /**
     * @param int $statusflags
     */
    public function setStatusflags($statusflags)
    {
        $this->statusflags = $statusflags;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getLastReset()
    {
        return $this->last_reset;
    }

    /**
     * @param int $last_reset
     */
    public function setLastReset($last_reset)
    {
        $this->last_reset = $last_reset;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * @param string $display_name
     */
    public function setDisplayName($display_name)
    {
        $this->display_name = $display_name;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getTimezoneString()
    {
        return $this->timezone_string;
    }

    /**
     * @param string $timezone_string
     */
    public function setTimezoneString($timezone_string)
    {
        $this->timezone_string = $timezone_string;
    }

    /**
     * @return string
     */
    public function getDateFormat()
    {
        return $this->date_format;
    }

    /**
     * @param string $date_format
     */
    public function setDateFormat($date_format)
    {
        $this->date_format = $date_format;
    }

    /**
     * @return string
     */
    public function getTimeFormat()
    {
        return $this->time_format;
    }

    /**
     * @param string $time_format
     */
    public function setTimeFormat($time_format)
    {
        $this->time_format = $time_format;
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
    public function getHomeFolder()
    {
        return $this->home_folder;
    }

    /**
     * @param string $home_folder
     */
    public function setHomeFolder($home_folder)
    {
        $this->home_folder = $home_folder;
    }

    /**
     * @return int
     */
    public function getLoginWhen()
    {
        return $this->login_when;
    }

    /**
     * @param int $login_when
     */
    public function setLoginWhen($login_when)
    {
        $this->login_when = $login_when;
    }

    /**
     * @return string
     */
    public function getLoginIp()
    {
        return $this->login_ip;
    }

    /**
     * @param string $login_ip
     */
    public function setLoginIp($login_ip)
    {
        $this->login_ip = $login_ip;
    }

}