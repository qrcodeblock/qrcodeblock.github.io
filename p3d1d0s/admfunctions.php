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
                        echo("<a href=\"admin_index.php?delete=".$request[1]."\">[Deletar]</a><br><hr>");
                        echo ("<hr>");
                }
        }
        
        return;
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