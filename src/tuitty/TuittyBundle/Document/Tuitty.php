<?php
namespace tuitty\TuittyBundle\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Bundle\MongoDBBundle\Validator\Constraints\Unique as MongoDBUnique;

/**
 * @MongoDB\Document(collection="tuitties")
 * @MongoDBUnique(fields="id")
 */
class Tuitty
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
    
    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }
}