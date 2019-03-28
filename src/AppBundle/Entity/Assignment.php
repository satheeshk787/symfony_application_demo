<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Assignment
 *
 * @ORM\Table(name="assignment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AssignmentRepository")
 */
class Assignment
{

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="assignments")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;


    /**
     * @ORM\OneToMany(targetEntity="Material", mappedBy="assignment", cascade={"persist","remove"},orphanRemoval=true)
     * @ORM\JoinColumn(name="material_id", referencedColumnName="id")
     */
    private $materials;

    /**
     * @ORM\OneToMany(targetEntity="Question", mappedBy="assignment", cascade={"persist","remove"},orphanRemoval=true)
     * @ORM\JoinColumn(name="question_id", referencedColumnName="id")
     */
    private $questions;


    /**
     * @ORM\OneToMany(targetEntity="Share", mappedBy="assignment", cascade={"persist","remove"},orphanRemoval=true)
     * @ORM\JoinColumn(name="share_assignment_id", referencedColumnName="id")
     */
    private $shares;


    public function __construct()
    {
        // parent::__construct();
        // your own logic
        $this->materials = new ArrayCollection();
        $this->questions = new ArrayCollection();
        $this->shares = new ArrayCollection();
    }



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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


    /**
     * @var date
     *
     * @ORM\Column(name="expire_date", type="date", nullable=true)
     */
    private $expire_date;


    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=true, options={"default" : 1})
     */
    private $status;


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
     * Set name
     *
     * @param string $name
     *
     * @return Assignment
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Assignment
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }



    /**
     * Set user_id
     *
     * @param int $user_id
     *
     * @return Assignment
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
     * Set expire_date
     *
     * @param string $expire_date
     *
     * @return Assignment
     */
    public function setExpireDate($expire_date)
    {
        $this->expire_date = $expire_date;

        return $this;
    }

    /**
     * Get expire_date
     *
     * @return date
     */
    public function getExpireDate()
    {
        return $this->expire_date;
    }




    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Assignment
     */
    public function setStatus($status)
    {
        // if($status=='ACTIVE'){$status=1;}
        // else{$status=0;}

        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {

        return $this->status;
        // if($this->status==1)
        // {
        //     return 'ACTIVE';
        // }
        // else
        // {
        //     return 'INACTIVE';
        // }
    }





    //materials
    public function getMaterials()
    {
        return $this->materials;
    }
    

    public function addMaterial(Material $material)
    {
        $material->setAssignment($this);
        $this->materials->add($material);
    }

    public function removeMaterial(Material $material)
    {
        $this->materials->removeElement($material);
        return $this;
    }

    
    //questions
    public function getQuestions()
    {
        return $this->questions;
    }
    
    public function addQuestion(Question $question)
    {
        $question->setAssignment($this);
        $this->questions->add($question);
    }
    
    public function removeQuestion(Question $question)
    {
        $this->questions->removeElement($question);
        return $this;
    }
    
    
    

    //shares
    public function getShares()
    {
        return $this->shares;
    }
    

    public function addShare(Share $share)
    {
        $share->setUser($this);
        $this->shares->add($share);
    }

    public function removeShare(Share $share)
    {
        $this->shares->removeElement($share);
        return $this;
    }



    //const $val=null;
    public function getValue()
    {
        //return $this->val;
    }
    public function setValue()
    {
        //return $this->val=$val;
    }




    public function __toString() {
        return $this->name;
    }


}

