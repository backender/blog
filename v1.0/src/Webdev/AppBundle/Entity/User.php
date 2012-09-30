<?php
namespace Webdev\AppBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
    /**
     * @ORM\ManyToMany(targetEntity="Webdev\BlogBundle\Entity\Project", mappedBy="members")
     */
    protected $projects;

	public function __construct()
	{
		parent::__construct();
		// your own logic
	}

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add projects
     *
     * @param Webdev\BlogBundle\Entity\Project $projects
     * @return User
     */
    public function addProject(\Webdev\BlogBundle\Entity\Project $projects)
    {
        $this->projects[] = $projects;
        return $this;
    }

    /**
     * Get projects
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getProjects()
    {
        return $this->projects;
    }
}