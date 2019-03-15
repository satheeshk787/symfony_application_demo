<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuestionRepository")
 */
class Question
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
     * @ORM\OneToMany(targetEntity="Answer", mappedBy="question", cascade={"persist","remove"},orphanRemoval=true)
     * @ORM\JoinColumn(name="answer_id", referencedColumnName="id")
     */
    private $answers;



    /**
     * @ORM\ManyToOne(targetEntity="Assignment", inversedBy="questions")
     * @ORM\JoinColumn(name="assignment_id", referencedColumnName="id")
     */
    private $assignment;


    /**
     * @var string
     *
     * @ORM\Column(name="question", type="string", length=255)
     */
    private $question;

    /**
     * @var int
     *
     * @ORM\Column(name="question_type", type="integer")
     */
    private $questionType;


    public function __construct()
    {
        $this->answers = new ArrayCollection();
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
     * Set question
     *
     * @param string $question
     *
     * @return Question
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set questionType
     *
     * @param integer $questionType
     *
     * @return Question
     */
    public function setQuestionType($questionType)
    {
        $this->questionType = $questionType;

        return $this;
    }

    /**
     * Get questionType
     *
     * @return int
     */
    public function getQuestionType()
    {
        return $this->questionType;
    }


    
     /**
     * Set assignment_id
     *
     * @param int $assignment_id
     *
     * @return Question
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





    //answers
    public function getAnswers()
    {
        return $this->answers;
    }
    
    public function addAnswer(Answer $answer)
    {
        $answer->setAnswer($this);
        $this->answers->add($answer);
    }
    
    public function removeAnswer(Answer $answer)
    {
        $this->answer->removeElement($answer);
        return $this;
    }








}

