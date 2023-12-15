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
    <link rel="icon" href="img/icone-serenatto.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>IFSP - Cadastrar Usuário</title>
</head>

<body>
    <main>
        <section class="container-admin-banner">

            <h1>Cadastro de Usuários</h1>

        </section>
        <section class="container-form">
            <?php require "conexao.php";
            $atleta_id = $_GET['atleta_id'];
            $sql = "SELECT * FROM atletas WHERE id = ?";
            $command_sql = $conn->prepare($sql);
            $command_sql->bind_param("s", $atleta_id);
            $command_sql->execute();
            $result = $command_sql->get_result();
            if ($result->num_rows > 0) {
                $atleta = $result->fetch_assoc();
            } ?>
            <form action="editar_processo.php" method="POST">

                <label for="atleta_nome">Nome</label>
                <input type="text" id="atleta_nome" name="atleta_nome"
                    placeholder="<?php echo $atleta['nome']; ?>" value="<?php echo $atleta['nome']; ?>" required>


                <label for="atleta_data_nascimento">Data de Nascimento</label>
                <input type="text" id="atleta_data_nascimento" name="atleta_data_nascimento"
                    placeholder="<?php echo $atleta['datan']; ?>" value="<?php echo $atleta['datan']; ?>" required>
                <label for="atleta_genero">Genero</label>
                <input name="atleta_genero" class="atleta_genero" placeholder="<?php echo $atleta['genero']; ?>"
                    value="<?php echo $atleta['genero']; ?>" required>
                <input name="atleta_altura" class="atleta_altura" placeholder="<?php echo $atleta['altura']; ?>"
                    value="<?php echo $atleta['altura']; ?>" required>
                <input name="atleta_peso" class="atleta_peso" placeholder="<?php echo $atleta['peso']; ?>"
                    value="<?php echo $atleta['peso']; ?>" required>
                <input type="hidden" name="atleta_id" id="atleta_id" value="<?php echo $atleta['id']; ?>">
                <div class="button_submit_box">
                    <input type="submit" name="editar" id="editar" value="Editar" />
                </div>
            </form>

        </section>
    </main>

    <script>
        document.getElementById("btn-tela-login").addEventListener("click", function () {
            window.location.href = "login.php"; // Substitua pela página de login real
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"
        integrity="sha512-Rdk63VC+1UYzGSgd3u2iadi0joUrcwX0IWp2rTh6KXFoAmgOjRS99Vynz1lJPT8dLjvo6JZOqpAHJyfCEZ5KoA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/index.js"></script>
</body>

</html>