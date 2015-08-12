<?php
    class RockPaperScissors
    {
        function playRockPaperScissors($user,$system)
        {

            if( ($user == $system) ) {
                return "Same thing picked!";
            }

            if ( ($user == "rock") && ($system == "scissors") ) {

                $output = "You win!";

            } else { $output = "You Lose!"; }


            return $output;
        }

    }
?>
