<?php
/**
 * Created by PhpStorm.
 * User: Lucky
 * Date: 10/6/2016
 * Time: 9:46 AM
 */
include 'player.php';
class Main {
    public $newPlayer = [];
    public $countPlayer = 0;
    public $running = True;

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
    if($input == "new") {
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

if($countPlayer > 3) {
echo "cannot add more player";
echo "\n";
$countPlayer--;
}
else {
    $countPlayer--;
    fscanf(STDIN, "%s\n", $namePlayer);
    $newPlayer[$countPlayer] = new Player($namePlayer);
    $countPlayer++;
}
}
elseif($input == "start") {
    echo "# ============================== #
			# Welcome to the Battle Arena #
			# ------------------------------------------------- ---- #
			Battle Start:
			who will attack: ";
    $player1 = fgets(STDIN);
    if (in_array($player1, $newPlayer)) {
        $keyPlayer1 = array_search($player1, $newPlayer);

    } else {
        echo "player tidak terdaftar";
        break;
    }
    echo "who will attacked: ";
    $player2 = fgets(STDIN);
    if (in_array($player2, $newPlayer)) {
        $keyPlayer2 = array_search($player2, $newPlayer);

    } else {
        echo "player tidak terdaftar";
        break;
    }


    echo "$player1 : mana: ";
    echo "\n";
}
		for ($i = 0; $i < sizeof($newPlayer); $i++) {
            echo $newPlayer[$i]->getName();
        }

	}
}
?>