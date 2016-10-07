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

#$main = new BattleRoyal();
$namePlayer = "#";
$newPlayer = [];
$countPlayer = 0;
$running = true;
while($running) {
    echo "# ============================== #
# Welcome to the Battle Arena #
# ------------------------------------------------- ---- #
# Description: #
# 1 type \"new\" to create a character #
# 2. type \"start\" to begin the fight #
# ------------------------------------------------- ---- #
# Current Player: $countPlayer
# - #
# * Max player 2 or 3 #
# ------------------------------------------------- ---- #";
    echo "\n";
    fscanf(STDIN, "%s\n", $input);
    #echo $input;
    if ($input == "new") {
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
        echo "\n";
        $countPlayer++;
        if($countPlayer > 3 ) {
            echo "cannot add more player";
            echo "\n";
            $countPlayer--;
        }
        else {
            $countPlayer--;
            fscanf(STDIN, "%s\n", $namePlayer);
            $newPlayer[$countPlayer]  = new Player($namePlayer);
            $countPlayer++;
        }
    }
    elseif ($input == "start") {
        echo "# ============================== #
# Welcome to the Battle Arena #
# ------------------------------------------------- ---- #
Battle Start:
who will attack: ";$player1 = fgets (STDIN);
        if(in_array($player1, $newPlayer)) {
            $keyPlayer1 = array_search($player1, $newPlayer);

        }
        else {
            echo "player tidak terdaftar";
            break;
        }
        echo "who will attacked: ";$player2 = fgets (STDIN);
        if(in_array($player2, $newPlayer)) {
            $keyPlayer2 = array_search($player2, $newPlayer);

        }
        else {
            echo "player tidak terdaftar";
            break;
        }
        echo "$player1 : mana: ";
        echo "\n";
    }
    for ($i = 0 ; $i < sizeof($newPlayer) ; $i++) {
        echo $newPlayer[$i]->getName();
    }
}
?>