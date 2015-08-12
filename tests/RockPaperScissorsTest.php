<?php

		require_once "src/RockPaperScissors.php";

		class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
		{

			function test_same_pick()
			{
					//Arrange
					$test_RockPaperScissors = new RockPaperScissors;
					$user = "rock";
					$system = "rock";

					//Act
					$result = $test_RockPaperScissors->playRockPaperScissors($user, $system);

					//Assert
					$this->assertEquals("Same thing picked!", $result);
			}

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


			function test_rock_paper()
			{
					//Arrange
					$test_RockPaperScissors = new RockPaperScissors;
					$user = "rock";
					$system = "paper";

					//Act
					$result = $test_RockPaperScissors->playRockPaperScissors($user, $system);

					//Assert
					$this->assertEquals("You Lose!", $result);
			}

			function test_scissors_paper()
			{
					//Arrange
					$test_RockPaperScissors = new RockPaperScissors;
					$user = "scissors";
					$system = "paper";

					//Act
					$result = $test_RockPaperScissors->playRockPaperScissors($user, $system);

					//Assert
					$this->assertEquals("You win!", $result);
			}

			function test_scissors_rock()
			{
					//Arrange
					$test_RockPaperScissors = new RockPaperScissors;
					$user = "scissors";
					$system = "rock";

					//Act
					$result = $test_RockPaperScissors->playRockPaperScissors($user, $system);

					//Assert
					$this->assertEquals("You Lose!", $result);
			}

			function test_paper_rock()
			{
					//Arrange
					$test_RockPaperScissors = new RockPaperScissors;
					$user = "paper";
					$system = "rock";

					//Act
					$result = $test_RockPaperScissors->playRockPaperScissors($user, $system);

					//Assert
					$this->assertEquals("You win!", $result);
			}
		}

?>
