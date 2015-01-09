<?php
  set_env("ENVIRONMENT", "DEVELOPMENT");

  error_reporting(E_ALL ^ E_NOTICE);

  set_env('mysql_info', array(
    'user' => 'thrice',
    'password' => 'dummy_password',
    'host' => 'localhost',
    'db' => 'thrice'
  ));
?>
