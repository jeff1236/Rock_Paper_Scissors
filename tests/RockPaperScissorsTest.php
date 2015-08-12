<?php

		require_once "src/RockPaperScissors.php";

		class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
		{

				function test_rock_scissors()
				{
						//Arrange
						$test_RockPaperScissors = new RockPaperScissors;
						$user = "rock";
						$system = "scissors";

						//Act
						$result = $test_RockPaperScissors->playRockPaperScissors($user, $system);

						//Assert
						$this->assertEquals("You win!", $result);
				}
		}

?>
