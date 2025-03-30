<?php namespace ProcessWire;

if ($config->ajax) {
  // AJAX request, send JSON header, output JSON and exit
  header('Content-Type: application/json; charset=utf-8');
  echo $modules->get('SearchEngine')->renderResultsJSON();
  exit;
}