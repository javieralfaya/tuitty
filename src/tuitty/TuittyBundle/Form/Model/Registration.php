<?php
namespace tuitty\TuittyBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;

use tuitty\TuittyBundle\Document\User;

class Registration
{
    /**
     * @Assert\Type(type="tuitty\TuittyBundle\Document\User")
     */
    protected $user;

    /**
     * @Assert\NotBlank()
     * @Assert\True()
     */
    protected $termsAccepted;

    public function setUser(User $user)
    {
        $this->usuario = $user;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getTermsAccepted()
    {
        return $this->termsAccepted;
    }

    public function setTermsAccepted($termsAccepted)
    {
        $this->termsAccepted = (boolean)$termsAccepted;
    }
}
