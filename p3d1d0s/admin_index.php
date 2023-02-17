<?php
include("functions.php");
ob_start();
@session_start();
?>

<html>
<head>
<title>Administracao</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body link="#000000" vlink="#000000" alink="#000000">
<?php
if(isset($_SESSION['logged_in']))
{
$delete = $_GET['delete'];
?>
  <div align="center">
  <p><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Sistema de ADM 777 <a href="admin_index.php">Atualizar</a> - <a href="login1.php?logout=true">Logout</a> - <a href="login2.php">Master</a></strong></font></p>
  <hr>
  <font size="2" face="Verdana, Arial, Helvetica, sans-serif">
  <?php
        if($delete != "")
        {
                if(deleteRequest($delete))
                {
                        echo("Deletado com successo!<br>");
                }
        }
        showRequests();
  ?>
  </font>
</div>
<?php
}
?>
</body>
</html>