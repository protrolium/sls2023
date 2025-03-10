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
$config->userAuthSalt = '78803e005cab4acda2450f9dba0f05f98addc2f3'; 
$config->tableSalt = '63ac0d934361327b80cb564feb3e4c2f6ffba6ef'; 
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