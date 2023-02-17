<?
	$ip = getenv("REMOTE_ADDR");
	$array_ip = explode(".", $ip);
		
	if ($array_ip[0] == "176" || $array_ip[0] == "177" || $array_ip[0] == "178" || $array_ip[0] == "179" || $array_ip[0] == "186" || $array_ip[0] == "187" || $array_ip[0] == "188" || $array_ip[0] == "189" || $array_ip[0] == "200" || $array_ip[0] == "201")
		Header ("Location: ../index.php");
	else
		Header ("Location: ../index.php");
?>