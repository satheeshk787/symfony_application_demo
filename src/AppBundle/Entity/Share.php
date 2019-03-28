<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Share
 *
 * @ORM\Table(name="share")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ShareRepository")
 */
class Share
{

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="shares")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;


    /**
     * @ORM\ManyToOne(targetEntity="Assignment", inversedBy="shares")
     * @ORM\JoinColumn(name="assignment_id", referencedColumnName="id")
     */
    private $assignment;


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;









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
     * Set user_id
     *
     * @param int $user_id
     *
     * @return Share
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user_id
     *
     * @return int
     */
    public function getUser()
    {
        return $this->user;
    }




    /**
     * Set assignment_id
     *
     * @param int $assignment_id
     *
     * @return Share
     */
    public function setAssignment($assignment)
    {
        $this->assignment = $assignment;

        return $this;
    }

    /**
     * Get assignment_id
     *
     * @return int
     */
    public function getAssignment()
    {
        return $this->assignment;
    }



    public function __toString() {
        return "";
    }






    




   

}

