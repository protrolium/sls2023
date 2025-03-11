<?php namespace ProcessWire;

$config->rockdevtools = true;

/** @var Config $config */
$config->debug = true;
$config->advanced = true;
$config->dbHost = 'localhost';
$config->dbName = 'sls';
$config->dbUser = 'root';
$config->dbPass = 'root';
$config->dbPort = '3306';
$config->userAuthSalt = '44979bedc29501bc2505ad99cc5f9e9a844e124c'; 
$config->tableSalt = '069f69ad0ac48471573b56bd886be9651cf8aa22'; 
$config->httpHosts = array('localhost:8888', 'localhost:8888');

// this prevents logout when switching between
// desktop and mobile in chrome devtools
$config->sessionFingerprint = false;

// RockFrontend
$config->livereload = 1;

// RockMigrations
// $config->filesOnDemand = 'https://your-live.site/';
// $config->rockmigrations = [
//   'syncSnippets' => true,
// ];

// tracy config for ddev development
// $config->tracy = [
//   'outputMode' => 'development',
//   'guestForceDevelopmentLocal' => true,
//   'forceIsLocal' => true,
//   'localRootPath' => '/Users/xyz/code/yourproject/',
//   'numLogEntries' => 100, // for RockMigrations
// ];

// $config->rockpagebuilder = [
//   "createView" => "latte",
// ];