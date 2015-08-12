<?php
    class RockPaperScissors
    {
        function playRockPaperScissors($user,$system)
        {

            if( ($user == $system) ) {
                return "Same thing picked!";
            }

            if ( (($user == "rock")     && ($system == "scissors")) ||
                 (($user == "scissors") && ($system == "paper")) ||
                 (($user == "paper")    && ($system == "rock"))         )

            {
                return "You win!";

            } else { return "You Lose!"; }

        }

    }
?>
