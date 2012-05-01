<?php
class Player
{
    private $name;
    private $level;
    private $life;

    public function __construct($name)
    {
        $this->name = $name;
        $this->level = 1;
        $this->life = 100;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }

    public function getLife()
    {
        return $this->life;
    }

    public function setLife($life)
    {
        $this->life = $life;
    }

    public function __sleep()
    {
        return array(
            'name',
            'level'
        );
    }

    public function __wakeup()
    {
        $this->life = 100;
    }

    public function __toString()
    {
        return "Player {$this->name},
            level {$this->level} has {$this->life} of life.";
    }
}
?>