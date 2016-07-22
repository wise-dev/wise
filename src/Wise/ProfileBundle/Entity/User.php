<?php

namespace Wise\ProfileBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="wise_user")
 * @ORM\HasLifecycleCallbacks
 */
class User extends BaseUser{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string $image
     * @ORM\Column(name="image", type="string", length=255)
     */
    protected $image;

    public $file;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
     protected function getUploadDir()
    {
        return 'image';
    }
     
    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../web/'.$this->getUploadDir()."/".$this->getId()."/";
    }
     
    public function getWebPath()
    {
        return null === $this->image ? null : $this->getUploadDir().$this->getId()."/".'/'.$this->image;
    }
     
    public function getAbsolutePath()
    {
        return null === $this->image ? null : $this->getUploadRootDir().$this->getId()."/".'/'.$this->image;
    }
     /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function preUpload()
    {
        if ($this->file !== null) {
           // do whatever you want to generate a unique name
           $this->image = uniqid().'.'.$this->file->guessExtension();
        }else{
             $this->image ='user.png';
        }
    }

    /**
     * @ORM\PostPersist
     * @ORM\PostUpdate
     */
    public function upload()
    {
        if (null === $this->file) {
            return;
        } 
          // if there is an error when moving the file, an exception will
          // be automatically thrown by move(). This will properly prevent
          // the entity from being persisted to the database on error
        
        $this->file->move($this->getUploadRootDir(), $this->image);
        unset($this->file);

    }
    /**
     * @ORM\PreRemove()
     */
    public function storeFilenameForRemove()
    {
        $this->filenameForRemove = $this->getAbsolutePath1();
    }
    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($this->filenameForRemove) {
            unlink($this->filenameForRemove);
        }
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return User
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
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
}
