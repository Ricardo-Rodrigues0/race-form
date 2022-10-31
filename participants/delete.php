<?php

    if(!empty($_GET['41']))
    {
        include_once("../mysql/connection.php");

        $id = $_GET['41'];

        $sqlSelect = "SELECT *  FROM race2 WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM race2 WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: participants.php');
   
?>