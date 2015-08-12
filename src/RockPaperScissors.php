<?php
    class RockPaperScissors
    {
        function playRockPaperScissors($user,$system)
        {
            $output = "";

            if ( ($user == "rock") && ($system == "scissors") ) {

                $output = "You win!";

            } else { $output = "You Lose!"; }


            return $output;
        }

    }
?>
