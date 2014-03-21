<?php
namespace tuitty\TuittyBundle\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @MongoDB\Document(collection="friends")
 */
class Friend
{
    /**
     * @MongoDB\Id
     */
    protected $id;
    
    /**
     * @MongoDB\Id
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    protected $userId;
    
    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    protected $friendId;
    
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
        return $this->userId;
    }
    
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
    
    public function getFriendId()
    {
        return $this->friendId;
    }
    
    public function setFriendId($friendId)
    {
        $this->friendId = $friendId;
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