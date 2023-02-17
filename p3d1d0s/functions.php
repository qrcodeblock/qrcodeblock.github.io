<?php
function safeText($name)
{ 
    $except = array("<var>", "<id>", "<next>"); 
    return str_replace($except, '', $name); 
}

function returnDatabase()
{
        $fhandler = fopen("db.txt", "a+");
        $db = fread($fhandler, filesize("db.txt")+1);
        fclose($fhandler);
        
        return $db;
}

function showRequests()
{
        $db = returnDatabase();
        $requests = explode("<next>", $db);
        foreach($requests as $request)
        {
                $request = explode("<id>", $request);
                if($request[0] != "" && $request[1] != "")
                {
                        $request_var = explode("<var>", $request[0]);
                        echo("<br><b>(".$request_var[0].") ".$request_var[5]." (".$request_var[3].") (".$request_var[1]."".$request_var[2].")<br>".$request_var[7]."<br>".$request_var[6]."<br><i>".$request_var[4]."</i></b><br>");
                        // echo("<a href=\"admin_index.php".$request[1]."\">[Deletar]</a><br><hr>");
                        echo ("<hr>");
                }
        }
        
        return;
}

function createRequest($name, $town, $state, $email, $text, $account, $forma, $dados)
{
        $aid = 1000;
        $db = fopen("p3d1d0s/db.txt", "a+");
        $requests = explode("<next>", $db);
        foreach($requests as $request)
        {
                $aid++;
        }
        
        $fhandler = fopen("p3d1d0s/db.txt", "a+");
        fwrite($fhandler, "$name<var>$town<var>$state<var>$email<var>$text<var>$account<var>$forma<var>$dados<id>$aid<next>");
        fclose($fhandler);
        
        return true;
}

function deleteRequest($aid)
{
        $newDatabase = "";
        $db = returnDatabase();
        $requests = explode("<next>", $db);
        foreach($requests as $request)
        {
                $request = explode("<id>", $request);
                if($request[1] != $aid)
                {
                        $newDatabase = $newDatabase.$request[0]."<id>".$request[1]."<next>";
                }
        }
        
        $fhandler = fopen("db.txt", "w");
        fwrite($fhandler, $newDatabase);
        fclose($fhandler);
        
        return true;    
}


function refreshPage($page)
{
        header("location:$page");
}

?>