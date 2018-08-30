<?php

// src/AppBundle/Entity/user.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Symfony\Component\Security\Core\User\UserInterface;

//use Symfony\Component\Security\Core\Encoder\BCryptPasswordEncoder;

/**
 * @ORM\Entity
 * @ORM\Table(name="game")
 */
class Game  {
    
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(name="title", type="string", length=255, unique=true)
     */
    protected $title;
    
    /**
     * @ORM\Column(name="difficulty", type="integer")
     */
    protected $difficulty;
    
    /**
     * @ORM\Column(name="mode", type="integer")
     */
    protected $mode;
    
    /**
     * @ORM\Column(name="color", type="integer")
     */
    protected $color;
    
    

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
     *
     * @return Game
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
     * Set difficulty
     *
     * @param integer $difficulty
     *
     * @return Game
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    /**
     * Get difficulty
     *
     * @return integer
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Set mode
     *
     * @param integer $mode
     *
     * @return Game
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return integer
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set color
     *
     * @param integer $color
     *
     * @return Game
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return integer
     */
    public function getColor()
    {
        return $this->color;
    }
}
