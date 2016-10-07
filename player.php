<?php

class Player{
    protected $blood;
    protected $mana;
    protected $name;

    public function __construct () {
        $this-> name = "#";
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

class BattleRoyal {
    protected $player;
    #protected $playerName;
    protected $playerCount;
    public function __construct()
    {
        $this->playerCount = 0;
        $this->player = new Player();
    }

    public function mainScreen($playerName) {
        #$this->playerName = $this->player->getName();
        echo "# ============================== #
# Welcome to the Battle Arena #
# ------------------------------------------------- ---- #
# Description: #
# 1 type \"new\" to create a character #
# 2. type \"start\" to begin the fight #
# ------------------------------------------------- ---- #
# Current Player: $playerName
# - #
# * Max player 2 or 3 #
# ------------------------------------------------- ---- #";
    }

    public function newPlayer() {
        echo "# ============================== #
# Welcome to the Battle Arena #
# ------------------------------------------------- ---- #
# Description: #
# 1 type \"new\" to create a character #
# 2. type \"start\" to begin the fight #
# ------------------------------------------------- ---- #
# Put Player Name #
# - #
# * Max player 2 or 3 #
# ------------------------------------------------- ---- #";
    }
    /**
     * @return int
     */
    public function getPlayerCount()
    {
        return $this->playerCount;
    }

    /**
     * @param int $playerCount
     */
    public function setPlayerCount($playerCount)
    {
        $this->playerCount = $playerCount;
    }
}

$main = new BattleRoyal();
$namePlayer = "#";
$newPlayer = new Player();
$countPlayer = 0;
$running = true;
while($running) {
    $main->mainScreen($newPlayer->getName());
    echo "\n";
    fscanf(STDIN, "%s\n", $input);
    if ($input == "new") {
        $main->newPlayer();
        echo "\n";
        fscanf(STDIN, "%s\n", $namePlayer);
        $newPlayer->setName($namePlayer);
        $countPlayer++;
        $main->setPlayerCount($countPlayer);
    }
}
?>