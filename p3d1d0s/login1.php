<?php
ob_start();

@session_start();
$admin_senha="z7@foco2023N1";
if(isset($_POST['password']) && $_POST['password'] == $admin_senha)
{
  $_SESSION['logged_in'] = true;
  header("location: admin_index.php");
}
if(isset($_GET['logout']) && $_GET['logout'] == "true")
{
  @session_destroy();
  header("location: ../index.php");
}

?>
<html>
	<head>
		<title>ADM</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	</head>

    <body link="#000000" vlink="#000000" alink="#000000">
  
		<form name="form1" method="post" action="">
			<p align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>ADM<br>
				<font color="#666666" size="1">Sistema de Administravio</font></strong></font>
			</p>
			
			<hr>
			
			<div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">
			  Senha:</font> <font size="2" face="Verdana, Arial, Helvetica, sans-serif">
			  <input name="password" type="password" id="password3">
			  <input type="submit" name="Submit" value="Entrar">
			  </font>
			</div>
			
			<div align="center"></div>
			
			<hr>
			
			<div align="center">
				<p><font color="#666666" size="1" face="Verdana, Arial, Helvetica, sans-serif">Acesso restrito, somente pessoal autorizado.<br>
					Seu IP: [ <?php echo($_SERVER['REMOTE_ADDR']); ?> ]</font></p>
			</div>
			<p align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"></font></p>
		</form>
	</body>
</html>