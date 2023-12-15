<?php
require "conexao.php";
$sql_edit = "UPDATE atletas SET nome = ?, datan = ?, genero = ?, altura = ?, peso = ? WHERE id = ?";
$atleta_id = $_POST["atleta_id"];
$atleta_nome = $_POST["atleta_nome"];
$atleta_data_n = $_POST["atleta_data_nascimento"];
$atleta_genero = $_POST["atleta_genero"];
$atleta_altura = $_POST["atleta_altura"];
$atleta_peso = $_POST["atleta_peso"];
$command_sql_edit = $conn->prepare($sql_edit);
echo "$sql_edit";
if ($command_sql_edit) {
    $command_sql_edit->bind_param("sssssi", $atleta_nome, $atleta_data_n, $atleta_genero, $atleta_altura, $atleta_peso, $atleta_id);
    if ($command_sql_edit->execute()) {
        $command_sql_edit->close();
        $conn->close();
        header("Location: admin.php");
        exit();

    } else {
        $command_sql_edit->close();
        $conn->close();
        header("Location: admin.php?erro=1");
        exit();

    }
} else {


    $conn->close();
    header("Location: admin.php?erro=2");
    echo "$command_sql_edit";
    exit();

}
;