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
    public $running;

    function __construct() {
        $this->newPlayer = array();
        $this->countPlayer = 0;
        $this->running = true;
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

    public function addPlayer($newPlayerName) {

        #fscanf(STDIN, "%s\n", $input);
        $this->countPlayer++;

        if($this->countPlayer > 3) {
            echo "cannot add more player";
            echo "\n";
            $this->countPlayer--;
        }
        else {
            $this->countPlayer--;
            fscanf(STDIN, "%s\n", $newPlayerName);
            $this->newPlayer[$this->countPlayer] = new Player($namePlayer);
            $this->countPlayer++;
        }
    }
}

$newGame = new Main();
$running = true;
while($running) {
    $newGame->startMenu();
    echo "\n";
    fscanf(STDIN, "%s\n", $input);
    if($input = "new") {
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
        fscanf(STDIN, "%s\n", $newPlayerName);
        $newGame->addPlayer($newPlayerName);
    }
}
?>