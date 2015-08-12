<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/RockPaperScissors.php";

  session_start();

  if (empty($_SESSION['rock_paper_scissors'])) {
    $_SESSION["rock_paper_scissors"] = array();
  }

  $app = new Silex/Application();
  $app['debug'] = true;
  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__."/../views"));

  $app->get("/", function() use ($app) {
    return $app['twig']->render('front_page.html.twig', array('artists' => RockPaperScissors::getAll()));
  });

  $app->post('/result', function() use ($app) {
    $rps = new RockPaperScissors($_POST['result']);
  });

  return $app;
?>
