<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Redefinir senha</title>

     <!-- Bootstrap core CSS -->
     <link href="../dist/css/adminlte.css" rel="stylesheet">
  </head>
  <body>
<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
	// Could not get the data that should have been sent.
	echo '<div class="alert alert-danger" role="alert">';
	echo 'Por favor complete o formulário de cadastro';
  echo ' <a href="javascript: history.go(-1)">Voltar</a>';
	echo '</div>';
	exit();
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
	// One or more values are empty.
	echo '<div class="alert alert-danger" role="alert">';
	echo 'Por favor complete o formulário de cadastro';
  echo ' <a href="javascript: history.go(-1)">Voltar</a>';
	echo '</div>';
	exit();
}
//validade email
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	echo '<div class="alert alert-danger" role="alert">';
	echo 'Email inválido';
  echo ' <a href="javascript: history.go(-1)">Voltar</a>';
	echo '</div>';
	exit();
}
//valide username
if (preg_match('/[A-Za-z0-9]+/', $_POST['username']) == 0) {
		echo '<div class="alert alert-danger" role="alert">';
		echo 'Usuário inválido!';
    echo ' <a href="javascript: history.go(-1)">Voltar</a>';
		echo '</div>';
		exit();
}
//check length
if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
	echo '<div class="alert alert-danger" role="alert">';
	echo 'Senha deve ter entre 5 e 20 caracteres';
  echo '<a href="javascript: history.go(-1)">Voltar</a>';
	echo '</div>';
	exit();
}
$email_digitado = filter_input(INPUT_POST , 'email', FILTER_SANITIZE_EMAIL);
$user__digitado = filter_input(INPUT_POST , 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$password = $_POST['password'];


require_once("Conn_mysql.php");
$dados = new Conn_mysql();
$comando="use fip;";
$dados->multisql($comando);

$condicao = array(
  "where"=>array(
      "email"=> $email_digitado,
      "username"=> $user__digitado
  ),
  "return_type"=>'single'
);
$colunas = array(
  'senha'=> $password,
); 
$resultado = $dados->update($colunas,$condicao,"usuarios");

//echo json_encode($resultado);
if($resultado['message']=="ok"){
  echo '<div class="alert alert-info" role="alert">';
  echo '<strong>Sua senha foi alterada</strong>, Você já pode entrar no sistema! <br><a href="../index.html">Login</a>';
	echo '</div>';
}else{
  echo '<div class="alert alert-danger" role="alert">';
	echo 'Erro no banco de dados register_002';
	echo '</div>';
}

?>
</body>
</html>