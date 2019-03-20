<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * StudentsAnswer
 *
 * @ORM\Table(name="students_answer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StudentsAnswerRepository")
 */
class StudentsAnswer
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
     * @var int
     *
     * @ORM\Column(name="review_status", type="integer")
     */
    private $reviewStatus;

    /**
     * @var int
     *
     * @ORM\Column(name="score", type="integer")
     */
    private $score;


    /**
     * @ORM\ManyToOne(targetEntity="Question", inversedBy="students_answers")
     * @ORM\JoinColumn(name="question_id", referencedColumnName="id")
     */
    private $question;


    /**
     * @ORM\OneToMany(targetEntity="StudentsAnswerList", mappedBy="students_answer", cascade={"persist","remove"},orphanRemoval=true)
     * @ORM\JoinColumn(name="students_answer_list_id", referencedColumnName="id")
     */
    private $students_answer_lists;



    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="students_answers")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;


    public function __construct()
    {
        $this->students_answer_lists = new ArrayCollection();
    }


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
     * Set reviewStatus
     *
     * @param integer $reviewStatus
     *
     * @return StudentsAnswer
     */
    public function setReviewStatus($reviewStatus)
    {
        $this->reviewStatus = $reviewStatus;

        return $this;
    }

    /**
     * Get reviewStatus
     *
     * @return int
     */
    public function getReviewStatus()
    {
        return $this->reviewStatus;
    }

    /**
     * Set score
     *
     * @param integer $score
     *
     * @return StudentsAnswer
     */
    public function setScore($score)
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get score
     *
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }
    
    
    
     /**
     * Set question_id
     *
     * @param int $question_id
     *
     * @return Question
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }
    
    /**
     * Get question_id
     *
     * @return int
     */
    public function getQuestion()
    {
        return $this->question;
    }



    //students answer lists
    public function getStudentsAnswerLists()
    {
        return $this->students_answer_lists;
    }
    
    public function addStudentsAnswerList(StudentsAnswerList $students_answer_list)
    {
        $students_answer_list->setStudentsAnswer($this);
        $this->students_answer_lists->add($students_answer_list);
    }
    
    public function removeStudentsAnswerList(StudentsAnswerList $students_answer_list)
    {
        $this->students_answer_list->removeElement($students_answer_list);
        return $this;
    }



    /**
     * Set user_id
     *
     * @param int $user_id
     *
     * @return StudentAnswer
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





}

