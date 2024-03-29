<?php

namespace Tp\Admin2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tp\BlogBundle\Entity\Categories
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Categories
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
     * @ORM\Column(name="title", type="string", length=500)
     */
    private $title;

    // ...

    /**
     * @ORM\OneToMany(targetEntity="Post", mappedBy="categories")
     */
    protected $posts;


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
     * @return Categories
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
     * Constructor
     */
    public function __construct()
    {
        $this->posts = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add posts
     *
     * @param Tp\BlogBundle\Entity\Post $posts
     * @return Categories
     */
    public function addPost(\Tp\BlogBundle\Entity\Post $posts)
    {
        $this->posts[] = $posts;
    
        return $this;
    }

    /**
     * Remove posts
     *
     * @param Tp\BlogBundle\Entity\Post $posts
     */
    public function removePost(\Tp\BlogBundle\Entity\Post $posts)
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
    
    /**
     * Get categories
     *
     * @return Tp\Admin2Bundle\Entity\Categories 
     */
    public function getCategories()
    {
        return $this->categories;
    }
}