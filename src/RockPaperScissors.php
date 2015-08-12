<?php
    class RockPaperScissors
    {
        function playRockPaperScissors($user,$system)
        {
            $output = array();

            if( ($user == $system) ) {
                array_push($output,"Same thing picked!");
            }

            if ( (($user == "rock")     && ($system == "scissors")) ||
                 (($user == "scissors") && ($system == "paper")) ||
                 (($user == "paper")    && ($system == "rock"))         )

            {
                array_push($output,"You win!");

            } else { array_push($output,"You Lose!"); }

            return $output;

        }

    }
?>
