<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\Util\SecureRandom;

use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{

    
    
    /**
     * @ORM\ManyToOne(targetEntity="University", inversedBy="user")
     * @ORM\JoinColumn(name="university_id", referencedColumnName="id")
     */
    private $university;



    /**
     * @ORM\OneToMany(targetEntity="Hobby", mappedBy="user", cascade={"persist","remove"},orphanRemoval=true)
     * @ORM\JoinColumn(name="hobby_id", referencedColumnName="id")
     */
    private $hobbies;


    /**
     * @ORM\OneToMany(targetEntity="Share", mappedBy="user", cascade={"persist","remove"},orphanRemoval=true)
     * @ORM\JoinColumn(name="share_id", referencedColumnName="id")
     */
    private $shares;


    /**
     * @ORM\OneToMany(targetEntity="Assignment", mappedBy="user", cascade={"persist","remove"},orphanRemoval=true)
     * @ORM\JoinColumn(name="assignment_id", referencedColumnName="id")
     */
    private $assignments;



    /**
     * @ORM\OneToMany(targetEntity="StudentsAnswer", mappedBy="user", cascade={"persist","remove"},orphanRemoval=true)
     * @ORM\JoinColumn(name="students_answer_id", referencedColumnName="id")
     */
    private $students_answers;




    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


     /**
     * @Assert\File(maxSize="2048k")
     * @Assert\Image(mimeTypesMessage="Please upload a valid image.")
     */
    protected $profilePictureFile;

    // for temporary storage
    private $tempProfilePicturePath;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $profilePicturePath;



    /**
     * @var string
     *
     * @ORM\Column(name="dob", type="date" ,nullable=true)
     */
    private $dob;

    /**
     * @var integer
     *
     * @ORM\Column(name="role",nullable=true)
     */
    private $role;


    /**
     * @var integer
     *
     * @ORM\Column(name="university_status",nullable=true)
     */
    private $university_status;



    public function __construct()
    {
        parent::__construct();
        
        $this->hobbies = new ArrayCollection();
        $this->shares = new ArrayCollection();
        $this->assignments = new ArrayCollection();
        $this->students_answers = new ArrayCollection();
    }



    /**
     * Set dob
     *
     * @param string $dob
     *
     * @return User
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return date
     */
    public function getDob()
    {
        return $this->dob;
    }


    /**
     * Set role
     *
     * @param string $role
     *
     * @return User
     */
    public function setRole($role)
    {

        $roles['admin'] = "0"; 
        $roles['student'] = "1";
        $roles['professor'] = "2";
        $roles['school'] = "3";

        $this->role =$roles[$role];

        return $this;
    }

    /**
     * Get role
     *
     * @return integer
     */
    public function getRole()
    {
        $roles[0] = "admin"; 
        $roles[1] = "student";
        $roles[2] = "professor";
        $roles[3] = "school";
        $roles[null] = "";

        return $roles[$this->role];
    }


    //hobbie
    public function getHobbies()
    {
        return $this->hobbies;
    }
    

    public function addHobby(Hobby $hobby)
    {
        $hobby->setUser($this);
        $this->hobbies->add($hobby);
    }

    public function removeHobby(Hobby $hobby)
    {
        $this->hobbies->removeElement($hobby);
        return $this;
    }



    //shares

    public function getShares()
    {
        return $this->shares;
    }
    

    public function addShare(Share $share)
    {
        $shsre->setUser($this);
        $this->shares->add($share);
    }

    public function removeShare(Share $share)
    {
        $this->shares->removeElement($share);
        return $this;
    }



    
    public function getAssignments()
    {
        return $this->assignments;
    }
    
    public function addAssignment(Assignment $assignment)
    {

        $assignment->setUser($this);
        $this->assignment->add($assignment);
    }

    public function removeAssignment(Assignment $assignment)
    {
        $this->assignments->removeElement($assignment);
        return $this;
    }


    // public function getHobby()
    // {
    //     //return $this->hobbies;
    // }

    public function getUniversity()
    {
        return $this->university;
    }

    public function setUniversity($university)
    {
        $this->university = $university;
        return $this;
    }


    public function getUniversityStatus()
    {
        return $this->university_status;
    }

    public function setUniversityStatus($university_status)
    {
        $this->university_status = $university_status;
        return $this;
    }



    public function addUniversity(University $university)
    {
        $this->university->add($university);
    }


    public function getUniversityAdd()
    {
        return "";
    }

    public function setUniversityAdd($university_add)
    {

    }


    //students answer

    public function getStudentsAnswers()
    {
        return $this->students_answers;
    }
    
    public function addStudentsAnswer(StudentsAnswer $students_answer)
    {

        $students_answer->setUser($this);
        $this->students_answers->add($students_answer);
    }

    public function removeStudentsAnswer(StudentsAnswer $students_answer)
    {
        $this->students_answers->removeElement($students_answer);
        return $this;
    }












    // public function getCurrentUser()
    // {
    //     $current_user = $this->container->get('security.context')->getToken()->getUser();
    //     return $current_user;
    // }





    /**
     * Sets the file used for profile picture uploads
     * 
     * @param UploadedFile $file
     * @return object
     */
    public function setProfilePictureFile(UploadedFile $file = null) {
        // set the value of the holder
        $this->profilePictureFile       =   $file;
        //print_r($file);end;
         // check if we have an old image path
        if (isset($this->profilePicturePath)) {
            // store the old name to delete after the update
            $this->tempProfilePicturePath = $this->profilePicturePath;
            $this->profilePicturePath = null;
        } else {
            $this->profilePicturePath = 'initial';
        }

        return $this;
    }

    /**
     * Get the file used for profile picture uploads
     * 
     * @return UploadedFile
     */
    public function getProfilePictureFile() {

        return $this->profilePictureFile;
    }

    /**
     * Set profilePicturePath
     *
     * @param string $profilePicturePath
     * @return User
     */
    public function setProfilePicturePath($profilePicturePath)
    {
        $this->profilePicturePath = $profilePicturePath;

        return $this;
    }

    /**
     * Get profilePicturePath
     *
     * @return string 
     */
    public function getProfilePicturePath()
    {
        return $this->profilePicturePath;
    }

    /**
     * Get the absolute path of the profilePicturePath
     */
    public function getProfilePictureAbsolutePath() {
        return null === $this->profilePicturePath
            ? null
            : $this->getUploadRootDir().'/'.$this->profilePicturePath;
    }

    /**
     * Get root directory for file uploads
     * 
     * @return string
     */
    protected function getUploadRootDir($type='profilePicture') {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../web/'.$this->getUploadDir($type);
    }

    /**
     * Specifies where in the /web directory profile pic uploads are stored
     * 
     * @return string
     */
    protected function getUploadDir($type='profilePicture') {
        // the type param is to change these methods at a later date for more file uploads
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/user/profilepics';
    }

    /**
     * Get the web path for the user
     * 
     * @return string
     */
    public function getWebProfilePicturePath() 
    {
        return '/'.$this->getUploadDir().'/'.$this->getProfilePicturePath(); 
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUploadProfilePicture() 
    {
        if (null !== $this->getProfilePictureFile()) {
            // a file was uploaded
            // generate a unique filename
            $filename = $this->generateRandomProfilePictureFilename();
            $this->setProfilePicturePath($filename.'.'.$this->getProfilePictureFile()->guessExtension());
        }
    }

    /**
     * Generates a 32 char long random filename
     * 
     * @return string
     */
    public function generateRandomProfilePictureFilename() 
    {
        $count   =   0;
        do 
        {
            $generator = new SecureRandom();
            $random = $generator->nextBytes(16);
            $randomString = bin2hex($random);
            $count++;
        }
        while(file_exists($this->getUploadRootDir().'/'.$randomString.'.'.$this->getProfilePictureFile()->guessExtension()) && $count < 50);
        return $randomString;
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     * 
     * Upload the profile picture
     * 
     * @return mixed
     */
    public function uploadProfilePicture() 
    {
        // check there is a profile pic to upload
        if ($this->getProfilePictureFile() === null) {
            return;
        }
        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->getProfilePictureFile()->move($this->getUploadRootDir(), $this->getProfilePicturePath());

        // check if we have an old image
        if (isset($this->tempProfilePicturePath) && file_exists($this->getUploadRootDir().'/'.$this->tempProfilePicturePath)) {
            // delete the old image
            unlink($this->getUploadRootDir().'/'.$this->tempProfilePicturePath);
            // clear the temp image path
            $this->tempProfilePicturePath = null;
        }
        $this->profilePictureFile = null;
    }

     /**
     * @ORM\PostRemove()
     */
    public function removeProfilePictureFile()
    {
        $file = $this->getProfilePictureAbsolutePath();
        if ( file_exists($this->getProfilePictureAbsolutePath())) 
        {
            unlink($file);   
        }
    }





}