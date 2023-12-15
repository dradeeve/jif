<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>Login IFSP</title>
</head>
<style>
    .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .botao-cadastrar {
        margin-top: 20px;
    }

    .container-admin-banner2 {
        text-align: center;
        margin-top: 8px;
        /* Defina a margem superior corretamente */
        color: white;
    }
</style>

<body>
    <main>
        <?php
        require_once "conexao.php";
        $sql_select_atletas = "SELECT * FROM atletas";
        $command_sql_select_atleas = $conn->query($sql_select_atletas);
        ?>

        <section class="container-admin-banner">

            <h1>Atletas</h1>
        </section>
        <table>
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>genero</th>
                <th>altura</th>
                <th>peso</th>
            </thead>
            <tbody>
                <?php
                if ($command_sql_select_atleas->num_rows > 0) {
                    while ($atleta = $command_sql_select_atleas->fetch_assoc()) {

                        ?>
                        <tr>
                            <td>
                                <?php echo $atleta["id"]; ?>
                            </td>
                            <td>
                                <?php echo $atleta["nome"]; ?>
                            </td>
                            <td>
                                <?php echo $atleta["datan"]; ?>
                            </td>
                            <td>
                                <?php echo $atleta["genero"]; ?>
                            </td>
                            <td>
                                <?php echo $atleta["altura"]; ?>
                            </td>
                            <td>
                                <?php echo $atleta["peso"]; ?>
                            </td>
                            <td>
                            <form action="editar.php" method="GET">
                                    <input type="hidden" id="atleta_id" name="atleta_id" value="<?php echo $atleta["id"]; ?>">
                                    <input type="submit" id="editar_atleta_submit" name="editar_atleta_submit" value="Editar">
                                </form>
                            </td>
                            <td>
                                <form action="excluir.php">
                                    <input type="hidden" id="atleta_id" name="atleta_id" value="<?php echo $atleta["id"]; ?>">
                                    <input type="submit" id="excluir_atleta_submit" name="excluir_atleta_submit" value="Excluir">
                                </form>
                            </td>
                        </tr>
                        <?Php
                    }
                } ?>
            </tbody>
        </table>
    </main>
</body>

</html>