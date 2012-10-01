<?php

namespace Backender\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * Backender\BlogBundle\Entity\Post
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Webdev\BlogBundle\Entity\PostRepository")
 */
class Post
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
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string $slug
     *
     * @ORM\Column(name="slug", type="string", length=255, unique=true)
     */
    private $slug;

    /**
     * @var text $content
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var datetime $created_at
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;

    /**
     * @var datetime $updated_at
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updated_at;

    /**
     * @var integer $clicks
     *
     * @ORM\Column(name="clicks", type="integer")
     */
    private $clicks;
    
    /**
     * @ORM\ManyToMany(targetEntity="Tag", inversedBy="posts")
     * @ORM\JoinTable(name="post_tags")
     */
    private $tags;
    
    /**
     * @ORM\ManyToOne(targetEntity="Webdev\AppBundle\Entity\User", inversedBy="posts")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false, onDelete="cascade")
     */
    private $user;
    
    /**
	 * @ORM\OneToMany(targetEntity="Comment", mappedBy="post")
     */
    private $comments;
    
    
    public function __construct()
    {
    	$this->created_at = new \DateTime();
    	$this->updated_at = new \DateTime();
    	$this->clicks = 0;
    	$this->tags = new ArrayCollection();
    	$this->comments = new ArrayCollection();
    }
    
    public function __toString() {
    	return $this->slug;
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
     * Set title
     *
     * @param string $title
     * @return Post
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
     * Set slug
     *
     * @param string $slug
     * @return Post
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Post
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Post
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
    
        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Post
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updated_at = $updatedAt;
    
        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set clicks
     *
     * @param integer $clicks
     * @return Post
     */
    public function setClicks($clicks)
    {
        $this->clicks = $clicks;
    
        return $this;
    }

    /**
     * Get clicks
     *
     * @return integer 
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * Add tags
     *
     * @param Backender\BlogBundle\Entity\Tag $tags
     * @return Post
     */
    public function addTag(\Backender\BlogBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;
    
        return $this;
    }

    /**
     * Remove tags
     *
     * @param Backender\BlogBundle\Entity\Tag $tags
     */
    public function removeTag(\Backender\BlogBundle\Entity\Tag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set user
     *
     * @param Webdev\AppBundle\Entity\User $user
     * @return Post
     */
    public function setUser(\Webdev\AppBundle\Entity\User $user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return Webdev\AppBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add comments
     *
     * @param Backender\BlogBundle\Entity\Comment $comments
     * @return Post
     */
    public function addComment(\Backender\BlogBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;
    
        return $this;
    }

    /**
     * Remove comments
     *
     * @param Backender\BlogBundle\Entity\Comment $comments
     */
    public function removeComment(\Backender\BlogBundle\Entity\Comment $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }
}