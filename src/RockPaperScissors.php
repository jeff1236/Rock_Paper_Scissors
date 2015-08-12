<?php
    class RockPaperScissors
    {
        function playRockPaperScissors($user,$system)
        {

            $output = array();

            if( $system == "computer_pick") {

                $picks = array("rock","paper","scissors");
                $int = array_rand($picks);

                $system_pick = $picks[$int];

                // switch ($int) {
                //     case 0: $system_pick = "rock";
                //     case 1: $system_pick = "paper";
                //     case 2: $system_pick = "scissors";
                // }

            } else {
                $system_pick = $system;
            }

            // echo $system_pick;

            // First elememt is system or user 2 pick
            array_push($output, $system_pick);

            if( ($user == $system_pick) ) {
                array_push($output,"Same thing picked!");
            }



            if ( (($user == "rock")     && ($system_pick == "scissors")) ||
                 (($user == "scissors") && ($system_pick == "paper")) ||
                 (($user == "paper")    && ($system_pick == "rock"))         )

            {
                array_push($output,"You win!");

            } else {
                array_push($output,"You Lose!");
            }

            // var_dump($output);

            return $output;
        }

    }
?>
