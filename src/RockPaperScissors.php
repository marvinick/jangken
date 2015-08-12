<?php
    class RockPaperScissors
    {

          function makeRockPaperScissors($first_input, $second_input) {
              $result = array();
              if ($first_input == "rock" && $second_input == "scissors") {
                array_push($result, "Player 1");
              }

              elseif($first_input == "rock" && $second_input == "paper") {
                array_push($result, "Player 2");
              }

              elseif($first_input == "scissors" && $second_input == "rock") {
                array_push($result, "Player 2");
              }

              elseif($first_input == "scissors" && $second_input == "paper") {
                array_push($result, "Player 1");
              }

              elseif($first_input == "paper" && $second_input == "scissors") {
                array_push($result, "Player 2");
              }

              elseif($first_input == "paper" && $second_input == "rock") {
                array_push($result, "Player 1");
              }

              elseif($first_input == $second_input) {
                array_push($result, "Draw");
              }
              elseif($first_input == null || $second_input == null) {
                array_push($result, "Please select an option from both menus");
              }
              return $result;
          }
    }
?>
