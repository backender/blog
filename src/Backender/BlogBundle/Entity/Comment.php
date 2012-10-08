<?php

namespace Backender\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

use Doctrine\ORM\Mapping as ORM;

/**
 * Backender\BlogBundle\Entity\Comment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Backender\BlogBundle\Entity\CommentRepository")
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
     * @Assert\NotBlank()
     */
    private $content;
    
    /**
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User", inversedBy="comments")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true, onDelete="cascade")
     */
    //private $user;
    
    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $name;
    
    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     */
    private $email;
    
    
    /**
     * @var text $url
     *
     * @ORM\Column(name="url", type="text", nullable=true)
     * @Assert\Url
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
    private $origin; // * @Assert\Collection\Optional()
    
    public function __construct()
    {
    	$this->created_at = new \DateTime();
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
     * @param \DateTime $createdAt
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
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set content
     *
     * @param string $content
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
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Comment
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
     * Set email
     *
     * @param string $email
     * @return Comment
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Comment
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set post
     *
     * @param Backender\BlogBundle\Entity\Post $post
     * @return Comment
     */
    public function setPost(\Backender\BlogBundle\Entity\Post $post = null)
    {
        $this->post = $post;
    
        return $this;
    }

    /**
     * Get post
     *
     * @return Backender\BlogBundle\Entity\Post 
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * Add answers
     *
     * @param Backender\BlogBundle\Entity\Comment $answers
     * @return Comment
     */
    public function addAnswer(\Backender\BlogBundle\Entity\Comment $answers)
    {
        $this->answers[] = $answers;
    
        return $this;
    }

    /**
     * Remove answers
     *
     * @param Backender\BlogBundle\Entity\Comment $answers
     */
    public function removeAnswer(\Backender\BlogBundle\Entity\Comment $answers)
    {
        $this->answers->removeElement($answers);
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
     * @param Backender\BlogBundle\Entity\Comment $origin
     * @return Comment
     */
    public function setOrigin(\Backender\BlogBundle\Entity\Comment $origin = null)
    {
        $this->origin = $origin;
    
        return $this;
    }

    /**
     * Get origin
     *
     * @return Backender\BlogBundle\Entity\Comment 
     */
    public function getOrigin()
    {
        return $this->origin;
    }
}