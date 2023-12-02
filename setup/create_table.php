<?php
date_default_timezone_set('America/Sao_Paulo');
require_once('../php/Conn_mysql.php');

$vData_ = date("Y-m-dH:i:s");
$time_start = microtime(true);
echo "<br> inicio:".$vData_;
echo " ".$time_start;

$db = new Conn_mysql(); 

// $comando="CREATE database fip;";
// $db->multisql($comando);

$comando="use fip;";
$db->multisql($comando);

$comando="CREATE TABLE IF NOT EXISTS `projetos` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`titulo` varchar(100) NOT NULL,
	`orientador` varchar(50) NOT NULL,
	`participantes` varchar(255) NOT NULL,
	`area` varchar(70) NOT NULL,
	`created` timestamp NULL DEFAULT CURRENT_TIMESTAMP, 
	`modified` timestamp NULL ON UPDATE CURRENT_TIMESTAMP ,
	PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8  AUTO_INCREMENT=1 ;";

$db->multisql($comando);

//imprimindo os times finais
$vData_ = date("Y-m-dH:i:s");
$time_end = microtime(true);
echo "<br>fim".$vData_;
echo " fim microtme ".$time_end;

//calculando o tempo total
$time = $time_end - $time_start;
echo "<br> tempo de processamento do Insert=>".$time;

?>
