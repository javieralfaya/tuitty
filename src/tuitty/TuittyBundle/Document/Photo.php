<?php
namespace tuitty\TuittyBundle\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Bundle\MongoDBBundle\Validator\Constraints\Unique as MongoDBUnique;

/**
 * @MongoDB\Document(collection="photos")
 * @MongoDBUnique(fields="id")
 */
class Photo
{
    /**
     * @MongoDB\Id
     */
    protected $id;
    
    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    protected $photoFile;
    
    /**
     * @MongoDB\Field(type="boolean")
     * @Assert\NotBlank()
     */
    protected $isProfile;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getPhotoFile()
    {
        return $this->photoFile;
    }

    public function setPhotoFile($photoFile)
    {
        $this->photoFile = $photoFile;
    }
    
    public function getIsProfile()
    {
        return $this->isProfile;
    }

    public function setIsProfile($isProfile)
    {
        $this->isProfile = $isProfile;
    }
}