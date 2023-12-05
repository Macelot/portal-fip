<?php
session_start();

require_once("../../php/Conn_mysql.php");

$dados = new Conn_mysql();
//definir a base de dados
$dados->getDB("fip");

$email_digitado = filter_input(INPUT_POST , 'email', FILTER_SANITIZE_EMAIL);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$password = $_POST['password'];


$_SESSION['user'] = $email_digitado;
$filtro = array(
    "where"=>array(
        'email' => $email_digitado,
        'senha' => $password 
    )
);
$resultado = $dados->getRows("usuarios",$filtro);
//echo $resultado ;
//echo json_encode($resultado);
//die();
header('Location: bemvindo.php');

?>

