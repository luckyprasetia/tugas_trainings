<?php
/**
 * Created by PhpStorm.
 * User: Lucky
 * Date: 10/6/2016
 * Time: 9:46 AM
 */
include 'player.php';
class Main {
    public $newPlayer;
    public $countPlayer;

    function __construct() {
        $this->newPlayer = array();
        $this->countPlayer = 0;
    }

    public function startMenu() {
        echo "# ============================== #
# Welcome to the Battle Arena #
# ------------------------------------------------- ---- #
# Description: #
# 1 type \"new\" to create a character #
# 2. type \"start\" to begin the fight #
# ------------------------------------------------- ---- #
# Current Player: $this->countPlayer
# - #
# * Max player 2 or 3 #
# ------------------------------------------------- ---- #";
    }

    public function addPlayer() {

        echo "# ============================== #
# Welcome to the Battle Arena #
# ------------------------------------------------- ---- #
# Description: #
# 1 type \"new\" to create a character #
# 2. type \"start\" to begin the fight #
# ------------------------------------------------- ---- #
# Put Player Name: #
# - #
# * Max player 2 or 3 #
# ------------------------------------------------- ---- #";
        echo "\n";

        fscanf(STDIN, "%s\n", $newPlayerName);
        $this->addCountPlayer();
        if($this->getCountPlayer() > 3) {
            echo "cannot add more player";
            echo "\n";
            $this->delCountPlayer();
        }
        else {
            $this->delCountPlayer();
            $this->newPlayer[$this->getCountPlayer()] = new Player($newPlayerName);
            $this->addCountPlayer();
        }
        for ($i = 0; $i < sizeof($this->newPlayer); $i++) {
            echo $this->newPlayer[$i]->getName();
        }
    }

    public function battle() {
        $battleRun = true;
        while($battleRun) {
            echo "# ============================== #
# Welcome to the Battle Arena #
# ------------------------------------------------- ---- #
Battle Start:
who will attack: ";
            #$player1 = fgets(STDIN);
            fscanf(STDIN, "%s\n", $player1);
            $cek1 = false;
            for ($i = 0; $i < sizeof($this->newPlayer); $i++) {
                #echo $this->newPlayer[$i];
                if($player1 == $this->newPlayer[$i]->getName()) {
                    $cek1 = true;
                }
            }
            #$cek1 = in_array($player1, $this->newPlayer);
            #echo $cek1;
            if ($cek1 == true) {
                for ($i = 0; $i < sizeof($this->newPlayer); $i++) {
                    #echo $this->newPlayer[$i];
                    if($player1 == $this->newPlayer[$i]->getName()) {
                        $keyPlayer1 = $i;
                    }
                }
                echo "who will attacked: ";
                #$player2 = fgets(STDIN);
                fscanf(STDIN, "%s\n", $player2);
                $cek2 = false;
                for ($i = 0; $i < sizeof($this->newPlayer); $i++) {
                    #echo $this->newPlayer[$i];
                    if($player1 == $this->newPlayer[$i]->getName()) {
                        $cek2 = true;
                    }
                }
                if ($cek2 == true) {
                    for ($i = 0; $i < sizeof($this->newPlayer); $i++) {
                        #echo $this->newPlayer[$i];
                        if($player1 == $this->newPlayer[$i]->getName()) {
                            $keyPlayer2 = $i;
                        }
                    }

                    $blood1 = $this->newPlayer[$keyPlayer1]->getBlood();
                    $blood2 = $this->newPlayer[$keyPlayer2]->getBlood();
                    $mana1 = $this->newPlayer[$keyPlayer1]->getMana();
                    $mana2 = $this->newPlayer[$keyPlayer2]->getMana();

                    echo "Description:
$player1 : mana: $mana1, blood: $blood1
$player2 : mana: $mana2, blood: $blood2";
                    echo"\n";

                    $this->newPlayer[$keyPlayer2]->attack();
                    $blood2 = $this->newPlayer[$keyPlayer2]->getBlood();
                    $mana2 = $this->newPlayer[$keyPlayer2]->getMana();

                    echo "Description:
$player1 : mana: $mana1, blood: $blood1
$player2 : mana: $mana2, blood: $blood2";

                    if($blood2 = 0 || $mana2 = 0) {
                        break;
                    }

                    echo "\n";

                } else {
                    echo "player tidak terdaftar";
                    #break;
                }
            } else {
                echo "player tidak terdaftar";
                #break;
            }
        }


    }

    /**
     * @return int
     */
    public function getCountPlayer()
    {
        return $this->countPlayer;
    }

    public function addCountPlayer() {
        $this->countPlayer++;
    }

    public function delCountPlayer() {
        $this->countPlayer--;
    }
}

$newGame = new Main();
$running = true;
while($running) {
    $newGame->startMenu();
    echo "\n";
    fscanf(STDIN, "%s\n", $input);
    #$input = fgets(STDIN);
    #echo $input;
    if($input == "new") {
        $newGame->addPlayer();
    }
    elseif($input == "start") {
        $newGame->battle();
    }
    else{
        $running = false;
    }
}
?>