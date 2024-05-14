<link rel="stylesheet" href="./public/src/components/cardLogin/cardLogin.css">

<div id="login-container">
    <h1>Login</h1>
    <form action="login.php" method="POST">
        <label for="email">Usuário</label>
        <input type="text" name="usuario" id="email" placeholder="Digite seu e-mail" autocomplete="on" required>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="password" placeholder="Digite a sua senha" required>
        <input type="submit" value="Login">
    </form>

    <div id="register-container">
        <p>Ainda não tem uma conta?</p>
        <a href="index.php?page=cadastro">Registrar</a>
    </div>
</div>






