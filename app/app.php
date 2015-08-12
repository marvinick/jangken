<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/RockPaperScissors.php";

  session_start();


  if (empty($_SESSION['rock_paper_scissors'])) {

    $_SESSION["rock_paper_scissors"] = array();
  }

  $app = new Silex\Application();
  $app['debug'] = true;
  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__."/../views"));

  $app->get("/", function() use ($app)  {
    // $rock = new RockPaperScissors("Rock");
    // $paper = new RockPaperScissors("Paper");
    // $scissors = new RockPaperScissors("Scissors");
    //
    // $list_of_actions = array($rock, $paper, $scissors);
    return $app['twig']->render('front_page.html.twig');
  });

  $app->post('/result', function() {

    //Arrange
    $real_RockPaperScissors = new RockPaperScissors;

    //Act
    $result = $real_RockPaperScissors->makeRockPaperScissors($_POST['player1'], $_POST['player2']);


    //return $app['twig']->render('result_page.html.twig');
    return "$result";
  });

  return $app;
?>
