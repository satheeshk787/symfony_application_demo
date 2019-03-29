<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banner
 *
 * @ORM\Table(name="banner")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BannerRepository")
 */
class Banner
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="role", type="integer")
     */
    private $role;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Banner
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
     * Set Role
     *
     * @param integer $role
     *
     * @return Banner
     */
    public function setRole($role)
    {
        $newrole=$role;
        switch ($role) 
        {
            case 'admin': $newrole=0;  break;
            case 'student': $newrole=1;  break;
            case 'professor': $newrole=2;  break;
            case 'school': $newrole=3;  break;
        }
        $this->role = $newrole;
        return $this;
    }

    /**
     * Get role
     *
     * @return integer
     */
    public function getRole()
    {
        if($this->role=='0'){ return 'admin';  }
        else if($this->role=='1'){ return 'student';  }
        else if($this->role=='2'){ return 'professor';  }
        else if($this->role=='3'){ return 'school';  }
        else{ return $this->role; }
    }

}

