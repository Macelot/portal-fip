<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Redefinir senha</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/adminlte.css" rel="stylesheet">
	</head>
  <body>
<?php
// Change this to your connection info.
//header ('Content-type: text/html; charset=UTF-8');
//https://pt.stackoverflow.com/questions/40858/como-enviar-e-mail-do-localhost-usando-a-fun%c3%a7%c3%a3o-mail-do-php/41458#41458
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../Classes/PHPMailer-master/src/Exception.php';
require '../Classes/PHPMailer-master/src/PHPMailer.php';
require '../Classes/PHPMailer-master/src/SMTP.php';
error_reporting(E_ALL);
ini_set('display_errors',1);

// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['email'])) {
	// Could not get the data that should have been sent.
	echo '<div class="alert alert-danger" role="alert">';
	echo 'Por favor complete o formulário de recuperação de senha';
	echo ' <a href="javascript: history.go(-1)">Voltar</a>';
	echo '</div>';
	exit();
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['email'])) {
	// One or more values are empty.
	echo '<div class="alert alert-danger" role="alert">';
	echo 'Por favor complete o formulário de recuperação de senha';
	echo ' <a href="javascript: history.go(-1)">Voltar</a>';
	echo '</div>';
	exit();
}
//validade email
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	echo '<div class="alert alert-danger" role="alert">';
	echo 'Email inválido';
	echo '<a href="javascript: history.go(-1)">Voltar</a>';
	echo '</div>';
	exit();
}
require_once("Conn_mysql.php");
$db = new Conn_mysql(); 
$comando="use fip;";
$db->multisql($comando);

if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	echo '<div class="alert alert-danger" role="alert">';
	echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
	echo '<a href="javascript: history.go(-1)">Voltar</a>';
	echo '</div>';
	exit();
}

$email_digitado = filter_input(INPUT_POST , 'email', FILTER_SANITIZE_EMAIL);

$filtro = array(
	"where"=>array(
		'email' => $_POST['email'],
	),
	"select"=>"username",
	"return_type"=>"object"
);
$resultado = $db->getRows('usuarios',$filtro);
//echo $resultado[0]->username;
//echo json_encode($resultado);
if(!$resultado){
	echo '<div class="alert alert-danger" role="alert">';
	echo 'Verifique o email digitado: '.$_POST['email'];
	echo ' <a href="javascript: history.go(-1)">Voltar</a>';
	echo '</div>';
	exit();
}
$user__consultado = $resultado[0]->username;
if(isset($user__consultado)){
	$assunto = "Redefinição de senha";
	$assunto = '=?UTF-8?B?'.base64_encode($assunto).'?=';
	$uniqid = uniqid();
	//$local=$_SERVER['HTTP_HOST'];
	$local = 'http://localhost/portal/php/updatepassword.php?email=';
	$from = 'marcelojtelles@gmail.com';
	$activate_link = $local . $email_digitado . '&username=' . $user__consultado. '&code=' . $uniqid;

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Mailer = "smtp";
	//$mail->SMTPDebug  = 1;  
	$mail->SMTPAuth   = TRUE;
	$mail->SMTPSecure = "tls";
	$mail->Port       = 587;
	$mail->Host       = "smtp.gmail.com";
	$mail->Username   = $EMAIL;
	$mail->Password   = $SENHAAPPMAIL;//se tiver senha de duas etapas, precisa ativar senha de app:
	//https://support.google.com/mail/answer/7126229?hl=pt-BR#zippy=%2Cetapa-verificar-se-o-imap-est%C3%A1-ativado
	//https://support.google.com/accounts/answer/185833?hl=pt-BR
	//Step 6: Set the required parameters for email header and body:
	$mail->IsHTML(true);
	$mail->AddAddress($email_digitado, $user__consultado);
	$mail->SetFrom($EMAIL, $NOME);
	$mail->Subject = $assunto;
	$message = '<p>Olá '.$user__consultado.'.</p><br>';
	$message .= '<p>Por favor clique no link a seguir para redefinir sua senha:<br> <a href="' . $activate_link . '">' . $activate_link . '</a></p>';
	$message .= 'Seu usuário é <strong>'.$user__consultado.'<strong>';
	$mail->Body = $message;
	if(!$mail->Send()){
		//echo "Message was not sent";
		echo '<div class="alert alert-danger" role="alert">';
		echo 'Erro no envio da mensagem<br>';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
		echo 'Erro resetpassword_001';
		echo '</div>';
		exit;
	}
	echo '<div class="alert alert-info" role="alert">';
	echo '<strong>E-mail enviado.</strong> <br> Entre no seu email <strong>'.$email_digitado.'</strong> e clique no link enviado para redefinir sua senha.<br>';
	echo 'Enviamos um email do remetente <strong>'.$from .'</strong> , siga as instruções deste email para redefinir sua senha!<br>';
	echo '</div>';
} else {
  	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
    echo '<div class="alert alert-danger" role="alert">';
    echo 'Email não registrado em nossa base de dados.';
    echo '<br>'.$email_digitado.'<br>';
    echo '<a href="javascript: history.go(-1)">Voltar</a>';
    echo '</div>';
}
?>
</body>
</html>