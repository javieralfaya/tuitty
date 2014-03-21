<?php
namespace tuitty\TuittyBundle\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Bundle\MongoDBBundle\Validator\Constraints\Unique as MongoDBUnique;

/**
 * @MongoDB\Document(collection="events")
 * @MongoDBUnique(fields="id")
 */
class Event
{
    /**
     * @MongoDB\Id
     */
    protected $id;
    
    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    protected $userId;
    
    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    protected $categoryId;
    
    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    protected $cityId;
    
    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    protected $name;
    
    /**
     * @MongoDB\Field(type="date")
     * @Assert\NotBlank()
     */
    protected $startDate;
    
    /**
     * @MongoDB\Field(type="date")
     * @Assert\NotBlank()
     */
    protected $registrationDate;

    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    protected $content;
    
    /**
     * @MongoDB\Field(type="boolean")
     * @Assert\NotBlank()
     */
    protected $active;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getUserId()
    {
        return $this->id;
    }
    
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
    
    public function getCategoryId()
    {
        return $this->categoryId;
    }
    
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }
    
    public function getCityId()
    {
        return $this->cityId;
    }
    
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }
    
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate;
    }
    
    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }
    
    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }
}