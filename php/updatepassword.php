<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Redefinir senha</title>

    <link href="../dist/css/styleRegister.css" rel="stylesheet" type="text/css">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="../dist/css/fontGoogle.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">

    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">

    <!-- Alertas Sweet-->
    <script src="../dist/js/swal.js"></script>

    <!-- validar email-->
    <script src="../dist/js/valida-email.js"></script>

      
  </head>
<body>
  <?php
  $email_ = filter_input(INPUT_GET , 'email', FILTER_SANITIZE_EMAIL);
  $user__ = filter_input(INPUT_GET , 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  ?>
  <div class="register">
    <h1>Redefinir Senha</h1>
    <form action="finishpassword.php" method="post" autocomplete="off">
      <label for="username">
        <i class="fas fa-user"></i>
      </label>
      <input type="text" name="username" placeholder="Usuário" id="username" value="<?php echo $user__?>" required readonly>
      <label for="password">
        <i class="fas fa-lock"></i>
      </label>
      <input type="password" name="password" placeholder="Senha" id="password" required >*
      <label for="email">
        <i class="fas fa-envelope"></i>
      </label>
      <input type="email" name="email" placeholder="Email" id="email" value="<?php echo $email_?>" required readonly>
      <input type="submit" value="Redefinir senha">
      <p>* Senha deve ter entre 5 e 20 caracteres</p>
      <p> (apenas letras e números).</p>
    </form>
  </div>
</body>
</html>
