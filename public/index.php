<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <main>
        <h1>Cadastro</h1>
        <form action="../app/controllers/UserController.php" method="post">
            <label for="username">Nome:</label>
            <input type="text" name="username" required>
            <br>
            <label for="email">E-mail</label>
            <input type="email" name="email" required>
            <br>
            <label for="code">Código Único:</label>
            <input type="text" name="code" required>
            <br>
            <label for="title">Título</label>
            <input type="text" name="title" required readonly>
            <br>
            <label for="password">Senha:</label>
            <input type="password" name="password" required>
            <br>
            <input type="submit" value="Cadastrar">
        </form>

        <span>Já possui cadastro? <a href="./app/views/login.php">Clique Aqui</a></span>
    </main>
</body>

</html>