<?php

// src/AppBundle/Entity/user.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

//use \Symfony\Component\Security\Core\User\UserInterface;
//use Symfony\Component\Security\Core\Encoder\BCryptPasswordEncoder;

/**
 * @ORM\Entity
 * @ORM\Table(name="game")
 */
class Game extends User {

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="gamename", type="string", length=255)
     */
    protected $gamename;

    /**
     * @ORM\Column(name="status", type="string", length=255)
     */
    protected $status;

    /**
     * @ORM\Column(name="data", type="string", length=255)
     */
    protected $data;

    /**
     * @ORM\Column(name="board", type="string", length=255)
     */
    protected $board;

    /**
     * Set gamename
     *
     * @param string $gamename
     *
     * @return Game
     */
    public function setGamename($gamename) {
        $this->gamename = $gamename;

        return $this;
    }

    /**
     * Get gamename
     *
     * @return string
     */
    public function getGamename() {
        return $this->gamename;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Game
     */
    public function setStatus($status) {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Set data
     *
     * @param string $data
     *
     * @return Game
     */
    public function setData($data) {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData() {
        return $this->data;
    }

}
