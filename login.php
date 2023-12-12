<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="Gp/assets/css/style.css">
  <link rel="stylesheet" href="Gp/assets/css/index.css">
  <link rel="stylesheet" href="Gp/assets/css/admin.css">
  <link rel="stylesheet" href="Gp/assets/css/form.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
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
    margin-top: 8px; /* Defina a margem superior corretamente */
    color:white;
  }
</style>

<body>
  <main>
    <section class="container-admin-banner">
      
      <h1>Login IFSP</h1>
    </section>
    <div class="container-form">
      <form action="processar-login.php" method="POST">

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Digite o seu e-mail" required>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" placeholder="Digite a sua senha" required>

        <input type="submit" class="botao-cadastrar" value="Entrar" />
      </form>
    </div>
    <div class="form-container">
      <form action="cadastrar-usuario.php" method="POST">
        <input type="submit" class="botao-cadastrar" value="Usuário novo" />
      </form>
    </div>

  </main>
</body>

</html>