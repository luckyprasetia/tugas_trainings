<?php
class BattleRoyal {
    protected $playerName;

    public function __construct()
    {
        $this->playerName = "#";
    }

    public function mainScreen() {
        echo "# ============================== #
            # Welcome to the Battle Arena #
            # ------------------------------------------------- ---- #
            # Description: #
            # 1 type \"new\" to create a character #
            # 2. type \"start\" to begin the fight #
            # ------------------------------------------------- ---- #
            # Current Player: #
            # - #
            # * Max player 2 or 3 #
            # ------------------------------------------------- ---- #";
    }
}

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

$main = new BattleRoyal();
$main->mainScreen();
$running = true;
while($running){
    echo
"# ============================== #
# Welcome to the Battle Arena #
# ------------------------------------------------- ---- #
# Description: #
# 1 type \"new\" to create a character #
# 2. type \"start\" to begin the fight #
# ------------------------------------------------- ---- #
# Current Player: #
# - #
# * Max player 2 or 3 #
# ------------------------------------------------- ---- #";
    echo "\n";
    fscanf(STDIN, "%s\n", $state);
    echo $state;
    if($state == "new"){
        echo "# ============================== #
# Welcome to the Battle Arena #
# ------------------------------------------------- ---- #
# Description: #
# 1 type \"new\" to create a character #
# 2. type \"start\" to begin the fight #
# ------------------------------------------------- ---- #
# Put Player Name:  #
# - #
# * Max player 2 or 3 #
# ------------------------------------------------- ---- #";
        echo "\n";
        fscanf(STDIN, "%s\n", $playername);
    }
    else break;

}



?>