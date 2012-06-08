<?php

namespace Webdev\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

/**
 * Webdev\BlogBundle\Entity\Comment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Webdev\BlogBundle\Entity\CommentRepository")
 */
class Comment
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
     * @var datetime $created_at
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $created_at;

    /**
     * @var string $content
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;
    
    /**
     * @ORM\ManyToOne(targetEntity="Webdev\AppBundle\Entity\User", inversedBy="comments")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true, onDelete="cascade")
     */
    private $user;
    
    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;
    
    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;
    
    
    /**
     * @var text $url
     *
     * @ORM\Column(name="url", type="text", nullable=true)
     */
    private $url;
    
    /**
     * @ORM\ManyToOne(targetEntity="Post", inversedBy="comments")
     */
    private $post;
    
    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="origin")
     */
    private $answers;
    
    /**
     * @ORM\ManyToOne(targetEntity="Comment", inversedBy="answers")
     */
    private $origin;
    
    public function __construct()
    {
    	$this->answers = new ArrayCollection();
    }
    
    public function __toString() {
    	return $this->content;
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
     * Set created_at
     *
     * @param datetime $createdAt
     * @return Comment
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;
        return $this;
    }

    /**
     * Get created_at
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set content
     *
     * @param text $content
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Get content
     *
     * @return text 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set user
     *
     * @param Webdev\AppBundle\Entity\User $user
     * @return Comment
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
     * Set url
     *
     * @param text $url
     * @return URL
     */
    public function setUrl($url)
    {
    	$this->url = $url;
    	return $this;
    }
    
    /**
     * Get url
     *
     * @return text
     */
    public function getUrl()
    {
    	return $this->url;
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return name
     */
    public function setName($name)
    {
    	$this->name = $name;
    	return $this;
    }
    
    /**
     * Get name
     *
     * @return name
     */
    public function getName()
    {
    	return $this->name;
    }
    
    /**
     * Set email
     *
     * @param string $email
     * @return email
     */
    public function setEmail($email)
    {
    	$this->email = $email;
    	return $this;
    }
    
    /**
     * Get email
     *
     * @return email
     */
    public function getEmail()
    {
    	return $this->email;
    }

    /**
     * Set post
     *
     * @param Webdev\BlogBundle\Entity\Post $post
     * @return Comment
     */
    public function setPost(\Webdev\BlogBundle\Entity\Post $post)
    {
        $this->post = $post;
        return $this;
    }

    /**
     * Get post
     *
     * @return Webdev\BlogBundle\Entity\Post 
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Add answers
     *
     * @param Webdev\BlogBundle\Entity\Comment $answers
     */
    public function addAnswer(\Webdev\BlogBundle\Entity\Comment $answers)
    {
        $this->answers[] = $answers;
    }

    /**
     * Get answers
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * Set origin
     *
     * @param Webdev\BlogBundle\Entity\Comment $origin
     * @return Comment
     */
    public function setOrigin(\Webdev\BlogBundle\Entity\Comment $origin)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * Get origin
     *
     * @return Webdev\BlogBundle\Entity\Comment 
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Add answers
     *
     * @param Webdev\BlogBundle\Entity\Comment $answers
     */
    public function addComment(\Webdev\BlogBundle\Entity\Comment $answers)
    {
        $this->answers[] = $answers;
    }
}