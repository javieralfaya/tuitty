<?php
namespace tuitty\TuittyBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @MongoDB\Document(collection="users")
 */
class User
{
    /**
     * @MongoDB\Id
     */
    protected $id;
    
    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    protected $nickName;
    
    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    protected $name;
    
    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    protected $surname;
    
    /** 
     * @MongoDB\Field(type="string")
     * @MongoDB\Index(unique=true)
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    protected $email;

    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    protected $password;
    
    /**
     * @MongoDB\Field(type="date")
     * @Assert\NotBlank()
     */
    protected $birthDate;
    
    /**
     * @MongoDB\Field(type="date")
     * @Assert\NotBlank()
     */
    protected $startDate;
    
    /**
     * @MongoDB\Field(type="date")
     * @Assert\NotBlank()
     */
    protected $endDate;

    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    protected $language;
    
    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    protected $coutry;
    
    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    protected $state;
    
    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    protected $city;
    
    /** 
     * @MongoDB\ReferenceMany(targetDocument="friends", cascade="all") 
     */
    private $friends = array();
    
    /** 
     * @MongoDB\ReferenceMany(targetDocument="photos", cascade="all") 
     */
    private $photos = array();
    
    /** 
     * @MongoDB\ReferenceMany(targetDocument="tuitties", cascade="all") 
     */
    private $tuities = array();
    
    /**
     * @MongoDB\Field(type="boolean")
     * @Assert\NotBlank()
     */
    protected $sex;
    
    /**
     * @MongoDB\Field(type="boolean")
     * @Assert\NotBlank()
     */
    protected $isCorporate;
    
    /**
     * @MongoDB\Field(type="boolean")
     * @Assert\NotBlank()
     */
    protected $active;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getNickName()
    {
        return $this->nickName;
    }
    
    public function setNickName($nickName)
    {
        $this->name = $nickName;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getSurname()
    {
        return $this->surname;
    }
    
    public function setSurname($surname)
    {
        $this->password = $surname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }
    
    public function setPassword($pass)
    {
        $this->password = $pass;
    }
    
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }
    
    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }
    
    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndtDate($endDate)
    {
        $this->endDate = $endDate;
    }
    
    public function getSex()
    {
        return $this->sex;
    }

    public function setSex($sex)
    {
        $this->sex = $sex;
    }
    
    public function getIsCorporate()
    {
        return $this->isCorporate;
    }

    public function setIsCorporate($isCorporate)
    {
        $this->isCorporate = $isCorporate;
    }
    
    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }
    
    public function getCountry()
    {
        return $this->coutry;
    }

    public function setCountry($country)
    {
        $this->coutry = $country;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
    }
    
    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }
    
    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
    }
    
    public function getFriends()
    {
        return $this->friends;
    }
    
    public function setFriend($i, $friend)
    {
        $this->friends[$i] = $friend;
    }
    
    public function getPhotos()
    {
        return $this->photos;
    }
    
    public function setPhoto($i, $photo)
    {
        $this->photos[$i] = $photo;
    }
    
    public function getTuitties()
    {
        return $this->tuities;
    }
    
    public function setTuitty($i, $tuitty)
    {
        $this->tuities[$i] = $tuitty;
    }
}

/** 
 * @MongoDB\Document 
 */
class friends
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

/** 
 * @MongoDB\Document 
 */
class photos
{
    /**
     * @MongoDB\Id
     */
    protected $id;
    
    /**
     * @MongoDB\Field(type="file")
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

/** 
 * @MongoDB\Document 
 */
class tuitties
{
    /**
     * @MongoDB\Id
     */
    protected $id;
    
    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    protected $name;

    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    protected $ethnicityId;
    
    /** 
     * @MongoDB\Field(type="boolean")
     */
    protected $pedigree;

    /**
     * @MongoDB\Field(type="integer")
     * @Assert\NotBlank()
     */
    protected $age;
    
    /**
     * @MongoDB\Field(type="string")
     * @Assert\NotBlank()
     */
    private $type;
    
    /** 
     * @MongoDB\ReferenceMany(targetDocument="photos", cascade="all") 
     */
    private $photos = array();
    
    /**
     * @MongoDB\Field(type="boolean")
     * @Assert\NotBlank()
     */
    protected $isHot;
    
    /**
     * @MongoDB\Field(type="boolean")
     * @Assert\NotBlank()
     */
    protected $active;
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getUserId()
    {
        return $this->userId;
    }
    
    public function getEthnicityId()
    {
        return $this->ethnicityId;
    }

    public function setEthnicityId($ethnicityId)
    {
        $this->ethnicityId = $ethnicityId;
    }
    
    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
    
    public function getPedigree()
    {
        return $this->pedigree;
    }

    public function setPedigree($pedigree)
    {
        $this->pedigree = $pedigree;
    }
    
    public function getType()
    {
        return $this->type;
    }

    public function setTipe($type)
    {
        $this->type = $type;
    }
    
    public function getPhotos()
    {
        return $this->photos;
    }
    
    public function setPhoto($i, $photo)
    {
        $this->photos[$i] = $photo;
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