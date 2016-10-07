<?php

class Player{
    protected $blood;
    protected $mana;
    protected $name;

    public function __construct ($name) {
        $this-> name = $name;
        $this-> blood = 100;
        $this-> mana = 40;
    }

    /**
     * @return int
     */
    public function getBlood()
    {
        return $this->blood;
    }

    /**
     * @param int $blood
     */
    public function setBlood($blood)
    {
        $this->blood = $blood;
    }

    /**
     * @return int
     */
    public function getMana()
    {
        return $this->mana;
    }

    /**
     * @param int $mana
     */
    public function setMana($mana)
    {
        $this->mana = $mana;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}

?>