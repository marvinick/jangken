<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {

        function test_rock_scissors()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "scissors";

            //Act
            $result = $test_RockPaperScissors->makeRockPaperScissors($first_input, $second_input);

            //Assert
            $this->assertEquals(array("Player 1"), $result);
        }

        function test_rock_scissors_draw()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "rock";

            //Act
            $result = $test_RockPaperScissors->makeRockPaperScissors($first_input, $second_input);

            //Assert
            $this->assertEquals(array("Draw"), $result);
        }

        function test_rock_scissors_none()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = null;
            $second_input = "rock";

            //Act
            $result = $test_RockPaperScissors->makeRockPaperScissors($first_input, $second_input);

            //Assert
            $this->assertEquals(array("Please select an option from both menus"), $result);
        }
    }

?>
