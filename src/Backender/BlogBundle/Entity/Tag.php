<?php

namespace Backender\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * Backender\BlogBundle\Entity\Tag
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Backender\BlogBundle\Entity\TagRepository")
 */
class Tag
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
     * @var integer $quantifier
     *
     * @ORM\Column(name="quantifier", type="integer")
     */
    private $quantifier;

    /**
     * @ORM\ManyToMany(targetEntity="Post", mappedBy="tags")
     */
    private $posts;
    
    public function __construct()
    {
    	$this->posts = new ArrayCollection();
    }
    
    public function __toString() {
    	return $this->name;
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
     * Set name
     *
     * @param string $name
     * @return Tag
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
     * Set quantifier
     *
     * @param integer $quantifier
     * @return Tag
     */
    public function setQuantifier($quantifier)
    {
        $this->quantifier = $quantifier;
    
        return $this;
    }

    /**
     * Get quantifier
     *
     * @return integer 
     */
    public function getQuantifier()
    {
        return $this->quantifier;
    }

    /**
     * Add posts
     *
     * @param Backender\BlogBundle\Entity\Post $posts
     * @return Tag
     */
    public function addPost(\Backender\BlogBundle\Entity\Post $posts)
    {
        $this->posts[] = $posts;
    
        return $this;
    }

    /**
     * Remove posts
     *
     * @param Backender\BlogBundle\Entity\Post $posts
     */
    public function removePost(\Backender\BlogBundle\Entity\Post $posts)
    {
        $this->posts->removeElement($posts);
    }

    /**
     * Get posts
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getPosts()
    {
        return $this->posts;
    }
}