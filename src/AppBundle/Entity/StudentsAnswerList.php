<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StudentsAnswerList
 *
 * @ORM\Table(name="students_answer_list")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StudentsAnswerListRepository")
 */
class StudentsAnswerList
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
     * @ORM\Column(name="answer", type="string", length=255)
     */
    private $answer;


    /**
     * @ORM\ManyToOne(targetEntity="StudentsAnswer", inversedBy="students_answer_lists")
     * @ORM\JoinColumn(name="students_answer_id", referencedColumnName="id")
     */
    private $students_answer;


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
     * Set answer
     *
     * @param string $answer
     *
     * @return StudentsAnswerList
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }


     /**
     * Set students_answer_id
     *
     * @param int $students_answer_id
     *
     * @return StudentsAnswer
     */
    public function setStudentsAnswer($students_answer)
    {
        $this->students_answer = $students_answer;

        return $this;
    }
    
    /**
     * Get students_answer_id
     *
     * @return int
     */
    public function getStudentsAnswer()
    {
        return $this->students_answer;
    }



}

