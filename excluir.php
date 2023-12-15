<?php
require "conexao.php";
$sql_delete = "DELETE FROM atletas WHERE id = ?";
$atleta_id = $_GET["atleta_id"];
$command_sql_delete = $conn->prepare($sql_delete);
if($command_sql_delete){
    $command_sql_delete->bind_param("s", $atleta_id);
    if($command_sql_delete->execute()){
        $command_sql_delete->close();
        $conn->close();
        header("Location: admin.php");

    }else{
        $command_sql_delete->close();
        $conn->close();
        header("Location: admin.php?erro=1");
        
    }}else{
        $conn->close();
        header("Location: admin.php?erro=2");

    }