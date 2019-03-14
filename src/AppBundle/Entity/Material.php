<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\Util\SecureRandom;

use Doctrine\Common\Collections\ArrayCollection;



/**
 * Material
 *
 * @ORM\Table(name="material")
 * @ORM\HasLifecycleCallbacks() //this is for upload
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MaterialRepository")
 */
class Material
{




    /**
     * @Assert\File(maxSize="2048k")
     * @Assert\Image(mimeTypesMessage="Please upload a valid image.")
     */
    protected $materialDataFile;

    // for temporary storage
    private $tempMaterialDataPath;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $materialDataPath;







    /**
     * @ORM\ManyToOne(targetEntity="Assignment", inversedBy="materials")
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
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;


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
     * @return Material
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
     * Set assignment_id
     *
     * @param int $assignment_id
     *
     * @return Material
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













    /**
     * Sets the file used for profile picture uploads
     * 
     * @param UploadedFile $file
     * @return object
     */
    public function setMaterialDataFile(UploadedFile $file = null) {
        // set the value of the holder
        $this->materialDataFile       =   $file;
        //print_r($file);end;
        // check if we have an old image path
        if (isset($this->materialDataPath)) {
            // store the old name to delete after the update
            $this->tempMaterialDataPath = $this->materialDataPath;
            $this->materialDataPath = null;
        } else {
            $this->materialDataPath = 'initial';
        }

        return $this;
    }

    /**
     * Get the file used for profile picture uploads
     * 
     * @return UploadedFile
     */
    public function getMaterialDataFile() {

        return $this->materialDataFile;
    }

    /**
     * Set materialDataPath
     *
     * @param string $materialDataPath
     * @return Material
     */
    public function setMaterialDataPath($materialDataPath)
    {
        $this->materialDataPath = $materialDataPath;

        return $this;
    }

    /**
     * Get materialDataPath
     *
     * @return string 
     */
    public function getMaterialDataPath()
    {
        return $this->materialDataPath;
    }

    /**
     * Get the absolute path of the materialDataPath
     */
    public function getMaterialDataAbsolutePath() {
        return null === $this->materialDataPath
            ? null
            : $this->getUploadRootDir().'/'.$this->materialDataPath;
    }

    /**
     * Get root directory for file uploads
     * 
     * @return string
     */
    protected function getUploadRootDir($type='materialData') {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../web/'.$this->getUploadDir($type);
    }

    /**
     * Specifies where in the /web directory profile pic uploads are stored
     * 
     * @return string
     */
    protected function getUploadDir($type='materialData') {
        // the type param is to change these methods at a later date for more file uploads
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/assignment/materials';
    }

    /**
     * Get the web path for the user
     * 
     * @return string
     */
    public function getWebMaterialDataPath() {

        return '/'.$this->getUploadDir().'/'.$this->getMaterialDataPath(); 
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUploadMaterialData() {
        if (null !== $this->getMaterialDataFile()) {
            // a file was uploaded
            // generate a unique filename
            $filename = $this->generateRandomMaterialDataFilename();
            $this->setMaterialDataPath($filename.'.'.$this->getMaterialDataFile()->guessExtension());
        }
    }

    /**
     * Generates a 32 char long random filename
     * 
     * @return string
     */
    public function generateRandomMaterialDataFilename() {
        $count   =   0;
        do 
        {
            $generator = new SecureRandom();
            $random = $generator->nextBytes(16);
            $randomString = bin2hex($random);
            $count++;
        }
        while(file_exists($this->getUploadRootDir().'/'.$randomString.'.'.$this->getMaterialDataFile()->guessExtension()) && $count < 50);
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
    public function uploadMaterialData() {
        // check there is a profile pic to upload
        if ($this->getMaterialDataFile() === null) {
            return;
        }
        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->getMaterialDataFile()->move($this->getUploadRootDir(), $this->getMaterialDataPath());

        // check if we have an old image
        if (isset($this->tempMaterialDataPath) && file_exists($this->getUploadRootDir().'/'.$this->tempMaterialDataPath)) {
            // delete the old image
            unlink($this->getUploadRootDir().'/'.$this->tempMaterialDataPath);
            // clear the temp image path
            $this->tempMaterialDataPath = null;
        }
        $this->materialDataFile = null;
    }

     /**
     * @ORM\PostRemove()
     */
    public function removeMaterialDataFile()
    {
        $file = $this->getMaterialDataAbsolutePath();
        if ( file_exists($this->getMaterialDataAbsolutePath())) 
        {
            unlink($file);   
        }
    }


















}

