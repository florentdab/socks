<?php

namespace sockBundle\Entity;

/**
 * Sock
 */
class Sock
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $picture;

    /**
     * @var string
     */
    private $vote1;

    /**
     * @var string
     */
    private $vote2;

    /**
     * @var string
     */
    private $vote3;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Sock
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
     * Set picture
     *
     * @param string $picture
     *
     * @return Sock
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set vote1
     *
     * @param string $vote1
     *
     * @return Sock
     */
    public function setVote1($vote1)
    {
        $this->vote1 = $vote1;

        return $this;
    }

    /**
     * Get vote1
     *
     * @return string
     */
    public function getVote1()
    {
        return $this->vote1;
    }

    /**
     * Set vote2
     *
     * @param string $vote2
     *
     * @return Sock
     */
    public function setVote2($vote2)
    {
        $this->vote2 = $vote2;

        return $this;
    }

    /**
     * Get vote2
     *
     * @return string
     */
    public function getVote2()
    {
        return $this->vote2;
    }

    /**
     * Set vote3
     *
     * @param string $vote3
     *
     * @return Sock
     */
    public function setVote3($vote3)
    {
        $this->vote3 = $vote3;

        return $this;
    }

    /**
     * Get vote3
     *
     * @return string
     */
    public function getVote3()
    {
        return $this->vote3;
    }
}
