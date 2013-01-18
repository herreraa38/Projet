<?php

namespace Tp\Admin2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Tp\Admin2Bundle\Entity\Post
 *
 * @ORM\Table()
 * @ORM\Entity
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
     * @ORM\Column(name="title", type="string", length=500)
     */
    private $title;

    /**
     * @var datetime $date
     * @Assert\Date()
     * @ORM\Column(name="date", type="date")
     */
    private $date; 

    /**
     * @var string $content
     * 
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    // ...

    /**
     * @ORM\ManyToOne(targetEntity="Categories", inversedBy="posts")
     * @ORM\JoinColumn(name="categories_id", referencedColumnName="id")
     */
    protected $categories;


    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="posts")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;


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
     * Set date
     *
     * @param string $date
     * @return Post
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }



    /**
     * Set categories
     *
     * @param Tp\Admin2Bundle\Entity\Categories $categories
     * @return Post
     */
    public function setCategories(\Tp\Admin2Bundle\Entity\Categories $categories = null)
    {
        $this->categories = $categories;
    
        return $this;
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

    /**
     * Set user
     *
     * @param Tp\Admin2Bundle\Entity\User $user
     * @return Post
     */
    public function setUser(\Tp\Admin2Bundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return Tp\Admin2Bundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}