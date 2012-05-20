<?php

namespace Webdev\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Webdev\BlogBundle\Entity\Project
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Webdev\BlogBundle\Entity\ProjectRepository")
 */
class Project
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var date $starts_at
     *
     * @ORM\Column(name="starts_at", type="date")
     */
    private $starts_at;

    /**
     * @var date $ends_at
     *
     * @ORM\Column(name="ends_at", type="date")
     */
    private $ends_at;
    
    /**
     * @ORM\OneToMany(targetEntity="Webdev\BlogBundle\Entity\Post", mappedBy="projects")
     */
    private $posts;

    /**
     * @ORM\ManyToMany(targetEntity="Webdev\AppBundle\Entity\User", inversedBy="projects")
     * @ORM\JoinTable(name="project_members")
     */
    private $members;
    
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
     * Set name
     *
     * @param string $name
     * @return Project
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

    /**
     * Set description
     *
     * @param text $description
     * @return Project
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set starts_at
     *
     * @param date $startsAt
     * @return Project
     */
    public function setStartsAt($startsAt)
    {
        $this->starts_at = $startsAt;
        return $this;
    }

    /**
     * Get starts_at
     *
     * @return date 
     */
    public function getStartsAt()
    {
        return $this->starts_at;
    }

    /**
     * Set ends_at
     *
     * @param date $endsAt
     * @return Project
     */
    public function setEndsAt($endsAt)
    {
        $this->ends_at = $endsAt;
        return $this;
    }

    /**
     * Get ends_at
     *
     * @return date 
     */
    public function getEndsAt()
    {
        return $this->ends_at;
    }
    public function __construct()
    {
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
        $this->members = new ArrayCollection();
    }
    
    public function __toString() {
    	return $this->name;
    }


    /**
     * Add posts
     *
     * @param Webdev\BlogBundle\Entity\Post $posts
     * @return Project
     */
    public function addPost(\Webdev\BlogBundle\Entity\Post $posts)
    {
        $this->posts[] = $posts;
        return $this;
    }

    /**
     * Get posts
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPosts()
    {
        $posts = $this->posts; //i need this line for project relating posts output, otherwise it wont work
    	return $this->posts;
    }

    /**
     * Add members
     *
     * @param Webdev\AppBundle\Entity\User $members
     * @return Project
     */
    public function addUser(\Webdev\AppBundle\Entity\User $members)
    {
        $this->members[] = $members;
        return $this;
    }
    
    
    /**
     * Get members
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getMembers()
    {
        return $this->members;
    }
}