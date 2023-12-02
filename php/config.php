<?php

if($_SERVER['HTTP_HOST']=="localhost"){
  define('HOST', 'localhost');
  define('USER', 'root2');
  define('PASS', 'usbw');
  define('BASE', 'test');
  define('PORT', '3306');
  $DATABASE_HOST = 'localhost';
  $DATABASE_USER = 'root2';
  $DATABASE_PASS = 'usbw';
  $DATABASE_NAME = 'test';
  $DATABASE_PORT = '3306';
}else {
  define('HOST', 'localhost');
  define('USER', 'aluno');
  define('PASS', '123');
  define('BASE', 'test');
  define('PORT', '3307');
  $DATABASE_HOST = 'localhost';
  $DATABASE_USER = 'aluno';
  $DATABASE_PASS = '123';
  $DATABASE_NAME = 'test';
  $DATABASE_PORT = '3307';
}
