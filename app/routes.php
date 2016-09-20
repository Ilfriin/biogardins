<?php

// Home page

$app->get('/', function(){
  ob_start(); // start buffering HTML output
  require '../src/controllers/home.php';
  $view = ob_get_clean(); // assign HTML output to $view
  return $view;
});


$app->get('/test', function(){
  ob_start(); // start buffering HTML output
  require '../src/controllers/test.php';
  $view = ob_get_clean(); // assign HTML output to $view
  return $view;
});
