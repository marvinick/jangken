<?php
    class RockPaperScissors
    {
          // private $rock;
          // private $scissors;
          // private $paper;
          //
          // function __construct($rock, $scissors, $paper)
          // {
          //
          //   $this->rock = $rock;
          //   $this->scissors = $scissors;
          //   $this->paper = $paper;
          // }
          //
          // function setRock($new_rock)
          // {
          //   $this->rock = $new_rock;
          // }
          //
          // function getRock()
          // {
          //   return $this->rock;
          // }
          //
          // function setScissors($new_scissors)
          // {
          //   $this->scissors = $new_scissors;
          // }
          //
          // function getScissors()
          // {
          //   return $this->scissors;
          // }
          //
          // function setPaper($new_paper)
          // {
          //   $this->paper = $new_paper;
          // }
          //
          // function getPaper()
          // {
          //   return $this->paper;
          // }


          function makeRockPaperScissors($first_input, $second_input) {

              if ($first_input == "rock" && $second_input == "scissors") {
                return "Player 1";
              }

              elseif($first_input == "rock" && $second_input == "paper") {
                return "Player 2";
              }

              elseif($first_input == "scissors" && $second_input == "rock") {
                return "Player 2";
              }

              elseif($first_input == "scissors" && $second_input == "paper") {
                return "Player 1";
              }

              elseif($first_input == "paper" && $second_input == "scissors") {
                return "Player 2";
              }

              elseif($first_input == "paper" && $second_input == "rock") {
                return "Player 1";
              }

              elseif($first_input == $second_input) {
                return "Draw";
              }
              elseif($first_input == null || $second_input == null) {
                return "Please select an option from both menus";
              }

          }

          // static function getAll()
          //   {
          //     return $_SESSION['list_of_action'];
          //   }


    }
?>
